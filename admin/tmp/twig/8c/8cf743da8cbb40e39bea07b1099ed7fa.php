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

/* table/page_with_secondary_tabs.twig */
class __TwigTemplate_0da022a93ebce08b011c00a38973d1be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "relationFeature", [], "any", false, false, false, 1)) || ($context["is_foreign_key_supported"] ?? null))) {
            // line 2
            echo "  <ul class=\"nav nav-pills m-2 d-print-none\">
    <li class=\"nav-item\">
      <a href=\"";
            // line 4
            echo PhpMyAdmin\Url::getFromRoute("/table/structure", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
            echo "\" id=\"table_structure_id\" class=\"nav-link";
            echo (((($context["route"] ?? null) == "/table/structure")) ? (" active") : (""));
            echo "\">
        ";
            // line 5
            echo PhpMyAdmin\Html\Generator::getIcon("b_props", _gettext("Table structure"), true);
            echo "
      </a>
    </li>

    <li class=\"nav-item\">
      <a href=\"";
            // line 10
            echo PhpMyAdmin\Url::getFromRoute("/table/relation", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
            echo "\" id=\"table_relation_id\" class=\"nav-link";
            echo (((($context["route"] ?? null) == "/table/relation")) ? (" active") : (""));
            echo "\">
        ";
            // line 11
            echo PhpMyAdmin\Html\Generator::getIcon("b_relations", _gettext("Relation view"), true);
            echo "
      </a>
    </li>
  </ul>
";
        }
        // line 16
        echo "
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getRuntime('PhpMyAdmin\FlashMessages')->getMessages());
        foreach ($context['_seq'] as $context["flash_key"] => $context["flash_messages"]) {
            // line 18
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flash_messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 19
                echo "    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["flash_key"], "html", null, true);
                echo "\" role=\"alert\">
      ";
                // line 20
                echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
                echo "
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['flash_key'], $context['flash_messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
<div id=\"structure_content\">
  ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "</div>
";
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "table/page_with_secondary_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 26,  108 => 27,  106 => 26,  102 => 24,  89 => 20,  84 => 19,  79 => 18,  75 => 17,  72 => 16,  64 => 11,  58 => 10,  50 => 5,  44 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/page_with_secondary_tabs.twig", "C:\\wamp64\\www\\admin\\templates\\table\\page_with_secondary_tabs.twig");
    }
}
