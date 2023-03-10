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

/* almacen/importacion/index.html.twig */
class __TwigTemplate_c4d4044a461d0b39cee11fabd0d1deecd533dc1c31b254321955cd6d3c42aae7 extends Template
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
            'js' => [$this, 'block_js'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/importacion/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/importacion/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "almacen/importacion/index.html.twig", 1);
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

        echo "Recepción de pedidos";
        
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
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Recepción de pedidos del almacén \"";
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
                    <li class=\"breadcrumb-item text-gray-600\">Recepción de pedidos</li>
                </ul>
            </div>
            <div class=\"align-items-center py-2\">
                <a href=\"#\" class=\"btn btn-sm btn-primary btn-flex\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearImportacion\" id=\"kt_toolbar_primary_button\">
                    <span class=\"svg-icon svg-icon-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                            <rect opacity=\"0.5\" x=\"11.364\" y=\"20.364\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-90 11.364 20.364)\" fill=\"currentColor\" />
                            <rect x=\"4.36396\" y=\"11.364\" width=\"16\" height=\"2\" rx=\"1\" fill=\"currentColor\" />
                        </svg>
                    </span>
                    Nueva recepción</a>
                <a href=\"#\" class=\"btn btn-sm btn-primary btn-flex\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearImportacionArchivo\" id=\"kt_toolbar_primary_button\">
                    <i class=\"las la-file-upload fs-1\"></i>
                    Importar pedido</a>
                <a href=\"#\" class=\"btn btn-sm btn-primary btn-flex\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearImportacionArchivoActual\" id=\"kt_toolbar_primary_button\">
                    <i class=\"las la-file-upload fs-1\"></i>
                    Importar stock</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <form action=\"\" method=\"get\">
            <div class=\"card mb-7\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center row\">
                        <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                            <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                <span>Tipo de fecha</span>
                            </label>
                            <select name=\"tipoFecha\" class=\"form-select form-select-solid\" data-control=\"select2\" data-hide-search=\"true\" data-placeholder=\"Tipo de fecha\">
                                <option value=\"fecha\" ";
        // line 44
        if ((0 === twig_compare((isset($context["tipoFecha"]) || array_key_exists("tipoFecha", $context) ? $context["tipoFecha"] : (function () { throw new RuntimeError('Variable "tipoFecha" does not exist.', 44, $this->source); })()), "fecha"))) {
            echo "selected";
        }
        echo ">Recepción del pedido</option>
                                <option value=\"fechaCreado\" ";
        // line 45
        if ((0 === twig_compare((isset($context["tipoFecha"]) || array_key_exists("tipoFecha", $context) ? $context["tipoFecha"] : (function () { throw new RuntimeError('Variable "tipoFecha" does not exist.', 45, $this->source); })()), "fechaCreado"))) {
            echo "selected";
        }
        echo ">Registro</option>
                            </select>
                        </div>
                        <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                            <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                <span>Desde</span>
                            </label>
                            <input type=\"text\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["desde"]) || array_key_exists("desde", $context) ? $context["desde"] : (function () { throw new RuntimeError('Variable "desde" does not exist.', 52, $this->source); })()), "d-m-Y"), "html", null, true);
        echo "\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"desde\" />
                        </div>
                        <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                            <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                <span>Hasta</span>
                            </label>
                            <input type=\"text\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["hasta"]) || array_key_exists("hasta", $context) ? $context["hasta"] : (function () { throw new RuntimeError('Variable "hasta" does not exist.', 58, $this->source); })()), "d-m-Y"), "html", null, true);
        echo "\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"hasta\" />
                        </div>
                        <div class=\"col-3\">
                            <div class=\"d-flex align-items-center\">
                                <button type=\"submit\" class=\"btn btn-primary me-5\">Buscar</button>
                                <a id=\"kt_horizontal_search_advanced_link\" class=\"btn btn-link\" data-bs-toggle=\"collapse\" href=\"#kt_advanced_search_form\">Búsqueda avanzada</a>
                            </div>
                        </div>
                    </div>
                    ";
        // line 67
        if ((((((((isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 67, $this->source); })()) || (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 67, $this->source); })())) || (isset($context["albaran"]) || array_key_exists("albaran", $context) ? $context["albaran"] : (function () { throw new RuntimeError('Variable "albaran" does not exist.', 67, $this->source); })())) || (isset($context["factura"]) || array_key_exists("factura", $context) ? $context["factura"] : (function () { throw new RuntimeError('Variable "factura" does not exist.', 67, $this->source); })())) || (isset($context["proveedor"]) || array_key_exists("proveedor", $context) ? $context["proveedor"] : (function () { throw new RuntimeError('Variable "proveedor" does not exist.', 67, $this->source); })())) || (0 === twig_compare((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 67, $this->source); })()), "0"))) || (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 67, $this->source); })()))) {
            // line 68
            echo "                        ";
            $context["buscadorAvanzado"] = "show";
            // line 69
            echo "                    ";
        } else {
            // line 70
            echo "                        ";
            $context["buscadorAvanzado"] = "";
            // line 71
            echo "                    ";
        }
        // line 72
        echo "                    <div class=\"collapse ";
        echo twig_escape_filter($this->env, (isset($context["buscadorAvanzado"]) || array_key_exists("buscadorAvanzado", $context) ? $context["buscadorAvanzado"] : (function () { throw new RuntimeError('Variable "buscadorAvanzado" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "\" id=\"kt_advanced_search_form\">
                        <div class=\"separator separator-dashed mt-9 mb-6\"></div>
                        <div class=\"row g-8\">
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Albarán</span>
                                </label>
                                <input type=\"text\" class=\"form-control form-control-solid ps-10\" name=\"albaran\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["albaran"]) || array_key_exists("albaran", $context) ? $context["albaran"] : (function () { throw new RuntimeError('Variable "albaran" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Albarán\" />
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Factura</span>
                                </label>
                                <input type=\"text\" class=\"form-control form-control-solid ps-10\" name=\"factura\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["factura"]) || array_key_exists("factura", $context) ? $context["factura"] : (function () { throw new RuntimeError('Variable "factura" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Factura\" />
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Producto</span>
                                </label>
                                <input type=\"text\" class=\"form-control form-control-solid ps-10\" name=\"producto\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Producto/Código/Referencia/Código de barras\" />
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>ID producto</span>
                                </label>
                                <input type=\"number\" min=\"1\" class=\"form-control form-control-solid ps-10\" name=\"id\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 97, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"ID\" />
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Categoría</span>
                                </label>
                                <select name=\"categoria\" class=\"form-select form-select-solid\" data-placeholder=\"Categoría\">
                                    <option value=\"\">---</option>
                                    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 106
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 106), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 106), (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 106, $this->source); })())))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["objeto"], "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                                </select>
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Proveedor</span>
                                </label>
                                <select name=\"proveedor\" class=\"form-select form-select-solid\" data-placeholder=\"Proveedor\">
                                    <option value=\"\">---</option>
                                    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proveedores"]) || array_key_exists("proveedores", $context) ? $context["proveedores"] : (function () { throw new RuntimeError('Variable "proveedores" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 117
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 117), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 117), (isset($context["proveedor"]) || array_key_exists("proveedor", $context) ? $context["proveedor"] : (function () { throw new RuntimeError('Variable "proveedor" does not exist.', 117, $this->source); })())))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 117), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                                </select>
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
                                <th>PEDIDO</th>
                                <th>PRODUCTOS</th>
                                <th width=\"50px\">DETALLE</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["importaciones"]) || array_key_exists("importaciones", $context) ? $context["importaciones"] : (function () { throw new RuntimeError('Variable "importaciones" does not exist.', 138, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 139
            echo "                                <tr>
                                    <td>
                                        <b>Factura:</b> ";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "factura", [], "any", false, false, false, 141), "html", null, true);
            echo "<br />
                                        <b>Albarán:</b> ";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "albaran", [], "any", false, false, false, 142), "html", null, true);
            echo "<br />
                                        <b>Fecha:</b> ";
            // line 143
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "fecha", [], "any", false, false, false, 143), "d-m-Y"), "html", null, true);
            echo "<br />
                                        <b>Proveedor:</b> ";
            // line 144
            ((twig_get_attribute($this->env, $this->source, $context["objeto"], "proveedor", [], "any", false, false, false, 144)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "proveedor", [], "any", false, false, false, 144), "nombre", [], "any", false, false, false, 144), "html", null, true))) : (print ("")));
            ((twig_get_attribute($this->env, $this->source, $context["objeto"], "proveedor", [], "any", false, false, false, 144)) ? (print (twig_escape_filter($this->env, (" - " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "proveedor", [], "any", false, false, false, 144), "direccion", [], "any", false, false, false, 144)), "html", null, true))) : (print ("")));
            echo "
                                    </td>
                                    <td>
                                        <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                            <thead>
                                                <tr>
                                                    <th>PRODUCTO</th>
                                                    <th>LOTE</th>
                                                    <th>CANTIDAD</th>
                                                        ";
            // line 153
            if (twig_in_filter("ROLE_ADMINISTRADOR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "roles", [], "any", false, false, false, 153))) {
                // line 154
                echo "                                                        <th class=\"text-right\">PRECIO</th>
                                                        ";
            }
            // line 156
            echo "                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
            // line 159
            $context["totalPrecio"] = 0;
            // line 160
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["objeto"], "lotes", [], "any", false, false, false, 160));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 161
                echo "                                                    <tr>
                                                        <td>";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "lote", [], "any", false, false, false, 162), "producto", [], "any", false, false, false, 162), "producto", [], "any", false, false, false, 162), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "lote", [], "any", false, false, false, 163), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "cantidad", [], "any", false, false, false, 164), "html", null, true);
                echo "</td>
                                                        ";
                // line 165
                if (twig_in_filter("ROLE_ADMINISTRADOR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "user", [], "any", false, false, false, 165), "roles", [], "any", false, false, false, 165))) {
                    // line 166
                    echo "                                                            <td class=\"text-right\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 166), 2, ",", "."), "html", null, true);
                    echo " €/ud (";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 166) * twig_get_attribute($this->env, $this->source, $context["producto"], "cantidad", [], "any", false, false, false, 166)), 2, ",", "."), "html", null, true);
                    echo " €)</td>
                                                            ";
                    // line 167
                    $context["totalPrecio"] = ((isset($context["totalPrecio"]) || array_key_exists("totalPrecio", $context) ? $context["totalPrecio"] : (function () { throw new RuntimeError('Variable "totalPrecio" does not exist.', 167, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 167) * twig_get_attribute($this->env, $this->source, $context["producto"], "cantidad", [], "any", false, false, false, 167)));
                    // line 168
                    echo "                                                        ";
                }
                // line 169
                echo "                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "                                                ";
            if (twig_in_filter("ROLE_ADMINISTRADOR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "user", [], "any", false, false, false, 171), "roles", [], "any", false, false, false, 171))) {
                // line 172
                echo "                                                    <tr>
                                                        <td class=\"text-right\" colspan=\"5\"><b>Total: ";
                // line 173
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalPrecio"]) || array_key_exists("totalPrecio", $context) ? $context["totalPrecio"] : (function () { throw new RuntimeError('Variable "totalPrecio" does not exist.', 173, $this->source); })()), 2, ",", "."), "html", null, true);
                echo " €</b></td>
                                                    </tr>
                                                ";
            }
            // line 176
            echo "                                            </tbody>
                                        </table> 
                                    </td>
                                    <td class=\"text-center align-middle\">
                                        <a class=\"btn btn-primary btn-icon\" href=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_import_show", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 180, $this->source); })()), "id", [], "any", false, false, false, 180), "id" => twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 180)]), "html", null, true);
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
        // line 186
        echo "                        </tbody>
                    </table> 
                </div>
            </div>
            <div class=\"card-footer\">
                <div class=\"navigation\">
                    ";
        // line 192
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["importaciones"]) || array_key_exists("importaciones", $context) ? $context["importaciones"] : (function () { throw new RuntimeError('Variable "importaciones" does not exist.', 192, $this->source); })()));
        echo "
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearImportacionArchivoActual\" tabindex=\"-1\" aria-labelledby=\"crearImportacionArchivoActualLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Importar productos en stock mediante archivo</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"mb-3\">
                            <label for=\"archivo\" class=\"form-label\">Archivo</label>
                            <input type=\"file\" class=\"form-control form-control-lg form-control-solid\" name=\"archivo\" accept=\".csv\" required />
                            <div class=\"alert alert-info mt-3\" role=\"alert\">
                                El archivo debe ser un CSV delimitado por ;. El orden de los campos es <b>ID del producto;Código del producto;Referencia del producto;Código de barras del producto;Producto;Lote;Precio unidad;Cantidad;Fecha caducidad (dd-mm-yyyy)</b>.
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" name=\"boton\" value=\"importarActual\" class=\"btn btn-primary\">Subir archivo a importar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearImportacionArchivo\" tabindex=\"-1\" aria-labelledby=\"crearImportacionArchivoLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Realizar recepción de pedidos mediante archivo</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Fecha:</label>
                                                    <input value=\"";
        // line 240
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "\" name=\"fecha\" type=\"text\" class=\"form-control\" id='kt_flatpickr' required pattern=\"(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}\" title=\"La fecha debe formarse como dd-mm-yyyy\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Albarán:</label>
                                                    <input name=\"albaran\" type=\"text\" class=\"form-control\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Factura:</label>
                                                    <input name=\"factura\" type=\"text\" class=\"form-control\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <label for=\"proveedor\" class=\"form-label\">Proveedor:</label>
                                                <select name=\"proveedor\" class=\"form-select form-select-solid\" select2=\"proveedor\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                                    <option value=\" \">---</option>
                                                    ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proveedores"]) || array_key_exists("proveedores", $context) ? $context["proveedores"] : (function () { throw new RuntimeError('Variable "proveedores" does not exist.', 259, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 260
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 260), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 260), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <label for=\"otroproveedor\" class=\"form-label\">Otro proveedor si no existe:</label>
                                                <input type=\"text\" name=\"otroproveedor\" class=\"form-control\" id=\"otroproveedor\" autocomplete=\"off\">
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Observaciones:</label>
                                                    <textarea name=\"observaciones\" class=\"form-control\"></textarea>
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-12 mb-3\">
                                                <label for=\"archivo\" class=\"form-label\">Archivo</label>
                                                <input type=\"file\" class=\"form-control form-control-lg form-control-solid\" name=\"archivo\" accept=\".csv\" required />
                                                <div class=\"alert alert-info mt-3\" role=\"alert\">
                                                    El archivo debe ser un CSV delimitado por ;. El orden de los campos es <b>ID del producto;Código del producto;Referencia del producto;Código de barras del producto;Producto;Lote;Precio unidad;Cantidad;Fecha caducidad (dd-mm-yyyy)</b>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" name=\"boton\" value=\"importar\" class=\"btn btn-primary\">Subir archivo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearProducto\" aria-labelledby=\"crearProductoLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form id=\"crearProducto\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Añadir nuevo producto</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"mb-3\">
                            <label for=\"nombre\" class=\"form-label\">Nombre</label>
                            <input type=\"text\" name=\"nombre\" required class=\"form-control\" id=\"producto\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"codigo\" class=\"form-label\">Código</label>
                            <input type=\"text\" name=\"codigo\" class=\"form-control\" id=\"codigo\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"referencia\" class=\"form-label\">Referencia</label>
                            <input type=\"text\" name=\"referencia\" class=\"form-control\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"codigoBarra\" class=\"form-label\">Código de barras</label>
                            <input type=\"text\" name=\"codigoBarra\" class=\"form-control\" id=\"codigoBarra\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"precio\" class=\"form-label\">Precio</label>
                            <input type=\"number\" step=\"any\" min=\"0\" value=\"0\" name=\"precio\" required class=\"form-control\" id=\"precio\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"categoria\" class=\"form-label\">Categoría</label>
                            <select name=\"categoria\" class=\"form-select form-select-solid\" select2=\"categoria\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                <option value=\" \">---</option>
                                ";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 328, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 329
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 329), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["objeto"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        echo "                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"otracategoria\" class=\"form-label\">Otra categoría si no existe</label>
                            <input type=\"text\" name=\"otracategoria\" class=\"form-control\" id=\"otracategoria\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"descripcion\" class=\"form-label\">Descripción</label>
                            <textarea name=\"descripcion\" class=\"form-control\" autocomplete=\"off\"></textarea>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <div id=\"botonCrearProducto\" class=\"btn btn-primary\">Añadir producto</div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearImportacion\" aria-labelledby=\"crearImportacionLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-fullscreen\">
            <div class=\"modal-content\">
                <form action=\"\" method=\"post\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Realizar recepción de pedidos</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Fecha:</label>
                                                    <input value=\"";
        // line 367
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "\" name=\"fecha\" type=\"text\" class=\"form-control\" id='kt_flatpickr' required pattern=\"(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}\" title=\"La fecha debe formarse como dd-mm-yyyy\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Albarán:</label>
                                                    <input name=\"albaran\" type=\"text\" class=\"form-control\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Factura:</label>
                                                    <input name=\"factura\" type=\"text\" class=\"form-control\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <label for=\"proveedor\" class=\"form-label\">Proveedor:</label>
                                                <select name=\"proveedor\" class=\"form-select form-select-solid\" select2=\"proveedor\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                                    <option value=\" \">---</option>
                                                    ";
        // line 386
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proveedores"]) || array_key_exists("proveedores", $context) ? $context["proveedores"] : (function () { throw new RuntimeError('Variable "proveedores" does not exist.', 386, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 387
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 387), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 387), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 389
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <label for=\"otroproveedor\" class=\"form-label\">Otro proveedor si no existe:</label>
                                                <input type=\"text\" name=\"otroproveedor\" class=\"form-control\" id=\"otroproveedor\" autocomplete=\"off\">
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Observaciones:</label>
                                                    <textarea name=\"observaciones\" class=\"form-control\"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 col-lg-5 mt-3\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Buscador</h5>
                                        </div>
                                        <div class=\"modal-body\">
                                            <div class=\"row\">
                                                <div class=\"col-12 col-md-12\">
                                                    <div class=\"form-group\">
                                                        <label for=\"categoria\" class=\"form-label\">Categoría</label>
                                                        <select name=\"categoria\" id=\"categoria\" class=\"form-select form-select-solid\" select2=\"categoria2\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                                            <option value=\" \">---</option>
                                                            ";
        // line 420
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 420, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 421
            echo "                                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 421), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["objeto"], "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 423
        echo "                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-md-12 mt-3\">
                                                    <div class=\"form-group\">
                                                        <label class=\"form-label\">Subcategoría:</label>
                                                        <select name=\"subcategoria\" class=\"form-select form-select-solid\" id=\"subcategoria\" >
                                                            <option data-categoria=\"0\" value=\"\">---</option>
                                                            ";
        // line 431
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subcategorias"]) || array_key_exists("subcategorias", $context) ? $context["subcategorias"] : (function () { throw new RuntimeError('Variable "subcategorias" does not exist.', 431, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 432
            echo "                                                                <option data-categoria=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "categoria", [], "any", false, false, false, 432), "id", [], "any", false, false, false, 432), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 432), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 432), "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 434
        echo "                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-md-6 mt-3\">
                                                    <div class=\"form-group\">
                                                        <select name=\"tipo\" id=\"tipo\" class=\"form-select form-select-solid\" >
                                                            <option value=\"nombre\">Nombre</option>
                                                            <option value=\"codigo\">Código</option>
                                                            <option value=\"referencia\">Referencia</option>
                                                            <option value=\"codigoBarra\">Código de barras</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-md-6 mt-3\">
                                                    <div class=\"form-group\">
                                                        <input name=\"referencia\" id=\"referencia\" type=\"text\" class=\"form-control\" />
                                                        <input type=\"hidden\" name=\"almacen\" value=\"";
        // line 450
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 450, $this->source); })()), "id", [], "any", false, false, false, 450), "html", null, true);
        echo "\" class=\"form-control\" id=\"almacen\" autocomplete=\"off\" />
                                                    </div>
                                                </div>
                                                <div id=\"alerta-producto\" style=\"display: none;\">
                                                    <div class=\"col-12 col-md-12 mt-3\">
                                                        <div class=\"alert alert-warning mt-10\" role=\"alert\">
                                                            <strong>No existe ningún producto con las características buscadas. Si el producto que buscas no existe puedes crearlo desde <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearProducto\" id=\"kt_toolbar_primary_button\">aquí</a>.</strong> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-12\">
                                                    <hr />
                                                    <div class=\"table-responsive\" id=\"tabla\" style=\"display: none;\">
                                                        <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                                            <thead>
                                                                <tr>
                                                                    <th>FOTO</th>
                                                                    <th>PRODUCTO</th>
                                                                    <th width=\"50px\">AÑADIR</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id=\"productos\"></tbody>
                                                        </table> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class=\"col-12 col-lg-7 mt-3\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Lotes</h5>
                                        </div>
                                        <div class=\"modal-body\">
                                            <div class=\"row\">
                                                <div class=\"col-12 col-md-12\">
                                                    <div class=\"table-responsive\">
                                                        <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                                            <thead>
                                                                <tr>
                                                                    <th>FOTO</th>
                                                                    <th>NOMBRE</th>
                                                                    <th>CANTIDAD</th>
                                                                    <th>LOTE</th>
                                                                    <th>FECHA CADUCIDAD</th>
                                                                    <th>PRECIO UD.</th>
                                                                    <th width=\"50px\">QUITAR</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id=\"importacion\"></tbody>
                                                        </table> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" name=\"boton\" value=\"guardar\" class=\"btn btn-primary\">Guardar datos</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 524
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 525
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript/importacion.js"), "html", null, true);
        echo "\"></script>
    <script>
        categoriajs();
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "almacen/importacion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  866 => 525,  856 => 524,  772 => 450,  754 => 434,  741 => 432,  737 => 431,  727 => 423,  716 => 421,  712 => 420,  679 => 389,  668 => 387,  664 => 386,  642 => 367,  604 => 331,  593 => 329,  589 => 328,  521 => 262,  510 => 260,  506 => 259,  484 => 240,  433 => 192,  425 => 186,  413 => 180,  407 => 176,  401 => 173,  398 => 172,  395 => 171,  388 => 169,  385 => 168,  383 => 167,  376 => 166,  374 => 165,  370 => 164,  366 => 163,  362 => 162,  359 => 161,  354 => 160,  352 => 159,  347 => 156,  343 => 154,  341 => 153,  328 => 144,  324 => 143,  320 => 142,  316 => 141,  312 => 139,  308 => 138,  287 => 119,  272 => 117,  268 => 116,  258 => 108,  243 => 106,  239 => 105,  228 => 97,  219 => 91,  210 => 85,  201 => 79,  190 => 72,  187 => 71,  184 => 70,  181 => 69,  178 => 68,  176 => 67,  164 => 58,  155 => 52,  143 => 45,  137 => 44,  100 => 10,  94 => 7,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Recepción de pedidos{% endblock %}
{% block body %}
    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Recepción de pedidos del almacén \"{{ almacen.nombre }}\"</h1>
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('app_index') }}\" class=\"text-gray-600 text-hover-primary\">Inicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Recepción de pedidos</li>
                </ul>
            </div>
            <div class=\"align-items-center py-2\">
                <a href=\"#\" class=\"btn btn-sm btn-primary btn-flex\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearImportacion\" id=\"kt_toolbar_primary_button\">
                    <span class=\"svg-icon svg-icon-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                            <rect opacity=\"0.5\" x=\"11.364\" y=\"20.364\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-90 11.364 20.364)\" fill=\"currentColor\" />
                            <rect x=\"4.36396\" y=\"11.364\" width=\"16\" height=\"2\" rx=\"1\" fill=\"currentColor\" />
                        </svg>
                    </span>
                    Nueva recepción</a>
                <a href=\"#\" class=\"btn btn-sm btn-primary btn-flex\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearImportacionArchivo\" id=\"kt_toolbar_primary_button\">
                    <i class=\"las la-file-upload fs-1\"></i>
                    Importar pedido</a>
                <a href=\"#\" class=\"btn btn-sm btn-primary btn-flex\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearImportacionArchivoActual\" id=\"kt_toolbar_primary_button\">
                    <i class=\"las la-file-upload fs-1\"></i>
                    Importar stock</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <form action=\"\" method=\"get\">
            <div class=\"card mb-7\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center row\">
                        <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                            <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                <span>Tipo de fecha</span>
                            </label>
                            <select name=\"tipoFecha\" class=\"form-select form-select-solid\" data-control=\"select2\" data-hide-search=\"true\" data-placeholder=\"Tipo de fecha\">
                                <option value=\"fecha\" {% if tipoFecha == \"fecha\" %}selected{% endif %}>Recepción del pedido</option>
                                <option value=\"fechaCreado\" {% if tipoFecha == \"fechaCreado\" %}selected{% endif %}>Registro</option>
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
                                <a id=\"kt_horizontal_search_advanced_link\" class=\"btn btn-link\" data-bs-toggle=\"collapse\" href=\"#kt_advanced_search_form\">Búsqueda avanzada</a>
                            </div>
                        </div>
                    </div>
                    {% if categoria or producto or albaran or factura or proveedor or id == \"0\" or id %}
                        {% set buscadorAvanzado = \"show\" %}
                    {% else %}
                        {% set buscadorAvanzado = \"\" %}
                    {% endif %}
                    <div class=\"collapse {{ buscadorAvanzado }}\" id=\"kt_advanced_search_form\">
                        <div class=\"separator separator-dashed mt-9 mb-6\"></div>
                        <div class=\"row g-8\">
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Albarán</span>
                                </label>
                                <input type=\"text\" class=\"form-control form-control-solid ps-10\" name=\"albaran\" value=\"{{ albaran }}\" placeholder=\"Albarán\" />
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Factura</span>
                                </label>
                                <input type=\"text\" class=\"form-control form-control-solid ps-10\" name=\"factura\" value=\"{{ factura }}\" placeholder=\"Factura\" />
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Producto</span>
                                </label>
                                <input type=\"text\" class=\"form-control form-control-solid ps-10\" name=\"producto\" value=\"{{ producto }}\" placeholder=\"Producto/Código/Referencia/Código de barras\" />
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>ID producto</span>
                                </label>
                                <input type=\"number\" min=\"1\" class=\"form-control form-control-solid ps-10\" name=\"id\" value=\"{{ id }}\" placeholder=\"ID\" />
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Categoría</span>
                                </label>
                                <select name=\"categoria\" class=\"form-select form-select-solid\" data-placeholder=\"Categoría\">
                                    <option value=\"\">---</option>
                                    {% for objeto in categorias %}
                                        <option value=\"{{ objeto.id }}\" {% if objeto.id == categoria %}selected{% endif %}>{{ objeto }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Proveedor</span>
                                </label>
                                <select name=\"proveedor\" class=\"form-select form-select-solid\" data-placeholder=\"Proveedor\">
                                    <option value=\"\">---</option>
                                    {% for objeto in proveedores %}
                                        <option value=\"{{ objeto.id }}\" {% if objeto.id == proveedor %}selected{% endif %}>{{ objeto.nombre }}</option>
                                    {% endfor %}
                                </select>
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
                                <th>PEDIDO</th>
                                <th>PRODUCTOS</th>
                                <th width=\"50px\">DETALLE</th>
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
                                                        {% if 'ROLE_ADMINISTRADOR' in app.user.roles %}
                                                        <th class=\"text-right\">PRECIO</th>
                                                        {% endif %}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% set totalPrecio = 0 %}
                                                {% for producto in objeto.lotes %}
                                                    <tr>
                                                        <td>{{ producto.lote.producto.producto }}</td>
                                                        <td>{{ producto.lote }}</td>
                                                        <td>{{ producto.cantidad }}</td>
                                                        {% if 'ROLE_ADMINISTRADOR' in app.user.roles %}
                                                            <td class=\"text-right\">{{ producto.precio | number_format(2,',','.') }} €/ud ({{ (producto.precio*producto.cantidad) | number_format(2,',','.') }} €)</td>
                                                            {% set totalPrecio = totalPrecio+producto.precio*producto.cantidad %}
                                                        {% endif %}
                                                    </tr>
                                                {% endfor %}
                                                {% if 'ROLE_ADMINISTRADOR' in app.user.roles %}
                                                    <tr>
                                                        <td class=\"text-right\" colspan=\"5\"><b>Total: {{ totalPrecio | number_format(2,',','.') }} €</b></td>
                                                    </tr>
                                                {% endif %}
                                            </tbody>
                                        </table> 
                                    </td>
                                    <td class=\"text-center align-middle\">
                                        <a class=\"btn btn-primary btn-icon\" href=\"{{ path('warehouse_import_show',{'almacen':almacen.id,'id':objeto.id}) }}\">
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
                    {{ knp_pagination_render(importaciones) }}
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearImportacionArchivoActual\" tabindex=\"-1\" aria-labelledby=\"crearImportacionArchivoActualLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Importar productos en stock mediante archivo</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"mb-3\">
                            <label for=\"archivo\" class=\"form-label\">Archivo</label>
                            <input type=\"file\" class=\"form-control form-control-lg form-control-solid\" name=\"archivo\" accept=\".csv\" required />
                            <div class=\"alert alert-info mt-3\" role=\"alert\">
                                El archivo debe ser un CSV delimitado por ;. El orden de los campos es <b>ID del producto;Código del producto;Referencia del producto;Código de barras del producto;Producto;Lote;Precio unidad;Cantidad;Fecha caducidad (dd-mm-yyyy)</b>.
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" name=\"boton\" value=\"importarActual\" class=\"btn btn-primary\">Subir archivo a importar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearImportacionArchivo\" tabindex=\"-1\" aria-labelledby=\"crearImportacionArchivoLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Realizar recepción de pedidos mediante archivo</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Fecha:</label>
                                                    <input value=\"{{ 'now' | date('d-m-Y') }}\" name=\"fecha\" type=\"text\" class=\"form-control\" id='kt_flatpickr' required pattern=\"(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}\" title=\"La fecha debe formarse como dd-mm-yyyy\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Albarán:</label>
                                                    <input name=\"albaran\" type=\"text\" class=\"form-control\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Factura:</label>
                                                    <input name=\"factura\" type=\"text\" class=\"form-control\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <label for=\"proveedor\" class=\"form-label\">Proveedor:</label>
                                                <select name=\"proveedor\" class=\"form-select form-select-solid\" select2=\"proveedor\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                                    <option value=\" \">---</option>
                                                    {% for objeto in proveedores %}
                                                        <option value=\"{{ objeto.id }}\">{{ objeto.nombre }}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <label for=\"otroproveedor\" class=\"form-label\">Otro proveedor si no existe:</label>
                                                <input type=\"text\" name=\"otroproveedor\" class=\"form-control\" id=\"otroproveedor\" autocomplete=\"off\">
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Observaciones:</label>
                                                    <textarea name=\"observaciones\" class=\"form-control\"></textarea>
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-12 mb-3\">
                                                <label for=\"archivo\" class=\"form-label\">Archivo</label>
                                                <input type=\"file\" class=\"form-control form-control-lg form-control-solid\" name=\"archivo\" accept=\".csv\" required />
                                                <div class=\"alert alert-info mt-3\" role=\"alert\">
                                                    El archivo debe ser un CSV delimitado por ;. El orden de los campos es <b>ID del producto;Código del producto;Referencia del producto;Código de barras del producto;Producto;Lote;Precio unidad;Cantidad;Fecha caducidad (dd-mm-yyyy)</b>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" name=\"boton\" value=\"importar\" class=\"btn btn-primary\">Subir archivo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearProducto\" aria-labelledby=\"crearProductoLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form id=\"crearProducto\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Añadir nuevo producto</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"mb-3\">
                            <label for=\"nombre\" class=\"form-label\">Nombre</label>
                            <input type=\"text\" name=\"nombre\" required class=\"form-control\" id=\"producto\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"codigo\" class=\"form-label\">Código</label>
                            <input type=\"text\" name=\"codigo\" class=\"form-control\" id=\"codigo\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"referencia\" class=\"form-label\">Referencia</label>
                            <input type=\"text\" name=\"referencia\" class=\"form-control\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"codigoBarra\" class=\"form-label\">Código de barras</label>
                            <input type=\"text\" name=\"codigoBarra\" class=\"form-control\" id=\"codigoBarra\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"precio\" class=\"form-label\">Precio</label>
                            <input type=\"number\" step=\"any\" min=\"0\" value=\"0\" name=\"precio\" required class=\"form-control\" id=\"precio\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"categoria\" class=\"form-label\">Categoría</label>
                            <select name=\"categoria\" class=\"form-select form-select-solid\" select2=\"categoria\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                <option value=\" \">---</option>
                                {% for objeto in categorias %}
                                    <option value=\"{{ objeto.id }}\">{{ objeto }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"otracategoria\" class=\"form-label\">Otra categoría si no existe</label>
                            <input type=\"text\" name=\"otracategoria\" class=\"form-control\" id=\"otracategoria\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"descripcion\" class=\"form-label\">Descripción</label>
                            <textarea name=\"descripcion\" class=\"form-control\" autocomplete=\"off\"></textarea>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <div id=\"botonCrearProducto\" class=\"btn btn-primary\">Añadir producto</div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearImportacion\" aria-labelledby=\"crearImportacionLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-fullscreen\">
            <div class=\"modal-content\">
                <form action=\"\" method=\"post\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Realizar recepción de pedidos</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Fecha:</label>
                                                    <input value=\"{{ 'now' | date('d-m-Y') }}\" name=\"fecha\" type=\"text\" class=\"form-control\" id='kt_flatpickr' required pattern=\"(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}\" title=\"La fecha debe formarse como dd-mm-yyyy\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Albarán:</label>
                                                    <input name=\"albaran\" type=\"text\" class=\"form-control\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Factura:</label>
                                                    <input name=\"factura\" type=\"text\" class=\"form-control\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <label for=\"proveedor\" class=\"form-label\">Proveedor:</label>
                                                <select name=\"proveedor\" class=\"form-select form-select-solid\" select2=\"proveedor\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                                    <option value=\" \">---</option>
                                                    {% for objeto in proveedores %}
                                                        <option value=\"{{ objeto.id }}\">{{ objeto.nombre }}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <label for=\"otroproveedor\" class=\"form-label\">Otro proveedor si no existe:</label>
                                                <input type=\"text\" name=\"otroproveedor\" class=\"form-control\" id=\"otroproveedor\" autocomplete=\"off\">
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Observaciones:</label>
                                                    <textarea name=\"observaciones\" class=\"form-control\"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12 col-lg-5 mt-3\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Buscador</h5>
                                        </div>
                                        <div class=\"modal-body\">
                                            <div class=\"row\">
                                                <div class=\"col-12 col-md-12\">
                                                    <div class=\"form-group\">
                                                        <label for=\"categoria\" class=\"form-label\">Categoría</label>
                                                        <select name=\"categoria\" id=\"categoria\" class=\"form-select form-select-solid\" select2=\"categoria2\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                                            <option value=\" \">---</option>
                                                            {% for objeto in categorias %}
                                                                <option value=\"{{ objeto.id }}\">{{ objeto }}</option>
                                                            {% endfor %}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-md-12 mt-3\">
                                                    <div class=\"form-group\">
                                                        <label class=\"form-label\">Subcategoría:</label>
                                                        <select name=\"subcategoria\" class=\"form-select form-select-solid\" id=\"subcategoria\" >
                                                            <option data-categoria=\"0\" value=\"\">---</option>
                                                            {% for objeto in subcategorias %}
                                                                <option data-categoria=\"{{ objeto.categoria.id }}\" value=\"{{ objeto.id }}\">{{ objeto.nombre }}</option>
                                                            {% endfor %}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-md-6 mt-3\">
                                                    <div class=\"form-group\">
                                                        <select name=\"tipo\" id=\"tipo\" class=\"form-select form-select-solid\" >
                                                            <option value=\"nombre\">Nombre</option>
                                                            <option value=\"codigo\">Código</option>
                                                            <option value=\"referencia\">Referencia</option>
                                                            <option value=\"codigoBarra\">Código de barras</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-md-6 mt-3\">
                                                    <div class=\"form-group\">
                                                        <input name=\"referencia\" id=\"referencia\" type=\"text\" class=\"form-control\" />
                                                        <input type=\"hidden\" name=\"almacen\" value=\"{{ almacen.id }}\" class=\"form-control\" id=\"almacen\" autocomplete=\"off\" />
                                                    </div>
                                                </div>
                                                <div id=\"alerta-producto\" style=\"display: none;\">
                                                    <div class=\"col-12 col-md-12 mt-3\">
                                                        <div class=\"alert alert-warning mt-10\" role=\"alert\">
                                                            <strong>No existe ningún producto con las características buscadas. Si el producto que buscas no existe puedes crearlo desde <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearProducto\" id=\"kt_toolbar_primary_button\">aquí</a>.</strong> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-12\">
                                                    <hr />
                                                    <div class=\"table-responsive\" id=\"tabla\" style=\"display: none;\">
                                                        <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                                            <thead>
                                                                <tr>
                                                                    <th>FOTO</th>
                                                                    <th>PRODUCTO</th>
                                                                    <th width=\"50px\">AÑADIR</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id=\"productos\"></tbody>
                                                        </table> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class=\"col-12 col-lg-7 mt-3\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Lotes</h5>
                                        </div>
                                        <div class=\"modal-body\">
                                            <div class=\"row\">
                                                <div class=\"col-12 col-md-12\">
                                                    <div class=\"table-responsive\">
                                                        <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                                            <thead>
                                                                <tr>
                                                                    <th>FOTO</th>
                                                                    <th>NOMBRE</th>
                                                                    <th>CANTIDAD</th>
                                                                    <th>LOTE</th>
                                                                    <th>FECHA CADUCIDAD</th>
                                                                    <th>PRECIO UD.</th>
                                                                    <th width=\"50px\">QUITAR</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id=\"importacion\"></tbody>
                                                        </table> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" name=\"boton\" value=\"guardar\" class=\"btn btn-primary\">Guardar datos</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

{% endblock %}
{% block js %}
    <script src=\"{{ asset('javascript/importacion.js') }}\"></script>
    <script>
        categoriajs();
    </script>
{% endblock %}", "almacen/importacion/index.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\almacen\\importacion\\index.html.twig");
    }
}
