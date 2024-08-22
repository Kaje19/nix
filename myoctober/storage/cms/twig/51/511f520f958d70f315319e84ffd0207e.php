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

/* C:\Users\Kristine Joy\OneDrive\Documents\GitHub\nix\myoctober\themes/demo/partials/site/modals/password-dialog.htm */
class __TwigTemplate_b96be44ad638d9807344a6011c53ec97 extends Template
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
        yield "<script type=\"text/template\" data-control=\"password-dialog\">
    <div class=\"modal\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <form method=\"post\" class=\"modal-content\" data-request=\"onConfirmPassword\" data-request-flash>
                <div class=\"modal-header\">
                    <h5 class=\"modal-title fs-5\" data-message>Confirm password</h5>
                </div>
                <div class=\"modal-body\">
                    <p>For your security, please confirm your password to continue.</p>
                    <input
                        name=\"confirmable_password\"
                        type=\"password\"
                        value=\"\"
                        class=\"form-control\"
                        placeholder=\"Current password\"
                    />
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-cancel>
                        Cancel
                    </button>
                    <button type=\"submit\" class=\"btn btn-primary\" data-confirm data-attach-loading>
                        Confirm
                    </button>
                </div>
            </form>
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
        return "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/modals/password-dialog.htm";
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
        return new Source("<script type=\"text/template\" data-control=\"password-dialog\">
    <div class=\"modal\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <form method=\"post\" class=\"modal-content\" data-request=\"onConfirmPassword\" data-request-flash>
                <div class=\"modal-header\">
                    <h5 class=\"modal-title fs-5\" data-message>Confirm password</h5>
                </div>
                <div class=\"modal-body\">
                    <p>For your security, please confirm your password to continue.</p>
                    <input
                        name=\"confirmable_password\"
                        type=\"password\"
                        value=\"\"
                        class=\"form-control\"
                        placeholder=\"Current password\"
                    />
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-cancel>
                        Cancel
                    </button>
                    <button type=\"submit\" class=\"btn btn-primary\" data-confirm data-attach-loading>
                        Confirm
                    </button>
                </div>
            </form>
        </div>
    </div>
</script>", "C:\\Users\\Kristine Joy\\OneDrive\\Documents\\GitHub\\nix\\myoctober\\themes/demo/partials/site/modals/password-dialog.htm", "");
    }
}
