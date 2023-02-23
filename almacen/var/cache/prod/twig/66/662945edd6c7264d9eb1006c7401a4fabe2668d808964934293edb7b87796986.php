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

/* proveedor/show.html.twig */
class __TwigTemplate_67346eaf208eb83c3c2d5d1141ae059f7e0f5abf65af1e4b001b3d7d4fbe7f46 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "proveedor/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Detalle del proveedor";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle del proveedor</h1>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppliers_index");
        echo "\" class=\"text-gray-600 text-hover-primary\">Proveedores</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del proveedor</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppliers_index");
        echo "\" class=\"btn btn-sm btn-primary\" >
                    Volver al listado de proveedores</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"card\">
            <form action=\"\" method=\"post\">
                <div class=\"card-body\">
                    <div class=\"mb-3\">
                        <label for=\"proveedor\" class=\"form-label\">Proveedor</label>
                        <input type=\"text\" name=\"proveedor\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["proveedor"] ?? null), "nombre", [], "any", false, false, false, 31), "html", null, true);
        echo "\" class=\"form-control\" id=\"proveedor\" autocomplete=\"off\">
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"direccion\" class=\"form-label\">Dirección</label>
                        <input type=\"text\" name=\"direccion\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["proveedor"] ?? null), "direccion", [], "any", false, false, false, 35), "html", null, true);
        echo "\" class=\"form-control\" id=\"direccion\" autocomplete=\"off\">
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"descripcion\" class=\"form-label\">Descripción</label>
                        <input type=\"text\" name=\"descripcion\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["proveedor"] ?? null), "descripcion", [], "any", false, false, false, 39), "html", null, true);
        echo "\" class=\"form-control\" id=\"descripcion\" autocomplete=\"off\">
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
        return "proveedor/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  103 => 35,  96 => 31,  81 => 19,  72 => 13,  66 => 10,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "proveedor/show.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\proveedor\\show.html.twig");
    }
}
