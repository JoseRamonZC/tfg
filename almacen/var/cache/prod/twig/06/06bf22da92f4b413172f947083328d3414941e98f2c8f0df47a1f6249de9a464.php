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
class __TwigTemplate_1b3d142487d4f16a540252e7fd0dfd69ec7865f4efaf1b5b29e8cb1a6676545d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "almacen/inventario/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Detalle de la stock";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"app-toolbar align-items-center justify-content-between\">
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Detalle del producto ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["almacenProducto"] ?? null), "producto", [], "any", false, false, false, 7), "nombre", [], "any", false, false, false, 7), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_stock_index", ["almacen" => twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" class=\"text-gray-600 text-hover-primary\">Stock</a>
                    </li>
                    <li class=\"breadcrumb-item text-gray-600\">Detalle del producto</li>
                </ul>
            </div>
            <div class=\"d-flex align-items-center py-2\">
                <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_stock_index", ["almacen" => twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "id", [], "any", false, false, false, 19)]), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["almacenProducto"] ?? null), "producto", [], "any", false, false, false, 32), "nombre", [], "any", false, false, false, 32), "html", null, true);
        echo "\" required class=\"form-control\" id=\"producto\" autocomplete=\"off\">
                        </div>
                        <div class=\"col-12 col-lg-6\">
                            <label for=\"codigo\" class=\"form-label\">ID</label>
                            <input type=\"text\" disabled value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["almacenProducto"] ?? null), "producto", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true);
        echo "\" class=\"form-control\" id=\"codigo\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"codigo\" class=\"form-label\">Código</label>
                            <input type=\"text\" name=\"codigo\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["almacenProducto"] ?? null), "producto", [], "any", false, false, false, 40), "codigo", [], "any", false, false, false, 40), "html", null, true);
        echo "\" class=\"form-control\" id=\"codigo\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"referencia\" class=\"form-label\">Referencia</label>
                            <input type=\"text\" name=\"referencia\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["almacenProducto"] ?? null), "producto", [], "any", false, false, false, 44), "referencia", [], "any", false, false, false, 44), "html", null, true);
        echo "\" class=\"form-control\" id=\"referencia\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"codigoBarra\" class=\"form-label\">Código de barras</label>
                            <input type=\"text\" name=\"codigoBarra\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["almacenProducto"] ?? null), "producto", [], "any", false, false, false, 48), "codigoBarra", [], "any", false, false, false, 48), "html", null, true);
        echo "\" class=\"form-control\" id=\"codigoBarra\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"categoria\" class=\"form-label\">Categoría</label>
                            <select name=\"categoria\" class=\"form-select form-select-solid\" id=\"categoria\" data-kt-select2=\"true\" data-placeholder=\"Seleccionar\">
                                <option value=\" \">---</option>
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 55
            echo "                                    <option ";
            if ((0 === twig_compare($context["objeto"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["almacenProducto"] ?? null), "producto", [], "any", false, false, false, 55), "categoria", [], "any", false, false, false, 55)))) {
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
        $context['_seq'] = twig_ensure_traversable(($context["subcategorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
            // line 64
            echo "                                    <option data-categoria=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["objeto"], "categoria", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["almacenProducto"] ?? null), "producto", [], "any", false, false, false, 64), "subcategoria", [], "any", false, false, false, 64)) {
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "categoria", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["almacenProducto"] ?? null), "producto", [], "any", false, false, false, 64), "subcategoria", [], "any", false, false, false, 64), "categoria", [], "any", false, false, false, 64)))) {
                    echo "hidden";
                }
            } else {
                echo "hidden";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare($context["objeto"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["almacenProducto"] ?? null), "producto", [], "any", false, false, false, 64), "subcategoria", [], "any", false, false, false, 64)))) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["almacenProducto"] ?? null), "producto", [], "any", false, false, false, 70), "descripcion", [], "any", false, false, false, 70), "html", null, true);
        echo "</textarea>
                        </div>   
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"cantidad\" class=\"form-label\">Cantidad</label>
                            <input type=\"number\" name=\"cantidad\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["almacenProducto"] ?? null), "cantidad", [], "any", false, false, false, 74), "html", null, true);
        echo "\" step=\"any\" min=\"0\" required class=\"form-control\" id=\"cantidad\" autocomplete=\"off\">
                        </div>
                        <div class=\"mb-3 col-12 col-lg-6\">
                            <label for=\"umbral\" class=\"form-label\">Umbral</label>
                            <input type=\"number\" min=\"0\" name=\"umbral\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["almacenProducto"] ?? null), "umbral", [], "any", false, false, false, 78), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["almacenProducto"] ?? null), "producto", [], "any", false, false, false, 91), "foto", [], "any", false, false, false, 91)) {
            // line 92
            echo "                            <div class=\"mb-3 col-12 col-lg-6\">
                                <div class=\"card\" style=\"height: 455px;\">
                                    <div class=\"card-body align-self-center\">
                                        <div style=\"padding: 5px; border: gray solid 1px; border-radius: 5px;\">
                                            <img style=\"width: 100%;max-height: 410px;\" src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_products_photo", ["almacen" => twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "id", [], "any", false, false, false, 96), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["almacenProducto"] ?? null), "producto", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96)]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["lotes"] ?? null));
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_stock_lot_show", ["almacen" => twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "id", [], "any", false, false, false, 128), "id" => twig_get_attribute($this->env, $this->source, ($context["almacenProducto"] ?? null), "id", [], "any", false, false, false, 128), "lote" => twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 128)]), "html", null, true);
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
        return array (  309 => 134,  297 => 128,  290 => 125,  287 => 124,  283 => 122,  280 => 121,  278 => 120,  273 => 118,  269 => 117,  266 => 116,  262 => 115,  246 => 101,  237 => 96,  231 => 92,  229 => 91,  213 => 78,  206 => 74,  199 => 70,  193 => 66,  168 => 64,  164 => 63,  156 => 57,  141 => 55,  137 => 54,  128 => 48,  121 => 44,  114 => 40,  107 => 36,  100 => 32,  84 => 19,  75 => 13,  69 => 10,  63 => 7,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "almacen/inventario/show.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\almacen\\inventario\\show.html.twig");
    }
}
