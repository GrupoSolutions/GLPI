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

/* @formcreator/field/fieldsfield.html.twig */
class __TwigTemplate_63ae60abf2b7ac3409f9ba6b66e7171eaf763cb619ea80da70978e402023075a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'questionFields' => [$this, 'block_questionFields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 30
        return "@formcreator/pages/question.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/field/fieldsfield.html.twig", 31)->unwrap();
        // line 32
        $macros["formcreatorFields"] = $this->macros["formcreatorFields"] = $this->loadTemplate("@formcreator/components/form/fields_macros.html.twig", "@formcreator/field/fieldsfield.html.twig", 32)->unwrap();
        // line 30
        $this->parent = $this->loadTemplate("@formcreator/pages/question.html.twig", "@formcreator/field/fieldsfield.html.twig", 30);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_questionFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "   ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 35), "_block_id", [], "array", true, true, false, 35)) {
            // line 36
            echo "      ";
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["blocks_field", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,             // line 38
($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["_block_id"] ?? null) : null), (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,             // line 39
($context["item"] ?? null), "fields", [], "any", false, false, false, 39)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["_block_list"] ?? null) : null), (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,             // line 40
($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["_drodpdown_block_label"] ?? null) : null), ["on_change" => "plugin_formcreator.changeQuestionType(this)", "display_emptychoice" => true, "label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 36, $context, $this->getSourceContext());
            // line 47
            echo "
   ";
        } else {
            // line 49
            echo "      ";
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 49, $context, $this->getSourceContext());
            // line 52
            echo "
   ";
        }
        // line 54
        echo "
   ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 55), "_field_name", [], "array", true, true, false, 55) && (0 !== twig_compare((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["_block_id"] ?? null) : null), 0)))) {
            // line 56
            echo "      ";
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["dropdown_fields_field", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 58
($context["item"] ?? null), "fields", [], "any", false, false, false, 58)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["_field_name"] ?? null) : null), (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,             // line 59
($context["item"] ?? null), "fields", [], "any", false, false, false, 59)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["_field_list"] ?? null) : null), (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,             // line 60
($context["item"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["_drodpdown_field_label"] ?? null) : null), ["display_emptychoice" => true, "label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 56, $context, $this->getSourceContext());
            // line 66
            echo "
   ";
        } else {
            // line 68
            echo "      ";
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 68, $context, $this->getSourceContext());
            // line 71
            echo "
   ";
        }
    }

    public function getTemplateName()
    {
        return "@formcreator/field/fieldsfield.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 71,  90 => 68,  86 => 66,  84 => 60,  83 => 59,  82 => 58,  80 => 56,  78 => 55,  75 => 54,  71 => 52,  68 => 49,  64 => 47,  62 => 40,  61 => 39,  60 => 38,  58 => 36,  55 => 35,  51 => 34,  46 => 30,  44 => 32,  42 => 31,  35 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/field/fieldsfield.html.twig", "C:\\xampp\\htdocs\\glpi\\marketplace\\formcreator\\templates\\field\\fieldsfield.html.twig");
    }
}
