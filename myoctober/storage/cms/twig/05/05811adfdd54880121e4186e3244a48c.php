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

/* C:\Users\Kristine Joy\OneDrive\Documents\GitHub\nix\myoctober\themes/demo/pages/index.htm */
class __TwigTemplate_243beeb8fd916ece34a1e3fa4a1f821d extends Template
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
        $context["latestPosts"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["blog"] ?? null), "limit", [3], "method", false, false, false, 1), "get", [], "any", false, false, false, 1);
        // line 2
        yield "<div class=\"page-index\">
    <div class=\"jumbotron\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"jumbotron-intro\">
                        <h1>Welcome to October CMS!</h1>
                        <p class=\"lead\">
                            This is the October CMS demo theme that explores the core features. You can use it as a foundation for your new website.
                        </p>
                        <p>
                            ";
        // line 13
        if (($context["backendUrl"] ?? null)) {
            // line 14
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["backendUrl"] ?? null), "html", null, true);
            yield "\" target=\"backend\" class=\"btn btn-outline-light btn-pill\">
                                    Explore the Backend Area
                                </a>
                            ";
        } else {
            // line 18
            yield "                                <a href=\"https://octobercms.com/features\" target=\"_blank\" class=\"btn btn-outline-light btn-pill\">
                                    Explore the Platform Features
                                </a>
                            ";
        }
        // line 22
        yield "                        </p>
                    </div>
                </div>

                <div class=\"col-lg-6\">
                    <div class=\"jumbotron-product\">
                        <img src=\"";
        // line 28
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/homepage/header-image.png");
        yield "\" class=\"img-fluid\" alt=\"Product Shot\" />
                    </div>
                </div>
            </div>
            <div class=\"jumbotron-decoration-1\"></div>
            <div class=\"jumbotron-decoration-2\"></div>
        </div>
    </div>


    <div class=\"intro\">
        <div class=\"container\">
            <img src=\"";
        // line 40
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-leaf.png");
        yield "\" class=\"img-leaf\" alt=\"October CMS\" />
            <h2>About This Page</h2>
            <p class=\"lead\">
                This page demonstrates the basic CMS features. Usually each page built with October CMS is a combination of a layout, page, partials and content blocks, although in simple cases you can just use a page without anything else.
            </p>
        </div>
    </div>

    <div class=\"feature\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 offset-lg-1\">
                    <div class=\"feature-content\">
                        <p><div class=\"feature-pill\"><span>CMS Feature</span></div></p>
                        <h3>Layouts</h3>
                        <p>Layouts define the page scaffold. Layout files include everything that repeats on each page, such as the HTML, HEAD and BODY tags, CSS and JavaScript references. The page menu and footer in the Demo theme are defined in the layout as well. Layouts are optional — you can define everything right in a page file.</p>
                        <a href=\"https://docs.octobercms.com/3.x/cms/themes/layouts.html\" target=\"_blank\" class=\"btn btn-outline-primary btn-pill\">Learn more about Layouts</a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"feature-image\">
                        <img src=\"";
        // line 61
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/homepage/layouts-image.png");
        yield "\" class=\"img-fluid\" alt=\"CMS Layouts\" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"feature\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"feature-image\">
                        <img src=\"";
        // line 73
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/homepage/pages-image.png");
        yield "\" class=\"img-fluid\" alt=\"CMS Pages\" />
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"feature-content\">
                        <p><div class=\"feature-pill\"><span>Included</span></div></p>
                        <h3>Pages</h3>
                        <p>Pages hold the content for each URL. A page file defines the page URL and the page content. Pages are rendered inside layouts with the page tag that should be called in the layout code.</p>
                        <a href=\"https://docs.octobercms.com/3.x/cms/themes/pages.html\" target=\"_blank\" class=\"btn btn-outline-primary btn-pill\">Learn more about Pages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"feature pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 offset-lg-1\">
                    <div class=\"feature-content\">
                        <p><div class=\"feature-pill\"><span>CMS Feature</span></div></p>
                        <h3>Partials</h3>
                        <p>
                            Partials contain chunks of HTML code that are used anywhere throughout your website. They allow you to simplify the code of complex pages and reuse code in multiple places.
                            Also, partials are an important part of the <a href=\"https://docs.octobercms.com/3.x/cms/ajax/introduction.html\" target=\"_blank\">built-in AJAX framework</a>.
                        </p>
                        <a href=\"https://docs.octobercms.com/3.x/cms/themes/partials.html\" target=\"_blank\" class=\"btn btn-outline-primary btn-pill\">Learn more about Partials</a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"feature-image\">
                        <img src=\"";
        // line 104
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/homepage/partials-image.png");
        yield "\" class=\"img-fluid\" alt=\"CMS Layouts\" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"actioncall\">
        <div class=\"container\">
            <h3>There are more great CMS features!</h3>
            <p class=\"lead\">Visit the October CMS Documentation website to learn everything about the CMS features.</p>
            <a href=\"https://octobercms.com/features\" target=\"_blank\" class=\"btn btn-primary btn-lg btn-pill\">Learn more about October CMS</a>
            <div class=\"actioncall-decoration-1\"></div>
            <div class=\"actioncall-decoration-2\"></div>
            <div class=\"actioncall-decoration-3\"></div>
        </div>
    </div>

    <div class=\"latestnews\">
        <div class=\"container\">
            <h3>Latest News</h3>

            <div class=\"blog-featured row row-cols-1 row-cols-md-2 row-cols-xl-3 g-3 pb-5\">
                ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["latestPosts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 128
            yield "                    ";
            $cmsPartialParams = [];
            $cmsPartialParams['post'] = $context["post"]            ;
            yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("blog/post-card"            , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)            , true            );
            // line 129
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "            </div>
        </div>
    </div>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/pages/index.htm";
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
        return array (  206 => 130,  200 => 129,  195 => 128,  191 => 127,  165 => 104,  131 => 73,  116 => 61,  92 => 40,  77 => 28,  69 => 22,  63 => 18,  55 => 14,  53 => 13,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set latestPosts = blog.limit(3).get %}
