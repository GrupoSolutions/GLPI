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

/* pages/assets/consumableitem.html.twig */
class __TwigTemplate_a4bf9b6d3d21621a8351e8f795aa76765621f287ee1ad471eb0d19b628b430c2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/consumableitem.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/consumableitem.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "stock_target"], "method", false, false, false, 39)) {
            // line 40
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_numberField", ["stock_target", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,             // line 42
($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["stock_target"] ?? null) : null), _x("quantity", "Stock target"), twig_array_merge(            // line 44
($context["field_options"] ?? null), ["min" => 0, "step" => 1])], 40, $context, $this->getSourceContext());
            // line 48
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "pages/assets/consumableitem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 48,  61 => 44,  60 => 42,  58 => 40,  55 => 39,  51 => 38,  46 => 34,  44 => 36,  42 => 35,  35 => 34,);
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

{% extends \"generic_show_form.html.twig\" %}
{% import 'components/form/fields_macros.html.twig' as fields %}
{% set params  = params ?? [] %}

{% block more_fields %}
    {% if item.isField('stock_target') %}
        {{ fields.numberField(
            'stock_target',
            item.fields['stock_target'],
            _x('quantity', 'Stock target'),
            field_options|merge({
                'min': 0,
                'step': 1
            })
        ) }}
    {% endif %}
{% endblock %}
", "pages/assets/consumableitem.html.twig", "C:\\wamp64\\www\\glpi\\templates\\pages\\assets\\consumableitem.html.twig");
    }
}
