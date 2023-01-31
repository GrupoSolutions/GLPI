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

/* components/itilobject/selfservice.html.twig */
class __TwigTemplate_3c7c237aa6bd3a6d32da2d774bbf31a580df0b999acd67eb97ff63c6b72343f5 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/selfservice.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        $context["rand"] = twig_random($this->env);
        // line 37
        $context["base_field_options"] = ["is_horizontal" => false, "full_width" => true, "full_width_adapt_column" => false, "fields_template" =>         // line 41
($context["itiltemplate"] ?? null), "rand" =>         // line 42
($context["rand"] ?? null)];
        // line 44
        $context["right_field_options"] = twig_array_merge(($context["base_field_options"] ?? null), ["is_horizontal" => true, "label_class" => "col-lg-3", "input_class" => "col-lg-9"]);
        // line 49
        echo "
<div class=\"container-lg\">

    ";
        // line 52
        if ((($context["has_tickets_to_validate"] ?? null) &&  !twig_test_empty(($context["url_validate"] ?? null)))) {
            // line 53
            echo "        <div class=\"alert alert-warning\" role=\"alert\">
            ";
            // line 54
            echo twig_escape_filter($this->env, __("There are some tickets awaiting approval"), "html", null, true);
            echo " — <a href=\"";
            echo twig_escape_filter($this->env, ($context["url_validate"] ?? null), "html", null, true);
            echo "\" class=\"alert-link\">";
            echo twig_escape_filter($this->env, __("check it out!"), "html", null, true);
            echo "</a>
        </div>
    ";
        }
        // line 57
        echo "
   ";
        // line 58
        echo twig_include($this->env, $context, "components/itilobject/mainform_open.html.twig");
        echo "

   ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

   <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">
                ";
        // line 65
        echo twig_escape_filter($this->env, __("Describe the incident or request"), "html", null, true);
        echo "
            </h3>
        </div>

        <div class=\"card-body bg-secondary-lt pt-0\">
            ";
        // line 70
        if (twig_length_filter($this->env, ($context["delegating"] ?? null))) {
            // line 71
            echo "                <div class=\"row align-items-end w-100\">
                    <div class=\"col-sm-6\">

                        ";
            // line 74
            ob_start(function () { return ''; });
            // line 75
            echo "                            <div id=\"delegate_other";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" class=\"card mt-2\">
                                <div class=\"card-body\">
                                    ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "showActorAddFormOnCreate", [0 => twig_constant("CommonITILActor::REQUESTER"), 1 =>             // line 79
($context["params"] ?? null)], "method", false, false, false, 77)), "truncate", [0 => 0], "method", false, false, false, 80), "html", null, true);
            // line 80
            echo "
                                </div>
                            </div>
                        ";
            $context["actor_add_form"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 84
            echo "
                        ";
            // line 85
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["nodelegate", (($__internal_compile_0 =             // line 87
($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nodelegate"] ?? null) : null), __("This ticket concerns me"), twig_array_merge(            // line 89
($context["base_field_options"] ?? null), ["add_field_html" =>             // line 90
($context["actor_add_form"] ?? null)])], 85, $context, $this->getSourceContext());
            // line 92
            echo "
                    </div>
                    <div class=\"col-sm-6 ";
            // line 94
            echo ((($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_check_pref") && (($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["nodelegate"] ?? null) : null))) ? ("") : ("d-none"));
            echo "\" id=\"user-info";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "-block\">
                        ";
            // line 95
            ob_start(function () { return ''; });
            // line 96
            echo "                        <div class=\"d-inline-flex\">
                            <div class=\"card mb-0\" id=\"user-info";
            // line 97
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\">
                                <div class=\"card-body\">
                                    ";
            // line 99
            $context["user"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentUser();
            // line 100
            echo "                                    ";
            $context["user_fields"] = twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 100);
            // line 101
            echo "                                    ";
            $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["user_name" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getFriendlyName", [], "method", false, false, false, 101))]);
            // line 102
            echo "                                    ";
            $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["email" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 102)]);
            // line 103
            echo "                                    ";
            echo twig_include($this->env, $context, "components/user/info_card.html.twig", ["user" =>             // line 104
($context["user_fields"] ?? null), "can_edit" => true], false);
            // line 106
            echo "
                                </div>
                            </div>
                        </div>
                        ";
            $context["personal_information"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 111
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_field", ["",             // line 113
($context["personal_information"] ?? null), __("Check your personnal information"),             // line 115
($context["base_field_options"] ?? null)], 111, $context, $this->getSourceContext());
            // line 116
            echo "
                    </div>
                </div>

            ";
        } else {
            // line 121
            echo "                <input type=\"hidden\" name=\"_users_id_requester\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"), "html", null, true);
            echo "\">
            ";
        }
        // line 123
        echo "        </div>
        <div class=\"card-body row mx-0\">
            <div class=\"offset-md-1 col-md-8 col-xxl-6\">
               ";
        // line 126
        echo twig_call_macro($macros["fields"], "macro_field", ["type", twig_get_attribute($this->env, $this->source,         // line 128
($context["item"] ?? null), "dropdownType", [0 => "type", 1 => twig_array_merge(["value" => (($__internal_compile_2 =         // line 129
($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["type"] ?? null) : null), "width" => "100%", "display" => false, "on_change" => "this.form.submit()"],         // line 133
($context["right_field_options"] ?? null))], "method", false, false, false, 128), _n("Type", "Types", 1),         // line 135
($context["right_field_options"] ?? null)], 126, $context, $this->getSourceContext());
        // line 136
        echo "

               ";
        // line 138
        $context["cat_params"] = twig_array_merge(($context["right_field_options"] ?? null), ["on_change" => "this.form.submit()"]);
        // line 141
        echo "               ";
        $context["condition"] = ["is_helpdeskvisible" => 1];
        // line 144
        echo "               ";
        if (((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["type"] ?? null) : null) == twig_constant("Ticket::INCIDENT_TYPE"))) {
            // line 145
            echo "                  ";
            $context["condition"] = twig_array_merge(($context["condition"] ?? null), ["is_incident" => 1]);
            // line 146
            echo "               ";
        } elseif (((($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["type"] ?? null) : null) == twig_constant("Ticket::DEMAND_TYPE"))) {
            // line 147
            echo "                  ";
            $context["condition"] = twig_array_merge(($context["condition"] ?? null), ["is_request" => 1]);
            // line 148
            echo "               ";
        }
        // line 149
        echo "               ";
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ITILCategory", "itilcategories_id", (($__internal_compile_5 =         // line 152
($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["itilcategories_id"] ?? null) : null), _n("Departamento", "Categories", 1), twig_array_merge(        // line 154
($context["cat_params"] ?? null), ["condition" => ($context["condition"] ?? null)])], 149, $context, $this->getSourceContext());
        // line 155
        echo "

               

               ";
        // line 159
        if (((($__internal_compile_6 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["helpdesk_hardware"] ?? null) : null) && twig_length_filter($this->env, (($__internal_compile_7 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["helpdesk_item_type"] ?? null) : null)))) {
            // line 160
            echo "                  ";
            ob_start(function () { return ''; });
            // line 161
            echo "                     <a class=\"btn btn-sm btn-ghost-secondary mt-2\" role=\"button\"
                        id=\"btn-collapse-items";
            // line 162
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
                        aria-expanded=\"false\" aria-controls=\"collapse-items";
            // line 163
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
                        data-bs-toggle=\"collapse\" href=\"#collapse-items";
            // line 164
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" >
                        <i class=\"fas fa-plus\"></i>
                     </a>
                     <div class=\"collapse\" id=\"collapse-items";
            // line 167
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 168
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Item_Ticket::itemAddForm", [0 => ($context["item"] ?? null), 1 => twig_array_merge(($context["params"] ?? null), ["_canupdate" => Session::haveRight("ticket", twig_constant("CREATE")), "_tickettemplate" =>             // line 170
($context["itiltemplate"] ?? null)])]);
            // line 172
            echo "                     </div>
                  ";
            $context["associated_items"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 174
            echo "
                  ";
            // line 175
            echo twig_call_macro($macros["fields"], "macro_field", ["items_id",             // line 177
($context["associated_items"] ?? null), _n("Associated element", "Associated elements", Session::getPluralNumber()),             // line 179
($context["right_field_options"] ?? null)], 175, $context, $this->getSourceContext());
            // line 180
            echo "
               ";
        }
        // line 182
        echo "
               ";
        // line 183
        if (( !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_users_id_observer"], "method", false, false, false, 183) ||  !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_groups_id_observer"], "method", false, false, false, 183))) {
            // line 184
            echo "                  ";
            ob_start(function () { return ''; });
            // line 185
            echo "
                     ";
            // line 186
            echo twig_include($this->env, $context, "components/itilobject/actors/main.html.twig", ["item" =>             // line 187
($context["item"] ?? null), "entities_id" => (($__internal_compile_8 =             // line 188
($context["params"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["entities_id"] ?? null) : null), "itiltemplate" =>             // line 189
($context["itiltemplate"] ?? null), "field_options" =>             // line 190
($context["right_field_options"] ?? null), "canupdate" => true, "returned_itemtypes" => [0 => "User"], "display_actortypes" => [0 => "observer"], "display_labels" => false, "disable_assign_to_me" => true]);
            // line 196
            echo "
                  ";
            $context["observer_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 198
            echo "                 
               ";
        }
        // line 200
        echo "
              

               ";
        // line 203
        echo twig_call_macro($macros["fields"], "macro_textField", ["name", (($__internal_compile_9 =         // line 205
($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["name"] ?? null) : null), __("Title"),         // line 207
($context["right_field_options"] ?? null)], 203, $context, $this->getSourceContext());
        // line 208
        echo "

               ";
        // line 210
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_10 =         // line 212
($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["content"] ?? null) : null), __("Description"), twig_array_merge(        // line 214
($context["right_field_options"] ?? null), ["enable_richtext" => true, "enable_fileupload" => true])], 210, $context, $this->getSourceContext());
        // line 218
        echo "
            </div>
        </div>

      ";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

        <div class=\"card-footer text-center\">
            <input type=\"hidden\" name=\"entities_id\" value=\"";
        // line 225
        echo twig_escape_filter($this->env, (($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["entities_id"] ?? null) : null), "html", null, true);
        echo "\" />
            <button type=\"submit\" class=\"btn btn-primary\" name=\"add\">
                <i class=\"fas fa-plus\"></i>
                <span>";
        // line 228
        echo twig_escape_filter($this->env, __("Submit message"), "html", null, true);
        echo "</span>
            </button>
        </div>
    </div>

   ";
        // line 233
        echo twig_include($this->env, $context, "components/itilobject/mainform_close.html.twig");
        echo "
</div>

<script type=\"text/javascript\">
\$(function () {
    \$('#btn-collapse-items";
        // line 238
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on('click', function() {
        \$(this).hide();
    });

    \$('#dropdown_nodelegate";
        // line 242
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on('change', function() {
        var is_for_me = (\$(this).val() == '1');
        \$('#user-info";
        // line 244
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "-block').toggleClass('d-none', !is_for_me);
        \$('#delegate_other";
        // line 245
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo " .card-body')
            .html(\"\")
            .load('";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/dropdownDelegationUsers.php"), "html", null, true);
        echo "', {
                'right': \"delegate\",
                'nodelegate': (is_for_me ? 1 : 0),
                '_users_id_requester': ";
        // line 250
        echo twig_escape_filter($this->env, (($__internal_compile_12 = ($context["params"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["_users_id_requester"] ?? null) : null), "html", null, true);
        echo ",
                '_users_id_requester_notif': ";
        // line 251
        echo json_encode((($__internal_compile_13 = ($context["params"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["_users_id_requester_notif"] ?? null) : null));
        echo ",
                'use_notification': ";
        // line 252
        echo twig_escape_filter($this->env, (($__internal_compile_14 = (($__internal_compile_15 = ($context["params"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["_users_id_requester_notif"] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["use_notification"] ?? null) : null), "html", null, true);
        echo ",
                'entity_restrict':  ";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "html", null, true);
        echo "
            });
    })

    saveActorsToDom();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/selfservice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 253,  390 => 252,  386 => 251,  382 => 250,  376 => 247,  371 => 245,  367 => 244,  362 => 242,  355 => 238,  347 => 233,  339 => 228,  333 => 225,  327 => 222,  321 => 218,  319 => 214,  318 => 212,  317 => 210,  313 => 208,  311 => 207,  310 => 205,  309 => 203,  304 => 200,  300 => 198,  296 => 196,  294 => 190,  293 => 189,  292 => 188,  291 => 187,  290 => 186,  287 => 185,  284 => 184,  282 => 183,  279 => 182,  275 => 180,  273 => 179,  272 => 177,  271 => 175,  268 => 174,  264 => 172,  262 => 170,  261 => 168,  257 => 167,  251 => 164,  247 => 163,  243 => 162,  240 => 161,  237 => 160,  235 => 159,  229 => 155,  227 => 154,  226 => 152,  224 => 149,  221 => 148,  218 => 147,  215 => 146,  212 => 145,  209 => 144,  206 => 141,  204 => 138,  200 => 136,  198 => 135,  197 => 133,  196 => 129,  195 => 128,  194 => 126,  189 => 123,  183 => 121,  176 => 116,  174 => 115,  173 => 113,  171 => 111,  164 => 106,  162 => 104,  160 => 103,  157 => 102,  154 => 101,  151 => 100,  149 => 99,  144 => 97,  141 => 96,  139 => 95,  133 => 94,  129 => 92,  127 => 90,  126 => 89,  125 => 87,  124 => 85,  121 => 84,  115 => 80,  113 => 79,  112 => 77,  106 => 75,  104 => 74,  99 => 71,  97 => 70,  89 => 65,  81 => 60,  76 => 58,  73 => 57,  63 => 54,  60 => 53,  58 => 52,  53 => 49,  51 => 44,  49 => 42,  48 => 41,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/selfservice.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\itilobject\\selfservice.html.twig");
    }
}
