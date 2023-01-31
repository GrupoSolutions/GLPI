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

/* components/itilobject/timeline/timeline_item_header_badges.html.twig */
class __TwigTemplate_50668561a867f70f81aa814fac7c4a6b2d2932bed12bdf5e5ff1299f5c94417e extends Template
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
<span class=\"badge text-wrap d-none d-md-block\">
   ";
        // line 35
        ob_start(function () { return ''; });
        // line 36
        echo "      <span title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_creation"] ?? null)), "html", null, true);
        echo "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
         <i class=\"far fa-clock me-1\"></i>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_creation"] ?? null)), "html", null, true);
        echo "
      </span>
   ";
        $context["date_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
   ";
        // line 42
        if ((1 === twig_compare(($context["users_id"] ?? null), 0))) {
            // line 43
            echo "      ";
            ob_start(function () { return ''; });
            // line 44
            echo "         ";
            echo twig_include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>             // line 45
($context["users_id"] ?? null), "enable_anonymization" =>             // line 46
($context["anonym_user"] ?? null)], false);
            // line 47
            echo "
      ";
            $context["creator_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 49
            echo "
      ";
            // line 50
            echo twig_sprintf(__("Created: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["creator_span"] ?? null));
            echo "
   ";
        } else {
            // line 52
            echo "      ";
            echo twig_sprintf(__("Created: %1\$s"), ($context["date_span"] ?? null));
            echo "
   ";
        }
        // line 54
        echo "</span>

";
        // line 56
        if (((1 === twig_compare(($context["users_id_editor"] ?? null), 0)) && (0 !== twig_compare(($context["date_creation"] ?? null), ($context["date_mod"] ?? null))))) {
            // line 57
            echo "   <span class=\"badge text-wrap ms-1 d-none d-md-block\">
      ";
            // line 58
            ob_start(function () { return ''; });
            // line 59
            echo "         <span title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_mod"] ?? null)), "html", null, true);
            echo "\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
            <i class=\"far fa-clock me-1\"></i>";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_mod"] ?? null)), "html", null, true);
            echo "
         </span>
      ";
            $context["date_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 64
            echo "
      ";
            // line 65
            $context["is_current_editor"] = (0 === twig_compare(($context["users_id_editor"] ?? null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID")));
            // line 66
            echo "      ";
            $context["anonym_editor"] = (((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface(), "helpdesk")) &&  !($context["is_current_editor"] ?? null)) && (0 !== twig_compare($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")), twig_constant("Entity::ANONYMIZE_DISABLED"))));
            // line 67
            echo "      ";
            ob_start(function () { return ''; });
            // line 68
            echo "         ";
            echo twig_include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>             // line 69
($context["users_id_editor"] ?? null), "enable_anonymization" =>             // line 70
($context["anonym_editor"] ?? null)], false);
            // line 71
            echo "
      ";
            $context["editor_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 73
            echo "
      ";
            // line 74
            echo twig_sprintf(__("Last update: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["editor_span"] ?? null));
            echo "
   </span>
";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline_item_header_badges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 74,  129 => 73,  125 => 71,  123 => 70,  122 => 69,  120 => 68,  117 => 67,  114 => 66,  112 => 65,  109 => 64,  103 => 61,  97 => 59,  95 => 58,  92 => 57,  90 => 56,  86 => 54,  80 => 52,  75 => 50,  72 => 49,  68 => 47,  66 => 46,  65 => 45,  63 => 44,  60 => 43,  58 => 42,  55 => 41,  49 => 38,  43 => 36,  41 => 35,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/timeline_item_header_badges.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\itilobject\\timeline\\timeline_item_header_badges.html.twig");
    }
}
