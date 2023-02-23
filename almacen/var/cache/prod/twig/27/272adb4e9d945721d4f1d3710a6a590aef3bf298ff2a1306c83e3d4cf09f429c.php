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

/* usuario/show.html.twig */
class __TwigTemplate_e0b8c16da521dbdb804e27d75de5a9ed1c0c466c928ca6d931ee70ce37592537 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Detalle del usuario";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle del usuario</h1>
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" class=\"text-gray-600 text-hover-primary\">Inicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_index");
        echo "\" class=\"text-gray-600 text-hover-primary\">Usuarios</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del usuario</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_index");
        echo "\" class=\"btn btn-sm btn-primary\" >
                    Volver al listado de usuarios</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"card\">
            <form action=\"\" method=\"post\">
                <div class=\"card-body\">
                    <div class=\"mb-3\">
                        <label for=\"nombre\" class=\"form-label\">Nombre</label>
                        <input type=\"text\" name=\"nombre\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "nombre", [], "any", false, false, false, 31), "html", null, true);
        echo "\" class=\"form-control\" id=\"nombre\" autocomplete=\"off\">
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"apellidos\" class=\"form-label\">Apellidos</label>
                        <input type=\"text\" name=\"apellidos\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "apellidos", [], "any", false, false, false, 35), "html", null, true);
        echo "\" class=\"form-control\" id=\"apellidos\" autocomplete=\"off\">
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"usuario\" class=\"form-label\">Usuario</label>
                        <input type=\"text\" name=\"username\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "username", [], "any", false, false, false, 39), "html", null, true);
        echo "\" required class=\"form-control\" id=\"usuario\" autocomplete=\"off\">
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"email\" class=\"form-label\">Correo electrónico</label>
                        <input type=\"email\" name=\"email\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "email", [], "any", false, false, false, 43), "html", null, true);
        echo "\" class=\"form-control\" id=\"email\" autocomplete=\"off\">
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"password\" class=\"form-label\">Contraseña</label>
                        <input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" autocomplete=\"off\">
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label\">Roles:</label>
                        <div class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid mb-3\">
                            <input class=\"form-check-input\" ";
        // line 53
        if (twig_in_filter("ROLE_GESTOR", twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "roles", [], "any", false, false, false, 53))) {
            echo "checked";
        }
        echo " type=\"checkbox\" name=\"roles[]\" value=\"ROLE_GESTOR\" />
                            <label class=\"form-check-label\">Gestor de almacén</label>
                        </div>
                        <div class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid\">
                            <input class=\"form-check-input\" ";
        // line 57
        if (twig_in_filter("ROLE_ADMINISTRADOR", twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "roles", [], "any", false, false, false, 57))) {
            echo "checked";
        }
        echo " type=\"checkbox\" name=\"roles[]\" value=\"ROLE_ADMINISTRADOR\" />
                            <label class=\"form-check-label\">Administrador</label>
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Almacenes:</label>
                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["almacenes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 64
            echo "                            <div class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid mb-3\">
                                <input class=\"form-check-input\" ";
            // line 65
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 65), twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "almacenes", [], "any", false, false, false, 65))) {
                echo "checked";
            }
            echo "  type=\"checkbox\" name=\"almacenes[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" />
                                <label class=\"form-check-label\">";
            // line 66
            echo twig_escape_filter($this->env, $context["objeto"], "html", null, true);
            echo "</label>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                    </div>
                    <label class=\"form-label\">Estado</label>
                    <div class=\"form-check mb-3\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"estado\" value=\"1\" id=\"activo\" ";
        // line 72
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "estado", [], "any", false, false, false, 72), 1))) {
            echo "checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"activo\">
                            Activo
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"estado\" value=\"0\" id=\"inactivo\" ";
        // line 78
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "estado", [], "any", false, false, false, 78), 0))) {
            echo "checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"inactivo\">
                            Inactivo
                        </label>
                    </div>
                </div>
                <div class=\"card-footer\">
                    <button type=\"submit\" class=\"btn btn-primary\">Guardar modificación</button>
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "usuario/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 78,  179 => 72,  174 => 69,  165 => 66,  157 => 65,  154 => 64,  150 => 63,  139 => 57,  130 => 53,  117 => 43,  110 => 39,  103 => 35,  96 => 31,  81 => 19,  72 => 13,  66 => 10,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "usuario/show.html.twig", "C:\\xampp\\htdocs\\almacen\\Almacen\\templates\\usuario\\show.html.twig");
    }
}
