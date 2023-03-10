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

/* almacen/traslado/show.html.twig */
class __TwigTemplate_2208670ed95d6454b78a3fb2e40b9222861c56d2238174ca5b60c3932923a4a2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/traslado/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/traslado/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "almacen/traslado/show.html.twig", 1);
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

        echo "Detalle de la traslado";
        
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
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle del traslado</h1>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_transfer_index", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" class=\"text-gray-600 text-hover-primary\">Traslados</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del traslado</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_transfer_index", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-primary\" >
                    Volver al listado de traslados</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"card\">
            <form action=\"\" method=\"post\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Datos de la traslado</h5>
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["traslado"]) || array_key_exists("traslado", $context) ? $context["traslado"] : (function () { throw new RuntimeError('Variable "traslado" does not exist.', 39, $this->source); })()), "fecha", [], "any", false, false, false, 39), "d-m-Y"), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" id='kt_flatpickr' required pattern=\"(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}\" title=\"La fecha debe formarse como dd-mm-yyyy\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <label for=\"almacenB\" class=\"form-label\">Almacén:</label>
                                                <select name=\"almacenB\" class=\"form-select form-select-solid\" select2=\"almacenB\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenes"]) || array_key_exists("almacenes", $context) ? $context["almacenes"] : (function () { throw new RuntimeError('Variable "almacenes" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 46
            echo "                                                        <option ";
            if ((0 === twig_compare($context["objeto"], twig_get_attribute($this->env, $this->source, (isset($context["traslado"]) || array_key_exists("traslado", $context) ? $context["traslado"] : (function () { throw new RuntimeError('Variable "traslado" does not exist.', 46, $this->source); })()), "almacenB", [], "any", false, false, false, 46)))) {
                echo "selected";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 46), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Observaciones:</label>
                                                    <textarea name=\"observaciones\" class=\"form-control\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["traslado"]) || array_key_exists("traslado", $context) ? $context["traslado"] : (function () { throw new RuntimeError('Variable "traslado" does not exist.', 53, $this->source); })()), "observaciones", [], "any", false, false, false, 53), "html", null, true);
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
                    <button type=\"submit\" name=\"boton\" value=\"editar\" class=\"btn btn-primary\">Guardar modificación</button>
                </div>
            </form>
        </div>
        <div class=\"card mt-5\">
            <form action=\"\" method=\"post\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Lotes incluidos en la traslado</h5>
                    <div class=\"card-text\">
                        <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                            <thead>
                                <tr>
                                    <th>PRODUCTO</th>
                                    <th>LOTE</th>
                                    <th>CANTIDAD</th>
                                    <th width=\"50px\">DETALLE</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["traslado"]) || array_key_exists("traslado", $context) ? $context["traslado"] : (function () { throw new RuntimeError('Variable "traslado" does not exist.', 83, $this->source); })()), "lotes", [], "any", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 84
            echo "                                    <tr>
                                        <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "lote", [], "any", false, false, false, 85), "producto", [], "any", false, false, false, 85), "producto", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                                        <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "lote", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                                        <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "cantidad", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                                        <td class=\"text-center align-middle\">
                                            <a class=\"btn btn-primary btn-icon\" href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_transfer_lot_show", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89), "id" => twig_get_attribute($this->env, $this->source, (isset($context["traslado"]) || array_key_exists("traslado", $context) ? $context["traslado"] : (function () { throw new RuntimeError('Variable "traslado" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89), "trasladoLote" => twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 89)]), "html", null, true);
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
        // line 95
        echo "                            </tbody>
                        </table> 
                    </div>
                </div>
                <div class=\"card-footer\">
                    <a href=\"#\"  data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearTraslado\" class=\"btn btn-primary\">Añadir más lotes</a>
                </div>
            </form>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearTraslado\" aria-labelledby=\"crearTrasladoLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-fullscreen\">
            <div class=\"modal-content\">
                <form action=\"\" method=\"post\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Añadir lotes</h5>
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
                                                        <label for=\"categoria\" class=\"form-label\">Categoría</label>
                                                        <select name=\"categoria\" id=\"categoria\" class=\"form-select form-select-solid\" select2=\"categoria2\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                                            <option value=\" \">---</option>
                                                            ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 129, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 130
            echo "                                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 130), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["objeto"], "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-md-12 mt-3\">
                                                    <div class=\"form-group\">
                                                        <label class=\"form-label\">Subcategoría:</label>
                                                        <select name=\"subcategoria\" class=\"form-select form-select-solid\" id=\"subcategoria\" >
                                                            <option data-categoria=\"0\" value=\"\">---</option>
                                                            ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subcategorias"]) || array_key_exists("subcategorias", $context) ? $context["subcategorias"] : (function () { throw new RuntimeError('Variable "subcategorias" does not exist.', 140, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 141
            echo "                                                                <option data-categoria=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "categoria", [], "any", false, false, false, 141), "id", [], "any", false, false, false, 141), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 141), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 141), "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
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
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, false, 159), "html", null, true);
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
                        <button type=\"submit\" name=\"boton\" value=\"add\" class=\"btn btn-primary\">Añadir lotes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 231
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 232
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript/traslado.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "almacen/traslado/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 232,  413 => 231,  331 => 159,  313 => 143,  300 => 141,  296 => 140,  286 => 132,  275 => 130,  271 => 129,  235 => 95,  223 => 89,  218 => 87,  214 => 86,  210 => 85,  207 => 84,  203 => 83,  170 => 53,  163 => 48,  148 => 46,  144 => 45,  135 => 39,  112 => 19,  103 => 13,  97 => 10,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Detalle de la traslado{% endblock %}
{% block body %}
    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle del traslado</h1>
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('app_index') }}\" class=\"text-gray-600 text-hover-primary\">Inicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('warehouse_transfer_index',{'almacen':almacen.id}) }}\" class=\"text-gray-600 text-hover-primary\">Traslados</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del traslado</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"{{ path('warehouse_transfer_index',{'almacen':almacen.id}) }}\" class=\"btn btn-sm btn-primary\" >
                    Volver al listado de traslados</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"card\">
            <form action=\"\" method=\"post\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Datos de la traslado</h5>
                    <div class=\"card-text\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Fecha:</label>
                                                    <input name=\"fecha\" value=\"{{ traslado.fecha | date('d-m-Y') }}\" type=\"text\" class=\"form-control\" id='kt_flatpickr' required pattern=\"(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}\" title=\"La fecha debe formarse como dd-mm-yyyy\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <label for=\"almacenB\" class=\"form-label\">Almacén:</label>
                                                <select name=\"almacenB\" class=\"form-select form-select-solid\" select2=\"almacenB\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                                    {% for objeto in almacenes %}
                                                        <option {% if objeto == traslado.almacenB %}selected{% endif %} value=\"{{ objeto.id }}\">{{ objeto.nombre }}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"col-12 col-md-4 mb-3\">
                                                <div class=\"form-group\">
                                                    <label class=\"form-label\">Observaciones:</label>
                                                    <textarea name=\"observaciones\" class=\"form-control\">{{ traslado.observaciones }}</textarea>
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
                    <button type=\"submit\" name=\"boton\" value=\"editar\" class=\"btn btn-primary\">Guardar modificación</button>
                </div>
            </form>
        </div>
        <div class=\"card mt-5\">
            <form action=\"\" method=\"post\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Lotes incluidos en la traslado</h5>
                    <div class=\"card-text\">
                        <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                            <thead>
                                <tr>
                                    <th>PRODUCTO</th>
                                    <th>LOTE</th>
                                    <th>CANTIDAD</th>
                                    <th width=\"50px\">DETALLE</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for objeto in traslado.lotes %}
                                    <tr>
                                        <td>{{ objeto.lote.producto.producto }}</td>
                                        <td>{{ objeto.lote }}</td>
                                        <td>{{ objeto.cantidad }}</td>
                                        <td class=\"text-center align-middle\">
                                            <a class=\"btn btn-primary btn-icon\" href=\"{{ path('warehouse_transfer_lot_show',{'almacen':almacen.id,'id':traslado.id,'trasladoLote':objeto.id}) }}\">
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
                    <a href=\"#\"  data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearTraslado\" class=\"btn btn-primary\">Añadir más lotes</a>
                </div>
            </form>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearTraslado\" aria-labelledby=\"crearTrasladoLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-fullscreen\">
            <div class=\"modal-content\">
                <form action=\"\" method=\"post\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Añadir lotes</h5>
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
                        <button type=\"submit\" name=\"boton\" value=\"add\" class=\"btn btn-primary\">Añadir lotes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}
{% block js %}
    <script src=\"{{ asset('javascript/traslado.js') }}\"></script>
{% endblock %}", "almacen/traslado/show.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\almacen\\traslado\\show.html.twig");
    }
}
