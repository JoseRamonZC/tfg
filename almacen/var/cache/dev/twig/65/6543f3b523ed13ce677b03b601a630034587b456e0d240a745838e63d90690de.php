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

/* producto/show.html.twig */
class __TwigTemplate_e8ef49444a345a18fd0349ff10000868f77deb51a70c3584a301c1488cce82be extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "producto/show.html.twig", 1);
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

        echo "Detalle del producto";
        
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 7, $this->source); })()), "nombre", [], "any", false, false, false, 7), "html", null, true);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_index");
        echo "\" class=\"text-gray-600 text-hover-primary\">Productos</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del producto</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_index");
        echo "\" class=\"btn btn-sm btn-primary\" >
                    Volver al listado de productos</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"mb-5 hover-scroll-x\">
            <div class=\"d-grid\">
                <ul class=\"nav nav-tabs flex-nowrap text-nowrap\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 active btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_producto\">
                            <i class=\"las la-boxes fs-2x\"></i> Detalle del producto
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_stocks\">
                            <i class=\"las la-warehouse fs-2x\"></i> Stock en almacenes
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_importaciones\">
                            <i class=\"las la-file-invoice fs-2x\"></i> Recepción de pedidos
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_traslados\">
                            <i class=\"las la-truck-moving fs-2x\"></i> Traslados
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
            <div class=\"tab-pane fade show active\" id=\"kt_tab_producto\" role=\"tabpanel\">
                <div class=\"card\">
                    <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
                        <div class=\"card-header\">
                            <div class=\"card-title d-flex align-items-center\">
                                <h3>Producto</h3>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-lg-6\">
                                    <label for=\"nombre\" class=\"form-label\">Nombre</label>
                                    <input type=\"text\" name=\"nombre\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 70, $this->source); })()), "nombre", [], "any", false, false, false, 70), "html", null, true);
        echo "\" required class=\"form-control\" id=\"producto\" autocomplete=\"off\">
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label for=\"codigo\" class=\"form-label\">ID</label>
                                    <input type=\"text\" disabled value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74), "html", null, true);
        echo "\" class=\"form-control\" id=\"codigo\" autocomplete=\"off\">
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label for=\"codigo\" class=\"form-label\">Código</label>
                                    <input type=\"text\" name=\"codigo\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 78, $this->source); })()), "codigo", [], "any", false, false, false, 78), "html", null, true);
        echo "\" class=\"form-control\" id=\"codigo\" autocomplete=\"off\">
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label for=\"referencia\" class=\"form-label\">Referencia</label>
                                    <input type=\"text\" name=\"referencia\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 82, $this->source); })()), "referencia", [], "any", false, false, false, 82), "html", null, true);
        echo "\" class=\"form-control\" id=\"referencia\" autocomplete=\"off\">
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label for=\"codigoBarra\" class=\"form-label\">Código de barras</label>
                                    <input type=\"text\" name=\"codigoBarra\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 86, $this->source); })()), "codigoBarra", [], "any", false, false, false, 86), "html", null, true);
        echo "\" class=\"form-control\" id=\"codigoBarra\" autocomplete=\"off\">
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label for=\"precio\" class=\"form-label\">Precio</label>
                                    <input type=\"number\" name=\"precio\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 90, $this->source); })()), "precio", [], "any", false, false, false, 90), "html", null, true);
        echo "\" step=\"any\" min=\"0\" required class=\"form-control\" id=\"precio\" autocomplete=\"off\">
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label for=\"categoria\" class=\"form-label\">Categoría</label>
                                    <select name=\"categoria\" class=\"form-select form-select-solid\" id=\"categoria\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                        <option value=\" \">---</option>
                                        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 97
            echo "                                            <option ";
            if ((0 === twig_compare($context["objeto"], twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 97, $this->source); })()), "categoria", [], "any", false, false, false, 97)))) {
                echo "selected";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 97), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["objeto"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                                    </select>
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label class=\"form-label\">Subcategoría:</label>
                                    <select name=\"subcategoria\" class=\"form-control\" id=\"subcategoria\">
                                        <option data-categoria=\"0\" value=\"\">---</option>
                                        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subcategorias"]) || array_key_exists("subcategorias", $context) ? $context["subcategorias"] : (function () { throw new RuntimeError('Variable "subcategorias" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 106
            echo "                                            <option data-categoria=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "categoria", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 106, $this->source); })()), "subcategoria", [], "any", false, false, false, 106)) {
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "categoria", [], "any", false, false, false, 106), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 106, $this->source); })()), "subcategoria", [], "any", false, false, false, 106), "categoria", [], "any", false, false, false, 106)))) {
                    echo "hidden";
                }
            } else {
                echo "hidden";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 106), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare($context["objeto"], twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 106, $this->source); })()), "subcategoria", [], "any", false, false, false, 106)))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "nombre", [], "any", false, false, false, 106), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                                    </select>
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label for=\"descripcion\" class=\"form-label\">Descripción</label>
                                    <textarea name=\"descripcion\" class=\"form-control\" autocomplete=\"off\">";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 112, $this->source); })()), "descripcion", [], "any", false, false, false, 112), "html", null, true);
        echo "</textarea>
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label class=\"form-label\">Foto:</label>
                                    <label for=\"fileUpload\" class=\"file-upload btn btn-primary btn-block\">
                                        <i class=\"fa fa-upload mr-2\"></i>Subir foto ...<input name=\"foto\" id=\"fileUpload\" type=\"file\" accept=\"image/*\">
                                    </label>
                                </div>
                                ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 120, $this->source); })()), "foto", [], "any", false, false, false, 120)) {
            // line 121
            echo "                                    <div class=\"col-12 col-lg-6\">
                                        <div class=\"card\" style=\"height: 455px;\">
                                            <div class=\"card-body align-self-center\">
                                                <div style=\"padding: 5px; border: gray solid 1px; border-radius: 5px;\">
                                                    <img style=\"width: 100%;max-height: 410px;\" src=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_photo", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125)]), "html", null, true);
            echo "\" />
                                                </div>                                        
                                            </div>                                        
                                        </div>
                                    </div>
                                ";
        }
        // line 130
        echo "           
                            </div>     
                        </div>
                        <div class=\"card-footer\">
                            <button type=\"submit\" class=\"btn btn-primary\">Guardar modificación</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"tab-pane fade show\" id=\"kt_tab_stocks\" role=\"tabpanel\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title d-flex align-items-center\">
                            <h3>Stock en almacenes</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                <thead>
                                    <tr>
                                        <th>ALMACÉN</th>
                                        <th>CANTIDAD</th>
                                        <th>LOTES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lotes"]) || array_key_exists("lotes", $context) ? $context["lotes"] : (function () { throw new RuntimeError('Variable "lotes" does not exist.', 157, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 158
            echo "                                        <tr>
                                            <td>";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "almacen", [], "any", false, false, false, 159), "html", null, true);
            echo "</td>
                                            <td>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "cantidad", [], "any", false, false, false, 160), "html", null, true);
            echo "</td>
                                            <td>
                                                <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                                    <thead>
                                                        <tr>
                                                            <th>LOTE</th>
                                                            <th>CANTIDAD</th>
                                                            <th>FECHA CADUCIDAD</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        ";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["objeto"], "lotes", [], "any", false, false, false, 171));
            foreach ($context['_seq'] as $context["_key"] => $context["lote"]) {
                // line 172
                echo "                                                            <tr>
                                                                <td>";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lote"], "lote", [], "any", false, false, false, 173), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 174
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lote"], "cantidad", [], "any", false, false, false, 174), "html", null, true);
                echo "</td>
                                                                <td class=\"align-middle\">
                                                                    ";
                // line 176
                if (twig_get_attribute($this->env, $this->source, $context["lote"], "fechaCaducidad", [], "any", false, false, false, 176)) {
                    // line 177
                    echo "                                                                        ";
                    if ((0 >= twig_compare(twig_get_attribute($this->env, $this->source, $context["lote"], "fechaCaducidad", [], "any", false, false, false, 177), twig_date_modify_filter($this->env, "now", "+0 day")))) {
                        // line 178
                        echo "                                                                            <i class=\"las la-exclamation-triangle text-warning\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Lote caducado.\"></i>
                                                                        ";
                    }
                    // line 180
                    echo "                                                                    ";
                }
                // line 181
                echo "                                                                    ";
                ((twig_get_attribute($this->env, $this->source, $context["lote"], "fechaCaducidad", [], "any", false, false, false, 181)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lote"], "fechaCaducidad", [], "any", false, false, false, 181), "d-m-Y"), "html", null, true))) : (print ("")));
                echo "
                                                                </td>
                                                            </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lote'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "                                                    </tbody>
                                                </table> 
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane fade show\" id=\"kt_tab_importaciones\" role=\"tabpanel\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title d-flex align-items-center\">
                            <h3>Recepción de pedidos</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                <thead>
                                    <tr>
                                        <th>PEDIDO</th>
                                        <th>LOTE</th>
                                        <th>CANTIDAD</th>
                                        <th class=\"text-right\">PRECIO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["importaciones"]) || array_key_exists("importaciones", $context) ? $context["importaciones"] : (function () { throw new RuntimeError('Variable "importaciones" does not exist.', 215, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 216
            echo "                                        <tr>
                                            <td>
                                                <b>Almacén:</b> ";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "importacion", [], "any", false, false, false, 218), "almacen", [], "any", false, false, false, 218), "html", null, true);
            echo "<br />
                                                <b>Factura:</b> ";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "importacion", [], "any", false, false, false, 219), "factura", [], "any", false, false, false, 219), "html", null, true);
            echo "<br />
                                                <b>Albarán:</b> ";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "importacion", [], "any", false, false, false, 220), "albaran", [], "any", false, false, false, 220), "html", null, true);
            echo "<br />
                                                <b>Fecha:</b> ";
            // line 221
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "importacion", [], "any", false, false, false, 221), "fecha", [], "any", false, false, false, 221), "d-m-Y"), "html", null, true);
            echo "<br />
                                                <b>Proveedor:</b> ";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "importacion", [], "any", false, false, false, 222), "proveedor", [], "any", false, false, false, 222), "html", null, true);
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "importacion", [], "any", false, false, false, 222), "proveedor", [], "any", false, false, false, 222)) ? (print (twig_escape_filter($this->env, (" - " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "importacion", [], "any", false, false, false, 222), "proveedor", [], "any", false, false, false, 222), "direccion", [], "any", false, false, false, 222)), "html", null, true))) : (print ("")));
            echo "
                                            </td>
                                            <td>";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "lote", [], "any", false, false, false, 224), "lote", [], "any", false, false, false, 224), "html", null, true);
            echo "</td>
                                            <td>";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "cantidad", [], "any", false, false, false, 225), "html", null, true);
            echo "</td>
                                            <td class=\"text-right\">";
            // line 226
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "precio", [], "any", false, false, false, 226), 2, ",", "."), "html", null, true);
            echo " €/ud (";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["objeto"], "precio", [], "any", false, false, false, 226) * twig_get_attribute($this->env, $this->source, $context["objeto"], "cantidad", [], "any", false, false, false, 226)), 2, ",", "."), "html", null, true);
            echo " €)</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane fade show\" id=\"kt_tab_traslados\" role=\"tabpanel\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title d-flex align-items-center\">
                            <h3>Traslados</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                <thead>
                                    <tr>
                                        <th>ALMACÉN</th>
                                        <th>FECHA</th>
                                        <th>LOTE</th>
                                        <th>CANTIDAD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 254
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traslados"]) || array_key_exists("traslados", $context) ? $context["traslados"] : (function () { throw new RuntimeError('Variable "traslados" does not exist.', 254, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 255
            echo "                                        <tr>
                                            <td>
                                                ";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "traslado", [], "any", false, false, false, 257), "almacenA", [], "any", false, false, false, 257), "html", null, true);
            echo " -> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "traslado", [], "any", false, false, false, 257), "almacenB", [], "any", false, false, false, 257), "html", null, true);
            echo "
                                                ";
            // line 258
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "traslado", [], "any", false, false, false, 258), "observaciones", [], "any", false, false, false, 258)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "traslado", [], "any", false, false, false, 258), "observaciones", [], "any", false, false, false, 258), "html", null, true);
            }
            // line 259
            echo "                                            </td>
                                            <td>";
            // line 260
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "traslado", [], "any", false, false, false, 260), "fecha", [], "any", false, false, false, 260), "d-m-Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 261
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "lote", [], "any", false, false, false, 261), "lote", [], "any", false, false, false, 261), "html", null, true);
            echo "</td>
                                            <td>";
            // line 262
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "cantidad", [], "any", false, false, false, 262), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane fade show\" id=\"kt_tab_asignaciones\" role=\"tabpanel\">
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
                                        <th>ÁREA DE SERVICIO</th>
                                        <th>FECHA</th>
                                        <th>ASIGNACIÓN</th>
                                        <th>LOTE</th>
                                        <th>CANTIDAD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["asignaciones"]) || array_key_exists("asignaciones", $context) ? $context["asignaciones"] : (function () { throw new RuntimeError('Variable "asignaciones" does not exist.', 291, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 292
            echo "                                        <tr>
                                            <td>";
            // line 293
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "asignacion", [], "any", false, false, false, 293), "terceros", [], "any", false, false, false, 293)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "asignacion", [], "any", false, false, false, 293), "terceros", [], "any", false, false, false, 293), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "asignacion", [], "any", false, false, false, 293), "areaServicio", [], "any", false, false, false, 293), "html", null, true);
            }
            echo "</td>
                                            <td>";
            // line 294
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "asignacion", [], "any", false, false, false, 294), "fecha", [], "any", false, false, false, 294), "d-m-Y"), "html", null, true);
            echo "</td>
                                            <td>
                                                Encargado: ";
            // line 296
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "asignacion", [], "any", false, false, false, 296), "encargado", [], "any", false, false, false, 296), "html", null, true);
            echo "<br />
                                                Orden de trabajo: ";
            // line 297
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "asignacion", [], "any", false, false, false, 297), "ordenTrabajo", [], "any", false, false, false, 297), "html", null, true);
            echo "<br />
                                                Observaciones: ";
            // line 298
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "asignacion", [], "any", false, false, false, 298), "observaciones", [], "any", false, false, false, 298), "html", null, true);
            echo "
                                            </td>
                                            <td>";
            // line 300
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "lote", [], "any", false, false, false, 300), "lote", [], "any", false, false, false, 300), "html", null, true);
            echo "</td>
                                            <td>";
            // line 301
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "cantidad", [], "any", false, false, false, 301), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 304
        echo "                                </tbody>
                            </table> 
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
        return "producto/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 304,  611 => 301,  607 => 300,  602 => 298,  598 => 297,  594 => 296,  589 => 294,  581 => 293,  578 => 292,  574 => 291,  546 => 265,  537 => 262,  533 => 261,  529 => 260,  526 => 259,  522 => 258,  516 => 257,  512 => 255,  508 => 254,  481 => 229,  470 => 226,  466 => 225,  462 => 224,  456 => 222,  452 => 221,  448 => 220,  444 => 219,  440 => 218,  436 => 216,  432 => 215,  405 => 190,  395 => 185,  384 => 181,  381 => 180,  377 => 178,  374 => 177,  372 => 176,  367 => 174,  363 => 173,  360 => 172,  356 => 171,  342 => 160,  338 => 159,  335 => 158,  331 => 157,  302 => 130,  293 => 125,  287 => 121,  285 => 120,  274 => 112,  268 => 108,  243 => 106,  239 => 105,  231 => 99,  216 => 97,  212 => 96,  203 => 90,  196 => 86,  189 => 82,  182 => 78,  175 => 74,  168 => 70,  114 => 19,  105 => 13,  99 => 10,  93 => 7,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Detalle del producto{% endblock %}
{% block body %}
    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle del producto {{ producto.nombre }}</h1>
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('app_index') }}\" class=\"text-gray-600 text-hover-primary\">Inicio</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"{{ path('products_index') }}\" class=\"text-gray-600 text-hover-primary\">Productos</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del producto</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"{{ path('products_index') }}\" class=\"btn btn-sm btn-primary\" >
                    Volver al listado de productos</a>
            </div>
        </div>
    </div>

    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <div class=\"mb-5 hover-scroll-x\">
            <div class=\"d-grid\">
                <ul class=\"nav nav-tabs flex-nowrap text-nowrap\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 active btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_producto\">
                            <i class=\"las la-boxes fs-2x\"></i> Detalle del producto
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_stocks\">
                            <i class=\"las la-warehouse fs-2x\"></i> Stock en almacenes
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_importaciones\">
                            <i class=\"las la-file-invoice fs-2x\"></i> Recepción de pedidos
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link w-100 btn btn-flex btn-active-light-sacyr btn-color-gray-600\" data-bs-toggle=\"tab\" href=\"#kt_tab_traslados\">
                            <i class=\"las la-truck-moving fs-2x\"></i> Traslados
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
            <div class=\"tab-pane fade show active\" id=\"kt_tab_producto\" role=\"tabpanel\">
                <div class=\"card\">
                    <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
                        <div class=\"card-header\">
                            <div class=\"card-title d-flex align-items-center\">
                                <h3>Producto</h3>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-lg-6\">
                                    <label for=\"nombre\" class=\"form-label\">Nombre</label>
                                    <input type=\"text\" name=\"nombre\" value=\"{{ producto.nombre }}\" required class=\"form-control\" id=\"producto\" autocomplete=\"off\">
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label for=\"codigo\" class=\"form-label\">ID</label>
                                    <input type=\"text\" disabled value=\"{{ producto.id }}\" class=\"form-control\" id=\"codigo\" autocomplete=\"off\">
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label for=\"codigo\" class=\"form-label\">Código</label>
                                    <input type=\"text\" name=\"codigo\" value=\"{{ producto.codigo }}\" class=\"form-control\" id=\"codigo\" autocomplete=\"off\">
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label for=\"referencia\" class=\"form-label\">Referencia</label>
                                    <input type=\"text\" name=\"referencia\" value=\"{{ producto.referencia }}\" class=\"form-control\" id=\"referencia\" autocomplete=\"off\">
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label for=\"codigoBarra\" class=\"form-label\">Código de barras</label>
                                    <input type=\"text\" name=\"codigoBarra\" value=\"{{ producto.codigoBarra }}\" class=\"form-control\" id=\"codigoBarra\" autocomplete=\"off\">
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label for=\"precio\" class=\"form-label\">Precio</label>
                                    <input type=\"number\" name=\"precio\" value=\"{{ producto.precio }}\" step=\"any\" min=\"0\" required class=\"form-control\" id=\"precio\" autocomplete=\"off\">
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label for=\"categoria\" class=\"form-label\">Categoría</label>
                                    <select name=\"categoria\" class=\"form-select form-select-solid\" id=\"categoria\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                        <option value=\" \">---</option>
                                        {% for objeto in categorias %}
                                            <option {% if objeto == producto.categoria %}selected{% endif %} value=\"{{ objeto.id }}\">{{ objeto }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label class=\"form-label\">Subcategoría:</label>
                                    <select name=\"subcategoria\" class=\"form-control\" id=\"subcategoria\">
                                        <option data-categoria=\"0\" value=\"\">---</option>
                                        {% for objeto in subcategorias %}
                                            <option data-categoria=\"{{ objeto.categoria.id }}\" {% if producto.subcategoria %}{% if objeto.categoria != producto.subcategoria.categoria %}hidden{% endif %}{% else %}hidden{% endif %} value=\"{{ objeto.id }}\" {% if objeto == producto.subcategoria %}selected{% endif %}>{{ objeto.nombre }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label for=\"descripcion\" class=\"form-label\">Descripción</label>
                                    <textarea name=\"descripcion\" class=\"form-control\" autocomplete=\"off\">{{ producto.descripcion }}</textarea>
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <label class=\"form-label\">Foto:</label>
                                    <label for=\"fileUpload\" class=\"file-upload btn btn-primary btn-block\">
                                        <i class=\"fa fa-upload mr-2\"></i>Subir foto ...<input name=\"foto\" id=\"fileUpload\" type=\"file\" accept=\"image/*\">
                                    </label>
                                </div>
                                {% if producto.foto %}
                                    <div class=\"col-12 col-lg-6\">
                                        <div class=\"card\" style=\"height: 455px;\">
                                            <div class=\"card-body align-self-center\">
                                                <div style=\"padding: 5px; border: gray solid 1px; border-radius: 5px;\">
                                                    <img style=\"width: 100%;max-height: 410px;\" src=\"{{ path('products_photo',{'id':producto.id}) }}\" />
                                                </div>                                        
                                            </div>                                        
                                        </div>
                                    </div>
                                {% endif %}           
                            </div>     
                        </div>
                        <div class=\"card-footer\">
                            <button type=\"submit\" class=\"btn btn-primary\">Guardar modificación</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"tab-pane fade show\" id=\"kt_tab_stocks\" role=\"tabpanel\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title d-flex align-items-center\">
                            <h3>Stock en almacenes</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                <thead>
                                    <tr>
                                        <th>ALMACÉN</th>
                                        <th>CANTIDAD</th>
                                        <th>LOTES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for objeto in lotes %}
                                        <tr>
                                            <td>{{ objeto.almacen }}</td>
                                            <td>{{ objeto.cantidad }}</td>
                                            <td>
                                                <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                                    <thead>
                                                        <tr>
                                                            <th>LOTE</th>
                                                            <th>CANTIDAD</th>
                                                            <th>FECHA CADUCIDAD</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        {% for lote in objeto.lotes %}
                                                            <tr>
                                                                <td>{{ lote.lote }}</td>
                                                                <td>{{ lote.cantidad }}</td>
                                                                <td class=\"align-middle\">
                                                                    {% if lote.fechaCaducidad %}
                                                                        {% if lote.fechaCaducidad <= 'now'|date_modify(\"+0 day\") %}
                                                                            <i class=\"las la-exclamation-triangle text-warning\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Lote caducado.\"></i>
                                                                        {% endif %}
                                                                    {% endif %}
                                                                    {{ lote.fechaCaducidad ? lote.fechaCaducidad | date('d-m-Y') }}
                                                                </td>
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
                </div>
            </div>
            <div class=\"tab-pane fade show\" id=\"kt_tab_importaciones\" role=\"tabpanel\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title d-flex align-items-center\">
                            <h3>Recepción de pedidos</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                <thead>
                                    <tr>
                                        <th>PEDIDO</th>
                                        <th>LOTE</th>
                                        <th>CANTIDAD</th>
                                        <th class=\"text-right\">PRECIO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for objeto in importaciones %}
                                        <tr>
                                            <td>
                                                <b>Almacén:</b> {{ objeto.importacion.almacen }}<br />
                                                <b>Factura:</b> {{ objeto.importacion.factura }}<br />
                                                <b>Albarán:</b> {{ objeto.importacion.albaran }}<br />
                                                <b>Fecha:</b> {{ objeto.importacion.fecha | date('d-m-Y') }}<br />
                                                <b>Proveedor:</b> {{ objeto.importacion.proveedor }}{{ objeto.importacion.proveedor ? \" - \"~objeto.importacion.proveedor.direccion }}
                                            </td>
                                            <td>{{ objeto.lote.lote }}</td>
                                            <td>{{ objeto.cantidad }}</td>
                                            <td class=\"text-right\">{{ objeto.precio | number_format(2,',','.') }} €/ud ({{ (objeto.precio*objeto.cantidad) | number_format(2,',','.') }} €)</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane fade show\" id=\"kt_tab_traslados\" role=\"tabpanel\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"card-title d-flex align-items-center\">
                            <h3>Traslados</h3>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-rounded table-striped table-row-bordered border gy-7 gs-7\">
                                <thead>
                                    <tr>
                                        <th>ALMACÉN</th>
                                        <th>FECHA</th>
                                        <th>LOTE</th>
                                        <th>CANTIDAD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for objeto in traslados %}
                                        <tr>
                                            <td>
                                                {{ objeto.traslado.almacenA }} -> {{ objeto.traslado.almacenB }}
                                                {% if objeto.traslado.observaciones %}{{ objeto.traslado.observaciones }}{% endif %}
                                            </td>
                                            <td>{{ objeto.traslado.fecha | date('d-m-Y') }}</td>
                                            <td>{{ objeto.lote.lote }}</td>
                                            <td>{{ objeto.cantidad }}</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane fade show\" id=\"kt_tab_asignaciones\" role=\"tabpanel\">
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
                                        <th>ÁREA DE SERVICIO</th>
                                        <th>FECHA</th>
                                        <th>ASIGNACIÓN</th>
                                        <th>LOTE</th>
                                        <th>CANTIDAD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for objeto in asignaciones %}
                                        <tr>
                                            <td>{% if objeto.asignacion.terceros %}{{ objeto.asignacion.terceros }}{% else %}{{ objeto.asignacion.areaServicio }}{% endif %}</td>
                                            <td>{{ objeto.asignacion.fecha | date('d-m-Y') }}</td>
                                            <td>
                                                Encargado: {{ objeto.asignacion.encargado }}<br />
                                                Orden de trabajo: {{ objeto.asignacion.ordenTrabajo }}<br />
                                                Observaciones: {{ objeto.asignacion.observaciones }}
                                            </td>
                                            <td>{{ objeto.lote.lote }}</td>
                                            <td>{{ objeto.cantidad }}</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "producto/show.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\producto\\show.html.twig");
    }
}
