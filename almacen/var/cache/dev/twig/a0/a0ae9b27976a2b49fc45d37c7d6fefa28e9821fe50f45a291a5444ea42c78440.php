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
class __TwigTemplate_f0d70996dde7d1239260363a63bd22ef623cc56539025b88c5a1698c955cea32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            if ((0 === twig_compare((isset($context["excepcion"]) || array_key_exists("excepcion", $context) ? $context["excepcion"] : (function () { throw new RuntimeError('Variable "excepcion" does not exist.', 41, $this->source); })()), 2))) {
                // line 42
                echo "                                        <div class=\"alert alert-danger mt-10\" role=\"alert\">
                                            <strong>";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["codigo"]) || array_key_exists("codigo", $context) ? $context["codigo"] : (function () { throw new RuntimeError('Variable "codigo" does not exist.', 43, $this->source); })()), "html", null, true);
                echo "</strong> ";
                echo twig_escape_filter($this->env, (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 43, $this->source); })()), "html", null, true);
                echo "
                                        </div>
                                    ";
            } elseif ((0 === twig_compare(            // line 45
(isset($context["excepcion"]) || array_key_exists("excepcion", $context) ? $context["excepcion"] : (function () { throw new RuntimeError('Variable "excepcion" does not exist.', 45, $this->source); })()), 1))) {
                // line 46
                echo "                                        <div class=\"alert alert-success mt-10\" role=\"alert\">
                                            <strong>";
                // line 47
                echo twig_escape_filter($this->env, (isset($context["codigo"]) || array_key_exists("codigo", $context) ? $context["codigo"] : (function () { throw new RuntimeError('Variable "codigo" does not exist.', 47, $this->source); })()), "html", null, true);
                echo "</strong> ";
                echo twig_escape_filter($this->env, (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new RuntimeError('Variable "mensaje" does not exist.', 47, $this->source); })()), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 90
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  274 => 90,  264 => 89,  246 => 52,  228 => 5,  215 => 91,  213 => 89,  209 => 88,  205 => 87,  201 => 86,  197 => 85,  193 => 84,  189 => 83,  185 => 82,  179 => 79,  175 => 78,  169 => 75,  165 => 74,  151 => 62,  147 => 53,  145 => 52,  142 => 51,  139 => 50,  131 => 47,  128 => 46,  126 => 45,  119 => 43,  116 => 42,  113 => 41,  111 => 40,  98 => 30,  86 => 21,  81 => 19,  77 => 18,  71 => 15,  67 => 14,  58 => 8,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\" />
        <title>TFG Inventario | {% block title %}{% endblock %}</title>
        <meta name=\"description\" content=\"TFG Inventario\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\"> 
        <link rel=\"shortcut icon\" href=\"{{ asset('imagenes/fav.png') }}\" />

        <!--begin::Fonts-->
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" />
        <!--end::Fonts-->
        <!--begin::Page Vendor Stylesheets(used by this page)-->
        <link href=\"{{ asset('metronic8/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('metronic8/plugins/custom/datatables/datatables.bundle.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!--end::Page Vendor Stylesheets-->
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href=\"{{ asset('metronic8/plugins/global/plugins.bundle.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('metronic8/css/style.bundle.css') }}\" rel=\"stylesheet\" type=\"text/css\" />

        <link href=\"{{ asset('styles/general.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    </head>

    <body id=\"kt_body\" data-kt-app-header-stacked=\"true\" class=\"app-default\">
        <!--begin::Root-->
        <div class=\"d-flex flex-column flex-root\" id=\"kt_app_root\">
            <!--begin::Page-->
            <div class=\"app-page flex-column flex-column-fluid\" id=\"kt_app_page\">

                {{ render(controller('App\\\\Controller\\\\DefaultController::header')) }}

                <!--begin::Wrapper-->
                <div class=\"app-wrapper flex-column flex-row-fluid\" id=\"kt_app_wrapper\">
                    <!--begin::Wrapper container-->
                    <div class=\"app-container container-xxl d-flex flex-row flex-column-fluid\">
                        <!--begin::Main-->
                        <div class=\"app-main flex-column flex-row-fluid\" id=\"kt_app_main\">
                            <!--begin::Content wrapper-->
                            <div class=\"d-flex flex-column flex-column-fluid\">
                                {% if excepcion is defined %}
                                    {% if excepcion == 2 %}
                                        <div class=\"alert alert-danger mt-10\" role=\"alert\">
                                            <strong>{{ codigo }}</strong> {{ mensaje }}
                                        </div>
                                    {% elseif excepcion == 1 %}
                                        <div class=\"alert alert-success mt-10\" role=\"alert\">
                                            <strong>{{ codigo }}</strong> {{ mensaje }}
                                        </div>
                                    {% endif %}
                                {% endif %}

                                {% block body %}{% endblock %}
                            </div>
                            <!--end::Content wrapper-->
                            {# <!--begin::Footer-->
                            <div class=\"app-footer align-items-center justify-content-between\">
                                <!--begin::Copyright-->
                                <div class=\"order-2 order-md-1\">
                                </div>
                                <!--end::Copyright-->
                            </div> #}
                            <!--end::Footer-->
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
        <script src=\"{{ asset('metronic8/plugins/global/plugins.bundle.js') }}\"></script>
        <script src=\"{{ asset('metronic8/js/scripts.bundle.js') }}\"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Page Vendors Javascript(used by this page)-->
        <script src=\"{{ asset('metronic8/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}\"></script>
        <script src=\"{{ asset('metronic8/plugins/custom/datatables/datatables.bundle.js') }}\"></script>
        <!--end::Page Vendors Javascript-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src=\"{{ asset('metronic8/js/widgets.bundle.js') }}\"></script>
        <script src=\"{{ asset('metronic8/js/custom/widgets.js') }}\"></script>
        <script src=\"{{ asset('metronic8/js/custom/apps/chat/chat.js') }}\"></script>
        <script src=\"{{ asset('metronic8/js/custom/intro.js') }}\"></script>
        <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
        <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
        <script src=\"{{ asset('javascript/general.js') }}\"></script>
        {% block js %}
        {% endblock %}
    </body>
</html>

", "base.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\base.html.twig");
    }
}
