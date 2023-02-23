<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Almacen;
use App\Entity\Log;

class DefaultController extends AbstractController {

    public function getIPAddress() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function header() {
        $usuario = $this->getUser();
        $em = $this->getDoctrine();

        $actual_link = $_SERVER['REQUEST_URI'];

        $log = new Log();

        $log->setAccion($actual_link);
        $log->setIp($this->getIPAddress());
        $log->setUsuario($usuario ? $usuario->getId() : null);

        $em->getManager()->persist($log);
        $em->getManager()->flush();

        if (in_array("ROLE_GESTOR", $usuario->getRoles())) {
            $almacenes = $em->getRepository(Almacen::class)->findAll();
        } else {
            $almacenes = null;
        }

        return $this->render('default/header.html.twig', [
                    'url' => $actual_link,
                    'almacenes' => $almacenes
        ]);
    }

    public function index(MailerInterface $mailer) {
        $usuario = $this->getUser();
        if (!$usuario) {
            return $this->redirectToRoute('app_login');
        }

        if (in_array("ROLE_GESTOR", $usuario->getRoles()) and $usuario->getAlmacenes()) {
            return $this->redirectToRoute('warehouse_stock_index', ['almacen' => $usuario->getAlmacenes()[0]]);
        }
        if (in_array("ROLE_ADMINISTRADOR", $usuario->getRoles())) {
            return $this->redirectToRoute('users_index');
        }

//        MailerInterface $mailer,
//        $email = (new TemplatedEmail())
//                ->from('info@serglobinmelilla.es')
//                ->to(new Address('ricardonb@serglobin.es'))
//                ->subject('Thanks for signing up!')
//                ->htmlTemplate('email/prueba.html.twig')
//                ->context([
//            'expiration_date' => new \DateTime('+7 days'),
//            'username' => 'foo'
//        ]);
//
//        try {
//            $mailer->send($email);
//        } catch (TransportExceptionInterface $e) {
//            // algún error impidió el envío del correo electrónico; mostrar un
//            // mensaje de error o intente reenviar el mensaje
//        }

        return $this->redirectToRoute('app_profile');
    }

    public function profile(UserInterface $usuario, UserPasswordEncoderInterface $encoder, Request $request, $ex = null, $cod = null, $msg = null) {

        $em = $this->getDoctrine();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $em = $this->getDoctrine();

            $passLast = $usuario->getPassword();
            $passTemp = $request->request->get('password');

            if ($passTemp != null && $passTemp != "") {
                $password = $encoder->encodePassword($usuario, $request->request->get('password'));
                $usuario->setPassword($password);
            } else {
                $usuario->setPassword($passLast);
            }

            $usuario->setNombre($request->request->get('nombre'));
            $usuario->setApellidos($request->request->get('apellidos'));
            $usuario->setEmail($request->request->get('email'));

            $em->getManager()->flush();

            return $this->redirectToRoute('app_profile', array(
                        'excepcion' => 1,
                        'codigo' => '¡Correcto!',
                        'mensaje' => 'Has modificado tu perfil correctamente',
            ));
        }

        if ($request->query->get('excepcion')) {
            $ex = $request->query->get('excepcion');
            $cod = $request->query->get('codigo');
            $msg = $request->query->get('mensaje');
        }

        return $this->render('default/profile.html.twig', [
                    'excepcion' => $ex,
                    'codigo' => $cod,
                    'mensaje' => $msg,
        ]);
    }

    public function login(AuthenticationUtils $authenticationUtils) {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_index');
        }
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('default/login.html.twig', [
                    'last_username' => $lastUsername,
                    'error' => $error
        ]);
    }

    public function logout() {
        if ($this->getUser()) {
            $this->get('security.token_storage')->setToken(null);
            $session = $this->get('session');
            $session->set('key', 'value');
            $session->clear();
            $session->invalidate();
        }
        return $this->render('default/logout.html.twig');
    }

}
