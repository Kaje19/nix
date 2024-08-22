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

/* C:\Users\Kristine Joy\OneDrive\Documents\GitHub\nix\myoctober\themes/demo/partials/site/modals/ajax-modal.htm */
class __TwigTemplate_9bd705bfd7281a55921630b5a1dcc58d extends Template
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
        yield "<div class=\"modal\" id=\"siteModal\">
    <div class=\"modal-dialog modal-dialog-centered\" id=\"siteModalContent\">
        <!-- Partial Contents Will Go Here -->
    </div>

    <div class=\"modal-dialog modal-dialog-centered modal-loading\">
        <div class=\"spinner-border text-light mx-auto\"></div>
    </div>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/modals/ajax-modal.htm";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal\" id=\"siteModal\">
    <div class=\"modal-dialog modal-dialog-centered\" id=\"siteModalContent\">
        <!-- Partial Contents Will Go Here -->
    </div>

    <div class=\"modal-dialog modal-dialog-centered modal-loading\">
        <div class=\"spinner-border text-light mx-auto\"></div>
    </div>
</div>", "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/modals/ajax-modal.htm", "");
    }
}
