<?php

namespace App\Controller;

use App\Entity\Usuario;
use App\Entity\Almacen;
use App\Repository\UsuarioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Knp\Component\Pager\PaginatorInterface;

class UserController extends AbstractController {

    public function index(UserPasswordEncoderInterface $encoder, Request $request, $ex = null, $cod = null, $msg = null, PaginatorInterface $paginator) {
        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $comprobar = $em->getRepository(Usuario::class)->findOneByUsername($request->request->get('username'));
            if (isset($comprobar)) {
                return $this->redirectToRoute('users_index', array(
                            'excepcion' => 2,
                            'codigo' => '¡Error!',
                            'mensaje' => 'El usuario ya está en uso',
                ));
            }

            $usuario = new Usuario();

            $usuario->setNombre($request->request->get('nombre'));
            $usuario->setApellidos($request->request->get('apellidos'));
            $usuario->setUsername($request->request->get('username'));
            $usuario->setEmail($request->request->get('email'));
            $usuario->setEstado(1);
            $usuario->setRoles($request->request->get('roles'));
            $usuario->setAlmacenes($request->request->get('almacenes'));

            $password = $encoder->encodePassword($usuario, $request->request->get('password'));
            $usuario->setPassword($password);

            $em->getManager()->persist($usuario);
            $em->getManager()->flush();

            return $this->redirectToRoute('users_index', array(
                        'excepcion' => 1,
                        'codigo' => '¡Correcto!',
                        'mensaje' => 'El usuario se ha añadido correctamente',
            ));
        }

        if (!isset($_SESSION['buscar_usuario'])) {
            $_SESSION['buscar_usuario'] = "";
        }

        $usuario = $request->query->get('usuario');
        $roles = $request->query->get('roles');

        if ($usuario) {
            $qusuario = 'AND (x.email LIKE :usuario OR x.username LIKE :usuario OR x.nombre LIKE :usuario OR x.apellidos LIKE :usuario) ';
        } else {
            $qusuario = null;
        }

        if ($roles) {
            $qroles = "AND JSON_EXTRACT(x.roles, '$[0]') IN (:roles) ";
        } else {
            $qroles = null;
        }

        $qUsuarios = $em->getManager()->createQuery(''
                . 'SELECT x FROM App:Usuario x '
                . 'WHERE 1 = 1 '
                . $qusuario
                . $qroles
                . 'ORDER BY x.username ASC'
        );

        if ($usuario) {
            $qUsuarios->setParameter('usuario', "%" . $usuario . "%");
        }

        if ($roles) {
            $qUsuarios->setParameter('roles', $roles);
        }

        $almacenes = $em->getRepository(Almacen::class)->findAll();

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }
        // Paginate the results of the query
        $pagination = $paginator->paginate(
                // Doctrine Query, not results
                $qUsuarios,
                // Define the page parameter
                $request->query->getInt('page', 1),
                // Items per page
                10
        );

        return $this->render('usuario/index.html.twig', [
                    'usuarios' => $pagination,
                    'usuario' => $usuario,
                    'almacenes' => $almacenes,
                    'roles' => $roles,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function show(UserPasswordEncoderInterface $encoder, Usuario $usuario, Request $request, $ex = null, $cod = null, $msg = null) {

        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $passLast = $usuario->getPassword();

            $comprobar = $em->getRepository(Usuario::class)->findOneByUsername($request->request->get('username'));
            if ($comprobar) {
                if ($comprobar != $usuario) {
                    return $this->redirectToRoute('users_show', array(
                                'id' => $usuario->getId(),
                                'excepcion' => 2,
                                'codigo' => '¡Error!',
                                'mensaje' => 'El usuario no se ha podido modificar, el usuario ya está en uso',
                    ));
                }
            }

            $usuario->setNombre($request->request->get('nombre'));
            $usuario->setApellidos($request->request->get('apellidos'));
            $usuario->setUsername($request->request->get('username'));
            $usuario->setEmail($request->request->get('email'));
            $usuario->setRoles($request->request->get('roles'));
            $usuario->setAlmacenes($request->request->get('almacenes'));
            $usuario->setEstado($request->request->get('estado'));

            $passTemp = $request->request->get('password');

            if ($passTemp != null && $passTemp != "") {
                $password = $encoder->encodePassword($usuario, $request->request->get('password'));
                $usuario->setPassword($password);
            } else {
                $usuario->setPassword($passLast);
            }

            $em->getManager()->flush();

            return $this->redirectToRoute('users_show', array(
                        'id' => $usuario->getId(),
                        'excepcion' => 1,
                        'codigo' => '¡Correcto!',
                        'mensaje' => 'El usuario se ha modificado correctamente',
            ));
        }
        $almacenes = $em->getRepository(Almacen::class)->findAll();

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }

        return $this->render('usuario/show.html.twig', [
                    'usuario' => $usuario,
                    'almacenes' => $almacenes,
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function delete(Request $request, Usuario $usuario, UsuarioRepository $usuarioRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$usuario->getId(), $request->request->get('_token'))) {
            $usuarioRepository->remove($usuario);
        }

        return $this->redirectToRoute('users_index', [], Response::HTTP_SEE_OTHER);
    }

}

