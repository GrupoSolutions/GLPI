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

/* @badges/badge_form.html.twig */
class __TwigTemplate_16b76bc79d21161f4285f1a4fc0c10c2dba8f1246b2c35319dd88e10bf8d3e1a extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@badges/badge_form.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["bg"] = "";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 4)) {
            // line 5
            echo "    ";
            $context["bg"] = "asset-deleted";
        }
        // line 7
        echo "
<div class=\"asset ";
        // line 8
        echo twig_escape_filter($this->env, ($context["bg"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 9
        $this->loadTemplate("components/form/header.html.twig", "@badges/badge_form.html.twig", 9)->display($context);
        // line 10
        echo "
    ";
        // line 11
        $context["rand"] = twig_random($this->env);
        // line 12
        echo "    ";
        $context["params"] = (($context["params"]) ?? ([]));
        // line 13
        echo "    ";
        $context["target"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 13) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 13)));
        // line 14
        echo "    ";
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 14) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["withtemplate"] ?? null) : null)) : (""));
        // line 15
        echo "    ";
        $context["item_type"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 15);
        // line 16
        echo "
    <div class=\"card-body d-flex\">
        <div class=\"col-9 flex-column\">
            <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
                <div class=\"row flex-row align-items-start flex-grow-1\">
                    <div class=\"row flex-row\">
                        ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "name"], "method", false, false, false, 22)) {
            // line 23
            echo "                            ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["name",             // line 25
($context["item"] ?? null), (((0 === twig_compare(            // line 26
($context["item_type"] ?? null), "Contact"))) ? (__("Surname")) : (__("Name"))),             // line 27
($context["withtemplate"] ?? null)], 23, $context, $this->getSourceContext());
            // line 28
            echo "
                        ";
        }
        // line 30
        echo "
                        ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "users_id"], "method", false, false, false, 31)) {
            // line 32
            echo "                            ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 35
($context["item"] ?? null), "fields", [], "any", false, false, false, 35)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["users_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), ["entity" => (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,             // line 38
($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["entities_id"] ?? null) : null), "right" => "all"]], 32, $context, $this->getSourceContext());
            // line 41
            echo "
                        ";
        }
        // line 43
        echo "
                        ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "locations_id"], "method", false, false, false, 44)) {
            // line 45
            echo "                            ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,             // line 48
($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), ["entity" => (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 51
($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["entities_id"] ?? null) : null)]], 45, $context, $this->getSourceContext());
            // line 53
            echo "
                        ";
        }
        // line 55
        echo "
                        ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "plugin_badges_badgetypes_id"], "method", false, false, false, 56)) {
            // line 57
            echo "                            ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["PluginBadgesBadgeType", "plugin_badges_badgetypes_id", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 60
($context["item"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["plugin_badges_badgetypes_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("PluginBadgesBadgeType")], 57, $context, $this->getSourceContext());
            // line 62
            echo "
                        ";
        }
        // line 64
        echo "
                        ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "serial"], "method", false, false, false, 65)) {
            // line 66
            echo "                            ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["serial", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 68
($context["item"] ?? null), "fields", [], "any", false, false, false, 68)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["serial"] ?? null) : null), __("Serial number")], 66, $context, $this->getSourceContext());
            // line 70
            echo "
                        ";
        }
        // line 72
        echo "
                        ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "states_id"], "method", false, false, false, 73)) {
            // line 74
            echo "                            ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["State", "states_id", (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 77
($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["states_id"] ?? null) : null), __("Status"), ["entity" => (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,             // line 80
($context["item"] ?? null), "fields", [], "any", false, false, false, 80)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["entities_id"] ?? null) : null), "condition" => ["is_visible_computer" => 1]]], 74, $context, $this->getSourceContext());
            // line 83
            echo "
                        ";
        }
        // line 85
        echo "
                        ";
        // line 86
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_affectation"], "method", false, false, false, 86)) {
            // line 87
            echo "                            ";
            echo twig_call_macro($macros["fields"], "macro_dateField", ["date_affectation", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["date_affectation"] ?? null) : null), __("Affectation date", "badges"), []], 87, $context, $this->getSourceContext());
            // line 88
            echo "
                        ";
        }
        // line 90
        echo "
                        ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_expiration"], "method", false, false, false, 91)) {
            // line 92
            echo "                            ";
            echo twig_call_macro($macros["fields"], "macro_dateField", ["date_expiration", (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 92)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["date_expiration"] ?? null) : null), __("Date of end of validity", "badges"), ["helper" => __("Empty for infinite")]], 92, $context, $this->getSourceContext());
            // line 94
            echo "
                        ";
        }
        // line 96
        echo "
                        ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "comment"], "method", false, false, false, 97)) {
            // line 98
            echo "                            ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_14 = twig_get_attribute($this->env, $this->source,             // line 100
($context["item"] ?? null), "fields", [], "any", false, false, false, 100)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["comment"] ?? null) : null), _n("Comment", "Comments", 2)], 98, $context, $this->getSourceContext());
            // line 102
            echo "
                        ";
        }
        // line 104
        echo "
                        ";
        // line 106
        echo "                        ";
        // line 107
        echo "                        ";
        // line 108
        echo "
                        ";
        // line 110
        echo "                        ";
        // line 111
        echo "                        ";
        // line 112
        echo "                        ";
        // line 113
        echo "                        ";
        // line 114
        echo "                        ";
        // line 115
        echo "
                        ";
        // line 117
        echo "                        ";
        // line 118
        echo "                        ";
        // line 119
        echo "
                    </div> ";
        // line 121
        echo "                </div> ";
        // line 122
        echo "            </div> ";
        // line 123
        echo "        </div>
        <div class=\"col-3 flex-column\">
            <div class=\"flex-row asset-pictures\">
                ";
        // line 126
        $this->loadTemplate("components/form/pictures.html.twig", "@badges/badge_form.html.twig", 126)->display(twig_array_merge($context, ["gallery_type" => ""]));
        // line 127
        echo "            </div>
        </div>
    </div> ";
        // line 130
        echo "
    ";
        // line 131
        $this->loadTemplate("components/form/buttons.html.twig", "@badges/badge_form.html.twig", 131)->display($context);
        // line 133
        echo "

    ";
        // line 135
        if ((0 === twig_compare((($__internal_compile_15 = ($context["params"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["formfooter"] ?? null) : null), null))) {
            // line 136
            echo "        <div class=\"card-footer mx-n2 mb-n2 mt-4\">
            ";
            // line 137
            $this->loadTemplate("components/form/dates.html.twig", "@badges/badge_form.html.twig", 137)->display($context);
            // line 138
            echo "        </div>
    ";
        }
        // line 140
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@badges/badge_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 140,  262 => 138,  260 => 137,  257 => 136,  255 => 135,  251 => 133,  249 => 131,  246 => 130,  242 => 127,  240 => 126,  235 => 123,  233 => 122,  231 => 121,  228 => 119,  226 => 118,  224 => 117,  221 => 115,  219 => 114,  217 => 113,  215 => 112,  213 => 111,  211 => 110,  208 => 108,  206 => 107,  204 => 106,  201 => 104,  197 => 102,  195 => 100,  193 => 98,  191 => 97,  188 => 96,  184 => 94,  181 => 92,  179 => 91,  176 => 90,  172 => 88,  169 => 87,  167 => 86,  164 => 85,  160 => 83,  158 => 80,  157 => 77,  155 => 74,  153 => 73,  150 => 72,  146 => 70,  144 => 68,  142 => 66,  140 => 65,  137 => 64,  133 => 62,  131 => 60,  129 => 57,  127 => 56,  124 => 55,  120 => 53,  118 => 51,  117 => 48,  115 => 45,  113 => 44,  110 => 43,  106 => 41,  104 => 38,  103 => 35,  101 => 32,  99 => 31,  96 => 30,  92 => 28,  90 => 27,  89 => 26,  88 => 25,  86 => 23,  84 => 22,  76 => 16,  73 => 15,  70 => 14,  67 => 13,  64 => 12,  62 => 11,  59 => 10,  57 => 9,  53 => 8,  50 => 7,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@badges/badge_form.html.twig", "C:\\xampp\\htdocs\\glpi\\marketplace\\badges\\templates\\badge_form.html.twig");
    }
}
