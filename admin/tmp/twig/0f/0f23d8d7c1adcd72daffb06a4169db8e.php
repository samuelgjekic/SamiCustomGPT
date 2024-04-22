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

/* table/structure/display_partitions.twig */
class __TwigTemplate_e4c0eab5e798f055211f68a5e68a5e7c extends Template
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
        echo "<div id=\"partitions\">
    <fieldset class=\"pma-fieldset\">
        <legend>
            ";
echo _gettext("Partitions");
        // line 5
        echo "            ";
        echo PhpMyAdmin\Html\MySQLDocumentation::show("partitioning");
        echo "
        </legend>
        ";
        // line 7
        if (twig_test_empty(($context["partitions"] ?? null))) {
            // line 8
            echo "            ";
            echo $this->env->getFilter('notice')->getCallable()(_gettext("No partitioning defined!"));
            echo "
        ";
        } else {
            // line 10
            echo "            <p>
                ";
echo _gettext("Partitioned by:");
            // line 12
            echo "                <code>";
            echo twig_escape_filter($this->env, ($context["partition_method"] ?? null), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, ($context["partition_expression"] ?? null), "html", null, true);
            echo ")</code>
            </p>
            ";
            // line 14
            if (($context["has_sub_partitions"] ?? null)) {
                // line 15
                echo "                <p>
                    ";
echo _gettext("Sub partitioned by:");
                // line 17
                echo "                    <code>";
                echo twig_escape_filter($this->env, ($context["sub_partition_method"] ?? null), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, ($context["sub_partition_expression"] ?? null), "html", null, true);
                echo ")</code>
                <p>
            ";
            }
            // line 20
            echo "            <table class=\"table table-striped table-hover table-sm\">
                <thead>
                    <tr>
                        <th colspan=\"2\">#</th>
                        <th>";
echo _gettext("Partition");
            // line 24
            echo "</th>
                        ";
            // line 25
            if (($context["has_description"] ?? null)) {
                // line 26
                echo "                            <th>";
echo _gettext("Expression");
                echo "</th>
                        ";
            }
            // line 28
            echo "                        <th>";
echo _gettext("Rows");
            echo "</th>
                        <th>";
echo _gettext("Data length");
            // line 29
            echo "</th>
                        <th>";
echo _gettext("Index length");
            // line 30
            echo "</th>
                        <th>";
echo _gettext("Comment");
            // line 31
            echo "</th>
                        <th colspan=\"";
            // line 32
            echo ((($context["range_or_list"] ?? null)) ? ("7") : ("6"));
            echo "\">
                            ";
echo _gettext("Action");
            // line 34
            echo "                        </th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["partitions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
                // line 39
                echo "                    <tr class=\"noclick";
                echo ((($context["has_sub_partitions"] ?? null)) ? (" table-active") : (""));
                echo "\">
                        ";
                // line 40
                if (($context["has_sub_partitions"] ?? null)) {
                    // line 41
                    echo "                            <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getOrdinal", [], "method", false, false, false, 41), "html", null, true);
                    echo "</td>
                            <td></td>
                        ";
                } else {
                    // line 44
                    echo "                            <td colspan=\"2\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getOrdinal", [], "method", false, false, false, 44), "html", null, true);
                    echo "</td>
                        ";
                }
                // line 46
                echo "                        <th>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getName", [], "method", false, false, false, 46), "html", null, true);
                echo "</th>
                        ";
                // line 47
                if (($context["has_description"] ?? null)) {
                    // line 48
                    echo "                            <td>
                                <code>";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getExpression", [], "method", false, false, false, 50), "html", null, true);
                    // line 51
                    echo (((twig_get_attribute($this->env, $this->source, $context["partition"], "getMethod", [], "method", false, false, false, 51) == "LIST")) ? (" IN (") : (" < "));
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getDescription", [], "method", false, false, false, 52), "html", null, true);
                    // line 53
                    echo (((twig_get_attribute($this->env, $this->source, $context["partition"], "getMethod", [], "method", false, false, false, 53) == "LIST")) ? (")") : (""));
                    // line 54
                    echo "</code>
                            </td>
                        ";
                }
                // line 57
                echo "                        <td class=\"value\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getRows", [], "method", false, false, false, 57), "html", null, true);
                echo "</td>
                        <td class=\"value\">
                            ";
                // line 59
                $context["data_length"] = PhpMyAdmin\Util::formatByteDown(twig_get_attribute($this->env, $this->source,                 // line 60
$context["partition"], "getDataLength", [], "method", false, false, false, 60), 3, 1);
                // line 64
                echo "                            <span>";
                echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["data_length"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
                echo "</span>
                            <span class=\"unit\">";
                // line 65
                echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["data_length"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "html", null, true);
                echo "</span>
                        </td>
                        <td class=\"value\">
                            ";
                // line 68
                $context["index_length"] = PhpMyAdmin\Util::formatByteDown(twig_get_attribute($this->env, $this->source,                 // line 69
$context["partition"], "getIndexLength", [], "method", false, false, false, 69), 3, 1);
                // line 73
                echo "                            <span>";
                echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["index_length"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "html", null, true);
                echo "</span>
                            <span class=\"unit\">";
                // line 74
                echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["index_length"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[1] ?? null) : null), "html", null, true);
                echo "</span>
                        </td>
                        <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getComment", [], "method", false, false, false, 76), "html", null, true);
                echo "</td>

                        <td>
                          <a id=\"partition_action_ANALYZE\" class=\"ajax\" href=\"";
                // line 79
                echo PhpMyAdmin\Url::getFromRoute("/table/partition/analyze");
                echo "\" data-post=\"";
                echo PhpMyAdmin\Url::getCommon(["db" =>                 // line 80
($context["db"] ?? null), "table" =>                 // line 81
($context["table"] ?? null), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 82
$context["partition"], "getName", [], "method", false, false, false, 82)], "", false);
                // line 83
                echo "\">
                            ";
                // line 84
                echo PhpMyAdmin\Html\Generator::getIcon("b_search", _gettext("Analyze"));
                echo "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_CHECK\" class=\"ajax\" href=\"";
                // line 89
                echo PhpMyAdmin\Url::getFromRoute("/table/partition/check");
                echo "\" data-post=\"";
                echo PhpMyAdmin\Url::getCommon(["db" =>                 // line 90
($context["db"] ?? null), "table" =>                 // line 91
($context["table"] ?? null), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 92
$context["partition"], "getName", [], "method", false, false, false, 92)], "", false);
                // line 93
                echo "\">
                            ";
                // line 94
                echo PhpMyAdmin\Html\Generator::getIcon("eye", _gettext("Check"));
                echo "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_OPTIMIZE\" class=\"ajax\" href=\"";
                // line 99
                echo PhpMyAdmin\Url::getFromRoute("/table/partition/optimize");
                echo "\" data-post=\"";
                echo PhpMyAdmin\Url::getCommon(["db" =>                 // line 100
($context["db"] ?? null), "table" =>                 // line 101
($context["table"] ?? null), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 102
$context["partition"], "getName", [], "method", false, false, false, 102)], "", false);
                // line 103
                echo "\">
                            ";
                // line 104
                echo PhpMyAdmin\Html\Generator::getIcon("normalize", _gettext("Optimize"));
                echo "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_REBUILD\" class=\"ajax\" href=\"";
                // line 109
                echo PhpMyAdmin\Url::getFromRoute("/table/partition/rebuild");
                echo "\" data-post=\"";
                echo PhpMyAdmin\Url::getCommon(["db" =>                 // line 110
($context["db"] ?? null), "table" =>                 // line 111
($context["table"] ?? null), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 112
$context["partition"], "getName", [], "method", false, false, false, 112)], "", false);
                // line 113
                echo "\">
                            ";
                // line 114
                echo PhpMyAdmin\Html\Generator::getIcon("s_tbl", _gettext("Rebuild"));
                echo "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_REPAIR\" class=\"ajax\" href=\"";
                // line 119
                echo PhpMyAdmin\Url::getFromRoute("/table/partition/repair");
                echo "\" data-post=\"";
                echo PhpMyAdmin\Url::getCommon(["db" =>                 // line 120
($context["db"] ?? null), "table" =>                 // line 121
($context["table"] ?? null), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 122
$context["partition"], "getName", [], "method", false, false, false, 122)], "", false);
                // line 123
                echo "\">
                            ";
                // line 124
                echo PhpMyAdmin\Html\Generator::getIcon("b_tblops", _gettext("Repair"));
                echo "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_TRUNCATE\" class=\"ajax\" href=\"";
                // line 129
                echo PhpMyAdmin\Url::getFromRoute("/table/partition/truncate");
                echo "\" data-post=\"";
                echo PhpMyAdmin\Url::getCommon(["db" =>                 // line 130
($context["db"] ?? null), "table" =>                 // line 131
($context["table"] ?? null), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 132
$context["partition"], "getName", [], "method", false, false, false, 132)], "", false);
                // line 133
                echo "\">
                            ";
                // line 134
                echo PhpMyAdmin\Html\Generator::getIcon("b_empty", _gettext("Truncate"));
                echo "
                          </a>
                        </td>

                        ";
                // line 138
                if (($context["range_or_list"] ?? null)) {
                    // line 139
                    echo "                          <td>
                            <a id=\"partition_action_DROP\" class=\"ajax\" href=\"";
                    // line 140
                    echo PhpMyAdmin\Url::getFromRoute("/table/partition/drop");
                    echo "\" data-post=\"";
                    echo PhpMyAdmin\Url::getCommon(["db" =>                     // line 141
($context["db"] ?? null), "table" =>                     // line 142
($context["table"] ?? null), "partition_name" => twig_get_attribute($this->env, $this->source,                     // line 143
$context["partition"], "getName", [], "method", false, false, false, 143)], "", false);
                    // line 144
                    echo "\">
                              ";
                    // line 145
                    echo PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Drop"));
                    echo "
                            </a>
                          </td>
                        ";
                }
                // line 149
                echo "
                        ";
                // line 150
                if (($context["has_sub_partitions"] ?? null)) {
                    // line 151
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["partition"], "getSubPartitions", [], "method", false, false, false, 151));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_partition"]) {
                        // line 152
                        echo "                                <tr class=\"noclick\">
                                    <td></td>
                                    <td>";
                        // line 154
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_partition"], "getOrdinal", [], "method", false, false, false, 154), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 155
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_partition"], "getName", [], "method", false, false, false, 155), "html", null, true);
                        echo "</td>
                                    ";
                        // line 156
                        if (($context["has_description"] ?? null)) {
                            // line 157
                            echo "                                        <td></td>
                                    ";
                        }
                        // line 159
                        echo "                                    <td class=\"value\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_partition"], "getRows", [], "method", false, false, false, 159), "html", null, true);
                        echo "</td>
                                    <td class=\"value\">
                                        ";
                        // line 161
                        $context["data_length"] = PhpMyAdmin\Util::formatByteDown(twig_get_attribute($this->env, $this->source,                         // line 162
$context["sub_partition"], "getDataLength", [], "method", false, false, false, 162), 3, 1);
                        // line 166
                        echo "                                        <span>";
                        echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["data_length"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), "html", null, true);
                        echo "</span>
                                        <span class=\"unit\">";
                        // line 167
                        echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["data_length"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[1] ?? null) : null), "html", null, true);
                        echo "</span>
                                    </td>
                                    <td class=\"value\">
                                        ";
                        // line 170
                        $context["index_length"] = PhpMyAdmin\Util::formatByteDown(twig_get_attribute($this->env, $this->source,                         // line 171
$context["sub_partition"], "getIndexLength", [], "method", false, false, false, 171), 3, 1);
                        // line 175
                        echo "                                        <span>";
                        echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["index_length"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), "html", null, true);
                        echo "</span>
                                        <span class=\"unit\">";
                        // line 176
                        echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["index_length"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[1] ?? null) : null), "html", null, true);
                        echo "</span>
                                    </td>
                                    <td>";
                        // line 178
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_partition"], "getComment", [], "method", false, false, false, 178), "html", null, true);
                        echo "</td>
                                    <td colspan=\"";
                        // line 179
                        echo ((($context["range_or_list"] ?? null)) ? ("7") : ("6"));
                        echo "\"></td>
                                </tr>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_partition'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 182
                    echo "                        ";
                }
                // line 183
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "                </tbody>
            </table>
        ";
        }
        // line 188
        echo "    </fieldset>
    <fieldset class=\"pma-fieldset tblFooters d-print-none\">
        <form action=\"";
        // line 190
        echo PhpMyAdmin\Url::getFromRoute("/table/structure/partitioning");
        echo "\" method=\"post\">
            ";
        // line 191
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "

            ";
        // line 193
        if (twig_test_empty(($context["partitions"] ?? null))) {
            // line 194
            echo "                <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
echo _gettext("Partition table");
            echo "\">
            ";
        } else {
            // line 196
            echo "                ";
            echo PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), ["db" =>             // line 199
($context["db"] ?? null), "table" =>             // line 200
($context["table"] ?? null), "sql_query" => (("ALTER TABLE " . PhpMyAdmin\Util::backquote(            // line 201
($context["table"] ?? null))) . " REMOVE PARTITIONING")], _gettext("Remove partitioning"), ["class" => "btn btn-secondary ajax", "id" => "remove_partitioning"]);
            // line 206
            echo "
                <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
