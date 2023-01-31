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

/* components/form/inventory_info.html.twig */
class __TwigTemplate_20c4bbb940d68e00484f9ee4c09a904220b1dfaf82732f2c7c8919029300a832 extends Template
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
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDynamic", [], "method", false, false, false, 34), false))) {
            // line 35
            echo "<div class=\"card m-n2 border-0 shadow-none\">
   <div class=\"card-header\">
      <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
         <i class=\"fas fa-cloud-download-alt\"></i>
      </div>
      <h4 class=\"card-title ps-4\">
         ";
            // line 41
            echo twig_escape_filter($this->env, __("Inventory information"), "html", null, true);
            echo "
      </h4>
      ";
            // line 43
            $context["inventory_filename"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\Inventoriable")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getInventoryFileName", [0 => false], "method", false, false, false, 43)) : (null));
            // line 44
            echo "      ";
            if ( !(null === ($context["inventory_filename"] ?? null))) {
                // line 45
                echo "         <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("front/document.send.php?file=_inventory/" . ($context["inventory_filename"] ?? null))), "html", null, true);
                echo "\"
            class=\"btn btn-sm btn-secondary ms-auto\" target=\"_blank\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"
            title=\"";
                // line 48
                echo twig_escape_filter($this->env, twig_sprintf(__("Download \"%1\$s\" inventory file"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["item"] ?? null))), "html", null, true);
                echo "\">
            <i class=\"fas fa-download\"></i>
         </a>
      ";
            } else {
                // line 52
                echo "         <span class=\"ms-auto\" title=\"";
                echo twig_escape_filter($this->env, __("Inventory file missing"), "html", null, true);
                echo "\">
            <i class=\"fas fa-ban\"></i>
            <span class=\"visually-hidden\">";
                // line 54
                echo twig_escape_filter($this->env, __("Inventory file missing"), "html", null, true);
                echo "</span>
         </span>
      ";
            }
            // line 57
            echo "   </div>
   ";
            // line 58
            $context["agent"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\Inventoriable")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getInventoryAgent", [], "method", false, false, false, 58)) : (null));
            // line 59
            echo "   ";
            if ( !(null === ($context["agent"] ?? null))) {
                // line 60
                echo "      <div class=\"card-body row\">
         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "getTypeName", [], "method", false, false, false, 62), "html", null, true);
                echo "</label>
            <span>
               <i class=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "getIcon", [], "method", false, false, false, 64), "html", null, true);
                echo "\"></i>
               ";
                // line 65
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink(($context["agent"] ?? null));
                echo "
            </span>
         </div>

         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >";
                // line 70
                echo twig_escape_filter($this->env, __("Useragent"), "html", null, true);
                echo "</label>
            <span>";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 71)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["useragent"] ?? null) : null)), "html", null, true);
                echo "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >";
                // line 75
                echo twig_escape_filter($this->env, __("Inventory tag"), "html", null, true);
                echo "</label>
            <span>";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 76)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["tag"] ?? null) : null)), "html", null, true);
                echo "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >";
                // line 80
                echo twig_escape_filter($this->env, __("Last inventory"), "html", null, true);
                echo "</label>
            <span>";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 81)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["last_contact"] ?? null) : null)), "html", null, true);
                echo "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >
               ";
                // line 86
                echo twig_escape_filter($this->env, __("Agent status"), "html", null, true);
                echo "
               <i id=\"update-status\" class=\"fas fa-sync\" role=\"button\" title=\"";
                // line 87
                echo twig_escape_filter($this->env, __("Ask agent about its current status"), "html", null, true);
                echo "\"></i>
            </label>
            <span id='agent_status'>";
                // line 89
                echo twig_escape_filter($this->env, __("Unknown"), "html", null, true);
                echo "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >
               ";
                // line 94
                echo twig_escape_filter($this->env, __("Request inventory"), "html", null, true);
                echo "
               <i id=\"update-inventory\" class=\"fas fa-sync\" role=\"button\" title=\"";
                // line 95
                echo twig_escape_filter($this->env, __("Request agent to proceed an new inventory"), "html", null, true);
                echo "\"></i>
            </label>
            <span id='inventory_status'>";
                // line 97
                echo twig_escape_filter($this->env, __("Unknown"), "html", null, true);
                echo "</span>
         </div>
      </div>

      <script>
      \$(function () {
         \$('#update-status').on('click', function() {
            var icon = \$(this);
            icon.addClass('fa-spin');
            \$.ajax({
               type: 'POST',
               url: '";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/agent.php"), "html", null, true);
                echo "',
               timeout: 30000, // 30 seconds timeout
               dataType: 'json',
               data: {
                  action: '";
                // line 112
                echo twig_escape_filter($this->env, twig_constant("Agent::ACTION_STATUS"), "html", null, true);
                echo "',
                  id: '";
                // line 113
                echo twig_escape_filter($this->env, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 113)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null), "html", null, true);
                echo "'
               },
               success: function(json) {
                  \$('#agent_status').html(json.answer);
               },
               complete: function() {
                  icon.removeClass('fa-spin');
               }
            });
         });

         \$('#update-inventory').on('click', function() {
            var icon = \$(this);
            icon.addClass(\"fa-spin\");
            \$.ajax({
               type: 'POST',
               url: '";
                // line 129
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/agent.php"), "html", null, true);
                echo "',
               timeout: 30000, // 30 seconds timeout
               dataType: 'json',
               data: {
                  action: '";
                // line 133
                echo twig_escape_filter($this->env, twig_constant("Agent::ACTION_INVENTORY"), "html", null, true);
                echo "',
                  id: '";
                // line 134
                echo twig_escape_filter($this->env, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 134)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["id"] ?? null) : null), "html", null, true);
                echo "'
               },
               success: function(json) {
                  \$('#inventory_status').html(json.answer);
               },
               complete: function() {
                  icon.removeClass('fa-spin');
               }
            });
         });
      });
      </script>
   ";
            }
            // line 147
            echo "   ";
            if (((1 === twig_compare((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 147)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null), 0)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_dynamic"], "method", false, false, false, 147))) {
                // line 148
                echo "      ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::AUTOINVENTORY_INFORMATION"), ($context["item"] ?? null)), "html", null, true);
                echo "
   ";
            }
            // line 150
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "components/form/inventory_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 150,  249 => 148,  246 => 147,  230 => 134,  226 => 133,  219 => 129,  200 => 113,  196 => 112,  189 => 108,  175 => 97,  170 => 95,  166 => 94,  158 => 89,  153 => 87,  149 => 86,  141 => 81,  137 => 80,  130 => 76,  126 => 75,  119 => 71,  115 => 70,  107 => 65,  103 => 64,  98 => 62,  94 => 60,  91 => 59,  89 => 58,  86 => 57,  80 => 54,  74 => 52,  67 => 48,  60 => 45,  57 => 44,  55 => 43,  50 => 41,  42 => 35,  40 => 34,  37 => 33,);
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

