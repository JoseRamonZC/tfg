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

/* almacen/importacion/show.html.twig */
class __TwigTemplate_5757e6c9699493469f38441ee7df72c4bd91ed5f3cc74c06878249a9274c32a4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/importacion/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/importacion/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "almacen/importacion/show.html.twig", 1);
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

        echo "Detalle de la recepci??n del pedido";
        
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
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle de la recepci??n del pedido</h1>
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
        echo "\" class=\"text-gray-600 text-hover-primary\">Recepci??n de pedidos</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle de la recepci??n del pedido</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_import_index", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-primary\" >
                    Volver al listado de recepci??n de pedidos</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"card\">
            <form action=\"\" method=\"post\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Datos de la recepci??n del pedido</h5>
                    <div class=\"card-text\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Fecha:</label>
                                                    <input name=\"fecha\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["importacion"]) || array_key_exists("importacion", $context) ? $context["importacion"] : (function () { throw new RuntimeError('Variable "importacion" does not exist.', 39, $this->source); })()), "fecha", [], "any", false, false, false, 39), "d-m-Y"), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" id='kt_flatpickr' required pattern=\"(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}\" title=\"La fecha debe formarse como dd-mm-yyyy\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Albar??n:</label>
                                                    <input name=\"albaran\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["importacion"]) || array_key_exists("importacion", $context) ? $context["importacion"] : (function () { throw new RuntimeError('Variable "importacion" does not exist.', 45, $this->source); })()), "albaran", [], "any", false, false, false, 45), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Factura:</label>
                                                    <input name=\"factura\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["importacion"]) || array_key_exists("importacion", $context) ? $context["importacion"] : (function () { throw new RuntimeError('Variable "importacion" does not exist.', 51, $this->source); })()), "factura", [], "any", false, false, false, 51), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <label for=\"proveedor\" class=\"form-label\">Proveedor:</label>
                                                <select name=\"proveedor\" class=\"form-select form-select-solid\" select2=\"proveedor\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                                    <option value=\" \">---</option>
                                                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proveedores"]) || array_key_exists("proveedores", $context) ? $context["proveedores"] : (function () { throw new RuntimeError('Variable "proveedores" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 59
            echo "                                                        <option ";
            if ((0 === twig_compare($context["objeto"], twig_get_attribute($this->env, $this->source, (isset($context["importacion"]) || array_key_exists("importacion", $context) ? $context["importacion"] : (function () { throw new RuntimeError('Variable "importacion" does not exist.', 59, $this->source); })()), "proveedor", [], "any", false, false, false, 59)))) {
                echo "selected";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 59), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <label for=\"otroproveedor\" class=\"form-label\">Otro proveedor si no existe:</label>
                                                <input type=\"text\" name=\"otroproveedor\" class=\"form-control\" id=\"otroproveedor\" autocomplete=\"off\">
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Observaciones:</label>
                                                    <textarea name=\"observaciones\" class=\"form-control\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["importacion"]) || array_key_exists("importacion", $context) ? $context["importacion"] : (function () { throw new RuntimeError('Variable "importacion" does not exist.', 70, $this->source); })()), "observaciones", [], "any", false, false, false, 70), "html", null, true);
        echo "</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card-footer\">
                    <button type=\"submit\" name=\"boton\" value=\"editar\" class=\"btn btn-primary\">Guardar modificaci??n</button>
                </div>
            </form>
        </div>
        <div class=\"card mt-5\">
            <form action=\"\" method=\"post\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Lotes incluidos en la recepci??n del pedido</h5>
                    <div class=\"card-text\">
                        <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                            <thead>
                                <tr>
                                    <th>PRODUCTO</th>
                                    <th>LOTE</th>
                                    <th>CANTIDAD</th>
                                    <th>FECHA CADUCIDAD</th>
                                    ";
        // line 97
        if (twig_in_filter("ROLE_ADMINISTRADOR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "roles", [], "any", false, false, false, 97))) {
            echo " <th>PRECIO</th> ";
        }
        // line 98
        echo "                                    <th width=\"50px\">DETALLE</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 102
        $context["totalPrecio"] = 0;
        // line 103
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["importacion"]) || array_key_exists("importacion", $context) ? $context["importacion"] : (function () { throw new RuntimeError('Variable "importacion" does not exist.', 103, $this->source); })()), "lotes", [], "any", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 104
            echo "                                    <tr>
                                        <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "lote", [], "any", false, false, false, 105), "producto", [], "any", false, false, false, 105), "producto", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
                                        <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "lote", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
                                        <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "cantidad", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
                                        <td>";
            // line 108
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "lote", [], "any", false, false, false, 108), "fechaCaducidad", [], "any", false, false, false, 108)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "lote", [], "any", false, false, false, 108), "fechaCaducidad", [], "any", false, false, false, 108), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
                                        ";
            // line 109
            if (twig_in_filter("ROLE_ADMINISTRADOR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "roles", [], "any", false, false, false, 109))) {
                // line 110
                echo "                                            <td class=\"text-right\">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "precio", [], "any", false, false, false, 110), 2, ",", "."), "html", null, true);
                echo " ??? (";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["objeto"], "precio", [], "any", false, false, false, 110) * twig_get_attribute($this->env, $this->source, $context["objeto"], "cantidad", [], "any", false, false, false, 110)), 2, ",", "."), "html", null, true);
                echo " ???)</td>
                                            ";
                // line 111
                $context["totalPrecio"] = ((isset($context["totalPrecio"]) || array_key_exists("totalPrecio", $context) ? $context["totalPrecio"] : (function () { throw new RuntimeError('Variable "totalPrecio" does not exist.', 111, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["objeto"], "precio", [], "any", false, false, false, 111) * twig_get_attribute($this->env, $this->source, $context["objeto"], "cantidad", [], "any", false, false, false, 111)));
                // line 112
                echo "                                        ";
            }
            // line 113
            echo "                                        <td class=\"text-center align-middle\">
                                            <a class=\"btn btn-primary btn-icon\" href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_import_lot_show", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 114, $this->source); })()), "id", [], "any", false, false, false, 114), "id" => twig_get_attribute($this->env, $this->source, (isset($context["importacion"]) || array_key_exists("importacion", $context) ? $context["importacion"] : (function () { throw new RuntimeError('Variable "importacion" does not exist.', 114, $this->source); })()), "id", [], "any", false, false, false, 114), "importacionLote" => twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 114)]), "html", null, true);
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
        // line 120
        echo "                                ";
        if (twig_in_filter("ROLE_ADMINISTRADOR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "roles", [], "any", false, false, false, 120))) {
            // line 121
            echo "                                    <tr>
                                        <td class=\"text-right\" colspan=\"5\"><b>Total: ";
            // line 122
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalPrecio"]) || array_key_exists("totalPrecio", $context) ? $context["totalPrecio"] : (function () { throw new RuntimeError('Variable "totalPrecio" does not exist.', 122, $this->source); })()), 2, ",", "."), "html", null, true);
            echo " ???</b></td>
                                        <td class=\"text-right\"></td>
                                    </tr>
                                ";
        }
        // line 126
        echo "                            </tbody>
                        </table> 
                    </div>
                </div>
                <div class=\"card-footer\">
                    <a href=\"#\"  data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearImportacion\" class=\"btn btn-primary\">A??adir m??s lotes</a>
                </div>
            </form>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearImportacion\" aria-labelledby=\"crearImportacionLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-fullscreen\">
            <div class=\"modal-content\">
                <form action=\"\" method=\"post\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">A??adir lotes</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
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
                                                        <label for=\"categoria\" class=\"form-label\">Categor??a</label>
                                                        <select name=\"categoria\" id=\"categoria\" class=\"form-select form-select-solid\" select2=\"categoria2\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                                            <option value=\" \">---</option>
                                                            ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 160, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 161
            echo "                                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 161), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["objeto"], "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-md-12 mt-3\">
                                                    <div class=\"form-group\">
                                                        <label class=\"form-label\">Subcategor??a:</label>
                                                        <select name=\"subcategoria\" class=\"form-select form-select-solid\" id=\"subcategoria\" >
                                                            <option data-categoria=\"0\" value=\"\">---</option>
                                                            ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subcategorias"]) || array_key_exists("subcategorias", $context) ? $context["subcategorias"] : (function () { throw new RuntimeError('Variable "subcategorias" does not exist.', 171, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 172
            echo "                                                                <option data-categoria=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "categoria", [], "any", false, false, false, 172), "id", [], "any", false, false, false, 172), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 172), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 172), "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-md-6 mt-3\">
                                                    <div class=\"form-group\">
                                                        <select name=\"tipo\" id=\"tipo\" class=\"form-select form-select-solid\" >
                                                            <option value=\"nombre\">Nombre</option>
                                                            <option value=\"codigo\">C??digo</option>
                                                            <option value=\"referencia\">Referencia</option>
                                                            <option value=\"codigoBarra\">C??digo de barras</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-md-6 mt-3\">
                                                    <div class=\"form-group\">
                                                        <input name=\"referencia\" id=\"referencia\" type=\"text\" class=\"form-control\"/>
                                                        <input type=\"hidden\" name=\"almacen\" value=\"";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 190, $this->source); })()), "id", [], "any", false, false, false, 190), "html", null, true);
        echo "\" class=\"form-control\" id=\"almacen\" autocomplete=\"off\" />
                                                    </div>
                                                </div>
                                                <div id=\"alerta-producto\" style=\"display: none;\">
                                                    <div class=\"col-12 col-md-12 mt-3\">
                                                        <div class=\"alert alert-warning mt-10\" role=\"alert\">
                                                            <strong>No existe ning??n producto con las caracter??sticas buscadas. Si el producto que buscas no existe puedes crearlo desde <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearProducto\" id=\"kt_toolbar_primary_button\">aqu??</a>.</strong> 
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
                                                                    <th width=\"50px\">A??ADIR</th>
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
                                                                    <th>FECHA CADUCIDAD</th>
                                                                    <th>LOTE</th>
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
                        <button type=\"submit\" name=\"boton\" value=\"add\" class=\"btn btn-primary\">A??adir lotes</button>
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
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">A??adir nuevo producto</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"mb-3\">
                            <label for=\"nombre\" class=\"form-label\">Nombre</label>
                            <input type=\"text\" name=\"nombre\" required class=\"form-control\" id=\"producto\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"codigo\" class=\"form-label\">C??digo</label>
                            <input type=\"text\" name=\"codigo\" class=\"form-control\" id=\"codigo\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"referencia\" class=\"form-label\">Referencia</label>
                            <input type=\"text\" name=\"referencia\" class=\"form-control\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"codigoBarra\" class=\"form-label\">C??digo de barras</label>
                            <input type=\"text\" name=\"codigoBarra\" class=\"form-control\" id=\"codigoBarra\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"precio\" class=\"form-label\">Precio</label>
                            <input type=\"number\" step=\"any\" min=\"0\" value=\"0\" name=\"precio\" required class=\"form-control\" id=\"precio\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"categoria\" class=\"form-label\">Categor??a</label>
                            <select name=\"categoria\" class=\"form-select form-select-solid\" select2=\"categoria\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                <option value=\" \">---</option>
                                ";
        // line 296
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 296, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 297
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 297), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["objeto"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 299
        echo "                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"otracategoria\" class=\"form-label\">Otra categor??a si no existe</label>
                            <input type=\"text\" name=\"otracategoria\" class=\"form-control\" id=\"otracategoria\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"descripcion\" class=\"form-label\">Descripci??n</label>
                            <textarea name=\"descripcion\" class=\"form-control\" autocomplete=\"off\"></textarea>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <div id=\"botonCrearProducto\" class=\"btn btn-primary\">A??adir producto</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 318
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 319
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript/importacion.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "almacen/importacion/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 319,  549 => 318,  521 => 299,  510 => 297,  506 => 296,  397 => 190,  379 => 174,  366 => 172,  362 => 171,  352 => 163,  341 => 161,  337 => 160,  301 => 126,  294 => 122,  291 => 121,  288 => 120,  276 => 114,  273 => 113,  270 => 112,  268 => 111,  261 => 110,  259 => 109,  255 => 108,  251 => 107,  247 => 106,  243 => 105,  240 => 104,  235 => 103,  233 => 102,  227 => 98,  223 => 97,  193 => 70,  182 => 61,  167 => 59,  163 => 58,  153 => 51,  144 => 45,  135 => 39,  112 => 19,  103 => 13,  97 => 10,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Detalle de la recepci??n del pedido{% endblock %}
{% block body %}
    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle de la recepci??n del pedido</h1>
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('app_index') }}\" class=\"text-gray-600 text-hover-primary\">Inicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('warehouse_import_index',{'almacen':almacen.id}) }}\" class=\"text-gray-600 text-hover-primary\">Recepci??n de pedidos</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle de la recepci??n del pedido</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"{{ path('warehouse_import_index',{'almacen':almacen.id}) }}\" class=\"btn btn-sm btn-primary\" >
                    Volver al listado de recepci??n de pedidos</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"card\">
            <form action=\"\" method=\"post\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Datos de la recepci??n del pedido</h5>
                    <div class=\"card-text\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Fecha:</label>
                                                    <input name=\"fecha\" value=\"{{ importacion.fecha | date('d-m-Y') }}\" type=\"text\" class=\"form-control\" id='kt_flatpickr' required pattern=\"(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}\" title=\"La fecha debe formarse como dd-mm-yyyy\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Albar??n:</label>
                                                    <input name=\"albaran\" value=\"{{ importacion.albaran }}\" type=\"text\" class=\"form-control\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Factura:</label>
                                                    <input name=\"factura\" value=\"{{ importacion.factura }}\" type=\"text\" class=\"form-control\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <label for=\"proveedor\" class=\"form-label\">Proveedor:</label>
                                                <select name=\"proveedor\" class=\"form-select form-select-solid\" select2=\"proveedor\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                                    <option value=\" \">---</option>
                                                    {% for objeto in proveedores %}
                                                        <option {% if objeto == importacion.proveedor %}selected{% endif %} value=\"{{ objeto.id }}\">{{ objeto.nombre }}</option>
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
                                                    <textarea name=\"observaciones\" class=\"form-control\">{{ importacion.observaciones }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card-footer\">
                    <button type=\"submit\" name=\"boton\" value=\"editar\" class=\"btn btn-primary\">Guardar modificaci??n</button>
                </div>
            </form>
        </div>
        <div class=\"card mt-5\">
            <form action=\"\" method=\"post\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Lotes incluidos en la recepci??n del pedido</h5>
                    <div class=\"card-text\">
                        <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                            <thead>
                                <tr>
                                    <th>PRODUCTO</th>
                                    <th>LOTE</th>
                                    <th>CANTIDAD</th>
                                    <th>FECHA CADUCIDAD</th>
                                    {% if 'ROLE_ADMINISTRADOR' in app.user.roles %} <th>PRECIO</th> {% endif %}
                                    <th width=\"50px\">DETALLE</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% set totalPrecio = 0 %}
                                {% for objeto in importacion.lotes %}
                                    <tr>
                                        <td>{{ objeto.lote.producto.producto }}</td>
                                        <td>{{ objeto.lote }}</td>
                                        <td>{{ objeto.cantidad }}</td>
                                        <td>{{ objeto.lote.fechaCaducidad ? objeto.lote.fechaCaducidad | date('d-m-Y') }}</td>
                                        {% if 'ROLE_ADMINISTRADOR' in app.user.roles %}
                                            <td class=\"text-right\">{{ objeto.precio | number_format(2,',','.') }} ??? ({{ (objeto.precio*objeto.cantidad) | number_format(2,',','.') }} ???)</td>
                                            {% set totalPrecio = totalPrecio+objeto.precio*objeto.cantidad %}
                                        {% endif %}
                                        <td class=\"text-center align-middle\">
                                            <a class=\"btn btn-primary btn-icon\" href=\"{{ path('warehouse_import_lot_show',{'almacen':almacen.id,'id':importacion.id,'importacionLote':objeto.id}) }}\">
                                                <i class=\"las la-eye fs-2x\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                                {% if 'ROLE_ADMINISTRADOR' in app.user.roles %}
                                    <tr>
                                        <td class=\"text-right\" colspan=\"5\"><b>Total: {{ totalPrecio | number_format(2,',','.') }} ???</b></td>
                                        <td class=\"text-right\"></td>
                                    </tr>
                                {% endif %}
                            </tbody>
                        </table> 
                    </div>
                </div>
                <div class=\"card-footer\">
                    <a href=\"#\"  data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearImportacion\" class=\"btn btn-primary\">A??adir m??s lotes</a>
                </div>
            </form>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearImportacion\" aria-labelledby=\"crearImportacionLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-fullscreen\">
            <div class=\"modal-content\">
                <form action=\"\" method=\"post\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">A??adir lotes</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
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
                                                        <label for=\"categoria\" class=\"form-label\">Categor??a</label>
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
                                                        <label class=\"form-label\">Subcategor??a:</label>
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
                                                            <option value=\"codigo\">C??digo</option>
                                                            <option value=\"referencia\">Referencia</option>
                                                            <option value=\"codigoBarra\">C??digo de barras</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-md-6 mt-3\">
                                                    <div class=\"form-group\">
                                                        <input name=\"referencia\" id=\"referencia\" type=\"text\" class=\"form-control\"/>
                                                        <input type=\"hidden\" name=\"almacen\" value=\"{{ almacen.id }}\" class=\"form-control\" id=\"almacen\" autocomplete=\"off\" />
                                                    </div>
                                                </div>
                                                <div id=\"alerta-producto\" style=\"display: none;\">
                                                    <div class=\"col-12 col-md-12 mt-3\">
                                                        <div class=\"alert alert-warning mt-10\" role=\"alert\">
                                                            <strong>No existe ning??n producto con las caracter??sticas buscadas. Si el producto que buscas no existe puedes crearlo desde <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearProducto\" id=\"kt_toolbar_primary_button\">aqu??</a>.</strong> 
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
                                                                    <th width=\"50px\">A??ADIR</th>
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
                                                                    <th>FECHA CADUCIDAD</th>
                                                                    <th>LOTE</th>
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
                        <button type=\"submit\" name=\"boton\" value=\"add\" class=\"btn btn-primary\">A??adir lotes</button>
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
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">A??adir nuevo producto</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"mb-3\">
                            <label for=\"nombre\" class=\"form-label\">Nombre</label>
                            <input type=\"text\" name=\"nombre\" required class=\"form-control\" id=\"producto\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"codigo\" class=\"form-label\">C??digo</label>
                            <input type=\"text\" name=\"codigo\" class=\"form-control\" id=\"codigo\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"referencia\" class=\"form-label\">Referencia</label>
                            <input type=\"text\" name=\"referencia\" class=\"form-control\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"codigoBarra\" class=\"form-label\">C??digo de barras</label>
                            <input type=\"text\" name=\"codigoBarra\" class=\"form-control\" id=\"codigoBarra\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"precio\" class=\"form-label\">Precio</label>
                            <input type=\"number\" step=\"any\" min=\"0\" value=\"0\" name=\"precio\" required class=\"form-control\" id=\"precio\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"categoria\" class=\"form-label\">Categor??a</label>
                            <select name=\"categoria\" class=\"form-select form-select-solid\" select2=\"categoria\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                <option value=\" \">---</option>
                                {% for objeto in categorias %}
                                    <option value=\"{{ objeto.id }}\">{{ objeto }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"otracategoria\" class=\"form-label\">Otra categor??a si no existe</label>
                            <input type=\"text\" name=\"otracategoria\" class=\"form-control\" id=\"otracategoria\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"descripcion\" class=\"form-label\">Descripci??n</label>
                            <textarea name=\"descripcion\" class=\"form-control\" autocomplete=\"off\"></textarea>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <div id=\"botonCrearProducto\" class=\"btn btn-primary\">A??adir producto</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}
{% block js %}
    <script src=\"{{ asset('javascript/importacion.js') }}\"></script>
{% endblock %}", "almacen/importacion/show.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\almacen\\importacion\\show.html.twig");
    }
}
