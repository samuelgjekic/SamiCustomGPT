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

/* table/insert/get_head_and_foot_of_insert_row_table.twig */
class __TwigTemplate_c8dadbf70eceddf3a57036e5ba512be3 extends Template
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
        echo "<div class=\"table-responsive-lg\">
  <table class=\"table table-striped align-middle my-3 insertRowTable w-auto\">
    <thead>
    <tr>
      <th>";
echo _gettext("Column");
        // line 5
        echo "</th>
      ";
        // line 6
        echo ($context["type"] ?? null);
        echo "
      ";
        // line 7
        echo ($context["function"] ?? null);
        echo "
      <th>";
echo _gettext("Null");
        // line 8
        echo "</th>
      <th class=\"w-50\">";
echo _gettext("Value");
        // line 9
        echo "</th>
    </tr>
    </thead>
     <tfoot>
    <tr>
      <th colspan=\"5\" class=\"tblFooters text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Go");
        // line 15
        echo "\">
        </th>
      </tr>
    </tfoot>";
    }

    public function getTemplateName()
    {
        return "table/insert/get_head_and_foot_of_insert_row_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  60 => 9,  56 => 8,  51 => 7,  47 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/insert/get_head_and_foot_of_insert_row_table.twig", "C:\\wamp64\\www\\admin\\templates\\table\\insert\\get_head_and_foot_of_insert_row_table.twig");
    }
}
