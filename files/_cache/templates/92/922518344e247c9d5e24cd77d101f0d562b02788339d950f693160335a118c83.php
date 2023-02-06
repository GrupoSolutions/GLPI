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

/* pages/login.html.twig */
class __TwigTemplate_5bf97c25b508e186ba17abedfc93ff2f6b818ac93954e5b1600c34a5f733fccf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
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
        $this->parent = $this->loadTemplate("layout/page_card_notlogged.html.twig", "pages/login.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "   <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/login.php"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"off\"  data-submit-once>
      <input type=\"hidden\" name=\"noAUTO\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["noAuto"] ?? null), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"redirect\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["redirect"] ?? null), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />

      <div class=\"row justify-content-center \">
         <div class=\"col-md-5\">

            <h2 class=\"card-header text-center mb-4 ml-3\">";
        // line 45
        echo twig_escape_filter($this->env, __("Login to your account"), "html", null, true);
        echo "</h2>
            <div class=\"mb-3\">
               <label class=\"form-label\">";
        // line 47
        echo twig_escape_filter($this->env, __("Login"), "html", null, true);
        echo "</label>
               <input type=\"text\" class=\"form-control\" id=\"login_name\" name=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["namfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"\" tabindex=\"1\" />
            </div>
            <div class=\"mb-4\">
               <label class=\"form-label\">
                  ";
        // line 52
        echo twig_escape_filter($this->env, __("Password"), "html", null, true);
        echo "

                  ";
        // line 54
        if (($context["show_lost_password"] ?? null)) {
            // line 55
            echo "                     <span class=\"form-label-description\">
                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/lostpassword.php?lostpassword=1"), "html", null, true);
            echo "\">
                           ";
            // line 57
            echo twig_escape_filter($this->env, __("Forgotten password?"), "html", null, true);
            echo "
                        </a>
                     </span>
                  ";
        }
        // line 61
        echo "               </label>
               <input type=\"password\" class=\"form-control\" name=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["pwdfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"\" autocomplete=\"off\" tabindex=\"2\" />
            </div>

            ";
        // line 65
        if (twig_constant("GLPI_DEMO_MODE")) {
            // line 66
            echo "               <div class=\"mb-3\">
                  <label class=\"form-label\">";
            // line 67
            echo twig_escape_filter($this->env, __("Language"), "html", null, true);
            echo "</label>
                  ";
            // line 68
            echo ($context["languages_dropdown"] ?? null);
            echo "
               </div>
            ";
        }
        // line 71
        echo "
            ";
        // line 78
        echo "            ";
        if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_time")) {
            // line 79
            echo "               <div class=\"mb-2\">
                  <label class=\"form-check\">
                     <input type=\"checkbox\" class=\"form-check-input\" name=\"";
            // line 81
            echo twig_escape_filter($this->env, ($context["rmbfield"] ?? null), "html", null, true);
            echo "\" ";
            echo (($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_default")) ? ("checked") : (""));
            echo " />
                     <span class=\"form-check-label\">";
            // line 82
            echo twig_escape_filter($this->env, __("Remember me"), "html", null, true);
            echo "</span>
                  </label>
               </div>
            ";
        }
        // line 86
        echo "
            <div class=\"form-footer\">
               <button type=\"submit\" name=\"submit\" class=\"btn btn-primary w-100\" tabindex=\"3\">
                  ";
        // line 89
        echo twig_escape_filter($this->env, __("Sign in"), "html", null, true);
        echo "
               </button>
            </div>

            ";
        // line 93
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 94
            echo "               <hr />
               <div class=\"alert alert-danger\" role=\"alert\">
                  ";
            // line 96
            echo twig_escape_filter($this->env, ($context["errors"] ?? null), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 99
        echo "         </div>

         ";
        // line 101
        if (($context["right_panel"] ?? null)) {
            // line 102
            echo "            <div class=\"col-auto offset-md-1 p-2 text-center\">
               ";
            // line 103
            if ((twig_length_filter($this->env, ($context["text_login"] ?? null)) > 0)) {
                // line 104
                echo "                  <div class=\"rich_text_container\">
                     ";
                // line 105
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["text_login"] ?? null));
                echo "
                  </div>
               ";
            }
            // line 108
            echo "
               ";
            // line 109
            if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_public_faq")) {
                // line 110
                echo "                  <hr />

               ";
            }
            // line 113
            echo "
               <hr />

            </div>
         ";
        }
        // line 118
        echo "      </div>
   </form>
";
    }

    // line 122
    public function block_footer_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "<a href=\"https://gruposolutions.com.br\"> © Grupo Solutions 2005 - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " </a>
";
    }

    // line 126
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "<script type=\"text/javascript\">
   \$(function () {
\$('#login_name').focus();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "pages/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 127,  235 => 126,  228 => 123,  224 => 122,  218 => 118,  211 => 113,  206 => 110,  204 => 109,  201 => 108,  195 => 105,  192 => 104,  190 => 103,  187 => 102,  185 => 101,  181 => 99,  175 => 96,  171 => 94,  169 => 93,  162 => 89,  157 => 86,  150 => 82,  144 => 81,  140 => 79,  137 => 78,  134 => 71,  128 => 68,  124 => 67,  121 => 66,  119 => 65,  113 => 62,  110 => 61,  103 => 57,  99 => 56,  96 => 55,  94 => 54,  89 => 52,  82 => 48,  78 => 47,  73 => 45,  65 => 40,  61 => 39,  57 => 38,  52 => 37,  48 => 36,  37 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/login.html.twig", "C:\\wamp64\\www\\glpi106\\templates\\pages\\login.html.twig");
    }
}
