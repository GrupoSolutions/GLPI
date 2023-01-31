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

/* components/itilobject/fields_panel.html.twig */
class __TwigTemplate_b78737aa2fca3954168f1001dd8e3b0a extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/fields_panel.html.twig", 34)->unwrap();
        // line 35
        $context["field_options"] = ["full_width" => true, "fields_template" =>         // line 37
($context["itiltemplate"] ?? null), "disabled" =>  !        // line 38
($context["canupdate"] ?? null), "add_field_class" => ((        // line 39
($context["is_expanded"] ?? null)) ? ("col-sm-6") : (""))];
        // line 41
        echo "
";
        // line 42
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 43
        $context["headers_states"] = (($__internal_compile_0 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["items"] ?? null) : null);
        // line 44
        echo "
<div class=\"accordion open accordion-flush\" id=\"itil-data\">
   ";
        // line 46
        $context["main_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "item-main", [], "array", true, true, false, 46) || ((($__internal_compile_1 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["item-main"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 47
        echo "   <div class=\"accordion-item\">
      <h2 class=\"accordion-header\" id=\"heading-main-item\">
         <button class=\"accordion-button ";
        // line 49
        echo ((($context["main_show"] ?? null)) ? ("") : ("collapsed"));
        echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#item-main\" aria-expanded=\"true\" aria-controls=\"ticket-main\">
            <i class=\"ti ti-alert-circle me-1 item-icon\"></i>
            <span class='status-recall'>
                ";
        // line 52
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [0 => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["status"] ?? null) : null)], "method", false, false, false, 52);
        echo "
            </span>
            <span class=\"item-title\">
                ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [0 => 1], "method", false, false, false, 55), "html", null, true);
        echo "
            </span>
         </button>
      </h2>
      <div id=\"item-main\" class=\"accordion-collapse collapse ";
        // line 59
        echo ((($context["main_show"] ?? null)) ? ("show") : (""));
        echo "\" aria-labelledby=\"heading-main-item\">
         <div class=\"accordion-body row m-0 mt-n2\">

            ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

            ";
        // line 64
        if (Session::isMultiEntitiesMode()) {
            // line 65
            echo "               ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 65)) {
                // line 66
                echo "                  ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Entity", "entities_id", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,                 // line 69
($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["entities_id"] ?? null) : null), _n("Entity", "Entities", 1), twig_array_merge(                // line 71
($context["field_options"] ?? null), ["entity" =>                 // line 72
($context["userentities"] ?? null), "on_change" => "this.form.submit()"])], 66, $context, $this->getSourceContext());
                // line 75
                echo "
               ";
            } else {
                // line 77
                echo "                  ";
                ob_start(function () { return ''; });
                // line 78
                echo "                     ";
                echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Entity::badgeCompletename", [0 => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,                 // line 79
($context["item"] ?? null), "fields", [], "any", false, false, false, 79)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["entities_id"] ?? null) : null))]);
                // line 80
                echo "
                  ";
                $context["entity_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 82
                echo "
                  ";
                // line 83
                echo twig_call_macro($macros["fields"], "macro_field", ["",                 // line 85
($context["entity_html"] ?? null), _n("Entity", "Entities", 1), twig_array_merge(                // line 87
($context["field_options"] ?? null), ["add_field_class" => "d-flex align-items-center"])], 83, $context, $this->getSourceContext());
                // line 90
                echo "
               ";
            }
            // line 92
            echo "
               ";
            // line 93
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_recursive"], "method", false, false, false, 93)) {
                // line 94
                echo "                  ";
                echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_recursive", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,                 // line 96
