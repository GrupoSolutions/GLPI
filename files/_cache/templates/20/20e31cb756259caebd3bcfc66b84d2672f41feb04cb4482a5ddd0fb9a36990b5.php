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
class __TwigTemplate_dbe5061502f884a787462a5ed8f957eb1c8aff0900756e11c8e12e55ecc72b2d extends Template
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
        // line 595
        echo "               </div> ";
        // line 596
        echo "            </div> ";
        // line 597
        echo "         </div> ";
        // line 598
        echo "      </div>
      ";
        // line 599
        if (($context["item_has_pictures"] ?? null)) {
            // line 600
            echo "         <div class=\"col-12 col-xxl-3 flex-column\">
            <div class=\"flex-row asset-pictures\">
               ";
            // line 602
            echo twig_include($this->env, $context, "components/form/pictures.html.twig", ["gallery_type" => ""]);
            echo "
            </div>
         </div>
      ";
        }
        // line 606
        echo "   </div> ";
        // line 607
        echo "
   ";
        // line 608
        if ((0 === twig_compare(($context["item_type"] ?? null), "Contract"))) {
            // line 609
            echo "      ";
            echo twig_include($this->env, $context, "components/form/support_hours.html.twig");
            echo "
   ";
        }
        // line 611
        echo "   ";
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
   ";
        // line 612
        if (( !array_key_exists("no_inventory_footer", $context) || (0 === twig_compare(($context["no_inventory_footer"] ?? null), false)))) {
            // line 613
            echo "      ";
            echo twig_include($this->env, $context, "components/form/inventory_info.html.twig");
            echo "
   ";
        }
        // line 615
        echo "
   ";
        // line 616
        if (((null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["formfooter"] ?? null) : null)) || (0 === twig_compare((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["formfooter"] ?? null) : null), true)))) {
            // line 617
            echo "      <div class=\"card-footer mx-n2 mb-n2 mt-4\">
         ";
            // line 618
            echo twig_include($this->env, $context, "components/form/dates.html.twig");
            echo "
      </div>
   ";
        }
        // line 621
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
        // line 450
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "users_id"], "method", false, false, false, 450)) {
            // line 451
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id", (($__internal_compile_28 = twig_get_attribute($this->env, $this->source,             // line 454
($context["item"] ?? null), "fields", [], "any", false, false, false, 454)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["users_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), twig_array_merge(            // line 456
($context["field_options"] ?? null), ["entity" => (($__internal_compile_29 = twig_get_attribute($this->env, $this->source,             // line 457
($context["item"] ?? null), "fields", [], "any", false, false, false, 457)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["entities_id"] ?? null) : null), "right" => "all"])], 451, $context, $this->getSourceContext());
            // line 460
            echo "
                     ";
        }
        // line 462
        echo "
                     

                     ";
        // line 465
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "size"], "method", false, false, false, 465)) {
            // line 466
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_numberField", ["size", (($__internal_compile_30 = twig_get_attribute($this->env, $this->source,             // line 468
($context["item"] ?? null), "fields", [], "any", false, false, false, 468)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["size"] ?? null) : null), __("Size"), twig_array_merge(            // line 470
($context["field_options"] ?? null), ["min" => 0, "step" => 0.01])], 466, $context, $this->getSourceContext());
            // line 474
            echo "
                     ";
        }
        // line 476
        echo "
                     ";
        // line 486
        echo "
                     ";
        // line 499
        echo "
                     ";
        // line 508
        echo "
                     ";
        // line 518
        echo "
                     ";
        // line 519
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "comment"], "method", false, false, false, 519)) {
            // line 520
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_31 = twig_get_attribute($this->env, $this->source,             // line 522
($context["item"] ?? null), "fields", [], "any", false, false, false, 522)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()),             // line 524
($context["field_options"] ?? null)], 520, $context, $this->getSourceContext());
            // line 525
            echo "
                     ";
        }
        // line 527
        echo "

                     ";
        // line 529
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "alarm_threshold"], "method", false, false, false, 529)) {
            // line 530
            echo "                        ";
            ob_start(function () { return ''; });
            // line 531
            echo "                           ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [0 => "alarm_threshold", 1 => twig_array_merge(["value" => (($__internal_compile_32 = twig_get_attribute($this->env, $this->source,             // line 532
($context["item"] ?? null), "fields", [], "any", false, false, false, 532)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["alarm_threshold"] ?? null) : null), "rand" =>             // line 533
($context["rand"] ?? null), "width" => "100%", "min" => 0, "max" => 100, "step" => 1, "toadd" => ["-1" => __("Never")]],             // line 539
($context["params"] ?? null))]);
            // line 540
            echo "                        ";
            $context["dd_alarm_treshold"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 541
            echo "                        ";
            ob_start(function () { return ''; });
            // line 542
            echo "                           <span class=\"text-muted\">
                              ";
            // line 543
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", [0 => ($context["item_type"] ?? null), 1 => (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 543)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["id"] ?? null) : null)]);
            // line 544
            echo "                           </span>
                        ";
            $context["last_alert_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 546
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["alarm_threshold",             // line 548
($context["dd_alarm_treshold"] ?? null), __("Alert threshold"), twig_array_merge(            // line 550
($context["field_options"] ?? null), ["add_field_html" =>             // line 551
($context["last_alert_html"] ?? null)])], 546, $context, $this->getSourceContext());
            // line 553
            echo "
                     ";
        }
        // line 555
        echo "
               
                     ";
        // line 557
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "begin_date"], "method", false, false, false, 557)) {
            // line 558
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dateField", ["begin_date", (($__internal_compile_34 = twig_get_attribute($this->env, $this->source,             // line 560
($context["item"] ?? null), "fields", [], "any", false, false, false, 560)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["begin_date"] ?? null) : null), __("Start date"),             // line 562
($context["field_options"] ?? null)], 558, $context, $this->getSourceContext());
            // line 563
            echo "
                     ";
        }
        // line 565
        echo "
                     ";
        // line 575
        echo "
                     ";
        // line 576
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "pictures"], "method", false, false, false, 576)) {
            // line 577
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_fileField", ["pictures", null, _n("Picture", "Pictures", Session::getPluralNumber()), ["onlyimages" => true, "multiple" => true]], 577, $context, $this->getSourceContext());
            // line 580
            echo "
                     ";
        }
        // line 582
        echo "
                     ";
        // line 583
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_active"], "method", false, false, false, 583)) {
            // line 584
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_active", (($__internal_compile_35 = twig_get_attribute($this->env, $this->source,             // line 586
($context["item"] ?? null), "fields", [], "any", false, false, false, 586)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["is_active"] ?? null) : null), __("Active"),             // line 588
($context["field_options"] ?? null)], 584, $context, $this->getSourceContext());
            // line 589
            echo "
                     ";
        }
        // line 591
        echo "
                     ";
        // line 592
        $this->displayBlock('more_fields', $context, $blocks);
        // line 594
        echo "                  ";
    }

    // line 592
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 593
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
        return array (  857 => 593,  853 => 592,  849 => 594,  847 => 592,  844 => 591,  840 => 589,  838 => 588,  837 => 586,  835 => 584,  833 => 583,  830 => 582,  826 => 580,  823 => 577,  821 => 576,  818 => 575,  815 => 565,  811 => 563,  809 => 562,  808 => 560,  806 => 558,  804 => 557,  800 => 555,  796 => 553,  794 => 551,  793 => 550,  792 => 548,  790 => 546,  786 => 544,  784 => 543,  781 => 542,  778 => 541,  775 => 540,  773 => 539,  772 => 533,  771 => 532,  769 => 531,  766 => 530,  764 => 529,  760 => 527,  756 => 525,  754 => 524,  753 => 522,  751 => 520,  749 => 519,  746 => 518,  743 => 508,  740 => 499,  737 => 486,  734 => 476,  730 => 474,  728 => 470,  727 => 468,  725 => 466,  723 => 465,  718 => 462,  714 => 460,  712 => 457,  711 => 456,  710 => 454,  708 => 451,  706 => 450,  701 => 447,  698 => 437,  695 => 427,  691 => 425,  689 => 422,  688 => 420,  686 => 418,  684 => 417,  681 => 416,  678 => 406,  674 => 404,  672 => 401,  671 => 399,  670 => 398,  669 => 397,  667 => 396,  664 => 395,  661 => 394,  659 => 393,  656 => 392,  653 => 379,  649 => 377,  647 => 376,  646 => 375,  645 => 374,  643 => 371,  641 => 370,  638 => 369,  635 => 356,  631 => 354,  629 => 353,  628 => 351,  626 => 349,  624 => 348,  621 => 347,  618 => 346,  614 => 344,  611 => 341,  607 => 339,  604 => 336,  601 => 335,  599 => 334,  596 => 333,  592 => 331,  590 => 330,  589 => 329,  588 => 327,  586 => 325,  584 => 324,  581 => 323,  577 => 321,  575 => 320,  574 => 319,  573 => 317,  571 => 315,  569 => 314,  566 => 313,  562 => 311,  560 => 310,  559 => 309,  558 => 307,  556 => 305,  553 => 304,  550 => 302,  546 => 300,  544 => 299,  543 => 298,  542 => 296,  540 => 294,  538 => 293,  535 => 292,  531 => 290,  529 => 289,  528 => 288,  527 => 286,  525 => 284,  523 => 283,  520 => 282,  514 => 280,  512 => 279,  509 => 278,  505 => 276,  503 => 275,  502 => 274,  501 => 272,  499 => 270,  497 => 269,  494 => 268,  490 => 266,  488 => 265,  487 => 264,  486 => 262,  484 => 260,  482 => 259,  479 => 258,  475 => 256,  473 => 255,  472 => 254,  471 => 252,  469 => 250,  467 => 249,  464 => 248,  460 => 246,  458 => 245,  457 => 244,  456 => 242,  454 => 240,  452 => 239,  449 => 238,  445 => 236,  443 => 235,  442 => 234,  441 => 232,  439 => 230,  437 => 229,  434 => 228,  430 => 226,  428 => 225,  427 => 224,  426 => 222,  424 => 220,  422 => 219,  419 => 218,  415 => 216,  413 => 215,  412 => 214,  411 => 212,  409 => 210,  407 => 209,  404 => 208,  401 => 198,  397 => 196,  395 => 194,  394 => 193,  393 => 191,  391 => 188,  389 => 187,  386 => 186,  382 => 184,  380 => 183,  379 => 181,  378 => 180,  377 => 179,  375 => 178,  372 => 177,  369 => 176,  367 => 175,  364 => 174,  358 => 172,  356 => 171,  353 => 170,  349 => 168,  347 => 167,  346 => 162,  344 => 160,  342 => 159,  339 => 158,  335 => 156,  333 => 154,  332 => 153,  331 => 151,  329 => 148,  327 => 147,  324 => 146,  321 => 145,  318 => 144,  314 => 142,  312 => 140,  311 => 138,  308 => 137,  304 => 135,  295 => 133,  291 => 132,  288 => 131,  285 => 130,  282 => 129,  280 => 128,  277 => 127,  273 => 125,  271 => 124,  270 => 122,  268 => 120,  266 => 119,  264 => 118,  261 => 117,  257 => 115,  255 => 113,  254 => 112,  253 => 110,  252 => 109,  251 => 108,  249 => 107,  246 => 106,  244 => 105,  241 => 104,  237 => 102,  235 => 100,  234 => 99,  233 => 98,  232 => 96,  230 => 93,  227 => 92,  225 => 91,  222 => 90,  219 => 89,  216 => 88,  212 => 86,  209 => 84,  206 => 83,  204 => 82,  201 => 81,  197 => 79,  195 => 78,  194 => 77,  193 => 75,  191 => 73,  189 => 72,  186 => 71,  182 => 69,  180 => 66,  179 => 65,  178 => 64,  177 => 63,  175 => 61,  172 => 60,  168 => 59,  163 => 621,  157 => 618,  154 => 617,  152 => 616,  149 => 615,  143 => 613,  141 => 612,  136 => 611,  130 => 609,  128 => 608,  125 => 607,  123 => 606,  116 => 602,  112 => 600,  110 => 599,  107 => 598,  105 => 597,  103 => 596,  101 => 595,  99 => 59,  92 => 55,  88 => 53,  86 => 51,  84 => 50,  81 => 49,  78 => 48,  75 => 47,  72 => 46,  69 => 45,  67 => 44,  62 => 42,  58 => 41,  55 => 40,  51 => 38,  49 => 37,  47 => 36,  44 => 35,  42 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "generic_show_form.html.twig", "/var/www/html/glpi/templates/generic_show_form.html.twig");
    }
}
