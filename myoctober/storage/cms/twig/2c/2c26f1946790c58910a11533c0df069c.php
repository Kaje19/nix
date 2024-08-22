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

/* C:\Users\Kristine Joy\OneDrive\Documents\GitHub\nix\myoctober\themes/demo/partials/site/footer.htm */
class __TwigTemplate_def3cb856543a96f43994193eb029d0f extends Template
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
        yield "<div class=\"element-footer ";
        yield ((((array_key_exists("blueFooterStyle", $context)) ? (Twig\Extension\CoreExtension::default(($context["blueFooterStyle"] ?? null), false)) : (false))) ? ("footer-bluezone") : (""));
        yield "\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-lg-6 col-xl-5\">
                <div class=\"footer-brand\">
                    <img src=\"";
        // line 6
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
        yield "\" alt=\"October CMS Demo\" width=\"270\" />
                </div>
                <div class=\"footer-nav\">
                    <div class=\"row gx-0\">
                        <div class=\"col-md-4 mb-3\">
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item nav-item-header\">
                                    <a class=\"nav-link\" href=\"";
        // line 13
        yield $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        yield "\">Company</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 16
        yield $this->extensions['Cms\Twig\Extension']->pageFilter("blog/index");
        yield "\">Blog</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 19
        yield $this->extensions['Cms\Twig\Extension']->pageFilter("wiki/index");
        yield "\">Wiki</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 22
        yield $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        yield "\">About</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 25
        yield $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        yield "\">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item nav-item-header\">
                                    <a class=\"nav-link\" href=\"";
        // line 32
        yield $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        yield "\">Technology</a>
                                </li>
                                ";
        // line 34
        if (($context["backendUrl"] ?? null)) {
            // line 35
            yield "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["backendUrl"] ?? null), "html", null, true);
            yield "\" target=\"backend\">Backend Area</a>
                                    </li>
                                ";
        }
        // line 39
        yield "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 40
        yield $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        yield "\">AJAX Demo</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 43
        yield $this->extensions['Cms\Twig\Extension']->pageFilter("components");
        yield "\">Components Demo</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item nav-item-header\">
                                    <a class=\"nav-link\" href=\"https://octobercms.com\" target=\"_blank\">October CMS</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"https://docs.octobercms.com\" target=\"_blank\">Documentation</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"https://octobercms.com/pricing\" target=\"_blank\">Buy a License</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"https://www.youtube.com/c/OctoberCMSOfficial\" target=\"_blank\">YouTube Channel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"footer-social\">
                    <ul class=\"nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"https://dribbble.com/\" target=\"_blank\">
                                <img src=\"";
        // line 73
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social-icons-white/dribbble-white.png");
        yield "\" alt=\"Dribbble\"  />
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"https://www.linkedin.com/company/october-cms/\" target=\"_blank\">
                                <img src=\"";
        // line 78
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social-icons-white/linkedin-white.png");
        yield "\" alt=\"LinkedIn\"  />
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"https://twitter.com/octobercms\" target=\"_blank\">
                                <img src=\"";
        // line 83
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social-icons-white/twitter-white.png");
        yield "\" alt=\"Twitter\" />
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"https://www.facebook.com/octobercms\" target=\"_blank\">
                                <img src=\"";
        // line 88
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social-icons-white/facebook-white.png");
        yield "\" alt=\"Facebook\" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"footer-copyright\">
                    <p>&copy; ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Your Company Name</p>
                    <p>All rights reserved</p>
                </div>
            </div>
        </div>
        <div class=\"footer-decoration-1\"></div>
        <div class=\"footer-decoration-2\"></div>
    </div>
</div>

";
        // line 106
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/modals/alert-dialog"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 107
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/modals/password-dialog"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 108
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/modals/ajax-modal"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/footer.htm";
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
        return array (  203 => 108,  200 => 107,  197 => 106,  184 => 96,  173 => 88,  165 => 83,  157 => 78,  149 => 73,  116 => 43,  110 => 40,  107 => 39,  101 => 36,  98 => 35,  96 => 34,  91 => 32,  81 => 25,  75 => 22,  69 => 19,  63 => 16,  57 => 13,  47 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"element-footer {{ blueFooterStyle|default(false) ? 'footer-bluezone' }}\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-lg-6 col-xl-5\">
                <div class=\"footer-brand\">
                    <img src=\"{{ 'assets/images/logo.svg'|theme }}\" alt=\"October CMS Demo\" width=\"270\" />
                </div>
                <div class=\"footer-nav\">
                    <div class=\"row gx-0\">
                        <div class=\"col-md-4 mb-3\">
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item nav-item-header\">
                                    <a class=\"nav-link\" href=\"{{ 'index'|page }}\">Company</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ 'blog/index'|page }}\">Blog</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ 'wiki/index'|page }}\">Wiki</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ 'about'|page }}\">About</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ 'contact'|page }}\">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item nav-item-header\">
                                    <a class=\"nav-link\" href=\"{{ 'index'|page }}\">Technology</a>
                                </li>
                                {% if backendUrl %}
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"{{ backendUrl }}\" target=\"backend\">Backend Area</a>
                                    </li>
                                {% endif %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ 'ajax'|page }}\">AJAX Demo</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ 'components'|page }}\">Components Demo</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item nav-item-header\">
                                    <a class=\"nav-link\" href=\"https://octobercms.com\" target=\"_blank\">October CMS</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"https://docs.octobercms.com\" target=\"_blank\">Documentation</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"https://octobercms.com/pricing\" target=\"_blank\">Buy a License</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"https://www.youtube.com/c/OctoberCMSOfficial\" target=\"_blank\">YouTube Channel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"footer-social\">
                    <ul class=\"nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"https://dribbble.com/\" target=\"_blank\">
                                <img src=\"{{ 'assets/images/social-icons-white/dribbble-white.png'|theme }}\" alt=\"Dribbble\"  />
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"https://www.linkedin.com/company/october-cms/\" target=\"_blank\">
                                <img src=\"{{ 'assets/images/social-icons-white/linkedin-white.png'|theme }}\" alt=\"LinkedIn\"  />
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"https://twitter.com/octobercms\" target=\"_blank\">
                                <img src=\"{{ 'assets/images/social-icons-white/twitter-white.png'|theme }}\" alt=\"Twitter\" />
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"https://www.facebook.com/octobercms\" target=\"_blank\">
                                <img src=\"{{ 'assets/images/social-icons-white/facebook-white.png'|theme }}\" alt=\"Facebook\" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"footer-copyright\">
                    <p>&copy; {{ \"now\"|date(\"Y\") }} Your Company Name</p>
                    <p>All rights reserved</p>
                </div>
            </div>
        </div>
        <div class=\"footer-decoration-1\"></div>
        <div class=\"footer-decoration-2\"></div>
    </div>
</div>

{% partial 'site/modals/alert-dialog' %}
{% partial 'site/modals/password-dialog' %}
{% partial 'site/modals/ajax-modal' %}", "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/footer.htm", "");
    }
}
