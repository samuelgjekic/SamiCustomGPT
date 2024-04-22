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

/* table/operations/index.twig */
class __TwigTemplate_78e32ea245ada3cb3b61a3aaa373c09b extends Template
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
        echo "<div class=\"container-fluid\">

";
        // line 3
        if ( !($context["hide_order_table"] ?? null)) {
            // line 4
            echo "  <form method=\"post\" id=\"alterTableOrderby\" action=\"";
            echo PhpMyAdmin\Url::getFromRoute("/table/operations");
            echo "\">
    ";
            // line 5
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            echo "
    <input type=\"hidden\" name=\"submitorderby\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">";
echo _gettext("Alter table order by");
            // line 9
            echo "</div>
      <div class=\"card-body\">
        <div class=\"row g-3\">
          <div class=\"col-auto\">
            <label class=\"visually-hidden\" for=\"tableOrderFieldSelect\">";
echo _gettext("Column");
            // line 13
            echo "</label>
            <select id=\"tableOrderFieldSelect\" class=\"form-select\" name=\"order_field\" aria-describedby=\"tableOrderFieldSelectHelp\">
              ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 16
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "Field", [], "any", false, false, false, 16), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "Field", [], "any", false, false, false, 16), "html", null, true);
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            </select>
            <small id=\"tableOrderFieldSelectHelp\" class=\"form-text text-muted\">
              ";
echo _pgettext("Alter table order by a single field.", "(singly)");
            // line 21
            echo "            </small>
          </div>

          <div class=\"col-auto\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderAscRadio\" name=\"order_order\" type=\"radio\" value=\"asc\" checked>
              <label class=\"form-check-label\" for=\"tableOrderAscRadio\">";
echo _gettext("Ascending");
            // line 27
            echo "</label>
            </div>
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderDescRadio\" name=\"order_order\" type=\"radio\" value=\"desc\">
              <label class=\"form-check-label\" for=\"tableOrderDescRadio\">";
echo _gettext("Descending");
            // line 31
            echo "</label>
            </div>
          </div>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Go");
            // line 38
            echo "\">
      </div>
    </div>
  </form>
";
        }
        // line 43
        echo "
