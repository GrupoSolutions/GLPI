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

/* maintenance.html.twig */
class __TwigTemplate_d01c4528b5107e7088ddc1d2c7a0a5e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "layout/page_card_notlogged.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/page_card_notlogged.html.twig", "maintenance.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "<div class=\"flex-fill d-flex align-items-center justify-content-center\">
   <div class=\"container-tight py-6\">
      <div class=\"empty\">
         <i class=\"fas fa-tools fa-3x mb-3\"></i>

         <p class=\"empty-title\">";
        // line 42
        echo twig_escape_filter($this->env, __("Temporarily down for maintenance"), "html", null, true);
        echo "</p>

         <p class=\"empty-subtitle text-muted\">
            ";
        // line 45
        echo twig_escape_filter($this->env, __("Sorry for the inconvenience but we’re performing some maintenance at the moment. We’ll be back online shortly!"), "html", null, true);
        echo "
         </p>

         ";
        // line 48
        if (twig_length_filter($this->env, ($context["maintenance_text"] ?? null))) {
            // line 49
            echo "            <div class=\"alert alert-warning mt-4\">
               ";
            // line 50
            echo twig_escape_filter($this->env, ($context["maintenance_text"] ?? null), "html", null, true);
            echo "
            </div>
         ";
        }
        // line 53
        echo "         <div class=\"empty-action\">
            <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
        echo "\" class=\"btn btn-primary\">
               <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentcolor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                  <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                  <line x1=\"5\" y1=\"12\" x2=\"11\" y2=\"18\"></line>
                  <line x1=\"5\" y1=\"12\" x2=\"11\" y2=\"6\"></line>
               </svg>
               ";
        // line 61
        echo twig_escape_filter($this->env, __("Take me home"), "html", null, true);
        echo "
            </a>
         </div>
      </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "maintenance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 61,  83 => 54,  80 => 53,  74 => 50,  71 => 49,  69 => 48,  63 => 45,  57 => 42,  50 => 37,  46 => 36,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "maintenance.html.twig", "/var/www/html/glpi/templates/maintenance.html.twig");
    }
}
