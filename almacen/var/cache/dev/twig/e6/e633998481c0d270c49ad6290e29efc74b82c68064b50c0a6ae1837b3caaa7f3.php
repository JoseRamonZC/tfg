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

/* almacen/producto/index.html.twig */
class __TwigTemplate_a5a907a5e49aa56b49f7c863e8b5116cac834e4c60520344c0ca0488b5e45783 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/producto/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/producto/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "almacen/producto/index.html.twig", 1);
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

        echo "Productos";
        
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
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Productos</h1>
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" class=\"text-gray-600 text-hover-primary\">Inicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Productos</li>
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
        // line 25
        echo twig_escape_filter($this->env, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Producto/Código/Referencia/Código de barras\" />
                        </div>
                        <div class=\"d-flex align-items-center\">
                            <button type=\"submit\" class=\"btn btn-primary me-5\">Buscar</button>
                            <a id=\"kt_horizontal_search_advanced_link\" class=\"btn btn-link\" data-bs-toggle=\"collapse\" href=\"#kt_advanced_search_form\">Búsqueda avanzada</a>
                        </div>
                    </div>
                    ";
        // line 32
        if ((((isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 32, $this->source); })()) || (0 === twig_compare((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 32, $this->source); })()), "0"))) || (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 32, $this->source); })()))) {
            // line 33
            echo "                        ";
            $context["buscadorAvanzado"] = "show";
            // line 34
            echo "                    ";
        } else {
            // line 35
            echo "                        ";
            $context["buscadorAvanzado"] = "";
            // line 36
            echo "                    ";
        }
        // line 37
        echo "                    <div class=\"collapse ";
        echo twig_escape_filter($this->env, (isset($context["buscadorAvanzado"]) || array_key_exists("buscadorAvanzado", $context) ? $context["buscadorAvanzado"] : (function () { throw new RuntimeError('Variable "buscadorAvanzado" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\" id=\"kt_advanced_search_form\">
                        <div class=\"separator separator-dashed mt-9 mb-6\"></div>
                        <div class=\"row g-8 align-items-center\">
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>ID</span>
                                </label>
                                <input type=\"number\" min=\"1\" class=\"form-control form-control-solid ps-10\" name=\"id\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"ID\" />
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Categoría</span>
                                </label>
                                <select name=\"categoria\" class=\"form-select form-select-solid\" data-placeholder=\"Categoría\">
                                    <option value=\"\">---</option>
                                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 53
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 53), (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 53, $this->source); })())))) {
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
        // line 55
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
                                <th>FOTO</th>
                                <th>NOMBRE</th>
                                <th>ID</th>
                                <th>CÓDIGO</th>
                                <th>REFERENCIA</th>
                                <th>CÓDIGO DE BARRA</th>
                                <th>CATEGORÍA</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 80
            echo "                                <tr>
                                    <td>
                                        ";
            // line 82
            if (twig_get_attribute($this->env, $this->source, $context["objeto"], "foto", [], "any", false, false, false, 82)) {
                // line 83
                echo "                                            <img width=\"100px\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_photo", ["id" => twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                echo "\" />
                                        ";
            } else {
                // line 85
                echo "                                            <img width=\"100px\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/noimagen.png"), "html", null, true);
                echo "\" />
                                        ";
            }
            // line 87
            echo "                                    </td>
                                    <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                                    <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                                    <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "codigo", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                                    <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "referencia", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                                    <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "codigoBarra", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "categoria", [], "any", false, false, false, 94), "html", null, true);
            echo "<br />
                                        ";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "subcategoria", [], "any", false, false, false, 95), "html", null, true);
            echo "
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                        </tbody>
                    </table> 
                </div>
            </div>
            <div class=\"card-footer\">
                <div class=\"navigation\">
                    ";
        // line 105
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 105, $this->source); })()));
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
        return "almacen/producto/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 105,  265 => 99,  255 => 95,  251 => 94,  246 => 92,  242 => 91,  238 => 90,  234 => 89,  230 => 88,  227 => 87,  221 => 85,  215 => 83,  213 => 82,  209 => 80,  205 => 79,  179 => 55,  164 => 53,  160 => 52,  149 => 44,  138 => 37,  135 => 36,  132 => 35,  129 => 34,  126 => 33,  124 => 32,  114 => 25,  96 => 10,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Productos{% endblock %}
{% block body %}
    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Productos</h1>
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('app_index') }}\" class=\"text-gray-600 text-hover-primary\">Inicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Productos</li>
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
                    {% if categoria or id == \"0\" or id  %}
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
                            </tr>
                        </thead>
                        <tbody>
                            {% for objeto in productos %}
                                <tr>
                                    <td>
                                        {% if objeto.foto %}
                                            <img width=\"100px\" src=\"{{ path('products_photo',{'id':objeto.id}) }}\" />
                                        {% else %}
                                            <img width=\"100px\" src=\"{{ asset('imagenes/noimagen.png') }}\" />
                                        {% endif %}
                                    </td>
                                    <td>{{ objeto.nombre }}</td>
                                    <td>{{ objeto.id }}</td>
                                    <td>{{ objeto.codigo }}</td>
                                    <td>{{ objeto.referencia }}</td>
                                    <td>{{ objeto.codigoBarra }}</td>
                                    <td>
                                        {{ objeto.categoria }}<br />
                                        {{ objeto.subcategoria }}
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table> 
                </div>
            </div>
            <div class=\"card-footer\">
                <div class=\"navigation\">
                    {{ knp_pagination_render(productos) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "almacen/producto/index.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\almacen\\producto\\index.html.twig");
    }
}
