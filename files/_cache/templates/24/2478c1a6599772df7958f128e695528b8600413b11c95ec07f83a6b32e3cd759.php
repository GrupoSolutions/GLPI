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

/* @releases/layout.html.twig */
class __TwigTemplate_44093131771bc3c897dadc3db48020105f1bd2b7c3ada6c6a96fd0bf91c58e17 extends Template
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
        $context["rand"] = twig_random($this->env);
        // line 33
        $context["main_rand"] = ($context["rand"] ?? null);
        // line 34
        echo "
";
        // line 35
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 36
        $context["is_collapsed"] = (0 === twig_compare((($__internal_compile_0 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["collapsed"] ?? null) : null), "true"));
        // line 37
        $context["is_expanded"] = (0 === twig_compare((($__internal_compile_1 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["expanded"] ?? null) : null), "true"));
        // line 38
        $context["collapsed_cls"] = ((($context["is_collapsed"] ?? null)) ? ("right-collapsed") : (""));
        // line 39
        $context["expanded_cls"] = (((0 === twig_compare(($context["is_expanded"] ?? null), "true"))) ? ("right-expanded") : (""));
        // line 40
        echo "
";
        // line 41
        $context["left_regular_cls"] = "col-xl-8 col-md-10";
        // line 42
        $context["right_regular_cls"] = "col-xl-4 col-md-2";
        // line 43
        echo "
";
        // line 44
        $context["left_expanded_cls"] = "col-xxl-4 col-md-4";
        // line 45
        $context["right_expanded_cls"] = "col-xxl-8 col-md-8";
        // line 46
        echo "
";
        // line 47
        $context["left_side_cls"] = ($context["left_regular_cls"] ?? null);
        // line 48
        $context["right_side_cls"] = ($context["right_regular_cls"] ?? null);
        // line 49
        if (($context["is_expanded"] ?? null)) {
            // line 50
            echo "   ";
            $context["left_side_cls"] = ($context["left_expanded_cls"] ?? null);
            // line 51
            echo "   ";
            $context["right_side_cls"] = ($context["right_expanded_cls"] ?? null);
        }
        // line 53
        echo "
<div id=\"itil-object-container\" class=\"mt-n1 ";
        // line 54
        echo twig_escape_filter($this->env, ($context["collapsed_cls"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["expanded_cls"] ?? null), "html", null, true);
        echo "\">

   ";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 56) &&  !(($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["template_preview"] ?? null) : null))) {
            // line 57
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_open.html.twig");
            echo "
   ";
        }
        // line 59
        echo "
   <div class=\"row d-flex flex-column align-items-stretch itil-object \">
      ";
        // line 61
        $context["fl_direction"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 61)) ? ("flex-column") : ("flex-column-reverse"));
        // line 62
        echo "      <div class=\"itil-left-side col-12 col-md-8 order-last order-md-first pt-2 pe-2 pe-md-4 d-flex ";
        echo twig_escape_filter($this->env, ($context["fl_direction"] ?? null), "html", null, true);
        echo " border-top border-4\">
         ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 63)) {
            // line 64
            echo "            ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/new_form.html.twig");
            echo "
         ";
        } else {
            // line 66
            echo "            ";
            echo twig_include($this->env, $context, "@releases/timeline.html.twig");
            echo "
         ";
        }
        // line 68
        echo "      </div>
      <input type=\"hidden\" name=\"releasetemplates_id\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["template_id"] ?? null) : null), "html", null, true);
        echo "\" />
      <div class=\"itil-right-side col-12 ";
        // line 70
        echo twig_escape_filter($this->env, ($context["right_side_cls"] ?? null), "html", null, true);
        echo " mt-0 mt-md-n1 card-footer p-0 rounded-0\">
         ";
        // line 71
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 71)) {
            // line 72
            echo "            ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_open.html.twig");
            echo "
         ";
        }
        // line 74
        echo "         ";
        echo twig_include($this->env, $context, "@releases/fields_panel.html.twig");
        echo "
         ";
        // line 75
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 75)) {
            // line 76
            echo "            ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_close.html.twig");
            echo "
         ";
        }
        // line 78
        echo "      </div>
   </div>

   ";
        // line 81
        if ( !(($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["template_preview"] ?? null) : null)) {
            // line 82
            echo "      ";
            echo twig_include($this->env, $context, "@releases/footer.html.twig");
            echo "
   ";
        }
        // line 84
        echo "
   ";
        // line 85
        if (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 85) &&  !(($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["template_preview"] ?? null) : null))) {
            // line 86
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_close.html.twig");
            echo "
   ";
        }
        // line 88
        echo "
</div>

