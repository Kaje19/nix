<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\Users\Kristine Joy\OneDrive\Documents\GitHub\nix\myoctober\themes/demo/partials/site/head/head-meta.htm */
class __TwigTemplate_0cfd798e964868a4b0a2a02b686e2b4d extends Template
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
        yield "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"author\" content=\"October CMS\">
<meta name=\"generator\" content=\"October CMS\">
";
        // line 6
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('meta');
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/head/head-meta.htm";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  44 => 6,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Global Meta Tags #}
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"author\" content=\"October CMS\">
<meta name=\"generator\" content=\"October CMS\">
{% meta %}", "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/head/head-meta.htm", "");
    }
}