echo _gettext("Edit partitioning");
            // line 207
            echo "\">
            ";
        }
        // line 209
        echo "        </form>
    </fieldset>
</div>
";
    }

    public function getTemplateName()
    {
        return "table/structure/display_partitions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 209,  465 => 207,  461 => 206,  459 => 201,  458 => 200,  457 => 199,  455 => 196,  449 => 194,  447 => 193,  442 => 191,  438 => 190,  434 => 188,  429 => 185,  422 => 183,  419 => 182,  410 => 179,  406 => 178,  401 => 176,  396 => 175,  394 => 171,  393 => 170,  387 => 167,  382 => 166,  380 => 162,  379 => 161,  373 => 159,  369 => 157,  367 => 156,  363 => 155,  359 => 154,  355 => 152,  350 => 151,  348 => 150,  345 => 149,  338 => 145,  335 => 144,  333 => 143,  332 => 142,  331 => 141,  328 => 140,  325 => 139,  323 => 138,  316 => 134,  313 => 133,  311 => 132,  310 => 131,  309 => 130,  306 => 129,  298 => 124,  295 => 123,  293 => 122,  292 => 121,  291 => 120,  288 => 119,  280 => 114,  277 => 113,  275 => 112,  274 => 111,  273 => 110,  270 => 109,  262 => 104,  259 => 103,  257 => 102,  256 => 101,  255 => 100,  252 => 99,  244 => 94,  241 => 93,  239 => 92,  238 => 91,  237 => 90,  234 => 89,  226 => 84,  223 => 83,  221 => 82,  220 => 81,  219 => 80,  216 => 79,  210 => 76,  205 => 74,  200 => 73,  198 => 69,  197 => 68,  191 => 65,  186 => 64,  184 => 60,  183 => 59,  177 => 57,  172 => 54,  170 => 53,  168 => 52,  166 => 51,  164 => 50,  161 => 48,  159 => 47,  154 => 46,  148 => 44,  141 => 41,  139 => 40,  134 => 39,  130 => 38,  124 => 34,  119 => 32,  116 => 31,  112 => 30,  108 => 29,  102 => 28,  96 => 26,  94 => 25,  91 => 24,  84 => 20,  75 => 17,  71 => 15,  69 => 14,  61 => 12,  57 => 10,  51 => 8,  49 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/display_partitions.twig", "C:\\wamp64\\www\\admin\\templates\\table\\structure\\display_partitions.twig");
    }
}
