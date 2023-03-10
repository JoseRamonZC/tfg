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

/* almacen/show.html.twig */
class __TwigTemplate_b12f54af0b487686e19e2fc0f57e2da918c7ac66fcc951b0000bf97a9defbdd9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "almacen/show.html.twig", 1);
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

        echo "Detalle del almacén";
        
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
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle del almacén \"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 7, $this->source); })()), "nombre", [], "any", false, false, false, 7), "html", null, true);
        echo "\"</h1>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouses_index");
        echo "\" class=\"text-gray-600 text-hover-primary\">Almacenes</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del almacén</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouses_index");
        echo "\" class=\"btn btn-sm btn-primary\" >
                    Volver al listado de almacenes</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"mb-5 hover-scroll-x\">
            <div class=\"d-grid\">
                <ul class=\"nav nav-tabs flex-nowrap text-nowrap\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 active btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_almacen\">
                            <i class=\"las la-warehouse fs-2x\"></i> Detalle del almacén
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_stocks\">
                            <i class=\"las la-boxes fs-2x\"></i> Stock
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_importaciones\">
                            <i class=\"las la-file-invoice fs-2x\"></i> Recepción de pedidos
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_traslados\">
                            <i class=\"las la-truck-moving fs-2x\"></i> Traslados
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_asignaciones\">
                            <i class=\"las la-dolly fs-2x\"></i> Asignación de materiales
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"tab-content\">
            <div class=\"tab-pane fade show active\" id=\"kt_tab_almacen\" role=\"tabpanel\">
                <div class=\"card\">
                    <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
                        <div class=\"card-header\">
                            <div class=\"card-title d-flex align-items-center\">
                                <h3>Almacén</h3>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"mb-3\">
                                <label for=\"almacen\" class=\"form-label\">Almacén</label>
                                <input type=\"text\" name=\"almacen\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 69, $this->source); })()), "nombre", [], "any", false, false, false, 69), "html", null, true);
        echo "\" class=\"form-control\" id=\"almacen\" autocomplete=\"off\">
                            </div>
                        </div>
                        <div class=\"card-footer\">
                            <button type=\"submit\" class=\"btn btn-primary\">Guardar modificación</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"tab-pane fade show\" id=\"kt_tab_stocks\" role=\"tabpanel\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title d-flex align-items-center\">
                            <h3>Stock</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                <thead>
                                    <tr>
                                        <th>FOTO</th>
                                        <th>NOMBRE</th>
                                        <th>ID</th>
                                        <th>CÓDIGO</th>
                                        <th>REFERENCIA</th>
                                        <th>CÓDIGO DE BARRA</th>
                                        <th>CATEGORÍA</th>
                                        <th width=\"50px\">CANTIDAD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inventario"]) || array_key_exists("inventario", $context) ? $context["inventario"] : (function () { throw new RuntimeError('Variable "inventario" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 102
            echo "                                        <tr>
                                            <td>
                                                ";
            // line 104
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 104), "foto", [], "any", false, false, false, 104)) {
                // line 105
                echo "                                                    <img width=\"100px\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_photo", ["id" => twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 105)]), "html", null, true);
                echo "\" />
                                                ";
            } else {
                // line 107
                echo "                                                    <img width=\"100px\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/noimagen.png"), "html", null, true);
                echo "\" />
                                                ";
            }
            // line 109
            echo "                                            </td>
                                            <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 110), "nombre", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
                                            <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
                                            <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 112), "codigo", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
                                            <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 113), "referencia", [], "any", false, false, false, 113), "html", null, true);
            echo "</td>
                                            <td>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 114), "codigoBarra", [], "any", false, false, false, 114), "html", null, true);
            echo "</td>
                                            <td>
                                                ";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 116), "categoria", [], "any", false, false, false, 116), "html", null, true);
            echo "<br />
                                                ";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 117), "subcategoria", [], "any", false, false, false, 117), "html", null, true);
            echo "
                                            </td>
                                            <td class=\"text-right align-middle \">
                                                ";
            // line 120
            if ((0 >= twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "cantidad", [], "any", false, false, false, 120), twig_get_attribute($this->env, $this->source, $context["objeto"], "umbral", [], "any", false, false, false, 120)))) {
                // line 121
                echo "                                                    <i class=\"las la-exclamation-triangle text-warning\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Stock por debajo del umbral\"></i>
                                                ";
            }
            // line 123
            echo "                                                <span data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Umbral del producto: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "umbral", [], "any", false, false, false, 123), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "cantidad", [], "any", false, false, false, 123), "html", null, true);
            echo "</span>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane fade show\" id=\"kt_tab_importaciones\" role=\"tabpanel\">
                <form action=\"\" method=\"get\">
                    <div class=\"card mb-7\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center row\">
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Tipo de fecha</span>
                                    </label>
                                    <select name=\"tipoFecha\" class=\"form-select form-select-solid\" data-control=\"select2\" data-hide-search=\"true\" data-placeholder=\"Tipo de fecha\">
                                        <option value=\"fechaCreado\" >Registro</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Desde</span>
                                    </label>
                                    <input type=\"text\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["desde"]) || array_key_exists("desde", $context) ? $context["desde"] : (function () { throw new RuntimeError('Variable "desde" does not exist.', 150, $this->source); })()), "d-m-Y"), "html", null, true);
        echo "\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"desde\" />
                                </div>
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Hasta</span>
                                    </label>
                                    <input type=\"text\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["hasta"]) || array_key_exists("hasta", $context) ? $context["hasta"] : (function () { throw new RuntimeError('Variable "hasta" does not exist.', 156, $this->source); })()), "d-m-Y"), "html", null, true);
        echo "\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"hasta\" />
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <button type=\"submit\" class=\"btn btn-primary me-5\">Buscar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title d-flex align-items-center\">
                            <h3>Recepción de pedidos</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                <thead>
                                    <tr>
                                        <th>PEDIDO</th>
                                        <th>PRODUCTOS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["importaciones"]) || array_key_exists("importaciones", $context) ? $context["importaciones"] : (function () { throw new RuntimeError('Variable "importaciones" does not exist.', 183, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 184
            echo "                                        <tr>
                                            <td>
                                                <b>Factura:</b> ";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "factura", [], "any", false, false, false, 186), "html", null, true);
            echo "<br />
                                                <b>Albarán:</b> ";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "albaran", [], "any", false, false, false, 187), "html", null, true);
            echo "<br />
                                                <b>Fecha:</b> ";
            // line 188
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "fecha", [], "any", false, false, false, 188), "d-m-Y"), "html", null, true);
            echo "<br />
                                                <b>Proveedor:</b> ";
            // line 189
            ((twig_get_attribute($this->env, $this->source, $context["objeto"], "proveedor", [], "any", false, false, false, 189)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "proveedor", [], "any", false, false, false, 189), "nombre", [], "any", false, false, false, 189), "html", null, true))) : (print ("")));
            ((twig_get_attribute($this->env, $this->source, $context["objeto"], "proveedor", [], "any", false, false, false, 189)) ? (print (twig_escape_filter($this->env, (" - " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "proveedor", [], "any", false, false, false, 189), "direccion", [], "any", false, false, false, 189)), "html", null, true))) : (print ("")));
            echo "
                                            </td>
                                            <td>
                                                <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                                    <thead>
                                                        <tr>
                                                            <th>PRODUCTO</th>
                                                            <th>LOTE</th>
                                                            <th>CANTIDAD</th>
                                                            <th class=\"text-right\">PRECIO</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        ";
            // line 202
            $context["totalPrecio"] = 0;
            // line 203
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["objeto"], "lotes", [], "any", false, false, false, 203));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 204
                echo "                                                            <tr>
                                                                <td>";
                // line 205
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "lote", [], "any", false, false, false, 205), "producto", [], "any", false, false, false, 205), "producto", [], "any", false, false, false, 205), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 206
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "lote", [], "any", false, false, false, 206), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 207
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "cantidad", [], "any", false, false, false, 207), "html", null, true);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 208
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 208), 2, ",", "."), "html", null, true);
                echo " €/ud (";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 208) * twig_get_attribute($this->env, $this->source, $context["producto"], "cantidad", [], "any", false, false, false, 208)), 2, ",", "."), "html", null, true);
                echo " €)</td>
                                                                ";
                // line 209
                $context["totalPrecio"] = ((isset($context["totalPrecio"]) || array_key_exists("totalPrecio", $context) ? $context["totalPrecio"] : (function () { throw new RuntimeError('Variable "totalPrecio" does not exist.', 209, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 209) * twig_get_attribute($this->env, $this->source, $context["producto"], "cantidad", [], "any", false, false, false, 209)));
                // line 210
                echo "                                                            </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "                                                        <tr>
                                                            <td class=\"text-right\" colspan=\"5\"><b>Total: ";
            // line 213
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalPrecio"]) || array_key_exists("totalPrecio", $context) ? $context["totalPrecio"] : (function () { throw new RuntimeError('Variable "totalPrecio" does not exist.', 213, $this->source); })()), 2, ",", "."), "html", null, true);
            echo " €</b></td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane fade show\" id=\"kt_tab_traslados\" role=\"tabpanel\">
                <form action=\"\" method=\"get\">
                    <div class=\"card mb-7\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center row\">
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Tipo de fecha</span>
                                    </label>
                                    <select name=\"tipoFecha\" class=\"form-select form-select-solid\" data-control=\"select2\" data-hide-search=\"true\" data-placeholder=\"Tipo de fecha\">
                                        <option value=\"fechaCreado\" >Registro</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Desde</span>
                                    </label>
                                    <input type=\"text\" value=\"";
        // line 243
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["desde"]) || array_key_exists("desde", $context) ? $context["desde"] : (function () { throw new RuntimeError('Variable "desde" does not exist.', 243, $this->source); })()), "d-m-Y"), "html", null, true);
        echo "\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"desde\" />
                                </div>
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Hasta</span>
                                    </label>
                                    <input type=\"text\" value=\"";
        // line 249
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["hasta"]) || array_key_exists("hasta", $context) ? $context["hasta"] : (function () { throw new RuntimeError('Variable "hasta" does not exist.', 249, $this->source); })()), "d-m-Y"), "html", null, true);
        echo "\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"hasta\" />
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <button type=\"submit\" class=\"btn btn-primary me-5\">Buscar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title d-flex align-items-center\">
                            <h3>Traslados</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                <thead>
                                    <tr>
                                        <th>ALMACÉN</th>
                                        <th>FECHA</th>
                                        <th>PRODUCTOS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traslados"]) || array_key_exists("traslados", $context) ? $context["traslados"] : (function () { throw new RuntimeError('Variable "traslados" does not exist.', 277, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 278
            echo "                                        <tr>
                                            <td>
                                                ";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "almacenA", [], "any", false, false, false, 280), "html", null, true);
            echo " -> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "almacenB", [], "any", false, false, false, 280), "html", null, true);
            echo "
                                                ";
            // line 281
            if (twig_get_attribute($this->env, $this->source, $context["objeto"], "observaciones", [], "any", false, false, false, 281)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "observaciones", [], "any", false, false, false, 281), "html", null, true);
            }
            // line 282
            echo "                                            </td>
                                            <td>";
            // line 283
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "fecha", [], "any", false, false, false, 283), "d-m-Y"), "html", null, true);
            echo "</td>
                                            <td>
                                                <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                                    <tbody>
                                                        ";
            // line 287
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["objeto"], "lotes", [], "any", false, false, false, 287));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 288
                echo "                                                            <tr>
                                                                <td>";
                // line 289
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "lote", [], "any", false, false, false, 289), "producto", [], "any", false, false, false, 289), "producto", [], "any", false, false, false, 289), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 290
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "cantidad", [], "any", false, false, false, 290), "html", null, true);
                echo "</td>
                                                            </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 293
            echo "                                                    </tbody>
                                                </table> 
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 298
        echo "                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane fade show\" id=\"kt_tab_asignaciones\" role=\"tabpanel\">
                <form action=\"\" method=\"get\">
                    <div class=\"card mb-7\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center row\">
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Tipo de fecha</span>
                                    </label>
                                    <select name=\"tipoFecha\" class=\"form-select form-select-solid\" data-control=\"select2\" data-hide-search=\"true\" data-placeholder=\"Tipo de fecha\">
                                        <option value=\"fechaCreado\" >Registro</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Desde</span>
                                    </label>
                                    <input type=\"text\" value=\"";
        // line 321
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["desde"]) || array_key_exists("desde", $context) ? $context["desde"] : (function () { throw new RuntimeError('Variable "desde" does not exist.', 321, $this->source); })()), "d-m-Y"), "html", null, true);
        echo "\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"desde\" />
                                </div>
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Hasta</span>
                                    </label>
                                    <input type=\"text\" value=\"";
        // line 327
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["hasta"]) || array_key_exists("hasta", $context) ? $context["hasta"] : (function () { throw new RuntimeError('Variable "hasta" does not exist.', 327, $this->source); })()), "d-m-Y"), "html", null, true);
        echo "\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"hasta\" />
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <button type=\"submit\" class=\"btn btn-primary me-5\">Buscar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title d-flex align-items-center\">
                            <h3>Asignación de materiales</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                <thead>
                                    <tr>
                                        <th>ÁREA DE SERVICIO</th>
                                        <th>FECHA</th>
                                        <th>ASIGNACIÓN</th>
                                        <th>PRODUCTOS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 356
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["asignaciones"]) || array_key_exists("asignaciones", $context) ? $context["asignaciones"] : (function () { throw new RuntimeError('Variable "asignaciones" does not exist.', 356, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 357
            echo "                                        <tr>
                                            <td>";
            // line 358
            if (twig_get_attribute($this->env, $this->source, $context["objeto"], "terceros", [], "any", false, false, false, 358)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "terceros", [], "any", false, false, false, 358), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "areaServicio", [], "any", false, false, false, 358), "html", null, true);
            }
            echo "</td>
                                            <td>";
            // line 359
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "fecha", [], "any", false, false, false, 359), "d-m-Y"), "html", null, true);
            echo "</td>
                                            <td>
                                                Encargado: ";
            // line 361
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "encargado", [], "any", false, false, false, 361), "html", null, true);
            echo "<br />
                                                Orden de trabajo: ";
            // line 362
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "ordenTrabajo", [], "any", false, false, false, 362), "html", null, true);
            echo "<br />
                                                Observaciones: ";
            // line 363
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "observaciones", [], "any", false, false, false, 363), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                                    <tbody>
                                                        ";
            // line 368
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["objeto"], "lotes", [], "any", false, false, false, 368));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 369
                echo "                                                            <tr>
                                                                <td>";
                // line 370
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "lote", [], "any", false, false, false, 370), "producto", [], "any", false, false, false, 370), "producto", [], "any", false, false, false, 370), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 371
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "cantidad", [], "any", false, false, false, 371), "html", null, true);
                echo "</td>
                                                            </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 374
            echo "                                                    </tbody>
                                                </table> 
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 379
        echo "                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "almacen/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  686 => 379,  676 => 374,  667 => 371,  663 => 370,  660 => 369,  656 => 368,  648 => 363,  644 => 362,  640 => 361,  635 => 359,  627 => 358,  624 => 357,  620 => 356,  588 => 327,  579 => 321,  554 => 298,  544 => 293,  535 => 290,  531 => 289,  528 => 288,  524 => 287,  517 => 283,  514 => 282,  510 => 281,  504 => 280,  500 => 278,  496 => 277,  465 => 249,  456 => 243,  431 => 220,  418 => 213,  415 => 212,  408 => 210,  406 => 209,  400 => 208,  396 => 207,  392 => 206,  388 => 205,  385 => 204,  380 => 203,  378 => 202,  361 => 189,  357 => 188,  353 => 187,  349 => 186,  345 => 184,  341 => 183,  311 => 156,  302 => 150,  277 => 127,  264 => 123,  260 => 121,  258 => 120,  252 => 117,  248 => 116,  243 => 114,  239 => 113,  235 => 112,  231 => 111,  227 => 110,  224 => 109,  218 => 107,  212 => 105,  210 => 104,  206 => 102,  202 => 101,  167 => 69,  114 => 19,  105 => 13,  99 => 10,  93 => 7,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Detalle del almacén{% endblock %}
{% block body %}
    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle del almacén \"{{ almacen.nombre }}\"</h1>
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('app_index') }}\" class=\"text-gray-600 text-hover-primary\">Inicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('warehouses_index') }}\" class=\"text-gray-600 text-hover-primary\">Almacenes</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del almacén</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"{{ path('warehouses_index') }}\" class=\"btn btn-sm btn-primary\" >
                    Volver al listado de almacenes</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"mb-5 hover-scroll-x\">
            <div class=\"d-grid\">
                <ul class=\"nav nav-tabs flex-nowrap text-nowrap\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 active btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_almacen\">
                            <i class=\"las la-warehouse fs-2x\"></i> Detalle del almacén
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_stocks\">
                            <i class=\"las la-boxes fs-2x\"></i> Stock
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_importaciones\">
                            <i class=\"las la-file-invoice fs-2x\"></i> Recepción de pedidos
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_traslados\">
                            <i class=\"las la-truck-moving fs-2x\"></i> Traslados
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_asignaciones\">
                            <i class=\"las la-dolly fs-2x\"></i> Asignación de materiales
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"tab-content\">
            <div class=\"tab-pane fade show active\" id=\"kt_tab_almacen\" role=\"tabpanel\">
                <div class=\"card\">
                    <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
                        <div class=\"card-header\">
                            <div class=\"card-title d-flex align-items-center\">
                                <h3>Almacén</h3>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"mb-3\">
                                <label for=\"almacen\" class=\"form-label\">Almacén</label>
                                <input type=\"text\" name=\"almacen\" value=\"{{ almacen.nombre }}\" class=\"form-control\" id=\"almacen\" autocomplete=\"off\">
                            </div>
                        </div>
                        <div class=\"card-footer\">
                            <button type=\"submit\" class=\"btn btn-primary\">Guardar modificación</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"tab-pane fade show\" id=\"kt_tab_stocks\" role=\"tabpanel\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title d-flex align-items-center\">
                            <h3>Stock</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                <thead>
                                    <tr>
                                        <th>FOTO</th>
                                        <th>NOMBRE</th>
                                        <th>ID</th>
                                        <th>CÓDIGO</th>
                                        <th>REFERENCIA</th>
                                        <th>CÓDIGO DE BARRA</th>
                                        <th>CATEGORÍA</th>
                                        <th width=\"50px\">CANTIDAD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for objeto in inventario %}
                                        <tr>
                                            <td>
                                                {% if objeto.producto.foto %}
                                                    <img width=\"100px\" src=\"{{ path('products_photo',{'id':objeto.id}) }}\" />
                                                {% else %}
                                                    <img width=\"100px\" src=\"{{ asset('imagenes/noimagen.png') }}\" />
                                                {% endif %}
                                            </td>
                                            <td>{{ objeto.producto.nombre }}</td>
                                            <td>{{ objeto.producto.id }}</td>
                                            <td>{{ objeto.producto.codigo }}</td>
                                            <td>{{ objeto.producto.referencia }}</td>
                                            <td>{{ objeto.producto.codigoBarra }}</td>
                                            <td>
                                                {{ objeto.producto.categoria }}<br />
                                                {{ objeto.producto.subcategoria }}
                                            </td>
                                            <td class=\"text-right align-middle \">
                                                {% if objeto.cantidad <= objeto.umbral %}
                                                    <i class=\"las la-exclamation-triangle text-warning\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Stock por debajo del umbral\"></i>
                                                {% endif %}
                                                <span data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Umbral del producto: {{ objeto.umbral }}\">{{ objeto.cantidad }}</span>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane fade show\" id=\"kt_tab_importaciones\" role=\"tabpanel\">
                <form action=\"\" method=\"get\">
                    <div class=\"card mb-7\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center row\">
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Tipo de fecha</span>
                                    </label>
                                    <select name=\"tipoFecha\" class=\"form-select form-select-solid\" data-control=\"select2\" data-hide-search=\"true\" data-placeholder=\"Tipo de fecha\">
                                        <option value=\"fechaCreado\" >Registro</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Desde</span>
                                    </label>
                                    <input type=\"text\" value=\"{{ desde | date('d-m-Y') }}\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"desde\" />
                                </div>
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Hasta</span>
                                    </label>
                                    <input type=\"text\" value=\"{{ hasta | date('d-m-Y') }}\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"hasta\" />
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <button type=\"submit\" class=\"btn btn-primary me-5\">Buscar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title d-flex align-items-center\">
                            <h3>Recepción de pedidos</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                <thead>
                                    <tr>
                                        <th>PEDIDO</th>
                                        <th>PRODUCTOS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for objeto in importaciones %}
                                        <tr>
                                            <td>
                                                <b>Factura:</b> {{ objeto.factura }}<br />
                                                <b>Albarán:</b> {{ objeto.albaran }}<br />
                                                <b>Fecha:</b> {{ objeto.fecha | date('d-m-Y') }}<br />
                                                <b>Proveedor:</b> {{ objeto.proveedor ? objeto.proveedor.nombre }}{{ objeto.proveedor ? \" - \"~objeto.proveedor.direccion }}
                                            </td>
                                            <td>
                                                <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                                    <thead>
                                                        <tr>
                                                            <th>PRODUCTO</th>
                                                            <th>LOTE</th>
                                                            <th>CANTIDAD</th>
                                                            <th class=\"text-right\">PRECIO</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        {% set totalPrecio = 0 %}
                                                        {% for producto in objeto.lotes %}
                                                            <tr>
                                                                <td>{{ producto.lote.producto.producto }}</td>
                                                                <td>{{ producto.lote }}</td>
                                                                <td>{{ producto.cantidad }}</td>
                                                                <td class=\"text-right\">{{ producto.precio | number_format(2,',','.') }} €/ud ({{ (producto.precio*producto.cantidad) | number_format(2,',','.') }} €)</td>
                                                                {% set totalPrecio = totalPrecio+producto.precio*producto.cantidad %}
                                                            </tr>
                                                        {% endfor %}
                                                        <tr>
                                                            <td class=\"text-right\" colspan=\"5\"><b>Total: {{ totalPrecio | number_format(2,',','.') }} €</b></td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane fade show\" id=\"kt_tab_traslados\" role=\"tabpanel\">
                <form action=\"\" method=\"get\">
                    <div class=\"card mb-7\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center row\">
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Tipo de fecha</span>
                                    </label>
                                    <select name=\"tipoFecha\" class=\"form-select form-select-solid\" data-control=\"select2\" data-hide-search=\"true\" data-placeholder=\"Tipo de fecha\">
                                        <option value=\"fechaCreado\" >Registro</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Desde</span>
                                    </label>
                                    <input type=\"text\" value=\"{{ desde | date('d-m-Y') }}\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"desde\" />
                                </div>
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Hasta</span>
                                    </label>
                                    <input type=\"text\" value=\"{{ hasta | date('d-m-Y') }}\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"hasta\" />
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <button type=\"submit\" class=\"btn btn-primary me-5\">Buscar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title d-flex align-items-center\">
                            <h3>Traslados</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                <thead>
                                    <tr>
                                        <th>ALMACÉN</th>
                                        <th>FECHA</th>
                                        <th>PRODUCTOS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for objeto in traslados %}
                                        <tr>
                                            <td>
                                                {{ objeto.almacenA }} -> {{ objeto.almacenB }}
                                                {% if objeto.observaciones %}{{ objeto.observaciones }}{% endif %}
                                            </td>
                                            <td>{{ objeto.fecha | date('d-m-Y') }}</td>
                                            <td>
                                                <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                                    <tbody>
                                                        {% for producto in objeto.lotes %}
                                                            <tr>
                                                                <td>{{ producto.lote.producto.producto }}</td>
                                                                <td>{{ producto.cantidad }}</td>
                                                            </tr>
                                                        {% endfor %}
                                                    </tbody>
                                                </table> 
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane fade show\" id=\"kt_tab_asignaciones\" role=\"tabpanel\">
                <form action=\"\" method=\"get\">
                    <div class=\"card mb-7\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center row\">
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Tipo de fecha</span>
                                    </label>
                                    <select name=\"tipoFecha\" class=\"form-select form-select-solid\" data-control=\"select2\" data-hide-search=\"true\" data-placeholder=\"Tipo de fecha\">
                                        <option value=\"fechaCreado\" >Registro</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Desde</span>
                                    </label>
                                    <input type=\"text\" value=\"{{ desde | date('d-m-Y') }}\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"desde\" />
                                </div>
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Hasta</span>
                                    </label>
                                    <input type=\"text\" value=\"{{ hasta | date('d-m-Y') }}\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"hasta\" />
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <button type=\"submit\" class=\"btn btn-primary me-5\">Buscar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title d-flex align-items-center\">
                            <h3>Asignación de materiales</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                <thead>
                                    <tr>
                                        <th>ÁREA DE SERVICIO</th>
                                        <th>FECHA</th>
                                        <th>ASIGNACIÓN</th>
                                        <th>PRODUCTOS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for objeto in asignaciones %}
                                        <tr>
                                            <td>{% if objeto.terceros %}{{ objeto.terceros }}{% else %}{{ objeto.areaServicio }}{% endif %}</td>
                                            <td>{{ objeto.fecha | date('d-m-Y') }}</td>
                                            <td>
                                                Encargado: {{ objeto.encargado }}<br />
                                                Orden de trabajo: {{ objeto.ordenTrabajo }}<br />
                                                Observaciones: {{ objeto.observaciones }}
                                            </td>
                                            <td>
                                                <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                                    <tbody>
                                                        {% for producto in objeto.lotes %}
                                                            <tr>
                                                                <td>{{ producto.lote.producto.producto }}</td>
                                                                <td>{{ producto.cantidad }}</td>
                                                            </tr>
                                                        {% endfor %}
                                                    </tbody>
                                                </table> 
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "almacen/show.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\almacen\\show.html.twig");
    }
}
