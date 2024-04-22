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

/* select_all.twig */
class __TwigTemplate_be06e2076376a573f1b771630c1ee9d2 extends Template
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
        echo "<img class=\"selectallarrow\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath((("arrow_" . ($context["text_dir"] ?? null)) . ".png")), "html", null, true);
        echo "\"
    width=\"38\" height=\"22\" alt=\"";
echo _gettext("With selected:");
        // line 2
        echo "\">
<input type=\"checkbox\" id=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["form_name"] ?? null), "html", null, true);
        echo "_checkall\" class=\"checkall_box\"
    title=\"";
echo _gettext("Check all");
        // line 4
        echo "\">
<label for=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["form_name"] ?? null), "html", null, true);
        echo "_checkall\">";
echo _gettext("Check all");
        echo "</label>
<em class=\"with-selected\">";
echo _gettext("With selected:");
        // line 6
        echo "</em>
";
    }

    public function getTemplateName()
    {
        return "select_all.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 6,  54 => 5,  51 => 4,  46 => 3,  43 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "select_all.twig", "C:\\wamp64\\www\\admin\\templates\\select_all.twig");
    }
}
