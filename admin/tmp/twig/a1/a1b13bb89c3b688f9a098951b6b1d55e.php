<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modals/index_dialog_modal.twig */
class __TwigTemplate_716d5e4c2fd97e12c8a223780d1461d3 extends Template
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
        echo "<div class=\"modal fade\" id=\"indexDialogModal\" tabindex=\"-1\" aria-labelledby=\"indexDialogModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"indexDialogModalLabel\">";
echo _gettext("Loading");
        // line 5
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
        // line 6
        echo "\"></button>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary\" id=\"indexDialogModalGoButton\">";
echo _gettext("Go");
        // line 10
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-target=\"#indexDialogPreviewModal\" data-bs-toggle=\"modal\">";
echo _gettext("Preview SQL");
        // line 11
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
echo _gettext("Close");
        // line 12
        echo "</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"indexDialogPreviewModal\" aria-hidden=\"true\" aria-labelledby=\"indexDialogPreviewModalLabel\" tabindex=\"-1\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"indexDialogPreviewModalLabel\">";
echo _gettext("Preview SQL");
        // line 21
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
        // line 22
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"spinner-border\" role=\"status\">
          <span class=\"visually-hidden\">";
echo _gettext("Loading…");
        // line 26
        echo "</span>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button class=\"btn btn-primary\" data-bs-target=\"#indexDialogModal\" data-bs-toggle=\"modal\">";
echo _gettext("Go back");
        // line 30
        echo "</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modals/index_dialog_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 30,  86 => 26,  79 => 22,  75 => 21,  63 => 12,  59 => 11,  55 => 10,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modals/index_dialog_modal.twig", "C:\\wamp64\\www\\admin\\templates\\modals\\index_dialog_modal.twig");
    }
}
