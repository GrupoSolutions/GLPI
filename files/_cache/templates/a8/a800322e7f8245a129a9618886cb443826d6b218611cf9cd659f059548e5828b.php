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

/* central/widget_tab.html.twig */
class __TwigTemplate_06ee8a567204bf321a99e76ea1fe3c862d1cc327db8ea64550bbb1653b9555ab extends Template
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
        $context["rand"] = twig_random($this->env);
        // line 35
        echo "<table class=\"tab_cadre_central\">
   ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::DISPLAY_CENTRAL")), "html", null, true);
        echo "
</table>

";
        // line 39
        echo twig_include($this->env, $context, "central/messages.html.twig", ["messages" => ($context["messages"] ?? null)]);
        echo "
<div id=\"home-dashboard";
        // line 40
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" class=\"container-fluid\">
   ";
        // line 41
        $context["grid_items"] = [];
        // line 42
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cards"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 43
            echo "      ";
            ob_start(function () { return ''; });
            // line 44
            echo "         <div class=\"card\">
            <div class=\"card-body p-0\">
              <div class=\"lazy-widget\" data-itemtype=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "itemtype", [], "any", false, false, false, 46), "html", null, true);
            echo "\" data-widget=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "widget", [], "any", false, false, false, 46), "html", null, true);
            echo "\"
                 data-params=\"";
            // line 47
            echo twig_escape_filter($this->env, json_encode(((twig_get_attribute($this->env, $this->source, $context["card"], "params", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["card"], "params", [], "any", false, false, false, 47), [])) : ([]))), "html", null, true);
            echo "\">
              </div>
            </div>
         </div>
      ";
            $context["card_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 52
            echo "
      ";
            // line 53
            $context["grid_items"] = twig_array_merge(($context["grid_items"] ?? null), [0 =>             // line 54
($context["card_html"] ?? null)]);
            // line 56
            echo "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
   ";
        // line 58
        echo twig_include($this->env, $context, "components/masonry_grid.html.twig", ["grid_items" =>         // line 59
($context["grid_items"] ?? null)], false);
        // line 60
        echo "

   <script>
   \$(function () {
      \$('#home-dashboard";
        // line 64
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo " .lazy-widget').each(function() {
         const this_obj = \$(this);
         const params = {
            'itemtype': this_obj.data('itemtype'),
            'widget': this_obj.data('widget'),
            'params': this_obj.data('params')
         };
         this_obj.html('<i class=\"fas fa-3x fa-spinner fa-spin ms-auto\"></i>')
            .load('";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/central.php"), "html", null, true);
        echo "', params, function(response, status, xhr) {
               if (status === 'error' || !response) {
                   window.msnry.remove(this_obj.closest('.grid-item'));
               }

               window.msnry.layout();
            });
      });
   });
   </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "central/widget_tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 72,  111 => 64,  105 => 60,  103 => 59,  102 => 58,  99 => 57,  93 => 56,  91 => 54,  90 => 53,  87 => 52,  79 => 47,  73 => 46,  69 => 44,  66 => 43,  61 => 42,  59 => 41,  55 => 40,  51 => 39,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "central/widget_tab.html.twig", "/var/www/html/glpi/templates/central/widget_tab.html.twig");
    }
}