<form method=\"post\" action=\"";
        // line 44
        echo PhpMyAdmin\Url::getFromRoute("/table/operations");
        echo "\" id=\"moveTableForm\" class=\"ajax\" onsubmit=\"return Functions.emptyCheckTheField(this, 'new_name')\">
  ";
        // line 45
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"what\" value=\"data\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">";
echo _gettext("Move table to (database.table)");
        // line 50
        echo "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            ";
        // line 55
        if ( !twig_test_empty(($context["database_list"] ?? null))) {
            // line 56
            echo "              <select id=\"moveTableDatabaseInput\" class=\"form-select\" name=\"target_db\" aria-label=\"";
echo _gettext("Database");
            echo "\">
                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["database_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["each_db"]) {
                // line 58
                echo "                  <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 58), "html", null, true);
                echo "\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["each_db"], "is_selected", [], "any", false, false, false, 58)) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 58), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_db'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "              </select>
            ";
        } else {
            // line 62
            echo "              <input id=\"moveTableDatabaseInput\" class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"";
            echo twig_escape_filter($this->env, ($context["db"] ?? null), "html", null, true);
            echo "\" aria-label=\"";
echo _gettext("Database");
            echo "\">
            ";
        }
        // line 64
        echo "            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" required=\"required\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["table"] ?? null), "html", null, true);
        echo "\" aria-label=\"";
echo _gettext("Table");
        echo "\">
          </div>
        </div>
      </div>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_mv\">
        <label class=\"form-check-label\" for=\"checkbox_auto_increment_mv\">";
echo _gettext("Add AUTO_INCREMENT value");
        // line 72
        echo "</label>
      </div>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_tables_move\"";
        // line 76
        if (($context["has_privileges"] ?? null)) {
            echo " checked";
        } else {
            echo " title=\"";
echo _gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.");
            // line 77
            echo "\" disabled";
        }
        echo ">
        <label class=\"form-check-label\" for=\"checkbox_privileges_tables_move\">
          ";
echo _gettext("Adjust privileges");
        // line 80
        echo "          ";
        echo PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
        echo "
        </label>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_move\" value=\"";
echo _gettext("Go");
        // line 86
        echo "\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"";
        // line 91
        echo PhpMyAdmin\Url::getFromRoute("/table/operations");
        echo "\" id=\"tableOptionsForm\" class=\"ajax\">
  ";
        // line 92
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"submitoptions\" value=\"1\">
  <input type=\"hidden\" name=\"prev_comment\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, ($context["table_comment"] ?? null), "html", null, true);
        echo "\">
  ";
        // line 96
        if (($context["has_auto_increment"] ?? null)) {
            // line 97
            echo "    <input type=\"hidden\" name=\"hidden_auto_increment\" value=\"";
            echo twig_escape_filter($this->env, ($context["auto_increment"] ?? null), "html", null, true);
            echo "\">
  ";
        }
        // line 99
        echo "
  <div class=\"card mb-2\">
    <div class=\"card-header\">";
echo _gettext("Table options");
        // line 101
        echo "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"renameTableInput\">";
echo _gettext("Rename table to");
        // line 105
        echo "</label>
        </div>
        <div class=\"col-6\">
          <input class=\"form-control\" id=\"renameTableInput\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, ($context["table"] ?? null), "html", null, true);
        echo "\" required>
        </div>
        <div class=\"form-check col-12\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_table_options\"";
        // line 112
        if (($context["has_privileges"] ?? null)) {
            echo " checked";
        } else {
            echo " title=\"";
echo _gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.");
            // line 113
            echo "\" disabled";
        }
        echo ">
          <label class=\"form-check-label\" for=\"checkbox_privileges_table_options\">
            ";
echo _gettext("Adjust privileges");
        // line 116
        echo "            ";
        echo PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
        echo "
          </label>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"tableCommentsInput\">";
echo _gettext("Table comments");
        // line 123
        echo "</label>
        </div>
        <div class=\"col-6\">
          <input class=\"form-control\" id=\"tableCommentsInput\" type=\"text\" name=\"comment\" maxlength=\"2048\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, ($context["table_comment"] ?? null), "html", null, true);
        echo "\">
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label class=\"text-nowrap\" for=\"newTableStorageEngineSelect\">
            ";
echo _gettext("Storage engine");
        // line 134
        echo "            ";
        echo PhpMyAdmin\Html\MySQLDocumentation::show("Storage_engines");
        echo "
          </label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" name=\"new_tbl_storage_engine\" id=\"newTableStorageEngineSelect\">
            ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["storage_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
            // line 140
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 140), "html", null, true);
            echo "\"";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 140))) {
                echo " title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 140), "html", null, true);
                echo "\"";
            }
            // line 141
            echo ((((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 141)) == twig_lower_filter($this->env, ($context["storage_engine"] ?? null))) || (twig_test_empty(($context["storage_engine"] ?? null)) && twig_get_attribute($this->env, $this->source, $context["engine"], "is_default", [], "any", false, false, false, 141)))) ? (" selected") : (""));
            echo ">";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 142), "html", null, true);
            // line 143
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "          </select>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"collationSelect\">";
echo _gettext("Collation");
        // line 151
        echo "</label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" id=\"collationSelect\" lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
            <option value=\"\"></option>
            ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["charsets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 157
            echo "              <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 157), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getDescription", [], "method", false, false, false, 157), "html", null, true);
            echo "\">
                ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = ($context["collations"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 158)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 159
                echo "                  <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 159), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "getDescription", [], "method", false, false, false, 159), "html", null, true);
                echo "\"";
                echo (((($context["tbl_collation"] ?? null) == twig_get_attribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 159))) ? (" selected") : (""));
                echo ">
                    ";
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 160), "html", null, true);
                echo "
                  </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "              </optgroup>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "          </select>
        </div>

        <div class=\"form-check col-12 ms-3\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"change_all_collations\" value=\"1\" id=\"checkbox_change_all_collations\">
          <label class=\"form-check-label\" for=\"checkbox_change_all_collations\">";
