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

/* C:\Users\Kristine Joy\OneDrive\Documents\GitHub\nix\myoctober\themes/demo/layouts/home.htm */
class __TwigTemplate_3a66247607ea0b60487bd9706ae54662 extends Template
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
        yield "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/head/head-meta"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 5
        yield "        <title>October CMS - ";
        ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "meta_title", [], "any", false, false, false, 5)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "meta_title", [], "any", false, false, false, 5), "html", null, true)) : (yield $this->extensions['Cms\Twig\Extension']->placeholderFunction("pageTitle")));
        yield "</title>
        <meta name=\"description\" content=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        yield "\">
        <meta name=\"title\" content=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        yield "\">
        ";
        // line 8
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/head/head-links"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 9
        yield "        ";
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/head/head-scripts"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 10
        yield "        ";
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/head/analytics-code"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 11
        yield "        <meta name=\"turbo-visit-control\" content=\"reload\" />
    </head>
    <body class=\"layout-home\">

        <!-- Nav -->
        <nav id=\"layout-nav\" class=\"navbar navbar-expand-lg navbar-dark\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 18
        yield $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        yield "\">
                    <img src=\"";
        // line 19
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
        yield "\" alt=\"October CMS Demo\" width=\"190\" />
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                        ";
        // line 26
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/nav-links"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 27
        yield "                    </ul>
                </div>
            </div>
        </nav>

        ";
        // line 32
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/flash-messages"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 33
        yield "
        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 36
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->pageFunction($context);
        // line 37
        yield "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 41
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/footer"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 42
        yield "        </footer>

        <!-- Mobile -->
        ";
        // line 45
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/nav-mobile"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 46
        yield "
        <!-- How the page is made -->
        ";
        // line 48
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/how-its-made"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 49
        yield "
    </body>
</html>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/layouts/home.htm";
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
        return array (  137 => 49,  134 => 48,  130 => 46,  127 => 45,  122 => 42,  119 => 41,  113 => 37,  111 => 36,  106 => 33,  103 => 32,  96 => 27,  93 => 26,  83 => 19,  79 => 18,  70 => 11,  66 => 10,  62 => 9,  59 => 8,  55 => 7,  51 => 6,  46 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'site/head/head-meta' %}
        <title>October CMS - {{ this.page.meta_title ?: placeholder('pageTitle') }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        {% partial 'site/head/head-links' %}
        {% partial 'site/head/head-scripts' %}
        {% partial 'site/head/analytics-code' %}
        <meta name=\"turbo-visit-control\" content=\"reload\" />
    </head>
    <body class=\"layout-home\">

        <!-- Nav -->
        <nav id=\"layout-nav\" class=\"navbar navbar-expand-lg navbar-dark\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{ 'index'|page }}\">
                    <img src=\"{{ 'assets/images/logo.svg'|theme }}\" alt=\"October CMS Demo\" width=\"190\" />
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                        {% partial 'site/nav-links' %}
                    </ul>
                </div>
            </div>
        </nav>

        {% partial 'site/flash-messages' %}

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Mobile -->
        {% partial 'site/nav-mobile' %}

        <!-- How the page is made -->
        {% partial 'site/how-its-made' %}

    </body>
</html>", "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/layouts/home.htm", "");
    }
}
