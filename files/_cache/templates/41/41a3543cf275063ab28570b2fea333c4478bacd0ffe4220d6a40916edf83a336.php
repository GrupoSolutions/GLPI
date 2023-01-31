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

/* @fields/fields.html.twig */
class __TwigTemplate_fc38cfbedc23fefd90fe28e9e16e6f5032059dc89af90f899a908ea09cef34e3 extends Template
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
        // line 28
        echo "
";
        // line 29
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@fields/fields.html.twig", 29)->unwrap();
        // line 30
        echo "
";
        // line 31
        $context["already_wrapped"] = ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonITILObject") && (0 === twig_compare((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["container"] ?? null), "fields", [], "any", false, false, false, 31)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null), "dom")));
        // line 32
        echo "
";
        // line 33
        if ( !($context["already_wrapped"] ?? null)) {
            // line 34
            echo "    <div class=\"card-body d-flex flex-wrap\">
        <div class=\"col-12 col-xxl-12 flex-column\">
            <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
                <div class=\"row flex-row align-items-start flex-grow-1\">
                    <div class=\"row flex-row\">
";
        }
        // line 40
        echo "
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 42
            echo "
    ";
            // line 43
            $context["type"] = (($__internal_compile_1 = $context["field"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["type"] ?? null) : null);
            // line 44
            echo "    ";
            $context["name"] = (($__internal_compile_2 = $context["field"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null);
            // line 45
            echo "    ";
            $context["label"] = (($__internal_compile_3 = $context["field"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["label"] ?? null) : null);
            // line 46
            echo "    ";
            $context["value"] = (((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 46)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["name"] ?? null)] ?? null) : null)) ? ((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 46)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["name"] ?? null)] ?? null) : null)) : ((($__internal_compile_6 = $context["field"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["value"] ?? null) : null)));
            // line 47
            echo "    ";
            $context["readonly"] = (($__internal_compile_7 = $context["field"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["is_readonly"] ?? null) : null);
            // line 48
            echo "    ";
            $context["rand"] = twig_random($this->env);
            // line 49
            echo "
    ";
            // line 50
            $context["field_options"] = ["readonly" => (            // line 51
($context["readonly"] ?? null) ||  !($context["canedit"] ?? null)), "required" => (($__internal_compile_8 =             // line 52
$context["field"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["mandatory"] ?? null) : null), "full_width" =>             // line 53
($context["already_wrapped"] ?? null)];
            // line 55
            echo "
    ";
            // line 56
            if ((0 === twig_compare(($context["type"] ?? null), "header"))) {
                // line 57
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_largeTitle", [($context["label"] ?? null)], 57, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((0 === twig_compare(            // line 59
($context["type"] ?? null), "text"))) {
                // line 60
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 60, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((0 === twig_compare(            // line 62
($context["type"] ?? null), "number"))) {
                // line 63
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_numberField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ["step" => "any", "min" => ""])], 63, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((0 === twig_compare(            // line 65
($context["type"] ?? null), "url"))) {
                // line 66
                echo "            ";
                ob_start();
                // line 67
                echo "            ";
                if (twig_length_filter($this->env, ($context["value"] ?? null))) {
                    // line 68
                    echo "                <a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "\">
                    <i class=\"ti ti-external-link\"></i>
                    ";
                    // line 70
                    echo twig_escape_filter($this->env, __("show", "fields"), "html", null, true);
                    echo "
                </a>
            ";
                }
                // line 73
                echo "            ";
                $context["ext_link"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 74
                echo "            ";
                echo twig_call_macro($macros["macros"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ["type" => "url", "add_field_html" =>                 // line 76
($context["ext_link"] ?? null)])], 74, $context, $this->getSourceContext());
                // line 77
                echo "
    ";
            } elseif ((0 === twig_compare(            // line 78
($context["type"] ?? null), "textarea"))) {
                // line 79
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_textareaField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 79, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((0 === twig_compare(            // line 81
($context["type"] ?? null), "yesno"))) {
                // line 82
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_dropdownYesNo", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 82, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((0 === twig_compare(            // line 84
($context["type"] ?? null), "date"))) {
                // line 85
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_dateField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 85, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((0 === twig_compare(            // line 87
($context["type"] ?? null), "datetime"))) {
                // line 88
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_datetimeField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 88, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((0 === twig_compare(            // line 90
($context["type"] ?? null), "dropdown"))) {
                // line 91
                echo "        ";
                if (twig_in_filter("dropdowns_id", ($context["name"] ?? null))) {
                    // line 92
                    echo "            ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemtypeForForeignKeyField", [0 => ($context["name"] ?? null)]);
                    // line 93
                    echo "        ";
                } else {
                    // line 94
                    echo "            ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFieldsDropdown::getClassname", [0 => ($context["name"] ?? null)]);
                    // line 95
                    echo "        ";
                }
                // line 96
                echo "        ";
                $context["name_fk"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getForeignKeyFieldForItemType", [0 => ($context["dropdown_itemtype"] ?? null)]);
                // line 97
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_dropdownField", [($context["dropdown_itemtype"] ?? null), ($context["name_fk"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ["entity" => twig_get_attribute($this->env, $this->source,                 // line 98
($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 98)])], 97, $context, $this->getSourceContext());
                // line 99
                echo "

    ";
            } elseif (preg_match("/^dropdown-.+/i",             // line 101
($context["type"] ?? null))) {
                // line 102
                echo "        ";
                if ( !($context["massiveaction"] ?? null)) {
                    // line 103
                    echo "            ";
                    $context["dropdown_options"] = ["condition" => (($__internal_compile_9 = $context["field"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["dropdown_condition"] ?? null) : null), "entity" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 103)];
                    // line 104
                    echo "            ";
                    if ((0 === twig_compare((($__internal_compile_10 = $context["field"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["dropdown_class"] ?? null) : null), "User"))) {
                        // line 105
                        echo "                ";
                        $context["dropdown_options"] = twig_array_merge(($context["dropdown_options"] ?? null), ["entity" =>  -1, "right" => "all"]);
                        // line 106
                        echo "            ";
                    } elseif ((0 === twig_compare((($__internal_compile_11 = $context["field"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["dropdown_class"] ?? null) : null), "Entity"))) {
                        // line 107
                        echo "                ";
                        $context["dropdown_options"] = twig_array_merge(($context["dropdown_options"] ?? null), ["entity_sons" => true]);
                        // line 108
                        echo "            ";
                    }
                    // line 109
                    echo "            ";
                    echo twig_call_macro($macros["macros"], "macro_dropdownField", [(($__internal_compile_12 = $context["field"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["dropdown_class"] ?? null) : null), ($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ($context["dropdown_options"] ?? null))], 109, $context, $this->getSourceContext());
                    echo "
        ";
                }
                // line 111
                echo "
    ";
            } elseif ((0 === twig_compare(            // line 112
($context["type"] ?? null), "glpi_item"))) {
                // line 113
                echo "        ";
                if ( !($context["massiveaction"] ?? null)) {
                    // line 114
                    echo "            ";
                    $context["itemtype_prefix"] = "itemtype_";
                    // line 115
                    echo "            ";
                    $context["items_id_prefix"] = "items_id_";
                    // line 116
                    echo "
            <div class='form-field row col-12 col-sm-6  mb-2'>
                ";
                    // line 118
                    echo twig_call_macro($macros["macros"], "macro_dropdownArrayField", [(($context["itemtype_prefix"] ?? null) . ($context["name"] ?? null)), twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", false, false, false, 118), (($__internal_compile_13 = $context["field"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["allowed_values"] ?? null) : null), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ["rand" =>                     // line 119
($context["rand"] ?? null), "display_emptychoice" => true])], 118, $context, $this->getSourceContext());
                    // line 121
                    echo "

                ";
                    // line 123
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [0 => ((("dropdown_" .                     // line 125
($context["itemtype_prefix"] ?? null)) . ($context["name"] ?? null)) . ($context["rand"] ?? null)), 1 => ("results_items_id" .                     // line 126
($context["rand"] ?? null)), 2 => ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/dropdownAllItems.php"), 3 => ["idtable" => "__VALUE__", "name" => (                    // line 130
($context["items_id_prefix"] ?? null) . ($context["name"] ?? null)), "entity_restrict" => twig_get_attribute($this->env, $this->source,                     // line 131
($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 131), "dom_name" => (                    // line 132
($context["items_id_prefix"] ?? null) . ($context["name"] ?? null)), "display_emptychoice" => false, "action" => "get_items_from_itemtype", "dom_rand" =>                     // line 135
($context["rand"] ?? null)]]);
                    // line 138
                    echo "
                <span id='results_items_id";
                    // line 139
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "' class='form-field row col-12 col-sm-6  mb-2'>
                    ";
                    // line 140
                    if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", false, false, false, 140), ""))) {
                        // line 141
                        echo "                        ";
                        echo twig_call_macro($macros["macros"], "macro_dropdownField", [twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", false, false, false, 141), (($context["items_id_prefix"] ?? null) . ($context["name"] ?? null)), twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "items_id", [], "any", false, false, false, 141), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ["entity" => (((0 === twig_compare(twig_get_attribute($this->env, $this->source,                         // line 142
($context["value"] ?? null), "itemtype", [], "any", false, false, false, 142), "User"))) ? ( -1) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 142))), "rand" =>                         // line 143
($context["rand"] ?? null), "right" => "all", "display_emptychoice" => false, "no_label" => true])], 141, $context, $this->getSourceContext());
                        // line 147
                        echo "
                    ";
                    }
                    // line 149
                    echo "                </span>
            ";
                }
                // line 151
                echo "        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "
