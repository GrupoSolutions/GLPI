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

/* components/user/info_card.html.twig */
class __TwigTemplate_3f635eba741468e69c9829647a0e8adb extends Template
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
        $context["enable_anonymization"] = (($context["enable_anonymization"]) ?? (false));
        // line 35
        echo "
<div class=\"p-0 user-info-card\">
   <div class=\"row\">
      <div class=\"col pt-1\">
         ";
        // line 39
        if ((($__internal_compile_0 = ($context["user"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null)) {
            // line 40
            echo "            ";
            echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" => (($__internal_compile_1 =             // line 41
($context["user"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "enable_anonymization" =>             // line 42
($context["enable_anonymization"] ?? null)]);
            // line 43
            echo "
         ";
        }
        // line 45
        echo "      </div>
      <div class=\"col-auto ms-2\">
         <h4 class=\"card-title mb-1\">
            ";
        // line 48
        if ((($__internal_compile_2 = ($context["user"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null)) {
            // line 49
            echo "               <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("User", (($__internal_compile_3 = ($context["user"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["user"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["user_name"] ?? null) : null), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 51
            echo "               ";
            echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["user"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["user_name"] ?? null) : null), "html", null, true);
            echo "
            ";
        }
        // line 53
        echo "         </h4>

         <div class=\"text-muted\">
            ";
        // line 56
        if ((twig_length_filter($this->env, (($__internal_compile_6 = ($context["user"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["email"] ?? null) : null)) > 0)) {
            // line 57
            echo "               <div>
                  <i class=\"fas fa-fw fa-envelope\"></i>
                  <a href=\"mailto:";
            // line 59
            echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["user"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["email"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_compile_8 = ($context["user"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["email"] ?? null) : null), "html", null, true);
            echo "</a>
               </div>
            ";
        }
        // line 62
        echo "            ";
        if ((twig_length_filter($this->env, (($__internal_compile_9 = ($context["user"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["phone"] ?? null) : null)) > 0)) {
            // line 63
            echo "               <div>
                  <i class=\"fas fa-fw fa-phone\"></i>
                  <a href=\"tel:";
            // line 65
            echo twig_escape_filter($this->env, (($__internal_compile_10 = ($context["user"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["phone"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_compile_11 = ($context["user"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["phone"] ?? null) : null), "html", null, true);
            echo "</a>
               </div>
            ";
        }
        // line 68
        echo "            ";
        if ((twig_length_filter($this->env, (($__internal_compile_12 = ($context["user"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["mobile"] ?? null) : null)) > 0)) {
            // line 69
            echo "               <div>
                  <i class=\"fas fa-fw fa-mobile\"></i>
                  <a href=\"tel:";
            // line 71
            echo twig_escape_filter($this->env, (($__internal_compile_13 = ($context["user"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["mobile"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_compile_14 = ($context["user"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["mobile"] ?? null) : null), "html", null, true);
            echo "</a>
               </div>
            ";
        }
        // line 74
        echo "            ";
        if (((($__internal_compile_15 = ($context["user"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["locations_id"] ?? null) : null) > 0)) {
            // line 75
            echo "               <div title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-map-marker-alt\"></i>
                  ";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Location", (($__internal_compile_16 = ($context["user"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["locations_id"] ?? null) : null)), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 80
        echo "            ";
        if (((($__internal_compile_17 = ($context["user"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["usertitles_id"] ?? null) : null) > 0)) {
            // line 81
            echo "               <div title=\"";
            echo twig_escape_filter($this->env, _x("person", "Title"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-user-tie\"></i>
                  ";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("UserTitle", (($__internal_compile_18 = ($context["user"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["usertitles_id"] ?? null) : null)), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 86
        echo "            ";
        if (((($__internal_compile_19 = ($context["user"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["usercategories_id"] ?? null) : null) > 0)) {
            // line 87
            echo "               <div title=\"";
            echo twig_escape_filter($this->env, _n("Category", "Categories", 1), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-user-tag\"></i>
                  ";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("UserCategory", (($__internal_compile_20 = ($context["user"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["usercategories_id"] ?? null) : null)), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 92
        echo "            ";
        if (((($__internal_compile_21 = ($context["user"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["groups_id"] ?? null) : null) > 0)) {
            // line 93
            echo "               <div title=\"";
            echo twig_escape_filter($this->env, __("Default group"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-users\"></i>
                  ";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Group", (($__internal_compile_22 = ($context["user"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["groups_id"] ?? null) : null)), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 98
        echo "         </div>
      </div>

      ";
        // line 101
        if (($context["can_edit"] ?? null)) {
            // line 102
            echo "         <div class=\"col\">
            <a class=\"btn btn-icon btn-sm btn-outline-secondary\" href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/preference.php"), "html", null, true);
            echo "\"
               title=\"";
            // line 104
            echo twig_escape_filter($this->env, __("Edit"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\">
               <i class=\"fas fa-user-edit\"></i>
            </a>
         </div>
      ";
        }
        // line 109
        echo "   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/user/info_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 109,  203 => 104,  199 => 103,  196 => 102,  194 => 101,  189 => 98,  183 => 95,  177 => 93,  174 => 92,  168 => 89,  162 => 87,  159 => 86,  153 => 83,  147 => 81,  144 => 80,  138 => 77,  132 => 75,  129 => 74,  121 => 71,  117 => 69,  114 => 68,  106 => 65,  102 => 63,  99 => 62,  91 => 59,  87 => 57,  85 => 56,  80 => 53,  74 => 51,  66 => 49,  64 => 48,  59 => 45,  55 => 43,  53 => 42,  52 => 41,  50 => 40,  48 => 39,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/user/info_card.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\user\\info_card.html.twig");
    }
}
