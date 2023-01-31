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

/* impact/ongoing_modal.html.twig */
class __TwigTemplate_9860a961ba6e9173b8292700453eb1926b0d4029b5bbe2aec71fe25155924f88 extends Template
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
<div id=\"ongoing_dialog\"  class=\"modal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">

            ";
        // line 39
        echo "            <div class=\"modal-header\">
                <h5 class=\"modal-title\"> ";
        // line 40
        echo twig_escape_filter($this->env, __("Ongoing tickets"), "html", null, true);
        echo " </h5>
                <button type=\"button\" class=\"btn btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>

            ";
        // line 45
        echo "            <div class=\"modal-body\"></div>

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "impact/ongoing_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 45,  47 => 40,  44 => 39,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "impact/ongoing_modal.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\impact\\ongoing_modal.html.twig");
    }
}
