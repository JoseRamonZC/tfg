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

/* proveedor/index.html.twig */
class __TwigTemplate_75b86b6027be8668179e763465a1635df7815052b569ee69053315e5de4f2ac7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proveedor/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proveedor/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proveedor/index.html.twig", 1);
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

        echo "Proveedores";
        
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
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Proveedores</h1>
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" class=\"text-gray-600 text-hover-primary\">Inicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Proveedores</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"#\" class=\"btn btn-sm btn-primary btn-flex\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearProveedor\" id=\"kt_toolbar_primary_button\">
                    <span class=\"svg-icon svg-icon-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                            <rect opacity=\"0.5\" x=\"11.364\" y=\"20.364\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-90 11.364 20.364)\" fill=\"currentColor\" />
                            <rect x=\"4.36396\" y=\"11.364\" width=\"16\" height=\"2\" rx=\"1\" fill=\"currentColor\" />
                        </svg>
                    </span>
                    Añadir proveedor</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">

        <form action=\"\" method=\"get\">
            <div class=\"card mb-7\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"position-relative w-md-400px me-md-2\">
                            <input type=\"text\" class=\"form-control form-control-solid ps-10\" name=\"proveedor\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["proveedor"]) || array_key_exists("proveedor", $context) ? $context["proveedor"] : (function () { throw new RuntimeError('Variable "proveedor" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Proveedor\" />
                        </div>
                        <div class=\"d-flex align-items-center\">
                            <button type=\"submit\" class=\"btn btn-primary me-5\">Buscar</button>
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
                                <th>PROVEEDOR</th>
                                <th>DIRECCIÓN</th>
                                <th>DESCRIPCIÓN</th>
                                <th width=\"50px\">DETALLE</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proveedores"]) || array_key_exists("proveedores", $context) ? $context["proveedores"] : (function () { throw new RuntimeError('Variable "proveedores" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 59
            echo "                                <tr>
                                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "direccion", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                    <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "descripcion", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                    <td class=\"text-center align-middle\">
                                        <a class=\"btn btn-primary btn-icon\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppliers_show", ["id" => twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 64)]), "html", null, true);
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
        // line 70
        echo "                        </tbody>
                    </table> 
                </div>
            </div>
            <div class=\"card-footer\">
                <div class=\"navigation\">
                    ";
        // line 76
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["proveedores"]) || array_key_exists("proveedores", $context) ? $context["proveedores"] : (function () { throw new RuntimeError('Variable "proveedores" does not exist.', 76, $this->source); })()));
        echo "
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearProveedor\" tabindex=\"-1\" aria-labelledby=\"crearProveedorLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form action=\"\" method=\"post\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Añadir nuevo proveedor</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"mb-3\">
                            <label for=\"proveedor\" class=\"form-label\">Proveedor</label>
                            <input type=\"text\" name=\"proveedor\" required class=\"form-control\" id=\"proveedor\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"direccion\" class=\"form-label\">Dirección</label>
                            <input type=\"text\" name=\"direccion\" class=\"form-control\" id=\"direccion\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"descripcion\" class=\"form-label\">Descripción</label>
                            <input type=\"text\" name=\"descripcion\" class=\"form-control\" id=\"descripcion\" autocomplete=\"off\">
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">Añadir proveedor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "proveedor/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 76,  182 => 70,  170 => 64,  165 => 62,  161 => 61,  157 => 60,  154 => 59,  150 => 58,  124 => 35,  96 => 10,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Proveedores{% endblock %}
{% block body %}
    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Proveedores</h1>
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('app_index') }}\" class=\"text-gray-600 text-hover-primary\">Inicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Proveedores</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"#\" class=\"btn btn-sm btn-primary btn-flex\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearProveedor\" id=\"kt_toolbar_primary_button\">
                    <span class=\"svg-icon svg-icon-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                            <rect opacity=\"0.5\" x=\"11.364\" y=\"20.364\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-90 11.364 20.364)\" fill=\"currentColor\" />
                            <rect x=\"4.36396\" y=\"11.364\" width=\"16\" height=\"2\" rx=\"1\" fill=\"currentColor\" />
                        </svg>
                    </span>
                    Añadir proveedor</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">

        <form action=\"\" method=\"get\">
            <div class=\"card mb-7\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"position-relative w-md-400px me-md-2\">
                            <input type=\"text\" class=\"form-control form-control-solid ps-10\" name=\"proveedor\" value=\"{{ proveedor }}\" placeholder=\"Proveedor\" />
                        </div>
                        <div class=\"d-flex align-items-center\">
                            <button type=\"submit\" class=\"btn btn-primary me-5\">Buscar</button>
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
                                <th>PROVEEDOR</th>
                                <th>DIRECCIÓN</th>
                                <th>DESCRIPCIÓN</th>
                                <th width=\"50px\">DETALLE</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for objeto in proveedores %}
                                <tr>
                                    <td>{{ objeto.nombre }}</td>
                                    <td>{{ objeto.direccion }}</td>
                                    <td>{{ objeto.descripcion }}</td>
                                    <td class=\"text-center align-middle\">
                                        <a class=\"btn btn-primary btn-icon\" href=\"{{ path('suppliers_show',{'id':objeto.id}) }}\">
                                            <i class=\"las la-eye fs-2x\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table> 
                </div>
            </div>
            <div class=\"card-footer\">
                <div class=\"navigation\">
                    {{ knp_pagination_render(proveedores) }}
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearProveedor\" tabindex=\"-1\" aria-labelledby=\"crearProveedorLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form action=\"\" method=\"post\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Añadir nuevo proveedor</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"mb-3\">
                            <label for=\"proveedor\" class=\"form-label\">Proveedor</label>
                            <input type=\"text\" name=\"proveedor\" required class=\"form-control\" id=\"proveedor\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"direccion\" class=\"form-label\">Dirección</label>
                            <input type=\"text\" name=\"direccion\" class=\"form-control\" id=\"direccion\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"descripcion\" class=\"form-label\">Descripción</label>
                            <input type=\"text\" name=\"descripcion\" class=\"form-control\" id=\"descripcion\" autocomplete=\"off\">
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">Añadir proveedor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

{% endblock %}", "proveedor/index.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\proveedor\\index.html.twig");
    }
}
