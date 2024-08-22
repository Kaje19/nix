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

/* C:\Users\Kristine Joy\OneDrive\Documents\GitHub\nix\myoctober\themes/demo/partials/site/nav-mobile.htm */
class __TwigTemplate_2227c5d61f9217aad215f0ec81830474 extends Template
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
        yield "<div class=\"navbar-mobile\">
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <div class=\"text-end\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"bi bi-x-circle\"></span>
            </button>
        </div>
        <ul class=\"nav flex-column mb-2 mb-lg-0\">
            ";
        // line 9
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/nav-links"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 10
        yield "        </ul>
    </div>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/nav-mobile.htm";
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
        return array (  51 => 10,  48 => 9,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar-mobile\">
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <div class=\"text-end\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"bi bi-x-circle\"></span>
            </button>
        </div>
        <ul class=\"nav flex-column mb-2 mb-lg-0\">
            {% partial 'site/nav-links' %}
        </ul>
    </div>
</div>", "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/nav-mobile.htm", "");
    }
}