";
        // line 155
        if ( !($context["already_wrapped"] ?? null)) {
            // line 156
            echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@fields/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 156,  307 => 155,  304 => 154,  296 => 151,  292 => 149,  288 => 147,  286 => 143,  285 => 142,  283 => 141,  281 => 140,  277 => 139,  274 => 138,  272 => 135,  271 => 132,  270 => 131,  269 => 130,  268 => 126,  267 => 125,  266 => 123,  262 => 121,  260 => 119,  259 => 118,  255 => 116,  252 => 115,  249 => 114,  246 => 113,  244 => 112,  241 => 111,  235 => 109,  232 => 108,  229 => 107,  226 => 106,  223 => 105,  220 => 104,  217 => 103,  214 => 102,  212 => 101,  208 => 99,  206 => 98,  204 => 97,  201 => 96,  198 => 95,  195 => 94,  192 => 93,  189 => 92,  186 => 91,  184 => 90,  178 => 88,  176 => 87,  170 => 85,  168 => 84,  162 => 82,  160 => 81,  154 => 79,  152 => 78,  149 => 77,  147 => 76,  145 => 74,  142 => 73,  136 => 70,  130 => 68,  127 => 67,  124 => 66,  122 => 65,  116 => 63,  114 => 62,  108 => 60,  106 => 59,  100 => 57,  98 => 56,  95 => 55,  93 => 53,  92 => 52,  91 => 51,  90 => 50,  87 => 49,  84 => 48,  81 => 47,  78 => 46,  75 => 45,  72 => 44,  70 => 43,  67 => 42,  63 => 41,  60 => 40,  52 => 34,  50 => 33,  47 => 32,  45 => 31,  42 => 30,  40 => 29,  37 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # -------------------------------------------------------------------------
 # Fields plugin for GLPI
 # -------------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of Fields.
 #
 # Fields is free software; you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation; either version 2 of the License, or
 # (at your option) any later version.
 #
 # Fields is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with Fields. If not, see <http://www.gnu.org/licenses/>.
 # -------------------------------------------------------------------------
 # @copyright Copyright (C) 2013-2022 by Fields plugin team.
 # @license   GPLv2 https://www.gnu.org/licenses/gpl-2.0.html
 # @link      https://github.com/pluginsGLPI/fields
 # -------------------------------------------------------------------------
 #}

{% import 'components/form/fields_macros.html.twig' as macros %}

{% set already_wrapped = item is instanceof('CommonITILObject') and container.fields['type'] == 'dom' %}

{% if not already_wrapped %}
    <div class=\"card-body d-flex flex-wrap\">
        <div class=\"col-12 col-xxl-12 flex-column\">
            <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
                <div class=\"row flex-row align-items-start flex-grow-1\">
                    <div class=\"row flex-row\">
{% endif %}

{% for field in fields %}

    {% set type     = field['type'] %}
    {% set name     = field['name'] %}
    {% set label    = field['label'] %}
    {% set value    = item.input[name] ?: field['value'] %}
    {% set readonly = field['is_readonly'] %}
    {% set rand = random() %}

    {% set field_options = {
        'readonly':   readonly or not canedit,
        'required':   field['mandatory'],
        'full_width': already_wrapped
    } %}

    {% if type == 'header' %}
        {{ macros.largeTitle(label) }}

    {% elseif type == 'text' %}
        {{ macros.textField(name, value, label, field_options) }}

    {% elseif type == 'number' %}
        {{ macros.numberField(name, value, label, field_options|merge({step: 'any', min: ''})) }}

    {% elseif type == 'url' %}
            {% set ext_link %}
            {% if value|length %}
                <a target=\"_blank\" href=\"{{ value }}\">
                    <i class=\"ti ti-external-link\"></i>
                    {{ __('show', 'fields') }}
                </a>
            {% endif %}
            {% endset %}
            {{ macros.textField(name, value, label, field_options|merge({
                'type': 'url',
                'add_field_html': ext_link
            })) }}
    {% elseif type == 'textarea' %}
        {{ macros.textareaField(name, value, label, field_options) }}

    {% elseif type == 'yesno' %}
        {{ macros.dropdownYesNo(name, value, label, field_options) }}

    {% elseif type == 'date' %}
        {{ macros.dateField(name, value, label, field_options) }}

    {% elseif type == 'datetime' %}
        {{ macros.datetimeField(name, value, label, field_options) }}

    {% elseif type == 'dropdown' %}
        {% if \"dropdowns_id\" in name %}
            {% set dropdown_itemtype = call(\"getItemtypeForForeignKeyField\", [name]) %}
        {% else %}
            {% set dropdown_itemtype = call(\"PluginFieldsDropdown::getClassname\", [name]) %}
        {% endif %}
        {% set name_fk = call(\"getForeignKeyFieldForItemType\", [dropdown_itemtype]) %}
        {{ macros.dropdownField(dropdown_itemtype, name_fk, value, label, field_options|merge({
            'entity': item.getEntityID(),
        })) }}

    {% elseif type matches '/^dropdown-.+/i' %}
        {% if not massiveaction %}
            {% set dropdown_options = {'condition': field['dropdown_condition'], 'entity': item.getEntityID()} %}
            {% if field['dropdown_class'] == 'User' %}
                {% set dropdown_options = dropdown_options|merge({'entity': -1, 'right': 'all'}) %}
            {% elseif field['dropdown_class'] == 'Entity' %}
                {% set dropdown_options = dropdown_options|merge({'entity_sons': true}) %}
            {% endif %}
            {{ macros.dropdownField(field['dropdown_class'], name, value, label, field_options|merge(dropdown_options)) }}
        {% endif %}

    {% elseif type == 'glpi_item' %}
        {% if not massiveaction %}
            {% set itemtype_prefix = 'itemtype_' %}
            {% set items_id_prefix = 'items_id_' %}

            <div class='form-field row col-12 col-sm-6  mb-2'>
                {{ macros.dropdownArrayField(itemtype_prefix ~ name, value.itemtype, field['allowed_values'], label, field_options|merge({
                    'rand': rand,
                    'display_emptychoice': true,
                })) }}

                {% do call('Ajax::updateItemOnSelectEvent',
                    [
                        'dropdown_' ~ itemtype_prefix ~ name ~ rand,
                        'results_items_id' ~ (rand),
                        config('root_doc') ~ '/ajax/dropdownAllItems.php',
                        {
                            'idtable'             : '__VALUE__',
                            'name'                : items_id_prefix ~ name,
                            'entity_restrict'     : item.getEntityID(),
                            'dom_name'            : items_id_prefix ~ name,
                            'display_emptychoice' : false,
                            'action'              : 'get_items_from_itemtype',
                            'dom_rand'            : rand,
                        }
                ]) %}

                <span id='results_items_id{{rand}}' class='form-field row col-12 col-sm-6  mb-2'>
                    {% if value.itemtype != '' %}
                        {{ macros.dropdownField(value.itemtype, items_id_prefix ~ name, value.items_id, label, field_options|merge({
                            'entity': value.itemtype == 'User' ? -1 : item.getEntityID(),
                            'rand': rand,
                            'right': 'all',
                            'display_emptychoice' : false,
                            'no_label': true
                        })) }}
                    {% endif %}
                </span>
            {% endif %}
        </div>
    {% endif %}
{% endfor %}

{% if not already_wrapped %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endif %}
", "@fields/fields.html.twig", "C:\\wamp64\\www\\glpi\\marketplace\\fields\\templates\\fields.html.twig");
    }
}