echo _gettext("Change all column collations");
        // line 170
        echo "</label>
        </div>
      </div>

      ";
        // line 174
        if (($context["has_pack_keys"] ?? null)) {
            // line 175
            echo "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-6\">
            <label for=\"new_pack_keys\">PACK_KEYS</label>
          </div>
          <div class=\"col-6\">
            <select class=\"form-select\" name=\"new_pack_keys\" id=\"new_pack_keys\">
              <option value=\"DEFAULT\"";
            // line 181
            echo (((($context["pack_keys"] ?? null) == "DEFAULT")) ? (" selected") : (""));
            echo ">DEFAULT</option>
              <option value=\"0\"";
            // line 182
            echo (((($context["pack_keys"] ?? null) == "0")) ? (" selected") : (""));
            echo ">0</option>
              <option value=\"1\"";
            // line 183
            echo (((($context["pack_keys"] ?? null) == "1")) ? (" selected") : (""));
            echo ">1</option>
            </select>
          </div>
        </div>
      ";
        }
        // line 188
        echo "
      ";
        // line 189
        if (($context["has_checksum_and_delay_key_write"] ?? null)) {
            // line 190
            echo "        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_checksum\" id=\"new_checksum\" value=\"1\"";
            // line 191
            echo (((($context["checksum"] ?? null) == "1")) ? (" checked") : (""));
            echo ">
          <label class=\"form-check-label\" for=\"new_checksum\">CHECKSUM</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_delay_key_write\" id=\"new_delay_key_write\" value=\"1\"";
            // line 196
            echo (((($context["delay_key_write"] ?? null) == "1")) ? (" checked") : (""));
            echo ">
          <label class=\"form-check-label\" for=\"new_delay_key_write\">DELAY_KEY_WRITE</label>
        </div>
      ";
        }
        // line 200
        echo "
      ";
        // line 201
        if (($context["has_transactional_and_page_checksum"] ?? null)) {
            // line 202
            echo "        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_transactional\" id=\"new_transactional\" value=\"1\"";
            // line 203
            echo (((($context["transactional"] ?? null) == "1")) ? (" checked") : (""));
            echo ">
          <label class=\"form-check-label\" for=\"new_transactional\">TRANSACTIONAL</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_page_checksum\" id=\"new_page_checksum\" value=\"1\"";
            // line 208
            echo (((($context["page_checksum"] ?? null) == "1")) ? (" checked") : (""));
            echo ">
          <label class=\"form-check-label\" for=\"new_page_checksum\">PAGE_CHECKSUM</label>
        </div>
      ";
        }
        // line 212
        echo "
      ";
        // line 213
        if (($context["has_auto_increment"] ?? null)) {
            // line 214
            echo "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"auto_increment_opt\">AUTO_INCREMENT</label>
          </div>
          <div class=\"col-12\">
            <input class=\"form-control\" id=\"auto_increment_opt\" type=\"number\" name=\"new_auto_increment\" value=\"";
            // line 219
            echo twig_escape_filter($this->env, ($context["auto_increment"] ?? null), "html", null, true);
            echo "\">
          </div>
        </div>
      ";
        }
        // line 223
        echo "
      ";
        // line 224
        if ( !twig_test_empty(($context["row_formats"] ?? null))) {
            // line 225
            echo "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"new_row_format\">ROW_FORMAT</label>
          </div>
          <div class=\"col-12\">
            <select class=\"form-select\" id=\"new_row_format\" name=\"new_row_format\">
              ";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["row_formats"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row_format"]) {
                // line 232
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["row_format"], "html", null, true);
                echo "\"";
                echo ((($context["row_format"] == twig_upper_filter($this->env, ($context["row_format_current"] ?? null)))) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $context["row_format"], "html", null, true);
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row_format'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "            </select>
          </div>
        </div>
      ";
        }
        // line 238
        echo "    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Go");
        // line 241
        echo "\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"";
        // line 246
        echo PhpMyAdmin\Url::getFromRoute("/table/operations");
        echo "\" name=\"copyTable\" id=\"copyTable\" class=\"ajax\" onsubmit=\"return Functions.emptyCheckTheField(this, 'new_name')\">
  ";
        // line 247
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
  <input type=\"hidden\" name=\"reload\" value=\"1\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">";
