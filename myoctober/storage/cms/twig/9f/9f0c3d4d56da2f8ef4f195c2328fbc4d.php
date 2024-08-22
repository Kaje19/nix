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

/* C:\Users\Kristine Joy\OneDrive\Documents\GitHub\nix\myoctober\themes/demo/partials/site/head/head-links.htm */
class __TwigTemplate_83bee0d968c7880a9c026c11e527a177 extends Template
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
        yield "<link rel=\"icon\" type=\"image/png\" href=\"";
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        yield "\">

";
        // line 5
        yield "<link href=\"";
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/bootstrap.css");
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 6
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap-icons/bootstrap-icons.css");
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 7
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/slick-carousel/slick.css");
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 8
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/slick-carousel/slick-theme.css");
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 9
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/photoswipe/photoswipe.css");
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 10
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/photoswipe-dynamic-caption-plugin/photoswipe-dynamic-caption-plugin.css");
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 11
        yield $this->extensions['Cms\Twig\Extension']->themeFilter(["assets/less/theme.less"]);
        yield "\" rel=\"stylesheet\">
";
        // line 12
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->assetsFunction('css');
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('styles');
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/head/head-links.htm";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  53 => 7,  49 => 6,  44 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Favicon #}
<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/favicon.png'|theme }}\">

{# Styles #}
<link href=\"{{ 'assets/vendor/bootstrap/bootstrap.css'|theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/vendor/bootstrap-icons/bootstrap-icons.css'|theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/vendor/slick-carousel/slick.css'|theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/vendor/slick-carousel/slick-theme.css'|theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/vendor/photoswipe/photoswipe.css'|theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/vendor/photoswipe-dynamic-caption-plugin/photoswipe-dynamic-caption-plugin.css'|theme }}\" rel=\"stylesheet\">
<link href=\"{{ ['assets/less/theme.less']|theme }}\" rel=\"stylesheet\">
{% styles %}", "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/head/head-links.htm", "");
    }
}
