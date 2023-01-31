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

/* @formcreator/field/dropdownfield.html.twig */
class __TwigTemplate_66fd1f1e745084e6c9489d259bff438588d10c02a4a0a8f0525d2c19390948b3 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/field/dropdownfield.html.twig", 31)->unwrap();
        // line 32
        $macros["formcreatorFields"] = $this->macros["formcreatorFields"] = $this->loadTemplate("@formcreator/components/form/fields_macros.html.twig", "@formcreator/field/dropdownfield.html.twig", 32)->unwrap();
        // line 30
        $this->parent = $this->loadTemplate("@formcreator/pages/question.html.twig", "@formcreator/field/dropdownfield.html.twig", 30);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_questionFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    ";
        echo twig_call_macro($macros["formcreatorFields"], "macro_dropdownDropdownSubType", ["itemtype", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 37
($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), _n("Dropdown", "Dropdowns", 1), ["on_change" => "plugin_formcreator.changeQuestionType(this)", "label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 35, $context, $this->getSourceContext());
        // line 44
        echo "

    ";
        // line 46
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["required", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 48
($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["required"] ?? null) : null), __("Required", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 46, $context, $this->getSourceContext());
        // line 53
        echo "

    ";
        // line 55
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["show_empty", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 57
($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["show_empty"] ?? null) : null), __("Show empty", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 55, $context, $this->getSourceContext());
        // line 62
        echo "

    ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 64), "itemtype", [], "array", true, true, false, 64) && (0 !== twig_compare((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["itemtype"] ?? null) : null), "0")))) {
            // line 65
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [(($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 66
($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["itemtype"] ?? null) : null), "default_values", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,             // line 68
($context["item"] ?? null), "fields", [], "any", false, false, false, 68)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["default_values"] ?? null) : null), __("Default values"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 65, $context, $this->getSourceContext());
            // line 73
            echo "
    ";
        } else {
            // line 75
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 75, $context, $this->getSourceContext());
            // line 78
            echo "
    ";
        }
        // line 80
        echo "
     ";
        // line 81
        echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 81, $context, $this->getSourceContext());
        // line 84
        echo "

    ";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 86), "itemtype", [], "array", true, true, false, 86) && (0 === twig_compare((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 86)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["itemtype"] ?? null) : null), "ITILCategory")))) {
            // line 87
            echo "        ";
            echo twig_call_macro($macros["formcreatorFields"], "macro_dropdownItilCategoryFilter", ["show_ticket_categories", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 89
($context["item"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["_show_ticket_categories"] ?? null) : null), __("Show ticket categories", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 87, $context, $this->getSourceContext());
            // line 94
            echo "

     ";
            // line 96
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 96, $context, $this->getSourceContext());
            // line 99
            echo "
    ";
        }
        // line 101
        echo "
    ";
        // line 103
        echo "    ";
        if ((0 === twig_compare((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 103)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["_is_tree"] ?? null) : null), "1"))) {
            // line 104
            echo "
        ";
            // line 105
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [(($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 106
($context["item"] ?? null), "fields", [], "any", false, false, false, 106)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["itemtype"] ?? null) : null), "show_tree_root", (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 108
($context["item"] ?? null), "fields", [], "any", false, false, false, 108)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["_tree_root"] ?? null) : null), __("Subtree root", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 105, $context, $this->getSourceContext());
            // line 113
            echo "

        ";
            // line 115
            echo twig_call_macro($macros["fields"], "macro_numberField", ["show_tree_depth", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,             // line 117
($context["item"] ?? null), "fields", [], "any", false, false, false, 117)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["_show_tree_depth"] ?? null) : null), __("Limit subtree depth", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 115, $context, $this->getSourceContext());
            // line 122
            echo "

        ";
            // line 124
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["selectable_tree_root", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,             // line 126
($context["item"] ?? null), "fields", [], "any", false, false, false, 126)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["_tree_root_selectable"] ?? null) : null), __("Selectable root", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 124, $context, $this->getSourceContext());
            // line 131
            echo "

        ";
            // line 133
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 133, $context, $this->getSourceContext());
            // line 136
            echo "
    ";
        }
        // line 138
        echo "
    ";
        // line 139
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 139), "itemtype", [], "array", true, true, false, 139) && (0 === twig_compare((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 139)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["_is_entity_restrict"] ?? null) : null), "1")))) {
            // line 140
            echo "        ";
            echo twig_call_macro($macros["formcreatorFields"], "macro_dropdownEntityRestrict", ["entity_restrict", (($__internal_compile_14 = twig_get_attribute($this->env, $this->source,             // line 142
($context["item"] ?? null), "fields", [], "any", false, false, false, 142)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["_entity_restrict"] ?? null) : null), __("Entity restriction", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 140, $context, $this->getSourceContext());
            // line 148
            echo "

        ";
            // line 150
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 150, $context, $this->getSourceContext());
            // line 153
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "@formcreator/field/dropdownfield.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 153,  170 => 150,  166 => 148,  164 => 142,  162 => 140,  160 => 139,  157 => 138,  153 => 136,  151 => 133,  147 => 131,  145 => 126,  144 => 124,  140 => 122,  138 => 117,  137 => 115,  133 => 113,  131 => 108,  130 => 106,  129 => 105,  126 => 104,  123 => 103,  120 => 101,  116 => 99,  114 => 96,  110 => 94,  108 => 89,  106 => 87,  104 => 86,  100 => 84,  98 => 81,  95 => 80,  91 => 78,  88 => 75,  84 => 73,  82 => 68,  81 => 66,  79 => 65,  77 => 64,  73 => 62,  71 => 57,  70 => 55,  66 => 53,  64 => 48,  63 => 46,  59 => 44,  57 => 37,  55 => 35,  51 => 34,  46 => 30,  44 => 32,  42 => 31,  35 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/field/dropdownfield.html.twig", "C:\\xampp\\htdocs\\glpi\\marketplace\\formcreator\\templates\\field\\dropdownfield.html.twig");
    }
}
