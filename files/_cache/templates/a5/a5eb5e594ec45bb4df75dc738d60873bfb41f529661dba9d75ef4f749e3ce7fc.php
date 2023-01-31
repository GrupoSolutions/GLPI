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

/* @releases/fields_panel.html.twig */
class __TwigTemplate_ea74932fa5a646fb40cdd1be1f4477ad6899402111aafc0c855cb7d88f9296cd extends Template
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
        // line 31
        echo "
";
        // line 32
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@releases/fields_panel.html.twig", 32)->unwrap();
        // line 33
        $context["field_options"] = ["full_width" => true, "fields_template" =>         // line 35
($context["itiltemplate"] ?? null), "disabled" =>  !        // line 36
($context["canupdate"] ?? null), "add_field_class" => ((        // line 37
($context["is_expanded"] ?? null)) ? ("col-sm-6") : (""))];
        // line 39
        echo "
";
        // line 40
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 41
        $context["headers_states"] = (($__internal_compile_0 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["items"] ?? null) : null);
        // line 42
        echo "
<div class=\"accordion open accordion-flush\" id=\"itil-data\">
    ";
        // line 44
        $context["main_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "item-main", [], "array", true, true, false, 44) || (0 === twig_compare((($__internal_compile_1 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["item-main"] ?? null) : null), "true")))) ? (true) : (false));
        // line 45
        echo "    <div class=\"accordion-item\">
        <h2 class=\"accordion-header\" id=\"heading-main-item\">
            <button class=\"accordion-button ";
        // line 47
        echo ((($context["main_show"] ?? null)) ? ("") : ("collapsed"));
        echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#item-main\" aria-expanded=\"true\" aria-controls=\"ticket-main\">
                <i class=\"ti ti-alert-circle me-1 item-icon\"></i>
                <span class='status-recall'>
                ";
        // line 50
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [0 => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 50)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["status"] ?? null) : null)], "method", false, false, false, 50);
        echo "
            </span>
                <span class=\"item-title\">
                ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [0 => 1], "method", false, false, false, 53), "html", null, true);
        echo "
            </span>
            </button>
        </h2>
        <div id=\"item-main\" class=\"accordion-collapse collapse ";
        // line 57
        echo ((($context["main_show"] ?? null)) ? ("show") : (""));
        echo "\" aria-labelledby=\"heading-main-ticket\">
            <div class=\"accordion-body row m-0 mt-n2\">

                ";
        // line 60
        if (Session::isMultiEntitiesMode()) {
            // line 61
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 61)) {
                // line 62
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Entity", "entities_id", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,                 // line 65
($context["item"] ?? null), "fields", [], "any", false, false, false, 65)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["entities_id"] ?? null) : null), _n("Entity", "Entities", 1), twig_array_merge(                // line 67
($context["field_options"] ?? null), ["entity" =>                 // line 68
($context["userentities"] ?? null), "on_change" => "this.form.submit()"])], 62, $context, $this->getSourceContext());
                // line 71
                echo "
                    ";
            } else {
                // line 73
                echo "                        ";
                ob_start(function () { return ''; });
                // line 74
                echo "                            ";
                echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Entity::badgeCompletename", [0 => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,                 // line 75
($context["item"] ?? null), "fields", [], "any", false, false, false, 75)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["entities_id"] ?? null) : null))]);
                // line 76
                echo "
                        ";
                $context["entity_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 78
                echo "
                        ";
                // line 79
                echo twig_call_macro($macros["fields"], "macro_field", ["",                 // line 81
($context["entity_html"] ?? null), _n("Entity", "Entities", 1), twig_array_merge(                // line 83
($context["field_options"] ?? null), ["add_field_class" => "d-flex align-items-center"])], 79, $context, $this->getSourceContext());
                // line 86
                echo "
                    ";
            }
            // line 88
            echo "
                    ";
            // line 89
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_recursive"], "method", false, false, false, 89)) {
                // line 90
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_recursive", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,                 // line 92
($context["item"] ?? null), "fields", [], "any", false, false, false, 92)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["is_recursive"] ?? null) : null), __("Child entities"),                 // line 94
($context["field_options"] ?? null)], 90, $context, $this->getSourceContext());
                // line 95
                echo "
                    ";
            }
            // line 97
            echo "                ";
        }
        // line 98
        echo "
                ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 99)) {
            // line 100
            echo "                ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Change", "changes_id", (($__internal_compile_6 =             // line 103
($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["changes_id"] ?? null) : null), __("For this change", "releases"), twig_array_merge(            // line 105
($context["field_options"] ?? null), ["hide_if_no_elements" => true])], 100, $context, $this->getSourceContext());
            // line 109
            echo "
                ";
        }
        // line 111
        echo "                ";
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,         // line 113
($context["item"] ?? null), "fields", [], "any", false, false, false, 113)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["date"] ?? null) : null), __("Opening date"),         // line 115
($context["field_options"] ?? null)], 111, $context, $this->getSourceContext());
        // line 116
        echo "

                ";
        // line 118
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_preproduction", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,         // line 120
($context["item"] ?? null), "fields", [], "any", false, false, false, 120)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["date_preproduction"] ?? null) : null), __("Pre-production planned date", "releases"),         // line 122
($context["field_options"] ?? null)], 118, $context, $this->getSourceContext());
        // line 123
        echo "

                ";
        // line 125
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_production", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,         // line 127
($context["item"] ?? null), "fields", [], "any", false, false, false, 127)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["date_production"] ?? null) : null), __("Production planned date", "releases"),         // line 129
($context["field_options"] ?? null)], 125, $context, $this->getSourceContext());
        // line 130
        echo "

                ";
        // line 132
        echo twig_include($this->env, $context, "components/itilobject/fields/status.html.twig");
        echo "

                ";
        // line 134
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "locations_id"], "method", false, false, false, 134)) {
            // line 135
            echo "                    ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 138
($context["item"] ?? null), "fields", [], "any", false, false, false, 138)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), twig_array_merge(            // line 140
($context["field_options"] ?? null), ["hide_if_no_elements" => true])], 135, $context, $this->getSourceContext());
            // line 144
            echo "
                ";
        }
        // line 146
        echo "            </div>
        </div>
    </div>
    ";
        // line 149
        $context["actors_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "actors", [], "array", true, true, false, 149) || (0 === twig_compare((($__internal_compile_11 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["actors"] ?? null) : null), "true")))) ? (true) : (false));
        // line 150
        echo "    <div class=\"accordion-item\">
        <h2 class=\"accordion-header\" id=\"heading-actor\" title=\"";
        // line 151
        echo twig_escape_filter($this->env, __("Actors"), "html", null, true);
        echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
        // line 152
        echo ((($context["actors_show"] ?? null)) ? ("") : ("collapsed"));
        echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#actors\" aria-expanded=\"true\" aria-controls=\"actors\">
                <i class=\"ti ti-users me-1\"></i>
                <span class=\"item-title\">
                ";
        // line 155
        echo twig_escape_filter($this->env, __("Actors"), "html", null, true);
        echo "
            </span>
                <span class=\"badge bg-secondary ms-2\">
               ";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "countActors", [], "method", false, false, false, 158), "html", null, true);
        echo "
            </span>
            </button>
        </h2>
        <div id=\"actors\" class=\"accordion-collapse collapse ";
        // line 162
        echo ((($context["actors_show"] ?? null)) ? ("show") : (""));
        echo "\" aria-labelledby=\"heading-actor\">
            <div class=\"accordion-body accordion-actors row m-0 mt-n2\">
                ";
        // line 164
        echo twig_include($this->env, $context, "components/itilobject/actors/main.html.twig");
        echo "
            </div>
        </div>
    </div>

    ";
        // line 169
        if ((array_key_exists("release_item", $context) &&  !(null === ($context["release_item"] ?? null)))) {
            // line 170
            echo "        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"items-heading\">
                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#items\"
                        aria-expanded=\"true\" aria-controls=\"items\">
                    <i class=\"ti ti-clipboard-check me-1\"></i>
                    <span>";
            // line 175
            echo twig_escape_filter($this->env, _n("Associated change", "Associated changes", Session::getPluralNumber(), "releases"), "html", null, true);
            echo "</span>
                    <span class=\"item-counter badge bg-secondary ms-2\"></span>
                </button>
            </h2>
            <div id=\"items\" class=\"accordion-collapse collapse show\" aria-labelledby=\"items-heading\">
                <div class=\"accordion-body accordion-items row m-0 mt-n2\">
                    ";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["release_item"] ?? null), "itemAddForm", [0 => ($context["item"] ?? null), 1 => ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([]))], "method", false, false, false, 181), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    ";
        }
        // line 186
        echo "
    ";
        // line 187
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 187), "PluginReleasesRelease"))) {
            // line 188
            echo "        ";
            $context["shutdowns_fields"] = ["service_shutdown" => __("Service shutdown", "releases")];
            // line 191
            echo "
        ";
            // line 192
            $context["nb_shutdowns"] = 0;
            // line 193
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shutdowns_fields"] ?? null));
            foreach ($context['_seq'] as $context["shutdowns_field"] => $context["label"]) {
                // line 194
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["shutdowns_field"]], "method", false, false, false, 194) && (0 === twig_compare((($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 194)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["shutdowns_field"]] ?? null) : null), 1)))) {
                    // line 195
                    echo "                ";
                    $context["nb_shutdowns"] = (($context["nb_shutdowns"] ?? null) + 1);
                    // line 196
                    echo "            ";
                }
                // line 197
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['shutdowns_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "        ";
            $context["shutdowns_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "shutdowns", [], "array", true, true, false, 198) && (0 === twig_compare((($__internal_compile_13 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["shutdowns"] ?? null) : null), "true")))) ? (true) : (false));
            // line 199
            echo "        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"shutdowns-heading\">
                <button class=\"accordion-button ";
            // line 201
            echo ((($context["shutdowns_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#shutdowns\"
                        aria-expanded=\"true\" aria-controls=\"shutdowns\">
                    <i class=\"ti ti-power me-1\"></i>
                    <span class=\"item-title\">
                        ";
            // line 205
            echo twig_escape_filter($this->env, __("Service shutdown", "releases"), "html", null, true);
            echo "
                    </span>
                    ";
            // line 207
            if ((1 === twig_compare(($context["nb_shutdowns"] ?? null), 0))) {
                // line 208
                echo "                        <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_shutdowns"] ?? null), "html", null, true);
                echo "</span>
                    ";
            }
            // line 210
            echo "                </button>
            </h2>
            <div id=\"shutdowns\" class=\"accordion-collapse collapse ";
            // line 212
            echo ((($context["shutdowns_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"shutdowns-heading\">
                <div class=\"accordion-body row m-0 mt-n2\">

                    ";
            // line 215
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["service_shutdown", (($__internal_compile_14 = twig_get_attribute($this->env, $this->source,             // line 217
($context["item"] ?? null), "fields", [], "any", false, false, false, 217)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["service_shutdown"] ?? null) : null), __("Service shutdown", "releases"),             // line 219
($context["field_options"] ?? null)], 215, $context, $this->getSourceContext());
            // line 220
            echo "

                    ";
            // line 222
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["hour_type", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source,             // line 224
($context["item"] ?? null), "fields", [], "any", false, false, false, 224)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["hour_type"] ?? null) : null), __("Non-working hours", "releases"),             // line 226
($context["field_options"] ?? null)], 222, $context, $this->getSourceContext());
            // line 227
            echo "

                    ";
            // line 229
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["service_shutdown_details", (($__internal_compile_16 = twig_get_attribute($this->env, $this->source,             // line 231
($context["item"] ?? null), "fields", [], "any", false, false, false, 231)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["service_shutdown_details"] ?? null) : null), __("Service shutdown details", "releases"), twig_array_merge(            // line 233
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 229, $context, $this->getSourceContext());
            // line 237
            echo "
                </div>
            </div>
        </div>
    ";
        }
        // line 242
        echo "
    ";
        // line 243
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 243), "PluginReleasesRelease"))) {
            // line 244
            echo "        ";
            $context["communications_fields"] = ["communication" => __("Communication", "releases")];
            // line 247
            echo "
        ";
            // line 248
            $context["nb_communications"] = 0;
            // line 249
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["communications_fields"] ?? null));
            foreach ($context['_seq'] as $context["communications_field"] => $context["label"]) {
                // line 250
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["communications_field"]], "method", false, false, false, 250) && (0 === twig_compare((($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 250)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[$context["communications_field"]] ?? null) : null), 1)))) {
                    // line 251
                    echo "                ";
                    $context["nb_communications"] = (($context["nb_communications"] ?? null) + 1);
                    // line 252
                    echo "            ";
                }
                // line 253
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['communications_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            echo "        ";
            $context["communications_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "communications", [], "array", true, true, false, 254) && (0 === twig_compare((($__internal_compile_18 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["communications"] ?? null) : null), "true")))) ? (true) : (false));
            // line 255
            echo "        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"communications-heading\">
                <button class=\"accordion-button ";
            // line 257
            echo ((($context["communications_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\"
                        data-bs-target=\"#communications\" aria-expanded=\"true\" aria-controls=\"communications\">
                    <i class=\"ti ti-speakerphone me-1\"></i>
                    <span class=\"item-title\">
                        ";
            // line 261
            echo twig_escape_filter($this->env, __("Communication", "releases"), "html", null, true);
            echo "
                    </span>
                    ";
            // line 263
            if ((1 === twig_compare(($context["nb_communications"] ?? null), 0))) {
                // line 264
                echo "                        <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_communications"] ?? null), "html", null, true);
                echo "</span>
                    ";
            }
            // line 266
            echo "                </button>
            </h2>
            <div id=\"communications\" class=\"accordion-collapse collapse ";
            // line 268
            echo ((($context["communications_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"communications-heading\">
                <div class=\"accordion-body row m-0 mt-n2\">

                    ";
            // line 271
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["communication", (($__internal_compile_19 = twig_get_attribute($this->env, $this->source,             // line 273
($context["item"] ?? null), "fields", [], "any", false, false, false, 273)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["communication"] ?? null) : null), __("Communication", "releases"),             // line 275
($context["field_options"] ?? null)], 271, $context, $this->getSourceContext());
            // line 276
            echo "

                    ";
            // line 278
            echo twig_call_macro($macros["fields"], "macro_dropdownItemTypes", ["communication_type", (($__internal_compile_20 = twig_get_attribute($this->env, $this->source,             // line 280
($context["item"] ?? null), "fields", [], "any", false, false, false, 280)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["communication_type"] ?? null) : null), __("Communication type", "releases"), twig_array_merge(            // line 282
($context["field_options"] ?? null), ["types" => [0 => "Entity", 1 => "Group", 2 => "Profile", 3 => "User", 4 => "Location"]])], 278, $context, $this->getSourceContext());
            // line 285
            echo "

                </div>
            </div>
        </div>
    ";
        }
        // line 291
        echo "    <span class=\"d-none d-md-block\">
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
</script>
";
    }

    public function getTemplateName()
    {
        return "@releases/fields_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 291,  449 => 285,  447 => 282,  446 => 280,  445 => 278,  441 => 276,  439 => 275,  438 => 273,  437 => 271,  431 => 268,  427 => 266,  421 => 264,  419 => 263,  414 => 261,  407 => 257,  403 => 255,  400 => 254,  394 => 253,  391 => 252,  388 => 251,  385 => 250,  380 => 249,  378 => 248,  375 => 247,  372 => 244,  370 => 243,  367 => 242,  360 => 237,  358 => 233,  357 => 231,  356 => 229,  352 => 227,  350 => 226,  349 => 224,  348 => 222,  344 => 220,  342 => 219,  341 => 217,  340 => 215,  334 => 212,  330 => 210,  324 => 208,  322 => 207,  317 => 205,  310 => 201,  306 => 199,  303 => 198,  297 => 197,  294 => 196,  291 => 195,  288 => 194,  283 => 193,  281 => 192,  278 => 191,  275 => 188,  273 => 187,  270 => 186,  262 => 181,  253 => 175,  246 => 170,  244 => 169,  236 => 164,  231 => 162,  224 => 158,  218 => 155,  212 => 152,  208 => 151,  205 => 150,  203 => 149,  198 => 146,  194 => 144,  192 => 140,  191 => 138,  189 => 135,  187 => 134,  182 => 132,  178 => 130,  176 => 129,  175 => 127,  174 => 125,  170 => 123,  168 => 122,  167 => 120,  166 => 118,  162 => 116,  160 => 115,  159 => 113,  157 => 111,  153 => 109,  151 => 105,  150 => 103,  148 => 100,  146 => 99,  143 => 98,  140 => 97,  136 => 95,  134 => 94,  133 => 92,  131 => 90,  129 => 89,  126 => 88,  122 => 86,  120 => 83,  119 => 81,  118 => 79,  115 => 78,  111 => 76,  109 => 75,  107 => 74,  104 => 73,  100 => 71,  98 => 68,  97 => 67,  96 => 65,  94 => 62,  91 => 61,  89 => 60,  83 => 57,  76 => 53,  70 => 50,  64 => 47,  60 => 45,  58 => 44,  54 => 42,  52 => 41,  50 => 40,  47 => 39,  45 => 37,  44 => 36,  43 => 35,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "@releases/fields_panel.html.twig", "C:\\xampp\\htdocs\\glpi\\marketplace\\releases\\templates\\fields_panel.html.twig");
    }
}
