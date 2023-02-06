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

/* generic_show_form.html.twig */
class __TwigTemplate_ac571ed242e7e18dfc566bd1eab19a14b69c4e327fe8c0d7af2c8844beec3759 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "generic_show_form.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        $context["bg"] = "";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 37)) {
            // line 38
            echo "   ";
            $context["bg"] = "asset-deleted";
        }
        // line 40
        echo "
<div class=\"asset ";
        // line 41
        echo twig_escape_filter($this->env, ($context["bg"] ?? null), "html", null, true);
        echo "\">
   ";
        // line 42
        echo twig_include($this->env, $context, "components/form/header.html.twig");
        echo "

   ";
        // line 44
        $context["rand"] = twig_random($this->env);
        // line 45
        echo "   ";
        $context["params"] = (($context["params"]) ?? ([]));
        // line 46
        echo "   ";
        $context["target"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 46) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 46)));
        // line 47
        echo "   ";
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 47) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["withtemplate"] ?? null) : null)) : (""));
        // line 48
        echo "   ";
        $context["item_type"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 48);
        // line 49
        echo "   ";
        $context["item_has_pictures"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasItemtypeOrModelPictures", [], "method", false, false, false, 49);
        // line 50
        echo "   ";
        $context["field_options"] = ["locked_fields" => twig_get_attribute($this->env, $this->source,         // line 51
($context["item"] ?? null), "getLockedFields", [], "method", false, false, false, 51)];
        // line 53
        echo "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-";
        // line 55
        echo ((($context["item_has_pictures"] ?? null)) ? ("9") : ("12"));
        echo " flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  ";
        // line 59
        $this->displayBlock('form_fields', $context, $blocks);
        // line 585
        echo "               </div> ";
        // line 586
        echo "            </div> ";
        // line 587
        echo "         </div> ";
        // line 588
        echo "      </div>
      ";
        // line 589
        if (($context["item_has_pictures"] ?? null)) {
            // line 590
            echo "         <div class=\"col-12 col-xxl-3 flex-column\">
            <div class=\"flex-row asset-pictures\">
               ";
            // line 592
            echo twig_include($this->env, $context, "components/form/pictures.html.twig", ["gallery_type" => ""]);
            echo "
            </div>
         </div>
      ";
        }
        // line 596
        echo "   </div> ";
        // line 597
        echo "
   ";
        // line 598
        if ((($context["item_type"] ?? null) == "Contract")) {
            // line 599
            echo "      ";
            echo twig_include($this->env, $context, "components/form/support_hours.html.twig");
            echo "
   ";
        }
        // line 601
        echo "   ";
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
   ";
        // line 602
        if (( !array_key_exists("no_inventory_footer", $context) || (($context["no_inventory_footer"] ?? null) == false))) {
            // line 603
            echo "      ";
            echo twig_include($this->env, $context, "components/form/inventory_info.html.twig");
            echo "
   ";
        }
        // line 605
        echo "
   ";
        // line 606
        if (((null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["formfooter"] ?? null) : null)) || ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["formfooter"] ?? null) : null) == true))) {
            // line 607
            echo "      <div class=\"card-footer mx-n2 mb-n2 mt-4\">
         ";
            // line 608
            echo twig_include($this->env, $context, "components/form/dates.html.twig");
            echo "
      </div>
   ";
        }
        // line 611
        echo "</div>