echo _gettext("Copy table to (database.table)");
        // line 251
        echo "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            ";
        // line 256
        if ( !twig_test_empty(($context["database_list"] ?? null))) {
            // line 257
            echo "              <select class=\"form-select\" name=\"target_db\" aria-label=\"";
echo _gettext("Database");
            echo "\">
                ";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["database_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["each_db"]) {
                // line 259
                echo "                  <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 259), "html", null, true);
                echo "\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["each_db"], "is_selected", [], "any", false, false, false, 259)) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 259), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_db'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "              </select>
            ";
        } else {
            // line 263
            echo "              <input class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"";
            echo twig_escape_filter($this->env, ($context["db"] ?? null), "html", null, true);
            echo "\" aria-label=\"";
echo _gettext("Database");
            echo "\">
            ";
        }
        // line 265
        echo "            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 266
        echo twig_escape_filter($this->env, ($context["table"] ?? null), "html", null, true);
        echo "\" aria-label=\"";
echo _gettext("Table");
        echo "\" required>
          </div>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio1\" value=\"structure\">
          <label class=\"form-check-label\" for=\"whatRadio1\">
            ";
echo _gettext("Structure only");
        // line 276
        echo "          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio2\" value=\"data\" checked>
          <label class=\"form-check-label\" for=\"whatRadio2\">
            ";
echo _gettext("Structure and data");
        // line 282
        echo "          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio3\" value=\"dataonly\">
          <label class=\"form-check-label\" for=\"whatRadio3\">
            ";
echo _gettext("Data only");
        // line 288
        echo "          </label>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"drop_if_exists\" value=\"true\" id=\"checkbox_drop\">
          <label class=\"form-check-label\" for=\"checkbox_drop\">";
        // line 295
        echo twig_escape_filter($this->env, twig_sprintf(_gettext("Add %s"), "DROP TABLE"), "html", null, true);
        echo "</label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_cp\">
          <label class=\"form-check-label\" for=\"checkbox_auto_increment_cp\">";
echo _gettext("Add AUTO_INCREMENT value");
        // line 300
        echo "</label>
        </div>

        ";
        // line 303
        if (($context["has_foreign_keys"] ?? null)) {
            // line 304
            echo "          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"add_constraints\" value=\"1\" id=\"checkbox_constraints\" checked>
            <label class=\"form-check-label\" for=\"checkbox_constraints\">";
echo _gettext("Add constraints");
            // line 306
            echo "</label>
          </div>
        ";
        }
        // line 309
        echo "
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_adjust_privileges\"";
        // line 312
        if (($context["has_privileges"] ?? null)) {
            echo " checked";
        } else {
            echo " title=\"";
echo _gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.");
            // line 313
            echo "\" disabled";
        }
        echo ">
          <label class=\"form-check-label\" for=\"checkbox_adjust_privileges\">
            ";
echo _gettext("Adjust privileges");
        // line 316
        echo "            ";
        echo PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
        echo "
          </label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"switch_to_new\" value=\"true\" id=\"checkbox_switch\"";
        // line 321
        echo ((($context["switch_to_new"] ?? null)) ? (" checked") : (""));
        echo ">
          <label class=\"form-check-label\" for=\"checkbox_switch\">";
echo _gettext("Switch to copied table");
        // line 322
        echo "</label>
        </div>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_copy\" value=\"";
echo _gettext("Go");
        // line 328
        echo "\">
    </div>
  </div>
</form>

<div class=\"card mb-2\">
  <div class=\"card-header\">";
