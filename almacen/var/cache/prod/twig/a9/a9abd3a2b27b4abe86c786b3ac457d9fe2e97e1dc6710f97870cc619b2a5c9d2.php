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
class __TwigTemplate_cde465a8e14ace3092db7b503e0fe46c28feb3b5cadd37a8af2b6d38ac0aa401 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "area_servicio/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Detalle del área de servicio";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["areaServicio"] ?? null), "nombre", [], "any", false, false, false, 54), "html", null, true);
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
        if ((0 === twig_compare(($context["tipoFecha"] ?? null), "fecha"))) {
            echo "selected";
        }
        echo ">Asignación</option>
                                        <option value=\"fechaCreado\" ";
        // line 74
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
        // line 81
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["desde"] ?? null), "d-m-Y"), "html", null, true);
        echo "\" class=\"form-control form-control-lg form-control-solid\" id=\"kt_flatpickr\" name=\"desde\" />
                                </div>
                                <div class=\"col-12 col-lg-3 col-md-4 position-relative\">
                                    <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                        <span>Hasta</span>
                                    </label>
                                    <input type=\"text\" value=\"";
        // line 87
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
        // line 96
        if ((((($context["categoria"] ?? null) || ($context["producto"] ?? null)) || (0 === twig_compare(($context["id"] ?? null), "0"))) || ($context["id"] ?? null))) {
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
        echo twig_escape_filter($this->env, ($context["buscadorAvanzado"] ?? null), "html", null, true);
        echo "\" id=\"kt_advanced_search_form\">
                                <div class=\"separator separator-dashed mt-9 mb-6\"></div>
                                <div class=\"row g-8\">
                                    <div class=\"col-3\">
                                        <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                            <span>Producto</span>
                                        </label>
                                        <input type=\"text\" class=\"form-control form-control-solid ps-10\" name=\"producto\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, ($context["producto"] ?? null), "html", null, true);
        echo "\" placeholder=\"Producto/Código/Referencia/Código de barras\" />
                                    </div>
                                    <div class=\"col-3\">
                                        <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                            <span>ID producto</span>
                                        </label>
                                        <input type=\"number\" min=\"1\" class=\"form-control form-control-solid ps-10\" name=\"id\" value=\"";
        // line 114
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
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 123
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 123), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 123), ($context["categoria"] ?? null)))) {
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
        $context['_seq'] = twig_ensure_traversable(($context["asignaciones"] ?? null));
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["asignaciones"] ?? null));
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
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
        return array (  341 => 179,  333 => 173,  323 => 168,  314 => 165,  310 => 164,  307 => 163,  303 => 162,  295 => 157,  291 => 156,  287 => 155,  282 => 153,  278 => 152,  275 => 151,  271 => 150,  244 => 125,  229 => 123,  225 => 122,  214 => 114,  205 => 108,  194 => 101,  191 => 100,  188 => 99,  185 => 98,  182 => 97,  180 => 96,  168 => 87,  159 => 81,  147 => 74,  141 => 73,  119 => 54,  81 => 19,  72 => 13,  66 => 10,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "area_servicio/show.html.twig", "C:\\xampp\\htdocs\\almacen\\Almacen\\templates\\area_servicio\\show.html.twig");
    }
}
