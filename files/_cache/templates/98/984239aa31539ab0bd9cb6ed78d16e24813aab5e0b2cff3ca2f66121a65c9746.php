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

/* components/itilobject/timeline/timeline.html.twig */
class __TwigTemplate_515d1b8ba69b533c5cd7e9b0ac6e2740995febd0f3bd0b101d07613a31c329f8 extends Template
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
        $context["timeline_order"] = "flex-column";
        // line 35
        if ((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order"), twig_constant("CommonITILObject::TIMELINE_ORDER_REVERSE")))) {
            // line 36
            echo "    ";
            $context["timeline_order"] = "flex-column-reverse";
        }
        // line 38
        echo "
<div class=\"itil-timeline d-flex ";
        // line 39
        echo twig_escape_filter($this->env, ($context["timeline_order"] ?? null), "html", null, true);
        echo " align-items-start mb-auto\">
   ";
        // line 40
        echo twig_include($this->env, $context, "components/itilobject/timeline/main_description.html.twig");
        echo "

   ";
        // line 42
        $context["status_closed"] = twig_in_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["status"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getClosedStatusArray", [], "method", false, false, false, 42));
        // line 43
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timeline"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 44
            echo "      ";
            $context["entry_i"] = (($__internal_compile_1 = $context["entry"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["item"] ?? null) : null);
            // line 45
            echo "      ";
            $context["users_id"] = (($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["users_id"] ?? null) : null);
            // line 46
            echo "      ";
            $context["is_private"] = (((twig_get_attribute($this->env, $this->source, ($context["entry_i"] ?? null), "is_private", [], "array", true, true, false, 46) &&  !(null === (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["is_private"] ?? null) : null)))) ? ((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["is_private"] ?? null) : null)) : (false));
            // line 47
            echo "      ";
            $context["date_creation"] = (((twig_get_attribute($this->env, $this->source, ($context["entry_i"] ?? null), "date_creation", [], "array", true, true, false, 47) &&  !(null === (($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["date_creation"] ?? null) : null)))) ? ((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["date_creation"] ?? null) : null)) : ((($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["date"] ?? null) : null)));
            // line 48
            echo "      ";
            $context["date_mod"] = (($__internal_compile_8 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["date_mod"] ?? null) : null);
            // line 49
            echo "      ";
            $context["entry_rand"] = twig_random($this->env);
            // line 50
            echo "      ";
            $context["is_current_user"] = (0 === twig_compare(($context["users_id"] ?? null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID")));
            // line 51
            echo "      ";
            $context["anonym_user"] = (((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface(), "helpdesk")) &&  !($context["is_current_user"] ?? null)) && (0 !== twig_compare($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")), twig_constant("Entity::ANONYMIZE_DISABLED"))));
            // line 52
            echo "
      ";
            // line 54
            echo "      ";
            if (((($__internal_compile_9 = $context["entry"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["type"] ?? null) : null) === "Solution")) {
                // line 55
                echo "         ";
                $context["entry"] = twig_array_merge($context["entry"], ["type" => "ITILSolution"]);
                // line 56
                echo "      ";
            }
            // line 57
            echo "
      ";
            // line 58
            $context["can_edit_i"] = (($__internal_compile_10 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["can_edit"] ?? null) : null);
            // line 59
            echo "      ";
            $context["can_promote"] = ((((0 === twig_compare((($__internal_compile_11 = $context["entry"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["type"] ?? null) : null), "ITILFollowup")) || (0 === twig_compare((($__internal_compile_12 = $context["entry"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["type"] ?? null) : null), "TicketTask"))) && ($context["can_edit_i"] ?? null)) &&  !($context["status_closed"] ?? null));
            // line 60
            echo "      ";
            $context["is_promoted"] = (($context["can_promote"] ?? null) && (1 === twig_compare((($__internal_compile_13 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["sourceof_items_id"] ?? null) : null), 0)));
            // line 61
            echo "
      ";
            // line 62
            $context["timeline_position"] = (($__internal_compile_14 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["timeline_position"] ?? null) : null);
            // line 63
            echo "      ";
            $context["item_position"] = "t-left";
            // line 64
            echo "      ";
            if ((0 === twig_compare(($context["timeline_position"] ?? null), twig_constant("CommonITILObject::TIMELINE_LEFT")))) {
                // line 65
                echo "         ";
                $context["item_position"] = "t-left";
                // line 66
                echo "      ";
            } elseif ((0 === twig_compare(($context["timeline_position"] ?? null), twig_constant("CommonITILObject::TIMELINE_MIDLEFT")))) {
                // line 67
                echo "         ";
                $context["item_position"] = "t-left t-middle";
                // line 68
                echo "      ";
            } elseif ((0 === twig_compare(($context["timeline_position"] ?? null), twig_constant("CommonITILObject::TIMELINE_MIDRIGHT")))) {
                // line 69
                echo "         ";
                $context["item_position"] = "t-right t-middle";
                // line 70
                echo "      ";
            } elseif ((0 === twig_compare(($context["timeline_position"] ?? null), twig_constant("CommonITILObject::TIMELINE_RIGHT")))) {
                // line 71
                echo "         ";
                $context["item_position"] = "t-right";
                // line 72
                echo "      ";
            }
            // line 73
            echo "
      ";
            // line 74
            $context["itiltype"] = ((twig_get_attribute($this->env, $this->source, $context["entry"], "itiltype", [], "array", true, true, false, 74)) ? (("ITIL" . (($__internal_compile_15 = $context["entry"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["itiltype"] ?? null) : null))) : ((($__internal_compile_16 = $context["entry"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["type"] ?? null) : null)));
            // line 75
            echo "
      ";
            // line 76
            $context["state_class"] = "";
            // line 77
            echo "      ";
            if (((($__internal_compile_17 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["state"] ?? null) : null) === constant("Planning::INFO"))) {
                // line 78
                echo "         ";
                $context["state_class"] = "info";
                // line 79
                echo "      ";
            }
            // line 80
            echo "      ";
            if (((($__internal_compile_18 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["state"] ?? null) : null) === constant("Planning::TODO"))) {
                // line 81
                echo "         ";
                $context["state_class"] = "todo";
                // line 82
                echo "      ";
            }
            // line 83
            echo "      ";
            if (((($__internal_compile_19 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["state"] ?? null) : null) === constant("Planning::DONE"))) {
                // line 84
                echo "         ";
                $context["state_class"] = "done";
                // line 85
                echo "      ";
            }
            // line 86
            echo "
      ";
            // line 87
            $context["solution_class"] = "";
            // line 88
            echo "      ";
            if ((0 === twig_compare(($context["itiltype"] ?? null), "ITILSolution"))) {
                // line 89
                echo "         ";
                if (((($__internal_compile_20 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["status"] ?? null) : null) === constant("CommonITILValidation::WAITING"))) {
                    // line 90
                    echo "            ";
                    $context["solution_class"] = "waiting";
                    // line 91
                    echo "         ";
                }
                // line 92
                echo "         ";
                if (((($__internal_compile_21 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["status"] ?? null) : null) === constant("CommonITILValidation::ACCEPTED"))) {
                    // line 93
                    echo "            ";
                    $context["solution_class"] = "accepted";
                    // line 94
                    echo "         ";
                }
                // line 95
                echo "         ";
                if (((($__internal_compile_22 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["status"] ?? null) : null) === constant("CommonITILValidation::REFUSED"))) {
                    // line 96
                    echo "            ";
                    $context["solution_class"] = "refused";
                    // line 97
                    echo "         ";
                }
                // line 98
                echo "      ";
            }
            // line 99
            echo "
      <div class=\"timeline-item mb-3 ";
            // line 100
            echo twig_escape_filter($this->env, ($context["itiltype"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["state_class"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_compile_23 = $context["entry"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["class"] ?? null) : null), "html", null, true);
            echo " ";
            echo ((twig_in_filter("right", ($context["item_position"] ?? null))) ? ("ms-auto") : (""));
            echo "\"
            data-itemtype=\"";
            // line 101
            echo twig_escape_filter($this->env, (($__internal_compile_24 = $context["entry"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["type"] ?? null) : null), "html", null, true);
            echo "\" data-items-id=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_25 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["id"] ?? null) : null), "html", null, true);
            echo "\"
            ";
            // line 102
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "item_action", [], "array", true, true, false, 102)) {
                echo "data-item-action=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_26 = $context["entry"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["item_action"] ?? null) : null), "html", null, true);
                echo "\"";
            }
            echo ">
         <div class=\"row\">
            <div class=\"col-auto todo-list-state ";
            // line 104
            echo ((twig_in_filter("left", ($context["item_position"] ?? null))) ? ("ms-auto ms-0 order-sm-last") : (""));
            echo "\">
               ";
            // line 105
            if (((($__internal_compile_27 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["state"] ?? null) : null) === constant("Planning::TODO"))) {
                // line 106
                echo "                  <span class=\"state state_1\" onclick=\"change_task_state(";
                echo twig_escape_filter($this->env, (($__internal_compile_28 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["id"] ?? null) : null), "html", null, true);
                echo ", this)\" title=\"";
                echo twig_escape_filter($this->env, __("To do"), "html", null, true);
                echo "\"></span>
               ";
            } elseif (((($__internal_compile_29 =             // line 107
($context["entry_i"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["state"] ?? null) : null) === constant("Planning::DONE"))) {
                // line 108
                echo "                  <span class=\"state state_2\" onclick=\"change_task_state(";
                echo twig_escape_filter($this->env, (($__internal_compile_30 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["id"] ?? null) : null), "html", null, true);
                echo ", this)\" title=\"";
                echo twig_escape_filter($this->env, __("Done"), "html", null, true);
                echo "\"></span>
               ";
            }
            // line 110
            echo "            </div>

            <div class=\"col-auto d-flex flex-column user-part ";
            // line 112
            echo ((twig_in_filter("right", ($context["item_position"] ?? null))) ? ("ms-auto ms-0 order-sm-last") : ("order-first"));
            echo "\">
               ";
            // line 113
            $context["avatar_rand"] = twig_random($this->env);
            // line 114
            echo "               ";
            // line 115
            echo "               ";
            $context["entry_user"] = (((array_key_exists("users_id", $context) &&  !(null === ($context["users_id"] ?? null)))) ? ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null))) : (null));
            // line 116
            echo "               ";
            if ( !(null === ($context["entry_user"] ?? null))) {
                // line 117
                echo "                  ";
                $context["user_fields"] = twig_get_attribute($this->env, $this->source, ($context["entry_user"] ?? null), "fields", [], "any", false, false, false, 117);
                // line 118
                echo "                  ";
                $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["user_name" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source, ($context["entry_user"] ?? null), "getFriendlyName", [], "method", false, false, false, 118))]);
                // line 119
                echo "                  ";
                $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["email" => twig_get_attribute($this->env, $this->source, ($context["entry_user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 119)]);
                // line 120
                echo "                  <span id=\"timeline-avatar";
                echo twig_escape_filter($this->env, ($context["avatar_rand"] ?? null), "html", null, true);
                echo "\">
                     ";
                // line 121
                echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" =>                 // line 122
($context["users_id"] ?? null), "enable_anonymization" =>                 // line 123
($context["anonym_user"] ?? null)], false);
                // line 124
                echo "
                  </span>
                  ";
                // line 126
                if ( !($context["anonym_user"] ?? null)) {
                    // line 127
                    echo "                     ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [0 => twig_include($this->env, $context, "components/user/info_card.html.twig", ["user" =>                     // line 129
($context["user_fields"] ?? null), "enable_anonymization" => false], false), 1 => ["applyto" => ("timeline-avatar" .                     // line 132
($context["avatar_rand"] ?? null))]]);
                    // line 134
                    echo "                  ";
                }
                // line 135
                echo "               ";
            } else {
                // line 136
                echo "                  <span id=\"timeline-avatar";
                echo twig_escape_filter($this->env, ($context["avatar_rand"] ?? null), "html", null, true);
                echo "\"><span class=\"avatar avatar-md rounded\"></span></span>
               ";
            }
            // line 138
            echo "            </div>
            <div class=\"col-12 col-sm d-flex flex-column content-part\">
               <span class=\"mt-2 timeline-content ";
            // line 140
            echo twig_escape_filter($this->env, ($context["solution_class"] ?? null), "html", null, true);
            echo " flex-grow-1 ";
            echo twig_escape_filter($this->env, ($context["item_position"] ?? null), "html", null, true);
            echo " card\">
                  <div class=\"card-body px-1 px-xxl-3\">
                     ";
            // line 142
            echo twig_include($this->env, $context, "components/itilobject/timeline/timeline_item_header.html.twig");
            echo "

                     ";
            // line 144
            if (twig_in_filter(($context["itiltype"] ?? null), twig_array_column(($context["timeline_itemtypes"] ?? null), "type"))) {
                // line 145
                echo "                        ";
                $context["matching_types"] = twig_array_filter($this->env, ($context["timeline_itemtypes"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "type", [], "any", false, false, false, 145), ($context["itiltype"] ?? null))); });
                // line 146
                echo "                        ";
                if ((1 === twig_compare(twig_length_filter($this->env, ($context["matching_types"] ?? null)), 0))) {
                    // line 147
                    echo "                           ";
                    $context["timeline_itemtype"] = twig_first($this->env, ($context["matching_types"] ?? null));
                    // line 148
                    echo "                           ";
                    if (twig_get_attribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", true, true, false, 148)) {
                        // line 149
                        echo "                              ";
                        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", false, false, false, 149), ["form_mode" => "view"]);
                        echo "
                           ";
                    }
                    // line 151
                    echo "                        ";
                }
                // line 152
                echo "                     ";
            } else {
                // line 153
                echo "                        <div class=\"read-only-content\">
                           ";
                // line 154
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml((($__internal_compile_31 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["content"] ?? null) : null));
                echo "
                        </div>
                     ";
            }
            // line 157
            echo "                     <div class=\"edit-content collapse\">
                        <div class=\"ajax-content\"></div>
                     </div>
                  </div>
               </span>

               ";
            // line 163
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "documents", [], "array", true, true, false, 163)) {
                // line 164
                echo "                  ";
                echo twig_include($this->env, $context, "components/itilobject/timeline/sub_documents.html.twig", ["item" =>                 // line 165
($context["item"] ?? null), "entry" =>                 // line 166
$context["entry"]]);
                // line 167
                echo "
               ";
            }
            // line 169
            echo "            </div>
         </div>
      </div>
   ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "
   <div class=\"timeline-item tasks-title d-none\">
      <h3>";
        // line 175
        echo twig_escape_filter($this->env, _n("Task", "Tasks", Session::getPluralNumber()), "html", null, true);
        echo "</h3>
   </div>

   ";
        // line 178
        echo twig_include($this->env, $context, "components/itilobject/timeline/todo-list-summary.html.twig");
        echo "

   <div class=\"timeline-item validations-title d-none mt-4\">
      <h3>";
        // line 181
        echo twig_escape_filter($this->env, _n("Validation", "Validations", Session::getPluralNumber()), "html", null, true);
        echo "</h3>
   </div>

   ";
        // line 184
        echo twig_include($this->env, $context, "components/itilobject/timeline/approbation_form.html.twig");
        echo "
   ";
        // line 185
        echo twig_include($this->env, $context, "components/itilobject/answer.html.twig");
        echo "

</div>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".edit-timeline-item\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      var content_block = timeline_item.find(\".timeline-content\");
      var itemtype      = timeline_item.data('itemtype');
      var items_id      = timeline_item.data('items-id');
      var item_action   = timeline_item.data('item-action');

      content_block.find(\".read-only-content\").hide();
      content_block.find(\".edit-content\").show()
         .find(\".ajax-content\")
         .html('<i class=\"fas fa-3x fa-spinner fa-spin ms-auto\"></i>')
         .load(\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/timeline.php"), "html", null, true);
        echo "\", {
            'action'     : 'viewsubitem',
            'type'       : itemtype,
            'parenttype' : '";
        // line 205
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 205), "html", null, true);
        echo "',
            '";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 206), "html", null, true);
        echo "': ";
        echo twig_escape_filter($this->env, (($__internal_compile_32 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 206)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["id"] ?? null) : null), "html", null, true);
        echo ",
            'id'         : items_id,
            'item_action': item_action
         });

      timeline_item.find('.timeline-item-buttons').addClass('d-none');
      timeline_item.find('.close-edit-content').removeClass('d-none');

      \$(\"#itil-footer\").find(\".main-actions\").hide();
   });

   \$(document).on(\"click\", \".close-edit-content\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      timeline_item.find('.timeline-item-buttons').removeClass('d-none');
      timeline_item.find('.close-edit-content').addClass('d-none');

      timeline_item.find('.ajax-content').html('');
      timeline_item.find('.read-only-content').show();

      \$(\"#itil-footer .main-actions\").show();
   });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 206,  486 => 205,  480 => 202,  460 => 185,  456 => 184,  450 => 181,  444 => 178,  438 => 175,  434 => 173,  417 => 169,  413 => 167,  411 => 166,  410 => 165,  408 => 164,  406 => 163,  398 => 157,  392 => 154,  389 => 153,  386 => 152,  383 => 151,  377 => 149,  374 => 148,  371 => 147,  368 => 146,  365 => 145,  363 => 144,  358 => 142,  351 => 140,  347 => 138,  341 => 136,  338 => 135,  335 => 134,  333 => 132,  332 => 129,  330 => 127,  328 => 126,  324 => 124,  322 => 123,  321 => 122,  320 => 121,  315 => 120,  312 => 119,  309 => 118,  306 => 117,  303 => 116,  300 => 115,  298 => 114,  296 => 113,  292 => 112,  288 => 110,  280 => 108,  278 => 107,  271 => 106,  269 => 105,  265 => 104,  256 => 102,  250 => 101,  240 => 100,  237 => 99,  234 => 98,  231 => 97,  228 => 96,  225 => 95,  222 => 94,  219 => 93,  216 => 92,  213 => 91,  210 => 90,  207 => 89,  204 => 88,  202 => 87,  199 => 86,  196 => 85,  193 => 84,  190 => 83,  187 => 82,  184 => 81,  181 => 80,  178 => 79,  175 => 78,  172 => 77,  170 => 76,  167 => 75,  165 => 74,  162 => 73,  159 => 72,  156 => 71,  153 => 70,  150 => 69,  147 => 68,  144 => 67,  141 => 66,  138 => 65,  135 => 64,  132 => 63,  130 => 62,  127 => 61,  124 => 60,  121 => 59,  119 => 58,  116 => 57,  113 => 56,  110 => 55,  107 => 54,  104 => 52,  101 => 51,  98 => 50,  95 => 49,  92 => 48,  89 => 47,  86 => 46,  83 => 45,  80 => 44,  62 => 43,  60 => 42,  55 => 40,  51 => 39,  48 => 38,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/timeline.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/timeline.html.twig");
    }
}
