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
class __TwigTemplate_c837ab9e8b2bdf7e894b6d67af23d2387987e0ddd6953e2c87a997a1934c3973 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "almacen/importacion/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Recepción de pedidos";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Recepción de pedidos del almacén \"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "nombre", [], "any", false, false, false, 7), "html", null, true);
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
        if ((0 === twig_compare(($context["tipoFecha"] ?? null), "fecha"))) {
            echo "selected";
        }
        echo ">Recepción del pedido</option>
                                <option value=\"fechaCreado\" ";
        // line 45
        if ((0 === twig_compare(($context["tipoFecha"] ?? null), "fechaCreado"))) {
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["desde"] ?? null), "d-m-Y"), "html", null, true);
        echo "\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"desde\" />
                        </div>
                        <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                            <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                <span>Hasta</span>
                            </label>
                            <input type=\"text\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["hasta"] ?? null), "d-m-Y"), "html", null, true);
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
        if (((((((($context["categoria"] ?? null) || ($context["producto"] ?? null)) || ($context["albaran"] ?? null)) || ($context["factura"] ?? null)) || ($context["proveedor"] ?? null)) || (0 === twig_compare(($context["id"] ?? null), "0"))) || ($context["id"] ?? null))) {
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
        echo twig_escape_filter($this->env, ($context["buscadorAvanzado"] ?? null), "html", null, true);
        echo "\" id=\"kt_advanced_search_form\">
                        <div class=\"separator separator-dashed mt-9 mb-6\"></div>
                        <div class=\"row g-8\">
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Albarán</span>
                                </label>
                                <input type=\"text\" class=\"form-control form-control-solid ps-10\" name=\"albaran\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, ($context["albaran"] ?? null), "html", null, true);
        echo "\" placeholder=\"Albarán\" />
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Factura</span>
                                </label>
                                <input type=\"text\" class=\"form-control form-control-solid ps-10\" name=\"factura\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, ($context["factura"] ?? null), "html", null, true);
        echo "\" placeholder=\"Factura\" />
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Producto</span>
                                </label>
                                <input type=\"text\" class=\"form-control form-control-solid ps-10\" name=\"producto\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["producto"] ?? null), "html", null, true);
        echo "\" placeholder=\"Producto/Código/Referencia/Código de barras\" />
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>ID producto</span>
                                </label>
                                <input type=\"number\" min=\"1\" class=\"form-control form-control-solid ps-10\" name=\"id\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 106
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 106), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 106), ($context["categoria"] ?? null)))) {
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
        $context['_seq'] = twig_ensure_traversable(($context["proveedores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 117
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 117), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 117), ($context["proveedor"] ?? null)))) {
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
        $context['_seq'] = twig_ensure_traversable(($context["importaciones"] ?? null));
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
            if (twig_in_filter("ROLE_ADMINISTRADOR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 153), "roles", [], "any", false, false, false, 153))) {
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
                if (twig_in_filter("ROLE_ADMINISTRADOR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 165), "roles", [], "any", false, false, false, 165))) {
                    // line 166
                    echo "                                                            <td class=\"text-right\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 166), 2, ",", "."), "html", null, true);
                    echo " €/ud (";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 166) * twig_get_attribute($this->env, $this->source, $context["producto"], "cantidad", [], "any", false, false, false, 166)), 2, ",", "."), "html", null, true);
                    echo " €)</td>
                                                            ";
                    // line 167
                    $context["totalPrecio"] = (($context["totalPrecio"] ?? null) + (twig_get_attribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 167) * twig_get_attribute($this->env, $this->source, $context["producto"], "cantidad", [], "any", false, false, false, 167)));
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
            if (twig_in_filter("ROLE_ADMINISTRADOR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 171), "roles", [], "any", false, false, false, 171))) {
                // line 172
                echo "                                                    <tr>
                                                        <td class=\"text-right\" colspan=\"5\"><b>Total: ";
                // line 173
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalPrecio"] ?? null), 2, ",", "."), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_import_show", ["almacen" => twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "id", [], "any", false, false, false, 180), "id" => twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 180)]), "html", null, true);
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["importaciones"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["proveedores"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["proveedores"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["subcategorias"] ?? null));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "id", [], "any", false, false, false, 450), "html", null, true);
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
    }

    // line 524
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 525
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript/importacion.js"), "html", null, true);
        echo "\"></script>
    <script>
        categoriajs();
    </script>
";
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
        return array (  824 => 525,  820 => 524,  742 => 450,  724 => 434,  711 => 432,  707 => 431,  697 => 423,  686 => 421,  682 => 420,  649 => 389,  638 => 387,  634 => 386,  612 => 367,  574 => 331,  563 => 329,  559 => 328,  491 => 262,  480 => 260,  476 => 259,  454 => 240,  403 => 192,  395 => 186,  383 => 180,  377 => 176,  371 => 173,  368 => 172,  365 => 171,  358 => 169,  355 => 168,  353 => 167,  346 => 166,  344 => 165,  340 => 164,  336 => 163,  332 => 162,  329 => 161,  324 => 160,  322 => 159,  317 => 156,  313 => 154,  311 => 153,  298 => 144,  294 => 143,  290 => 142,  286 => 141,  282 => 139,  278 => 138,  257 => 119,  242 => 117,  238 => 116,  228 => 108,  213 => 106,  209 => 105,  198 => 97,  189 => 91,  180 => 85,  171 => 79,  160 => 72,  157 => 71,  154 => 70,  151 => 69,  148 => 68,  146 => 67,  134 => 58,  125 => 52,  113 => 45,  107 => 44,  70 => 10,  64 => 7,  59 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "almacen/importacion/index.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\almacen\\importacion\\index.html.twig");
    }
}