echo _gettext("Table maintenance");
        // line 334
        echo "</div>
  <ul class=\"list-group list-group-flush\" id=\"tbl_maintenance\">
    ";
        // line 336
        if (twig_in_filter(($context["storage_engine"] ?? null), [0 => "MYISAM", 1 => "ARIA", 2 => "INNODB", 3 => "BERKELEYDB", 4 => "TOKUDB"])) {
            // line 337
            echo "      <li class=\"list-group-item\">
        <a href=\"";
            // line 338
            echo PhpMyAdmin\Url::getFromRoute("/table/maintenance/analyze");
            echo "\" data-post=\"";
            echo PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [0 => ($context["table"] ?? null)]], "", false);
            echo "\">
          ";
echo _gettext("Analyze table");
            // line 340
            echo "        </a>
        ";
            // line 341
            echo PhpMyAdmin\Html\MySQLDocumentation::show("ANALYZE_TABLE");
            echo "
      </li>
    ";
        }
        // line 344
        echo "
    ";
        // line 345
        if (twig_in_filter(($context["storage_engine"] ?? null), [0 => "MYISAM", 1 => "ARIA", 2 => "INNODB", 3 => "TOKUDB"])) {
            // line 346
            echo "      <li class=\"list-group-item\">
        <a href=\"";
            // line 347
            echo PhpMyAdmin\Url::getFromRoute("/table/maintenance/check");
            echo "\" data-post=\"";
            echo PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [0 => ($context["table"] ?? null)]], "", false);
            echo "\">
          ";
echo _gettext("Check table");
            // line 349
            echo "        </a>
        ";
            // line 350
            echo PhpMyAdmin\Html\MySQLDocumentation::show("CHECK_TABLE");
            echo "
      </li>
    ";
        }
        // line 353
        echo "
    <li class=\"list-group-item\">
      <a href=\"";
        // line 355
        echo PhpMyAdmin\Url::getFromRoute("/table/maintenance/checksum");
        echo "\" data-post=\"";
        echo PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [0 => ($context["table"] ?? null)]], "", false);
        echo "\">
        ";
echo _gettext("Checksum table");
        // line 357
        echo "      </a>
      ";
        // line 358
        echo PhpMyAdmin\Html\MySQLDocumentation::show("CHECKSUM_TABLE");
        echo "
    </li>

    ";
        // line 361
        if ((($context["storage_engine"] ?? null) == "INNODB")) {
            // line 362
            echo "      <li class=\"list-group-item\">
        <a class=\"maintain_action ajax\" href=\"";
            // line 363
            echo PhpMyAdmin\Url::getFromRoute("/sql");
            echo "\" data-post=\"";
            echo PhpMyAdmin\Url::getCommon(twig_array_merge(($context["url_params"] ?? null), ["sql_query" => (("ALTER TABLE " . PhpMyAdmin\Util::backquote(($context["table"] ?? null))) . " ENGINE = InnoDB;")]), "", false);
            echo "\">
          ";
echo _gettext("Defragment table");
            // line 365
            echo "        </a>
        ";
            // line 366
            echo PhpMyAdmin\Html\MySQLDocumentation::show("InnoDB_File_Defragmenting");
            echo "
      </li>
    ";
        }
        // line 369
        echo "
    <li class=\"list-group-item\">
      <a class=\"maintain_action ajax\" href=\"";
        // line 371
        echo PhpMyAdmin\Url::getFromRoute("/sql");
        echo "\" data-post=\"";
        echo PhpMyAdmin\Url::getCommon(twig_array_merge(($context["url_params"] ?? null), ["sql_query" => ("FLUSH TABLE " . PhpMyAdmin\Util::backquote(        // line 372
($context["table"] ?? null))), "message_to_show" => twig_sprintf(_gettext("Table %s has been flushed."), twig_escape_filter($this->env,         // line 373
($context["table"] ?? null))), "reload" => true]), "", false);
        // line 375
        echo "\">
        ";
echo _gettext("Flush the table (FLUSH)");
        // line 377
        echo "      </a>
      ";
        // line 378
        echo PhpMyAdmin\Html\MySQLDocumentation::show("FLUSH");
        echo "
    </li>

    ";
        // line 381
        if (twig_in_filter(($context["storage_engine"] ?? null), [0 => "MYISAM", 1 => "ARIA", 2 => "INNODB", 3 => "BERKELEYDB", 4 => "TOKUDB"])) {
            // line 382
            echo "      <li class=\"list-group-item\">
        <a href=\"";
            // line 383
            echo PhpMyAdmin\Url::getFromRoute("/table/maintenance/optimize");
            echo "\" data-post=\"";
            echo PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [0 => ($context["table"] ?? null)]], "", false);
            echo "\">
          ";
