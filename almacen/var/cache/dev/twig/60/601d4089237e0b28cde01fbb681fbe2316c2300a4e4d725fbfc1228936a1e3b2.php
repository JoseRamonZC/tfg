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

/* default/logout.html.twig */
class __TwigTemplate_fa06b8f136d507486de2e594866738a043fffe1863583ca0d494d985c179a83f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/logout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/logout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\" />
        <title>TFG Inventario | Sesión finalizada</title>
        <meta name=\"description\" content=\"SACYR Inventario\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\"> 
        <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/fav.png"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic8/plugins/global/plugins.bundle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic8/css/style.bundle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/general.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    </head>

    <body id=\"kt_body\" class=\"bg-body app-blank\">
        <div class=\"d-flex flex-column flex-root\" id=\"kt_app_page\">
            <div class=\"d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed\" style=\"background-color: #FFFFFF\">
                <div class=\"d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20\">
                    <div class=\"mb-12\">
                        <img alt=\"Logo\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo.png"), "html", null, true);
        echo "\" class=\"h-150px\" />
                    </div>
                    <div class=\"w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto\">
                        <div class=\"text-center mb-10\">
                            <h2 class=\"text-dark mb-3\">Has cerrado la sesión correctamente</h2>
                            <div class=\"text-gray-400 fw-bold fs-4\">Gestión de inventario</div>
                        </div>
                        <div class=\"text-center\">
                            <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-lg btn-primary w-100\">
                                <span class=\"indicator-label\">Volver al inicio de sesión</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"d-flex flex-center flex-column-auto p-10\">
                </div>
            </div>
        </div>
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic8/plugins/global/plugins.bundle.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic8/js/scripts.bundle.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 39,  100 => 38,  87 => 28,  76 => 20,  65 => 12,  61 => 11,  57 => 10,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\" />
        <title>TFG Inventario | Sesión finalizada</title>
        <meta name=\"description\" content=\"SACYR Inventario\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\"> 
        <link rel=\"shortcut icon\" href=\"{{ asset('imagenes/fav.png') }}\" />
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" />
        <link href=\"{{ asset('metronic8/plugins/global/plugins.bundle.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('metronic8/css/style.bundle.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('styles/general.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    </head>

    <body id=\"kt_body\" class=\"bg-body app-blank\">
        <div class=\"d-flex flex-column flex-root\" id=\"kt_app_page\">
            <div class=\"d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed\" style=\"background-color: #FFFFFF\">
                <div class=\"d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20\">
                    <div class=\"mb-12\">
                        <img alt=\"Logo\" src=\"{{ asset('imagenes/logo.png') }}\" class=\"h-150px\" />
                    </div>
                    <div class=\"w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto\">
                        <div class=\"text-center mb-10\">
                            <h2 class=\"text-dark mb-3\">Has cerrado la sesión correctamente</h2>
                            <div class=\"text-gray-400 fw-bold fs-4\">Gestión de inventario</div>
                        </div>
                        <div class=\"text-center\">
                            <a href=\"{{ path(\"app_login\") }}\" class=\"btn btn-lg btn-primary w-100\">
                                <span class=\"indicator-label\">Volver al inicio de sesión</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"d-flex flex-center flex-column-auto p-10\">
                </div>
            </div>
        </div>
        <script src=\"{{ asset('metronic8/plugins/global/plugins.bundle.js') }}\"></script>
        <script src=\"{{ asset('metronic8/js/scripts.bundle.js') }}\"></script>
    </body>
</html>", "default/logout.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\default\\logout.html.twig");
    }
}
