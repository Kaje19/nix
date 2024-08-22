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

/* C:\Users\Kristine Joy\OneDrive\Documents\GitHub\nix\myoctober\themes/demo/partials/site/modals/alert-dialog.htm */
class __TwigTemplate_c99b45eddc79ba1009b7959795fc7660 extends Template
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
        yield "<script type=\"text/template\" data-control=\"alert-dialog\">
    <div class=\"modal\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <p class=\"modal-title lead\" data-message></p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-cancel>
                        Cancel
                    </button>
                    <button type=\"button\" class=\"btn btn-primary\" data-ok>
                        OK
                    </button>
                </div>
            </div>
        </div>
    </div>
</script>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/modals/alert-dialog.htm";
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
        return new Source("<script type=\"text/template\" data-control=\"alert-dialog\">
    <div class=\"modal\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <p class=\"modal-title lead\" data-message></p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-cancel>
                        Cancel
                    </button>
                    <button type=\"button\" class=\"btn btn-primary\" data-ok>
                        OK
                    </button>
                </div>
            </div>
        </div>
    </div>
</script>", "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/modals/alert-dialog.htm", "");
    }
}