echo _gettext("Optimize table");
            // line 385
            echo "        </a>
        ";
            // line 386
            echo PhpMyAdmin\Html\MySQLDocumentation::show("OPTIMIZE_TABLE");
            echo "
      </li>
    ";
        }
        // line 389
        echo "
    ";
        // line 390
        if (twig_in_filter(($context["storage_engine"] ?? null), [0 => "MYISAM", 1 => "ARIA"])) {
            // line 391
            echo "      <li class=\"list-group-item\">
        <a href=\"";
            // line 392
            echo PhpMyAdmin\Url::getFromRoute("/table/maintenance/repair");
            echo "\" data-post=\"";
            echo PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [0 => ($context["table"] ?? null)]], "", false);
            echo "\">
          ";
echo _gettext("Repair table");
            // line 394
            echo "        </a>
        ";
            // line 395
            echo PhpMyAdmin\Html\MySQLDocumentation::show("REPAIR_TABLE");
            echo "
      </li>
    ";
        }
        // line 398
        echo "  </ul>
</div>

";
        // line 401
        if ( !($context["is_system_schema"] ?? null)) {
            // line 402
            echo "  <div class=\"card mb-2\">
    <div class=\"card-header\">";
echo _gettext("Delete data or table");
            // line 403
            echo "</div>
    <ul class=\"list-group list-group-flush\">
      ";
            // line 405
            if ( !($context["is_view"] ?? null)) {
                // line 406
                echo "        <li class=\"list-group-item\">
          ";
                // line 407
                echo PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), twig_array_merge(                // line 409
($context["url_params"] ?? null), ["sql_query" => ((("TRUNCATE TABLE " . PhpMyAdmin\Util::backquote(                // line 410
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null))), "goto" => PhpMyAdmin\Url::getFromRoute("/table/structure"), "reload" => true, "message_to_show" => twig_escape_filter($this->env, twig_sprintf(_gettext("Table %s has been emptied."),                 // line 413
($context["table"] ?? null)))]), _gettext("Empty the table (TRUNCATE)"), ["id" => "truncate_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("TRUNCATE TABLE " . PhpMyAdmin\Util::backquote(                // line 419
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null)))]);
                // line 421
                echo "
          ";
                // line 422
                echo PhpMyAdmin\Html\MySQLDocumentation::show("TRUNCATE_TABLE");
                echo "
        </li>
        <li class=\"list-group-item\">
          ";
                // line 425
                echo PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), twig_array_merge(                // line 427
($context["url_params"] ?? null), ["sql_query" => ((("DELETE FROM " . PhpMyAdmin\Util::backquote(                // line 428
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null))), "goto" => PhpMyAdmin\Url::getFromRoute("/table/structure"), "reload" => true, "message_to_show" => twig_escape_filter($this->env, twig_sprintf(_gettext("Table %s has been emptied."),                 // line 431
($context["table"] ?? null)))]), _gettext("Empty the table (DELETE FROM)"), ["id" => "delete_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("DELETE FROM " . PhpMyAdmin\Util::backquote(                // line 437
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null)))]);
                // line 439
                echo "
          ";
                // line 440
                echo PhpMyAdmin\Html\MySQLDocumentation::show("DELETE");
                echo "
        </li>
      ";
            }
            // line 443
            echo "      <li class=\"list-group-item\">
        ";
            // line 444
            echo PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), twig_array_merge(            // line 446
($context["url_params"] ?? null), ["sql_query" => ((("DROP TABLE " . PhpMyAdmin\Util::backquote(            // line 447
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null))), "goto" => PhpMyAdmin\Url::getFromRoute("/database/operations"), "reload" => true, "purge" => true, "message_to_show" => ((            // line 451
($context["is_view"] ?? null)) ? (twig_escape_filter($this->env, twig_sprintf(_gettext("View %s has been dropped."), ($context["table"] ?? null)))) : (twig_escape_filter($this->env, twig_sprintf(_gettext("Table %s has been dropped."), ($context["table"] ?? null))))), "table" =>             // line 452
($context["table"] ?? null)]), _gettext("Delete the table (DROP)"), ["id" => "drop_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("DROP TABLE " . PhpMyAdmin\Util::backquote(            // line 458
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null)))]);
            // line 460
            echo "
        ";
            // line 461
            echo PhpMyAdmin\Html\MySQLDocumentation::show("DROP_TABLE");
            echo "
      </li>
    </ul>
  </div>
