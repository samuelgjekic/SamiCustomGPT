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

/* table/insert/actions_panel.twig */
class __TwigTemplate_35d6f07f627738aa96d8bce5fb33842f extends Template
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
        echo "<fieldset class=\"pma-fieldset\" id=\"actions_panel\">
  <table class=\"table table-borderless w-auto tdblock\">
    <tr>
      <td class=\"text-nowrap align-middle\">
        <select name=\"submit_type\" class=\"control_at_footer\">
          ";
        // line 6
        if ( !twig_test_empty(($context["where_clause"] ?? null))) {
            // line 7
            echo "            <option value=\"save\">";
echo _gettext("Save");
            echo "</option>
          ";
        }
        // line 9
        echo "          <option value=\"insert\">";
echo _gettext("Insert as new row");
        echo "</option>
          <option value=\"insertignore\">";
echo _gettext("Insert as new row and ignore errors");
        // line 10
        echo "</option>
          <option value=\"showinsert\">";
echo _gettext("Show insert query");
        // line 11
        echo "</option>
        </select>
      </td>
      <td class=\"align-middle\">
        <strong>";
echo _gettext("and then");
        // line 15
        echo "</strong>
      </td>
      <td class=\"text-nowrap align-middle\">
        <select name=\"after_insert\" class=\"control_at_footer\">
          <option value=\"back\"";
        // line 19
        echo (((($context["after_insert"] ?? null) == "back")) ? (" selected") : (""));
        echo ">";
echo _gettext("Go back to previous page");
        echo "</option>
          <option value=\"new_insert\"";
        // line 20
        echo (((($context["after_insert"] ?? null) == "new_insert")) ? (" selected") : (""));
        echo ">";
echo _gettext("Insert another new row");
        echo "</option>
          ";
        // line 21
        if ( !twig_test_empty(($context["where_clause"] ?? null))) {
            // line 22
            echo "            <option value=\"same_insert\"";
            echo (((($context["after_insert"] ?? null) == "same_insert")) ? (" selected") : (""));
            echo ">";
echo _gettext("Go back to this page");
            echo "</option>
            ";
            // line 23
            if ((($context["found_unique_key"] ?? null) && ($context["is_numeric"] ?? null))) {
                // line 24
                echo "              <option value=\"edit_next\"";
                echo (((($context["after_insert"] ?? null) == "edit_next")) ? (" selected") : (""));
                echo ">";
echo _gettext("Edit next row");
                echo "</option>
            ";
            }
            // line 26
            echo "          ";
        }
        // line 27
        echo "        </select>
      </td>
    </tr>
    <tr>
      <td>
        ";
        // line 32
        echo PhpMyAdmin\Html\Generator::showHint(_gettext("Use TAB key to move from value to value, or CTRL+arrows to move anywhere."));
        echo "
      </td>
      <td colspan=\"3\" class=\"text-end align-middle\">
        <input type=\"button\" class=\"btn btn-secondary preview_sql control_at_footer\" value=\"";
echo _gettext("Preview SQL");
        // line 35
        echo "\">
        <input type=\"reset\" class=\"btn btn-secondary control_at_footer\" value=\"";
echo _gettext("Reset");
        // line 36
        echo "\">
        <input type=\"submit\" class=\"btn btn-primary control_at_footer\" value=\"";
echo _gettext("Go");
        // line 37
        echo "\" id=\"buttonYes\">
      </td>
    </tr>
  </table>
</fieldset>
<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">";
echo _gettext("Loading");
        // line 46
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
        // line 47
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">";
echo _gettext("Close");
        // line 52
        echo "</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "table/insert/actions_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 52,  147 => 47,  143 => 46,  131 => 37,  127 => 36,  123 => 35,  116 => 32,  109 => 27,  106 => 26,  98 => 24,  96 => 23,  89 => 22,  87 => 21,  81 => 20,  75 => 19,  69 => 15,  62 => 11,  58 => 10,  52 => 9,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/insert/actions_panel.twig", "C:\\wamp64\\www\\admin\\templates\\table\\insert\\actions_panel.twig");
    }
}
