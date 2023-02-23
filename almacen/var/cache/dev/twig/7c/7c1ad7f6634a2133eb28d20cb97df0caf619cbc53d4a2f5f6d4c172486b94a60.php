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
class __TwigTemplate_2587b2ca208f1f2d4cd50363ef1a9bfff8932556f3807a28dade9248025d3771 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/inventario/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/inventario/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "almacen/inventario/index.html.twig", 1);
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

        echo "Stock";
        
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
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Stock del almacén \"";
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
        echo twig_escape_filter($this->env, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Producto/Código/Referencia/Código de barras\" />
                        </div>
                        <div class=\"d-flex align-items-center\">
                            <button type=\"submit\" class=\"btn btn-primary me-5\">Buscar</button>
                            <a id=\"kt_horizontal_search_advanced_link\" class=\"btn btn-link\" data-bs-toggle=\"collapse\" href=\"#kt_advanced_search_form\">Búsqueda avanzada</a>
                        </div>
                    </div>
                    ";
        // line 31
        if (((((((((isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 31, $this->source); })()) || (isset($context["cantidad1"]) || array_key_exists("cantidad1", $context) ? $context["cantidad1"] : (function () { throw new RuntimeError('Variable "cantidad1" does not exist.', 31, $this->source); })())) || (isset($context["cantidad2"]) || array_key_exists("cantidad2", $context) ? $context["cantidad2"] : (function () { throw new RuntimeError('Variable "cantidad2" does not exist.', 31, $this->source); })())) || (0 === twig_compare((isset($context["cantidad1"]) || array_key_exists("cantidad1", $context) ? $context["cantidad1"] : (function () { throw new RuntimeError('Variable "cantidad1" does not exist.', 31, $this->source); })()), "0"))) || (0 === twig_compare((isset($context["cantidad2"]) || array_key_exists("cantidad2", $context) ? $context["cantidad2"] : (function () { throw new RuntimeError('Variable "cantidad2" does not exist.', 31, $this->source); })()), "0"))) || (0 === twig_compare((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 31, $this->source); })()), "0"))) || (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 31, $this->source); })())) || (isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 31, $this->source); })()))) {
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
        echo twig_escape_filter($this->env, (isset($context["buscadorAvanzado"]) || array_key_exists("buscadorAvanzado", $context) ? $context["buscadorAvanzado"] : (function () { throw new RuntimeError('Variable "buscadorAvanzado" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\" id=\"kt_advanced_search_form\">
                        <div class=\"separator separator-dashed mt-9 mb-6\"></div>
                        <div class=\"row g-8 align-items-center\">
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>ID</span>
                                </label>
                                <input type=\"number\" min=\"1\" class=\"form-control form-control-solid ps-10\" name=\"id\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 43, $this->source); })()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 52
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 52), (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 52, $this->source); })())))) {
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
        echo twig_escape_filter($this->env, (isset($context["cantidad1"]) || array_key_exists("cantidad1", $context) ? $context["cantidad1"] : (function () { throw new RuntimeError('Variable "cantidad1" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control form-control-lg form-control-solid\" name=\"cantidad1\" />
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Cantidad hasta</span>
                                </label>
                                <input type=\"number\" min=\"0\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["cantidad2"]) || array_key_exists("cantidad2", $context) ? $context["cantidad2"] : (function () { throw new RuntimeError('Variable "cantidad2" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control form-control-lg form-control-solid\" name=\"cantidad2\" />
                            </div>
                            <div class=\"col-3\">
                                <div class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid\">
                                    <input class=\"form-check-input\" type=\"checkbox\" ";
        // line 70
        if ((0 === twig_compare((isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 70, $this->source); })()), 1))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["inventario"]) || array_key_exists("inventario", $context) ? $context["inventario"] : (function () { throw new RuntimeError('Variable "inventario" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 98
            echo "                                <tr>
                                    <td>
                                        ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 100), "foto", [], "any", false, false, false, 100)) {
                // line 101
                echo "                                            <img width=\"100px\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_products_photo", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "producto", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101)]), "html", null, true);
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
            if ((0 === twig_compare((isset($context["caducado"]) || array_key_exists("caducado", $context) ? $context["caducado"] : (function () { throw new RuntimeError('Variable "caducado" does not exist.', 128, $this->source); })()), 1))) {
                // line 129
                echo "                                            <a class=\"btn btn-warning btn-icon\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Este producto contiene lotes caducados.\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_stock_show", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 129, $this->source); })()), "id", [], "any", false, false, false, 129), "id" => twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 129)]), "html", null, true);
                echo "\">
                                                <i class=\"las la-exclamation-triangle fs-2x\"></i>
                                            </a>
                                        ";
            } else {
                // line 133
                echo "                                            <a class=\"btn btn-primary btn-icon\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_stock_show", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 133, $this->source); })()), "id", [], "any", false, false, false, 133), "id" => twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 133)]), "html", null, true);
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["inventario"]) || array_key_exists("inventario", $context) ? $context["inventario"] : (function () { throw new RuntimeError('Variable "inventario" does not exist.', 146, $this->source); })()));
        echo "
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
        return "almacen/inventario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 146,  357 => 140,  349 => 137,  341 => 133,  333 => 129,  330 => 128,  324 => 127,  321 => 126,  318 => 125,  315 => 124,  310 => 123,  308 => 122,  299 => 119,  295 => 117,  293 => 116,  287 => 113,  283 => 112,  278 => 110,  274 => 109,  270 => 108,  266 => 107,  262 => 106,  259 => 105,  253 => 103,  247 => 101,  245 => 100,  241 => 98,  237 => 97,  205 => 70,  198 => 66,  189 => 60,  181 => 54,  166 => 52,  162 => 51,  151 => 43,  140 => 36,  137 => 35,  134 => 34,  131 => 33,  128 => 32,  126 => 31,  116 => 24,  99 => 10,  93 => 7,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Stock{% endblock %}
{% block body %}
    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Stock del almacén \"{{ almacen.nombre }}\"</h1>
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('app_index') }}\" class=\"text-gray-600 text-hover-primary\">Inicio</a>
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
                            <input type=\"text\" class=\"form-control form-control-solid ps-10\" name=\"producto\" value=\"{{ producto }}\" placeholder=\"Producto/Código/Referencia/Código de barras\" />
                        </div>
                        <div class=\"d-flex align-items-center\">
                            <button type=\"submit\" class=\"btn btn-primary me-5\">Buscar</button>
                            <a id=\"kt_horizontal_search_advanced_link\" class=\"btn btn-link\" data-bs-toggle=\"collapse\" href=\"#kt_advanced_search_form\">Búsqueda avanzada</a>
                        </div>
                    </div>
                    {% if categoria or cantidad1 or cantidad2 or cantidad1 == \"0\" or cantidad2 == \"0\" or id == \"0\" or id or stock %}
                        {% set buscadorAvanzado = \"show\" %}
                    {% else %}
                        {% set buscadorAvanzado = \"\" %}
                    {% endif %}
                    <div class=\"collapse {{ buscadorAvanzado }}\" id=\"kt_advanced_search_form\">
                        <div class=\"separator separator-dashed mt-9 mb-6\"></div>
                        <div class=\"row g-8 align-items-center\">
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>ID</span>
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
                                    <span>Cantidad desde</span>
                                </label>
                                <input type=\"number\" min=\"0\" value=\"{{ cantidad1 }}\" class=\"form-control form-control-lg form-control-solid\" name=\"cantidad1\" />
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Cantidad hasta</span>
                                </label>
                                <input type=\"number\" min=\"0\" value=\"{{ cantidad2 }}\" class=\"form-control form-control-lg form-control-solid\" name=\"cantidad2\" />
                            </div>
                            <div class=\"col-3\">
                                <div class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid\">
                                    <input class=\"form-check-input\" type=\"checkbox\" {% if stock == 1 %}checked{% endif %} name=\"stock\" value=\"1\" />
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
                            {% for objeto in inventario %}
                                <tr>
                                    <td>
                                        {% if objeto.producto.foto %}
                                            <img width=\"100px\" src=\"{{ path('warehouse_products_photo',{'almacen':almacen.id,'id':objeto.producto.id}) }}\" />
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
                                    <td class=\"text-center align-middle\">
                                        {% set caducado = 0 %}
                                        {% for lote in objeto.lotes %}
                                            {% if lote.fechaCaducidad <= 'now'|date_modify(\"+0 day\") and lote.cantidad > 0 %}
                                                {% set caducado = 1 %}
                                            {% endif %}
                                        {% endfor %}
                                        {% if caducado == 1 %}
                                            <a class=\"btn btn-warning btn-icon\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Este producto contiene lotes caducados.\" href=\"{{ path('warehouse_stock_show',{'almacen':almacen.id,'id':objeto.id}) }}\">
                                                <i class=\"las la-exclamation-triangle fs-2x\"></i>
                                            </a>
                                        {% else %}
                                            <a class=\"btn btn-primary btn-icon\" href=\"{{ path('warehouse_stock_show',{'almacen':almacen.id,'id':objeto.id}) }}\">
                                                <i class=\"las la-eye fs-2x\"></i>
                                            </a>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table> 
                </div>
            </div>
            <div class=\"card-footer\">
                <div class=\"navigation\">
                    {{ knp_pagination_render(inventario) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "almacen/inventario/index.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\almacen\\inventario\\index.html.twig");
    }
}
