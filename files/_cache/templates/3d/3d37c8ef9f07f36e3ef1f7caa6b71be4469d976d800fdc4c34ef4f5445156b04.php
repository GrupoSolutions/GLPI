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

/* components/itilobject/mainform_close.html.twig */
class __TwigTemplate_5aaf40cd7ce06ad6c90e0dda48265538feacadde7e3f30fcc32f4d25ec1040d7 extends Template
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
</form>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/mainform_close.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/mainform_close.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\itilobject\\mainform_close.html.twig");
    }
}
