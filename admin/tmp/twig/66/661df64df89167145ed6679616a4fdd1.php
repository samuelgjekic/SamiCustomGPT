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

/* view_create.twig */
class __TwigTemplate_3dd83e2634fc7f1d594e2d9967674659 extends Template
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
        echo "<!-- CREATE VIEW options -->
<div id=\"div_view_options\">
    <form method=\"post\" action=\"";
        // line 3
        echo PhpMyAdmin\Url::getFromRoute("/view/create");
        echo "\">
    ";
        // line 4
        echo PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
        echo "
    <fieldset class=\"pma-fieldset\">
        <legend>
            ";
        // line 7
        if (($context["ajax_dialog"] ?? null)) {
            // line 8
            echo "                ";
echo _gettext("Details");
            // line 9
            echo "            ";
        } else {
            // line 10
            echo "                ";
            if (((($__internal_compile_0 = ($context["view"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["operation"] ?? null) : null) == "create")) {
                // line 11
                echo "                    ";
echo _gettext("Create view");
                // line 12
                echo "                ";
            } else {
                // line 13
                echo "                    ";
echo _gettext("Edit view");
                // line 14
                echo "                ";
            }
            // line 15
            echo "            ";
        }
        // line 16
        echo "        </legend>
        <table class=\"table align-middle rte_table\">
            ";
        // line 18
        if (((($__internal_compile_1 = ($context["view"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["operation"] ?? null) : null) == "create")) {
            // line 19
            echo "                <tr>
                    <td class=\"text-nowrap\"><label for=\"or_replace\">OR REPLACE</label></td>
                    <td>
                        <input type=\"checkbox\" name=\"view[or_replace]\" id=\"or_replace\"
                            ";
            // line 23
            if ((($__internal_compile_2 = ($context["view"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["or_replace"] ?? null) : null)) {
                echo " checked=\"checked\" ";
            }
            // line 24
            echo "                            value=\"1\">
                    </td>
                </tr>
            ";
        }
        // line 28
        echo "
            <tr>
                <td class=\"text-nowrap\"><label for=\"algorithm\">ALGORITHM</label></td>
                <td>
                    <select name=\"view[algorithm]\" id=\"algorithm\">
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["view_algorithm_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 34
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\"
                                ";
            // line 35
            if (((($__internal_compile_3 = ($context["view"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["algorithm"] ?? null) : null) == $context["option"])) {
                // line 36
                echo "                                    selected=\"selected\"
                                ";
            }
            // line 38
            echo "                            >";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </select>
                </td>
            </tr>

            <tr>
                <td class=\"text-nowrap\">";
echo _gettext("Definer");
        // line 45
        echo "</td>
                <td><input type=\"text\" maxlength=\"100\" size=\"50\" name=\"view[definer]\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["view"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["definer"] ?? null) : null), "html", null, true);
        echo "\"></td>
            </tr>

            <tr>
                <td class=\"text-nowrap\">SQL SECURITY</td>
                <td>
                    <select name=\"view[sql_security]\">
                        <option value=\"\"></option>
                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["view_security_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 55
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\"
                                ";
            // line 56
            if (($context["option"] == (($__internal_compile_5 = ($context["view"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["sql_security"] ?? null) : null))) {
                echo " selected=\"selected\" ";
            }
            // line 57
            echo "                            >";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </select>
                </td>
            </tr>

            ";
        // line 63
        if (((($__internal_compile_6 = ($context["view"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["operation"] ?? null) : null) == "create")) {
            // line 64
            echo "                <tr>
                    <td class=\"text-nowrap\">";
echo _gettext("VIEW name");
            // line 65
            echo "</td>
                    <td>
                        <input type=\"text\" size=\"20\" name=\"view[name]\" onfocus=\"this.select()\" maxlength=\"64\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["view"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["name"] ?? null) : null), "html", null, true);
            echo "\">
                    </td>
                </tr>
            ";
        } else {
            // line 71
            echo "                <tr>
                    <td>
                        <input type=\"hidden\" name=\"view[name]\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, (($__internal_compile_8 = ($context["view"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["name"] ?? null) : null), "html", null, true);
            echo "\">
                    </td>
                </tr>
            ";
        }
        // line 77
        echo "
            <tr>
                <td class=\"text-nowrap\">";
echo _gettext("Column names");
        // line 79
        echo "</td>
                <td>
                    <input type=\"text\" maxlength=\"100\" size=\"50\" name=\"view[column_names]\" onfocus=\"this.select()\"  value=\"";
        // line 81
        echo twig_escape_filter($this->env, (($__internal_compile_9 = ($context["view"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["column_names"] ?? null) : null), "html", null, true);
        echo "\">
                </td>
            </tr>

            <tr>
                <td class=\"text-nowrap\">AS</td>
                <td>
                    <textarea name=\"view[as]\" id=\"view_as\" rows=\"15\" cols=\"40\" dir=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["text_dir"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_compile_10 = ($context["view"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["as"] ?? null) : null), "html", null, true);
        echo "</textarea><br>
                    <input type=\"button\" value=\"Format\" id=\"format\" class=\"btn btn-secondary button sqlbutton\">
                    <span id=\"querymessage\"></span>
                </td>
            </tr>

            <tr>
                <td class=\"text-nowrap\">WITH CHECK OPTION</td>
                <td>
                    <select name=\"view[with]\">
                        <option value=\"\"></option>
                        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["view_with_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 100
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\"
                                ";
            // line 101
            if (($context["option"] == (($__internal_compile_11 = ($context["view"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["with"] ?? null) : null))) {
                echo " selected=\"selected\" ";
            }
            // line 102
            echo "                            >";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                    </select>
                </td>
            </tr>

        </table>
    </fieldset>

    <input type=\"hidden\" name=\"ajax_request\" value=\"1\" />
    <input type=\"hidden\" name=\"";
        // line 112
        echo ((((($__internal_compile_12 = ($context["view"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["operation"] ?? null) : null) == "create")) ? ("createview") : ("alterview"));
        echo "\" value=\"1\" />

    ";
        // line 114
        if ((($context["ajax_dialog"] ?? null) == false)) {
            // line 115
            echo "        <input type=\"hidden\" name=\"ajax_dialog\" value=\"1\" />
        <input type=\"submit\" class=\"btn btn-primary\" name=\"\" value=\"";
echo _gettext("Go");
            // line 116
            echo "\" />
    ";
        }
        // line 118
        echo "
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "view_create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 118,  286 => 116,  282 => 115,  280 => 114,  275 => 112,  265 => 104,  256 => 102,  252 => 101,  247 => 100,  243 => 99,  227 => 88,  217 => 81,  213 => 79,  208 => 77,  201 => 73,  197 => 71,  190 => 67,  186 => 65,  182 => 64,  180 => 63,  174 => 59,  165 => 57,  161 => 56,  156 => 55,  152 => 54,  141 => 46,  138 => 45,  130 => 40,  121 => 38,  117 => 36,  115 => 35,  110 => 34,  106 => 33,  99 => 28,  93 => 24,  89 => 23,  83 => 19,  81 => 18,  77 => 16,  74 => 15,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "view_create.twig", "D:\\wamp\\www\\admin\\templates\\view_create.twig");
    }
}
