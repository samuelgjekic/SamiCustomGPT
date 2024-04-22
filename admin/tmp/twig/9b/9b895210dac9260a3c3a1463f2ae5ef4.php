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

/* indexes.twig */
class __TwigTemplate_a225319beebe4fc94898387d2af75218 extends Template
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
        echo "<fieldset class=\"pma-fieldset index_info\">
  <legend id=\"index_header\">
    ";
echo _gettext("Indexes");
        // line 4
        echo "    ";
        echo PhpMyAdmin\Html\MySQLDocumentation::show("optimizing-database-structure");
        echo "
  </legend>

  ";
        // line 7
        if ( !twig_test_empty(($context["indexes"] ?? null))) {
            // line 8
            echo "    ";
            echo ($context["indexes_duplicates"] ?? null);
            echo "

    ";
            // line 10
            echo twig_include($this->env, $context, "modals/preview_sql_confirmation.twig");
            echo "
    <div class=\"table-responsive jsresponsive\">
      <table class=\"table table-striped table-hover table-sm w-auto align-middle\" id=\"table_index\">
        <thead>
        <tr>
            <th colspan=\"3\" class=\"d-print-none\">";
echo _gettext("Action");
            // line 15
            echo "</th>
            <th>";
echo _gettext("Keyname");
            // line 16
            echo "</th>
            <th>";
echo _gettext("Type");
            // line 17
            echo "</th>
            <th>";
echo _gettext("Unique");
            // line 18
            echo "</th>
            <th>";
echo _gettext("Packed");
            // line 19
            echo "</th>
            <th>";
echo _gettext("Column");
            // line 20
            echo "</th>
            <th>";
echo _gettext("Cardinality");
            // line 21
            echo "</th>
            <th>";
echo _gettext("Collation");
            // line 22
            echo "</th>
            <th>";
echo _gettext("Null");
            // line 23
            echo "</th>
            <th>";
echo _gettext("Comment");
            // line 24
            echo "</th>
          </tr>
        </thead>

        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["indexes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                // line 29
                echo "          <tbody class=\"row_span\">
            ";
                // line 30
                $context["columns_count"] = twig_get_attribute($this->env, $this->source, $context["index"], "getColumnCount", [], "method", false, false, false, 30);
                // line 31
                echo "            <tr class=\"noclick\">
              <td rowspan=\"";
                // line 32
                echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                echo "\" class=\"edit_index d-print-none ajax\">
                <a class=\"ajax\" href=\"";
                // line 33
                echo PhpMyAdmin\Url::getFromRoute("/table/indexes");
                echo "\" data-post=\"";
                echo PhpMyAdmin\Url::getCommon(twig_array_merge(($context["url_params"] ?? null), ["index" => twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 33)]), "", false);
                echo "\">
                  ";
                // line 34
                echo PhpMyAdmin\Html\Generator::getIcon("b_edit", _gettext("Edit"));
                echo "
                </a>
              </td>
              <td rowspan=\"";
                // line 37
                echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                echo "\" class=\"rename_index d-print-none ajax\" >
                <a class=\"ajax\" href=\"";
                // line 38
                echo PhpMyAdmin\Url::getFromRoute("/table/indexes/rename");
                echo "\" data-post=\"";
                echo PhpMyAdmin\Url::getCommon(twig_array_merge(($context["url_params"] ?? null), ["index" => twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 38)]), "", false);
                echo "\">
                  ";
                // line 39
                echo PhpMyAdmin\Html\Generator::getIcon("b_rename", _gettext("Rename"));
                echo "
                </a>
              </td>
              <td rowspan=\"";
                // line 42
                echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                echo "\" class=\"d-print-none\">
                ";
                // line 43
                if ((twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 43) == "PRIMARY")) {
                    // line 44
                    echo "                  ";
                    $context["index_params"] = ["sql_query" => (("ALTER TABLE " . PhpMyAdmin\Util::backquote(                    // line 45
($context["table"] ?? null))) . " DROP PRIMARY KEY;"), "message_to_show" => _gettext("The primary key has been dropped.")];
                    // line 48
                    echo "                ";
                } else {
                    // line 49
                    echo "                  ";
                    $context["index_params"] = ["sql_query" => (((("ALTER TABLE " . PhpMyAdmin\Util::backquote(                    // line 50
($context["table"] ?? null))) . " DROP INDEX ") . PhpMyAdmin\Util::backquote(twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 50))) . ";"), "message_to_show" => twig_sprintf(_gettext("Index %s has been dropped."), twig_get_attribute($this->env, $this->source,                     // line 51
$context["index"], "getName", [], "method", false, false, false, 51))];
                    // line 53
                    echo "                ";
                }
                // line 54
                echo "
                <input type=\"hidden\" class=\"drop_primary_key_index_msg\" value=\"";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["index_params"] ?? null), "sql_query", [], "any", false, false, false, 55), "html", null, true);
                echo "\">
                ";
                // line 56
                echo PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), twig_array_merge(                // line 58
($context["url_params"] ?? null), ($context["index_params"] ?? null)), PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Drop")), ["class" => "drop_primary_key_index_anchor ajax"]);
                // line 61
                echo "
              </td>
              <th rowspan=\"";
                // line 63
                echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 63), "html", null, true);
                echo "</th>
              <td rowspan=\"";
                // line 64
                echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["index"], "getType", [], "method", true, true, false, 64)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["index"], "getType", [], "method", false, false, false, 64), twig_get_attribute($this->env, $this->source, $context["index"], "getChoice", [], "method", false, false, false, 64))) : (twig_get_attribute($this->env, $this->source, $context["index"], "getChoice", [], "method", false, false, false, 64))), "html", null, true);
                echo "</td>
              <td rowspan=\"";
                // line 65
                echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["index"], "isUnique", [], "method", false, false, false, 65)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                echo "</td>
              <td rowspan=\"";
                // line 66
                echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["index"], "isPacked", [], "method", false, false, false, 66);
                echo "</td>

              ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["index"], "getColumns", [], "method", false, false, false, 68));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 69
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["column"], "getSeqInIndex", [], "method", false, false, false, 69) > 1)) {
                        // line 70
                        echo "                  <tr class=\"noclick\">
                ";
                    }
                    // line 72
                    echo "                <td>
                  ";
                    // line 73
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "hasExpression", [], "method", false, false, false, 73)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getExpression", [], "method", false, false, false, 73), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getName", [], "method", false, false, false, 73), "html", null, true);
                    }
                    // line 74
                    echo "                  ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["column"], "getSubPart", [], "method", false, false, false, 74))) {
                        // line 75
                        echo "                    (";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getSubPart", [], "method", false, false, false, 75), "html", null, true);
                        echo ")
                  ";
                    }
                    // line 77
                    echo "                </td>
                <td>";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getCardinality", [], "method", false, false, false, 78), "html", null, true);
                    echo "</td>
                <td>";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getCollation", [], "method", false, false, false, 79), "html", null, true);
                    echo "</td>
                <td>";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getNull", [0 => true], "method", false, false, false, 80), "html", null, true);
                    echo "</td>

                ";
                    // line 82
                    if ((twig_get_attribute($this->env, $this->source, $context["column"], "getSeqInIndex", [], "method", false, false, false, 82) == 1)) {
                        // line 83
                        echo "                  <td rowspan=\"";
                        echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "getComments", [], "method", false, false, false, 83), "html", null, true);
                        echo "</td>
                ";
                    }
                    // line 85
                    echo "            </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "          </tbody>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "      </table>
    </div>
  ";
        } else {
            // line 92
            echo "    <div class=\"no_indexes_defined\">";
            echo $this->env->getFilter('notice')->getCallable()(_gettext("No index defined!"));
            echo "</div>
  ";
        }
        // line 94
        echo "</fieldset>
";
    }

    public function getTemplateName()
    {
        return "indexes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 94,  286 => 92,  281 => 89,  274 => 87,  267 => 85,  259 => 83,  257 => 82,  252 => 80,  248 => 79,  244 => 78,  241 => 77,  235 => 75,  232 => 74,  226 => 73,  223 => 72,  219 => 70,  216 => 69,  212 => 68,  205 => 66,  199 => 65,  193 => 64,  187 => 63,  183 => 61,  181 => 58,  180 => 56,  176 => 55,  173 => 54,  170 => 53,  168 => 51,  167 => 50,  165 => 49,  162 => 48,  160 => 45,  158 => 44,  156 => 43,  152 => 42,  146 => 39,  140 => 38,  136 => 37,  130 => 34,  124 => 33,  120 => 32,  117 => 31,  115 => 30,  112 => 29,  108 => 28,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  57 => 10,  51 => 8,  49 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "indexes.twig", "D:\\wamp\\www\\admin\\templates\\indexes.twig");
    }
}