";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "requester", 1 => "observer", 2 => "assign"]);
        foreach ($context['_seq'] as $context["_key"] => $context["actortype"]) {
            // line 93
            echo "   <form method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 93), "html", null, true);
            echo "\" class=\"d-none\" id=\"addme_as_";
            echo twig_escape_filter($this->env, $context["actortype"], "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ($context["main_rand"] ?? null), "html", null, true);
            echo "\" data-submit-once>
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 94
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
      <input type=\"hidden\" name=\"addme_as_actor\" value=\"1\" />
      <input type=\"hidden\" name=\"actortype\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, $context["actortype"], "html", null, true);
            echo "\" />
   </form>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actortype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
<form name=\"massaction_";
        // line 100
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" id=\"massaction_";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" method=\"post\"
      action=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/massiveaction.php"), "html", null, true);
        echo "\" data-submit-once>
   <div id=\"massive_container_";
        // line 102
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\"></div>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
</form>

<script type=\"text/javascript\">
   \$(function() {
      \$(document).on(\"click\", \".switch-panel-width\", function() {
         if (\$('#itil-object-container').hasClass('right-collapsed')) {
            \$('#itil-object-container').removeClass('right-collapsed');
         } else if (\$('.itil-left-side').hasClass(\"";
        // line 111
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\")) {
            // Expand right-side panel
            \$('#itil-object-container').addClass('right-expanded');
            // Left side
            \$('.itil-left-side').removeClass(\"";
        // line 115
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["left_expanded_cls"] ?? null), "html", null, true);
        echo "\");
            \$('.itil-footer .timeline-buttons').removeClass(\"";
        // line 116
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["left_expanded_cls"] ?? null), "html", null, true);
        echo "\");
            // Right side
            \$('.itil-footer .form-buttons').removeClass('col-md').addClass(\"";
        // line 118
        echo twig_escape_filter($this->env, ($context["right_expanded_cls"] ?? null), "html", null, true);
        echo "\");
            \$('.itil-right-side').removeClass(\"";
        // line 119
        echo twig_escape_filter($this->env, ($context["right_regular_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["right_expanded_cls"] ?? null), "html", null, true);
        echo "\");
            // Switcher buttons
            \$('.switch-panel-width i.fas').removeClass('fa-caret-left').addClass('fa-caret-right');
            \$('.itil-right-side .accordion-body:not(.accordion-actors).row .col-12').removeClass('col-12').addClass('col-sm-6');
            \$('#actors .col-12').removeClass('col-12').addClass('col-sm-4');
         } else {
            // Decrease right-side panel
            \$('#itil-object-container').removeClass('right-expanded');
            // Left side
            \$('.itil-left-side').removeClass(\"";
        // line 128
        echo twig_escape_filter($this->env, ($context["left_expanded_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\");
            \$('.itil-footer .timeline-buttons').removeClass(\"";
        // line 129
        echo twig_escape_filter($this->env, ($context["left_expanded_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\");
            // Right side
            \$('.itil-footer .form-buttons').removeClass(\"";
        // line 131
        echo twig_escape_filter($this->env, ($context["right_expanded_cls"] ?? null), "html", null, true);
        echo "\").addClass('col-md');
            \$('.itil-right-side').removeClass(\"";
        // line 132
        echo twig_escape_filter($this->env, ($context["right_expanded_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["right_regular_cls"] ?? null), "html", null, true);
        echo "\");
            // Switcher buttons
            \$('.switch-panel-width i.fas').removeClass('fa-caret-right').addClass('fa-caret-left');
            \$('.itil-right-side .accordion-body:not(.accordion-actors).row .col-sm-6').removeClass('col-sm-6').addClass('col-12');
            \$('#actors .col-sm-4').removeClass('col-sm-4').addClass('col-12');
         }

         saveFieldPanelState();
      });

      \$(document).on(\"click\", \".collapse-panel\", function() {
         \$('#itil-object-container').addClass('right-collapsed');

         // Hide all accordion item
         \$('#itil-data .accordion-collapse').removeClass('show');
         \$('#itil-data .accordion-button').addClass('collapsed');

         saveFieldPanelState();
      });

      \$(document).on(\"click\", \".right-collapsed .itil-right-side\", function(event) {
         \$('#itil-object-container').removeClass('right-collapsed');
         saveFieldPanelState();
      });

      var myCollapsible = document.getElementById('itil-data')
      myCollapsible.addEventListener('shown.bs.collapse', function () {
         saveFieldPanelState();
      });
      myCollapsible.addEventListener('hidden.bs.collapse', function () {
         saveFieldPanelState();
      });

      var itil_layout = {
         collapsed: false,
         expanded: false,
         items: {}
      };

      var saveFieldPanelState = function() {
         itil_layout.collapsed = \$('#itil-object-container').hasClass('right-collapsed');
         itil_layout.expanded  = \$('#itil-object-container').hasClass('right-expanded');

         \$('#itil-data .accordion-collapse').each(function() {
            var item_shown = \$(this).hasClass('show');
            var item_id    = \$(this).attr('id');

            itil_layout.items[item_id] = item_shown;
         });

         \$.ajax({
            url: CFG_GLPI.root_doc + '/ajax/itillayout.php',
            type: 'POST',
            datatype: \"json\",
            data: {
               'itil_layout': itil_layout
            }
         });
      }

      var restoreFieldPanelState = function() {
         \$.each(field_panel_state.items, function(item_id, item_shown) {
            if (item_shown) {
               \$('#' + item_id).addClass('show');
            } else {
               \$('#' + item_id).removeClass('show');
            }
         });
      }
   });
</script>
";
    }

    public function getTemplateName()
    {
        return "@releases/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 132,  297 => 131,  290 => 129,  284 => 128,  270 => 119,  266 => 118,  259 => 116,  253 => 115,  246 => 111,  235 => 103,  231 => 102,  227 => 101,  221 => 100,  218 => 99,  209 => 96,  204 => 94,  195 => 93,  191 => 92,  186 => 88,  180 => 86,  178 => 85,  175 => 84,  169 => 82,  167 => 81,  162 => 78,  156 => 76,  154 => 75,  149 => 74,  143 => 72,  141 => 71,  137 => 70,  133 => 69,  130 => 68,  124 => 66,  118 => 64,  116 => 63,  111 => 62,  109 => 61,  105 => 59,  99 => 57,  97 => 56,  90 => 54,  87 => 53,  83 => 51,  80 => 50,  78 => 49,  76 => 48,  74 => 47,  71 => 46,  69 => 45,  67 => 44,  64 => 43,  62 => 42,  60 => 41,  57 => 40,  55 => 39,  53 => 38,  51 => 37,  49 => 36,  47 => 35,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "@releases/layout.html.twig", "C:\\xampp\\htdocs\\glpi\\marketplace\\releases\\templates\\layout.html.twig");
    }
}
