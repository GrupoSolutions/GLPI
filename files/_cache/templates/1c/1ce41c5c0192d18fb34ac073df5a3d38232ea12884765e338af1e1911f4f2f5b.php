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

/* layout/parts/global_search_form.html.twig */
class __TwigTemplate_9cc2fb92e605411bd6630b7a87f3c9cfc2424298439bb05cc43de3f1eebdf90d extends Template
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
        if ((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface(), "central"))) {
            // line 35
            echo "<form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/search.php"), "html", null, true);
            echo "\" role=\"search\" method=\"get\" data-submit-once>
   <div class=\"input-group input-group-flat\">
      <input type\"text\" class=\"form-control\" name=\"globalsearch\" placeholder=\"";
            // line 37
            echo twig_escape_filter($this->env, __("Search…"), "html", null, true);
            echo "\" />
      <span class=\"input-group-text\">
         <button type=\"submit\" class=\"btn btn-link p-0 m-0\" title=\"";
            // line 39
            echo twig_escape_filter($this->env, __("Search…"), "html", null, true);
            echo "\">
            <span class=\"ti ti-search\" aria-hidden=\"true\"></span>
         </button>
      </span>
   </div>
</form>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/parts/global_search_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 39,  48 => 37,  42 => 35,  40 => 34,  37 => 33,);
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

{% if get_current_interface() == 'central' %}
<form action=\"{{ path('front/search.php') }}\" role=\"search\" method=\"get\" data-submit-once>
   <div class=\"input-group input-group-flat\">
      <input type\"text\" class=\"form-control\" name=\"globalsearch\" placeholder=\"{{ __('Search…') }}\" />
      <span class=\"input-group-text\">
         <button type=\"submit\" class=\"btn btn-link p-0 m-0\" title=\"{{ __('Search…') }}\">
            <span class=\"ti ti-search\" aria-hidden=\"true\"></span>
         </button>
      </span>
   </div>
</form>
{% endif %}
", "layout/parts/global_search_form.html.twig", "C:\\wamp64\\www\\glpi\\templates\\layout\\parts\\global_search_form.html.twig");
    }
}
