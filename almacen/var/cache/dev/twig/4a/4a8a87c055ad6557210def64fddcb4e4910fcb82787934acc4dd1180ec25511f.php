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

/* producto/index.html.twig */
class __TwigTemplate_7d16be1fc55eb30e6698dcb4555c26a3c2919fe904fca2007cac73874085cb1c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "producto/index.html.twig", 1);
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
            <div class=\"align-items-center py-2\">
                <a href=\"#\" class=\"btn btn-sm btn-primary btn-flex\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearProducto\" id=\"kt_toolbar_primary_button\">
                    <span class=\"svg-icon svg-icon-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                            <rect opacity=\"0.5\" x=\"11.364\" y=\"20.364\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-90 11.364 20.364)\" fill=\"currentColor\" />
                            <rect x=\"4.36396\" y=\"11.364\" width=\"16\" height=\"2\" rx=\"1\" fill=\"currentColor\" />
                        </svg>
                    </span>
                    Añadir producto</a>
                <a href=\"#\" class=\"btn btn-sm btn-primary btn-flex\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearImportacionArchivo\" id=\"kt_toolbar_primary_button\">
                    <span class=\"svg-icon svg-icon-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                            <rect opacity=\"0.5\" x=\"11.364\" y=\"20.364\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-90 11.364 20.364)\" fill=\"currentColor\" />
                            <rect x=\"4.36396\" y=\"11.364\" width=\"16\" height=\"2\" rx=\"1\" fill=\"currentColor\" />
                        </svg>
                    </span>
                    Importar productos</a>
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
        // line 43
        echo twig_escape_filter($this->env, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Producto/Código/Referencia/Código de barras\" />
                        </div>
                        <div class=\"d-flex align-items-center\">
                            <button type=\"submit\" class=\"btn btn-primary me-5\">Buscar</button>
                            <a id=\"kt_horizontal_search_advanced_link\" class=\"btn btn-link\" data-bs-toggle=\"collapse\" href=\"#kt_advanced_search_form\">Búsqueda avanzada</a>
                        </div>
                    </div>
                    ";
        // line 50
        if ((((isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 50, $this->source); })()) || (0 === twig_compare((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 50, $this->source); })()), "0"))) || (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 50, $this->source); })()))) {
            // line 51
            echo "                        ";
            $context["buscadorAvanzado"] = "show";
            // line 52
            echo "                    ";
        } else {
            // line 53
            echo "                        ";
            $context["buscadorAvanzado"] = "";
            // line 54
            echo "                    ";
        }
        // line 55
        echo "                    <div class=\"collapse ";
        echo twig_escape_filter($this->env, (isset($context["buscadorAvanzado"]) || array_key_exists("buscadorAvanzado", $context) ? $context["buscadorAvanzado"] : (function () { throw new RuntimeError('Variable "buscadorAvanzado" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "\" id=\"kt_advanced_search_form\">
                        <div class=\"separator separator-dashed mt-9 mb-6\"></div>
                        <div class=\"row g-8 align-items-center\">
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>ID</span>
                                </label>
                                <input type=\"number\" min=\"1\" class=\"form-control form-control-solid ps-10\" name=\"id\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"ID\" />
                            </div>
                            <div class=\"col-3\">
                                <label class=\"d-flex align-items-center fs-5 fw-bold mb-2\">
                                    <span>Categoría</span>
                                </label>
                                <select name=\"categoria\" class=\"form-select form-select-solid\" data-placeholder=\"Categoría\">
                                    <option value=\"\">---</option>
                                    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 71
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 71), (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 71, $this->source); })())))) {
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
        // line 73
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
                                <th>PRECIO</th>
                                <th>CATEGORÍA</th>
                                <th>ALMACENES</th>
                                <th width=\"50px\">DETALLE</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 101
            echo "                                <tr>
                                    <td>
                                        ";
            // line 103
            if (twig_get_attribute($this->env, $this->source, $context["objeto"], "foto", [], "any", false, false, false, 103)) {
                // line 104
                echo "                                            <img width=\"100px\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_photo", ["id" => twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 104)]), "html", null, true);
                echo "\" />
                                        ";
            } else {
                // line 106
                echo "                                            <img width=\"100px\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/noimagen.png"), "html", null, true);
                echo "\" />
                                        ";
            }
            // line 108
            echo "                                    </td>
                                    <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
                                    <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
                                    <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "codigo", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
                                    <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "referencia", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
                                    <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "codigoBarra", [], "any", false, false, false, 113), "html", null, true);
            echo "</td>
                                    <td class=\"text-right\">";
            // line 114
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "precio", [], "any", false, false, false, 114), 2, ",", "."), "html", null, true);
            echo " €</td>
                                    <td>
                                        ";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "categoria", [], "any", false, false, false, 116), "html", null, true);
            echo "<br />
                                        ";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "subcategoria", [], "any", false, false, false, 117), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["objeto"], "almacenes", [], "any", false, false, false, 120));
            foreach ($context['_seq'] as $context["_key"] => $context["almacen"]) {
                // line 121
                echo "                                            ";
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["almacen"], "cantidad", [], "any", false, false, false, 121), 0))) {
                    // line 122
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["almacen"], "almacen", [], "any", false, false, false, 122), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["almacen"], "cantidad", [], "any", false, false, false, 122), "html", null, true);
                    echo "<br />
                                            ";
                }
                // line 124
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['almacen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                                    </td>
                                    <td class=\"text-center align-middle\">
                                        <a class=\"btn btn-primary btn-icon\" href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_show", ["id" => twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 127)]), "html", null, true);
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
        // line 133
        echo "                        </tbody>
                    </table> 
                </div>
            </div>
            <div class=\"card-footer\">
                <div class=\"navigation\">
                    ";
        // line 139
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 139, $this->source); })()));
        echo "
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearProducto\" tabindex=\"-1\" aria-labelledby=\"crearProductoLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
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
                            <input type=\"text\" name=\"referencia\" class=\"form-control\" id=\"referencia\" autocomplete=\"off\">
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
                            <select name=\"categoria\" class=\"form-select form-select-solid\" id=\"categoria\" select2=\"categoria\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                <option value=\" \">---</option>
                                ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 178, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 179
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 179), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["objeto"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Subcategoría:</label>
                            <select name=\"subcategoria\" class=\"form-select form-select-solid\" id=\"subcategoria\" >
                                <option data-categoria=\"0\" value=\"\">---</option>
                                ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subcategorias"]) || array_key_exists("subcategorias", $context) ? $context["subcategorias"] : (function () { throw new RuntimeError('Variable "subcategorias" does not exist.', 187, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 188
            echo "                                    <option data-categoria=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "categoria", [], "any", false, false, false, 188), "id", [], "any", false, false, false, 188), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 188), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 188), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"descripcion\" class=\"form-label\">Descripción</label>
                            <textarea name=\"descripcion\" class=\"form-control\" autocomplete=\"off\"></textarea>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Foto:</label>
                            <label for=\"fileUpload\" class=\"file-upload btn btn-secondary btn-block\">
                                <i class=\"fa fa-upload mr-2\"></i>Subir foto ...<input name=\"foto\" id=\"fileUpload\" type=\"file\" accept=\"image/*\">
                            </label>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">Añadir producto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearImportacionArchivo\" tabindex=\"-1\" aria-labelledby=\"crearImportacionArchivoLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Importar productos mediante archivo</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"mb-3\">
                            <label for=\"archivo\" class=\"form-label\">Archivo</label>
                            <input type=\"file\" class=\"form-control form-control-lg form-control-solid\" name=\"archivo\" accept=\".csv\" required />
                            <div class=\"alert alert-info mt-3\" role=\"alert\">
                                El archivo debe ser un CSV delimitado por ;. El orden de los campos es <b>Nombre;Código;Referencia;Código de barras;Precio;Categoría;Subcategoría;Descripción</b>.
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" name=\"boton\" value=\"importar\" class=\"btn btn-primary\">Subir archivo a importar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 237
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 238
        echo "    <script>
        categoriajs();
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "producto/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 238,  469 => 237,  414 => 190,  401 => 188,  397 => 187,  389 => 181,  378 => 179,  374 => 178,  332 => 139,  324 => 133,  312 => 127,  308 => 125,  302 => 124,  294 => 122,  291 => 121,  287 => 120,  281 => 117,  277 => 116,  272 => 114,  268 => 113,  264 => 112,  260 => 111,  256 => 110,  252 => 109,  249 => 108,  243 => 106,  237 => 104,  235 => 103,  231 => 101,  227 => 100,  198 => 73,  183 => 71,  179 => 70,  168 => 62,  157 => 55,  154 => 54,  151 => 53,  148 => 52,  145 => 51,  143 => 50,  133 => 43,  97 => 10,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
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
            <div class=\"align-items-center py-2\">
                <a href=\"#\" class=\"btn btn-sm btn-primary btn-flex\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearProducto\" id=\"kt_toolbar_primary_button\">
                    <span class=\"svg-icon svg-icon-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                            <rect opacity=\"0.5\" x=\"11.364\" y=\"20.364\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-90 11.364 20.364)\" fill=\"currentColor\" />
                            <rect x=\"4.36396\" y=\"11.364\" width=\"16\" height=\"2\" rx=\"1\" fill=\"currentColor\" />
                        </svg>
                    </span>
                    Añadir producto</a>
                <a href=\"#\" class=\"btn btn-sm btn-primary btn-flex\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_crearImportacionArchivo\" id=\"kt_toolbar_primary_button\">
                    <span class=\"svg-icon svg-icon-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                            <rect opacity=\"0.5\" x=\"11.364\" y=\"20.364\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-90 11.364 20.364)\" fill=\"currentColor\" />
                            <rect x=\"4.36396\" y=\"11.364\" width=\"16\" height=\"2\" rx=\"1\" fill=\"currentColor\" />
                        </svg>
                    </span>
                    Importar productos</a>
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
                                <th>PRECIO</th>
                                <th>CATEGORÍA</th>
                                <th>ALMACENES</th>
                                <th width=\"50px\">DETALLE</th>
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
                                    <td class=\"text-right\">{{ objeto.precio | number_format(2,',','.') }} €</td>
                                    <td>
                                        {{ objeto.categoria }}<br />
                                        {{ objeto.subcategoria }}
                                    </td>
                                    <td>
                                        {% for almacen in objeto.almacenes %}
                                            {% if almacen.cantidad > 0 %}
                                                {{ almacen.almacen }}: {{ almacen.cantidad }}<br />
                                            {% endif %}
                                        {% endfor %}
                                    </td>
                                    <td class=\"text-center align-middle\">
                                        <a class=\"btn btn-primary btn-icon\" href=\"{{ path('products_show',{'id':objeto.id}) }}\">
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
                    {{ knp_pagination_render(productos) }}
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearProducto\" tabindex=\"-1\" aria-labelledby=\"crearProductoLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
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
                            <input type=\"text\" name=\"referencia\" class=\"form-control\" id=\"referencia\" autocomplete=\"off\">
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
                            <select name=\"categoria\" class=\"form-select form-select-solid\" id=\"categoria\" select2=\"categoria\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                <option value=\" \">---</option>
                                {% for objeto in categorias %}
                                    <option value=\"{{ objeto.id }}\">{{ objeto }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Subcategoría:</label>
                            <select name=\"subcategoria\" class=\"form-select form-select-solid\" id=\"subcategoria\" >
                                <option data-categoria=\"0\" value=\"\">---</option>
                                {% for objeto in subcategorias %}
                                    <option data-categoria=\"{{ objeto.categoria.id }}\" value=\"{{ objeto.id }}\">{{ objeto.nombre }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"descripcion\" class=\"form-label\">Descripción</label>
                            <textarea name=\"descripcion\" class=\"form-control\" autocomplete=\"off\"></textarea>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Foto:</label>
                            <label for=\"fileUpload\" class=\"file-upload btn btn-secondary btn-block\">
                                <i class=\"fa fa-upload mr-2\"></i>Subir foto ...<input name=\"foto\" id=\"fileUpload\" type=\"file\" accept=\"image/*\">
                            </label>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">Añadir producto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"kt_crearImportacionArchivo\" tabindex=\"-1\" aria-labelledby=\"crearImportacionArchivoLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Importar productos mediante archivo</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"mb-3\">
                            <label for=\"archivo\" class=\"form-label\">Archivo</label>
                            <input type=\"file\" class=\"form-control form-control-lg form-control-solid\" name=\"archivo\" accept=\".csv\" required />
                            <div class=\"alert alert-info mt-3\" role=\"alert\">
                                El archivo debe ser un CSV delimitado por ;. El orden de los campos es <b>Nombre;Código;Referencia;Código de barras;Precio;Categoría;Subcategoría;Descripción</b>.
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" name=\"boton\" value=\"importar\" class=\"btn btn-primary\">Subir archivo a importar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block js %}
    <script>
        categoriajs();
    </script>
{% endblock %}", "producto/index.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\producto\\index.html.twig");
    }
}
