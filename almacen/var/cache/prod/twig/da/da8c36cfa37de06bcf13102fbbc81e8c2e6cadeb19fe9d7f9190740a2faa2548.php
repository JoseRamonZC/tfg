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
class __TwigTemplate_9563f1cc9b40b33038ffcb36d6264eecb42677acce6328e5c2a417d534b6cfc7 extends Template
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
        // line 2
        echo "
";
        // line 3
        if ((1 === twig_compare(($context["pageCount"] ?? null), 1))) {
            // line 4
            echo "
    <nav>
        <ul class=\"pagination\">
            ";
            // line 7
            if ((array_key_exists("first", $context) && (0 !== twig_compare(($context["current"] ?? null), ($context["first"] ?? null))))) {
                // line 8
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 24
                echo "                ";
                if ((0 !== twig_compare($context["page"], ($context["current"] ?? null)))) {
                    // line 25
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
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
            if ((array_key_exists("last", $context) && (0 !== twig_compare(($context["current"] ?? null), ($context["last"] ?? null))))) {
                // line 46
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
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
        return array (  146 => 53,  137 => 47,  134 => 46,  132 => 45,  129 => 44,  121 => 39,  118 => 38,  116 => 37,  113 => 36,  107 => 35,  100 => 31,  96 => 29,  88 => 26,  85 => 25,  82 => 24,  78 => 23,  75 => 22,  67 => 17,  64 => 16,  61 => 15,  52 => 9,  49 => 8,  47 => 7,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/pagination.html.twig", "C:\\xampp\\htdocs\\almacen\\Almacen\\templates\\default\\pagination.html.twig");
    }
}
