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

/* @estilos/email.css */
class __TwigTemplate_6dbf800ab33ec88bc2819f358f6ddede3144125caa8b8b50a8a33300976aa4fc extends Template
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
        echo "h1 {
    color: #333;
    border: 1px solid blue;
    border-radius: 10px;
    text-align: center;
    padding: 10px;
}

#firma {
    border: 1px solid blue;
    border-radius: 10px;
    padding: 5px;
}";
    }

    public function getTemplateName()
    {
        return "@estilos/email.css";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@estilos/email.css", "C:\\xampp\\htdocs\\almacen\\Almacen\\public\\styles\\email.css");
    }
}
