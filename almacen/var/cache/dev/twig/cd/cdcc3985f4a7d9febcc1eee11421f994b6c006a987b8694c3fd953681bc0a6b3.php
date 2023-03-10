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

/* almacen/importacion/lot.html.twig */
class __TwigTemplate_c9b0fecff4cdefb5cc98fd7a7b559baac1b22bb14723f1cd2f3c59e1ed4ed3b2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/importacion/lot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/importacion/lot.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "almacen/importacion/lot.html.twig", 1);
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

        echo "Detalle de la recepción de pedidos";
        
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
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle del lote de la recepción de pedidos con factura ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["importacion"]) || array_key_exists("importacion", $context) ? $context["importacion"] : (function () { throw new RuntimeError('Variable "importacion" does not exist.', 7, $this->source); })()), "factura", [], "any", false, false, false, 7), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_import_index", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" class=\"text-gray-600 text-hover-primary\">Recepción de pedidos</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_import_show", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "id" => twig_get_attribute($this->env, $this->source, (isset($context["importacion"]) || array_key_exists("importacion", $context) ? $context["importacion"] : (function () { throw new RuntimeError('Variable "importacion" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" class=\"text-gray-600 text-hover-primary\">Detalle de la recepción de pedidos</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del lote de la recepción de pedidos</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_import_show", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "id" => twig_get_attribute($this->env, $this->source, (isset($context["importacion"]) || array_key_exists("importacion", $context) ? $context["importacion"] : (function () { throw new RuntimeError('Variable "importacion" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-primary\" >
                    Volver al detalle de la importacion</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"card\">
            <form action=\"\" method=\"post\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-12 col-md-4 mb-3\">
                                            <label for=\"producto\" class=\"form-label\">Producto:</label>
                                            <select name=\"producto\" class=\"form-select form-select-solid\" required select2=\"producto\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 41
            echo "                                                    <option ";
            if ((0 === twig_compare($context["objeto"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["importacionLote"]) || array_key_exists("importacionLote", $context) ? $context["importacionLote"] : (function () { throw new RuntimeError('Variable "importacionLote" does not exist.', 41, $this->source); })()), "lote", [], "any", false, false, false, 41), "producto", [], "any", false, false, false, 41), "producto", [], "any", false, false, false, 41)))) {
                echo "selected";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 41), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                                            </select>
                                        </div>
                                        <div class=\"col-12 col-md-4 mb-3\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label\">Lote:</label>
                                                <input name=\"lote\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["importacionLote"]) || array_key_exists("importacionLote", $context) ? $context["importacionLote"] : (function () { throw new RuntimeError('Variable "importacionLote" does not exist.', 48, $this->source); })()), "lote", [], "any", false, false, false, 48), "lote", [], "any", false, false, false, 48), "html", null, true);
        echo "\" type=\"text\" required class=\"form-control\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-md-4 mb-3\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label\">Cantidad:</label>
                                                <input name=\"cantidad\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["importacionLote"]) || array_key_exists("importacionLote", $context) ? $context["importacionLote"] : (function () { throw new RuntimeError('Variable "importacionLote" does not exist.', 54, $this->source); })()), "cantidad", [], "any", false, false, false, 54), "html", null, true);
        echo "\" type=\"number\" min=\"0\" class=\"form-control\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-md-4 mb-3\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label\">Fecha de caducidad:</label>
                                                <input name=\"fechaCaducidad\" value=\"";
        // line 60
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["importacionLote"]) || array_key_exists("importacionLote", $context) ? $context["importacionLote"] : (function () { throw new RuntimeError('Variable "importacionLote" does not exist.', 60, $this->source); })()), "lote", [], "any", false, false, false, 60), "fechaCaducidad", [], "any", false, false, false, 60)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["importacionLote"]) || array_key_exists("importacionLote", $context) ? $context["importacionLote"] : (function () { throw new RuntimeError('Variable "importacionLote" does not exist.', 60, $this->source); })()), "lote", [], "any", false, false, false, 60), "fechaCaducidad", [], "any", false, false, false, 60), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "\" type=\"text\" class=\"form-control\" id='kt_flatpickr' pattern=\"(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}\" title=\"La fecha debe formarse como dd-mm-yyyy\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-md-4 mb-3\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label\">Precio:</label>
                                                <input name=\"precio\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["importacionLote"]) || array_key_exists("importacionLote", $context) ? $context["importacionLote"] : (function () { throw new RuntimeError('Variable "importacionLote" does not exist.', 66, $this->source); })()), "precio", [], "any", false, false, false, 66), "html", null, true);
        echo "\" type=\"number\" step=\"any\" min=\"0\" required class=\"form-control\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class=\"card-footer\">
                    <button type=\"submit\" name=\"boton\" value=\"editar\" class=\"btn btn-primary\">Guardar modificación</button>
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
        return "almacen/importacion/lot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 66,  185 => 60,  176 => 54,  167 => 48,  160 => 43,  145 => 41,  141 => 40,  120 => 22,  111 => 16,  105 => 13,  99 => 10,  93 => 7,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Detalle de la recepción de pedidos{% endblock %}
{% block body %}
    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle del lote de la recepción de pedidos con factura {{ importacion.factura }}</h1>
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('app_index') }}\" class=\"text-gray-600 text-hover-primary\">Inicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('warehouse_import_index',{'almacen':almacen.id}) }}\" class=\"text-gray-600 text-hover-primary\">Recepción de pedidos</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('warehouse_import_show',{'almacen':almacen.id,'id':importacion.id}) }}\" class=\"text-gray-600 text-hover-primary\">Detalle de la recepción de pedidos</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del lote de la recepción de pedidos</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"{{ path('warehouse_import_show',{'almacen':almacen.id,'id':importacion.id}) }}\" class=\"btn btn-sm btn-primary\" >
                    Volver al detalle de la importacion</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"card\">
            <form action=\"\" method=\"post\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-12 col-md-4 mb-3\">
                                            <label for=\"producto\" class=\"form-label\">Producto:</label>
                                            <select name=\"producto\" class=\"form-select form-select-solid\" required select2=\"producto\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                                {% for objeto in productos %}
                                                    <option {% if objeto == importacionLote.lote.producto.producto %}selected{% endif %} value=\"{{ objeto.id }}\">{{ objeto.nombre }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"col-12 col-md-4 mb-3\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label\">Lote:</label>
                                                <input name=\"lote\" value=\"{{ importacionLote.lote.lote }}\" type=\"text\" required class=\"form-control\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-md-4 mb-3\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label\">Cantidad:</label>
                                                <input name=\"cantidad\" value=\"{{ importacionLote.cantidad }}\" type=\"number\" min=\"0\" class=\"form-control\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-md-4 mb-3\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label\">Fecha de caducidad:</label>
                                                <input name=\"fechaCaducidad\" value=\"{{ importacionLote.lote.fechaCaducidad ? importacionLote.lote.fechaCaducidad | date('d-m-Y') }}\" type=\"text\" class=\"form-control\" id='kt_flatpickr' pattern=\"(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}\" title=\"La fecha debe formarse como dd-mm-yyyy\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-md-4 mb-3\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label\">Precio:</label>
                                                <input name=\"precio\" value=\"{{ importacionLote.precio }}\" type=\"number\" step=\"any\" min=\"0\" required class=\"form-control\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class=\"card-footer\">
                    <button type=\"submit\" name=\"boton\" value=\"editar\" class=\"btn btn-primary\">Guardar modificación</button>
                </div>
            </form>
        </div>
    </div>
{% endblock %}", "almacen/importacion/lot.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\almacen\\importacion\\lot.html.twig");
    }
}
