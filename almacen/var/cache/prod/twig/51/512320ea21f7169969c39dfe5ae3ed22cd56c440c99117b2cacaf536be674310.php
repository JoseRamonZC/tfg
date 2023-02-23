<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* usuario/index.html.twig */
class __TwigTemplate_20515f56ca9f15953ac8f903311e6ce08e6dfdf21b3a99bee4c1621f0a248920 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Usuarios";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Usuarios</h1>
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" class=\"text-gray-600 text-hover-primary\">Inicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Usuarios</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"#\" class=\"btn btn-sm btn-primary btn-flex\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearUsuario\" id=\"kt_toolbar_primary_button\">
                    <span class=\"svg-icon svg-icon-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                            <rect opacity=\"0.5\" x=\"11.364\" y=\"20.364\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-90 11.364 20.364)\" fill=\"currentColor\" />
                            <rect x=\"4.36396\" y=\"11.364\" width=\"16\" height=\"2\" rx=\"1\" fill=\"currentColor\" />
                        </svg>
                    </span>
                    Añadir usuario</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <form action=\"\" method=\"get\">
            <div class=\"card mb-7\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"position-relative w-md-400px me-md-2\">
                            <input type=\"text\" class=\"form-control form-control-solid ps-10\" name=\"usuario\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["usuario"] ?? null), "html", null, true);
        echo "\" placeholder=\"Nombre/Usuario/Email\" />
                        </div>
                        <div class=\"d-flex align-items-center\">
                            <button type=\"submit\" class=\"btn btn-primary me-5\">Buscar</button>
                            <a id=\"kt_horizontal_search_advanced_link\" class=\"btn btn-link\" data-bs-toggle=\"collapse\" href=\"#kt_advanced_search_form\">Búsqueda avanzada</a>
                        </div>
                    </div>
                    <div class=\"collapse\" id=\"kt_advanced_search_form\">
                        <div class=\"separator separator-dashed mt-9 mb-6\"></div>
                        <div class=\"row g-8\">
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Roles:</label>
                                <div class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid mb-3\">
                                    <input class=\"form-check-input\" type=\"checkbox\" ";
        // line 47
        if (twig_in_filter("ROLE_GESTOR", ($context["roles"] ?? null))) {
            echo "checked";
        }
        echo " name=\"roles[]\" value=\"ROLE_GESTOR\" />
                                    <label class=\"form-check-label\">Gestor de almacén</label>
                                </div>
                                <div class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid mb-3\">
                                    <input class=\"form-check-input\" type=\"checkbox\" ";
        // line 51
        if (twig_in_filter("ROLE_ADMINISTRADOR", ($context["roles"] ?? null))) {
            echo "checked";
        }
        echo " name=\"roles[]\" value=\"ROLE_ADMINISTRADOR\" />
                                    <label class=\"form-check-label\">Administrador</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                        <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>USUARIO</th>
                                <th>EMAIL</th>
                                <th>ROL</th>
                                <th>ALMACÉN</th>
                                <th width=\"50px\">ESTADO</th>
                                <th width=\"50px\">DETALLE</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usuarios"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 77
            echo "                                <tr>
                                    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 78), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "apellidos", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                                    <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "username", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                                    <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "email", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                                    <td class=\"center\">
                                        ";
            // line 82
            if (twig_in_filter("ROLE_GESTOR", twig_get_attribute($this->env, $this->source, $context["objeto"], "roles", [], "any", false, false, false, 82))) {
                // line 83
                echo "                                            Gestor de almacén<br />
                                        ";
            }
            // line 85
            echo "                                        ";
            if (twig_in_filter("ROLE_ADMINISTRADOR", twig_get_attribute($this->env, $this->source, $context["objeto"], "roles", [], "any", false, false, false, 85))) {
                // line 86
                echo "                                            Administrador
                                        ";
            }
            // line 88
            echo "                                    </td>
                                    <td class=\"center\">
                                        ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["almacenes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["almacen"]) {
                // line 91
                echo "                                            ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["almacen"], "id", [], "any", false, false, false, 91), twig_get_attribute($this->env, $this->source, $context["objeto"], "almacenes", [], "any", false, false, false, 91))) {
                    // line 92
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $context["almacen"], "html", null, true);
                    echo "<br />
                                            ";
                }
                // line 94
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['almacen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                                    </td>
                                    <td class=\"text-center align-middle\">
                                        ";
            // line 97
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "estado", [], "any", false, false, false, 97), "1"))) {
                // line 98
                echo "                                            <i class=\"lar la-check-circle fs-2x text-primary\"></i>
                                        ";
            } else {
                // line 100
                echo "                                            <i class=\"lar la-times-circle fs-2x text-danger\"></i>
                                        ";
            }
            // line 102
            echo "                                    </td>          
                                    <td class=\"text-center align-middle\">
                                        <a class=\"btn btn-primary btn-icon\" href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_show", ["id" => twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            echo "\">
                                            <i class=\"las la-eye fs-2x\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                        </tbody>
                    </table> 
                </div>
            </div>
            <div class=\"card-footer\">
                <div class=\"navigation\">
                    ";
        // line 116
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["usuarios"] ?? null));
        echo "
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearUsuario\" tabindex=\"-1\" aria-labelledby=\"crearUsuarioLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form action=\"\" method=\"post\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Añadir nuevo usuario</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"mb-3\">
                            <label for=\"nombre\" class=\"form-label\">Nombre</label>
                            <input type=\"text\" name=\"nombre\" required class=\"form-control\" id=\"nombre\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"apellidos\" class=\"form-label\">Apellidos</label>
                            <input type=\"text\" name=\"apellidos\" class=\"form-control\" id=\"apellidos\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"usuario\" class=\"form-label\">Usuario</label>
                            <input type=\"text\" name=\"username\"  required class=\"form-control\" id=\"usuario\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"email\" class=\"form-label\">Correo electrónico</label>
                            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"password\" class=\"form-label\">Contraseña</label>
                            <input type=\"password\" name=\"password\" required class=\"form-control\" id=\"password\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Roles:</label>
                            <div class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid mb-3\">
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"roles[]\" value=\"ROLE_GESTOR\" />
                                <label class=\"form-check-label\">Gestor de almacén</label>
                            </div>
                            <div class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid\">
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"roles[]\" value=\"ROLE_ADMINISTRADOR\" />
                                <label class=\"form-check-label\">Administrador</label>
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Almacenes:</label>
                            ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["almacenes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 165
            echo "                                <div class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid mb-3\">
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"almacenes[]\" value=\"";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 166), "html", null, true);
            echo "\" />
                                    <label class=\"form-check-label\">";
            // line 167
            echo twig_escape_filter($this->env, $context["objeto"], "html", null, true);
            echo "</label>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">Añadir usuario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "usuario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 170,  306 => 167,  302 => 166,  299 => 165,  295 => 164,  244 => 116,  236 => 110,  224 => 104,  220 => 102,  216 => 100,  212 => 98,  210 => 97,  206 => 95,  200 => 94,  194 => 92,  191 => 91,  187 => 90,  183 => 88,  179 => 86,  176 => 85,  172 => 83,  170 => 82,  165 => 80,  161 => 79,  155 => 78,  152 => 77,  148 => 76,  118 => 51,  109 => 47,  93 => 34,  66 => 10,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "usuario/index.html.twig", "C:\\xampp\\htdocs\\almacen\\Almacen\\templates\\usuario\\index.html.twig");
    }
}