";
        }
        // line 466
        echo "
";
        // line 467
        if ( !twig_test_empty(($context["partitions"] ?? null))) {
            // line 468
            echo "  <form id=\"partitionsForm\" class=\"ajax\" method=\"post\" action=\"";
            echo PhpMyAdmin\Url::getFromRoute("/table/operations");
            echo "\">
    ";
            // line 469
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            echo "
    <input type=\"hidden\" name=\"submit_partition\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">
        ";
echo _gettext("Partition maintenance");
            // line 475
            echo "        ";
            echo PhpMyAdmin\Html\MySQLDocumentation::show("partitioning_maintenance");
            echo "
      </div>

      <div class=\"card-body\">
        <div class=\"mb-3\">
          <label for=\"partition_name\">";
echo _gettext("Partition");
            // line 480
            echo "</label>
          <select class=\"form-select resize-vertical\" id=\"partition_name\" name=\"partition_name[]\" multiple required>
            ";
            // line 482
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["partitions"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
                // line 483
                echo "              <option value=\"";
                echo twig_escape_filter($this->env, $context["partition"], "html", null, true);
                echo "\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 483)) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $context["partition"], "html", null, true);
                echo "</option>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 485
            echo "          </select>
        </div>

        <div class=\"mb-3 form-check-inline\">
          ";
            // line 489
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["partitions_choices"] ?? null));
            foreach ($context['_seq'] as $context["value"] => $context["description"]) {
                // line 490
                echo "            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"partition_operation\" id=\"partitionOperationRadio";
                // line 491
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["value"]), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
                echo ((($context["value"] == "ANALYZE")) ? (" checked") : (""));
                echo ">
              <label class=\"form-check-label\" for=\"partitionOperationRadio";
                // line 492
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["value"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["description"], "html", null, true);
                echo "</label>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 495
            echo "        </div>

        <div class=\"form-text\">
          <a href=\"";
            // line 498
            echo PhpMyAdmin\Url::getFromRoute("/sql", twig_array_merge(($context["url_params"] ?? null), ["sql_query" => (("ALTER TABLE " . PhpMyAdmin\Util::backquote(            // line 499
($context["table"] ?? null))) . " REMOVE PARTITIONING;")]));
            // line 500
            echo "\">";
echo _gettext("Remove partitioning");
            echo "</a>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Go");
            // line 505
            echo "\">
      </div>
    </div>
  </form>
";
        }
        // line 510
        echo "
";
        // line 511
        if ( !twig_test_empty(($context["foreigners"] ?? null))) {
            // line 512
            echo "  <div class=\"card mb-2\">
    <div class=\"card-header\">";
echo _gettext("Check referential integrity");
            // line 513
            echo "</div>
    <ul class=\"list-group list-group-flush\">
      ";
            // line 515
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["foreigners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["foreign"]) {
                // line 516
                echo "        <li class=\"list-group-item\">
          <a class=\"text-nowrap\" href=\"";
                // line 517
                echo PhpMyAdmin\Url::getFromRoute("/sql", twig_get_attribute($this->env, $this->source, $context["foreign"], "params", [], "any", false, false, false, 517));
                echo "\">
            ";
                // line 518
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foreign"], "master", [], "any", false, false, false, 518), "html", null, true);
                echo " -> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foreign"], "db", [], "any", false, false, false, 518), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foreign"], "table", [], "any", false, false, false, 518), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foreign"], "field", [], "any", false, false, false, 518), "html", null, true);
                echo "
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foreign'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 522
            echo "    </ul>
  </div>
