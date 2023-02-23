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
class __TwigTemplate_9e03053873dbb0030e6a23a409c0195ece632462b42b75b57736b3810dc42ecb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/header.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "username", [], "any", false, false, false, 23), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "username", [], "any", false, false, false, 34), "html", null, true);
        echo "</div>
                                    <a href=\"#\" class=\"fw-bold text-muted text-hover-primary fs-7\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "email", [], "any", false, false, false, 35), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)) {
            // line 57
            echo "                        ";
            if (twig_in_filter("ROLE_GESTOR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "roles", [], "any", false, false, false, 57))) {
                // line 58
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "almacenes", [], "any", false, false, false, 58));
                foreach ($context['_seq'] as $context["_key"] => $context["almacen"]) {
                    // line 59
                    echo "                                <div data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-start\" class=\"menu-item menu-lg-down-accordion ";
                    if (twig_in_filter(("/almacen/" . $context["almacen"]), (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 59, $this->source); })()))) {
                        echo "activo";
                    }
                    echo " me-lg-1\">                            
                                    <span class=\"menu-link py-3\">
                                        <span class=\"menu-title\">
                                            <span class=\"menu-text\">
                                                <i class=\"las la-warehouse fs-3x ";
                    // line 63
                    if (twig_in_filter(("/almacen/" . $context["almacen"]), (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 63, $this->source); })()))) {
                        echo "text-sacyr";
                    }
                    echo "\"></i>
                                            </span>
                                            <span class=\"menu-desc ";
                    // line 65
                    if (twig_in_filter(("/almacen/" . $context["almacen"]), (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 65, $this->source); })()))) {
                        echo "text-sacyr";
                    }
                    echo "\">
                                                ";
                    // line 66
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["almacenes"]) || array_key_exists("almacenes", $context) ? $context["almacenes"] : (function () { throw new RuntimeError('Variable "almacenes" does not exist.', 66, $this->source); })()));
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
                    if (twig_in_filter((("/almacen/" . $context["almacen"]) . "/productos"), (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 76, $this->source); })()))) {
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
                    if (twig_in_filter((("/almacen/" . $context["almacen"]) . "/stock"), (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 84, $this->source); })()))) {
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
                    if (twig_in_filter((("/almacen/" . $context["almacen"]) . "/recepcion-de-pedidos"), (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 92, $this->source); })()))) {
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
                    if (twig_in_filter((("/almacen/" . $context["almacen"]) . "/traslados"), (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 100, $this->source); })()))) {
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
                    if (twig_in_filter((("/almacen/" . $context["almacen"]) . "/asignacion-de-materiales"), (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 108, $this->source); })()))) {
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
            if (twig_in_filter("ROLE_ADMINISTRADOR", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "roles", [], "any", false, false, false, 119))) {
                // line 120
                echo "                            <div data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-start\" class=\"menu-item menu-lg-down-accordion ";
                if (twig_in_filter("/administracion/", (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 120, $this->source); })()))) {
                    echo "activo";
                }
                echo " me-lg-1\">                            
                                <span class=\"menu-link py-3\">
                                    <span class=\"menu-title\">
                                        <span class=\"menu-text\">
                                            <i class=\"las la-cog fs-3x ";
                // line 124
                if (twig_in_filter("/administracion/", (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 124, $this->source); })()))) {
                    echo "text-sacyr";
                }
                echo "\"></i>
                                        </span>
                                        <span class=\"menu-desc ";
                // line 126
                if (twig_in_filter("/administracion/", (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 126, $this->source); })()))) {
                    echo "text-sacyr";
                }
                echo "\">Administración</span>
                                    </span>
                                </span>
                                <div class=\"menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px\">
                                    <div class=\"menu-item\">
                                        <a class=\"menu-link ";
                // line 131
                if (twig_in_filter("/administracion/productos/", (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 131, $this->source); })()))) {
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
                if (twig_in_filter("/administracion/categorias/", (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 139, $this->source); })()))) {
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
                if (twig_in_filter("/administracion/proveedores/", (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 147, $this->source); })()))) {
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
                if (twig_in_filter("/administracion/almacenes/", (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 155, $this->source); })()))) {
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
                if (twig_in_filter("/administracion/areas-de-servicio/", (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 163, $this->source); })()))) {
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
                if (twig_in_filter("/administracion/usuarios/", (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 171, $this->source); })()))) {
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  388 => 182,  385 => 181,  368 => 171,  353 => 163,  338 => 155,  323 => 147,  308 => 139,  293 => 131,  283 => 126,  276 => 124,  266 => 120,  263 => 119,  260 => 118,  240 => 108,  225 => 100,  210 => 92,  195 => 84,  180 => 76,  173 => 71,  167 => 70,  161 => 68,  158 => 67,  154 => 66,  148 => 65,  141 => 63,  131 => 59,  126 => 58,  123 => 57,  121 => 56,  107 => 45,  100 => 41,  91 => 35,  87 => 34,  73 => 23,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"kt_app_header\" class=\"app-header\">
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
                    <a href=\"{{ path('app_index') }}\" class=\"d-flex align-items-center\">
                        <img alt=\"Logo\" src=\"{{ asset('imagenes/logo_blanco.png') }}\" class=\"h-25px h-lg-30px\" />
                    </a>
                </div>
            </div>
            <div class=\"app-navbar gap-2\">
                <div class=\"app-navbar-item\" id=\"kt_header_user_menu_toggle\">
                    <div class=\"btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 px-2 px-md-3\" data-kt-menu-trigger=\"click\" data-kt-menu-attach=\"parent\" data-kt-menu-placement=\"bottom-end\">
                        <div class=\"d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4\">
                            <span class=\"text-white fs-8 fw-bolder lh-1 mb-1\">{{ app.user.username }}</span>
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
                                    <div class=\"fw-bolder d-flex align-items-center fs-5\">{{ app.user.username }}</div>
                                    <a href=\"#\" class=\"fw-bold text-muted text-hover-primary fs-7\">{{ app.user.email }}</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"separator my-2\"></div>
                        <div class=\"menu-item px-5\">
                            <a class=\"menu-link px-5\" href=\"{{ path('app_profile') }}\">Mi perfil</a>
                        </div>
                        <div class=\"separator my-2\"></div>
                        <div class=\"menu-item px-5\">
                            <a class=\"menu-link px-5\" href=\"{{ path('app_logout') }}\">Cerrar sesión</a>
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
                    {% if app.user %}
                        {% if \"ROLE_GESTOR\" in app.user.roles %}
                            {% for almacen in app.user.almacenes %}
                                <div data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-start\" class=\"menu-item menu-lg-down-accordion {% if '/almacen/'~almacen in url %}activo{% endif %} me-lg-1\">                            
                                    <span class=\"menu-link py-3\">
                                        <span class=\"menu-title\">
                                            <span class=\"menu-text\">
                                                <i class=\"las la-warehouse fs-3x {% if '/almacen/'~almacen in url %}text-sacyr{% endif %}\"></i>
                                            </span>
                                            <span class=\"menu-desc {% if '/almacen/'~almacen in url %}text-sacyr{% endif %}\">
                                                {% for objeto in almacenes %}
                                                    {% if objeto.id == almacen %}
                                                        {{ objeto }}
                                                    {% endif %}
                                                {% endfor %}
                                            </span>
                                        </span>
                                    </span>
                                    <div class=\"menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px\">
                                        <div class=\"menu-item\">
                                            <a class=\"menu-link {% if '/almacen/'~almacen~'/productos' in url %}active{% endif %} py-3\" href=\"{{ path('warehouse_product_index',{'almacen' : almacen}) }}\">
                                                <span class=\"menu-icon\">
                                                    <i class=\"las la-boxes fs-2x\"></i>
                                                </span>
                                                <span class=\"menu-title\">Lista de todos los productos</span>
                                            </a>
                                        </div>
                                        <div class=\"menu-item\">
                                            <a class=\"menu-link {% if '/almacen/'~almacen~'/stock' in url %}active{% endif %} py-3\" href=\"{{ path('warehouse_stock_index',{'almacen' : almacen}) }}\">
                                                <span class=\"menu-icon\">
                                                    <i class=\"las la-boxes fs-2x\"></i>
                                                </span>
                                                <span class=\"menu-title\">Stock</span>
                                            </a>
                                        </div>
                                        <div class=\"menu-item\">
                                            <a class=\"menu-link {% if '/almacen/'~almacen~'/recepcion-de-pedidos' in url %}active{% endif %} py-3\" href=\"{{ path('warehouse_import_index',{'almacen' : almacen}) }}\">
                                                <span class=\"menu-icon\">
                                                    <i class=\"las la-file-invoice fs-2x\"></i>
                                                </span>
                                                <span class=\"menu-title\">Recepción de pedidos</span>
                                            </a>
                                        </div>
                                        <div class=\"menu-item\">
                                            <a class=\"menu-link {% if '/almacen/'~almacen~'/traslados' in url %}active{% endif %} py-3\" href=\"{{ path('warehouse_transfer_index',{'almacen' : almacen}) }}\">
                                                <span class=\"menu-icon\">
                                                    <i class=\"las la-truck-moving fs-2x\"></i>
                                                </span>
                                                <span class=\"menu-title\">Traslados</span>
                                            </a>
                                        </div>
                                        <div class=\"menu-item\">
                                            <a class=\"menu-link {% if '/almacen/'~almacen~'/asignacion-de-materiales' in url %}active{% endif %} py-3\" href=\"{{ path('warehouse_assignament_index',{'almacen' : almacen}) }}\">
                                                <span class=\"menu-icon\">
                                                    <i class=\"las la-dolly fs-2x\"></i>
                                                </span>
                                                <span class=\"menu-title\">Asignación de materiales</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        {% endif %}
                        {% if \"ROLE_ADMINISTRADOR\" in app.user.roles %}
                            <div data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-start\" class=\"menu-item menu-lg-down-accordion {% if '/administracion/' in url %}activo{% endif %} me-lg-1\">                            
                                <span class=\"menu-link py-3\">
                                    <span class=\"menu-title\">
                                        <span class=\"menu-text\">
                                            <i class=\"las la-cog fs-3x {% if '/administracion/' in url %}text-sacyr{% endif %}\"></i>
                                        </span>
                                        <span class=\"menu-desc {% if '/administracion/' in url %}text-sacyr{% endif %}\">Administración</span>
                                    </span>
                                </span>
                                <div class=\"menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px\">
                                    <div class=\"menu-item\">
                                        <a class=\"menu-link {% if '/administracion/productos/' in url %}active{% endif %} py-3\" href=\"{{ path('products_index') }}\">
                                            <span class=\"menu-icon\">
                                                <i class=\"las la-boxes fs-2x\"></i>
                                            </span>
                                            <span class=\"menu-title\">Productos</span>
                                        </a>
                                    </div>
                                    <div class=\"menu-item\">
                                        <a class=\"menu-link {% if '/administracion/categorias/' in url %}active{% endif %} py-3\" href=\"{{ path('categories_index') }}\">
                                            <span class=\"menu-icon\">
                                                <i class=\"las la-tags fs-2x\"></i>
                                            </span>
                                            <span class=\"menu-title\">Categorías</span>
                                        </a>
                                    </div>
                                    <div class=\"menu-item\">
                                        <a class=\"menu-link {% if '/administracion/proveedores/' in url %}active{% endif %} py-3\" href=\"{{ path('suppliers_index') }}\">
                                            <span class=\"menu-icon\">
                                                <i class=\"las la-industry fs-2x\"></i>
                                            </span>
                                            <span class=\"menu-title\">Proveedores</span>
                                        </a>
                                    </div>
                                    <div class=\"menu-item\">
                                        <a class=\"menu-link {% if '/administracion/almacenes/' in url %}active{% endif %} py-3\" href=\"{{ path('warehouses_index') }}\">
                                            <span class=\"menu-icon\">
                                                <i class=\"las la-warehouse fs-2x\"></i>
                                            </span>
                                            <span class=\"menu-title\">Almacenes</span>
                                        </a>
                                    </div>
                                    <div class=\"menu-item\">
                                        <a class=\"menu-link {% if '/administracion/areas-de-servicio/' in url %}active{% endif %} py-3\" href=\"{{ path('service_areas_index') }}\">
                                            <span class=\"menu-icon\">
                                                <i class=\"las la-store fs-2x\"></i>
                                            </span>
                                            <span class=\"menu-title\">Áreas de servicios</span>
                                        </a>
                                    </div>
                                    <div class=\"menu-item\">
                                        <a class=\"menu-link {% if '/administracion/usuarios/' in url %}active{% endif %} py-3\" href=\"{{ path('users_index') }}\">
                                            <span class=\"menu-icon\">
                                                <i class=\"las la-users fs-2x\"></i>
                                            </span>
                                            <span class=\"menu-title\">Usuarios</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>", "default/header.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\default\\header.html.twig");
    }
}