";
    }

    // line 59
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "name"], "method", false, false, false, 60)) {
            // line 61
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["name",             // line 63
($context["item"] ?? null), (((            // line 64
($context["item_type"] ?? null) == "Contact")) ? (__("Patrimônio")) : (__("Patrimônio"))),             // line 65
($context["withtemplate"] ?? null), twig_array_merge(            // line 66
($context["field_options"] ?? null), ["required" => true])], 61, $context, $this->getSourceContext());
            // line 69
            echo "
                     ";
        }
        // line 71
        echo "
                     ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "firstname"], "method", false, false, false, 72)) {
            // line 73
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["firstname",             // line 75
($context["item"] ?? null), __("First name"),             // line 77
($context["withtemplate"] ?? null),             // line 78
($context["field_options"] ?? null)], 73, $context, $this->getSourceContext());
            // line 79
            echo "
                     ";
        }
        // line 81
        echo "
                     ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_active"], "method", false, false, false, 82)) {
            // line 83
            echo "                        ";
            if (( !twig_test_empty(($context["withtemplate"] ?? null)) || (($context["withtemplate"] ?? null) == 1))) {
                // line 84
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_hiddenField", ["is_active", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 84)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_active"] ?? null) : null), __("Is active"), ["add_field_html" => __("No")]], 84, $context, $this->getSourceContext());
                // line 86
                echo "
                        ";
            } else {
                // line 88
                echo "                        ";
            }
            // line 89
            echo "                     ";
        }
        // line 90
        echo "
                     ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "states_id"], "method", false, false, false, 91)) {
            // line 92
            echo "                        ";
            $context["condition"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 92), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("state_types"))) ? ([("is_visible_" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 92))) => 1]) : ([]));
            // line 93
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["State", "states_id", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 96
($context["item"] ?? null), "fields", [], "any", false, false, false, 96)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["states_id"] ?? null) : null), __("Status"), twig_array_merge(            // line 98
($context["field_options"] ?? null), ["entity" => (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 99
($context["item"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["entities_id"] ?? null) : null), "condition" =>             // line 100
($context["condition"] ?? null)])], 93, $context, $this->getSourceContext());
            // line 102
            echo "
                     ";
        }
        // line 104
        echo "
                     ";
        // line 105
        $context["fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 105);
        // line 106
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["fk"] ?? null)], "method", false, false, false, 106)) {
            // line 107
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 108
($context["item_type"] ?? null),             // line 109
($context["fk"] ?? null), (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 110
($context["item"] ?? null), "fields", [], "any", false, false, false, 110)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["fk"] ?? null)] ?? null) : null), __("As child of"), twig_array_merge(            // line 112
($context["field_options"] ?? null), ["entity" => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 113
($context["item"] ?? null), "fields", [], "any", false, false, false, 113)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["entities_id"] ?? null) : null)])], 107, $context, $this->getSourceContext());
            // line 115
            echo "
                     ";
        }
        // line 117
        echo "
                     ";
        // line 118
        if (((($context["item_type"] ?? null) != "SoftwareLicense") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_helpdesk_visible"], "method", false, false, false, 118))) {
            // line 119
            echo "                        ";
            // line 120
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_checkboxField", ["is_helpdesk_visible", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,             // line 122
($context["item"] ?? null), "fields", [], "any", false, false, false, 122)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["is_helpdesk_visible"] ?? null) : null), __("Associable to a ticket"),             // line 124
($context["field_options"] ?? null)], 120, $context, $this->getSourceContext());
            // line 125
            echo "
                     ";
        }
        // line 127
        echo "
                     ";
        // line 128
        $context["dc_breadcrumbs"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\DCBreadcrumb")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getDcBreadcrumb", [], "method", false, false, false, 128)) : ([]));
        // line 129
        echo "                     ";
        if ((twig_length_filter($this->env, ($context["dc_breadcrumbs"] ?? null)) > 0)) {
            // line 130
            echo "                        ";
            ob_start(function () { return ''; });
            // line 131
            echo "                           <ol class=\"breadcrumb breadcrumb-arrows\" aria-label=\"breadcrumbs\">
                              ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["dc_breadcrumbs"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["dc_item"]) {
                // line 133
                echo "                                 <li class=\"breadcrumb-item text-nowrap\">";
                echo $context["dc_item"];
                echo "</li>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dc_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                           </ol>
                        ";
            $context["dc_breadcrumbs"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 137
            echo "
                        ";
            // line 138
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["",             // line 140
($context["dc_breadcrumbs"] ?? null), __("Data center position")], 138, $context, $this->getSourceContext());
            // line 142
            echo "

                        ";
            // line 144
            echo twig_call_macro($macros["fields"], "macro_nullField", [], 144, $context, $this->getSourceContext());
            echo " ";
            // line 145
            echo "                     ";
        }
        // line 146
        echo "
                     ";
        // line 147
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "locations_id"], "method", false, false, false, 147)) {
            // line 148
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,             // line 151
($context["item"] ?? null), "fields", [], "any", false, false, false, 151)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), twig_array_merge(            // line 153
($context["field_options"] ?? null), ["entity" => (($__internal_compile_13 = twig_get_attribute($this->env, $this->source,             // line 154
($context["item"] ?? null), "fields", [], "any", false, false, false, 154)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["entities_id"] ?? null) : null)])], 148, $context, $this->getSourceContext());
            // line 156
            echo "
                     ";
        }
        // line 158
        echo "
                     ";
        // line 159
        if (((($context["item_type"] ?? null) == "Unmanaged") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "item_type"], "method", false, false, false, 159))) {
            // line 160
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["item_type", (($__internal_compile_14 = twig_get_attribute($this->env, $this->source,             // line 162
($context["item"] ?? null), "fields", [], "any", false, false, false, 162)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["itemtype"] ?? null) : null), _n("Type", "Types", 1), [0 => "Computer", 1 => "NetworkEquipment", 2 => "Printer", 3 => "Peripheral", 4 => "Phone"],             // line 167
($context["field_options"] ?? null)], 160, $context, $this->getSourceContext());
            // line 168
            echo "
                     ";
        }
        // line 170
        echo "
                     ";
        // line 171
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_domaincreation"], "method", false, false, false, 171)) {
            // line 172
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_domaincreation", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 172)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["date_domaincreation"] ?? null) : null), __("Registration date")], 172, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 174
        echo "
                     ";
        // line 175
        $context["type_itemtype"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeClass", [], "method", false, false, false, 175);
        // line 176
        echo "                     ";
        $context["type_fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeForeignKeyField", [], "method", false, false, false, 176);
        // line 177
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["type_fk"] ?? null)], "method", false, false, false, 177)) {
            // line 178
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 179
($context["type_itemtype"] ?? null),             // line 180
($context["type_fk"] ?? null), (($__internal_compile_16 = twig_get_attribute($this->env, $this->source,             // line 181
($context["item"] ?? null), "fields", [], "any", false, false, false, 181)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[($context["type_fk"] ?? null)] ?? null) : null), _n("Type", "Types", 1),             // line 183
($context["field_options"] ?? null)], 178, $context, $this->getSourceContext());
            // line 184
            echo "
                     ";
        }
        // line 186
        echo "
                     ";
        // line 187
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "usertitles_id"], "method", false, false, false, 187)) {
            // line 188
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["UserTitle", "usertitles_id", (($__internal_compile_17 = twig_get_attribute($this->env, $this->source,             // line 191
($context["item"] ?? null), "fields", [], "any", false, false, false, 191)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["usertitles_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("UserTitle"), twig_array_merge(            // line 193
($context["field_options"] ?? null), ["entity" => (($__internal_compile_18 = twig_get_attribute($this->env, $this->source,             // line 194
($context["item"] ?? null), "fields", [], "any", false, false, false, 194)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null)])], 188, $context, $this->getSourceContext());
            // line 196
            echo "
                     ";
        }
        // line 198
        echo "
                    ";
        // line 208
        echo "
                     ";
        // line 209
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phone"], "method", false, false, false, 209)) {
            // line 210
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phone",             // line 212
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),             // line 214
($context["withtemplate"] ?? null),             // line 215
($context["field_options"] ?? null)], 210, $context, $this->getSourceContext());
            // line 216
            echo "
                     ";
        }
        // line 218
        echo "
                     ";
        // line 219
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phone2"], "method", false, false, false, 219)) {
            // line 220
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phone2",             // line 222
($context["item"] ?? null), __("Phone 2"),             // line 224
($context["withtemplate"] ?? null),             // line 225
($context["field_options"] ?? null)], 220, $context, $this->getSourceContext());
            // line 226
            echo "
                     ";
        }
        // line 228
        echo "
                     ";
        // line 229
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phonenumber"], "method", false, false, false, 229)) {
            // line 230
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phonenumber",             // line 232
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),             // line 234
($context["withtemplate"] ?? null),             // line 235
($context["field_options"] ?? null)], 230, $context, $this->getSourceContext());
            // line 236
            echo "
                     ";
        }
        // line 238
        echo "
                     ";
        // line 239
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "mobile"], "method", false, false, false, 239)) {
            // line 240
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["mobile",             // line 242
($context["item"] ?? null), __("Mobile phone"),             // line 244
($context["withtemplate"] ?? null),             // line 245
($context["field_options"] ?? null)], 240, $context, $this->getSourceContext());
            // line 246
            echo "
                     ";
        }
        // line 248
        echo "
                     ";
        // line 249
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "fax"], "method", false, false, false, 249)) {
            // line 250
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["fax",             // line 252
($context["item"] ?? null), __("Fax"),             // line 254
($context["withtemplate"] ?? null),             // line 255
($context["field_options"] ?? null)], 250, $context, $this->getSourceContext());
            // line 256
            echo "
                     ";
        }
        // line 258
        echo "
                     ";
        // line 259
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "website"], "method", false, false, false, 259)) {
            // line 260
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["website",             // line 262
($context["item"] ?? null), __("Website"),             // line 264
($context["withtemplate"] ?? null),             // line 265
($context["field_options"] ?? null)], 260, $context, $this->getSourceContext());
            // line 266
            echo "
                     ";
        }
        // line 268
        echo "
                     ";
        // line 269
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "email"], "method", false, false, false, 269)) {
            // line 270
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["email",             // line 272
($context["item"] ?? null), _n("Email", "Emails", 1),             // line 274
($context["withtemplate"] ?? null), twig_array_merge(            // line 275
($context["field_options"] ?? null), ["required" => true])], 270, $context, $this->getSourceContext());
            // line 278
            echo "
                     ";
        }
        // line 280
        echo "
                     ";
        // line 281
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "address"], "method", false, false, false, 281)) {
            // line 282
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["address", (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 282)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["address"] ?? null) : null), __("Address")], 282, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 284
        echo "
                     ";
        // line 285
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "postalcode"], "method", false, false, false, 285)) {
            // line 286
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["postalcode",             // line 288
($context["item"] ?? null), __("Postal code"),             // line 290
($context["withtemplate"] ?? null),             // line 291
($context["field_options"] ?? null)], 286, $context, $this->getSourceContext());
            // line 292
            echo "
                     ";
        }
        // line 294
        echo "
                     ";
        // line 295
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "town"], "method", false, false, false, 295)) {
            // line 296
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["town",             // line 298
($context["item"] ?? null), __("City"),             // line 300
($context["withtemplate"] ?? null),             // line 301
($context["field_options"] ?? null)], 296, $context, $this->getSourceContext());
            // line 302
            echo "
                     ";
        }
        // line 304
        echo "
                     ";
        // line 306
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "postcode"], "method", false, false, false, 306)) {
            // line 307
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["postcode",             // line 309
($context["item"] ?? null), __("Postal code"),             // line 311
($context["withtemplate"] ?? null),             // line 312
($context["field_options"] ?? null)], 307, $context, $this->getSourceContext());
            // line 313
            echo "
                     ";
        }
        // line 315
        echo "
                     ";
        // line 316
        if (((($context["item_type"] ?? null) == "Supplier") || (($context["item_type"] ?? null) == "Contact"))) {
            // line 317
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["state",             // line 319
($context["item"] ?? null), _x("location", "State"),             // line 321
($context["withtemplate"] ?? null),             // line 322
($context["field_options"] ?? null)], 317, $context, $this->getSourceContext());
            // line 323
            echo "
                     ";
        }
        // line 325
        echo "
                     ";
        // line 326
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "country"], "method", false, false, false, 326)) {
            // line 327
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["country",             // line 329
($context["item"] ?? null), __("Country"),             // line 331
($context["withtemplate"] ?? null),             // line 332
($context["field_options"] ?? null)], 327, $context, $this->getSourceContext());
            // line 333
            echo "
                     ";
        }
        // line 335
        echo "
                     ";
        // line 336
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_expiration"], "method", false, false, false, 336)) {
            // line 337
            echo "                        ";
            if ((($context["item_type"] ?? null) == "Certificate")) {
                // line 338
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_dateField", ["date_expiration", (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 338)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["date_expiration"] ?? null) : null), __("Expiration date"), ["helper" => __("Empty for infinite"), "checkIsExpired" => true]], 338, $context, $this->getSourceContext());
                // line 341
                echo "
                        ";
            } else {
                // line 343
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_expiration", (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 343)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["date_expiration"] ?? null) : null), __("Expiration date"), ["helper" => __("Empty for infinite"), "checkIsExpired" => true]], 343, $context, $this->getSourceContext());
                // line 346
                echo "
                        ";
            }
            // line 348
            echo "                     ";
        }
        // line 349
        echo "
                     ";
        // line 350
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "ref"], "method", false, false, false, 350)) {
            // line 351
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["ref", (($__internal_compile_22 = twig_get_attribute($this->env, $this->source,             // line 353
($context["item"] ?? null), "fields", [], "any", false, false, false, 353)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["ref"] ?? null) : null), __("Reference"),             // line 355
($context["field_options"] ?? null)], 351, $context, $this->getSourceContext());
            // line 356
            echo "
                     ";
        }
        // line 358
        echo "

                     ";
        // line 360
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "manufacturers_id"], "method", false, false, false, 360)) {
            // line 361
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Manufacturer", "manufacturers_id", (($__internal_compile_23 = twig_get_attribute($this->env, $this->source,             // line 364
($context["item"] ?? null), "fields", [], "any", false, false, false, 364)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["manufacturers_id"] ?? null) : null), (((is_string($__internal_compile_24 =             // line 365
($context["item_type"] ?? null)) && is_string($__internal_compile_25 = "Software") && ('' === $__internal_compile_25 || 0 === strpos($__internal_compile_24, $__internal_compile_25)))) ? (__("Publisher")) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Manufacturer"))),             // line 366
($context["field_options"] ?? null)], 361, $context, $this->getSourceContext());
            // line 367
            echo "
                     ";
        }
        // line 369
        echo "
                     ";
        // line 382
        echo "
                     ";
        // line 383
        $context["model_itemtype"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelClass", [], "method", false, false, false, 383);
        // line 384
        echo "                     ";
        $context["model_fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelForeignKeyField", [], "method", false, false, false, 384);
        // line 385
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["model_fk"] ?? null)], "method", false, false, false, 385)) {
            // line 386
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 387
($context["model_itemtype"] ?? null),             // line 388
($context["model_fk"] ?? null), (($__internal_compile_26 = twig_get_attribute($this->env, $this->source,             // line 389
($context["item"] ?? null), "fields", [], "any", false, false, false, 389)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[($context["model_fk"] ?? null)] ?? null) : null), _n("Model", "Models", 1), twig_array_merge(            // line 391
($context["field_options"] ?? null), ["required" => true])], 386, $context, $this->getSourceContext());
            // line 394
            echo "
                     ";
        }
        // line 396
        echo "
                     ";
        // line 406
        echo "
                     ";
        // line 407
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "serial"], "method", false, false, false, 407)) {
            // line 408
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["serial", (($__internal_compile_27 = twig_get_attribute($this->env, $this->source,             // line 410
($context["item"] ?? null), "fields", [], "any", false, false, false, 410)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["serial"] ?? null) : null), __("Serial number"), twig_array_merge(            // line 412
($context["field_options"] ?? null), ["required" => true])], 408, $context, $this->getSourceContext());
            // line 415
            echo "
                     ";
        }
        // line 417
        echo "
                     ";
        // line 427
        echo "
                     ";
        // line 437
        echo "
                   

                     ";
        // line 440
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "users_id"], "method", false, false, false, 440)) {
            // line 441
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id", (($__internal_compile_28 = twig_get_attribute($this->env, $this->source,             // line 444
($context["item"] ?? null), "fields", [], "any", false, false, false, 444)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["users_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), twig_array_merge(            // line 446
($context["field_options"] ?? null), ["entity" => (($__internal_compile_29 = twig_get_attribute($this->env, $this->source,             // line 447
($context["item"] ?? null), "fields", [], "any", false, false, false, 447)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["entities_id"] ?? null) : null), "right" => "all"])], 441, $context, $this->getSourceContext());
            // line 450
            echo "
                     ";
        }
        // line 452
        echo "
                     

                     ";
        // line 455
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "size"], "method", false, false, false, 455)) {
            // line 456
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_numberField", ["size", (($__internal_compile_30 = twig_get_attribute($this->env, $this->source,             // line 458
($context["item"] ?? null), "fields", [], "any", false, false, false, 458)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["size"] ?? null) : null), __("Size"), twig_array_merge(            // line 460
($context["field_options"] ?? null), ["min" => 0, "step" => 1])], 456, $context, $this->getSourceContext());
            // line 464
            echo "
                     ";
        }
        // line 466
        echo "
                     ";
        // line 476
        echo "
                     ";
        // line 489
        echo "
                     ";
        // line 498
        echo "
                     ";
        // line 508
        echo "
                     ";
        // line 509
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "comment"], "method", false, false, false, 509)) {
            // line 510
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_31 = twig_get_attribute($this->env, $this->source,             // line 512
($context["item"] ?? null), "fields", [], "any", false, false, false, 512)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()),             // line 514
($context["field_options"] ?? null)], 510, $context, $this->getSourceContext());
            // line 515
            echo "
                     ";
        }
        // line 517
        echo "

                     ";
        // line 519
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "alarm_threshold"], "method", false, false, false, 519)) {
            // line 520
            echo "                        ";
            ob_start(function () { return ''; });
            // line 521
            echo "                           ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [0 => "alarm_threshold", 1 => twig_array_merge(["value" => (($__internal_compile_32 = twig_get_attribute($this->env, $this->source,             // line 522
($context["item"] ?? null), "fields", [], "any", false, false, false, 522)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["alarm_threshold"] ?? null) : null), "rand" =>             // line 523
($context["rand"] ?? null), "width" => "100%", "min" => 0, "max" => 100, "step" => 1, "toadd" => ["-1" => __("Never")]],             // line 529
($context["params"] ?? null))]);
            // line 530
            echo "                        ";
            $context["dd_alarm_treshold"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 531
            echo "                        ";
            ob_start(function () { return ''; });
            // line 532
            echo "                           <span class=\"text-muted\">
                              ";
            // line 533
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", [0 => ($context["item_type"] ?? null), 1 => (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 533)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["id"] ?? null) : null)]);
            // line 534
            echo "                           </span>
                        ";
            $context["last_alert_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 536
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["alarm_threshold",             // line 538
($context["dd_alarm_treshold"] ?? null), __("Alert threshold"), twig_array_merge(            // line 540
($context["field_options"] ?? null), ["add_field_html" =>             // line 541
($context["last_alert_html"] ?? null)])], 536, $context, $this->getSourceContext());
            // line 543
            echo "
                     ";
        }
        // line 545
        echo "

                     ";
        // line 547
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "begin_date"], "method", false, false, false, 547)) {
            // line 548
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dateField", ["begin_date", (($__internal_compile_34 = twig_get_attribute($this->env, $this->source,             // line 550
($context["item"] ?? null), "fields", [], "any", false, false, false, 550)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["begin_date"] ?? null) : null), __("Start date"),             // line 552
($context["field_options"] ?? null)], 548, $context, $this->getSourceContext());
            // line 553
            echo "
                     ";
        }
        // line 555
        echo "
                     ";
        // line 565
        echo "
                     ";
        // line 566
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "pictures"], "method", false, false, false, 566)) {
            // line 567
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_fileField", ["pictures", null, _n("Picture", "Pictures", Session::getPluralNumber()), ["onlyimages" => true, "multiple" => true]], 567, $context, $this->getSourceContext());
            // line 570
            echo "
                     ";
        }
        // line 572
        echo "
                     ";
        // line 573
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_active"], "method", false, false, false, 573)) {
            // line 574
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_active", (($__internal_compile_35 = twig_get_attribute($this->env, $this->source,             // line 576
($context["item"] ?? null), "fields", [], "any", false, false, false, 576)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["is_active"] ?? null) : null), __("Active"),             // line 578
($context["field_options"] ?? null)], 574, $context, $this->getSourceContext());
            // line 579
            echo "
                     ";
        }
        // line 581
        echo "
                     ";
        // line 582
        $this->displayBlock('more_fields', $context, $blocks);
        // line 584
        echo "                  ";
    }

    // line 582
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 583
        echo "                     ";
    }

    public function getTemplateName()
    {
        return "generic_show_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  855 => 583,  851 => 582,  847 => 584,  845 => 582,  842 => 581,  838 => 579,  836 => 578,  835 => 576,  833 => 574,  831 => 573,  828 => 572,  824 => 570,  821 => 567,  819 => 566,  816 => 565,  813 => 555,  809 => 553,  807 => 552,  806 => 550,  804 => 548,  802 => 547,  798 => 545,  794 => 543,  792 => 541,  791 => 540,  790 => 538,  788 => 536,  784 => 534,  782 => 533,  779 => 532,  776 => 531,  773 => 530,  771 => 529,  770 => 523,  769 => 522,  767 => 521,  764 => 520,  762 => 519,  758 => 517,  754 => 515,  752 => 514,  751 => 512,  749 => 510,  747 => 509,  744 => 508,  741 => 498,  738 => 489,  735 => 476,  732 => 466,  728 => 464,  726 => 460,  725 => 458,  723 => 456,  721 => 455,  716 => 452,  712 => 450,  710 => 447,  709 => 446,  708 => 444,  706 => 441,  704 => 440,  699 => 437,  696 => 427,  693 => 417,  689 => 415,  687 => 412,  686 => 410,  684 => 408,  682 => 407,  679 => 406,  676 => 396,  672 => 394,  670 => 391,  669 => 389,  668 => 388,  667 => 387,  665 => 386,  662 => 385,  659 => 384,  657 => 383,  654 => 382,  651 => 369,  647 => 367,  645 => 366,  644 => 365,  643 => 364,  641 => 361,  639 => 360,  635 => 358,  631 => 356,  629 => 355,  628 => 353,  626 => 351,  624 => 350,  621 => 349,  618 => 348,  614 => 346,  611 => 343,  607 => 341,  604 => 338,  601 => 337,  599 => 336,  596 => 335,  592 => 333,  590 => 332,  589 => 331,  588 => 329,  586 => 327,  584 => 326,  581 => 325,  577 => 323,  575 => 322,  574 => 321,  573 => 319,  571 => 317,  569 => 316,  566 => 315,  562 => 313,  560 => 312,  559 => 311,  558 => 309,  556 => 307,  553 => 306,  550 => 304,  546 => 302,  544 => 301,  543 => 300,  542 => 298,  540 => 296,  538 => 295,  535 => 294,  531 => 292,  529 => 291,  528 => 290,  527 => 288,  525 => 286,  523 => 285,  520 => 284,  514 => 282,  512 => 281,  509 => 280,  505 => 278,  503 => 275,  502 => 274,  501 => 272,  499 => 270,  497 => 269,  494 => 268,  490 => 266,  488 => 265,  487 => 264,  486 => 262,  484 => 260,  482 => 259,  479 => 258,  475 => 256,  473 => 255,  472 => 254,  471 => 252,  469 => 250,  467 => 249,  464 => 248,  460 => 246,  458 => 245,  457 => 244,  456 => 242,  454 => 240,  452 => 239,  449 => 238,  445 => 236,  443 => 235,  442 => 234,  441 => 232,  439 => 230,  437 => 229,  434 => 228,  430 => 226,  428 => 225,  427 => 224,  426 => 222,  424 => 220,  422 => 219,  419 => 218,  415 => 216,  413 => 215,  412 => 214,  411 => 212,  409 => 210,  407 => 209,  404 => 208,  401 => 198,  397 => 196,  395 => 194,  394 => 193,  393 => 191,  391 => 188,  389 => 187,  386 => 186,  382 => 184,  380 => 183,  379 => 181,  378 => 180,  377 => 179,  375 => 178,  372 => 177,  369 => 176,  367 => 175,  364 => 174,  358 => 172,  356 => 171,  353 => 170,  349 => 168,  347 => 167,  346 => 162,  344 => 160,  342 => 159,  339 => 158,  335 => 156,  333 => 154,  332 => 153,  331 => 151,  329 => 148,  327 => 147,  324 => 146,  321 => 145,  318 => 144,  314 => 142,  312 => 140,  311 => 138,  308 => 137,  304 => 135,  295 => 133,  291 => 132,  288 => 131,  285 => 130,  282 => 129,  280 => 128,  277 => 127,  273 => 125,  271 => 124,  270 => 122,  268 => 120,  266 => 119,  264 => 118,  261 => 117,  257 => 115,  255 => 113,  254 => 112,  253 => 110,  252 => 109,  251 => 108,  249 => 107,  246 => 106,  244 => 105,  241 => 104,  237 => 102,  235 => 100,  234 => 99,  233 => 98,  232 => 96,  230 => 93,  227 => 92,  225 => 91,  222 => 90,  219 => 89,  216 => 88,  212 => 86,  209 => 84,  206 => 83,  204 => 82,  201 => 81,  197 => 79,  195 => 78,  194 => 77,  193 => 75,  191 => 73,  189 => 72,  186 => 71,  182 => 69,  180 => 66,  179 => 65,  178 => 64,  177 => 63,  175 => 61,  172 => 60,  168 => 59,  163 => 611,  157 => 608,  154 => 607,  152 => 606,  149 => 605,  143 => 603,  141 => 602,  136 => 601,  130 => 599,  128 => 598,  125 => 597,  123 => 596,  116 => 592,  112 => 590,  110 => 589,  107 => 588,  105 => 587,  103 => 586,  101 => 585,  99 => 59,  92 => 55,  88 => 53,  86 => 51,  84 => 50,  81 => 49,  78 => 48,  75 => 47,  72 => 46,  69 => 45,  67 => 44,  62 => 42,  58 => 41,  55 => 40,  51 => 38,  49 => 37,  47 => 36,  44 => 35,  42 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "generic_show_form.html.twig", "C:\\wamp64\\www\\glpi106\\templates\\generic_show_form.html.twig");
    }
}
