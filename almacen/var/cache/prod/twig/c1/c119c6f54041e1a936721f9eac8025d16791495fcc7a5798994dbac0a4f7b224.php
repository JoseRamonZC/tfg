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

/* almacen/inventario/index.html.twig */
class __TwigTemplate_c8fd6716ccae3e1be589628ffd094b3826976f05c1f2be989ac17071739a3c2f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "almacen/inventario/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Stock";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Stock del almacén \"";
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
                    <li class=\"breadcrumb-item text-gray-600\">Stock</li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <form action=\"\" method=\"get\">
            <div class=\"card mb-7\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"position-relative w-md-400px me-md-2\">
                            <input type=\"text\" class=\"form-control form-control-solid ps-10\" name=\"producto\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["producto"] ?? null), "html", null, true);
        echo "\" placeholder=\"Producto/Código/Referencia/Código de barras\" />
                        </div>
                        <div class=\"d-flex align-items-center\">
                            <button type=\"submit\" class=\"btn btn-primary me-5\">Buscar</button>
                            <a id=\"kt_horizontal_search_advanced_link\" class=\"btn btn-link\" data-bs-toggle=\"collapse\" href=\"#kt_advanced_search_form\">Búsqueda avanzada</a>
                        </div>
                    </div>
                    ";
        // line 31
        if ((((((((($context["categoria"] ?? null) || ($context["cantidad1"] ?? null)) || ($context["cantidad2"] ?? null)) || (0 === twig_compare(($context["cantidad1"] ?? null), "0"))) || (0 === twig_compare(($context["cantidad2"] ?? null), "0"))) || (0 === twig_compare(($context["id"] ?? null), "0"))) || ($context["id"] ?? null)) || ($context["stock"] ?? null))) {
            // line 32
            echo "                        ";
            $context["buscadorAvanzado"] = "show";
            // line 33
            echo "                    ";
        } else {
            // line 34
            echo "                        ";
            $context["buscadorAvanzado"] = "";
            // line 35
            echo "                    ";
        }
        // line 36
        echo "                    <div class=\"collapse ";
        echo twig_escape_filter($this->env, ($context["buscadorAvanzado"] ?? null), "html", null, true);
        echo "\" id=\"kt_advanced_search_form\">
                        <div class=\"separator separator-dashed mt-9 mb-6\"></div>
                        <div class=\"row g-8 align-items-center\">
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>ID</span>
                                </label>
                                <input type=\"number\" min=\"1\" class=\"form-control form-control-solid ps-10\" name=\"id\" value=\"";
        // line 43
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
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 52
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 52), ($context["categoria"] ?? null)))) {
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
        // line 54
        echo "                                </select>
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Cantidad desde</span>
                                </label>
                                <input type=\"number\" min=\"0\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["cantidad1"] ?? null), "html", null, true);
        echo "\" class=\"form-control form-control-lg form-control-solid\" name=\"cantidad1\" />
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Cantidad hasta</span>
                                </label>
                                <input type=\"number\" min=\"0\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["cantidad2"] ?? null), "html", null, true);
        echo "\" class=\"form-control form-control-lg form-control-solid\" name=\"cantidad2\" />
                            </div>
                            <div class=\"col-3\">
                                <div class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid\">
                                    <input class=\"form-check-input\" type=\"checkbox\" ";
        // line 70
        if ((0 === twig_compare(($context["stock"] ?? null), 1))) {
            echo "checked";
        }
        echo " name=\"stock\" value=\"1\" />
                                    <label class=\"form-check-label\">Bajo en stock según umbral</label>
                                </div>
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
                                <th>FOTO</th>
                                <th>NOMBRE</th>
                                <th>ID</th>
                                <th>CÓDIGO</th>
                                <th>REFERENCIA</th>
                                <th>CÓDIGO DE BARRA</th>
                                <th>CATEGORÍA</th>
                                <th width=\"50px\">CANTIDAD</th>
                                <th width=\"50px\">DETALLE</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["inventario"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 98
            echo "                                <tr>
                                    <td>
                                        ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 100), "foto", [], "any", false, false, false, 100)) {
                // line 101
                echo "                                            <img width=\"100px\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_products_photo", ["almacen" => twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "id", [], "any", false, false, false, 101), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101)]), "html", null, true);
                echo "\" />
                                        ";
            } else {
                // line 103
                echo "                                            <img width=\"100px\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/noimagen.png"), "html", null, true);
                echo "\" />
                                        ";
            }
            // line 105
            echo "                                    </td>
                                    <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 106), "nombre", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
                                    <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
                                    <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 108), "codigo", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                                    <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 109), "referencia", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
                                    <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 110), "codigoBarra", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 112), "categoria", [], "any", false, false, false, 112), "html", null, true);
            echo "<br />
                                        ";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 113), "subcategoria", [], "any", false, false, false, 113), "html", null, true);
            echo "
                                    </td>
                                    <td class=\"text-right align-middle \">
                                        ";
            // line 116
            if ((0 >= twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "cantidad", [], "any", false, false, false, 116), twig_get_attribute($this->env, $this->source, $context["objeto"], "umbral", [], "any", false, false, false, 116)))) {
                // line 117
                echo "                                            <i class=\"las la-exclamation-triangle text-warning\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Stock por debajo del umbral\"></i>
                                        ";
            }
            // line 119
            echo "                                        <span data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Umbral del producto: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "umbral", [], "any", false, false, false, 119), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "cantidad", [], "any", false, false, false, 119), "html", null, true);
            echo "</span>
                                    </td>
                                    <td class=\"text-center align-middle\">
                                        ";
            // line 122
            $context["caducado"] = 0;
            // line 123
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["objeto"], "lotes", [], "any", false, false, false, 123));
            foreach ($context['_seq'] as $context["_key"] => $context["lote"]) {
                // line 124
                echo "                                            ";
                if (((0 >= twig_compare(twig_get_attribute($this->env, $this->source, $context["lote"], "fechaCaducidad", [], "any", false, false, false, 124), twig_date_modify_filter($this->env, "now", "+0 day"))) && (1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["lote"], "cantidad", [], "any", false, false, false, 124), 0)))) {
                    // line 125
                    echo "                                                ";
                    $context["caducado"] = 1;
                    // line 126
                    echo "                                            ";
                }
                // line 127
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lote'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                                        ";
            if ((0 === twig_compare(($context["caducado"] ?? null), 1))) {
                // line 129
                echo "                                            <a class=\"btn btn-warning btn-icon\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Este producto contiene lotes caducados.\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_stock_show", ["almacen" => twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "id", [], "any", false, false, false, 129), "id" => twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 129)]), "html", null, true);
                echo "\">
                                                <i class=\"las la-exclamation-triangle fs-2x\"></i>
                                            </a>
                                        ";
            } else {
                // line 133
                echo "                                            <a class=\"btn btn-primary btn-icon\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_stock_show", ["almacen" => twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "id", [], "any", false, false, false, 133), "id" => twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 133)]), "html", null, true);
                echo "\">
                                                <i class=\"las la-eye fs-2x\"></i>
                                            </a>
                                        ";
            }
            // line 137
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                        </tbody>
                    </table> 
                </div>
            </div>
            <div class=\"card-footer\">
                <div class=\"navigation\">
                    ";
        // line 146
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["inventario"] ?? null));
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "almacen/inventario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 146,  327 => 140,  319 => 137,  311 => 133,  303 => 129,  300 => 128,  294 => 127,  291 => 126,  288 => 125,  285 => 124,  280 => 123,  278 => 122,  269 => 119,  265 => 117,  263 => 116,  257 => 113,  253 => 112,  248 => 110,  244 => 109,  240 => 108,  236 => 107,  232 => 106,  229 => 105,  223 => 103,  217 => 101,  215 => 100,  211 => 98,  207 => 97,  175 => 70,  168 => 66,  159 => 60,  151 => 54,  136 => 52,  132 => 51,  121 => 43,  110 => 36,  107 => 35,  104 => 34,  101 => 33,  98 => 32,  96 => 31,  86 => 24,  69 => 10,  63 => 7,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "almacen/inventario/index.html.twig", "C:\\xampp\\htdocs\\almacen\\Almacen\\templates\\almacen\\inventario\\index.html.twig");
    }
}
