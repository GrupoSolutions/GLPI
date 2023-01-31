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

/* layout/parts/saved_searches_list.html.twig */
class __TwigTemplate_88e714ee79dbcfcead712bbca27e985970c7493594ddc334d2c79f9021abde49 extends Template
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
        if ((0 === twig_compare(twig_length_filter($this->env, ($context["saved_searches"] ?? null)), 0))) {
            // line 35
            echo "   <div class=\"alert alert-info\" role=\"alert\">
      ";
            // line 36
            echo twig_escape_filter($this->env, __("You have not recorded any saved searches yet"), "html", null, true);
            echo "
   </div>
";
        }
        // line 39
        echo "
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["saved_searches"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["search"]) {
            // line 41
            echo "   <div class=\"savedsearches-item list-group-item search-line d-flex align-items-center pe-1 ";
            echo (((0 === twig_compare(($context["active"] ?? null), (($__internal_compile_0 = $context["search"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null)))) ? ("active") : (""));
            echo "\"
         data-id=\"";
            // line 42
            echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["search"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "html", null, true);
            echo "\">
      <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeSearchPath("SavedSearch"), "html", null, true);
            echo "?action=load&amp;id=";
            echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["search"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "html", null, true);
            echo "\"
         class=\"d-block saved-searches-link text-truncate\">
         ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_3 = $context["search"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["name"] ?? null) : null)), "html", null, true);
            echo "
      </a>
      <div class=\"";
            // line 47
            echo (((1 === twig_compare((($__internal_compile_4 = $context["search"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["is_default"] ?? null) : null), 0))) ? ("") : ("list-group-item-actions"));
            echo " ms-auto default-ctrl\">
         <i class=\"";
            // line 48
            echo (((1 === twig_compare((($__internal_compile_5 = $context["search"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["is_default"] ?? null) : null), 0))) ? ("fas") : ("far"));
            echo " fa-star fa-xs mark-default me-1\"
            title=\"";
            // line 49
            echo twig_escape_filter($this->env, (((1 === twig_compare((($__internal_compile_6 = $context["search"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_default"] ?? null) : null), 0))) ? (__("Default search")) : (__("mark as default"))), "html", null, true);
            echo "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"
            role=\"button\"></i>
      </div>
      <div class=\"d-flex flex-nowrap align-items-center\">
         ";
            // line 54
            if ((0 === twig_compare((($__internal_compile_7 = $context["search"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["is_private"] ?? null) : null), 1))) {
                // line 55
                echo "         <i class=\"ti ti-lock fa-xs text-muted me-1\" title=\"";
                echo twig_escape_filter($this->env, __("private"), "html", null, true);
                echo "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"></i>
         ";
            }
            // line 58
            echo "         <span class=\"badge\">
            ";
            // line 59
            echo (($__internal_compile_8 = $context["search"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["count"] ?? null) : null);
            echo "
         </span>
      </div>
   </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "layout/parts/saved_searches_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 59,  104 => 58,  97 => 55,  95 => 54,  87 => 49,  83 => 48,  79 => 47,  74 => 45,  67 => 43,  63 => 42,  58 => 41,  54 => 40,  51 => 39,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/saved_searches_list.html.twig", "/var/www/html/glpi/templates/layout/parts/saved_searches_list.html.twig");
    }
}
