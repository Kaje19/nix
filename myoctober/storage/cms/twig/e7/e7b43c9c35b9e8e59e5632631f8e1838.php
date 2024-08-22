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

/* C:\Users\Kristine Joy\OneDrive\Documents\GitHub\nix\myoctober\themes/demo/partials/site/head/head-scripts.htm */
class __TwigTemplate_0acdc8907cfe48bb3b8e3dd251a9ea34 extends Template
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
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        yield '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework-extras'.($_minify ? '.min' : '').'.js"></script>'.PHP_EOL;
        yield '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework-extras.css">'.PHP_EOL;
        unset($_minify);
        // line 2
        yield "<script src=\"";
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.min.js");
        yield "\"></script>
<script src=\"";
        // line 3
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/bootstrap.min.js");
        yield "\"></script>
<script src=\"";
        // line 4
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/codeblocks/codeblocks.min.js");
        yield "\"></script>
<script src=\"";
        // line 5
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/slick-carousel/slick.min.js");
        yield "\"></script>
<script src=\"";
        // line 6
        yield $this->extensions['Cms\Twig\Extension']->themeFilter(["assets/js/controls/alert-dialog.js", "assets/js/controls/password-dialog.js", "assets/js/controls/gallery-slider.js", "assets/js/controls/card-slider.js", "assets/js/controls/quantity-input.js", "assets/js/app.js"]);
        // line 13
        yield "\"></script>
";
        // line 14
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->assetsFunction('js');
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('scripts');
        // line 15
        yield "
<script type=\"module\">
    import PhotoSwipeLightbox from \"";
        // line 17
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/photoswipe/photoswipe-lightbox.esm.min.js");
        yield "\";
    import PhotoSwipeModule from \"";
        // line 18
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/photoswipe/photoswipe.esm.min.js");
        yield "\"
    import PhotoSwipeDynamicCaption from \"";
        // line 19
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/photoswipe-dynamic-caption-plugin/photoswipe-dynamic-caption-plugin.esm.js");
        yield "\";

    window.PhotoSwipeLightbox = PhotoSwipeLightbox;
    window.PhotoSwipeModule = PhotoSwipeModule;
    window.PhotoSwipeDynamicCaption = PhotoSwipeDynamicCaption;
</script>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/head/head-scripts.htm";
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
        return array (  80 => 19,  76 => 18,  72 => 17,  68 => 15,  65 => 14,  62 => 13,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% framework extras %}
<script src=\"{{ 'assets/vendor/jquery.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/bootstrap/bootstrap.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/codeblocks/codeblocks.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/slick-carousel/slick.min.js'|theme }}\"></script>
<script src=\"{{ [
    'assets/js/controls/alert-dialog.js',
    'assets/js/controls/password-dialog.js',
    'assets/js/controls/gallery-slider.js',
    'assets/js/controls/card-slider.js',
    'assets/js/controls/quantity-input.js',
    'assets/js/app.js'
]|theme }}\"></script>
{% scripts %}

<script type=\"module\">
    import PhotoSwipeLightbox from \"{{ 'assets/vendor/photoswipe/photoswipe-lightbox.esm.min.js'|theme }}\";
    import PhotoSwipeModule from \"{{ 'assets/vendor/photoswipe/photoswipe.esm.min.js'|theme }}\"
    import PhotoSwipeDynamicCaption from \"{{ 'assets/vendor/photoswipe-dynamic-caption-plugin/photoswipe-dynamic-caption-plugin.esm.js'|theme }}\";

    window.PhotoSwipeLightbox = PhotoSwipeLightbox;
    window.PhotoSwipeModule = PhotoSwipeModule;
    window.PhotoSwipeDynamicCaption = PhotoSwipeDynamicCaption;
</script>", "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/head/head-scripts.htm", "");
    }
}
