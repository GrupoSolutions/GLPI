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

/* components/user/link_with_tooltip.html.twig */
class __TwigTemplate_89bdf055ccaefa434b9d1fdd0a4453a0 extends Template
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
        // line 33
        echo "
";
        // line 34
        $context["rand"] = twig_random($this->env);
        // line 35
        echo "
<span id=\"user_";
        // line 36
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\">
    <i class=\"ti ti-user ms-1\"></i>
    ";
        // line 38
        echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("User", (($__internal_compile_0 = ($context["user_fields"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), ["enable_anonymization" => ($context["enable_anonymization"] ?? null)]);
        echo "
\t";
        // line 39
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["user_fields"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["firstname"] ?? null) : null), "html", null, true);
        echo "
</span>

";
        // line 42
        if ( !($context["enable_anonymization"] ?? null)) {
            // line 43
            echo "    ";
            $context["user"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null));
            // line 44
            echo "    ";
            if ( !(null === ($context["user"] ?? null))) {
                // line 45
                echo "        ";
                $context["user_fields"] = twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 45);
                // line 46
                echo "        ";
                $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["user_name" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getFriendlyName", [], "method", false, false, false, 46))]);
                // line 47
                echo "        ";
                $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["email" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 47)]);
                // line 48
                echo "        ";
                $context["firstnome"] = (($__internal_compile_2 = ($context["user_fields"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["firstname"] ?? null) : null);
                // line 49
                echo "        ";
                echo twig_escape_filter($this->env, ($context["firstnome"] ?? null), "html", null, true);
                echo "
        ";
                // line 50
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [0 => twig_include($this->env, $context, "components/user/info_card.html.twig", ["user" =>                 // line 55
($context["user_fields"] ?? null)], false), 1 => ["applyto" => ("user_" .                 // line 59
($context["rand"] ?? null))]]);
                // line 63
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "components/user/link_with_tooltip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 63,  87 => 59,  86 => 55,  85 => 50,  80 => 49,  77 => 48,  74 => 47,  71 => 46,  68 => 45,  65 => 44,  62 => 43,  60 => 42,  54 => 39,  50 => 38,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/user/link_with_tooltip.html.twig", "/var/www/html/glpi/templates/components/user/link_with_tooltip.html.twig");
    }
}
