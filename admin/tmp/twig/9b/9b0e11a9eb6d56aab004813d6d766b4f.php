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

/* table/index_form.twig */
class __TwigTemplate_94285a14d92a6d604f341410bd146562 extends Template
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
        echo "<form action=\"";
        echo PhpMyAdmin\Url::getFromRoute("/table/indexes");
        echo "\"
    method=\"post\"
    name=\"index_frm\"
    id=\"index_frm\"
    class=\"ajax\">

    ";
        // line 7
        echo PhpMyAdmin\Url::getHiddenInputs(($context["form_params"] ?? null));
        echo "
    ";
        // line 8
        if (($context["is_from_nav"] ?? null)) {
            // line 9
            echo "      <input type=\"hidden\" name=\"do_save_data\" value=\"1\">
    ";
        }
        // line 11
        echo "
    <fieldset class=\"pma-fieldset\" id=\"index_edit_fields\">
        <div class=\"index_info\">
            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_name\">
                            ";
echo _gettext("Index name:");
        // line 19
        echo "                            ";
        echo PhpMyAdmin\Html\Generator::showHint(_gettext("\"PRIMARY\" <b>must</b> be the name of and <b>only of</b> a primary key!"));
        echo "
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_name]\"
                    id=\"input_index_name\"
                    size=\"25\"
                    maxlength=\"64\"
                    value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getName", [], "method", false, false, false, 29), "html", null, true);
        echo "\"
                    onfocus=\"this.select()\">
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_choice\">
                            ";
echo _gettext("Index choice:");
        // line 38
        echo "                            ";
        echo PhpMyAdmin\Html\MySQLDocumentation::show("ALTER_TABLE");
        echo "
                        </label>
                    </strong>
                </div>

              <select name=\"index[Index_choice]\" id=\"select_index_choice\"";
        // line 43
        echo ((($context["create_edit_table"] ?? null)) ? (" disabled") : (""));
        echo ">
                ";
        // line 44
        if (((twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 44) == "PRIMARY") ||  !twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "hasPrimary", [], "method", false, false, false, 44))) {
            // line 45
            echo "                  <option value=\"PRIMARY\"";
            echo (((twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 45) == "PRIMARY")) ? (" selected") : (""));
            echo ">PRIMARY</option>
                ";
        }
        // line 47
        echo "                <option value=\"INDEX\"";
        echo (((twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 47) == "INDEX")) ? (" selected") : (""));
        echo ">INDEX</option>
                <option value=\"UNIQUE\"";
        // line 48
        echo (((twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 48) == "UNIQUE")) ? (" selected") : (""));
        echo ">UNIQUE</option>
                <option value=\"SPATIAL\"";
        // line 49
        echo (((twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 49) == "SPATIAL")) ? (" selected") : (""));
        echo ">SPATIAL</option>
                <option value=\"FULLTEXT\"";
        // line 50
        echo (((twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 50) == "FULLTEXT")) ? (" selected") : (""));
        echo ">FULLTEXT</option>
              </select>
            </div>

            ";
        // line 54
        if ((($context["default_sliders_state"] ?? null) != "disabled")) {
            // line 55
            echo "            <div class=\"mb-3\">
              <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#advancedOptions\" aria-expanded=\"";
            // line 56
            echo (((($context["default_sliders_state"] ?? null) == "open")) ? ("true") : ("false"));
            echo "\" aria-controls=\"advancedOptions\">
                ";
echo _gettext("Advanced options");
            // line 58
            echo "              </button>
            </div>
            <div class=\"collapse mb-3";
            // line 60
            echo (((($context["default_sliders_state"] ?? null) == "open")) ? (" show") : (""));
            echo "\" id=\"advancedOptions\">
            ";
        }
        // line 62
        echo "
            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_key_block_size\">
                            ";
echo _gettext("Key block size:");
        // line 68
        echo "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_block_size]\"
                    id=\"input_key_block_size\"
                    size=\"30\"
                    value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getKeyBlockSize", [], "method", false, false, false, 76), "html", null, true);
        echo "\">
            </div>

            <div>

                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_type\">
                            ";
