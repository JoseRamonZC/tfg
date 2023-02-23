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

/* base.html.twig */
class __TwigTemplate_3180cf0c68d1aabb602ab0fa4a0fd5c6069aa9b37dc4bd837030c38d64482264 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\" />
        <title>TFG Inventario | ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"TFG Inventario\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\"> 
        <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/fav.png"), "html", null, true);
        echo "\" />

        <!--begin::Fonts-->
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" />
        <!--end::Fonts-->
        <!--begin::Page Vendor Stylesheets(used by this page)-->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic8/plugins/custom/fullcalendar/fullcalendar.bundle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic8/plugins/custom/datatables/datatables.bundle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!--end::Page Vendor Stylesheets-->
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic8/plugins/global/plugins.bundle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic8/css/style.bundle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/general.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    </head>

    <body id=\"kt_body\" data-kt-app-header-stacked=\"true\" class=\"app-default\">
        <!--begin::Root-->
        <div class=\"d-flex flex-column flex-root\" id=\"kt_app_root\">
            <!--begin::Page-->
            <div class=\"app-page flex-column flex-column-fluid\" id=\"kt_app_page\">

                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefaultController::header"));
        echo "

                <!--begin::Wrapper-->
                <div class=\"app-wrapper flex-column flex-row-fluid\" id=\"kt_app_wrapper\">
                    <!--begin::Wrapper container-->
                    <div class=\"app-container container-xxl d-flex flex-row flex-column-fluid\">
                        <!--begin::Main-->
                        <div class=\"app-main flex-column flex-row-fluid\" id=\"kt_app_main\">
                            <!--begin::Content wrapper-->
                            <div class=\"d-flex flex-column flex-column-fluid\">
                                ";
        // line 40
        if (array_key_exists("excepcion", $context)) {
            // line 41
            echo "                                    ";
            if ((0 === twig_compare(($context["excepcion"] ?? null), 2))) {
                // line 42
                echo "                                        <div class=\"alert alert-danger mt-10\" role=\"alert\">
                                            <strong>";
                // line 43
                echo twig_escape_filter($this->env, ($context["codigo"] ?? null), "html", null, true);
                echo "</strong> ";
                echo twig_escape_filter($this->env, ($context["mensaje"] ?? null), "html", null, true);
                echo "
                                        </div>
                                    ";
            } elseif ((0 === twig_compare(            // line 45
($context["excepcion"] ?? null), 1))) {
                // line 46
                echo "                                        <div class=\"alert alert-success mt-10\" role=\"alert\">
                                            <strong>";
                // line 47
                echo twig_escape_filter($this->env, ($context["codigo"] ?? null), "html", null, true);
                echo "</strong> ";
                echo twig_escape_filter($this->env, ($context["mensaje"] ?? null), "html", null, true);
                echo "
                                        </div>
                                    ";
            }
            // line 50
            echo "                                ";
        }
        // line 51
        echo "
                                ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "                            </div>
                            <!--end::Content wrapper-->
                            ";
        // line 62
        echo "                            <!--end::Footer-->
                        </div>
                        <!--end:::Main-->
                    </div>
                    <!--end::Wrapper container-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>

        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic8/plugins/global/plugins.bundle.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic8/js/scripts.bundle.js"), "html", null, true);
        echo "\"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Page Vendors Javascript(used by this page)-->
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic8/plugins/custom/fullcalendar/fullcalendar.bundle.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic8/plugins/custom/datatables/datatables.bundle.js"), "html", null, true);
        echo "\"></script>
        <!--end::Page Vendors Javascript-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic8/js/widgets.bundle.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic8/js/custom/widgets.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic8/js/custom/apps/chat/chat.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic8/js/custom/intro.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript/general.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 89
        $this->displayBlock('js', $context, $blocks);
        // line 91
        echo "    </body>
</html>

";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 89
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 90,  228 => 89,  222 => 52,  216 => 5,  209 => 91,  207 => 89,  203 => 88,  199 => 87,  195 => 86,  191 => 85,  187 => 84,  183 => 83,  179 => 82,  173 => 79,  169 => 78,  163 => 75,  159 => 74,  145 => 62,  141 => 53,  139 => 52,  136 => 51,  133 => 50,  125 => 47,  122 => 46,  120 => 45,  113 => 43,  110 => 42,  107 => 41,  105 => 40,  92 => 30,  80 => 21,  75 => 19,  71 => 18,  65 => 15,  61 => 14,  52 => 8,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\base.html.twig");
    }
}
