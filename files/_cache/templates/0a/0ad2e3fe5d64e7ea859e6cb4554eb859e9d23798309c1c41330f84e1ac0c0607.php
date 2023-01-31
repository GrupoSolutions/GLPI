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

/* components/itilobject/fields/priority_matrix.html.twig */
class __TwigTemplate_84f5035fa118d06ac1447022a19e2c1c9c25c8574fc58b3cca1ae3cc6487922f extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/fields/priority_matrix.html.twig", 34)->unwrap();
        // line 35
        $context["rand"] = twig_random($this->env);
        // line 36
        echo "
";
        // line 37
        $context["urgency_options"] = twig_array_merge(($context["field_options"] ?? null), ["disabled" =>  !(        // line 38
($context["canupdate"] ?? null) || ($context["can_requester"] ?? null))]);
        // line 40
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 40), "isMandatoryField", [0 => "urgency"], "method", false, false, false, 40)) {
            // line 41
            echo "   ";
            $context["urgency_options"] = twig_array_merge(($context["urgency_options"] ?? null), ["required" => true]);
        }
        // line 45
        echo "
";
        // line 46
        echo twig_call_macro($macros["fields"], "macro_field", ["urgency", twig_get_attribute($this->env, $this->source,         // line 48
($context["item"] ?? null), "dropdownUrgency", [0 => twig_array_merge(["value" => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 49
($context["item"] ?? null), "fields", [], "any", false, false, false, 49)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["urgency"] ?? null) : null), "width" => "100%", "display" => false, "rand" =>         // line 52
($context["rand"] ?? null)],         // line 53
($context["urgency_options"] ?? null))], "method", false, false, false, 48), __("Urgency"),         // line 55
($context["field_options"] ?? null)], 46, $context, $this->getSourceContext());
        // line 56
        echo "

";
        // line 58
        $context["impact_options"] = ($context["field_options"] ?? null);
        // line 59
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 59), "isMandatoryField", [0 => "impact"], "method", false, false, false, 59)) {
            // line 60
            echo "   ";
            $context["impact_options"] = twig_array_merge(($context["impact_options"] ?? null), ["required" => true]);
        }
        // line 64
        echo "

";
        // line 66
        $context["priority_options"] = twig_array_merge(($context["field_options"] ?? null), ["disabled" =>  !        // line 67
($context["canpriority"] ?? null), "withmajor" => true]);
        // line 70
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 70), "isMandatoryField", [0 => "priority"], "method", false, false, false, 70)) {
            // line 71
            echo "   ";
            $context["priority_options"] = twig_array_merge(($context["priority_options"] ?? null), ["required" => true]);
        }
        // line 75
        echo "

<script type=\"text/javascript\">
\$(function() {
   \$('#dropdown_urgency";
        // line 79
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo ", #dropdown_impact";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on('change.select2', function (e) {
      \$.ajax({
         url: \"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/priority.php"), "html", null, true);
        echo "\",
         datatype: 'json',
         data: {
            'urgency': \$('#dropdown_urgency";
        // line 84
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').select2('data')[0].id ?? 0,
            'getJson': true,
         }
      });
   })
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/fields/priority_matrix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 84,  104 => 81,  97 => 79,  91 => 75,  87 => 71,  85 => 70,  83 => 67,  82 => 66,  78 => 64,  74 => 60,  72 => 59,  70 => 58,  66 => 56,  64 => 55,  63 => 53,  62 => 52,  61 => 49,  60 => 48,  59 => 46,  56 => 45,  52 => 41,  50 => 40,  48 => 38,  47 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/fields/priority_matrix.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\itilobject\\fields\\priority_matrix.html.twig");
    }
}
