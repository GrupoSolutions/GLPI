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

/* install/update.invalid_database.html.twig */
class __TwigTemplate_55b0cd0320272046964149175665537e5d7225719a09ba431cd9a4df2a2a8a08 extends Template
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
<div class=\"alert alert-warning\"><strong>";
        // line 34
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</strong></div>

<form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
    <button type=\"submit\" name=\"submit\" class=\"btn btn-warning\">
        <i class=\"fas fa-chevron-left me-1 fa-2x alert-icon\"></i>
        ";
        // line 39
        echo twig_escape_filter($this->env, __("Back"), "html", null, true);
        echo "
    </button>

    <input type=\"hidden\" name=\"update\" value=\"yes\" />
    <input type=\"hidden\" name=\"install\" value=\"Etape_2\" />
    <input type=\"hidden\" name=\"db_host\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["db_host"] ?? null), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"db_user\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["db_user"] ?? null), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"db_pass\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["db_pass"] ?? null), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "install/update.invalid_database.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 47,  64 => 46,  60 => 45,  56 => 44,  48 => 39,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 #
 # GLPI - Gestionnaire Libre de Parc Informatique
 #
 # http://glpi-project.org
 #
 # @copyright 2015-2022 Teclib' and contributors.
 # @copyright 2003-2014 by the INDEPNET Development Team.
 # @licence   https://www.gnu.org/licenses/gpl-3.0.html
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI.
 #
 # This program is free software: you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation, either version 3 of the License, or
 # (at your option) any later version.
 #
 # This program is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with this program.  If not, see <https://www.gnu.org/licenses/>.
 #
 # ---------------------------------------------------------------------
 #}

<div class=\"alert alert-warning\"><strong>{{ message }}</strong></div>

<form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
    <button type=\"submit\" name=\"submit\" class=\"btn btn-warning\">
        <i class=\"fas fa-chevron-left me-1 fa-2x alert-icon\"></i>
        {{ __(\"Back\") }}
    </button>

    <input type=\"hidden\" name=\"update\" value=\"yes\" />
    <input type=\"hidden\" name=\"install\" value=\"Etape_2\" />
    <input type=\"hidden\" name=\"db_host\" value=\"{{ db_host }}\" />
    <input type=\"hidden\" name=\"db_user\" value=\"{{ db_user }}\" />
    <input type=\"hidden\" name=\"db_pass\" value=\"{{ db_pass }}\" />
    <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\" />
</form>
", "install/update.invalid_database.html.twig", "C:\\wamp64\\www\\glpi\\templates\\install\\update.invalid_database.html.twig");
    }
}
