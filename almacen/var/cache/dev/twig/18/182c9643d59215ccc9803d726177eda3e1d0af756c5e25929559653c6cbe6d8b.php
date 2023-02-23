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

/* default/pagination.html.twig */
class __TwigTemplate_0bfc98551c7f4662e3f4e130e5890cb049470a2805ae2f8e62520900be274e7e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/pagination.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((1 === twig_compare((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 3, $this->source); })()), 1))) {
            // line 4
            echo "
    <nav>
        <ul class=\"pagination\">
            ";
            // line 7
            if ((array_key_exists("first", $context) && (0 !== twig_compare((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 7, $this->source); })()), (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 7, $this->source); })()))))) {
                // line 8
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 9, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 9, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 9, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 9, $this->source); })())])), "html", null, true);
                echo "\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span aria-hidden=\"true\">&laquo;</span>
                    </a>
                </li>
            ";
            }
            // line 15
            echo "            ";
            if (array_key_exists("previous", $context)) {
                // line 16
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 17, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 17, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 17, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 17, $this->source); })())])), "html", null, true);
                echo "\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                    </a>
                </li>
            ";
            }
            // line 22
            echo "
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 24
                echo "                ";
                if ((0 !== twig_compare($context["page"], (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 24, $this->source); })())))) {
                    // line 25
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 26, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 26, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 26, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    </li>
                ";
                } else {
                    // line 29
                    echo "                    <li class=\"page-item active\">
                        <span class=\"page-link\">
                            ";
                    // line 31
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "
                        </span>
                    </li>
                ";
                }
                // line 35
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "
            ";
            // line 37
            if (array_key_exists("next", $context)) {
                // line 38
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 39, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 39, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 39, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 39, $this->source); })())])), "html", null, true);
                echo "\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                    </a>
                </li>
            ";
            }
            // line 44
            echo "
            ";
            // line 45
            if ((array_key_exists("last", $context) && (0 !== twig_compare((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 45, $this->source); })()), (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 45, $this->source); })()))))) {
                // line 46
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 47, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 47, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 47, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 47, $this->source); })())])), "html", null, true);
                echo "\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span aria-hidden=\"true\">&raquo;</span>
                    </a>
                </li>
            ";
            }
            // line 53
            echo "        </ul>
    </nav>






    <div class=\"pagination\">



    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 53,  143 => 47,  140 => 46,  138 => 45,  135 => 44,  127 => 39,  124 => 38,  122 => 37,  119 => 36,  113 => 35,  106 => 31,  102 => 29,  94 => 26,  91 => 25,  88 => 24,  84 => 23,  81 => 22,  73 => 17,  70 => 16,  67 => 15,  58 => 9,  55 => 8,  53 => 7,  48 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# default Sliding pagination control implementation #}

{% if pageCount > 1 %}

    <nav>
        <ul class=\"pagination\">
            {% if first is defined and current != first %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span aria-hidden=\"true\">&laquo;</span>
                    </a>
                </li>
            {% endif %}
            {% if previous is defined %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                    </a>
                </li>
            {% endif %}

            {% for page in pagesInRange %}
                {% if page != current %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                    </li>
                {% else %}
                    <li class=\"page-item active\">
                        <span class=\"page-link\">
                            {{ page }}
                        </span>
                    </li>
                {% endif %}
            {% endfor %}

            {% if next is defined %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                    </a>
                </li>
            {% endif %}

            {% if last is defined and current != last %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span aria-hidden=\"true\">&raquo;</span>
                    </a>
                </li>
            {% endif %}
        </ul>
    </nav>






    <div class=\"pagination\">



    </div>
{% endif %}
", "default/pagination.html.twig", "C:\\xampp\\htdocs\\tfg\\almacen\\templates\\default\\pagination.html.twig");
    }
}
