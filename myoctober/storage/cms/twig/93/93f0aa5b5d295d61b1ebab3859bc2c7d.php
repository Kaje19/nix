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

/* C:\Users\Kristine Joy\OneDrive\Documents\GitHub\nix\myoctober\themes/demo/partials/site/how-its-made.htm */
class __TwigTemplate_435b49c40f7f5ab60933153e7dc16d93 extends Template
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
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1) == "blog-category")) {
            // line 2
            yield "    ";
            $context["howItsMadeCmsTemplate"] = "cms:cms-page:blog/category.htm";
            // line 3
            yield "    ";
            $context["howItsMadeTailorBlueprint"] = "tailor:tailor-blueprint:blog/category.yaml";
            // line 4
            yield "    ";
            $context["howItsMadeTailorContent"] = ("entries/blog_category/" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 4));
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 5
($context["this"] ?? null), "page", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5) == "404")) {
            // line 6
            yield "    ";
            $context["howItsMadeCmsTemplate"] = "cms:cms-page:404.htm";
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 7
($context["this"] ?? null), "page", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7) == "error")) {
            // line 8
            yield "    ";
            $context["howItsMadeCmsTemplate"] = "cms:cms-page:error.htm";
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 9
($context["this"] ?? null), "page", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9) == "about")) {
            // line 10
            yield "    ";
            $context["howItsMadeCmsTemplate"] = "cms:cms-page:about.htm";
            // line 11
            yield "    ";
            $context["howItsMadeTailorBlueprint"] = "tailor:tailor-blueprint:landing/landing-page.yaml";
            // line 12
            yield "    ";
            $context["howItsMadeTailorContent"] = "entries/page_about";
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 13
($context["this"] ?? null), "page", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13) == "ajax")) {
            // line 14
            yield "    ";
            $context["howItsMadeCmsTemplate"] = "cms:cms-page:ajax.htm";
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 15
($context["this"] ?? null), "page", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15) == "components")) {
            // line 16
            yield "    ";
            $context["howItsMadeCmsTemplate"] = "cms:cms-page:components.htm";
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 17
($context["this"] ?? null), "page", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17) == "contact")) {
            // line 18
            yield "    ";
            $context["howItsMadeCmsTemplate"] = "cms:cms-page:contact.htm";
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 19
($context["this"] ?? null), "page", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19) == "index")) {
            // line 20
            yield "    ";
            $context["howItsMadeCmsTemplate"] = "cms:cms-page:index.htm";
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 21
($context["this"] ?? null), "page", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21) == "blog-archive")) {
            // line 22
            yield "    ";
            $context["howItsMadeCmsTemplate"] = "cms:cms-page:blog/archive.htm";
            // line 23
            yield "    ";
            $context["howItsMadeTailorBlueprint"] = "tailor:tailor-blueprint:blog/post.yaml";
            // line 24
            yield "    ";
            $context["howItsMadeTailorContent"] = "entries/blog_post";
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 25
($context["this"] ?? null), "page", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25) == "blog-author")) {
            // line 26
            yield "    ";
            $context["howItsMadeCmsTemplate"] = "cms:cms-page:blog/author.htm";
            // line 27
            yield "    ";
            $context["howItsMadeTailorBlueprint"] = "tailor:tailor-blueprint:blog/author.yaml";
            // line 28
            yield "    ";
            $context["howItsMadeTailorContent"] = ("entries/blog_author/" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["author"] ?? null), "id", [], "any", false, false, false, 28));
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 29
($context["this"] ?? null), "page", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29) == "blog-index")) {
            // line 30
            yield "    ";
            $context["howItsMadeCmsTemplate"] = "cms:cms-page:blog/index.htm";
            // line 31
            yield "    ";
            $context["howItsMadeTailorBlueprint"] = "tailor:tailor-blueprint:blog/post.yaml";
            // line 32
            yield "    ";
            $context["howItsMadeTailorContent"] = "entries/blog_post";
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 33
($context["this"] ?? null), "page", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33) == "blog-post")) {
            // line 34
            yield "    ";
            $context["howItsMadeCmsTemplate"] = "cms:cms-page:blog/post.htm";
            // line 35
            yield "    ";
            $context["howItsMadeTailorBlueprint"] = "tailor:tailor-blueprint:blog/post.yaml";
            // line 36
            yield "    ";
            $context["howItsMadeTailorContent"] = ("entries/blog_post/" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["blog"] ?? null), "id", [], "any", false, false, false, 36));
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 37
($context["this"] ?? null), "page", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37) == "blog-search")) {
            // line 38
            yield "    ";
            $context["howItsMadeCmsTemplate"] = "cms:cms-page:blog/search.htm";
            // line 39
            yield "    ";
            $context["howItsMadeTailorBlueprint"] = "tailor:tailor-blueprint:blog/post.yaml";
            // line 40
            yield "    ";
            $context["howItsMadeTailorContent"] = "entries/blog_post";
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 41
($context["this"] ?? null), "page", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41) == "wiki-article")) {
            // line 42
            yield "    ";
            $context["howItsMadeCmsTemplate"] = "cms:cms-page:wiki/article.htm";
            // line 43
            yield "    ";
            $context["howItsMadeTailorBlueprint"] = "tailor:tailor-blueprint:wiki/article.yaml";
            // line 44
            yield "    ";
            $context["howItsMadeTailorContent"] = ("entries/page_article/" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["wiki"] ?? null), "id", [], "any", false, false, false, 44));
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 45
($context["this"] ?? null), "page", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45) == "wiki-index")) {
            // line 46
            yield "    ";
            $context["howItsMadeCmsTemplate"] = "cms:cms-page:wiki/index.htm";
            // line 47
            yield "    ";
            $context["howItsMadeTailorBlueprint"] = "tailor:tailor-blueprint:wiki/article.yaml";
            // line 48
            yield "    ";
            $context["howItsMadeTailorContent"] = "entries/page_article";
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 49
($context["this"] ?? null), "page", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49) == "wiki-search")) {
            // line 50
            yield "    ";
            $context["howItsMadeCmsTemplate"] = "cms:cms-page:wiki/search.htm";
            // line 51
            yield "    ";
            $context["howItsMadeTailorBlueprint"] = "tailor:tailor-blueprint:wiki/article.yaml";
            // line 52
            yield "    ";
            $context["howItsMadeTailorContent"] = "entries/page_article";
        }
        // line 54
        yield "
