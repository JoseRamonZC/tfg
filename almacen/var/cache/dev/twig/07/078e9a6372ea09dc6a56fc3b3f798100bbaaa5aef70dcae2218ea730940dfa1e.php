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

/* almacen/inventario/show.html.twig */
class __TwigTemplate_7238c3f5338889bedc3b8fa75104591933c74d4e666a55bf3a221849139cede7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/inventario/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "almacen/inventario/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "almacen/inventario/show.html.twig", 1);
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

        echo "Detalle de la stock";
        
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
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle del producto ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 7, $this->source); })()), "producto", [], "any", false, false, false, 7), "nombre", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_stock_index", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" class=\"text-gray-600 text-hover-primary\">Stock</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del producto</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_stock_index", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-primary\" >
                    Volver al stock</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"card\">
            <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"nombre\" class=\"form-label\">Nombre</label>
                            <input type=\"text\" name=\"nombre\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 32, $this->source); })()), "producto", [], "any", false, false, false, 32), "nombre", [], "any", false, false, false, 32), "html", null, true);
        echo "\" required class=\"form-control\" id=\"producto\" autocomplete=\"off\">
                        </div>
                        <div class=\"col-12 col-lg-6\">
                            <label for=\"codigo\" class=\"form-label\">ID</label>
                            <input type=\"text\" disabled value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 36, $this->source); })()), "producto", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true);
        echo "\" class=\"form-control\" id=\"codigo\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"codigo\" class=\"form-label\">Código</label>
                            <input type=\"text\" name=\"codigo\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 40, $this->source); })()), "producto", [], "any", false, false, false, 40), "codigo", [], "any", false, false, false, 40), "html", null, true);
        echo "\" class=\"form-control\" id=\"codigo\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"referencia\" class=\"form-label\">Referencia</label>
                            <input type=\"text\" name=\"referencia\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 44, $this->source); })()), "producto", [], "any", false, false, false, 44), "referencia", [], "any", false, false, false, 44), "html", null, true);
        echo "\" class=\"form-control\" id=\"referencia\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"codigoBarra\" class=\"form-label\">Código de barras</label>
                            <input type=\"text\" name=\"codigoBarra\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 48, $this->source); })()), "producto", [], "any", false, false, false, 48), "codigoBarra", [], "any", false, false, false, 48), "html", null, true);
        echo "\" class=\"form-control\" id=\"codigoBarra\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"categoria\" class=\"form-label\">Categoría</label>
                            <select name=\"categoria\" class=\"form-select form-select-solid\" id=\"categoria\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                <option value=\" \">---</option>
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 55
            echo "                                    <option ";
            if ((0 === twig_compare($context["objeto"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 55, $this->source); })()), "producto", [], "any", false, false, false, 55), "categoria", [], "any", false, false, false, 55)))) {
                echo "selected";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["objeto"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                            </select>
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label class=\"form-label\">Subcategoría:</label>
                            <select name=\"subcategoria\" class=\"form-control\" id=\"subcategoria\">
                                <option data-categoria=\"0\" value=\"\">---</option>
                                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subcategorias"]) || array_key_exists("subcategorias", $context) ? $context["subcategorias"] : (function () { throw new RuntimeError('Variable "subcategorias" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 64
            echo "                                    <option data-categoria=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "categoria", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 64, $this->source); })()), "producto", [], "any", false, false, false, 64), "subcategoria", [], "any", false, false, false, 64)) {
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "categoria", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 64, $this->source); })()), "producto", [], "any", false, false, false, 64), "subcategoria", [], "any", false, false, false, 64), "categoria", [], "any", false, false, false, 64)))) {
                    echo "hidden";
                }
            } else {
                echo "hidden";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare($context["objeto"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 64, $this->source); })()), "producto", [], "any", false, false, false, 64), "subcategoria", [], "any", false, false, false, 64)))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 64), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                            </select>
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"descripcion\" class=\"form-label\">Descripción</label>
                            <textarea name=\"descripcion\" class=\"form-control\" autocomplete=\"off\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 70, $this->source); })()), "producto", [], "any", false, false, false, 70), "descripcion", [], "any", false, false, false, 70), "html", null, true);
        echo "</textarea>
                        </div>   
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"cantidad\" class=\"form-label\">Cantidad</label>
                            <input type=\"number\" name=\"cantidad\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 74, $this->source); })()), "cantidad", [], "any", false, false, false, 74), "html", null, true);
        echo "\" step=\"any\" min=\"0\" required class=\"form-control\" id=\"cantidad\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"umbral\" class=\"form-label\">Umbral</label>
                            <input type=\"number\" min=\"0\" name=\"umbral\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 78, $this->source); })()), "umbral", [], "any", false, false, false, 78), "html", null, true);
        echo "\" class=\"form-control\" id=\"umbral\" autocomplete=\"off\">
                            <div class=\"alert alert-info mt-3\" role=\"alert\">
                                El umbral es la cantidad mínima del producto que se quiere tener en el almacén. En el momento que el umbral se rebase se le notificará al gestor del almacén.
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label class=\"form-label\">Foto:</label>
                            <label for=\"fileUpload\" class=\"file-upload btn btn-primary btn-block\">
                                <i class=\"fa fa-upload mr-2\"></i>Subir foto ...<input name=\"foto\" id=\"fileUpload\" type=\"file\" accept=\"image/*\">
                            </label>
                        </div>
                        ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 91, $this->source); })()), "producto", [], "any", false, false, false, 91), "foto", [], "any", false, false, false, 91)) {
            // line 92
            echo "                            <div class=\"mb-3 col-12 col-lg-6\">
                                <div class=\"card\" style=\"height: 455px;\">
                                    <div class=\"card-body align-self-center\">
                                        <div style=\"padding: 5px; border: gray solid 1px; border-radius: 5px;\">
                                            <img style=\"width: 100%;max-height: 410px;\" src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_products_photo", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 96, $this->source); })()), "producto", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\" />
                                        </div>                                        
                                    </div>                                        
                                </div>
                            </div>
                        ";
        }
        // line 101
        echo " 
                    </div>
                    <div class=\"row\">
                        <div class=\"mb-3 col-12\">
                            <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                <thead>
                                    <tr>
                                        <th>LOTE</th>
                                        <th>CANTIDAD</th>
                                        <th>FECHA CADUCIDAD</th>
                                        <th width=\"50px\">DETALLE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lotes"]) || array_key_exists("lotes", $context) ? $context["lotes"] : (function () { throw new RuntimeError('Variable "lotes" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 116
            echo "                                        <tr>
                                            <td>";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "lote", [], "any", false, false, false, 117), "html", null, true);
            echo "</td>
                                            <td>";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "cantidad", [], "any", false, false, false, 118), "html", null, true);
            echo "</td>
                                            <td class=\"align-middle\">
                                                ";
            // line 120
            if (twig_get_attribute($this->env, $this->source, $context["objeto"], "fechaCaducidad", [], "any", false, false, false, 120)) {
                // line 121
                echo "                                                    ";
                if ((0 >= twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "fechaCaducidad", [], "any", false, false, false, 121), twig_date_modify_filter($this->env, "now", "+0 day")))) {
                    // line 122
                    echo "                                                        <i class=\"las la-exclamation-triangle text-warning\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Lote caducado.\"></i>
                                                    ";
                }
                // line 124
                echo "                                                ";
            }
            // line 125
            echo "                                                ";
            ((twig_get_attribute($this->env, $this->source, $context["objeto"], "fechaCaducidad", [], "any", false, false, false, 125)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "fechaCaducidad", [], "any", false, false, false, 125), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "
                                            </td>
                                            <td class=\"text-center align-middle\">
                                                <a class=\"btn btn-primary btn-icon\" href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_stock_lot_show", ["almacen" => twig_get_attribute($this->env, $this->source, (isset($context["almacen"]) || array_key_exists("almacen", $context) ? $context["almacen"] : (function () { throw new RuntimeError('Variable "almacen" does not exist.', 128, $this->source); })()), "id", [], "any", false, false, false, 128), "id" => twig_get_attribute($this->env, $this->source, (isset($context["almacenProducto"]) || array_key_exists("almacenProducto", $context) ? $context["almacenProducto"] : (function () { throw new RuntimeError('Variable "almacenProducto" does not exist.', 128, $this->source); })()), "id", [], "any", false, false, false, 128), "lote" => twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 128)]), "html", null, true);
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
        // line 134
        echo "                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
                <div class=\"card-footer\">
                    <button type=\"submit\" class=\"btn btn-primary\">Guardar modificación</button>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "almacen/inventario/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 134,  327 => 128,  320 => 125,  317 => 124,  313 => 122,  310 => 121,  308 => 120,  303 => 118,  299 => 117,  296 => 116,  292 => 115,  276 => 101,  267 => 96,  261 => 92,  259 => 91,  243 => 78,  236 => 74,  229 => 70,  223 => 66,  198 => 64,  194 => 63,  186 => 57,  171 => 55,  167 => 54,  158 => 48,  151 => 44,  144 => 40,  137 => 36,  130 => 32,  114 => 19,  105 => 13,  99 => 10,  93 => 7,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Detalle de la stock{% endblock %}
{% block body %}
    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle del producto {{ almacenProducto.producto.nombre }}</h1>
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('app_index') }}\" class=\"text-gray-600 text-hover-primary\">Inicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('warehouse_stock_index',{'almacen':almacen.id}) }}\" class=\"text-gray-600 text-hover-primary\">Stock</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del producto</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"{{ path('warehouse_stock_index',{'almacen':almacen.id}) }}\" class=\"btn btn-sm btn-primary\" >
                    Volver al stock</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"card\">
            <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"nombre\" class=\"form-label\">Nombre</label>
                            <input type=\"text\" name=\"nombre\" value=\"{{ almacenProducto.producto.nombre }}\" required class=\"form-control\" id=\"producto\" autocomplete=\"off\">
                        </div>
                        <div class=\"col-12 col-lg-6\">
                            <label for=\"codigo\" class=\"form-label\">ID</label>
                            <input type=\"text\" disabled value=\"{{ almacenProducto.producto.id }}\" class=\"form-control\" id=\"codigo\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"codigo\" class=\"form-label\">Código</label>
                            <input type=\"text\" name=\"codigo\" value=\"{{ almacenProducto.producto.codigo }}\" class=\"form-control\" id=\"codigo\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"referencia\" class=\"form-label\">Referencia</label>
                            <input type=\"text\" name=\"referencia\" value=\"{{ almacenProducto.producto.referencia }}\" class=\"form-control\" id=\"referencia\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"codigoBarra\" class=\"form-label\">Código de barras</label>
                            <input type=\"text\" name=\"codigoBarra\" value=\"{{ almacenProducto.producto.codigoBarra }}\" class=\"form-control\" id=\"codigoBarra\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"categoria\" class=\"form-label\">Categoría</label>
                            <select name=\"categoria\" class=\"form-select form-select-solid\" id=\"categoria\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                <option value=\" \">---</option>
                                {% for objeto in categorias %}
                                    <option {% if objeto == almacenProducto.producto.categoria %}selected{% endif %} value=\"{{ objeto.id }}\">{{ objeto }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label class=\"form-label\">Subcategoría:</label>
                            <select name=\"subcategoria\" class=\"form-control\" id=\"subcategoria\">
                                <option data-categoria=\"0\" value=\"\">---</option>
                                {% for objeto in subcategorias %}
                                    <option data-categoria=\"{{ objeto.categoria.id }}\" {% if almacenProducto.producto.subcategoria %}{% if objeto.categoria != almacenProducto.producto.subcategoria.categoria %}hidden{% endif %}{% else %}hidden{% endif %} value=\"{{ objeto.id }}\" {% if objeto == almacenProducto.producto.subcategoria %}selected{% endif %}>{{ objeto.nombre }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"descripcion\" class=\"form-label\">Descripción</label>
                            <textarea name=\"descripcion\" class=\"form-control\" autocomplete=\"off\">{{ almacenProducto.producto.descripcion }}</textarea>
                        </div>   
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"cantidad\" class=\"form-label\">Cantidad</label>
                            <input type=\"number\" name=\"cantidad\" value=\"{{ almacenProducto.cantidad }}\" step=\"any\" min=\"0\" required class=\"form-control\" id=\"cantidad\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"umbral\" class=\"form-label\">Umbral</label>
                            <input type=\"number\" min=\"0\" name=\"umbral\" value=\"{{ almacenProducto.umbral }}\" class=\"form-control\" id=\"umbral\" autocomplete=\"off\">
                            <div class=\"alert alert-info mt-3\" role=\"alert\">
                                El umbral es la cantidad mínima del producto que se quiere tener en el almacén. En el momento que el umbral se rebase se le notificará al gestor del almacén.
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label class=\"form-label\">Foto:</label>
                            <label for=\"fileUpload\" class=\"file-upload btn btn-primary btn-block\">
                                <i class=\"fa fa-upload mr-2\"></i>Subir foto ...<input name=\"foto\" id=\"fileUpload\" type=\"file\" accept=\"image/*\">
                            </label>
                        </div>
                        {% if almacenProducto.producto.foto %}
                            <div class=\"mb-3 col-12 col-lg-6\">
                                <div class=\"card\" style=\"height: 455px;\">
                                    <div class=\"card-body align-self-center\">
                                        <div style=\"padding: 5px; border: gray solid 1px; border-radius: 5px;\">
                                            <img style=\"width: 100%;max-height: 410px;\" src=\"{{ path('warehouse_products_photo',{'almacen':almacen.id,'id':almacenProducto.producto.id}) }}\" />
                                        </div>                                        
                                    </div>                                        
                                </div>
                            </div>
                        {% endif %} 
                    </div>
                    <div class=\"row\">
                        <div class=\"mb-3 col-12\">
                            <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                <thead>
                                    <tr>
                                        <th>LOTE</th>
                                        <th>CANTIDAD</th>
                                        <th>FECHA CADUCIDAD</th>
                                        <th width=\"50px\">DETALLE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for objeto in lotes %}
                                        <tr>
                                            <td>{{ objeto.lote }}</td>
                                            <td>{{ objeto.cantidad }}</td>
                                            <td class=\"align-middle\">
                                                {% if objeto.fechaCaducidad %}
                                                    {% if objeto.fechaCaducidad <= 'now'|date_modify(\"+0 day\") %}
                                                        <i class=\"las la-exclamation-triangle text-warning\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Lote caducado.\"></i>
                                                    {% endif %}
                                                {% endif %}
                                                {{ objeto.fechaCaducidad ? objeto.fechaCaducidad | date('d-m-Y') }}
                                            </td>
                                            <td class=\"text-center align-middle\">
                                                <a class=\"btn btn-primary btn-icon\" href=\"{{ path('warehouse_stock_lot_show',{'almacen':almacen.id,'id':almacenProducto.id,'lote':objeto.id}) }}\">
                                                    <i class=\"las la-eye fs-2x\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
                <div class=\"card-footer\">
                    <button type=\"submit\" class=\"btn btn-primary\">Guardar modificación</button>
                </div>
            </form>
        </div>
    </div>
{% endblock %}", "almacen/inventario/show.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\almacen\\inventario\\show.html.twig");
    }
}
