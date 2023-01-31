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

/* components/messages_after_redirect_alerts.html.twig */
class __TwigTemplate_66a9c2c6648476bf85d78bf02360bf91 extends Template
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
        $context["messages"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->pullMessages();
        // line 35
        if (twig_length_filter($this->env, ($context["messages"] ?? null))) {
            // line 36
            echo "
   ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
            foreach ($context['_seq'] as $context["type"] => $context["message"]) {
                // line 38
                echo "      ";
                $context["message"] = twig_join_filter($context["message"], "<br />");
                // line 39
                echo "      ";
                $context["class"] = "";
                // line 40
                echo "      ";
                $context["title"] = "";
                // line 41
                echo "      ";
                if (($context["type"] == twig_constant("ERROR"))) {
                    // line 42
                    echo "         ";
                    $context["class"] = "alert-danger";
                    // line 43
                    echo "         ";
                    $context["title"] = __("Error");
                    // line 44
                    echo "      ";
                } elseif (($context["type"] == twig_constant("WARNING"))) {
                    // line 45
                    echo "         ";
                    $context["class"] = "alert-warning";
                    // line 46
                    echo "         ";
                    $context["title"] = __("Warning");
                    // line 47
                    echo "      ";
                } else {
                    // line 48
                    echo "         ";
                    $context["class"] = "alert-info";
                    // line 49
                    echo "         ";
                    $context["title"] = _n("Information", "Informations", 1);
                    // line 50
                    echo "      ";
                }
                // line 51
                echo "
      <div class=\"alert alert-important ";
                // line 52
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" role=\"alert\">
         <h3>";
                // line 53
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</h3>
         <p>
            ";
                // line 55
                echo $context["message"];
                echo "
         </p>
      </div>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "components/messages_after_redirect_alerts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 55,  97 => 53,  93 => 52,  90 => 51,  87 => 50,  84 => 49,  81 => 48,  78 => 47,  75 => 46,  72 => 45,  69 => 44,  66 => 43,  63 => 42,  60 => 41,  57 => 40,  54 => 39,  51 => 38,  47 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/messages_after_redirect_alerts.html.twig", "/var/www/html/glpi/templates/components/messages_after_redirect_alerts.html.twig");
    }
}