";
        // line 55
        if ((($context["backendUrl"] ?? null) && ($context["howItsMadeCmsTemplate"] ?? null))) {
            // line 56
            yield "    <div class=\"how-its-made init\">
        <div>
            <p>Wondering how this page is made? View the
                ";
            // line 59
            if (((array_key_exists("howItsMadeCmsTemplate", $context)) ? (Twig\Extension\CoreExtension::default(($context["howItsMadeCmsTemplate"] ?? null), false)) : (false))) {
                // line 60
                yield "                    <a target=\"_blank\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["backendUrl"] ?? null) . "/editor?open=") . ($context["howItsMadeCmsTemplate"] ?? null)), "html", null, true);
                yield "\">CMS Template</a>
                ";
            }
            // line 62
            yield "                ";
            if (((array_key_exists("howItsMadeTailorBlueprint", $context)) ? (Twig\Extension\CoreExtension::default(($context["howItsMadeTailorBlueprint"] ?? null), false)) : (false))) {
                // line 63
                yield "                    •  <a target=\"_blank\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["backendUrl"] ?? null) . "/editor?open=") . ($context["howItsMadeTailorBlueprint"] ?? null)), "html", null, true);
                yield "\">Tailor Blueprint</a>
                ";
            }
            // line 65
            yield "                ";
            if (((array_key_exists("howItsMadeTailorContent", $context)) ? (Twig\Extension\CoreExtension::default(($context["howItsMadeTailorContent"] ?? null), false)) : (false))) {
                // line 66
                yield "                    •  <a target=\"_blank\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["backendUrl"] ?? null) . "/tailor/") . ($context["howItsMadeTailorContent"] ?? null)), "html", null, true);
                yield "\">Tailor Content</a>
                ";
            }
            // line 68
            yield "            </p>
        </div>
    </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/how-its-made.htm";
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
        return array (  215 => 68,  209 => 66,  206 => 65,  200 => 63,  197 => 62,  191 => 60,  189 => 59,  184 => 56,  182 => 55,  179 => 54,  175 => 52,  172 => 51,  169 => 50,  167 => 49,  164 => 48,  161 => 47,  158 => 46,  156 => 45,  153 => 44,  150 => 43,  147 => 42,  145 => 41,  142 => 40,  139 => 39,  136 => 38,  134 => 37,  131 => 36,  128 => 35,  125 => 34,  123 => 33,  120 => 32,  117 => 31,  114 => 30,  112 => 29,  109 => 28,  106 => 27,  103 => 26,  101 => 25,  98 => 24,  95 => 23,  92 => 22,  90 => 21,  87 => 20,  85 => 19,  82 => 18,  80 => 17,  77 => 16,  75 => 15,  72 => 14,  70 => 13,  67 => 12,  64 => 11,  61 => 10,  59 => 9,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if this.page.id == 'blog-category' %}
    {% set howItsMadeCmsTemplate = 'cms:cms-page:blog/category.htm' %}
    {% set howItsMadeTailorBlueprint = 'tailor:tailor-blueprint:blog/category.yaml' %}
    {% set howItsMadeTailorContent = 'entries/blog_category/' ~ category.id %}
{% elseif this.page.id == '404' %}
    {% set howItsMadeCmsTemplate = 'cms:cms-page:404.htm' %}
{% elseif this.page.id == 'error' %}
    {% set howItsMadeCmsTemplate = 'cms:cms-page:error.htm' %}
{% elseif this.page.id == 'about' %}
    {% set howItsMadeCmsTemplate = 'cms:cms-page:about.htm' %}
    {% set howItsMadeTailorBlueprint = 'tailor:tailor-blueprint:landing/landing-page.yaml' %}
    {% set howItsMadeTailorContent = 'entries/page_about' %}
{% elseif this.page.id == 'ajax' %}
    {% set howItsMadeCmsTemplate = 'cms:cms-page:ajax.htm' %}
{% elseif this.page.id == 'components' %}
    {% set howItsMadeCmsTemplate = 'cms:cms-page:components.htm' %}
{% elseif this.page.id == 'contact' %}
    {% set howItsMadeCmsTemplate = 'cms:cms-page:contact.htm' %}
{% elseif this.page.id == 'index' %}
    {% set howItsMadeCmsTemplate = 'cms:cms-page:index.htm' %}
{% elseif this.page.id == 'blog-archive' %}
    {% set howItsMadeCmsTemplate = 'cms:cms-page:blog/archive.htm' %}
    {% set howItsMadeTailorBlueprint = 'tailor:tailor-blueprint:blog/post.yaml' %}
    {% set howItsMadeTailorContent = 'entries/blog_post' %}
{% elseif this.page.id == 'blog-author' %}
    {% set howItsMadeCmsTemplate = 'cms:cms-page:blog/author.htm' %}
    {% set howItsMadeTailorBlueprint = 'tailor:tailor-blueprint:blog/author.yaml' %}
    {% set howItsMadeTailorContent = 'entries/blog_author/' ~ author.id %}
{% elseif this.page.id == 'blog-index' %}
    {% set howItsMadeCmsTemplate = 'cms:cms-page:blog/index.htm' %}
    {% set howItsMadeTailorBlueprint = 'tailor:tailor-blueprint:blog/post.yaml' %}
    {% set howItsMadeTailorContent = 'entries/blog_post' %}
{% elseif this.page.id == 'blog-post' %}
    {% set howItsMadeCmsTemplate = 'cms:cms-page:blog/post.htm' %}
    {% set howItsMadeTailorBlueprint = 'tailor:tailor-blueprint:blog/post.yaml' %}
    {% set howItsMadeTailorContent = 'entries/blog_post/' ~ blog.id %}
{% elseif this.page.id == 'blog-search' %}
    {% set howItsMadeCmsTemplate = 'cms:cms-page:blog/search.htm' %}
    {% set howItsMadeTailorBlueprint = 'tailor:tailor-blueprint:blog/post.yaml' %}
    {% set howItsMadeTailorContent = 'entries/blog_post' %}
{% elseif this.page.id == 'wiki-article' %}
    {% set howItsMadeCmsTemplate = 'cms:cms-page:wiki/article.htm' %}
    {% set howItsMadeTailorBlueprint = 'tailor:tailor-blueprint:wiki/article.yaml' %}
    {% set howItsMadeTailorContent = 'entries/page_article/' ~ wiki.id %}
{% elseif this.page.id == 'wiki-index' %}
    {% set howItsMadeCmsTemplate = 'cms:cms-page:wiki/index.htm' %}
    {% set howItsMadeTailorBlueprint = 'tailor:tailor-blueprint:wiki/article.yaml' %}
    {% set howItsMadeTailorContent = 'entries/page_article' %}
{% elseif this.page.id == 'wiki-search' %}
    {% set howItsMadeCmsTemplate = 'cms:cms-page:wiki/search.htm' %}
    {% set howItsMadeTailorBlueprint = 'tailor:tailor-blueprint:wiki/article.yaml' %}
    {% set howItsMadeTailorContent = 'entries/page_article' %}
{% endif %}

{% if backendUrl and howItsMadeCmsTemplate %}
    <div class=\"how-its-made init\">
        <div>
            <p>Wondering how this page is made? View the
                {% if howItsMadeCmsTemplate|default(false) %}
                    <a target=\"_blank\" href=\"{{ backendUrl ~ '/editor?open=' ~ howItsMadeCmsTemplate }}\">CMS Template</a>
                {% endif %}
                {% if howItsMadeTailorBlueprint|default(false) %}
                    •  <a target=\"_blank\" href=\"{{ backendUrl ~ '/editor?open=' ~ howItsMadeTailorBlueprint }}\">Tailor Blueprint</a>
                {% endif %}
                {% if howItsMadeTailorContent|default(false) %}
                    •  <a target=\"_blank\" href=\"{{ backendUrl ~ '/tailor/' ~ howItsMadeTailorContent }}\">Tailor Content</a>
                {% endif %}
            </p>
        </div>
    </div>
{% endif %}", "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/how-its-made.htm", "");
    }
}
