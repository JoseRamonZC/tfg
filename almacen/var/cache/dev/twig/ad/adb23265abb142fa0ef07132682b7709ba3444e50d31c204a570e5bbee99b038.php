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
class __TwigTemplate_f2ec7820033d219e6222c17805a9be7078a43be1ca0da04864bdd751d4862019 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "usuario/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Detalle del usuario";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 31, $this->source); })()), "nombre", [], "any", false, false, false, 31), "html", null, true);
        echo "\" class=\"form-control\" id=\"nombre\" autocomplete=\"off\">
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"apellidos\" class=\"form-label\">Apellidos</label>
                        <input type=\"text\" name=\"apellidos\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 35, $this->source); })()), "apellidos", [], "any", false, false, false, 35), "html", null, true);
        echo "\" class=\"form-control\" id=\"apellidos\" autocomplete=\"off\">
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"usuario\" class=\"form-label\">Usuario</label>
                        <input type=\"text\" name=\"username\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 39, $this->source); })()), "username", [], "any", false, false, false, 39), "html", null, true);
        echo "\" required class=\"form-control\" id=\"usuario\" autocomplete=\"off\">
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"email\" class=\"form-label\">Correo electrónico</label>
                        <input type=\"email\" name=\"email\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), "html", null, true);
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
        if (twig_in_filter("ROLE_GESTOR", twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 53, $this->source); })()), "roles", [], "any", false, false, false, 53))) {
            echo "checked";
        }
        echo " type=\"checkbox\" name=\"roles[]\" value=\"ROLE_GESTOR\" />
                            <label class=\"form-check-label\">Gestor de almacén</label>
                        </div>
                        <div class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid\">
                            <input class=\"form-check-input\" ";
        // line 57
        if (twig_in_filter("ROLE_ADMINISTRADOR", twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 57, $this->source); })()), "roles", [], "any", false, false, false, 57))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenes"]) || array_key_exists("almacenes", $context) ? $context["almacenes"] : (function () { throw new RuntimeError('Variable "almacenes" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 64
            echo "                            <div class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid mb-3\">
                                <input class=\"form-check-input\" ";
            // line 65
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 65), twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 65, $this->source); })()), "almacenes", [], "any", false, false, false, 65))) {
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 72, $this->source); })()), "estado", [], "any", false, false, false, 72), 1))) {
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 78, $this->source); })()), "estado", [], "any", false, false, false, 78), 0))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  220 => 78,  209 => 72,  204 => 69,  195 => 66,  187 => 65,  184 => 64,  180 => 63,  169 => 57,  160 => 53,  147 => 43,  140 => 39,  133 => 35,  126 => 31,  111 => 19,  102 => 13,  96 => 10,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Detalle del usuario{% endblock %}
{% block body %}
    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle del usuario</h1>
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('app_index') }}\" class=\"text-gray-600 text-hover-primary\">Inicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('users_index') }}\" class=\"text-gray-600 text-hover-primary\">Usuarios</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del usuario</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"{{ path('users_index') }}\" class=\"btn btn-sm btn-primary\" >
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
                        <input type=\"text\" name=\"nombre\" value=\"{{ usuario.nombre }}\" class=\"form-control\" id=\"nombre\" autocomplete=\"off\">
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"apellidos\" class=\"form-label\">Apellidos</label>
                        <input type=\"text\" name=\"apellidos\" value=\"{{ usuario.apellidos }}\" class=\"form-control\" id=\"apellidos\" autocomplete=\"off\">
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"usuario\" class=\"form-label\">Usuario</label>
                        <input type=\"text\" name=\"username\" value=\"{{ usuario.username }}\" required class=\"form-control\" id=\"usuario\" autocomplete=\"off\">
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"email\" class=\"form-label\">Correo electrónico</label>
                        <input type=\"email\" name=\"email\" value=\"{{ usuario.email }}\" class=\"form-control\" id=\"email\" autocomplete=\"off\">
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"password\" class=\"form-label\">Contraseña</label>
                        <input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" autocomplete=\"off\">
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label\">Roles:</label>
                        <div class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid mb-3\">
                            <input class=\"form-check-input\" {% if \"ROLE_GESTOR\" in usuario.roles %}checked{% endif %} type=\"checkbox\" name=\"roles[]\" value=\"ROLE_GESTOR\" />
                            <label class=\"form-check-label\">Gestor de almacén</label>
                        </div>
                        <div class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid\">
                            <input class=\"form-check-input\" {% if \"ROLE_ADMINISTRADOR\" in usuario.roles %}checked{% endif %} type=\"checkbox\" name=\"roles[]\" value=\"ROLE_ADMINISTRADOR\" />
                            <label class=\"form-check-label\">Administrador</label>
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Almacenes:</label>
                        {% for objeto in almacenes %}
                            <div class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid mb-3\">
                                <input class=\"form-check-input\" {% if objeto.id in usuario.almacenes %}checked{% endif %}  type=\"checkbox\" name=\"almacenes[]\" value=\"{{ objeto.id }}\" />
                                <label class=\"form-check-label\">{{ objeto }}</label>
                            </div>
                        {% endfor %}
                    </div>
                    <label class=\"form-label\">Estado</label>
                    <div class=\"form-check mb-3\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"estado\" value=\"1\" id=\"activo\" {% if usuario.estado == 1 %}checked{% endif %}>
                        <label class=\"form-check-label\" for=\"activo\">
                            Activo
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"estado\" value=\"0\" id=\"inactivo\" {% if usuario.estado == 0 %}checked{% endif %}>
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
{% endblock %}", "usuario/show.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\usuario\\show.html.twig");
    }
}