($context["item"] ?? null), "fields", [], "any", false, false, false, 96)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["is_recursive"] ?? null) : null), __("Child entities"),                 // line 98
($context["field_options"] ?? null)], 94, $context, $this->getSourceContext());
                // line 99
                echo "
               ";
            }
            // line 101
            echo "            ";
        }
        // line 102
        echo "
            ";
        // line 103
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,         // line 105
($context["item"] ?? null), "fields", [], "any", false, false, false, 105)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["date"] ?? null) : null), __("Opening date"),         // line 107
($context["field_options"] ?? null)], 103, $context, $this->getSourceContext());
        // line 108
        echo "

            ";
        // line 110
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 110) != "Ticket")) {
            // line 111
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["time_to_resolve", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 113
($context["item"] ?? null), "fields", [], "any", false, false, false, 113)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["time_to_resolve"] ?? null) : null), __("Time to resolve"),             // line 115
($context["field_options"] ?? null)], 111, $context, $this->getSourceContext());
            // line 116
            echo "
            ";
        }
        // line 118
        echo "
            ";
        // line 119
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isSolved", [0 => true], "method", false, false, false, 119)) {
            // line 120
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["solvedate", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 122
($context["item"] ?? null), "fields", [], "any", false, false, false, 122)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["solvedate"] ?? null) : null), __("Resolution date"),             // line 124
($context["field_options"] ?? null)], 120, $context, $this->getSourceContext());
            // line 125
            echo "
            ";
        }
        // line 127
        echo "
            ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isClosed", [], "method", false, false, false, 128)) {
            // line 129
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["closedate", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 131
($context["item"] ?? null), "fields", [], "any", false, false, false, 131)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["closedate"] ?? null) : null), __("Close date"),             // line 133
($context["field_options"] ?? null)], 129, $context, $this->getSourceContext());
            // line 134
            echo "
            ";
        }
        // line 136
        echo "
            ";
        // line 137
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 137) == "Ticket")) {
            // line 138
            echo "               ";
            $context["type_params"] = twig_array_merge(["value" => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 139
($context["item"] ?? null), "fields", [], "any", false, false, false, 139)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["type"] ?? null) : null), "width" => "100%", "display" => false],             // line 142
($context["field_options"] ?? null));
            // line 143
            echo "               ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 143)) {
                // line 144
                echo "                  ";
                $context["type_params"] = twig_array_merge(($context["type_params"] ?? null), ["on_change" => "this.form.submit()"]);
                // line 145
                echo "               ";
            } else {
                // line 146
                echo "                  ";
                $context["type_params"] = twig_array_merge(($context["type_params"] ?? null), ["on_change" => "reloadCategory()"]);
                // line 147
                echo "               ";
            }
            // line 148
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_field", ["type", twig_get_attribute($this->env, $this->source,             // line 150
($context["item"] ?? null), "dropdownType", [0 => "type", 1 => ($context["type_params"] ?? null)], "method", false, false, false, 150), _n("Type", "Types", 1),             // line 152
($context["field_options"] ?? null)], 148, $context, $this->getSourceContext());
            // line 153
            echo "
            ";
        }
        // line 155
        echo "
            ";
        // line 156
        $context["cat_params"] = twig_array_merge(($context["field_options"] ?? null), ["entity" => (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,         // line 157
($context["item"] ?? null), "fields", [], "any", false, false, false, 157)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["entities_id"] ?? null) : null), "disabled" =>  !(        // line 158
($context["canupdate"] ?? null) || ($context["can_requester"] ?? null))]);
        // line 160
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 160)) {
            // line 161
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["on_change" => "this.form.submit()"]);
            // line 164
            echo "            ";
        }
        // line 165
        echo "            ";
        if ((( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 165) && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "itilcategories_id"], "method", false, false, false, 165)) && ((($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 165)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["itilcategories_id"] ?? null) : null) > 0))) {
            // line 166
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["display_emptychoice" => false]);
            // line 169
            echo "            ";
        }
        // line 170
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 170) == "Ticket")) {
            // line 171
            echo "               ";
            if (((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 171)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["type"] ?? null) : null) == twig_constant("Ticket::INCIDENT_TYPE"))) {
                // line 172
                echo "                  ";
                $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_incident" => 1]]);
                // line 173
                echo "               ";
            } elseif (((($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 173)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["type"] ?? null) : null) == twig_constant("Ticket::DEMAND_TYPE"))) {
                // line 174
                echo "                  ";
                $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_request" => 1]]);
                // line 175
                echo "               ";
            }
            // line 176
            echo "            ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 176) == "Problem")) {
            // line 177
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_problem" => 1]]);
            // line 178
            echo "            ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 178) == "Change")) {
            // line 179
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_change" => 1]]);
            // line 180
            echo "            ";
        }
        // line 181
        echo "            <span id=\"category_block_";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 182
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ITILCategory", "itilcategories_id", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source,         // line 185
($context["item"] ?? null), "fields", [], "any", false, false, false, 185)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["itilcategories_id"] ?? null) : null), _n("Category", "Categories", 1),         // line 187
($context["cat_params"] ?? null)], 182, $context, $this->getSourceContext());
        // line 188
        echo "
            </span>

            ";
        // line 191
        echo twig_include($this->env, $context, "components/itilobject/fields/status.html.twig");
        echo "

            ";
        // line 193
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "requesttypes_id"], "method", false, false, false, 193)) {
            // line 194
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["RequestType", "requesttypes_id", (($__internal_compile_16 = twig_get_attribute($this->env, $this->source,             // line 197
($context["item"] ?? null), "fields", [], "any", false, false, false, 197)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["requesttypes_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("RequestType"), twig_array_merge(            // line 199
($context["field_options"] ?? null), ["condition" => ["is_active" => 1, "is_ticketheader" => 1]])], 194, $context, $this->getSourceContext());
            // line 205
            echo "
            ";
        }
        // line 207
        echo "
            ";
        // line 208
        echo twig_include($this->env, $context, "components/itilobject/fields/priority_matrix.html.twig");
        echo "

            ";
        // line 210
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "locations_id"], "method", false, false, false, 210)) {
            // line 211
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_17 = twig_get_attribute($this->env, $this->source,             // line 214
($context["item"] ?? null), "fields", [], "any", false, false, false, 214)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), twig_array_merge(            // line 216
($context["field_options"] ?? null), ["hide_if_no_elements" => true])], 211, $context, $this->getSourceContext());
            // line 219
            echo "
            ";
        }
        // line 221
        echo "
            ";
        // line 222
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 222) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 222) == "Ticket"))) {
            // line 223
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Contract", "_contracts_id", ((twig_get_attribute($this->env, $this->source,             // line 226
($context["params"] ?? null), "_contracts_id", [], "array", true, true, false, 226)) ? (_twig_default_filter((($__internal_compile_18 = ($context["params"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["_contracts_id"] ?? null) : null), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Contract"), twig_array_merge(            // line 228
($context["field_options"] ?? null), ["entity" => (($__internal_compile_19 = twig_get_attribute($this->env, $this->source,             // line 229
($context["item"] ?? null), "fields", [], "any", false, false, false, 229)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["entities_id"] ?? null) : null), "width" => "100%", "hide_if_no_elements" => true])], 223, $context, $this->getSourceContext());
            // line 233
            echo "
            ";
        }
        // line 235
        echo "
            ";
        // line 236
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 236) != "Ticket") || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 236))) {
            // line 237
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", ["actiontime", (($__internal_compile_20 = twig_get_attribute($this->env, $this->source,             // line 239
($context["item"] ?? null), "fields", [], "any", false, false, false, 239)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["actiontime"] ?? null) : null), __("Total duration"),             // line 241
($context["field_options"] ?? null)], 237, $context, $this->getSourceContext());
            // line 242
            echo "
            ";
        }
        // line 244
        echo "
            ";
        // line 245
        echo twig_include($this->env, $context, "components/itilobject/fields/global_validation.html.twig");
        echo "

            ";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "
         </div>
      </div>
   </div>

   ";
        // line 252
        $context["actors_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "actors", [], "array", true, true, false, 252) || ((($__internal_compile_21 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["actors"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 253
        echo "   <div class=\"accordion-item\">
      <h2 class=\"accordion-header\" id=\"heading-actor\" title=\"";
        // line 254
        echo twig_escape_filter($this->env, __("Actors"), "html", null, true);
        echo "\" data-bs-toggle=\"tooltip\">
         <button class=\"accordion-button ";
        // line 255
        echo ((($context["actors_show"] ?? null)) ? ("") : ("collapsed"));
        echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#actors\" aria-expanded=\"true\" aria-controls=\"actors\">
            <i class=\"ti ti-users me-1\"></i>
            <span class=\"item-title\">
                ";
        // line 258
        echo twig_escape_filter($this->env, __("Actors"), "html", null, true);
        echo "
            </span>
            <span class=\"badge bg-secondary ms-2\">
               ";
        // line 261
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "countActors", [], "method", false, false, false, 261), "html", null, true);
        echo "
            </span>
         </button>
      </h2>
      <div id=\"actors\" class=\"accordion-collapse collapse ";
        // line 265
        echo ((($context["actors_show"] ?? null)) ? ("show") : (""));
        echo "\" aria-labelledby=\"heading-actor\">
         <div class=\"accordion-body accordion-actors row m-0 mt-n2\">
            ";
        // line 267
        echo twig_include($this->env, $context, "components/itilobject/actors/main.html.twig");
        echo "
         </div>
      </div>
   </div>

   ";
        // line 272
        if ((array_key_exists("item_ticket", $context) &&  !(null === ($context["item_ticket"] ?? null)))) {
            // line 273
            echo "      ";
            $context["items_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "items", [], "array", true, true, false, 273) || ((($__internal_compile_22 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["items"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 274
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"items-heading\" title=\"";
            // line 275
            echo twig_escape_filter($this->env, _n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 276
            echo ((($context["items_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#items\" aria-expanded=\"true\" aria-controls=\"items\">
               <i class=\"ti ti-package me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 279
            echo twig_escape_filter($this->env, _n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            echo "
                </span>
               <span class=\"item-counter badge bg-secondary ms-2\"></span>
               ";
            // line 282
            if (twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "items_id"], "method", false, false, false, 282)) {
                // line 283
                echo "                  <span class=\"required\">*</span>
               ";
            }
            // line 285
            echo "            </button>
         </h2>
         <div id=\"items\" class=\"accordion-collapse collapse ";
            // line 287
            echo ((($context["items_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"items-heading\">
            <div class=\"accordion-body accordion-items row m-0 mt-n2\">
               ";
            // line 289
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item_ticket"] ?? null), "itemAddForm", [0 => ($context["item"] ?? null), 1 => ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([]))], "method", false, false, false, 289), "html", null, true);
            echo "
            </div>
         </div>
      </div>
   ";
        }
        // line 294
        echo "
   ";
        // line 295
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 295) == "Ticket")) {
            // line 296
            echo "      ";
            $context["nb_la"] = (((((((($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 296)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["slas_id_tto"] ?? null) : null) > 0)) ? (1) : (0)) + ((((($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 296)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["slas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($__internal_compile_25 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 296)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["olas_id_tto"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($__internal_compile_26 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 296)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["olas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0)));
            // line 297
            echo "      ";
            $context["servicelevels_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "service-levels", [], "array", true, true, false, 297) && ((($__internal_compile_27 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["service-levels"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 298
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"service-levels-heading\" title=\"";
            // line 299
            echo twig_escape_filter($this->env, _n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 300
            echo ((($context["servicelevels_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#service-levels\" aria-expanded=\"true\" aria-controls=\"service-levels\">
               <i class=\"ti ti-alarm me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 303
            echo twig_escape_filter($this->env, _n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
            echo "
               </span>
               ";
            // line 305
            if ((($context["nb_la"] ?? null) > 0)) {
                // line 306
                echo "                  <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_la"] ?? null), "html", null, true);
                echo "</span>
               ";
            }
            // line 308
            echo "            </button>
         </h2>
         <div id=\"service-levels\" class=\"accordion-collapse collapse ";
            // line 310
            echo ((($context["servicelevels_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"service-levels-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 312
            echo twig_include($this->env, $context, "components/itilobject/service_levels.html.twig");
            echo "
            </div>
         </div>
      </div>
   ";
        }
        // line 317
        echo "
   ";
        // line 318
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 318), [0 => "Problem", 1 => "Change"])) {
            // line 319
            echo "      ";
            $context["analysis_fields"] = ["impactcontent" => __("Impacts"), "causecontent" => __("Causes"), "symptomcontent" => __("Symptoms"), "controlistcontent" => __("Control list")];
            // line 325
            echo "
      ";
            // line 326
            $context["nb_analysis"] = 0;
            // line 327
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 328
                echo "         ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["analysis_field"]], "method", false, false, false, 328) && (twig_length_filter($this->env, twig_trim_filter((($__internal_compile_28 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 328)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[$context["analysis_field"]] ?? null) : null))) > 0))) {
                    // line 329
                    echo "            ";
                    $context["nb_analysis"] = (($context["nb_analysis"] ?? null) + 1);
                    // line 330
                    echo "         ";
                }
                // line 331
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 332
            echo "      ";
            $context["analysis_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "analysis", [], "array", true, true, false, 332) && ((($__internal_compile_29 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["analysis"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 333
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"analysis-heading\" title=\"";
            // line 334
            echo twig_escape_filter($this->env, __("Analysis"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 335
            echo ((($context["analysis_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#analysis\" aria-expanded=\"true\" aria-controls=\"analysis\">
               <i class=\"ti ti-eyeglass me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 338
            echo twig_escape_filter($this->env, __("Analysis"), "html", null, true);
            echo "
               </span>
               ";
            // line 340
            if ((($context["nb_analysis"] ?? null) > 0)) {
                // line 341
                echo "                  <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_analysis"] ?? null), "html", null, true);
                echo "</span>
               ";
            }
            // line 343
            echo "            </button>
         </h2>
         <div id=\"analysis\" class=\"accordion-collapse collapse ";
            // line 345
            echo ((($context["analysis_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"analysis-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 347
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 348
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["analysis_field"]], "method", false, false, false, 348)) {
                    // line 349
                    echo "                     ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [                    // line 350
$context["analysis_field"], (($__internal_compile_30 = twig_get_attribute($this->env, $this->source,                     // line 351
($context["item"] ?? null), "fields", [], "any", false, false, false, 351)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[$context["analysis_field"]] ?? null) : null),                     // line 352
$context["label"], twig_array_merge(                    // line 353
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 349, $context, $this->getSourceContext());
                    // line 357
                    echo "
                  ";
                }
                // line 359
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            echo "            </div>
         </div>
      </div>
   ";
        }
        // line 364
        echo "
   ";
        // line 365
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 365) == "Change")) {
            // line 366
            echo "      ";
            $context["plans_fields"] = ["rolloutplancontent" => __("Deployment plan"), "backoutplancontent" => __("Backup plan"), "checklistcontent" => __("Checklist")];
            // line 371
            echo "
      ";
            // line 372
            $context["nb_plans"] = 0;
            // line 373
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 374
                echo "         ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["plans_field"]], "method", false, false, false, 374) && (twig_length_filter($this->env, twig_trim_filter((($__internal_compile_31 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 374)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[$context["plans_field"]] ?? null) : null))) > 0))) {
                    // line 375
                    echo "            ";
                    $context["nb_plans"] = (($context["nb_plans"] ?? null) + 1);
                    // line 376
                    echo "         ";
                }
                // line 377
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 378
            echo "
      ";
            // line 379
            $context["plans_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "plans", [], "array", true, true, false, 379) && ((($__internal_compile_32 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["plans"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 380
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"plans-heading\" title=\"";
            // line 381
            echo twig_escape_filter($this->env, __("Plans"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 382
            echo ((($context["plans_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#plans\" aria-expanded=\"true\" aria-controls=\"plans\">
               <i class=\"ti ti-checkup-list me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 385
            echo twig_escape_filter($this->env, __("Plans"), "html", null, true);
            echo "
               </span>
               ";
            // line 387
            if ((($context["nb_plans"] ?? null) > 0)) {
                // line 388
                echo "                  <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_plans"] ?? null), "html", null, true);
                echo "</span>
               ";
            }
            // line 390
            echo "            </button>
         </h2>
         <div id=\"plans\" class=\"accordion-collapse collapse ";
            // line 392
            echo ((($context["plans_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"plans-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 394
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 395
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["plans_field"]], "method", false, false, false, 395)) {
                    // line 396
                    echo "                     ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [                    // line 397
$context["plans_field"], (($__internal_compile_33 = twig_get_attribute($this->env, $this->source,                     // line 398
($context["item"] ?? null), "fields", [], "any", false, false, false, 398)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[$context["plans_field"]] ?? null) : null),                     // line 399
$context["label"], twig_array_merge(                    // line 400
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 396, $context, $this->getSourceContext());
                    // line 404
                    echo "
                  ";
                }
                // line 406
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 407
            echo "            </div>
         </div>
      </div>
   ";
        }
        // line 411
        echo "
   ";
        // line 412
        if (($context["ticket_ticket"] ?? null)) {
            // line 413
            echo "      ";
            $context["linked_tickets_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "linked_tickets", [], "array", true, true, false, 413) && ((($__internal_compile_34 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["linked_tickets"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 414
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"linked_tickets-heading\" title=\"";
            // line 415
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Ticket_Ticket", ($context["nb_linked_tickets"] ?? null)), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 416
            echo ((($context["linked_tickets_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#linked_tickets\" aria-expanded=\"true\" aria-controls=\"linked_tickets\">
               <i class=\"ti ti-link me-1\"></i>
               ";
            // line 418
            $context["linked_tickets"] = twig_get_attribute($this->env, $this->source, ($context["ticket_ticket"] ?? null), "getLinkedTicketsTo", [0 => (($__internal_compile_35 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 418)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["id"] ?? null) : null)], "method", false, false, false, 418);
            // line 419
            echo "               ";
            $context["nb_linked_tickets"] = twig_length_filter($this->env, ($context["linked_tickets"] ?? null));
            // line 420
            echo "               ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 420) && ((($__internal_compile_36 = (($__internal_compile_37 = ($context["params"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["_link"] ?? null) : null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["tickets_id_2"] ?? null) : null) > 0))) {
                // line 421
                echo "                  ";
                $context["nb_linked_tickets"] = 1;
                // line 422
                echo "               ";
            }
            // line 423
            echo "               <span class=\"item-title\">
                    ";
            // line 424
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Ticket_Ticket", ($context["nb_linked_tickets"] ?? null)), "html", null, true);
            echo "
               </span>
               ";
            // line 426
            if ((($context["nb_linked_tickets"] ?? null) > 0)) {
                // line 427
                echo "                  <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_linked_tickets"] ?? null), "html", null, true);
                echo "</span>
               ";
            }
            // line 429
            echo "            </button>
         </h2>
         <div id=\"linked_tickets\" class=\"accordion-collapse collapse ";
            // line 431
            echo ((($context["linked_tickets_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"linked_tickets-heading\">
            <div class=\"accordion-body\">
               ";
            // line 433
            echo twig_include($this->env, $context, "components/itilobject/linked_tickets.html.twig");
            echo "
            </div>
         </div>
      </div>
   ";
        }
        // line 438
        echo "
    <span class=\"d-none d-md-block\">
        <button type=\"button\" class=\"switch-panel-width btn btn-sm btn-square btn-icon btn-ghost-secondary position-absolute bottom-0 start-0 mb-2\">
            <i class=\"fas fa-caret-left\"></i>
        </button>
    </span>
</div>

<script type=\"text/javascript\">
\$(function() {
   if (\$(window).width() < 768) { // medium breakpoint (Todo check if it's possible to get bootstrap breakpoints withint javascript)
      \$('#itil-data .accordion-collapse').each(function() {
         \$(this).removeClass('show');
      })
   }
});

var reloadCategory = function() {
    var type = \$('[name=type]').val();

    \$('#category_block_";
        // line 458
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo " .field-container').load(
        '";
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/dropdownTicketCategories.php"), "html", null, true);
        echo "',
        {
            'type': type,
            'entity_restrict': ";
        // line 462
        echo twig_escape_filter($this->env, (($__internal_compile_38 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 462)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["entities_id"] ?? null) : null), "html", null, true);
        echo ",
            'value': ";
        // line 463
        echo twig_escape_filter($this->env, (($__internal_compile_39 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 463)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["itilcategories_id"] ?? null) : null), "html", null, true);
        echo ",
        }
    );
};
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/fields_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  833 => 463,  829 => 462,  823 => 459,  819 => 458,  797 => 438,  789 => 433,  784 => 431,  780 => 429,  774 => 427,  772 => 426,  767 => 424,  764 => 423,  761 => 422,  758 => 421,  755 => 420,  752 => 419,  750 => 418,  745 => 416,  741 => 415,  738 => 414,  735 => 413,  733 => 412,  730 => 411,  724 => 407,  718 => 406,  714 => 404,  712 => 400,  711 => 399,  710 => 398,  709 => 397,  707 => 396,  704 => 395,  700 => 394,  695 => 392,  691 => 390,  685 => 388,  683 => 387,  678 => 385,  672 => 382,  668 => 381,  665 => 380,  663 => 379,  660 => 378,  654 => 377,  651 => 376,  648 => 375,  645 => 374,  640 => 373,  638 => 372,  635 => 371,  632 => 366,  630 => 365,  627 => 364,  621 => 360,  615 => 359,  611 => 357,  609 => 353,  608 => 352,  607 => 351,  606 => 350,  604 => 349,  601 => 348,  597 => 347,  592 => 345,  588 => 343,  582 => 341,  580 => 340,  575 => 338,  569 => 335,  565 => 334,  562 => 333,  559 => 332,  553 => 331,  550 => 330,  547 => 329,  544 => 328,  539 => 327,  537 => 326,  534 => 325,  531 => 319,  529 => 318,  526 => 317,  518 => 312,  513 => 310,  509 => 308,  503 => 306,  501 => 305,  496 => 303,  490 => 300,  486 => 299,  483 => 298,  480 => 297,  477 => 296,  475 => 295,  472 => 294,  464 => 289,  459 => 287,  455 => 285,  451 => 283,  449 => 282,  443 => 279,  437 => 276,  433 => 275,  430 => 274,  427 => 273,  425 => 272,  417 => 267,  412 => 265,  405 => 261,  399 => 258,  393 => 255,  389 => 254,  386 => 253,  384 => 252,  376 => 247,  371 => 245,  368 => 244,  364 => 242,  362 => 241,  361 => 239,  359 => 237,  357 => 236,  354 => 235,  350 => 233,  348 => 229,  347 => 228,  346 => 226,  344 => 223,  342 => 222,  339 => 221,  335 => 219,  333 => 216,  332 => 214,  330 => 211,  328 => 210,  323 => 208,  320 => 207,  316 => 205,  314 => 199,  313 => 197,  311 => 194,  309 => 193,  304 => 191,  299 => 188,  297 => 187,  296 => 185,  295 => 182,  290 => 181,  287 => 180,  284 => 179,  281 => 178,  278 => 177,  275 => 176,  272 => 175,  269 => 174,  266 => 173,  263 => 172,  260 => 171,  257 => 170,  254 => 169,  251 => 166,  248 => 165,  245 => 164,  242 => 161,  239 => 160,  237 => 158,  236 => 157,  235 => 156,  232 => 155,  228 => 153,  226 => 152,  225 => 150,  223 => 148,  220 => 147,  217 => 146,  214 => 145,  211 => 144,  208 => 143,  206 => 142,  205 => 139,  203 => 138,  201 => 137,  198 => 136,  194 => 134,  192 => 133,  191 => 131,  189 => 129,  187 => 128,  184 => 127,  180 => 125,  178 => 124,  177 => 122,  175 => 120,  173 => 119,  170 => 118,  166 => 116,  164 => 115,  163 => 113,  161 => 111,  159 => 110,  155 => 108,  153 => 107,  152 => 105,  151 => 103,  148 => 102,  145 => 101,  141 => 99,  139 => 98,  138 => 96,  136 => 94,  134 => 93,  131 => 92,  127 => 90,  125 => 87,  124 => 85,  123 => 83,  120 => 82,  116 => 80,  114 => 79,  112 => 78,  109 => 77,  105 => 75,  103 => 72,  102 => 71,  101 => 69,  99 => 66,  96 => 65,  94 => 64,  89 => 62,  83 => 59,  76 => 55,  70 => 52,  64 => 49,  60 => 47,  58 => 46,  54 => 44,  52 => 43,  50 => 42,  47 => 41,  45 => 39,  44 => 38,  43 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/fields_panel.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\itilobject\\fields_panel.html.twig");
    }
}
