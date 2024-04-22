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

/* columns_definitions/table_fields_definitions.twig */
class __TwigTemplate_007b0f9a421391aad916768f6693d297 extends Template
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
        echo "<div class=\"responsivetable\">
<table id=\"table_columns\" class=\"table table-striped caption-top align-middle mb-0 noclick\">
    <caption class=\"tblHeaders\">
        ";
echo _gettext("Structure");
        // line 5
        echo "        ";
        echo PhpMyAdmin\Html\MySQLDocumentation::show("CREATE_TABLE");
        echo "
    </caption>
    <tr>
        <th>
            ";
echo _gettext("Name");
        // line 10
        echo "        </th>
        <th>
            ";
echo _gettext("Type");
        // line 13
        echo "            ";
        echo PhpMyAdmin\Html\MySQLDocumentation::show("data-types");
        echo "
        </th>
        <th>
            ";
echo _gettext("Length/Values");
        // line 17
        echo "            ";
        echo PhpMyAdmin\Html\Generator::showHint(_gettext("If column type is \"enum\" or \"set\", please enter the values using this format: 'a','b','c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
        echo "
        </th>
        <th>
            ";
echo _gettext("Default");
        // line 21
        echo "            ";
        echo PhpMyAdmin\Html\Generator::showHint(_gettext("For default values, please enter just a single value, without backslash escaping or quotes, using this format: a"));
        echo "
        </th>
        <th>
            ";
echo _gettext("Collation");
        // line 25
        echo "        </th>
        <th>
            ";
echo _gettext("Attributes");
        // line 28
        echo "        </th>
        <th>
            ";
echo _gettext("Null");
        // line 31
        echo "        </th>

        ";
        // line 34
        echo "        ";
        if ((array_key_exists("change_column", $context) &&  !twig_test_empty(($context["change_column"] ?? null)))) {
            // line 35
            echo "            <th>
                ";
echo _gettext("Adjust privileges");
            // line 37
            echo "                ";
            echo PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
            echo "
            </th>
        ";
        }
        // line 40
        echo "
        ";
        // line 44
        echo "        ";
        if ( !($context["is_backup"] ?? null)) {
            // line 45
            echo "            <th>
                ";
echo _gettext("Index");
            // line 47
            echo "            </th>
        ";
        }
        // line 49
        echo "
        <th>
            <abbr title=\"AUTO_INCREMENT\">A_I</abbr>
        </th>
        <th>
            ";
echo _gettext("Comments");
        // line 55
        echo "        </th>

        ";
        // line 57
        if (($context["is_virtual_columns_supported"] ?? null)) {
            // line 58
            echo "            <th>
                ";
echo _gettext("Virtuality");
            // line 60
            echo "            </th>
        ";
        }
        // line 62
        echo "
        ";
        // line 63
        if (array_key_exists("fields_meta", $context)) {
            // line 64
            echo "            <th>
                ";
echo _gettext("Move column");
            // line 66
            echo "            </th>
        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "browserTransformationFeature", [], "any", false, false, false, 69)) && ($context["browse_mime"] ?? null))) {
            // line 70
            echo "            <th>
                ";
echo _gettext("Media type");
            // line 72
            echo "            </th>
            <th>
                <a href=\"";
            // line 74
            echo PhpMyAdmin\Url::getFromRoute("/transformation/overview");
            echo "#transformation\" title=\"";
echo _gettext("List of available transformations and their options");
            // line 76
            echo "\" target=\"_blank\">
                    ";
echo _gettext("Browser display transformation");
            // line 78
            echo "                </a>
            </th>
            <th>
                ";
echo _gettext("Browser display transformation options");
            // line 82
            echo "                ";
            echo PhpMyAdmin\Html\Generator::showHint(_gettext("Please enter the values for transformation options using this format: 'a', 100, b,'c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
            echo "
            </th>
            <th>
                <a href=\"";
            // line 85
            echo PhpMyAdmin\Url::getFromRoute("/transformation/overview");
            echo "#input_transformation\"
                   title=\"";
echo _gettext("List of available transformations and their options");
            // line 86
            echo "\"
                   target=\"_blank\">
                    ";
echo _gettext("Input transformation");
            // line 89
            echo "                </a>
            </th>
            <th>
                ";
echo _gettext("Input transformation options");
            // line 93
            echo "                ";
            echo PhpMyAdmin\Html\Generator::showHint(_gettext("Please enter the values for transformation options using this format: 'a', 100, b,'c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
            echo "
            </th>
        ";
        }
        // line 96
        echo "    </tr>
    ";
        // line 97
        $context["options"] = ["" => "", "VIRTUAL" => "VIRTUAL"];
        // line 98
        echo "    ";
        if (($context["supports_stored_keyword"] ?? null)) {
            // line 99
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["STORED" => "STORED"]);
            // line 100
            echo "    ";
        } else {
            // line 101
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["PERSISTENT" => "PERSISTENT"]);
            // line 102
            echo "    ";
        }
        // line 103
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["content_cells"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["content_row"]) {
            // line 104
            echo "        <tr>
            ";
            // line 105
            $this->loadTemplate("columns_definitions/column_attributes.twig", "columns_definitions/table_fields_definitions.twig", 105)->display(twig_to_array(twig_array_merge($context["content_row"], ["options" =>             // line 106
($context["options"] ?? null), "change_column" =>             // line 107
($context["change_column"] ?? null), "is_virtual_columns_supported" =>             // line 108
($context["is_virtual_columns_supported"] ?? null), "browse_mime" =>             // line 109
($context["browse_mime"] ?? null), "max_rows" =>             // line 110
($context["max_rows"] ?? null), "char_editing" =>             // line 111
($context["char_editing"] ?? null), "attribute_types" =>             // line 112
($context["attribute_types"] ?? null), "privs_available" =>             // line 113
($context["privs_available"] ?? null), "max_length" =>             // line 114
($context["max_length"] ?? null), "charsets" =>             // line 115
($context["charsets"] ?? null), "relation_parameters" =>             // line 116
($context["relation_parameters"] ?? null)])));
            // line 118
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "columns_definitions/table_fields_definitions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 120,  256 => 118,  254 => 116,  253 => 115,  252 => 114,  251 => 113,  250 => 112,  249 => 111,  248 => 110,  247 => 109,  246 => 108,  245 => 107,  244 => 106,  243 => 105,  240 => 104,  235 => 103,  232 => 102,  229 => 101,  226 => 100,  223 => 99,  220 => 98,  218 => 97,  215 => 96,  208 => 93,  202 => 89,  197 => 86,  192 => 85,  185 => 82,  179 => 78,  175 => 76,  171 => 74,  167 => 72,  163 => 70,  161 => 69,  158 => 68,  154 => 66,  150 => 64,  148 => 63,  145 => 62,  141 => 60,  137 => 58,  135 => 57,  131 => 55,  123 => 49,  119 => 47,  115 => 45,  112 => 44,  109 => 40,  102 => 37,  98 => 35,  95 => 34,  91 => 31,  86 => 28,  81 => 25,  73 => 21,  65 => 17,  57 => 13,  52 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "columns_definitions/table_fields_definitions.twig", "C:\\wamp64\\www\\admin\\templates\\columns_definitions\\table_fields_definitions.twig");
    }
}
