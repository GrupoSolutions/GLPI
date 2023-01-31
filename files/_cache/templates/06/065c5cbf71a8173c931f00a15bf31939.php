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

/* layout/parts/context_links.html.twig */
class __TwigTemplate_403fc6b4b1785b9e90b7fa10936fb830 extends Template
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
        $context["links"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 34), "content", [], "array", false, true, false, 34), ($context["item"] ?? null), [], "array", false, true, false, 34), "options", [], "array", false, true, false, 34), ($context["option"] ?? null), [], "array", false, true, false, 34), "links", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 34), "content", [], "array", false, true, false, 34), ($context["item"] ?? null), [], "array", false, true, false, 34), "options", [], "array", false, true, false, 34), ($context["option"] ?? null), [], "array", false, true, false, 34)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["links"] ?? null) : null)))) ? ((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 34), "content", [], "array", false, true, false, 34), ($context["item"] ?? null), [], "array", false, true, false, 34), "options", [], "array", false, true, false, 34), ($context["option"] ?? null), [], "array", false, true, false, 34)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["links"] ?? null) : null)) : ((($__internal_compile_2 = (($__internal_compile_3 = (($__internal_compile_4 = (($__internal_compile_5 = ($context["menu"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["sector"] ?? null)] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["content"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["item"] ?? null)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["links"] ?? null) : null)));
        // line 35
        echo "
";
        // line 37
        echo "<ul class=\"nav navbar-nav border-start border-left ps-1 ps-sm-2 flex-row\">

";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "add", [], "array", true, true, false, 39)) {
            // line 40
            echo "<li class=\"nav-item\">
   <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($__internal_compile_6 = ($context["links"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["add"] ?? null) : null)), "html", null, true);
            echo "\" class=\"btn btn-icon btn-sm btn-secondary me-1 pe-2 adicionar\" title=\"";
            echo twig_escape_filter($this->env, __("Add"), "html", null, true);
            echo "\">
      <i class=\"ti ti-plus\"></i>
      <span class=\"d-none d-xxl-block\">";
            // line 43
            echo twig_escape_filter($this->env, __("Add"), "html", null, true);
            echo "</span>
   </a>
</li>
";
        }
        // line 47
        echo "
";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "search", [], "array", true, true, false, 48)) {
            // line 49
            echo "<li class=\"nav-item\">
   <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($__internal_compile_7 = ($context["links"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["search"] ?? null) : null)), "html", null, true);
            echo "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2 pesquisa\" title=\"";
            echo twig_escape_filter($this->env, __("Search"), "html", null, true);
            echo "\">
      <i class=\"ti ti-search\"></i>
      <span class=\"d-none d-xxl-block\">";
            // line 52
            echo twig_escape_filter($this->env, __("Search"), "html", null, true);
            echo "</span>
   </a>
</li>
";
        }
        // line 56
        echo "
";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "lists", [], "array", true, true, false, 57)) {
            // line 58
            echo "<li class=\"nav-item\">
   <a href=\"#\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2 pesquisa show-saved-searches\"
      data-itemtype=\"";
            // line 60
            echo twig_escape_filter($this->env, ($context["item"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, __("Lists"), "html", null, true);
            echo "\">
      <i class=\"ti ti-star\"></i>
      <span class=\"d-none d-xxl-block\">";
            // line 62
            echo twig_escape_filter($this->env, __("Lists"), "html", null, true);
            echo "</span>
   </a>
</li>
";
        }
        // line 66
        echo "
";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["link"]) {
            // line 68
            echo "   ";
            if (((($context["type"] == "add") || ($context["type"] == "search")) || ($context["type"] == "lists"))) {
                // line 69
                echo "   ";
            } elseif (($context["type"] == "template")) {
                // line 70
                echo "      <li class=\"nav-item\">
         <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                echo "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2 pesquisa\" title=\"";
                echo twig_escape_filter($this->env, __("Manage templates..."), "html", null, true);
                echo "\">
            <i class=\"ti ti-template\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 73
                echo twig_escape_filter($this->env, __("Templates"), "html", null, true);
                echo "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 76
$context["type"] == "showall")) {
                // line 77
                echo "      <li class=\"nav-item\">
         <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                echo "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2 pesquisa\" title=\"";
                echo twig_escape_filter($this->env, __("Show all"), "html", null, true);
                echo "\">
            <i class=\"ti ti-eye-check\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 80
                echo twig_escape_filter($this->env, __("Show all"), "html", null, true);
                echo "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 83
$context["type"] == "summary")) {
                // line 84
                echo "      <li class=\"nav-item\">
         <a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                echo "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2 pesquisa\" title=\"";
                echo twig_escape_filter($this->env, __("Summary"), "html", null, true);
                echo "\">
            <i class=\"ti ti-notes\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 87
                echo twig_escape_filter($this->env, __("Summary"), "html", null, true);
                echo "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 90
$context["type"] == "summary_kanban")) {
                // line 91
                echo "      <li class=\"nav-item\">
         <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                echo "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2 pesquisa \" title=\"";
                echo twig_escape_filter($this->env, __("Global Kanban"), "html", null, true);
                echo "\">
            <i class=\"ti ti-layout-columns\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 94
                echo twig_escape_filter($this->env, __("Global Kanban"), "html", null, true);
                echo "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 97
$context["type"] == "transfer_list")) {
                // line 98
                echo "      <li class=\"nav-item\">
         <a href=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                echo "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2 pesquisa\" title=\"";
                echo twig_escape_filter($this->env, __("Transfer list"), "html", null, true);
                echo "\">
            <i class=\"ti ti-list-check\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 101
                echo twig_escape_filter($this->env, __("Transfer list"), "html", null, true);
                echo "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 104
$context["type"] == "config")) {
                // line 105
                echo "      <li class=\"nav-item\">
         <a href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                echo "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2 pesquisa\" title=\"";
                echo twig_escape_filter($this->env, __("Setup"), "html", null, true);
                echo "\">
            <i class=\"ti ti-tool\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 108
                echo twig_escape_filter($this->env, __("Setup"), "html", null, true);
                echo "</span>
         </a>
      </li>
   ";
            } else {
                // line 112
                echo "      <li class=\"nav-item\">
         <a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                echo "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2 pesquisa\">
            ";
                // line 114
                echo $context["type"];
                echo "
         </a>
      </li>
   ";
            }
            // line 118
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "layout/parts/context_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 120,  247 => 118,  240 => 114,  236 => 113,  233 => 112,  226 => 108,  219 => 106,  216 => 105,  214 => 104,  208 => 101,  201 => 99,  198 => 98,  196 => 97,  190 => 94,  183 => 92,  180 => 91,  178 => 90,  172 => 87,  165 => 85,  162 => 84,  160 => 83,  154 => 80,  147 => 78,  144 => 77,  142 => 76,  136 => 73,  129 => 71,  126 => 70,  123 => 69,  120 => 68,  116 => 67,  113 => 66,  106 => 62,  99 => 60,  95 => 58,  93 => 57,  90 => 56,  83 => 52,  76 => 50,  73 => 49,  71 => 48,  68 => 47,  61 => 43,  54 => 41,  51 => 40,  49 => 39,  45 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/context_links.html.twig", "/var/www/html/glpi/templates/layout/parts/context_links.html.twig");
    }
}
