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

/* C:\Users\Kristine Joy\OneDrive\Documents\GitHub\nix\myoctober\themes/demo/partials/site/nav-links.htm */
class __TwigTemplate_cd4f946fefc8b3ffb1adbcf6351cb1bb extends Template
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
        $context["activeNavLink"] = ((array_key_exists("activeNavLink", $context)) ? (Twig\Extension\CoreExtension::default(($context["activeNavLink"] ?? null), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1))) : (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1)));
        // line 2
        yield "
<li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 4
        yield (((($context["activeNavLink"] ?? null) == "blog")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Cms\Twig\Extension']->pageFilter("blog/index");
        yield "\">Blog</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 7
        yield (((($context["activeNavLink"] ?? null) == "wiki")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Cms\Twig\Extension']->pageFilter("wiki/index");
        yield "\">Wiki</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 10
        yield (((($context["activeNavLink"] ?? null) == "about")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        yield "\">About</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 13
        yield (((($context["activeNavLink"] ?? null) == "contact")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        yield "\">Contact</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 16
        yield (((($context["activeNavLink"] ?? null) == "components")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Cms\Twig\Extension']->pageFilter("components");
        yield "\">Components Demo</a>
</li>
";
        // line 18
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["sitePicker"] ?? null), "isEnabled", [], "any", false, false, false, 18)) {
            // line 19
            yield "    <li class=\"nav-item dropdown\">
        <a class=\"btn btn-outline-light dropdown-toggle\" href=\"";
            // line 20
            yield $this->extensions['Cms\Twig\Extension']->pageFilter("");
            yield "\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "site", [], "any", false, true, false, 21), "name", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "site", [], "any", false, true, false, 21), "name", [], "any", false, false, false, 21), "Sites")) : ("Sites")), "html", null, true);
            yield "
        </a>
        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["sitePicker"] ?? null), "sites", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                // line 25
                yield "                <li><a class=\"dropdown-item ";
                yield (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "site", [], "any", false, false, false, 25), "code", [], "any", false, false, false, 25) == Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "code", [], "any", false, false, false, 25))) ? ("active") : (""));
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "url", [], "any", false, false, false, 25), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "name", [], "any", false, false, false, 25), "html", null, true);
                yield "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "            ";
            if (($context["backendUrl"] ?? null)) {
                // line 28
                yield "                <li><hr class=\"dropdown-divider\"></li>
                <li><a class=\"dropdown-item\" href=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["backendUrl"] ?? null), "html", null, true);
                yield "\">Backend Area</a></li>
            ";
            }
            // line 31
            yield "        </ul>
    </li>
";
        } elseif (        // line 33
($context["backendUrl"] ?? null)) {
            // line 34
            yield "    <li class=\"nav-item\">
        <a class=\"btn btn-outline-light\" href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["backendUrl"] ?? null), "html", null, true);
            yield "\" target=\"backend\">Backend Area</a>
    </li>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/nav-links.htm";
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
        return array (  135 => 35,  132 => 34,  130 => 33,  126 => 31,  121 => 29,  118 => 28,  115 => 27,  102 => 25,  98 => 24,  92 => 21,  88 => 20,  85 => 19,  83 => 18,  76 => 16,  68 => 13,  60 => 10,  52 => 7,  44 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set activeNavLink = activeNavLink|default(this.page.id) %}

<li class=\"nav-item\">
    <a class=\"nav-link {{ activeNavLink == 'blog' ? 'active' }}\" href=\"{{ 'blog/index'|page }}\">Blog</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link {{ activeNavLink == 'wiki' ? 'active' }}\" href=\"{{ 'wiki/index'|page }}\">Wiki</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link {{ activeNavLink == 'about' ? 'active' }}\" href=\"{{ 'about'|page }}\">About</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link {{ activeNavLink == 'contact' ? 'active' }}\" href=\"{{ 'contact'|page }}\">Contact</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link {{ activeNavLink == 'components' ? 'active' }}\" href=\"{{ 'components'|page }}\">Components Demo</a>
</li>
{% if sitePicker.isEnabled %}
    <li class=\"nav-item dropdown\">
        <a class=\"btn btn-outline-light dropdown-toggle\" href=\"{{ ''|page }}\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            {{ this.site.name|default('Sites') }}
        </a>
        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
            {% for site in sitePicker.sites %}
                <li><a class=\"dropdown-item {{ this.site.code == site.code ? 'active' }}\" href=\"{{ site.url }}\">{{ site.name }}</a></li>
            {% endfor %}
            {% if backendUrl %}
                <li><hr class=\"dropdown-divider\"></li>
                <li><a class=\"dropdown-item\" href=\"{{ backendUrl }}\">Backend Area</a></li>
            {% endif %}
        </ul>
    </li>
{% elseif backendUrl %}
    <li class=\"nav-item\">
        <a class=\"btn btn-outline-light\" href=\"{{ backendUrl }}\" target=\"backend\">Backend Area</a>
    </li>
{% endif %}", "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/nav-links.htm", "");
    }
}
