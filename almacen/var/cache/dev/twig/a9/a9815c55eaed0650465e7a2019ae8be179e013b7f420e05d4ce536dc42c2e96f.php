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

/* almacen/inventario/lote.html.twig */
class __TwigTemplate_0e16ec7547c076602155ff3db88d8e9ec3334342fc4118eb701484930c2880cc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/inventario/lote.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/inventario/lote.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "almacen/inventario/lote.html.twig", 1);
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

        echo "Detalle de la stock";
        
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
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle del lote ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lote"]) || array_key_exists("lote", $context) ? $context["lote"] : (function () { throw new RuntimeError('Variable "lote" does not exist.', 7, $this->source); })()), "lote", [], "any", false, false, false, 7), "html", null, true);
        echo " del producto ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 7, $this->source); })()), "producto", [], "any", false, false, false, 7), "nombre", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_stock_index", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" class=\"text-gray-600 text-hover-primary\">Stock</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_stock_show", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "id" => twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" class=\"text-gray-600 text-hover-primary\">Producto</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del lote</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_stock_show", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "id" => twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-primary\" >
                    Volver al producto</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"card\">
            <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
                <div class=\"card-body\">
                    <div class=\"mb-3\">
                        <label for=\"cantidad\" class=\"form-label\">Cantidad</label>
                        <input type=\"number\" name=\"cantidad\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lote"]) || array_key_exists("lote", $context) ? $context["lote"] : (function () { throw new RuntimeError('Variable "lote" does not exist.', 34, $this->source); })()), "cantidad", [], "any", false, false, false, 34), "html", null, true);
        echo "\" step=\"any\" min=\"0\" required class=\"form-control\" id=\"cantidad\" autocomplete=\"off\">
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"fechaCaducidad\" class=\"form-label\">Fecha de caducidad</label>
                        <input value=\"";
        // line 38
        ((twig_get_attribute($this->env, $this->source, (isset($context["lote"]) || array_key_exists("lote", $context) ? $context["lote"] : (function () { throw new RuntimeError('Variable "lote" does not exist.', 38, $this->source); })()), "fechaCaducidad", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lote"]) || array_key_exists("lote", $context) ? $context["lote"] : (function () { throw new RuntimeError('Variable "lote" does not exist.', 38, $this->source); })()), "fechaCaducidad", [], "any", false, false, false, 38), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "\" name=\"fechaCaducidad\" type=\"text\" class=\"form-control\" id='kt_flatpickr' pattern=\"(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}\" title=\"La fecha debe formarse como dd-mm-yyyy\">
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
        return "almacen/inventario/lote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 38,  137 => 34,  122 => 22,  113 => 16,  107 => 13,  101 => 10,  93 => 7,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Detalle de la stock{% endblock %}
{% block body %}
    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle del lote {{ lote.lote }} del producto {{ almacenProducto.producto.nombre }}</h1>
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('app_index') }}\" class=\"text-gray-600 text-hover-primary\">Inicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('warehouse_stock_index',{'almacen':almacen.id}) }}\" class=\"text-gray-600 text-hover-primary\">Stock</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('warehouse_stock_show',{'almacen':almacen.id,'id':almacenProducto.id}) }}\" class=\"text-gray-600 text-hover-primary\">Producto</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del lote</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"{{ path('warehouse_stock_show',{'almacen':almacen.id,'id':almacenProducto.id}) }}\" class=\"btn btn-sm btn-primary\" >
                    Volver al producto</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"card\">
            <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
                <div class=\"card-body\">
                    <div class=\"mb-3\">
                        <label for=\"cantidad\" class=\"form-label\">Cantidad</label>
                        <input type=\"number\" name=\"cantidad\" value=\"{{ lote.cantidad }}\" step=\"any\" min=\"0\" required class=\"form-control\" id=\"cantidad\" autocomplete=\"off\">
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"fechaCaducidad\" class=\"form-label\">Fecha de caducidad</label>
                        <input value=\"{{ lote.fechaCaducidad ? lote.fechaCaducidad | date('d-m-Y') }}\" name=\"fechaCaducidad\" type=\"text\" class=\"form-control\" id='kt_flatpickr' pattern=\"(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}\" title=\"La fecha debe formarse como dd-mm-yyyy\">
                    </div>
                </div>
                <div class=\"card-footer\">
                    <button type=\"submit\" class=\"btn btn-primary\">Guardar modificación</button>
                </div>
            </form>
        </div>
    </div>
{% endblock %}", "almacen/inventario/lote.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\almacen\\inventario\\lote.html.twig");
    }
}
