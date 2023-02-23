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

/* almacen/asignacion/index.html.twig */
class __TwigTemplate_e6d4e5dbe44175b19d70f32d5b17b6eacac9f85e876b0e52b40f67fd2d56c709 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "almacen/asignacion/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Asignaciones";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Asignaciones del almacén \"";
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
                    <li class=\"breadcrumb-item text-gray-600\">Asignaciones</li>
                </ul>
            </div>
            <div class=\"align-items-center py-2\">
                <a href=\"#\" class=\"btn btn-sm btn-primary btn-flex\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearAsignacion\" id=\"kt_toolbar_primary_button\">
                    <span class=\"svg-icon svg-icon-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                            <rect opacity=\"0.5\" x=\"11.364\" y=\"20.364\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-90 11.364 20.364)\" fill=\"currentColor\" />
                            <rect x=\"4.36396\" y=\"11.364\" width=\"16\" height=\"2\" rx=\"1\" fill=\"currentColor\" />
                        </svg>
                    </span>
                    Realizar asignación de materiales</a>
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
        // line 37
        if ((0 === twig_compare(($context["tipoFecha"] ?? null), "fecha"))) {
            echo "selected";
        }
        echo ">Asignación</option>
                                <option value=\"fechaCreado\" ";
        // line 38
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
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["desde"] ?? null), "d-m-Y"), "html", null, true);
        echo "\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"desde\" />
                        </div>
                        <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                            <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                <span>Hasta</span>
                            </label>
                            <input type=\"text\" value=\"";
        // line 51
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
        // line 60
        if (((((($context["categoria"] ?? null) || ($context["producto"] ?? null)) || ($context["areaServicio"] ?? null)) || (0 === twig_compare(($context["id"] ?? null), "0"))) || ($context["id"] ?? null))) {
            // line 61
            echo "                        ";
            $context["buscadorAvanzado"] = "show";
            // line 62
            echo "                    ";
        } else {
            // line 63
            echo "                        ";
            $context["buscadorAvanzado"] = "";
            // line 64
            echo "                    ";
        }
        // line 65
        echo "                    <div class=\"collapse ";
        echo twig_escape_filter($this->env, ($context["buscadorAvanzado"] ?? null), "html", null, true);
        echo "\" id=\"kt_advanced_search_form\">
                        <div class=\"separator separator-dashed mt-9 mb-6\"></div>
                        <div class=\"row g-8\">
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Producto</span>
                                </label>
                                <input type=\"text\" class=\"form-control form-control-solid ps-10\" name=\"producto\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["producto"] ?? null), "html", null, true);
        echo "\" placeholder=\"Producto/Código/Referencia/Código de barras\" />
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>ID producto</span>
                                </label>
                                <input type=\"number\" min=\"1\" class=\"form-control form-control-solid ps-10\" name=\"id\" value=\"";
        // line 78
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
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 87
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 87), ($context["categoria"] ?? null)))) {
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
        // line 89
        echo "                                </select>
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Área de servicio</span>
                                </label>
                                <select name=\"areaServicio\" class=\"form-select form-select-solid\" data-placeholder=\"Área de servicio\">
                                    <option value=\"\">---</option>
                                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 98
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 98), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 98), ($context["areaServicio"] ?? null)))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 98), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
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
                                <th>ÁREA DE SERVICIO</th>
                                <th>FECHA</th>
                                <th>ASIGNACIÓN</th>
                                <th>PRODUCTOS</th>
                                <th width=\"50px\">DETALLE</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["asignaciones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 122
            echo "                                <tr>
                                    <td>";
            // line 123
            if (twig_get_attribute($this->env, $this->source, $context["objeto"], "terceros", [], "any", false, false, false, 123)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "terceros", [], "any", false, false, false, 123), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "areaServicio", [], "any", false, false, false, 123), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 124
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "fecha", [], "any", false, false, false, 124), "d-m-Y"), "html", null, true);
            echo "</td>
                                    <td>
                                        Encargado: ";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "encargado", [], "any", false, false, false, 126), "html", null, true);
            echo "<br />
                                        Orden de trabajo: ";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "ordenTrabajo", [], "any", false, false, false, 127), "html", null, true);
            echo "<br />
                                        Observaciones: ";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "observaciones", [], "any", false, false, false, 128), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                            <tbody>
                                                ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["objeto"], "lotes", [], "any", false, false, false, 133));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 134
                echo "                                                    <tr>
                                                        <td>";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "lote", [], "any", false, false, false, 135), "producto", [], "any", false, false, false, 135), "producto", [], "any", false, false, false, 135), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "cantidad", [], "any", false, false, false, 136), "html", null, true);
                echo "</td>
                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "                                            </tbody>
                                        </table> 
                                    </td>
                                    <td class=\"text-center align-middle\">
                                        <a class=\"btn btn-primary btn-icon\" href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_assignament_show", ["almacen" => twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "id", [], "any", false, false, false, 143), "id" => twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 143)]), "html", null, true);
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
        // line 149
        echo "                        </tbody>
                    </table> 
                </div>
            </div>
            <div class=\"card-footer\">
                <div class=\"navigation\">
                    ";
        // line 155
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["asignaciones"] ?? null));
        echo "
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearAsignacion\" aria-labelledby=\"crearAsignacionLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-fullscreen\">
            <div class=\"modal-content\">
                <form action=\"\" method=\"post\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Realizar asignación de materiales</h5>
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
        // line 178
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "\" name=\"fecha\" type=\"text\" class=\"form-control\" id='kt_flatpickr' required pattern=\"(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}\" title=\"La fecha debe formarse como dd-mm-yyyy\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <label for=\"areaServicio\" class=\"form-label\">Área de servicio:</label>
                                                <select name=\"areaServicio\" class=\"form-select form-select-solid\" select2=\"areaServicio\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                                    ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 185
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 185), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 185), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Terceros:</label>
                                                    <input name=\"terceros\" type=\"text\" class=\"form-control\" >
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Encargado:</label>
                                                    <input name=\"encargado\" type=\"text\" class=\"form-control\" >
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Orden de trabajo:</label>
                                                    <textarea name=\"ordenTrabajo\" class=\"form-control\"></textarea>
                                                </div>
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
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 233
            echo "                                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 233), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["objeto"], "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-md-12 mt-3\">
                                                    <div class=\"form-group\">
                                                        <label class=\"form-label\">Subcategoría:</label>
                                                        <select name=\"subcategoria\" class=\"form-select form-select-solid\" id=\"subcategoria\" >
                                                            <option data-categoria=\"0\" value=\"\">---</option>
                                                            ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subcategorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 244
            echo "                                                                <option data-categoria=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "categoria", [], "any", false, false, false, 244), "id", [], "any", false, false, false, 244), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 244), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 244), "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
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
        // line 262
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "id", [], "any", false, false, false, 262), "html", null, true);
        echo "\" class=\"form-control\" id=\"almacen\" autocomplete=\"off\" />
                                                    </div>
                                                </div>
                                                <div id=\"alerta-producto\" style=\"display: none;\">
                                                    <div class=\"col-12 col-md-12 mt-3\">
                                                        <div class=\"alert alert-warning mt-10\" role=\"alert\">
                                                            <strong>No existe ningún producto con las características buscadas.</strong> 
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
                                                                    <th>LOTE</th>
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
                                                                    <th>LOTE</th>
                                                                    <th>CANTIDAD</th>
                                                                    <th width=\"50px\">QUITAR</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id=\"traslado\"></tbody>
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

    // line 335
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 336
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript/traslado.js"), "html", null, true);
        echo "\"></script>
    <script>
        categoriajs();
    </script>
";
    }

    public function getTemplateName()
    {
        return "almacen/asignacion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 336,  571 => 335,  494 => 262,  476 => 246,  463 => 244,  459 => 243,  449 => 235,  438 => 233,  434 => 232,  387 => 187,  376 => 185,  372 => 184,  363 => 178,  337 => 155,  329 => 149,  317 => 143,  311 => 139,  302 => 136,  298 => 135,  295 => 134,  291 => 133,  283 => 128,  279 => 127,  275 => 126,  270 => 124,  262 => 123,  259 => 122,  255 => 121,  232 => 100,  217 => 98,  213 => 97,  203 => 89,  188 => 87,  184 => 86,  173 => 78,  164 => 72,  153 => 65,  150 => 64,  147 => 63,  144 => 62,  141 => 61,  139 => 60,  127 => 51,  118 => 45,  106 => 38,  100 => 37,  70 => 10,  64 => 7,  59 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "almacen/asignacion/index.html.twig", "C:\\xampp\\htdocs\\almacen\\Almacen\\templates\\almacen\\asignacion\\index.html.twig");
    }
}
