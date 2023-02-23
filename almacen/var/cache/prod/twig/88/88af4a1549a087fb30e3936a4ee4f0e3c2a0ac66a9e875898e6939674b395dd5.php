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

/* default/header.html.twig */
class __TwigTemplate_33f7f65e794c91baf4c7321c15b12990ebf55239de667c2b81296ce2f4632141 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"kt_app_header\" class=\"app-header\">
    <div class=\"app-header-primary\">
        <div class=\"app-container container-xxl d-flex align-items-stretch justify-content-between\">
            <div class=\"d-flex flex-stack flex-grow-1 flex-lg-grow-0\">
                <div class=\"d-flex align-items-center me-7\">
                    <button class=\"d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 ms-n2 me-2\" id=\"kt_header_secondary_toggle\">
                        <span class=\"svg-icon svg-icon-1\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                                <path d=\"M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z\" fill=\"currentColor\" />
                                <path opacity=\"0.3\" d=\"M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z\" fill=\"currentColor\" />
                            </svg>
                        </span>
                    </button>
                    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" class=\"d-flex align-items-center\">
                        <img alt=\"Logo\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo_blanco.png"), "html", null, true);
        echo "\" class=\"h-25px h-lg-30px\" />
                    </a>
                </div>
            </div>
            <div class=\"app-navbar gap-2\">
                <div class=\"app-navbar-item\" id=\"kt_header_user_menu_toggle\">
                    <div class=\"btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 px-2 px-md-3\" data-kt-menu-trigger=\"click\" data-kt-menu-attach=\"parent\" data-kt-menu-placement=\"bottom-end\">
                        <div class=\"d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4\">
                            <span class=\"text-white fs-8 fw-bolder lh-1 mb-1\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23), "username", [], "any", false, false, false, 23), "html", null, true);
        echo "</span>
                        </div>
                        <i class=\"las la-user-circle text-white fs-3x\"></i>
                    </div>
                    <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px\" data-kt-menu=\"true\">
                        <div class=\"menu-item px-3\">
                            <div class=\"menu-content d-flex align-items-center px-3\">
                                <div class=\"symbol symbol-50px me-5\">
                                    <i class=\"las la-user-circle text-sacyr fs-3x\"></i>
                                </div>
                                <div class=\"d-flex flex-column\">
                                    <div class=\"fw-bolder d-flex align-items-center fs-5\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 34), "username", [], "any", false, false, false, 34), "html", null, true);
        echo "</div>
                                    <a href=\"#\" class=\"fw-bold text-muted text-hover-primary fs-7\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 35), "email", [], "any", false, false, false, 35), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"separator my-2\"></div>
                        <div class=\"menu-item px-5\">
                            <a class=\"menu-link px-5\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\">Mi perfil</a>
                        </div>
                        <div class=\"separator my-2\"></div>
                        <div class=\"menu-item px-5\">
                            <a class=\"menu-link px-5\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Cerrar sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"app-header-secondary app-header-mobile-drawer\" data-kt-drawer=\"true\" data-kt-drawer-name=\"app-header-menu\" data-kt-drawer-activate=\"{default: true, lg: false}\" data-kt-drawer-overlay=\"true\" data-kt-drawer-width=\"225px\" data-kt-drawer-direction=\"start\" data-kt-drawer-toggle=\"#kt_header_secondary_toggle\" data-kt-sticky=\"true\" data-kt-sticky-name=\"app-header-secondary-sticky\" data-kt-sticky-offset=\"{default: 'false', lg: '300px'}\" data-kt-swapper=\"true\" data-kt-swapper-mode=\"append\" data-kt-swapper-parent=\"{default: '#kt_body', lg: '#kt_app_header'}\">
        <div class=\"app-container container-xxl app-container-fit-mobile d-flex align-items-stretch\">
            <div class=\"header-menu d-flex align-items-stretch w-100\">
                <div class=\"menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-state-primary menu-title-gray-700 menu-arrow-gray-400 menu-bullet-gray-400 fw-bold my-5 my-lg-0 align-items-stretch\" id=\"#kt_header_menu\" data-kt-menu=\"true\">
                    ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 56)) {
            // line 57
            echo "                        ";
            if (twig_in_filter("ROLE_GESTOR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 57), "roles", [], "any", false, false, false, 57))) {
                // line 58
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 58), "almacenes", [], "any", false, false, false, 58));
                foreach ($context['_seq'] as $context["_key"] => $context["almacen"]) {
                    // line 59
                    echo "                                <div data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-start\" class=\"menu-item menu-lg-down-accordion ";
                    if (twig_in_filter(("/almacen/" . $context["almacen"]), ($context["url"] ?? null))) {
                        echo "activo";
                    }
                    echo " me-lg-1\">                            
                                    <span class=\"menu-link py-3\">
                                        <span class=\"menu-title\">
                                            <span class=\"menu-text\">
                                                <i class=\"las la-warehouse fs-3x ";
                    // line 63
                    if (twig_in_filter(("/almacen/" . $context["almacen"]), ($context["url"] ?? null))) {
                        echo "text-sacyr";
                    }
                    echo "\"></i>
                                            </span>
                                            <span class=\"menu-desc ";
                    // line 65
                    if (twig_in_filter(("/almacen/" . $context["almacen"]), ($context["url"] ?? null))) {
                        echo "text-sacyr";
                    }
                    echo "\">
                                                ";
                    // line 66
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["almacenes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
                        // line 67
                        echo "                                                    ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["objeto"], "id", [], "any", false, false, false, 67), $context["almacen"]))) {
                            // line 68
                            echo "                                                        ";
                            echo twig_escape_filter($this->env, $context["objeto"], "html", null, true);
                            echo "
                                                    ";
                        }
                        // line 70
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "                                            </span>
                                        </span>
                                    </span>
                                    <div class=\"menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px\">
                                        <div class=\"menu-item\">
                                            <a class=\"menu-link ";
                    // line 76
                    if (twig_in_filter((("/almacen/" . $context["almacen"]) . "/productos"), ($context["url"] ?? null))) {
                        echo "active";
                    }
                    echo " py-3\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_product_index", ["almacen" => $context["almacen"]]), "html", null, true);
                    echo "\">
                                                <span class=\"menu-icon\">
                                                    <i class=\"las la-boxes fs-2x\"></i>
                                                </span>
                                                <span class=\"menu-title\">Lista de todos los productos</span>
                                            </a>
                                        </div>
                                        <div class=\"menu-item\">
                                            <a class=\"menu-link ";
                    // line 84
                    if (twig_in_filter((("/almacen/" . $context["almacen"]) . "/stock"), ($context["url"] ?? null))) {
                        echo "active";
                    }
                    echo " py-3\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_stock_index", ["almacen" => $context["almacen"]]), "html", null, true);
                    echo "\">
                                                <span class=\"menu-icon\">
                                                    <i class=\"las la-boxes fs-2x\"></i>
                                                </span>
                                                <span class=\"menu-title\">Stock</span>
                                            </a>
                                        </div>
                                        <div class=\"menu-item\">
                                            <a class=\"menu-link ";
                    // line 92
                    if (twig_in_filter((("/almacen/" . $context["almacen"]) . "/recepcion-de-pedidos"), ($context["url"] ?? null))) {
                        echo "active";
                    }
                    echo " py-3\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_import_index", ["almacen" => $context["almacen"]]), "html", null, true);
                    echo "\">
                                                <span class=\"menu-icon\">
                                                    <i class=\"las la-file-invoice fs-2x\"></i>
                                                </span>
                                                <span class=\"menu-title\">Recepción de pedidos</span>
                                            </a>
                                        </div>
                                        <div class=\"menu-item\">
                                            <a class=\"menu-link ";
                    // line 100
                    if (twig_in_filter((("/almacen/" . $context["almacen"]) . "/traslados"), ($context["url"] ?? null))) {
                        echo "active";
                    }
                    echo " py-3\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_transfer_index", ["almacen" => $context["almacen"]]), "html", null, true);
                    echo "\">
                                                <span class=\"menu-icon\">
                                                    <i class=\"las la-truck-moving fs-2x\"></i>
                                                </span>
                                                <span class=\"menu-title\">Traslados</span>
                                            </a>
                                        </div>
                                        <div class=\"menu-item\">
                                            <a class=\"menu-link ";
                    // line 108
                    if (twig_in_filter((("/almacen/" . $context["almacen"]) . "/asignacion-de-materiales"), ($context["url"] ?? null))) {
                        echo "active";
                    }
                    echo " py-3\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouse_assignament_index", ["almacen" => $context["almacen"]]), "html", null, true);
                    echo "\">
                                                <span class=\"menu-icon\">
                                                    <i class=\"las la-dolly fs-2x\"></i>
                                                </span>
                                                <span class=\"menu-title\">Asignación de materiales</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['almacen'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "                        ";
            }
            // line 119
            echo "                        ";
            if (twig_in_filter("ROLE_ADMINISTRADOR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 119), "roles", [], "any", false, false, false, 119))) {
                // line 120
                echo "                            <div data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-start\" class=\"menu-item menu-lg-down-accordion ";
                if (twig_in_filter("/administracion/", ($context["url"] ?? null))) {
                    echo "activo";
                }
                echo " me-lg-1\">                            
                                <span class=\"menu-link py-3\">
                                    <span class=\"menu-title\">
                                        <span class=\"menu-text\">
                                            <i class=\"las la-cog fs-3x ";
                // line 124
                if (twig_in_filter("/administracion/", ($context["url"] ?? null))) {
                    echo "text-sacyr";
                }
                echo "\"></i>
                                        </span>
                                        <span class=\"menu-desc ";
                // line 126
                if (twig_in_filter("/administracion/", ($context["url"] ?? null))) {
                    echo "text-sacyr";
                }
                echo "\">Administración</span>
                                    </span>
                                </span>
                                <div class=\"menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px\">
                                    <div class=\"menu-item\">
                                        <a class=\"menu-link ";
                // line 131
                if (twig_in_filter("/administracion/productos/", ($context["url"] ?? null))) {
                    echo "active";
                }
                echo " py-3\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_index");
                echo "\">
                                            <span class=\"menu-icon\">
                                                <i class=\"las la-boxes fs-2x\"></i>
                                            </span>
                                            <span class=\"menu-title\">Productos</span>
                                        </a>
                                    </div>
                                    <div class=\"menu-item\">
                                        <a class=\"menu-link ";
                // line 139
                if (twig_in_filter("/administracion/categorias/", ($context["url"] ?? null))) {
                    echo "active";
                }
                echo " py-3\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_index");
                echo "\">
                                            <span class=\"menu-icon\">
                                                <i class=\"las la-tags fs-2x\"></i>
                                            </span>
                                            <span class=\"menu-title\">Categorías</span>
                                        </a>
                                    </div>
                                    <div class=\"menu-item\">
                                        <a class=\"menu-link ";
                // line 147
                if (twig_in_filter("/administracion/proveedores/", ($context["url"] ?? null))) {
                    echo "active";
                }
                echo " py-3\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppliers_index");
                echo "\">
                                            <span class=\"menu-icon\">
                                                <i class=\"las la-industry fs-2x\"></i>
                                            </span>
                                            <span class=\"menu-title\">Proveedores</span>
                                        </a>
                                    </div>
                                    <div class=\"menu-item\">
                                        <a class=\"menu-link ";
                // line 155
                if (twig_in_filter("/administracion/almacenes/", ($context["url"] ?? null))) {
                    echo "active";
                }
                echo " py-3\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("warehouses_index");
                echo "\">
                                            <span class=\"menu-icon\">
                                                <i class=\"las la-warehouse fs-2x\"></i>
                                            </span>
                                            <span class=\"menu-title\">Almacenes</span>
                                        </a>
                                    </div>
                                    <div class=\"menu-item\">
                                        <a class=\"menu-link ";
                // line 163
                if (twig_in_filter("/administracion/areas-de-servicio/", ($context["url"] ?? null))) {
                    echo "active";
                }
                echo " py-3\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_areas_index");
                echo "\">
                                            <span class=\"menu-icon\">
                                                <i class=\"las la-store fs-2x\"></i>
                                            </span>
                                            <span class=\"menu-title\">Áreas de servicios</span>
                                        </a>
                                    </div>
                                    <div class=\"menu-item\">
                                        <a class=\"menu-link ";
                // line 171
                if (twig_in_filter("/administracion/usuarios/", ($context["url"] ?? null))) {
                    echo "active";
                }
                echo " py-3\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_index");
                echo "\">
                                            <span class=\"menu-icon\">
                                                <i class=\"las la-users fs-2x\"></i>
                                            </span>
                                            <span class=\"menu-title\">Usuarios</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 181
            echo "                    ";
        }
        // line 182
        echo "                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 182,  379 => 181,  362 => 171,  347 => 163,  332 => 155,  317 => 147,  302 => 139,  287 => 131,  277 => 126,  270 => 124,  260 => 120,  257 => 119,  254 => 118,  234 => 108,  219 => 100,  204 => 92,  189 => 84,  174 => 76,  167 => 71,  161 => 70,  155 => 68,  152 => 67,  148 => 66,  142 => 65,  135 => 63,  125 => 59,  120 => 58,  117 => 57,  115 => 56,  101 => 45,  94 => 41,  85 => 35,  81 => 34,  67 => 23,  56 => 15,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/header.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\default\\header.html.twig");
    }
}