<div class=\"page-index\">
    <div class=\"jumbotron\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"jumbotron-intro\">
                        <h1>Welcome to October CMS!</h1>
                        <p class=\"lead\">
                            This is the October CMS demo theme that explores the core features. You can use it as a foundation for your new website.
                        </p>
                        <p>
                            {% if backendUrl %}
                                <a href=\"{{ backendUrl }}\" target=\"backend\" class=\"btn btn-outline-light btn-pill\">
                                    Explore the Backend Area
                                </a>
                            {% else %}
                                <a href=\"https://octobercms.com/features\" target=\"_blank\" class=\"btn btn-outline-light btn-pill\">
                                    Explore the Platform Features
                                </a>
                            {% endif %}
                        </p>
                    </div>
                </div>

                <div class=\"col-lg-6\">
                    <div class=\"jumbotron-product\">
                        <img src=\"{{ 'assets/images/homepage/header-image.png'|theme }}\" class=\"img-fluid\" alt=\"Product Shot\" />
                    </div>
                </div>
            </div>
            <div class=\"jumbotron-decoration-1\"></div>
            <div class=\"jumbotron-decoration-2\"></div>
        </div>
    </div>


    <div class=\"intro\">
        <div class=\"container\">
            <img src=\"{{ 'assets/images/logo-leaf.png'|theme }}\" class=\"img-leaf\" alt=\"October CMS\" />
            <h2>About This Page</h2>
            <p class=\"lead\">
                This page demonstrates the basic CMS features. Usually each page built with October CMS is a combination of a layout, page, partials and content blocks, although in simple cases you can just use a page without anything else.
            </p>
        </div>
    </div>

    <div class=\"feature\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 offset-lg-1\">
                    <div class=\"feature-content\">
                        <p><div class=\"feature-pill\"><span>CMS Feature</span></div></p>
                        <h3>Layouts</h3>
                        <p>Layouts define the page scaffold. Layout files include everything that repeats on each page, such as the HTML, HEAD and BODY tags, CSS and JavaScript references. The page menu and footer in the Demo theme are defined in the layout as well. Layouts are optional — you can define everything right in a page file.</p>
                        <a href=\"https://docs.octobercms.com/3.x/cms/themes/layouts.html\" target=\"_blank\" class=\"btn btn-outline-primary btn-pill\">Learn more about Layouts</a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"feature-image\">
                        <img src=\"{{ 'assets/images/homepage/layouts-image.png'|theme }}\" class=\"img-fluid\" alt=\"CMS Layouts\" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"feature\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"feature-image\">
                        <img src=\"{{ 'assets/images/homepage/pages-image.png'|theme }}\" class=\"img-fluid\" alt=\"CMS Pages\" />
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"feature-content\">
                        <p><div class=\"feature-pill\"><span>Included</span></div></p>
                        <h3>Pages</h3>
                        <p>Pages hold the content for each URL. A page file defines the page URL and the page content. Pages are rendered inside layouts with the page tag that should be called in the layout code.</p>
                        <a href=\"https://docs.octobercms.com/3.x/cms/themes/pages.html\" target=\"_blank\" class=\"btn btn-outline-primary btn-pill\">Learn more about Pages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"feature pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 offset-lg-1\">
                    <div class=\"feature-content\">
                        <p><div class=\"feature-pill\"><span>CMS Feature</span></div></p>
                        <h3>Partials</h3>
                        <p>
                            Partials contain chunks of HTML code that are used anywhere throughout your website. They allow you to simplify the code of complex pages and reuse code in multiple places.
                            Also, partials are an important part of the <a href=\"https://docs.octobercms.com/3.x/cms/ajax/introduction.html\" target=\"_blank\">built-in AJAX framework</a>.
                        </p>
                        <a href=\"https://docs.octobercms.com/3.x/cms/themes/partials.html\" target=\"_blank\" class=\"btn btn-outline-primary btn-pill\">Learn more about Partials</a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"feature-image\">
                        <img src=\"{{ 'assets/images/homepage/partials-image.png'|theme }}\" class=\"img-fluid\" alt=\"CMS Layouts\" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"actioncall\">
        <div class=\"container\">
            <h3>There are more great CMS features!</h3>
            <p class=\"lead\">Visit the October CMS Documentation website to learn everything about the CMS features.</p>
            <a href=\"https://octobercms.com/features\" target=\"_blank\" class=\"btn btn-primary btn-lg btn-pill\">Learn more about October CMS</a>
            <div class=\"actioncall-decoration-1\"></div>
            <div class=\"actioncall-decoration-2\"></div>
            <div class=\"actioncall-decoration-3\"></div>
        </div>
    </div>

    <div class=\"latestnews\">
        <div class=\"container\">
            <h3>Latest News</h3>

            <div class=\"blog-featured row row-cols-1 row-cols-md-2 row-cols-xl-3 g-3 pb-5\">
                {% for post in latestPosts %}
                    {% partial 'blog/post-card' post=post %}
                {% endfor %}
            </div>
        </div>
    </div>
</div>", "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/pages/index.htm", "");
    }
}
