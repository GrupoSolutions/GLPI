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

/* @releases/footer.html.twig */
class __TwigTemplate_32c3bcf5b38deaaa9ac27ac4dfa137dc385771dc28115f325b126c558479b1f0 extends Template
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
        $context["timeline_btns_cls"] = ($context["left_regular_cls"] ?? null);
        // line 33
        $context["form_btns_cls"] = ((($context["is_expanded"] ?? null)) ? (($context["right_expanded_cls"] ?? null)) : ("col-md"));
        // line 34
        $context["switch_btn_cls"] = "fa-caret-left";
        // line 35
        if (($context["is_expanded"] ?? null)) {
            // line 36
            echo "    ";
            $context["timeline_btns_cls"] = ($context["left_expanded_cls"] ?? null);
            // line 37
            echo "    ";
            $context["form_btns_cls"] = ($context["right_expanded_cls"] ?? null);
            // line 38
            echo "    ";
            $context["switch_btn_cls"] = "fa-caret-right";
        }
        // line 40
        echo "
<div class=\"mx-n2 mb-n2 itil-footer itil-footer p-0 border-top\" id=\"itil-footer\">
    <div class=\"buttons-bar d-flex py-2\">
        <div class=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["timeline_btns_cls"] ?? null), "html", null, true);
        echo " ps-3 timeline-buttons\">
            ";
        // line 44
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 44)) {
            // line 45
            echo "            <div class=\"col-md-8 ps-3 timeline-buttons\">
                ";
            // line 46
            $context["default_action_data"] = twig_first($this->env, ($context["timeline_itemtypes"] ?? null));
            // line 47
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNotSolved", [], "method", false, false, false, 47) && (0 !== twig_compare(($context["default_action_data"] ?? null), false)))) {
                // line 48
                echo "                ";
                if ((1 === twig_compare(twig_length_filter($this->env, ($context["timeline_itemtypes"] ?? null)), 1))) {
                    // line 49
                    echo "                <div class=\"btn-group me-2 main-actions\" style=\"";
                    echo (((1 === twig_compare(($context["load_kb_sol"] ?? null), 0))) ? ("display:none;") : (""));
                    echo "\">
                    ";
                } else {
                    // line 51
                    echo "                    ";
                    // line 52
                    echo "                    <div class=\"main-actions\" style=\"display:inline-flex\">
                        ";
                }
                // line 54
                echo "                        <button class=\"submit btn btn-primary answer-action\" data-bs-toggle=\"collapse\"
                                data-bs-target=\"#new-";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["default_action_data"] ?? null), "class", [], "any", false, false, false, 55), "html", null, true);
                echo "-block\">
                            <i class=\"";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["default_action_data"] ?? null), "icon", [], "any", false, false, false, 56), "html", null, true);
                echo "\"></i>
                            <span>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["default_action_data"] ?? null), "label", [], "any", false, false, false, 57), "html", null, true);
                echo "</span>
                        </button>
                        ";
                // line 59
                if ((1 === twig_compare(twig_length_filter($this->env, ($context["timeline_itemtypes"] ?? null)), 1))) {
                    // line 60
                    echo "                            <button type=\"button\" class=\"submit btn btn-primary dropdown-toggle dropdown-toggle-split\"
                                    data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <span class=\"visually-hidden\">";
                    // line 62
                    echo twig_escape_filter($this->env, __("View other actions"), "html", null, true);
                    echo "</span>
                            </button>
                        ";
                }
                // line 65
                echo "                        <ul class=\"dropdown-menu\">
                            ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["timeline_itemtypes"] ?? null));
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
                foreach ($context['_seq'] as $context["action"] => $context["timeline_itemtype"]) {
                    // line 67
                    echo "                                ";
                    if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 67), 0))) {
                        // line 68
                        echo "                                    <li><a class=\"dropdown-item action-";
                        echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                        echo " answer-action\" href=\"#\"
                                           data-bs-toggle=\"collapse\"
                                           data-bs-target=\"#new-";
                        // line 70
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 70), "html", null, true);
                        echo "-block\">
                                            <i class=\"";
                        // line 71
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "icon", [], "any", false, false, false, 71), "html", null, true);
                        echo "\"></i>
                                            <span>";
                        // line 72
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "label", [], "any", false, false, false, 72), "html", null, true);
                        echo "</span>
                                        </a></li>
                                ";
                    }
                    // line 75
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['action'], $context['timeline_itemtype'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                        </ul>
                    </div>
                    ";
            }
            // line 79
            echo "
                    <ul class=\"legacy-timeline-actions\">
                        ";
            // line 81
            echo ((array_key_exists("legacy_timeline_actions", $context)) ? (_twig_default_filter(($context["legacy_timeline_actions"] ?? null), "")) : (""));
            echo "
                    </ul>
                    ";
            // line 83
            echo twig_include($this->env, $context, "@releases/filter_timeline.html.twig");
            echo "
                </div>
                ";
        }
        // line 86
        echo "            </div>
            <div class=\"form-buttons ";
        // line 87
        echo twig_escape_filter($this->env, ($context["form_btns_cls"] ?? null), "html", null, true);
        echo " d-flex justify-content-end ms-auto ms-md-0 my-n2 py-2 pe-3 card-footer border-top-0 position-relative\">
         <span class=\"d-none d-md-block position-absolute top-0 start-0\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 89
        echo twig_escape_filter($this->env, __("Toggle panels width"), "html", null, true);
        echo "\">
            <button type=\"button\" class=\"switch-panel-width btn btn-sm btn-square btn-icon btn-ghost-secondary px-0\">
               <i class=\"fas ";
        // line 91
        echo twig_escape_filter($this->env, ($context["switch_btn_cls"] ?? null), "html", null, true);
        echo "\"></i>
            </button>
            <button type=\"button\" class=\"collapse-panel btn btn-sm btn-square btn-icon btn-ghost-secondary px-0 mr-1\">
               <i class=\"fas fa-caret-right\"></i>
            </button>
         </span>

                ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 98)) {
            // line 99
            echo "                    <button class=\"btn btn-primary\" type=\"submit\" name=\"add\" form=\"itil-form\"
                            title=\"";
            // line 100
            echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
            echo "\">
                        <i class=\"fas fa-plus\"></i>
                        <span class=\"d-none d-md-block\">";
            // line 102
            echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
            echo "</span>
                    </button>
                ";
        } else {
            // line 105
            echo "
                    <div class=\"btn-group\" role=\"group\">
                        ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canDeleteItem", [], "method", false, false, false, 107)) {
                // line 108
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 108)) {
                    // line 109
                    echo "                                <button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"restore\" form=\"itil-form\"
                                        title=\"";
                    // line 110
                    echo twig_escape_filter($this->env, _x("button", "Restore"), "html", null, true);
                    echo "\">
                                    <i class=\"fas fa-trash-restore-alt\"></i>
                                    <span class=\"d-none d-md-block\">";
                    // line 112
                    echo twig_escape_filter($this->env, _x("button", "Restore"), "html", null, true);
                    echo "</span>
                                </button>

                                <button class=\"btn btn-outline-danger\" type=\"submit\" name=\"purge\" form=\"itil-form\"
                                        title=\"";
                    // line 116
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "\"
                                        onclick=\"return confirm('";
                    // line 117
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                                    <i class=\"ti ti-trash\"></i>
                                    <span class=\"d-none d-md-block\">";
                    // line 119
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                                </button>
                            ";
                } else {
                    // line 122
                    echo "                                <button class=\"btn btn-outline-danger\" type=\"submit\" name=\"delete\" form=\"itil-form\"
                                        title=\"";
                    // line 123
                    echo twig_escape_filter($this->env, _x("button", "Put in trashbin"), "html", null, true);
                    echo "\"
                                        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                    <i class=\"ti ti-trash\"></i>
                                </button>
                            ";
                }
                // line 128
                echo "                        ";
            }
            // line 129
            echo "
                        ";
            // line 130
            if (($context["canupdate"] ?? null)) {
                // line 131
                echo "                            ";
                echo twig_include($this->env, $context, "components/form/single-action.html.twig", ["onlyicon" => true]);
                // line 133
                echo "
                        ";
            }
            // line 135
            echo "
                        ";
            // line 136
            $context["is_locked"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "locked", [], "array", true, true, false, 136) && (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["locked"] ?? null) : null));
            // line 137
            echo "                        ";
            $context["display_save_btn"] = ( !($context["is_locked"] ?? null) && ((((($context["canupdate"] ?? null) || ($context["can_requester"] ?? null)) || ($context["canpriority"] ?? null)) || ($context["canassign"] ?? null)) || ($context["canassigntome"] ?? null)));
            // line 138
            echo "                        ";
            if (($context["display_save_btn"] ?? null)) {
                // line 139
                echo "                            <button class=\"btn btn-primary\" type=\"submit\" name=\"update\" form=\"itil-form\"
                                    title=\"";
                // line 140
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "\">
                                <i class=\"far fa-save\"></i>
                                <span class=\"d-none d-md-block\">";
                // line 142
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                            </button>
                        ";
            }
            // line 145
            echo "                    </div>

                ";
        }
        // line 148
        echo "            </div>
        </div>
    </div>

    ";
        // line 152
        $context["openfollowup"] = ((((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_openfollowup", [], "array", true, true, false, 152) &&  !(null === (($__internal_compile_1 = ($context["_get"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["_openfollowup"] ?? null) : null)))) ? ((($__internal_compile_2 = ($context["_get"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["_openfollowup"] ?? null) : null)) : (false)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isSolved", [0 => true], "method", false, false, false, 152));
        // line 153
        echo "    ";
        $context["timeline_reversed"] = (0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order"), twig_constant("CommonITILObject::TIMELINE_ORDER_REVERSE")));
        // line 154
        echo "
    <script type=\"text/javascript\">
       \$(function () {
          \$(document).on(\"click\", \"#itil-footer .answer-action\", function () {
             scrollToTimelineStart();

             // hide answer button after clicking on it
             \$(this).closest(\".main-actions\").hide();
          });

          // when close button of new answer block is clicked, show again the new answer button
          \$(document).on(\"click\", \"#new-itilobject-form .close-itil-answer\", function () {
             \$(\"#itil-footer .main-actions\").show();
          });

          var scrollToTimelineStart = function () {
             // small delay to be sure all content is loaded
             // otherwise, height of answer html may not be taken in account by document height
             setTimeout(() => {
                // scroll body to ensure we are at bottom (useful for responsive display)
                \$('html, body').animate({
                   scrollTop: ";
        // line 175
        echo ((($context["timeline_reversed"] ?? null)) ? ("-") : (""));
        echo "\$(document).height()
                }, 0, function () {
                   // scroll timeline with animation
                   var timeline = \$(\"#itil-object-container .itil-left-side\");
                   timeline.animate({
                      scrollTop: ";
        // line 180
        echo ((($context["timeline_reversed"] ?? null)) ? ("-") : (""));
        echo "timeline.prop('scrollHeight')
                   }, 'slow');
                });
             }, 200);
          };

           ";
        // line 186
        if (($context["openfollowup"] ?? null)) {
            // line 187
            echo "          // trigger for reopen, show followup form in timeline
          var myCollapse = document.getElementById('new-ITILFollowup-block');
          var bsCollapse = new bootstrap.Collapse(myCollapse);
          bsCollapse.show();

          scrollToTimelineStart();
           ";
        }
        // line 194
        echo "       });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@releases/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 194,  384 => 187,  382 => 186,  373 => 180,  365 => 175,  342 => 154,  339 => 153,  337 => 152,  331 => 148,  326 => 145,  320 => 142,  315 => 140,  312 => 139,  309 => 138,  306 => 137,  304 => 136,  301 => 135,  297 => 133,  294 => 131,  292 => 130,  289 => 129,  286 => 128,  278 => 123,  275 => 122,  269 => 119,  264 => 117,  260 => 116,  253 => 112,  248 => 110,  245 => 109,  242 => 108,  240 => 107,  236 => 105,  230 => 102,  225 => 100,  222 => 99,  220 => 98,  210 => 91,  205 => 89,  200 => 87,  197 => 86,  191 => 83,  186 => 81,  182 => 79,  177 => 76,  163 => 75,  157 => 72,  153 => 71,  149 => 70,  143 => 68,  140 => 67,  123 => 66,  120 => 65,  114 => 62,  110 => 60,  108 => 59,  103 => 57,  99 => 56,  95 => 55,  92 => 54,  88 => 52,  86 => 51,  80 => 49,  77 => 48,  74 => 47,  72 => 46,  69 => 45,  67 => 44,  63 => 43,  58 => 40,  54 => 38,  51 => 37,  48 => 36,  46 => 35,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "@releases/footer.html.twig", "C:\\xampp\\htdocs\\glpi\\marketplace\\releases\\templates\\footer.html.twig");
    }
}