";
        }
        // line 525
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "table/operations/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1136 => 525,  1131 => 522,  1115 => 518,  1111 => 517,  1108 => 516,  1104 => 515,  1100 => 513,  1096 => 512,  1094 => 511,  1091 => 510,  1084 => 505,  1074 => 500,  1072 => 499,  1071 => 498,  1066 => 495,  1055 => 492,  1047 => 491,  1044 => 490,  1040 => 489,  1034 => 485,  1013 => 483,  996 => 482,  992 => 480,  982 => 475,  973 => 469,  968 => 468,  966 => 467,  963 => 466,  955 => 461,  952 => 460,  950 => 458,  949 => 452,  948 => 451,  947 => 447,  946 => 446,  945 => 444,  942 => 443,  936 => 440,  933 => 439,  931 => 437,  930 => 431,  929 => 428,  928 => 427,  927 => 425,  921 => 422,  918 => 421,  916 => 419,  915 => 413,  914 => 410,  913 => 409,  912 => 407,  909 => 406,  907 => 405,  903 => 403,  899 => 402,  897 => 401,  892 => 398,  886 => 395,  883 => 394,  876 => 392,  873 => 391,  871 => 390,  868 => 389,  862 => 386,  859 => 385,  852 => 383,  849 => 382,  847 => 381,  841 => 378,  838 => 377,  834 => 375,  832 => 373,  831 => 372,  828 => 371,  824 => 369,  818 => 366,  815 => 365,  808 => 363,  805 => 362,  803 => 361,  797 => 358,  794 => 357,  787 => 355,  783 => 353,  777 => 350,  774 => 349,  767 => 347,  764 => 346,  762 => 345,  759 => 344,  753 => 341,  750 => 340,  743 => 338,  740 => 337,  738 => 336,  734 => 334,  725 => 328,  716 => 322,  711 => 321,  702 => 316,  695 => 313,  689 => 312,  685 => 309,  680 => 306,  675 => 304,  673 => 303,  668 => 300,  659 => 295,  650 => 288,  642 => 282,  634 => 276,  619 => 266,  616 => 265,  608 => 263,  604 => 261,  591 => 259,  587 => 258,  582 => 257,  580 => 256,  573 => 251,  565 => 247,  561 => 246,  554 => 241,  548 => 238,  542 => 234,  529 => 232,  525 => 231,  517 => 225,  515 => 224,  512 => 223,  505 => 219,  498 => 214,  496 => 213,  493 => 212,  486 => 208,  478 => 203,  475 => 202,  473 => 201,  470 => 200,  463 => 196,  455 => 191,  452 => 190,  450 => 189,  447 => 188,  439 => 183,  435 => 182,  431 => 181,  423 => 175,  421 => 174,  415 => 170,  407 => 165,  400 => 163,  391 => 160,  382 => 159,  378 => 158,  371 => 157,  367 => 156,  360 => 151,  351 => 145,  344 => 143,  342 => 142,  339 => 141,  330 => 140,  326 => 139,  317 => 134,  306 => 126,  301 => 123,  289 => 116,  282 => 113,  276 => 112,  270 => 108,  265 => 105,  258 => 101,  253 => 99,  247 => 97,  245 => 96,  241 => 95,  235 => 92,  231 => 91,  224 => 86,  213 => 80,  206 => 77,  200 => 76,  195 => 72,  182 => 65,  179 => 64,  171 => 62,  167 => 60,  154 => 58,  150 => 57,  145 => 56,  143 => 55,  136 => 50,  127 => 45,  123 => 44,  120 => 43,  113 => 38,  103 => 31,  96 => 27,  87 => 21,  82 => 18,  71 => 16,  67 => 15,  63 => 13,  56 => 9,  48 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/operations/index.twig", "C:\\wamp64\\www\\admin\\templates\\table\\operations\\index.twig");
    }
}
