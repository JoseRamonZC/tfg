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

/* area_servicio/show.html.twig */
class __TwigTemplate_f2153736d2f3ad627f4a972b2cf5766cbfc40987d741af10e4e17c8794753033 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "area_servicio/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "area_servicio/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "area_servicio/show.html.twig", 1);
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

        echo "Detalle del área de servicio";
        
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
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle del área de servicio</h1>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_areas_index");
        echo "\" class=\"text-gray-600 text-hover-primary\">Áreas de servicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del área de servicio</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_areas_index");
        echo "\" class=\"btn btn-sm btn-primary\" >
                    Volver al listado de áreas de servicio</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"mb-5 hover-scroll-x\">
            <div class=\"d-grid\">
                <ul class=\"nav nav-tabs flex-nowrap text-nowrap\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 active btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_area\">
                            <i class=\"las la-store fs-2x\"></i> Detalle del área de servicio
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
            <div class=\"tab-pane fade show active\" id=\"kt_tab_area\" role=\"tabpanel\">
                <div class=\"card\">
                    <form action=\"\" method=\"post\">
                        <div class=\"card-header\">
                            <div class=\"card-title d-flex align-items-center\">
                                <h3>Área de servicio</h3>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"mb-3\">
                                <label for=\"areaServicio\" class=\"form-label\">Área de servicio</label>
                                <input type=\"text\" name=\"areaServicio\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["areaServicio"]) || array_key_exists("areaServicio", $context) ? $context["areaServicio"] : (function () { throw new RuntimeError('Variable "areaServicio" does not exist.', 54, $this->source); })()), "nombre", [], "any", false, false, false, 54), "html", null, true);
        echo "\" class=\"form-control\" id=\"areaServicio\" autocomplete=\"off\">
                            </div>
                        </div>
                        <div class=\"card-footer\">
                            <button type=\"submit\" class=\"btn btn-primary\">Guardar modificación</button>
                        </div>
                    </form>
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
                                        <option value=\"fecha\" ";
        // line 73
        if ((0 === twig_compare((isset($context["tipoFecha"]) || array_key_exists("tipoFecha", $context) ? $context["tipoFecha"] : (function () { throw new RuntimeError('Variable "tipoFecha" does not exist.', 73, $this->source); })()), "fecha"))) {
            echo "selected";
        }
        echo ">Asignación</option>
                                        <option value=\"fechaCreado\" ";
        // line 74
        if ((0 === twig_compare((isset($context["tipoFecha"]) || array_key_exists("tipoFecha", $context) ? $context["tipoFecha"] : (function () { throw new RuntimeError('Variable "tipoFecha" does not exist.', 74, $this->source); })()), "fechaCreado"))) {
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
        // line 81
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["desde"]) || array_key_exists("desde", $context) ? $context["desde"] : (function () { throw new RuntimeError('Variable "desde" does not exist.', 81, $this->source); })()), "d-m-Y"), "html", null, true);
        echo "\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"desde\" />
                                </div>
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Hasta</span>
                                    </label>
                                    <input type=\"text\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["hasta"]) || array_key_exists("hasta", $context) ? $context["hasta"] : (function () { throw new RuntimeError('Variable "hasta" does not exist.', 87, $this->source); })()), "d-m-Y"), "html", null, true);
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
        // line 96
        if (((((isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 96, $this->source); })()) || (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 96, $this->source); })())) || (0 === twig_compare((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 96, $this->source); })()), "0"))) || (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 96, $this->source); })()))) {
            // line 97
            echo "                                ";
            $context["buscadorAvanzado"] = "show";
            // line 98
            echo "                            ";
        } else {
            // line 99
            echo "                                ";
            $context["buscadorAvanzado"] = "";
            // line 100
            echo "                            ";
        }
        // line 101
        echo "                            <div class=\"collapse ";
        echo twig_escape_filter($this->env, (isset($context["buscadorAvanzado"]) || array_key_exists("buscadorAvanzado", $context) ? $context["buscadorAvanzado"] : (function () { throw new RuntimeError('Variable "buscadorAvanzado" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "\" id=\"kt_advanced_search_form\">
                                <div class=\"separator separator-dashed mt-9 mb-6\"></div>
                                <div class=\"row g-8\">
                                    <div class=\"col-3\">
                                        <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                            <span>Producto</span>
                                        </label>
                                        <input type=\"text\" class=\"form-control form-control-solid ps-10\" name=\"producto\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 108, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Producto/Código/Referencia/Código de barras\" />
                                    </div>
                                    <div class=\"col-3\">
                                        <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                            <span>ID producto</span>
                                        </label>
                                        <input type=\"number\" min=\"1\" class=\"form-control form-control-solid ps-10\" name=\"id\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 114, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"ID\" />
                                    </div>
                                    <div class=\"col-3\">
                                        <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                            <span>Categoría</span>
                                        </label>
                                        <select name=\"categoria\" class=\"form-select form-select-solid\" data-placeholder=\"Categoría\">
                                            <option value=\"\">---</option>
                                            ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 123
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 123), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 123), (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 123, $this->source); })())))) {
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
        // line 125
        echo "                                        </select>
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
                                        <th>ALMACEN</th>
                                        <th>FECHA</th>
                                        <th>ASIGNACIÓN</th>
                                        <th>PRODUCTOS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["asignaciones"]) || array_key_exists("asignaciones", $context) ? $context["asignaciones"] : (function () { throw new RuntimeError('Variable "asignaciones" does not exist.', 150, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 151
            echo "                                        <tr>
                                            <td>";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "almacen", [], "any", false, false, false, 152), "html", null, true);
            echo "</td>
                                            <td>";
            // line 153
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "fecha", [], "any", false, false, false, 153), "d-m-Y"), "html", null, true);
            echo "</td>
                                            <td>
                                                Encargado: ";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "encargado", [], "any", false, false, false, 155), "html", null, true);
            echo "<br />
                                                Orden de trabajo: ";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "ordenTrabajo", [], "any", false, false, false, 156), "html", null, true);
            echo "<br />
                                                Observaciones: ";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "observaciones", [], "any", false, false, false, 157), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                                    <tbody>
                                                        ";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["objeto"], "lotes", [], "any", false, false, false, 162));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 163
                echo "                                                            <tr>
                                                                <td>";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "lote", [], "any", false, false, false, 164), "producto", [], "any", false, false, false, 164), "producto", [], "any", false, false, false, 164), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "cantidad", [], "any", false, false, false, 165), "html", null, true);
                echo "</td>
                                                            </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "                                                    </tbody>
                                                </table> 
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                                </tbody>
                            </table> 
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"navigation\">
                            ";
        // line 179
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["asignaciones"]) || array_key_exists("asignaciones", $context) ? $context["asignaciones"] : (function () { throw new RuntimeError('Variable "asignaciones" does not exist.', 179, $this->source); })()));
        echo "
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
        return "area_servicio/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 179,  363 => 173,  353 => 168,  344 => 165,  340 => 164,  337 => 163,  333 => 162,  325 => 157,  321 => 156,  317 => 155,  312 => 153,  308 => 152,  305 => 151,  301 => 150,  274 => 125,  259 => 123,  255 => 122,  244 => 114,  235 => 108,  224 => 101,  221 => 100,  218 => 99,  215 => 98,  212 => 97,  210 => 96,  198 => 87,  189 => 81,  177 => 74,  171 => 73,  149 => 54,  111 => 19,  102 => 13,  96 => 10,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Detalle del área de servicio{% endblock %}
{% block body %}
    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle del área de servicio</h1>
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('app_index') }}\" class=\"text-gray-600 text-hover-primary\">Inicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('service_areas_index') }}\" class=\"text-gray-600 text-hover-primary\">Áreas de servicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del área de servicio</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"{{ path('service_areas_index') }}\" class=\"btn btn-sm btn-primary\" >
                    Volver al listado de áreas de servicio</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"mb-5 hover-scroll-x\">
            <div class=\"d-grid\">
                <ul class=\"nav nav-tabs flex-nowrap text-nowrap\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 active btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_area\">
                            <i class=\"las la-store fs-2x\"></i> Detalle del área de servicio
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
            <div class=\"tab-pane fade show active\" id=\"kt_tab_area\" role=\"tabpanel\">
                <div class=\"card\">
                    <form action=\"\" method=\"post\">
                        <div class=\"card-header\">
                            <div class=\"card-title d-flex align-items-center\">
                                <h3>Área de servicio</h3>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"mb-3\">
                                <label for=\"areaServicio\" class=\"form-label\">Área de servicio</label>
                                <input type=\"text\" name=\"areaServicio\" value=\"{{ areaServicio.nombre }}\" class=\"form-control\" id=\"areaServicio\" autocomplete=\"off\">
                            </div>
                        </div>
                        <div class=\"card-footer\">
                            <button type=\"submit\" class=\"btn btn-primary\">Guardar modificación</button>
                        </div>
                    </form>
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
                                        <option value=\"fecha\" {% if tipoFecha == \"fecha\" %}selected{% endif %}>Asignación</option>
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
                            {% if categoria or producto or id == \"0\" or id %}
                                {% set buscadorAvanzado = \"show\" %}
                            {% else %}
                                {% set buscadorAvanzado = \"\" %}
                            {% endif %}
                            <div class=\"collapse {{ buscadorAvanzado }}\" id=\"kt_advanced_search_form\">
                                <div class=\"separator separator-dashed mt-9 mb-6\"></div>
                                <div class=\"row g-8\">
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
                                        <th>ALMACEN</th>
                                        <th>FECHA</th>
                                        <th>ASIGNACIÓN</th>
                                        <th>PRODUCTOS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for objeto in asignaciones %}
                                        <tr>
                                            <td>{{ objeto.almacen }}</td>
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
                    <div class=\"card-footer\">
                        <div class=\"navigation\">
                            {{ knp_pagination_render(asignaciones) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "area_servicio/show.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\area_servicio\\show.html.twig");
    }
}
