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

/* password_form.html.twig */
class __TwigTemplate_b632f7e5a4d6e3b1612673d50d4b5474d33fa1ce8dae0b3efa6cb051daa1eb7a extends Template
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
        $this->parent = $this->loadTemplate("layout/page_card_notlogged.html.twig", "password_form.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "   ";
        if ((array_key_exists("token_ok", $context) && (0 === twig_compare(($context["token_ok"] ?? null), false)))) {
            // line 38
            echo "      ";
            echo twig_escape_filter($this->env, __("Your password reset request has expired or is invalid. Please renew it."), "html", null, true);
            echo "
   ";
        } elseif (        // line 39
array_key_exists("messages_only", $context)) {
            // line 40
            echo "      ";
            echo twig_include($this->env, $context, "components/messages_after_redirect_alerts.html.twig");
            echo "
   ";
        } else {
            // line 42
            echo "      <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/lostpassword.php"), "html", null, true);
            echo "\" method=\"post\" autocomplete=\"off\" data-submit-once>
         <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
         <h2 class=\"card-title text-center mb-4\">";
            // line 44
            echo twig_escape_filter($this->env, __("Forgotten password?"), "html", null, true);
            echo "</h2>

         ";
            // line 46
            if (array_key_exists("token", $context)) {
                // line 47
                echo "            <input type=\"hidden\" name=\"password_forget_token\" value=\"";
                echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
                echo "\" />
            <p class=\"text-muted mb-4\">
               ";
                // line 49
                echo twig_escape_filter($this->env, __("Please enter your new password."), "html", null, true);
                echo "
            </p>
            <div class=\"mb-3\">
               <label class=\"form-label\">";
                // line 52
                echo twig_escape_filter($this->env, __("Password"), "html", null, true);
                echo "</label>
               <input type=\"password\" name=\"password\" autocomplete=\"new-password\"
                      class=\"form-control\" placeholder=\"";
                // line 54
                echo twig_escape_filter($this->env, __("Password"), "html", null, true);
                echo "\"
                      id=\"password\" onkeyup=\"return passwordCheck();\" />
            </div>
            <div class=\"mb-3\">
               <label class=\"form-label\">";
                // line 58
                echo twig_escape_filter($this->env, __("Password confirmation"), "html", null, true);
                echo "</label>
               <input type=\"password\" name=\"password2\" autocomplete=\"new-password2\"
                        class=\"form-control\" placeholder=\"";
                // line 60
                echo twig_escape_filter($this->env, __("Password"), "html", null, true);
                echo "\" />
            </div>

            ";
                // line 63
                if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_password_security")) {
                    // line 64
                    echo "               <div class=\"alert alert-warning\">
                  <h3>";
                    // line 65
                    echo twig_escape_filter($this->env, __("Password security policy"), "html", null, true);
                    echo "</h3>
                  ";
                    // line 66
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Config::displayPasswordSecurityChecks");
                    // line 67
                    echo "               </div>
            ";
                }
                // line 69
                echo "
            ";
                // line 70
                $context["save_button"] = (("<i class=\"far fa-save\"></i><span>" . __("Save new password")) . "<span>");
                // line 71
                echo "
         ";
            } else {
                // line 73
                echo "            <p class=\"text-muted mb-4\">
               ";
                // line 74
                echo twig_escape_filter($this->env, __("Please enter your email address. An email will be sent to you and you will be able to choose a new password."), "html", null, true);
                echo "
            </p>
            <div class=\"mb-3\">
               <label class=\"form-label\">";
                // line 77
                echo twig_escape_filter($this->env, _n("Email", "Emails", 1), "html", null, true);
                echo "</label>
               <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"";
                // line 78
                echo twig_escape_filter($this->env, _n("Email", "Emails", 1), "html", null, true);
                echo "\" />
            </div>
            ";
                // line 80
                $context["save_button"] = (("<i class=\"fas fa-envelope\"></i><span>" . __("Send")) . "<span>");
                // line 81
                echo "         ";
            }
            // line 82
            echo "
         <div class=\"form-footer\">
            <button class=\"btn btn-icon btn-primary w-100\" name=\"update\">
               ";
            // line 85
            echo ($context["save_button"] ?? null);
            echo "
            </button>
         </div>
      </form>
   ";
        }
    }

    // line 92
    public function block_footer_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "   ";
        echo twig_escape_filter($this->env, __("Forget it,"), "html", null, true);
        echo "
   <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, __("send me back"), "html", null, true);
        echo "</a>
   ";
        // line 95
        echo twig_escape_filter($this->env, __("to the login screen."), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "password_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 95,  189 => 94,  184 => 93,  180 => 92,  170 => 85,  165 => 82,  162 => 81,  160 => 80,  155 => 78,  151 => 77,  145 => 74,  142 => 73,  138 => 71,  136 => 70,  133 => 69,  129 => 67,  127 => 66,  123 => 65,  120 => 64,  118 => 63,  112 => 60,  107 => 58,  100 => 54,  95 => 52,  89 => 49,  83 => 47,  81 => 46,  76 => 44,  72 => 43,  67 => 42,  61 => 40,  59 => 39,  54 => 38,  51 => 37,  47 => 36,  36 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "password_form.html.twig", "/var/www/html/glpi/templates/password_form.html.twig");
    }
}
