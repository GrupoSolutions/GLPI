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

/* components/itilobject/timeline/timeline_item_header.html.twig */
class __TwigTemplate_ee2980ab2ac4bbb96d472205f1bdf7bb extends Template
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
<div class=\"d-flex timeline-header\">
   <div class=\"d-flex creator\">
      ";
        // line 36
        echo twig_include($this->env, $context, "components/itilobject/timeline/timeline_item_header_badges.html.twig", ["users_id" =>         // line 37
($context["users_id"] ?? null), "date_creation" =>         // line 38
($context["date_creation"] ?? null), "date_mod" =>         // line 39
($context["date_mod"] ?? null), "users_id_editor" => (($__internal_compile_0 =         // line 40
($context["entry_i"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["users_id_editor"] ?? null) : null), "anonym_user" =>         // line 41
($context["anonym_user"] ?? null)], false);
        // line 42
        echo "
   </div>

   <div class=\"d-flex ms-auto timeline-item-buttons\">
      ";
        // line 46
        $context["actions"] = [];
        // line 47
        echo "      ";
        if ((((($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["can_edit"] ?? null) : null) &&  !($context["status_closed"] ?? null)) &&  !twig_in_filter((($__internal_compile_2 = ($context["entry"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["type"] ?? null) : null), [0 => "Document_Item", 1 => "Assign"]))) {
            // line 48
            echo "         ";
            ob_start(function () { return ''; });
            // line 49
            echo "            <li>
               <a class=\"dropdown-item edit-timeline-item\" href=\"#\">
                  <i class=\"fa-fw ti ti-edit\"></i>
                  <span>";
            // line 52
            echo twig_escape_filter($this->env, __("Edit"), "html", null, true);
            echo "</span>
               </a>
            </li>
         ";
            $context["edit_btn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 56
            echo "         ";
            $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["edit_btn" => ($context["edit_btn"] ?? null)]);
            // line 57
            echo "      ";
        }
        // line 58
        echo "
      ";
        // line 59
        if (($context["is_private"] ?? null)) {
            // line 60
            echo "         <span class=\"is-private ms-2\" title=\"";
            echo twig_escape_filter($this->env, __("Private"), "html", null, true);
            echo "\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
            <i class=\"ti ti-lock\" aria-label=\"";
            // line 62
            echo twig_escape_filter($this->env, __("Private"), "html", null, true);
            echo "\"></i>
         </span>
      ";
        }
        // line 65
        echo "
      ";
        // line 66
        if (($context["is_promoted"] ?? null)) {
            // line 67
            echo "         ";
            ob_start(function () { return ''; });
            // line 68
            echo "            <li>
               <a class=\"dropdown-item text-warning\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket", (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["sourceof_items_id"] ?? null) : null)), "html", null, true);
            echo "\">
                  <i class=\"fa-fw ti ti-git-branch\"></i>
                  <span>";
            // line 71
            echo twig_escape_filter($this->env, twig_sprintf(__("%s was already promoted"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($__internal_compile_4 = ($context["entry"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["type"] ?? null) : null))), "html", null, true);
            echo "</span>
               </a>
            </li>
         ";
            $context["promoted_btn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 75
            echo "         ";
            $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["promoted_btn" => ($context["promoted_btn"] ?? null)]);
            // line 76
            echo "      ";
        } elseif ((((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central") && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 76) === "Ticket")) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canCreate", [], "method", false, false, false, 76)) && (((($__internal_compile_5 = ($context["entry"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["type"] ?? null) : null) === "ITILFollowup") || ((($__internal_compile_6 = ($context["entry"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["type"] ?? null) : null) === "TicketTask")))) {
            // line 77
            echo "         ";
            $context["promote_url"] = ("?_promoted_fup_id=" . (($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null));
            // line 78
            echo "         ";
            if (((($__internal_compile_8 = ($context["entry"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["type"] ?? null) : null) === "TicketTask")) {
                // line 79
                echo "            ";
                $context["promote_url"] = ("?_promoted_task_id=" . (($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["id"] ?? null) : null));
                // line 80
                echo "         ";
            }
            // line 81
            echo "
         ";
            // line 82
            ob_start(function () { return ''; });
            // line 83
            echo "            <li>
               <a class=\"dropdown-item\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket") . ($context["promote_url"] ?? null)), "html", null, true);
            echo "\">
                  <i class=\"fa-fw ti ti-git-branch\"></i>
                  <span>";
            // line 86
            echo twig_escape_filter($this->env, __("Promote to Ticket"), "html", null, true);
            echo "</span>
               </a>
            </li>
         ";
            $context["promote_btn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 90
            echo "         ";
            $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["promote_btn" => ($context["promote_btn"] ?? null)]);
            // line 91
            echo "      ";
        }
        // line 92
        echo "
      ";
        // line 93
        if (twig_length_filter($this->env, ($context["actions"] ?? null))) {
            // line 94
            echo "         <div class=\"dropdown ms-2\">
            <button class=\"btn btn-sm btn-ghost-secondary timeline-more-actions\" type=\"button\" id=\"more-actions-";
            // line 95
            echo twig_escape_filter($this->env, ($context["entry_rand"] ?? null), "html", null, true);
            echo "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
               <i class=\"ti ti-dots-vertical\"></i>
            </button>
            <ul class=\"dropdown-menu\" aria-labelledby=\"more-actions-";
            // line 98
            echo twig_escape_filter($this->env, ($context["entry_rand"] ?? null), "html", null, true);
            echo "\">
               ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 100
                echo "                  ";
                echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                echo "
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "            </ul>
         </div>
      ";
        }
        // line 105
        echo "   </div>

   <button class=\"btn btn-sm btn-ghost-secondary close-edit-content d-none ms-auto\">
      <i class=\"ti ti-x\"></i>
   </button>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline_item_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 105,  196 => 102,  187 => 100,  183 => 99,  179 => 98,  173 => 95,  170 => 94,  168 => 93,  165 => 92,  162 => 91,  159 => 90,  152 => 86,  147 => 84,  144 => 83,  142 => 82,  139 => 81,  136 => 80,  133 => 79,  130 => 78,  127 => 77,  124 => 76,  121 => 75,  114 => 71,  109 => 69,  106 => 68,  103 => 67,  101 => 66,  98 => 65,  92 => 62,  86 => 60,  84 => 59,  81 => 58,  78 => 57,  75 => 56,  68 => 52,  63 => 49,  60 => 48,  57 => 47,  55 => 46,  49 => 42,  47 => 41,  46 => 40,  45 => 39,  44 => 38,  43 => 37,  42 => 36,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/timeline_item_header.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\itilobject\\timeline\\timeline_item_header.html.twig");
    }
}