{% if item.isDynamic() != false %}
<div class=\"card m-n2 border-0 shadow-none\">
   <div class=\"card-header\">
      <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
         <i class=\"fas fa-cloud-download-alt\"></i>
      </div>
      <h4 class=\"card-title ps-4\">
         {{ __('Inventory information') }}
      </h4>
      {% set inventory_filename = item is usingtrait('Glpi\\\\Features\\\\Inventoriable') ? item.getInventoryFileName(false) : null %}
      {% if inventory_filename is not null %}
         <a href=\"{{ path('front/document.send.php?file=_inventory/' ~ inventory_filename) }}\"
            class=\"btn btn-sm btn-secondary ms-auto\" target=\"_blank\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"
            title=\"{{ __('Download \"%1\$s\" inventory file')|format(get_item_name(item)) }}\">
            <i class=\"fas fa-download\"></i>
         </a>
      {% else %}
         <span class=\"ms-auto\" title=\"{{ __('Inventory file missing') }}\">
            <i class=\"fas fa-ban\"></i>
            <span class=\"visually-hidden\">{{ __('Inventory file missing') }}</span>
         </span>
      {% endif %}
   </div>
   {% set agent = item is usingtrait('Glpi\\\\Features\\\\Inventoriable') ? item.getInventoryAgent() : null %}
   {% if agent is not null %}
      <div class=\"card-body row\">
         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >{{ agent.getTypeName() }}</label>
            <span>
               <i class=\"{{ agent.getIcon() }}\"></i>
               {{ get_item_link(agent) }}
            </span>
         </div>

         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >{{ __('Useragent') }}</label>
            <span>{{ agent.fields['useragent']|verbatim_value }}</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >{{ __('Inventory tag') }}</label>
            <span>{{ agent.fields['tag']|verbatim_value }}</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >{{ __('Last inventory') }}</label>
            <span>{{ agent.fields['last_contact']|formatted_datetime }}</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >
               {{ __('Agent status') }}
               <i id=\"update-status\" class=\"fas fa-sync\" role=\"button\" title=\"{{ __('Ask agent about its current status') }}\"></i>
            </label>
            <span id='agent_status'>{{ __('Unknown') }}</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >
               {{ __('Request inventory') }}
               <i id=\"update-inventory\" class=\"fas fa-sync\" role=\"button\" title=\"{{ __('Request agent to proceed an new inventory') }}\"></i>
            </label>
            <span id='inventory_status'>{{ __('Unknown') }}</span>
         </div>
      </div>

      <script>
      \$(function () {
         \$('#update-status').on('click', function() {
            var icon = \$(this);
            icon.addClass('fa-spin');
            \$.ajax({
               type: 'POST',
               url: '{{ path('/ajax/agent.php') }}',
               timeout: 30000, // 30 seconds timeout
               dataType: 'json',
               data: {
                  action: '{{ constant('Agent::ACTION_STATUS') }}',
                  id: '{{ agent.fields['id'] }}'
               },
               success: function(json) {
                  \$('#agent_status').html(json.answer);
               },
               complete: function() {
                  icon.removeClass('fa-spin');
               }
            });
         });

         \$('#update-inventory').on('click', function() {
            var icon = \$(this);
            icon.addClass(\"fa-spin\");
            \$.ajax({
               type: 'POST',
               url: '{{ path('/ajax/agent.php') }}',
               timeout: 30000, // 30 seconds timeout
               dataType: 'json',
               data: {
                  action: '{{ constant('Agent::ACTION_INVENTORY') }}',
                  id: '{{ agent.fields['id'] }}'
               },
               success: function(json) {
                  \$('#inventory_status').html(json.answer);
               },
               complete: function() {
                  icon.removeClass('fa-spin');
               }
            });
         });
      });
      </script>
   {% endif %}
   {% if item.fields['id'] > 0 and item.isField('is_dynamic') %}
      {{ call_plugin_hook(constant('Glpi\\\\Plugin\\\\Hooks::AUTOINVENTORY_INFORMATION'), item) }}
   {% endif %}
</div>
{% endif %}
", "components/form/inventory_info.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\form\\inventory_info.html.twig");
    }
}
