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

/* dropdown_form.html.twig */
class __TwigTemplate_165b7a2ca81d465077f25bdc4c3e46b5d7bb86f448aaa18fe02512b7bf17235e extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "dropdown_form.html.twig", 34)->unwrap();
        // line 35
        echo "
<div class=\"asset\">
    ";
        // line 37
        echo twig_include($this->env, $context, "components/form/header.html.twig");
        echo "
    ";
        // line 38
        $context["rand"] = twig_random($this->env);
        // line 39
        echo "    ";
        $context["base_fields_params"] = (($context["fields_params"]) ?? ([]));
        // line 40
        echo "    ";
        $context["params"] = (($context["params"]) ?? ([]));
        // line 41
        echo "    ";
        $context["target"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 41) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 41)));
        // line 42
        echo "    ";
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 42) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["withtemplate"] ?? null) : null)) : (""));
        // line 43
        echo "
    <div class=\"card-body row\">
        ";
        // line 45
        $context["picture_fields"] = [0 => "picture_front", 1 => "picture_rear", 2 => "pictures"];
        // line 46
        echo "        ";
        $context["has_picture_field"] = false;
        // line 47
        echo "
        ";
        // line 49
        echo "        ";
        echo twig_call_macro($macros["fields"], "macro_autoNameField", [((twig_get_attribute($this->env, $this->source,         // line 50
($context["item"] ?? null), "isField", [0 => "designation"], "method", false, false, false, 50)) ? ("designation") : ("name")),         // line 51
($context["item"] ?? null), __("Name"),         // line 53
($context["withtemplate"] ?? null)], 49, $context, $this->getSourceContext());
        // line 54
        echo "

        ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "comment"], "method", false, false, false, 56)) {
            // line 57
            echo "            ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 59
($context["item"] ?? null), "fields", [], "any", false, false, false, 59)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber())], 57, $context, $this->getSourceContext());
            // line 61
            echo "
        ";
        }
        // line 63
        echo "
        ";
        // line 65
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["additional_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 66
            echo "            ";
            $context["fields_params"] = ($context["base_fields_params"] ?? null);
            // line 67
            echo "            ";
            $context["type"] = ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "array", true, true, false, 67)) ? (_twig_default_filter((($__internal_compile_5 = $context["field"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["type"] ?? null) : null), "")) : (""));
            // line 68
            echo "            ";
            $context["show_field"] = true;
            // line 69
            echo "            ";
            if ((((($__internal_compile_6 = $context["field"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null) == "entities_id") && ((($context["type"] ?? null) != "parent") || ((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null) == 0)))) {
                // line 70
                echo "                ";
                // line 71
                echo "                ";
                $context["show_field"] = false;
                // line 72
                echo "            ";
            }
            // line 73
            echo "            ";
            if (twig_in_filter((($__internal_compile_8 = $context["field"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["name"] ?? null) : null), ($context["picture_fields"] ?? null))) {
                // line 74
                echo "                ";
                $context["show_field"] = false;
                // line 75
                echo "            ";
            }
            // line 76
            echo "            ";
            if (($context["show_field"] ?? null)) {
                // line 77
                echo "
                ";
                // line 78
                if (((($__internal_compile_9 = $context["field"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["name"] ?? null) : null) == "header")) {
                    // line 79
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_largeTitle", [(($__internal_compile_10 = $context["field"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["label"] ?? null) : null)], 79, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif (((($__internal_compile_11 =                 // line 80
$context["field"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["name"] ?? null) : null) == "content")) {
                    // line 81
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,                     // line 83
($context["item"] ?? null), "fields", [], "any", false, false, false, 83)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["content"] ?? null) : null), (($__internal_compile_13 =                     // line 84
$context["field"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["label"] ?? null) : null), ["full_width" => true, "full_width_adapt_column" => false, "is_horizontal" => false, "enable_richtext" => true, "enable_images" => false]], 81, $context, $this->getSourceContext());
                    // line 92
                    echo "
                ";
                } elseif ((                // line 93
($context["type"] ?? null) == "UserDropdown")) {
                    // line 94
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", (($__internal_compile_14 =                     // line 96
$context["field"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["name"] ?? null) : null), (($__internal_compile_15 = twig_get_attribute($this->env, $this->source,                     // line 97
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 97)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[(($__internal_compile_16 = $context["field"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_17 =                     // line 98
$context["field"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["label"] ?? null) : null), ["entity" => (($__internal_compile_18 = twig_get_attribute($this->env, $this->source,                     // line 100
($context["item"] ?? null), "fields", [], "any", false, false, false, 100)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null), "right" => ((twig_get_attribute($this->env, $this->source,                     // line 101
$context["field"], "right", [], "array", true, true, false, 101)) ? (_twig_default_filter((($__internal_compile_19 = $context["field"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["right"] ?? null) : null), "interface")) : ("interface")), "rand" =>                     // line 102
($context["rand"] ?? null)]], 94, $context, $this->getSourceContext());
                    // line 104
                    echo "
                ";
                } elseif ((                // line 105
($context["type"] ?? null) == "dropdownValue")) {
                    // line 106
                    echo "                    ";
                    $context["dropdown_params"] = ["entity" => (($__internal_compile_20 = twig_get_attribute($this->env, $this->source,                     // line 107
($context["item"] ?? null), "fields", [], "any", false, false, false, 107)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["entities_id"] ?? null) : null)];
                    // line 109
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "condition", [], "array", true, true, false, 109)) {
                        // line 110
                        echo "                        ";
                        $context["dropdown_params"] = twig_array_merge(($context["dropdown_params"] ?? null), ["condition" => (($__internal_compile_21 = $context["field"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["condition"] ?? null) : null)]);
                        // line 111
                        echo "                    ";
                    }
                    // line 112
                    echo "                    ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemtypeForForeignKeyField", [0 => (($__internal_compile_22 = $context["field"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["name"] ?? null) : null)]);
                    // line 113
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownField", [($context["dropdown_itemtype"] ?? null), (($__internal_compile_23 = $context["field"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["name"] ?? null) : null), (($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 113)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[(($__internal_compile_25 = $context["field"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_26 = $context["field"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["label"] ?? null) : null), ($context["dropdown_params"] ?? null)], 113, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 114
($context["type"] ?? null) == "text")) {
                    // line 115
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_autoNameField", [(($__internal_compile_27 = $context["field"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["name"] ?? null) : null), ($context["item"] ?? null), (($__internal_compile_28 = $context["field"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["label"] ?? null) : null), ($context["withtemplate"] ?? null), ($context["fields_params"] ?? null)], 115, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 116
($context["type"] ?? null) == "textarea")) {
                    // line 117
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [(($__internal_compile_29 = $context["field"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["name"] ?? null) : null), (($__internal_compile_30 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 117)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[(($__internal_compile_31 = $context["field"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_32 = $context["field"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["label"] ?? null) : null), ($context["fields_params"] ?? null)], 117, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 118
($context["type"] ?? null) == "integer")) {
                    // line 119
                    echo "                    ";
                    $context["fields_params"] = ["value" => (($__internal_compile_33 = twig_get_attribute($this->env, $this->source,                     // line 120
($context["item"] ?? null), "fields", [], "any", false, false, false, 120)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[(($__internal_compile_34 = $context["field"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["name"] ?? null) : null)] ?? null) : null)];
                    // line 122
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "min", [], "array", true, true, false, 122)) {
                        // line 123
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["min" => (($__internal_compile_35 = $context["field"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["min"] ?? null) : null)]);
                        // line 124
                        echo "                    ";
                    }
                    // line 125
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "step", [], "array", true, true, false, 125)) {
                        // line 126
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["step" => (($__internal_compile_36 = $context["field"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["step"] ?? null) : null)]);
                        // line 127
                        echo "                    ";
                    }
                    // line 128
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "max", [], "array", true, true, false, 128)) {
                        // line 129
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["max" => (($__internal_compile_37 = $context["field"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["max"] ?? null) : null)]);
                        // line 130
                        echo "                    ";
                    }
                    // line 131
                    echo "
                    ";
                    // line 132
                    $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["type" => "number"]);
                    // line 133
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_numberField", [(($__internal_compile_38 = $context["field"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["name"] ?? null) : null), (($__internal_compile_39 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 133)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[(($__internal_compile_40 = $context["field"]) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_41 = $context["field"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["label"] ?? null) : null), ($context["fields_params"] ?? null)], 133, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 134
($context["type"] ?? null) == "timestamp")) {
                    // line 135
                    echo "                    ";
                    $context["fields_params"] = ["value" => (($__internal_compile_42 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 135)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[(($__internal_compile_43 = $context["field"]) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["name"] ?? null) : null)] ?? null) : null)];
                    // line 136
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "min", [], "array", true, true, false, 136)) {
                        // line 137
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["min" => (($__internal_compile_44 = $context["field"]) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["min"] ?? null) : null)]);
                        // line 138
                        echo "                    ";
                    }
                    // line 139
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "step", [], "array", true, true, false, 139)) {
                        // line 140
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["step" => (($__internal_compile_45 = $context["field"]) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["step"] ?? null) : null)]);
                        // line 141
                        echo "                    ";
                    }
                    // line 142
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "max", [], "array", true, true, false, 142)) {
                        // line 143
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["max" => (($__internal_compile_46 = $context["field"]) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["max"] ?? null) : null)]);
                        // line 144
                        echo "                    ";
                    }
                    // line 145
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", [(($__internal_compile_47 = $context["field"]) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["name"] ?? null) : null), (($__internal_compile_48 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 145)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[(($__internal_compile_49 = $context["field"]) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_50 = $context["field"]) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["label"] ?? null) : null), ($context["fields_params"] ?? null)], 145, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 146
($context["type"] ?? null) == "parent")) {
                    // line 147
                    echo "                    ";
                    $context["restrict"] = ((((($__internal_compile_51 = $context["field"]) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["name"] ?? null) : null) == "entities_id")) ? ( -1) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 147)));
                    // line 148
                    echo "                    ";
                    $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["entity" => ($context["restrict"] ?? null)]);
                    // line 149
                    echo "                    ";
                    $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["used" => ((((($__internal_compile_52 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 149)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["id"] ?? null) : null) > 0)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getSonsOf", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTable", [], "method", false, false, false, 149), 1 => (($__internal_compile_53 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 149)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["id"] ?? null) : null)])) : ([]))]);
                    // line 150
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownField", [($context["item"] ?? null), (($__internal_compile_54 = $context["field"]) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["name"] ?? null) : null), (($__internal_compile_55 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 150)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[(($__internal_compile_56 = $context["field"]) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_57 = $context["field"]) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["label"] ?? null) : null), ($context["fields_params"] ?? null)], 150, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 151
($context["type"] ?? null) == "icon")) {
                    // line 152
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownIcons", [(($__internal_compile_58 = $context["field"]) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58["name"] ?? null) : null), (($__internal_compile_59 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 152)) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59[(($__internal_compile_60 = $context["field"]) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_61 = $context["field"]) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61["label"] ?? null) : null), ($context["fields_params"] ?? null)], 152, $context, $this->getSourceContext());
                    echo "
                    ";
                    // line 153
                    if ( !twig_test_empty((($__internal_compile_62 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 153)) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62[(($__internal_compile_63 = $context["field"]) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63["name"] ?? null) : null)] ?? null) : null))) {
                        // line 154
                        echo "                        <img class=\"align-middle\" alt=\"\" src=\"";
                        echo twig_escape_filter($this->env, (($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("typedoc_icon_dir") . "/") . (($__internal_compile_64 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 154)) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64[(($__internal_compile_65 = $context["field"]) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65["name"] ?? null) : null)] ?? null) : null)), "html", null, true);
                        echo "\"/>
                    ";
                    }
                    // line 156
                    echo "                ";
                } elseif ((($context["type"] ?? null) == "bool")) {
                    // line 157
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", [(($__internal_compile_66 = $context["field"]) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66["name"] ?? null) : null), (($__internal_compile_67 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 157)) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67[(($__internal_compile_68 = $context["field"]) && is_array($__internal_compile_68) || $__internal_compile_68 instanceof ArrayAccess ? ($__internal_compile_68["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_69 = $context["field"]) && is_array($__internal_compile_69) || $__internal_compile_69 instanceof ArrayAccess ? ($__internal_compile_69["label"] ?? null) : null), ($context["fields_params"] ?? null)], 157, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 158
($context["type"] ?? null) == "color")) {
                    // line 159
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_colorField", [(($__internal_compile_70 = $context["field"]) && is_array($__internal_compile_70) || $__internal_compile_70 instanceof ArrayAccess ? ($__internal_compile_70["name"] ?? null) : null), (($__internal_compile_71 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 159)) && is_array($__internal_compile_71) || $__internal_compile_71 instanceof ArrayAccess ? ($__internal_compile_71[(($__internal_compile_72 = $context["field"]) && is_array($__internal_compile_72) || $__internal_compile_72 instanceof ArrayAccess ? ($__internal_compile_72["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_73 = $context["field"]) && is_array($__internal_compile_73) || $__internal_compile_73 instanceof ArrayAccess ? ($__internal_compile_73["label"] ?? null) : null), ($context["fields_params"] ?? null)], 159, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 160
($context["type"] ?? null) == "date")) {
                    // line 161
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dateField", [(($__internal_compile_74 = $context["field"]) && is_array($__internal_compile_74) || $__internal_compile_74 instanceof ArrayAccess ? ($__internal_compile_74["name"] ?? null) : null), (($__internal_compile_75 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 161)) && is_array($__internal_compile_75) || $__internal_compile_75 instanceof ArrayAccess ? ($__internal_compile_75[(($__internal_compile_76 = $context["field"]) && is_array($__internal_compile_76) || $__internal_compile_76 instanceof ArrayAccess ? ($__internal_compile_76["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_77 = $context["field"]) && is_array($__internal_compile_77) || $__internal_compile_77 instanceof ArrayAccess ? ($__internal_compile_77["label"] ?? null) : null), ($context["fields_params"] ?? null)], 161, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 162
($context["type"] ?? null) == "datetime")) {
                    // line 163
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_datetimeField", [(($__internal_compile_78 = $context["field"]) && is_array($__internal_compile_78) || $__internal_compile_78 instanceof ArrayAccess ? ($__internal_compile_78["name"] ?? null) : null), (($__internal_compile_79 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 163)) && is_array($__internal_compile_79) || $__internal_compile_79 instanceof ArrayAccess ? ($__internal_compile_79[(($__internal_compile_80 = $context["field"]) && is_array($__internal_compile_80) || $__internal_compile_80 instanceof ArrayAccess ? ($__internal_compile_80["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_81 = $context["field"]) && is_array($__internal_compile_81) || $__internal_compile_81 instanceof ArrayAccess ? ($__internal_compile_81["label"] ?? null) : null), ($context["fields_params"] ?? null)], 163, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 164
($context["type"] ?? null) == "picture")) {
                    // line 165
                    echo "                    ";
                    if ( !twig_test_empty((($__internal_compile_82 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 165)) && is_array($__internal_compile_82) || $__internal_compile_82 instanceof ArrayAccess ? ($__internal_compile_82[(($__internal_compile_83 = $context["field"]) && is_array($__internal_compile_83) || $__internal_compile_83 instanceof ArrayAccess ? ($__internal_compile_83["name"] ?? null) : null)] ?? null) : null))) {
                        // line 166
                        echo "                        ";
                        echo twig_call_macro($macros["fields"], "macro_imageField", [(($__internal_compile_84 = $context["field"]) && is_array($__internal_compile_84) || $__internal_compile_84 instanceof ArrayAccess ? ($__internal_compile_84["name"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl((($__internal_compile_85 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 166)) && is_array($__internal_compile_85) || $__internal_compile_85 instanceof ArrayAccess ? ($__internal_compile_85[(($__internal_compile_86 = $context["field"]) && is_array($__internal_compile_86) || $__internal_compile_86 instanceof ArrayAccess ? ($__internal_compile_86["name"] ?? null) : null)] ?? null) : null)), (($__internal_compile_87 = $context["field"]) && is_array($__internal_compile_87) || $__internal_compile_87 instanceof ArrayAccess ? ($__internal_compile_87["label"] ?? null) : null), twig_array_merge(($context["fields_params"] ?? null), ["clearable" => ( !twig_get_attribute($this->env, $this->source,                         // line 167
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 167) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 167))])], 166, $context, $this->getSourceContext());
                        // line 168
                        echo "
                    ";
                    } else {
                        // line 170
                        echo "                        ";
                        echo twig_call_macro($macros["fields"], "macro_fileField", [(($__internal_compile_88 = $context["field"]) && is_array($__internal_compile_88) || $__internal_compile_88 instanceof ArrayAccess ? ($__internal_compile_88["name"] ?? null) : null), null, (($__internal_compile_89 = $context["field"]) && is_array($__internal_compile_89) || $__internal_compile_89 instanceof ArrayAccess ? ($__internal_compile_89["label"] ?? null) : null), ["onlyimages" => true]], 170, $context, $this->getSourceContext());
                        // line 172
                        echo "
                    ";
                    }
                    // line 174
                    echo "                ";
                } elseif ((($context["type"] ?? null) == "picture_gallery")) {
                    // line 175
                    echo "                    ";
                    $context["pictures"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("importArrayFromDB", [0 => (($__internal_compile_90 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 175)) && is_array($__internal_compile_90) || $__internal_compile_90 instanceof ArrayAccess ? ($__internal_compile_90[(($__internal_compile_91 = $context["field"]) && is_array($__internal_compile_91) || $__internal_compile_91 instanceof ArrayAccess ? ($__internal_compile_91["name"] ?? null) : null)] ?? null) : null)]);
                    // line 176
                    echo "                    ";
                    $context["picture_urls"] = [];
                    // line 177
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["pictures"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                        // line 178
                        echo "                        ";
                        $context["picture_urls"] = twig_array_merge(($context["picture_urls"] ?? null), [0 => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl($context["picture"])]);
                        // line 179
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 180
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_imageGalleryField", [(($__internal_compile_92 = $context["field"]) && is_array($__internal_compile_92) || $__internal_compile_92 instanceof ArrayAccess ? ($__internal_compile_92["name"] ?? null) : null), ($context["picture_urls"] ?? null), (($__internal_compile_93 = $context["field"]) && is_array($__internal_compile_93) || $__internal_compile_93 instanceof ArrayAccess ? ($__internal_compile_93["label"] ?? null) : null), twig_array_merge(($context["fields_params"] ?? null), ["clearable" => ( !twig_get_attribute($this->env, $this->source,                     // line 181
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 181) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 181))])], 180, $context, $this->getSourceContext());
                    // line 182
                    echo "
                ";
                } elseif ((                // line 183
($context["type"] ?? null) == "password")) {
                    // line 184
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_passwordField", [(($__internal_compile_94 = $context["field"]) && is_array($__internal_compile_94) || $__internal_compile_94 instanceof ArrayAccess ? ($__internal_compile_94["name"] ?? null) : null), (($__internal_compile_95 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 184)) && is_array($__internal_compile_95) || $__internal_compile_95 instanceof ArrayAccess ? ($__internal_compile_95[(($__internal_compile_96 = $context["field"]) && is_array($__internal_compile_96) || $__internal_compile_96 instanceof ArrayAccess ? ($__internal_compile_96["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_97 = $context["field"]) && is_array($__internal_compile_97) || $__internal_compile_97 instanceof ArrayAccess ? ($__internal_compile_97["label"] ?? null) : null), ($context["fields_params"] ?? null)], 184, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 185
($context["type"] ?? null) == "tinymce")) {
                    // line 186
                    echo "                    ";
                    $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["enable_richtext" => true]);
                    // line 187
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [(($__internal_compile_98 = $context["field"]) && is_array($__internal_compile_98) || $__internal_compile_98 instanceof ArrayAccess ? ($__internal_compile_98["name"] ?? null) : null), (($__internal_compile_99 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 187)) && is_array($__internal_compile_99) || $__internal_compile_99 instanceof ArrayAccess ? ($__internal_compile_99[(($__internal_compile_100 = $context["field"]) && is_array($__internal_compile_100) || $__internal_compile_100 instanceof ArrayAccess ? ($__internal_compile_100["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_101 = $context["field"]) && is_array($__internal_compile_101) || $__internal_compile_101 instanceof ArrayAccess ? ($__internal_compile_101["label"] ?? null) : null), ($context["fields_params"] ?? null)], 187, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 188
($context["type"] ?? null) == "duration")) {
                    // line 189
                    echo "                    ";
                    $context["toadd"] = [];
                    // line 190
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(9, 100));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 191
                        echo "                        ";
                        $context["toadd"] = twig_array_merge(($context["toadd"] ?? null), [0 => ($context["i"] * twig_constant("HOUR_TIMESTAMP"))]);
                        // line 192
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 193
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", [(($__internal_compile_102 = $context["field"]) && is_array($__internal_compile_102) || $__internal_compile_102 instanceof ArrayAccess ? ($__internal_compile_102["name"] ?? null) : null), (($__internal_compile_103 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 193)) && is_array($__internal_compile_103) || $__internal_compile_103 instanceof ArrayAccess ? ($__internal_compile_103[(($__internal_compile_104 = $context["field"]) && is_array($__internal_compile_104) || $__internal_compile_104 instanceof ArrayAccess ? ($__internal_compile_104["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_105 = $context["field"]) && is_array($__internal_compile_105) || $__internal_compile_105 instanceof ArrayAccess ? ($__internal_compile_105["label"] ?? null) : null), ($context["fields_params"] ?? null)], 193, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 194
($context["type"] ?? null) == "itemtypename")) {
                    // line 195
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "itemtype_list", [], "array", true, true, false, 195)) {
                        // line 196
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["types" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config((($__internal_compile_106 = $context["field"]) && is_array($__internal_compile_106) || $__internal_compile_106 instanceof ArrayAccess ? ($__internal_compile_106["itemtype_list"] ?? null) : null))]);
                        // line 197
                        echo "                    ";
                    }
                    // line 198
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownItemTypes", [(($__internal_compile_107 = $context["field"]) && is_array($__internal_compile_107) || $__internal_compile_107 instanceof ArrayAccess ? ($__internal_compile_107["name"] ?? null) : null), (($__internal_compile_108 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 198)) && is_array($__internal_compile_108) || $__internal_compile_108 instanceof ArrayAccess ? ($__internal_compile_108[(($__internal_compile_109 = $context["field"]) && is_array($__internal_compile_109) || $__internal_compile_109 instanceof ArrayAccess ? ($__internal_compile_109["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_110 = $context["field"]) && is_array($__internal_compile_110) || $__internal_compile_110 instanceof ArrayAccess ? ($__internal_compile_110["label"] ?? null) : null), ($context["fields_params"] ?? null)], 198, $context, $this->getSourceContext());
                    echo "
                ";
                } else {
                    // line 200
                    echo "                    ";
                    ob_start(function () { return ''; });
                    // line 201
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displaySpecificTypeField", [0 => (($__internal_compile_111 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 201)) && is_array($__internal_compile_111) || $__internal_compile_111 instanceof ArrayAccess ? ($__internal_compile_111["id"] ?? null) : null), 1 => $context["field"], 2 => ($context["fields_params"] ?? null)], "method", false, false, false, 201), "html", null, true);
                    echo "
                    ";
                    $context["field_value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 203
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_field", [(($__internal_compile_112 = $context["field"]) && is_array($__internal_compile_112) || $__internal_compile_112 instanceof ArrayAccess ? ($__internal_compile_112["name"] ?? null) : null), ($context["field_value"] ?? null), (($__internal_compile_113 = $context["field"]) && is_array($__internal_compile_113) || $__internal_compile_113 instanceof ArrayAccess ? ($__internal_compile_113["label"] ?? null) : null)], 203, $context, $this->getSourceContext());
                    echo "
                ";
                }
                // line 205
                echo "            ";
            } elseif (twig_in_filter((($__internal_compile_114 = $context["field"]) && is_array($__internal_compile_114) || $__internal_compile_114 instanceof ArrayAccess ? ($__internal_compile_114["name"] ?? null) : null), ($context["picture_fields"] ?? null))) {
                // line 206
                echo "                ";
                $context["has_picture_field"] = true;
                // line 207
                echo "            ";
            }
            // line 208
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "
        ";
        // line 210
        if (($context["has_picture_field"] ?? null)) {
            // line 211
            echo "            ";
            echo twig_call_macro($macros["fields"], "macro_largeTitle", [_n("Picture", "Pictures", Session::getPluralNumber()), "fas fa-image"], 211, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 213
        echo "        ";
        // line 214
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["additional_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 215
            echo "            ";
            $context["type"] = ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "array", true, true, false, 215)) ? (_twig_default_filter((($__internal_compile_115 = $context["field"]) && is_array($__internal_compile_115) || $__internal_compile_115 instanceof ArrayAccess ? ($__internal_compile_115["type"] ?? null) : null), "")) : (""));
            // line 216
            echo "            ";
            if (twig_in_filter((($__internal_compile_116 = $context["field"]) && is_array($__internal_compile_116) || $__internal_compile_116 instanceof ArrayAccess ? ($__internal_compile_116["name"] ?? null) : null), ($context["picture_fields"] ?? null))) {
                // line 217
                echo "                ";
                if ((($context["type"] ?? null) == "picture")) {
                    // line 218
                    echo "                    ";
                    if (((($__internal_compile_117 = $context["field"]) && is_array($__internal_compile_117) || $__internal_compile_117 instanceof ArrayAccess ? ($__internal_compile_117["name"] ?? null) : null) == "picture_front")) {
                        // line 219
                        echo "                        ";
                        echo twig_call_macro($macros["fields"], "macro_smallTitle", [__("Rack pictures"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Rack")], 219, $context, $this->getSourceContext());
                        echo "
                    ";
                    }
                    // line 221
                    echo "                    ";
                    if ( !twig_test_empty((($__internal_compile_118 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 221)) && is_array($__internal_compile_118) || $__internal_compile_118 instanceof ArrayAccess ? ($__internal_compile_118[(($__internal_compile_119 = $context["field"]) && is_array($__internal_compile_119) || $__internal_compile_119 instanceof ArrayAccess ? ($__internal_compile_119["name"] ?? null) : null)] ?? null) : null))) {
                        // line 222
                        echo "                        ";
                        echo twig_call_macro($macros["fields"], "macro_imageField", [(($__internal_compile_120 = $context["field"]) && is_array($__internal_compile_120) || $__internal_compile_120 instanceof ArrayAccess ? ($__internal_compile_120["name"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl((($__internal_compile_121 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 222)) && is_array($__internal_compile_121) || $__internal_compile_121 instanceof ArrayAccess ? ($__internal_compile_121[(($__internal_compile_122 = $context["field"]) && is_array($__internal_compile_122) || $__internal_compile_122 instanceof ArrayAccess ? ($__internal_compile_122["name"] ?? null) : null)] ?? null) : null)), (($__internal_compile_123 = $context["field"]) && is_array($__internal_compile_123) || $__internal_compile_123 instanceof ArrayAccess ? ($__internal_compile_123["label"] ?? null) : null), twig_array_merge(($context["base_fields_params"] ?? null), ["clearable" => twig_get_attribute($this->env, $this->source,                         // line 223
($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 223)])], 222, $context, $this->getSourceContext());
                        // line 224
                        echo "
                    ";
                    } else {
                        // line 226
                        echo "                        ";
                        echo twig_call_macro($macros["fields"], "macro_fileField", [(($__internal_compile_124 = $context["field"]) && is_array($__internal_compile_124) || $__internal_compile_124 instanceof ArrayAccess ? ($__internal_compile_124["name"] ?? null) : null), null, (($__internal_compile_125 = $context["field"]) && is_array($__internal_compile_125) || $__internal_compile_125 instanceof ArrayAccess ? ($__internal_compile_125["label"] ?? null) : null), ["onlyimages" => true]], 226, $context, $this->getSourceContext());
                        // line 228
                        echo "
                    ";
                    }
                    // line 230
                    echo "                ";
                } elseif ((($context["type"] ?? null) == "picture_gallery")) {
                    // line 231
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_smallTitle", [__("Other pictures"), "fas fa-images"], 231, $context, $this->getSourceContext());
                    echo "
                    ";
                    // line 232
                    $context["pictures"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("importArrayFromDB", [0 => (($__internal_compile_126 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 232)) && is_array($__internal_compile_126) || $__internal_compile_126 instanceof ArrayAccess ? ($__internal_compile_126[(($__internal_compile_127 = $context["field"]) && is_array($__internal_compile_127) || $__internal_compile_127 instanceof ArrayAccess ? ($__internal_compile_127["name"] ?? null) : null)] ?? null) : null)]);
                    // line 233
                    echo "                    ";
                    $context["picture_urls"] = [];
                    // line 234
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["pictures"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                        // line 235
                        echo "                        ";
                        $context["picture_urls"] = twig_array_merge(($context["picture_urls"] ?? null), [0 => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl($context["picture"])]);
                        // line 236
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 237
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_imageGalleryField", [(($__internal_compile_128 = $context["field"]) && is_array($__internal_compile_128) || $__internal_compile_128 instanceof ArrayAccess ? ($__internal_compile_128["name"] ?? null) : null), ($context["picture_urls"] ?? null), "", twig_array_merge(($context["base_fields_params"] ?? null), ["clearable" => twig_get_attribute($this->env, $this->source,                     // line 238
($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 238), "no_label" => true])], 237, $context, $this->getSourceContext());
                    // line 240
                    echo "
                ";
                }
                // line 242
                echo "            ";
            }
            // line 243
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "    </div>
    ";
        // line 245
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "dropdown_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 245,  583 => 244,  577 => 243,  574 => 242,  570 => 240,  568 => 238,  566 => 237,  560 => 236,  557 => 235,  552 => 234,  549 => 233,  547 => 232,  542 => 231,  539 => 230,  535 => 228,  532 => 226,  528 => 224,  526 => 223,  524 => 222,  521 => 221,  515 => 219,  512 => 218,  509 => 217,  506 => 216,  503 => 215,  498 => 214,  496 => 213,  490 => 211,  488 => 210,  485 => 209,  479 => 208,  476 => 207,  473 => 206,  470 => 205,  464 => 203,  458 => 201,  455 => 200,  449 => 198,  446 => 197,  443 => 196,  440 => 195,  438 => 194,  433 => 193,  427 => 192,  424 => 191,  419 => 190,  416 => 189,  414 => 188,  409 => 187,  406 => 186,  404 => 185,  399 => 184,  397 => 183,  394 => 182,  392 => 181,  390 => 180,  384 => 179,  381 => 178,  376 => 177,  373 => 176,  370 => 175,  367 => 174,  363 => 172,  360 => 170,  356 => 168,  354 => 167,  352 => 166,  349 => 165,  347 => 164,  342 => 163,  340 => 162,  335 => 161,  333 => 160,  328 => 159,  326 => 158,  321 => 157,  318 => 156,  312 => 154,  310 => 153,  305 => 152,  303 => 151,  298 => 150,  295 => 149,  292 => 148,  289 => 147,  287 => 146,  282 => 145,  279 => 144,  276 => 143,  273 => 142,  270 => 141,  267 => 140,  264 => 139,  261 => 138,  258 => 137,  255 => 136,  252 => 135,  250 => 134,  245 => 133,  243 => 132,  240 => 131,  237 => 130,  234 => 129,  231 => 128,  228 => 127,  225 => 126,  222 => 125,  219 => 124,  216 => 123,  213 => 122,  211 => 120,  209 => 119,  207 => 118,  202 => 117,  200 => 116,  195 => 115,  193 => 114,  188 => 113,  185 => 112,  182 => 111,  179 => 110,  176 => 109,  174 => 107,  172 => 106,  170 => 105,  167 => 104,  165 => 102,  164 => 101,  163 => 100,  162 => 98,  161 => 97,  160 => 96,  158 => 94,  156 => 93,  153 => 92,  151 => 84,  150 => 83,  148 => 81,  146 => 80,  141 => 79,  139 => 78,  136 => 77,  133 => 76,  130 => 75,  127 => 74,  124 => 73,  121 => 72,  118 => 71,  116 => 70,  113 => 69,  110 => 68,  107 => 67,  104 => 66,  99 => 65,  96 => 63,  92 => 61,  90 => 59,  88 => 57,  86 => 56,  82 => 54,  80 => 53,  79 => 51,  78 => 50,  76 => 49,  73 => 47,  70 => 46,  68 => 45,  64 => 43,  61 => 42,  58 => 41,  55 => 40,  52 => 39,  50 => 38,  46 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "dropdown_form.html.twig", "C:\\wamp64\\www\\glpi\\templates\\dropdown_form.html.twig");
    }
}
