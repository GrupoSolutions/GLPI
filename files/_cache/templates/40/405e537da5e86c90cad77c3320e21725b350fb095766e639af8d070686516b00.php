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
class __TwigTemplate_0093caad0d336b8a04b6970f2abc5e3a2c4a8c465b656986e1a20b59ac8a9058 extends Template
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
        // line 640
        echo "               </div> ";
        // line 641
        echo "            </div> ";
        // line 642
        echo "         </div> ";
        // line 643
        echo "      </div>
      ";
        // line 644
        if (($context["item_has_pictures"] ?? null)) {
            // line 645
            echo "         <div class=\"col-12 col-xxl-3 flex-column\">
            <div class=\"flex-row asset-pictures\">
               ";
            // line 647
            echo twig_include($this->env, $context, "components/form/pictures.html.twig", ["gallery_type" => ""]);
            echo "
            </div>
         </div>
      ";
        }
        // line 651
        echo "   </div> ";
        // line 652
        echo "
   ";
        // line 653
        if ((0 === twig_compare(($context["item_type"] ?? null), "Contract"))) {
            // line 654
            echo "      ";
            echo twig_include($this->env, $context, "components/form/support_hours.html.twig");
            echo "
   ";
        }
        // line 656
        echo "   ";
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
   ";
        // line 657
        if (( !array_key_exists("no_inventory_footer", $context) || (0 === twig_compare(($context["no_inventory_footer"] ?? null), false)))) {
            // line 658
            echo "      ";
            echo twig_include($this->env, $context, "components/form/inventory_info.html.twig");
            echo "
   ";
        }
        // line 660
        echo "
   ";
        // line 661
        if (((null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["formfooter"] ?? null) : null)) || (0 === twig_compare((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["formfooter"] ?? null) : null), true)))) {
            // line 662
            echo "      <div class=\"card-footer mx-n2 mb-n2 mt-4\">
         ";
            // line 663
            echo twig_include($this->env, $context, "components/form/dates.html.twig");
            echo "
      </div>
   ";
        }
        // line 666
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
($context["item"] ?? null), (((0 === twig_compare(            // line 64
($context["item_type"] ?? null), "Contact"))) ? (__("Surname")) : (__("Name"))),             // line 65
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
            if (( !twig_test_empty(($context["withtemplate"] ?? null)) || (0 === twig_compare(($context["withtemplate"] ?? null), 1)))) {
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
        if (((0 !== twig_compare(($context["item_type"] ?? null), "SoftwareLicense")) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_helpdesk_visible"], "method", false, false, false, 118))) {
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
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["dc_breadcrumbs"] ?? null)), 0))) {
            // line 130
            echo "                        ";
            ob_start();
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
        if (((0 === twig_compare(($context["item_type"] ?? null), "Unmanaged")) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "item_type"], "method", false, false, false, 159))) {
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
($context["withtemplate"] ?? null),             // line 275
($context["field_options"] ?? null)], 270, $context, $this->getSourceContext());
            // line 276
            echo "
                     ";
        }
        // line 278
        echo "
                     ";
        // line 279
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "address"], "method", false, false, false, 279)) {
            // line 280
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["address", (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 280)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["address"] ?? null) : null), __("Address")], 280, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 282
        echo "
                     ";
        // line 283
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "postalcode"], "method", false, false, false, 283)) {
            // line 284
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["postalcode",             // line 286
($context["item"] ?? null), __("Postal code"),             // line 288
($context["withtemplate"] ?? null),             // line 289
($context["field_options"] ?? null)], 284, $context, $this->getSourceContext());
            // line 290
            echo "
                     ";
        }
        // line 292
        echo "
                     ";
        // line 293
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "town"], "method", false, false, false, 293)) {
            // line 294
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["town",             // line 296
($context["item"] ?? null), __("City"),             // line 298
($context["withtemplate"] ?? null),             // line 299
($context["field_options"] ?? null)], 294, $context, $this->getSourceContext());
            // line 300
            echo "
                     ";
        }
        // line 302
        echo "
                     ";
        // line 304
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "postcode"], "method", false, false, false, 304)) {
            // line 305
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["postcode",             // line 307
($context["item"] ?? null), __("Postal code"),             // line 309
($context["withtemplate"] ?? null),             // line 310
($context["field_options"] ?? null)], 305, $context, $this->getSourceContext());
            // line 311
            echo "
                     ";
        }
        // line 313
        echo "
                     ";
        // line 314
        if (((0 === twig_compare(($context["item_type"] ?? null), "Supplier")) || (0 === twig_compare(($context["item_type"] ?? null), "Contact")))) {
            // line 315
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["state",             // line 317
($context["item"] ?? null), _x("location", "State"),             // line 319
($context["withtemplate"] ?? null),             // line 320
($context["field_options"] ?? null)], 315, $context, $this->getSourceContext());
            // line 321
            echo "
                     ";
        }
        // line 323
        echo "
                     ";
        // line 324
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "country"], "method", false, false, false, 324)) {
            // line 325
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["country",             // line 327
($context["item"] ?? null), __("Country"),             // line 329
($context["withtemplate"] ?? null),             // line 330
($context["field_options"] ?? null)], 325, $context, $this->getSourceContext());
            // line 331
            echo "
                     ";
        }
        // line 333
        echo "
                     ";
        // line 334
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_expiration"], "method", false, false, false, 334)) {
            // line 335
            echo "                        ";
            if ((0 === twig_compare(($context["item_type"] ?? null), "Certificate"))) {
                // line 336
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_dateField", ["date_expiration", (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 336)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["date_expiration"] ?? null) : null), __("Expiration date"), ["helper" => __("Empty for infinite"), "checkIsExpired" => true]], 336, $context, $this->getSourceContext());
                // line 339
                echo "
                        ";
            } else {
                // line 341
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_expiration", (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 341)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["date_expiration"] ?? null) : null), __("Expiration date"), ["helper" => __("Empty for infinite"), "checkIsExpired" => true]], 341, $context, $this->getSourceContext());
                // line 344
                echo "
                        ";
            }
            // line 346
            echo "                     ";
        }
        // line 347
        echo "
                     ";
        // line 348
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "ref"], "method", false, false, false, 348)) {
            // line 349
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["ref", (($__internal_compile_22 = twig_get_attribute($this->env, $this->source,             // line 351
($context["item"] ?? null), "fields", [], "any", false, false, false, 351)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["ref"] ?? null) : null), __("Reference"),             // line 353
($context["field_options"] ?? null)], 349, $context, $this->getSourceContext());
            // line 354
            echo "
                     ";
        }
        // line 356
        echo "
                    ";
        // line 369
        echo "
                     ";
        // line 370
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "manufacturers_id"], "method", false, false, false, 370)) {
            // line 371
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Manufacturer", "manufacturers_id", (($__internal_compile_23 = twig_get_attribute($this->env, $this->source,             // line 374
($context["item"] ?? null), "fields", [], "any", false, false, false, 374)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["manufacturers_id"] ?? null) : null), (((is_string($__internal_compile_24 =             // line 375
($context["item_type"] ?? null)) && is_string($__internal_compile_25 = "Software") && ('' === $__internal_compile_25 || 0 === strpos($__internal_compile_24, $__internal_compile_25)))) ? (__("Publisher")) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Manufacturer"))),             // line 376
($context["field_options"] ?? null)], 371, $context, $this->getSourceContext());
            // line 377
            echo "
                     ";
        }
        // line 379
        echo "
                     ";
        // line 392
        echo "
                     ";
        // line 393
        $context["model_itemtype"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelClass", [], "method", false, false, false, 393);
        // line 394
        echo "                     ";
        $context["model_fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelForeignKeyField", [], "method", false, false, false, 394);
        // line 395
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["model_fk"] ?? null)], "method", false, false, false, 395)) {
            // line 396
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 397
($context["model_itemtype"] ?? null),             // line 398
($context["model_fk"] ?? null), (($__internal_compile_26 = twig_get_attribute($this->env, $this->source,             // line 399
($context["item"] ?? null), "fields", [], "any", false, false, false, 399)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[($context["model_fk"] ?? null)] ?? null) : null), _n("Model", "Models", 1), twig_array_merge(            // line 401
($context["field_options"] ?? null), ["required" => true])], 396, $context, $this->getSourceContext());
            // line 404
            echo "
                     ";
        }
        // line 406
        echo "
                     ";
        // line 416
        echo "
                     ";
        // line 417
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "serial"], "method", false, false, false, 417)) {
            // line 418
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["serial", (($__internal_compile_27 = twig_get_attribute($this->env, $this->source,             // line 420
($context["item"] ?? null), "fields", [], "any", false, false, false, 420)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["serial"] ?? null) : null), __("Serial number"), twig_array_merge(            // line 422
($context["field_options"] ?? null), ["required" => true])], 418, $context, $this->getSourceContext());
            // line 425
            echo "
                     ";
        }
        // line 427
        echo "
                     ";
        // line 437
        echo "
                     ";
        // line 447
        echo "
                     ";
        // line 448
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "sysdescr"], "method", false, false, false, 448)) {
            // line 449
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["sysdescr", (($__internal_compile_28 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 449)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["sysdescr"] ?? null) : null), __("Sysdescr")], 449, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 451
        echo "
                     ";
        // line 452
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "users_id"], "method", false, false, false, 452)) {
            // line 453
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id", (($__internal_compile_29 = twig_get_attribute($this->env, $this->source,             // line 456
($context["item"] ?? null), "fields", [], "any", false, false, false, 456)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["users_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), twig_array_merge(            // line 458
($context["field_options"] ?? null), ["entity" => (($__internal_compile_30 = twig_get_attribute($this->env, $this->source,             // line 459
($context["item"] ?? null), "fields", [], "any", false, false, false, 459)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["entities_id"] ?? null) : null), "right" => "all"])], 453, $context, $this->getSourceContext());
            // line 462
            echo "
                     ";
        }
        // line 464
        echo "
                     ";
        // line 465
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_global"], "method", false, false, false, 465)) {
            // line 466
            echo "                        ";
            $context["management_restrict"] = 0;
            // line 467
            echo "                        ";
            if ((0 === twig_compare(($context["item_type"] ?? null), "Monitor"))) {
                // line 468
                echo "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("monitors_management_restrict");
                // line 469
                echo "                        ";
            } elseif ((0 === twig_compare(($context["item_type"] ?? null), "Peripheral"))) {
                // line 470
                echo "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("peripherals_management_restrict");
                // line 471
                echo "                        ";
            } elseif ((0 === twig_compare(($context["item_type"] ?? null), "Phone"))) {
                // line 472
                echo "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("phones_management_restrict");
                // line 473
                echo "                        ";
            } elseif ((0 === twig_compare(($context["item_type"] ?? null), "Printer"))) {
                // line 474
                echo "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("printers_management_restrict");
                // line 475
                echo "                        ";
            } else {
                // line 476
                echo "                           ";
                $context["management_restrict"] = 0;
                // line 477
                echo "                        ";
            }
            // line 478
            echo "                        ";
            ob_start();
            // line 479
            echo "                           ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showGlobalSwitch", [0 => (($__internal_compile_31 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 479)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["id"] ?? null) : null), 1 => ["withtemplate" =>             // line 480
($context["withtemplate"] ?? null), "value" => (($__internal_compile_32 = twig_get_attribute($this->env, $this->source,             // line 481
($context["item"] ?? null), "fields", [], "any", false, false, false, 481)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["is_global"] ?? null) : null), "management_restrict" =>             // line 482
($context["management_restrict"] ?? null), "target" =>             // line 483
($context["target"] ?? null), "width" => "100%"]]);
            // line 486
            echo "                        ";
            $context["dd_globalswitch"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 487
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["is_global",             // line 489
($context["dd_globalswitch"] ?? null), __("Management type")], 487, $context, $this->getSourceContext());
            // line 491
            echo "
                     ";
        }
        // line 493
        echo "
                     ";
        // line 494
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "size"], "method", false, false, false, 494)) {
            // line 495
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_numberField", ["size", (($__internal_compile_33 = twig_get_attribute($this->env, $this->source,             // line 497
($context["item"] ?? null), "fields", [], "any", false, false, false, 497)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["size"] ?? null) : null), __("Size"), twig_array_merge(            // line 499
($context["field_options"] ?? null), ["min" => 0, "step" => 0.01])], 495, $context, $this->getSourceContext());
            // line 503
            echo "
                     ";
        }
        // line 505
        echo "
                     ";
        // line 515
        echo "
                     ";
        // line 528
        echo "
                     ";
        // line 537
        echo "
                     ";
        // line 547
        echo "
                     ";
        // line 548
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "comment"], "method", false, false, false, 548)) {
            // line 549
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_34 = twig_get_attribute($this->env, $this->source,             // line 551
($context["item"] ?? null), "fields", [], "any", false, false, false, 551)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()),             // line 553
($context["field_options"] ?? null)], 549, $context, $this->getSourceContext());
            // line 554
            echo "
                     ";
        }
        // line 556
        echo "
                     ";
        // line 557
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "ram"], "method", false, false, false, 557)) {
            // line 558
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_numberField", ["ram", (($__internal_compile_35 = twig_get_attribute($this->env, $this->source,             // line 560
($context["item"] ?? null), "fields", [], "any", false, false, false, 560)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["ram"] ?? null) : null), twig_sprintf(__("%1\$s (%2\$s)"), _n("Memory", "Memories", 1), __("Mio")),             // line 562
($context["field_options"] ?? null)], 558, $context, $this->getSourceContext());
            // line 563
            echo "
                     ";
        }
        // line 565
        echo "
                     ";
        // line 566
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "alarm_threshold"], "method", false, false, false, 566)) {
            // line 567
            echo "                        ";
            ob_start();
            // line 568
            echo "                           ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [0 => "alarm_threshold", 1 => twig_array_merge(["value" => (($__internal_compile_36 = twig_get_attribute($this->env, $this->source,             // line 569
($context["item"] ?? null), "fields", [], "any", false, false, false, 569)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["alarm_threshold"] ?? null) : null), "rand" =>             // line 570
($context["rand"] ?? null), "width" => "100%", "min" => 0, "max" => 100, "step" => 1, "toadd" => ["-1" => __("Never")]],             // line 576
($context["params"] ?? null))]);
            // line 577
            echo "                        ";
            $context["dd_alarm_treshold"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 578
            echo "                        ";
            ob_start();
            // line 579
            echo "                           <span class=\"text-muted\">
                              ";
            // line 580
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", [0 => ($context["item_type"] ?? null), 1 => (($__internal_compile_37 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 580)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["id"] ?? null) : null)]);
            // line 581
            echo "                           </span>
                        ";
            $context["last_alert_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 583
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["alarm_threshold",             // line 585
($context["dd_alarm_treshold"] ?? null), __("Alert threshold"), twig_array_merge(            // line 587
($context["field_options"] ?? null), ["add_field_html" =>             // line 588
($context["last_alert_html"] ?? null)])], 583, $context, $this->getSourceContext());
            // line 590
            echo "
                     ";
        }
        // line 592
        echo "
                     ";
        // line 593
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "brand"], "method", false, false, false, 593)) {
            // line 594
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["brand", (($__internal_compile_38 = twig_get_attribute($this->env, $this->source,             // line 596
($context["item"] ?? null), "fields", [], "any", false, false, false, 596)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["brand"] ?? null) : null), __("Brand"),             // line 598
($context["field_options"] ?? null)], 594, $context, $this->getSourceContext());
            // line 599
            echo "
                     ";
        }
        // line 601
        echo "
                     ";
        // line 602
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "begin_date"], "method", false, false, false, 602)) {
            // line 603
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dateField", ["begin_date", (($__internal_compile_39 = twig_get_attribute($this->env, $this->source,             // line 605
($context["item"] ?? null), "fields", [], "any", false, false, false, 605)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["begin_date"] ?? null) : null), __("Start date"),             // line 607
($context["field_options"] ?? null)], 603, $context, $this->getSourceContext());
            // line 608
            echo "
                     ";
        }
        // line 610
        echo "
                     ";
        // line 620
        echo "
                     ";
        // line 621
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "pictures"], "method", false, false, false, 621)) {
            // line 622
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_fileField", ["pictures", null, _n("Picture", "Pictures", Session::getPluralNumber()), ["onlyimages" => true, "multiple" => true]], 622, $context, $this->getSourceContext());
            // line 625
            echo "
                     ";
        }
        // line 627
        echo "
                     ";
        // line 628
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_active"], "method", false, false, false, 628)) {
            // line 629
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_active", (($__internal_compile_40 = twig_get_attribute($this->env, $this->source,             // line 631
($context["item"] ?? null), "fields", [], "any", false, false, false, 631)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["is_active"] ?? null) : null), __("Active"),             // line 633
($context["field_options"] ?? null)], 629, $context, $this->getSourceContext());
            // line 634
            echo "
                     ";
        }
        // line 636
        echo "
                     ";
        // line 637
        $this->displayBlock('more_fields', $context, $blocks);
        // line 639
        echo "                  ";
    }

    // line 637
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 638
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
        return array (  952 => 638,  948 => 637,  944 => 639,  942 => 637,  939 => 636,  935 => 634,  933 => 633,  932 => 631,  930 => 629,  928 => 628,  925 => 627,  921 => 625,  918 => 622,  916 => 621,  913 => 620,  910 => 610,  906 => 608,  904 => 607,  903 => 605,  901 => 603,  899 => 602,  896 => 601,  892 => 599,  890 => 598,  889 => 596,  887 => 594,  885 => 593,  882 => 592,  878 => 590,  876 => 588,  875 => 587,  874 => 585,  872 => 583,  868 => 581,  866 => 580,  863 => 579,  860 => 578,  857 => 577,  855 => 576,  854 => 570,  853 => 569,  851 => 568,  848 => 567,  846 => 566,  843 => 565,  839 => 563,  837 => 562,  836 => 560,  834 => 558,  832 => 557,  829 => 556,  825 => 554,  823 => 553,  822 => 551,  820 => 549,  818 => 548,  815 => 547,  812 => 537,  809 => 528,  806 => 515,  803 => 505,  799 => 503,  797 => 499,  796 => 497,  794 => 495,  792 => 494,  789 => 493,  785 => 491,  783 => 489,  781 => 487,  778 => 486,  776 => 483,  775 => 482,  774 => 481,  773 => 480,  771 => 479,  768 => 478,  765 => 477,  762 => 476,  759 => 475,  756 => 474,  753 => 473,  750 => 472,  747 => 471,  744 => 470,  741 => 469,  738 => 468,  735 => 467,  732 => 466,  730 => 465,  727 => 464,  723 => 462,  721 => 459,  720 => 458,  719 => 456,  717 => 453,  715 => 452,  712 => 451,  706 => 449,  704 => 448,  701 => 447,  698 => 437,  695 => 427,  691 => 425,  689 => 422,  688 => 420,  686 => 418,  684 => 417,  681 => 416,  678 => 406,  674 => 404,  672 => 401,  671 => 399,  670 => 398,  669 => 397,  667 => 396,  664 => 395,  661 => 394,  659 => 393,  656 => 392,  653 => 379,  649 => 377,  647 => 376,  646 => 375,  645 => 374,  643 => 371,  641 => 370,  638 => 369,  635 => 356,  631 => 354,  629 => 353,  628 => 351,  626 => 349,  624 => 348,  621 => 347,  618 => 346,  614 => 344,  611 => 341,  607 => 339,  604 => 336,  601 => 335,  599 => 334,  596 => 333,  592 => 331,  590 => 330,  589 => 329,  588 => 327,  586 => 325,  584 => 324,  581 => 323,  577 => 321,  575 => 320,  574 => 319,  573 => 317,  571 => 315,  569 => 314,  566 => 313,  562 => 311,  560 => 310,  559 => 309,  558 => 307,  556 => 305,  553 => 304,  550 => 302,  546 => 300,  544 => 299,  543 => 298,  542 => 296,  540 => 294,  538 => 293,  535 => 292,  531 => 290,  529 => 289,  528 => 288,  527 => 286,  525 => 284,  523 => 283,  520 => 282,  514 => 280,  512 => 279,  509 => 278,  505 => 276,  503 => 275,  502 => 274,  501 => 272,  499 => 270,  497 => 269,  494 => 268,  490 => 266,  488 => 265,  487 => 264,  486 => 262,  484 => 260,  482 => 259,  479 => 258,  475 => 256,  473 => 255,  472 => 254,  471 => 252,  469 => 250,  467 => 249,  464 => 248,  460 => 246,  458 => 245,  457 => 244,  456 => 242,  454 => 240,  452 => 239,  449 => 238,  445 => 236,  443 => 235,  442 => 234,  441 => 232,  439 => 230,  437 => 229,  434 => 228,  430 => 226,  428 => 225,  427 => 224,  426 => 222,  424 => 220,  422 => 219,  419 => 218,  415 => 216,  413 => 215,  412 => 214,  411 => 212,  409 => 210,  407 => 209,  404 => 208,  401 => 198,  397 => 196,  395 => 194,  394 => 193,  393 => 191,  391 => 188,  389 => 187,  386 => 186,  382 => 184,  380 => 183,  379 => 181,  378 => 180,  377 => 179,  375 => 178,  372 => 177,  369 => 176,  367 => 175,  364 => 174,  358 => 172,  356 => 171,  353 => 170,  349 => 168,  347 => 167,  346 => 162,  344 => 160,  342 => 159,  339 => 158,  335 => 156,  333 => 154,  332 => 153,  331 => 151,  329 => 148,  327 => 147,  324 => 146,  321 => 145,  318 => 144,  314 => 142,  312 => 140,  311 => 138,  308 => 137,  304 => 135,  295 => 133,  291 => 132,  288 => 131,  285 => 130,  282 => 129,  280 => 128,  277 => 127,  273 => 125,  271 => 124,  270 => 122,  268 => 120,  266 => 119,  264 => 118,  261 => 117,  257 => 115,  255 => 113,  254 => 112,  253 => 110,  252 => 109,  251 => 108,  249 => 107,  246 => 106,  244 => 105,  241 => 104,  237 => 102,  235 => 100,  234 => 99,  233 => 98,  232 => 96,  230 => 93,  227 => 92,  225 => 91,  222 => 90,  219 => 89,  216 => 88,  212 => 86,  209 => 84,  206 => 83,  204 => 82,  201 => 81,  197 => 79,  195 => 78,  194 => 77,  193 => 75,  191 => 73,  189 => 72,  186 => 71,  182 => 69,  180 => 66,  179 => 65,  178 => 64,  177 => 63,  175 => 61,  172 => 60,  168 => 59,  163 => 666,  157 => 663,  154 => 662,  152 => 661,  149 => 660,  143 => 658,  141 => 657,  136 => 656,  130 => 654,  128 => 653,  125 => 652,  123 => 651,  116 => 647,  112 => 645,  110 => 644,  107 => 643,  105 => 642,  103 => 641,  101 => 640,  99 => 59,  92 => 55,  88 => 53,  86 => 51,  84 => 50,  81 => 49,  78 => 48,  75 => 47,  72 => 46,  69 => 45,  67 => 44,  62 => 42,  58 => 41,  55 => 40,  51 => 38,  49 => 37,  47 => 36,  44 => 35,  42 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 #
 # GLPI - Gestionnaire Libre de Parc Informatique
 #
 # http://glpi-project.org
 #
 # @copyright 2015-2022 Teclib' and contributors.
 # @copyright 2003-2014 by the INDEPNET Development Team.
 # @licence   https://www.gnu.org/licenses/gpl-3.0.html
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI.
 #
 # This program is free software: you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation, either version 3 of the License, or
 # (at your option) any later version.
 #
 # This program is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with this program.  If not, see <https://www.gnu.org/licenses/>.
 #
 # ---------------------------------------------------------------------
 #}

{% import 'components/form/fields_macros.html.twig' as fields %}

{% set bg = '' %}
{% if item.isDeleted() %}
   {% set bg = 'asset-deleted' %}
{% endif %}

<div class=\"asset {{ bg }}\">
   {{ include('components/form/header.html.twig') }}

   {% set rand = random() %}
   {% set params  = params ?? [] %}
   {% set target       = params['target'] ?? item.getFormURL() %}
   {% set withtemplate = params['withtemplate'] ?? '' %}
   {% set item_type = item.getType() %}
   {% set item_has_pictures = item.hasItemtypeOrModelPictures() %}
   {% set field_options = {
       'locked_fields': item.getLockedFields(),
   } %}

   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-{{ item_has_pictures ? '9' : '12' }} flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  {% block form_fields %}
                     {% if item.isField('name') %}
                        {{ fields.autoNameField(
                           'name',
                           item,
                           (item_type == 'Contact' ? __('Surname') : __('Name')),
                           withtemplate,
                           field_options|merge({
                              required:true
                           })
                        ) }}
                     {% endif %}

                     {% if item.isField('firstname') %}
                        {{ fields.autoNameField(
                           'firstname',
                           item,
                           __('First name'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('is_active') %}
                        {% if withtemplate is not empty or withtemplate == 1 %}
                           {{ fields.hiddenField('is_active', item.fields['is_active'], __('Is active'), {
                              'add_field_html': __('No')
                           }) }}
                        {% else %}
                        {% endif %}
                     {% endif %}

                     {% if item.isField('states_id') %}
                        {% set condition = item.getType() in config('state_types') ? {('is_visible_' ~ item.getType()|lower): 1} : {} %}
                        {{ fields.dropdownField(
                           'State',
                           'states_id',
                           item.fields['states_id'],
                           __('Status'),
                           field_options|merge({
                              'entity': item.fields['entities_id'],
                              'condition': condition
                           })
                        ) }}
                     {% endif %}

                     {% set fk = item.getForeignKeyField() %}
                     {% if item.isField(fk) %}
                        {{ fields.dropdownField(
                           item_type,
                           fk,
                           item.fields[fk],
                           __('As child of'),
                           field_options|merge({
                              'entity': item.fields['entities_id'],
                           })
                        ) }}
                     {% endif %}

                     {% if item_type != 'SoftwareLicense' and item.isField('is_helpdesk_visible') %}
                        {# TODO Drop unused 'is_helpdesk_visible' field in SoftwareLicense schema? #}
                        {{ fields.checkboxField(
                           'is_helpdesk_visible',
                           item.fields['is_helpdesk_visible'],
                           __('Associable to a ticket'),
                           field_options
                        ) }}
                     {% endif %}

                     {% set dc_breadcrumbs = item is usingtrait('Glpi\\\\Features\\\\DCBreadcrumb') ? item.getDcBreadcrumb() : [] %}
                     {% if dc_breadcrumbs|length > 0 %}
                        {% set dc_breadcrumbs %}
                           <ol class=\"breadcrumb breadcrumb-arrows\" aria-label=\"breadcrumbs\">
                              {% for dc_item in dc_breadcrumbs|reverse %}
                                 <li class=\"breadcrumb-item text-nowrap\">{{ dc_item|raw }}</li>
                              {% endfor %}
                           </ol>
                        {% endset %}

                        {{ fields.htmlField(
                           '',
                           dc_breadcrumbs,
                           __('Data center position'),
                        ) }}

                        {{ fields.nullField() }} {# set an empty space in front of dc breadcrumb #}
                     {% endif %}

                     {% if item.isField('locations_id') %}
                        {{ fields.dropdownField(
                           'Location',
                           'locations_id',
                           item.fields['locations_id'],
                           'Location'|itemtype_name,
                           field_options|merge({
                              'entity': item.fields['entities_id'],
                           })
                        ) }}
                     {% endif %}

                     {% if item_type == 'Unmanaged' and item.isField('item_type') %}
                        {{ fields.dropdownArrayField(
                            'item_type',
                            item.fields['itemtype'],
                            _n('Type', 'Types', 1),
                            [
                                'Computer', 'NetworkEquipment', 'Printer', 'Peripheral', 'Phone'
                            ],
                            field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('date_domaincreation') %}
                        {{ fields.datetimeField('date_domaincreation', item.fields['date_domaincreation'], __('Registration date')) }}
                     {% endif %}

                     {% set type_itemtype = item.getTypeClass() %}
                     {% set type_fk = item.getTypeForeignKeyField() %}
                     {% if item.isField(type_fk) %}
                        {{ fields.dropdownField(
                           type_itemtype,
                           type_fk,
                           item.fields[type_fk],
                           _n('Type', 'Types', 1),
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('usertitles_id') %}
                        {{ fields.dropdownField(
                           'UserTitle',
                           'usertitles_id',
                           item.fields['usertitles_id'],
                           'UserTitle'|itemtype_name,
                           field_options|merge({
                              'entity': item.fields['entities_id'],
                           })
                        ) }}
                     {% endif %}

                    {# {% if item.isField('registration_number') %}
                        {{ fields.autoNameField(
                           'registration_number',
                           item,
                           (item_type starts with 'User' ? _x('user', 'Administrative number') : _x('infocom', 'Administrative number')),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %} #}

                     {% if item.isField('phone') %}
                        {{ fields.autoNameField(
                           'phone',
                           item,
                           'Phone'|itemtype_name,
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('phone2') %}
                        {{ fields.autoNameField(
                           'phone2',
                           item,
                           __('Phone 2'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('phonenumber') %}
                        {{ fields.autoNameField(
                           'phonenumber',
                           item,
                           'Phone'|itemtype_name,
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('mobile') %}
                        {{ fields.autoNameField(
                           'mobile',
                           item,
                           __('Mobile phone'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('fax') %}
                        {{ fields.autoNameField(
                           'fax',
                           item,
                           __('Fax'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('website') %}
                        {{ fields.autoNameField(
                           'website',
                           item,
                           __('Website'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('email') %}
                        {{ fields.autoNameField(
                           'email',
                           item,
                           _n('Email', 'Emails', 1),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('address') %}
                        {{ fields.textareaField('address', item.fields['address'], __('Address')) }}
                     {% endif %}

                     {% if item.isField('postalcode') %}
                        {{ fields.autoNameField(
                           'postalcode',
                           item,
                           __('Postal code'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('town') %}
                        {{ fields.autoNameField(
                           'town',
                           item,
                           __('City'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {# Post code field named differently for Suppliers. Placed after town to maintain field order from 9.5)#}
                     {% if item.isField('postcode') %}
                        {{ fields.autoNameField(
                           'postcode',
                           item,
                           __('Postal code'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item_type == 'Supplier' or item_type == 'Contact' %}
                        {{ fields.autoNameField(
                           'state',
                           item,
                           _x('location', 'State'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('country') %}
                        {{ fields.autoNameField(
                           'country',
                           item,
                           __('Country'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('date_expiration') %}
                        {% if item_type == 'Certificate' %}
                           {{ fields.dateField('date_expiration', item.fields['date_expiration'], __('Expiration date'), {
                              'helper': __('Empty for infinite'),
                              'checkIsExpired': true
                           }) }}
                        {% else %}
                           {{ fields.datetimeField('date_expiration', item.fields['date_expiration'], __('Expiration date'), {
                              'helper': __('Empty for infinite'),
                              'checkIsExpired': true
                           }) }}
                        {% endif %}
                     {% endif %}

                     {% if item.isField('ref') %}
                        {{ fields.textField(
                           'ref',
                           item.fields['ref'],
                           __('Reference'),
                           field_options
                        ) }}
                     {% endif %}

                    {# {% if item.isField('users_id_tech') %}
                        {{ fields.dropdownField(
                           'User',
                           'users_id_tech',
                           item.fields['users_id_tech'],
                           __('Technician in charge of the hardware'),
                           field_options|merge({
                              'entity': item.fields['entities_id'],
                              'right': 'own_ticket',
                           })
                        ) }}
                     {% endif %} #}

                     {% if item.isField('manufacturers_id') %}
                        {{ fields.dropdownField(
                           'Manufacturer',
                           'manufacturers_id',
                           item.fields['manufacturers_id'],
                           (item_type starts with 'Software' ? __('Publisher') : 'Manufacturer'|itemtype_name),
                           field_options
                        ) }}
                     {% endif %}

                     {#{% if item.isField('groups_id_tech') %}
                        {{ fields.dropdownField(
                           'Group',
                           'groups_id_tech',
                           item.fields['groups_id_tech'],
                           __('Group in charge of the hardware'),
                           field_options|merge({
                              'entity': item.fields['entities_id'],
                              'condition': {'is_assign': 1},
                           })
                        ) }}
                     {% endif %}#}

                     {% set model_itemtype = item.getModelClass() %}
                     {% set model_fk = item.getModelForeignKeyField() %}
                     {% if item.isField(model_fk) %}
                        {{ fields.dropdownField(
                           model_itemtype,
                           model_fk,
                           item.fields[model_fk],
                           _n('Model', 'Models', 1),
                           field_options|merge({
                              required:true
                           })
                        ) }}
                     {% endif %}

                     {#{% if item_type != 'SoftwareLicense' and item.isField('contact_num') %}
                        TODO Drop unused 'contact_num' field in Software License schema? 
                        {{ fields.textField(
                           'contact_num',
                           item.fields['contact_num'],
                           __('Alternate username number'),
                           field_options
                        ) }}
                     {% endif %} #}

                     {% if item.isField('serial') %}
                        {{ fields.textField(
                           'serial',
                           item.fields['serial'],
                           __('Serial number'),
                           field_options|merge({
                              required:true
                           })
                        ) }}
                     {% endif %}

                     {#{% if item_type != 'SoftwareLicense' and item.isField('contact') %}
                        {# TODO Drop unused 'contact' field in Software License schema?
                        {{ fields.textField(
                           'contact',
                           item.fields['contact'],
                           __('Alternate username'),
                           field_options
                        ) }}
                     {% endif %}#}

                     {#{% if item.isField('otherserial') %}
                        {{ fields.autoNameField(
                           'otherserial',
                           item,
                           __('Inventory number'),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}#}

                     {% if item.isField('sysdescr') %}
                        {{ fields.textareaField('sysdescr', item.fields['sysdescr'], __('Sysdescr')) }}
                     {% endif %}

                     {% if item.isField('users_id') %}
                        {{ fields.dropdownField(
                           'User',
                           'users_id',
                           item.fields['users_id'],
                           'User'|itemtype_name,
                           field_options|merge({
                              'entity': item.fields['entities_id'],
                              'right': 'all',
                           })
                        ) }}
                     {% endif %}

                     {% if item.isField('is_global') %}
                        {% set management_restrict = 0 %}
                        {% if item_type == 'Monitor' %}
                           {% set management_restrict = config('monitors_management_restrict') %}
                        {% elseif item_type == 'Peripheral' %}
                           {% set management_restrict = config('peripherals_management_restrict') %}
                        {% elseif item_type == 'Phone' %}
                           {% set management_restrict = config('phones_management_restrict') %}
                        {% elseif item_type == 'Printer' %}
                           {% set management_restrict = config('printers_management_restrict') %}
                        {% else %}
                           {% set management_restrict = 0 %}
                        {% endif %}
                        {% set dd_globalswitch %}
                           {% do call('Dropdown::showGlobalSwitch', [item.fields['id'], {
                              'withtemplate': withtemplate,
                              'value': item.fields['is_global'],
                              'management_restrict': management_restrict,
                              'target': target,
                              'width': '100%',
                           }]) %}
                        {% endset %}
                        {{ fields.htmlField(
                           'is_global',
                           dd_globalswitch,
                           __('Management type'),
                        ) }}
                     {% endif %}

                     {% if item.isField('size') %}
                        {{ fields.numberField(
                           'size',
                           item.fields['size'],
                           __('Size'),
                           field_options|merge({
                              'min': 0,
                              'step': 0.01
                           }),
                        ) }}
                     {% endif %}

                     {#{% if item.isField('networks_id') %}
                        {{ fields.dropdownField(
                           'Network',
                           'networks_id',
                           item.fields['networks_id'],
                           _n('Network', 'Networks', 1),
                           field_options
                        ) }}
                     {% endif %}#}

                     {#{% if item.isField('groups_id') %}
                        {{ fields.dropdownField(
                           'Group',
                           'groups_id',
                           item.fields['groups_id'],
                           'Group'|itemtype_name,
                           field_options|merge({
                              'entity': item.fields['entities_id'],
                              'condition': {'is_itemgroup': 1},
                           })
                        ) }}
                     {% endif %}#}

                     {#{% if item.isField('uuid') %}
                        {{ fields.textField(
                           'uuid',
                           item.fields['uuid'],
                           __('UUID'),
                           field_options
                        ) }}
                     {% endif %}#}

                     {#{% if item.isField('version') %}
                        {{ fields.autoNameField(
                           'version',
                           item,
                           _n('Version', 'Versions', 1),
                           withtemplate,
                           field_options
                        ) }}
                     {% endif %}#}

                     {% if item.isField('comment') %}
                        {{ fields.textareaField(
                           'comment',
                           item.fields['comment'],
                           _n('Comment', 'Comments', get_plural_number()),
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('ram') %}
                        {{ fields.numberField(
                           'ram',
                           item.fields['ram'],
                           __('%1\$s (%2\$s)')|format(_n('Memory', 'Memories', 1), __('Mio')),
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('alarm_threshold') %}
                        {% set dd_alarm_treshold %}
                           {% do call('Dropdown::showNumber', ['alarm_threshold', {
                              'value': item.fields['alarm_threshold'],
                              'rand': rand,
                              'width': '100%',
                              'min': 0,
                              'max': 100,
                              'step': 1,
                              'toadd': {'-1': __('Never')}
                           }|merge(params)]) %}
                        {% endset %}
                        {% set last_alert_html %}
                           <span class=\"text-muted\">
                              {% do call('Alert::displayLastAlert', [item_type, item.fields['id']]) %}
                           </span>
                        {% endset %}
                        {{ fields.htmlField(
                           'alarm_threshold',
                           dd_alarm_treshold,
                           __('Alert threshold'),
                           field_options|merge({
                               add_field_html: last_alert_html
                            })
                        ) }}
                     {% endif %}

                     {% if item.isField('brand') %}
                        {{ fields.textField(
                           'brand',
                           item.fields['brand'],
                           __('Brand'),
                           field_options
                        ) }}
                     {% endif %}

                     {% if item.isField('begin_date') %}
                        {{ fields.dateField(
                            'begin_date',
                            item.fields['begin_date'],
                            __('Start date'),
                            field_options
                        ) }}
                     {% endif %}

                     {#{% if item.isField('autoupdatesystems_id') %}
                        {{ fields.dropdownField(
                           'AutoUpdateSystem',
                           'autoupdatesystems_id',
                           item.fields['autoupdatesystems_id'],
                           'AutoUpdateSystem'|itemtype_name,
                           field_options
                        ) }}
                     {% endif %}#}

                     {% if item.isField('pictures') %}
                        {{ fields.fileField('pictures', null, _n('Picture', 'Pictures', get_plural_number()), {
                           'onlyimages': true,
                           'multiple': true,
                        }) }}
                     {% endif %}

                     {% if item.isField('is_active') %}
                        {{ fields.dropdownYesNo(
                            'is_active',
                            item.fields['is_active'],
                            __('Active'),
                            field_options
                        ) }}
                     {% endif %}

                     {% block more_fields %}
                     {% endblock %}
                  {% endblock %}
               </div> {# .row #}
            </div> {# .row #}
         </div> {# .flex-row #}
      </div>
      {% if item_has_pictures %}
         <div class=\"col-12 col-xxl-3 flex-column\">
            <div class=\"flex-row asset-pictures\">
               {{ include('components/form/pictures.html.twig', {'gallery_type': ''}) }}
            </div>
         </div>
      {% endif %}
   </div> {# .card-body #}

   {% if item_type == 'Contract' %}
      {{ include('components/form/support_hours.html.twig') }}
   {% endif %}
   {{ include('components/form/buttons.html.twig') }}
   {% if no_inventory_footer is not defined or no_inventory_footer == false %}
      {{ include('components/form/inventory_info.html.twig') }}
   {% endif %}

   {% if params['formfooter'] is null or params['formfooter'] == true %}
      <div class=\"card-footer mx-n2 mb-n2 mt-4\">
         {{ include('components/form/dates.html.twig') }}
      </div>
   {% endif %}
</div>
", "generic_show_form.html.twig", "C:\\wamp64\\www\\glpi\\templates\\generic_show_form.html.twig");
    }
}