echo _gettext("Index type:");
        // line 85
        echo "                            ";
        echo PhpMyAdmin\Html\MySQLDocumentation::show("ALTER_TABLE");
        echo "
                        </label>
                    </strong>
                </div>

              <select name=\"index[Index_type]\" id=\"select_index_type\">
                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "", 1 => "BTREE", 2 => "HASH"]);
        foreach ($context['_seq'] as $context["_key"] => $context["index_type"]) {
            // line 92
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $context["index_type"], "html", null, true);
            echo "\"";
            echo (((twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getType", [], "method", false, false, false, 92) == $context["index_type"])) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["index_type"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "              </select>
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_parser\">
                            ";
echo _gettext("Parser:");
        // line 102
        echo "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Parser]\"
                    id=\"input_parse\"
                    size=\"30\"
                    value=\"";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getParser", [], "method", false, false, false, 110), "html", null, true);
        echo "\">
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_comment\">
                            ";
echo _gettext("Comment:");
        // line 118
        echo "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Index_comment]\"
                    id=\"input_index_comment\"
                    size=\"30\"
                    maxlength=\"1024\"
                    value=\"";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getComment", [], "method", false, false, false, 127), "html", null, true);
        echo "\">
            </div>

            ";
        // line 130
        if ((($context["default_sliders_state"] ?? null) != "disabled")) {
            // line 131
            echo "            </div>
            ";
        }
        // line 133
        echo "
        <div class=\"clearfloat\"></div>

        <table class=\"table align-middle\" id=\"index_columns\">
            <thead>
                <tr>
                    <th></th>
                    <th>
                        ";
echo _gettext("Column");
        // line 142
        echo "                    </th>
                    <th>
                        ";
echo _gettext("Size");
        // line 145
        echo "                    </th>
                </tr>
            </thead>
            ";
        // line 148
        $context["spatial_types"] = [0 => "geometry", 1 => "point", 2 => "linestring", 3 => "polygon", 4 => "multipoint", 5 => "multilinestring", 6 => "multipolygon", 7 => "geomtrycollection"];
        // line 158
        echo "            <tbody>
                ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getColumns", [], "method", false, false, false, 159));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 160
            echo "                    <tr class=\"noclick\">
                        <td>
                            <span class=\"drag_icon\" title=\"";
echo _gettext("Drag to reorder");
            // line 162
            echo "\"></span>
                        </td>
                        <td>
                            <select name=\"index[columns][names][]\">
                                <option value=\"\">
                                    -- ";
echo _gettext("Ignore");
            // line 167
            echo " --
                                </option>
                                ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["field_name"] => $context["field_type"]) {
                // line 170
                echo "                                    ";
                if ((((twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 170) != "FULLTEXT") || twig_matches("/(char|text)/i",                 // line 171
$context["field_type"])) && ((twig_get_attribute($this->env, $this->source,                 // line 172
($context["index"] ?? null), "getChoice", [], "method", false, false, false, 172) != "SPATIAL") || twig_in_filter(                // line 173
$context["field_type"], ($context["spatial_types"] ?? null))))) {
                    // line 174
                    echo "
                                        <option value=\"";
                    // line 175
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo "\"";
                    // line 176
                    if (($context["field_name"] == twig_get_attribute($this->env, $this->source, $context["column"], "getName", [], "method", false, false, false, 176))) {
                        // line 177
                        echo "                                                selected=\"selected\"";
                    }
                    // line 178
                    echo ">
                                            ";
                    // line 179
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo " [";
                    echo twig_escape_filter($this->env, $context["field_type"], "html", null, true);
                    echo "]
                                        </option>
                                    ";
                }
                // line 182
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "                            </select>
                        </td>
                        <td>
                            <input type=\"text\"
                                size=\"5\"
                                onfocus=\"this.select()\"
                                name=\"index[columns][sub_parts][]\"
                                value=\"";
            // line 191
            (((twig_get_attribute($this->env, $this->source,             // line 190
($context["index"] ?? null), "getChoice", [], "method", false, false, false, 190) != "SPATIAL")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 191
$context["column"], "getSubPart", [], "method", false, false, false, 191), "html", null, true))) : (print ("")));
            echo "\">
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                ";
        if ((($context["add_fields"] ?? null) > 0)) {
            // line 196
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["add_fields"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 197
                echo "                        <tr class=\"noclick\">
                            <td>
                                <span class=\"drag_icon\" title=\"";
echo _gettext("Drag to reorder");
                // line 199
                echo "\"></span>
                            </td>
                            <td>
                                <select name=\"index[columns][names][]\">
                                    <option value=\"\">-- ";
echo _gettext("Ignore");
                // line 203
                echo " --</option>
                                    ";
                // line 204
                $context["j"] = 0;
                // line 205
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
                foreach ($context['_seq'] as $context["field_name"] => $context["field_type"]) {
                    // line 206
                    echo "                                        ";
                    if (($context["create_edit_table"] ?? null)) {
                        // line 207
                        echo "                                            ";
                        $context["col_index"] = (($__internal_compile_0 = $context["field_type"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[1] ?? null) : null);
                        // line 208
                        echo "                                            ";
                        $context["field_type"] = (($__internal_compile_1 = $context["field_type"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null);
                        // line 209
                        echo "                                        ";
                    }
                    // line 210
                    echo "                                        ";
                    $context["j"] = (($context["j"] ?? null) + 1);
                    // line 211
                    echo "                                        <option value=\"";
                    echo twig_escape_filter($this->env, ((array_key_exists("col_index", $context)) ? (                    // line 212
($context["col_index"] ?? null)) : ($context["field_name"])), "html", null, true);
                    echo "\"";
                    // line 213
                    echo (((($context["j"] ?? null) == $context["i"])) ? (" selected=\"selected\"") : (""));
                    echo ">
                                            ";
                    // line 214
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo " [";
                    echo twig_escape_filter($this->env, $context["field_type"], "html", null, true);
                    echo "]
                                        </option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 217
                echo "                                </select>
                            </td>
                            <td>
                                <input type=\"text\"
                                    size=\"5\"
                                    onfocus=\"this.select()\"
                                    name=\"index[columns][sub_parts][]\"
                                    value=\"\">
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "                ";
        }
        // line 229
        echo "            </tbody>
        </table>
        <div class=\"add_more\">

            <div class=\"slider\"></div>
            <div class=\"add_fields hide\">
                <input class=\"btn btn-secondary\" type=\"submit\"
                    id=\"add_fields\"
                    value=\"";
        // line 237
        echo twig_escape_filter($this->env, twig_sprintf(_gettext("Add %s column(s) to index"), 1), "html", null, true);
        echo "\">
            </div>
        </div>
        </div>
    </fieldset>
    ";
        // line 243
        if ( !($context["create_edit_table"] ?? null)) {
            // line 244
            echo "<fieldset class=\"pma-fieldset tblFooters\">
        <button class=\"btn btn-primary\" type=\"submit\">";
echo _gettext("Go");
            // line 245
            echo "</button>
        <button class=\"btn btn-secondary\" type=\"submit\" id=\"preview_index_frm\">";
echo _gettext("Preview SQL");
            // line 246
            echo "</button>
    </fieldset>";
        }
        // line 249
        echo "</form>
";
        // line 250
        if (($context["is_from_nav"] ?? null)) {
            // line 251
            echo "  ";
            echo twig_include($this->env, $context, "modals/preview_sql_modal.twig");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "table/index_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 251,  489 => 250,  486 => 249,  482 => 246,  478 => 245,  474 => 244,  472 => 243,  464 => 237,  454 => 229,  451 => 228,  435 => 217,  424 => 214,  420 => 213,  417 => 212,  415 => 211,  412 => 210,  409 => 209,  406 => 208,  403 => 207,  400 => 206,  395 => 205,  393 => 204,  390 => 203,  383 => 199,  378 => 197,  373 => 196,  370 => 195,  360 => 191,  359 => 190,  358 => 191,  349 => 183,  343 => 182,  335 => 179,  332 => 178,  329 => 177,  327 => 176,  324 => 175,  321 => 174,  319 => 173,  318 => 172,  317 => 171,  315 => 170,  311 => 169,  307 => 167,  299 => 162,  294 => 160,  290 => 159,  287 => 158,  285 => 148,  280 => 145,  275 => 142,  264 => 133,  260 => 131,  258 => 130,  252 => 127,  241 => 118,  230 => 110,  220 => 102,  210 => 94,  197 => 92,  193 => 91,  183 => 85,  171 => 76,  161 => 68,  153 => 62,  148 => 60,  144 => 58,  139 => 56,  136 => 55,  134 => 54,  127 => 50,  123 => 49,  119 => 48,  114 => 47,  108 => 45,  106 => 44,  102 => 43,  93 => 38,  81 => 29,  67 => 19,  57 => 11,  53 => 9,  51 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/index_form.twig", "C:\\wamp64\\www\\admin\\templates\\table\\index_form.twig");
    }
}
