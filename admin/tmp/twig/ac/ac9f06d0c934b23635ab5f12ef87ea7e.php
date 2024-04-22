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

/* sql/profiling_chart.twig */
class __TwigTemplate_013508ac4c85f164b5fae59ae494d72e extends Template
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
        echo "<fieldset class=\"pma-fieldset\">
  <legend>";
echo _gettext("Profiling");
        // line 2
        echo "</legend>
  <div class=\"float-start mx-2\">
    <h3>";
echo _gettext("Detailed profile");
        // line 4
        echo "</h3>
    <table class=\"table table-sm table-striped\" id=\"profiletable\">
      <thead>
      <tr>
        <th>
          ";
echo _gettext("Order");
        // line 10
        echo "          <div class=\"sorticon\"></div>
        </th>
        <th>
          ";
echo _gettext("State");
        // line 14
        echo "          <div class=\"sorticon\"></div>
        </th>
        <th>
          ";
echo _gettext("Time");
        // line 18
        echo "          <div class=\"sorticon\"></div>
        </th>
      </tr>
      </thead>
      <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profiling"] ?? null), "profile", [], "any", false, false, false, 23));
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
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 24
            echo "          <tr>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "status", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
            <td class=\"text-end\">
              ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "duration", [], "any", false, false, false, 28), "html", null, true);
            echo "s
              <span class=\"rawvalue hide\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "duration_raw", [], "any", false, false, false, 29), "html", null, true);
            echo "</span>
            </td>
          </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "      </tbody>
    </table>
  </div>

  <div class=\"float-start mx-2\">
    <h3>";
echo _gettext("Summary by state");
        // line 38
        echo PhpMyAdmin\Html\MySQLDocumentation::show("general-thread-states");
        echo "</h3>
    <table class=\"table table-sm table-striped\" id=\"profilesummarytable\">
      <thead>
      <tr>
        <th>
          ";
echo _gettext("State");
        // line 44
        echo "          <div class=\"sorticon\"></div>
        </th>
        <th>
          ";
echo _gettext("Total Time");
        // line 48
        echo "          <div class=\"sorticon\"></div>
        </th>
        <th>
          ";
echo _gettext("% Time");
        // line 52
        echo "          <div class=\"sorticon\"></div>
        </th>
        <th>
          ";
echo _gettext("Calls");
        // line 56
        echo "          <div class=\"sorticon\"></div>
        </th>
        <th>
          ";
echo _gettext("ø Time");
        // line 60
        echo "          <div class=\"sorticon\"></div>
        </th>
      </tr>
      </thead>
      <tbody>
        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profiling"] ?? null), "states", [], "any", false, false, false, 65));
        foreach ($context['_seq'] as $context["name"] => $context["stats"]) {
            // line 66
            echo "          <tr>
            <td>";
            // line 67
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</td>
            <td class=\"text-end\">
              ";
            // line 69
            echo twig_escape_filter($this->env, PhpMyAdmin\Util::formatNumber(twig_get_attribute($this->env, $this->source, $context["stats"], "total_time", [], "any", false, false, false, 69), 3, 1), "html", null, true);
            echo "s
              <span class=\"rawvalue hide\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stats"], "total_time", [], "any", false, false, false, 70), "html", null, true);
            echo "</span>
            </td>
            <td class=\"text-end\">
              ";
            // line 73
            echo twig_escape_filter($this->env, PhpMyAdmin\Util::formatNumber((100 * (twig_get_attribute($this->env, $this->source, $context["stats"], "total_time", [], "any", false, false, false, 73) / twig_get_attribute($this->env, $this->source, ($context["profiling"] ?? null), "total_time", [], "any", false, false, false, 73))), 0, 2), "html", null, true);
            echo "%
            </td>
            <td class=\"text-end\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stats"], "calls", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
            <td class=\"text-end\">
              ";
            // line 77
            echo twig_escape_filter($this->env, PhpMyAdmin\Util::formatNumber((twig_get_attribute($this->env, $this->source, $context["stats"], "total_time", [], "any", false, false, false, 77) / twig_get_attribute($this->env, $this->source, $context["stats"], "calls", [], "any", false, false, false, 77)), 3, 1), "html", null, true);
            echo "s
              <span class=\"rawvalue hide\">
                ";
            // line 79
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["stats"], "total_time", [], "any", false, false, false, 79) / twig_get_attribute($this->env, $this->source, $context["stats"], "calls", [], "any", false, false, false, 79)), 8, ".", ""), "html", null, true);
            echo "
              </span>
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['stats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "      </tbody>
    </table>
  </div>
  <div class='clearfloat'></div>

  <div id=\"profilingChartData\" class=\"hide\">";
        // line 90
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["profiling"] ?? null), "chart", [], "any", false, false, false, 90)), "html", null, true);
        // line 91
        echo "</div>
  <div id=\"profilingchart\" class=\"hide\"></div>

  <script type=\"text/javascript\">
    AJAX.registerOnload('sql.js', function () {
      Sql.makeProfilingChart();
      Sql.initProfilingTables();
    });
  </script>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "sql/profiling_chart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 91,  227 => 90,  220 => 84,  209 => 79,  204 => 77,  199 => 75,  194 => 73,  188 => 70,  184 => 69,  179 => 67,  176 => 66,  172 => 65,  165 => 60,  159 => 56,  153 => 52,  147 => 48,  141 => 44,  132 => 38,  124 => 33,  106 => 29,  102 => 28,  97 => 26,  93 => 25,  90 => 24,  73 => 23,  66 => 18,  60 => 14,  54 => 10,  46 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sql/profiling_chart.twig", "C:\\wamp64\\www\\admin\\templates\\sql\\profiling_chart.twig");
    }
}
