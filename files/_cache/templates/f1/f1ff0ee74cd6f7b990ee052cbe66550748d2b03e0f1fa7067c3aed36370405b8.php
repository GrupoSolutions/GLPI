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

/* components/itilobject/timeline/form_task.html.twig */
class __TwigTemplate_313453b68de03e4d53440f9b48bd2a85fbd42da206766843ebd387b2085387ef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'timeline_card' => [$this, 'block_timeline_card'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_task.html.twig", 35)->unwrap();
        // line 37
        $context["params"] = twig_array_merge(["parent" => ($context["item"] ?? null)], ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([])));
        // line 39
        $context["candedit"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "maySolve", [], "method", false, false, false, 39);
        // line 40
        $context["can_read_kb"] = (Session::haveRight("knowbase", twig_constant("READ")) || Session::haveRight("knowbase", twig_constant("KnowbaseItem::READFAQ")));
        // line 41
        $context["can_update_kb"] = Session::haveRight("knowbase", twig_constant("UPDATE"));
        // line 42
        $context["nokb"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 42) || ((($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nokb"] ?? null) : null) == true));
        // line 43
        $context["rand"] = twig_random($this->env);
        // line 34
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_task.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 45
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 47
            echo "      <div class=\"read-only-content ";
            echo ((((($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["state"] ?? null) : null) === constant("Planning::DONE"))) ? ("done") : (""));
            echo "\">
         <div class=\"text-content\" data-bs-html=\"true\" data-bs-custom-class=\"todo-list-tooltip\"
              title=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getTextFromHtml((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["content"] ?? null) : null)), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            ";
            // line 50
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 53
            echo "
         </div>

         <div class=\"timeline-badges\">
            ";
            // line 57
            if ((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["users_id_tech"] ?? null) : null)) {
                // line 58
                echo "               <span class=\"badge bg-orange-lt\">
                  ";
                // line 59
                $context["is_current_tech"] = ((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["users_id_tech"] ?? null) : null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
                // line 60
                echo "                  ";
                $context["anonym_tech"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_tech"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != twig_constant("Entity::ANONYMIZE_DISABLED")));
                // line 61
                echo "                  ";
                echo twig_include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" => (($__internal_compile_6 =                 // line 62
($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["users_id_tech"] ?? null) : null), "enable_anonymization" =>                 // line 63
($context["anonym_tech"] ?? null)], false);
                // line 64
                echo "
               </span>
            ";
            }
            // line 67
            echo "
            ";
            // line 68
            if ((($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["groups_id_tech"] ?? null) : null)) {
                // line 69
                echo "               <span class=\"badge bg-orange-lt\">
                  <i class=\"fas fa-users me-1\"></i>
                  ";
                // line 71
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Group", (($__internal_compile_8 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["groups_id_tech"] ?? null) : null), ["enable_anonymization" => true]);
                echo "
               </span>
            ";
            }
            // line 74
            echo "
            ";
            // line 75
            if ((($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["taskcategories_id"] ?? null) : null)) {
                // line 76
                echo "               <span class=\"badge bg-orange-lt\">
                  ";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("TaskCategory", (($__internal_compile_10 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["taskcategories_id"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 80
            echo "
            ";
            // line 81
            if ((($__internal_compile_11 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["actiontime"] ?? null) : null)) {
                // line 82
                echo "               <span class=\"actiontime badge bg-orange-lt\">
                  <i class=\"fas fa-stopwatch me-1\"></i>
                  ";
                // line 84
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration((($__internal_compile_12 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["actiontime"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 87
            echo "
            ";
            // line 88
            if ((($__internal_compile_13 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["begin"] ?? null) : null)) {
                // line 89
                echo "               <span class=\"planification badge bg-orange-lt\">
                  <i class=\"fas fa-calendar me-1\"></i>
                  ";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_14 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["begin"] ?? null) : null)), "html", null, true);
                echo "
                  &rArr;
                  ";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_15 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["end"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 96
            echo "
            ";
            // line 97
            if ((($__internal_compile_16 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["sourceitems_id"] ?? null) : null)) {
                // line 98
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 100
                ob_start(function () { return ''; });
                // line 101
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 102
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_17 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["sourceitems_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["merged_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 105
                echo "                  ";
                echo twig_sprintf(__("Merged from Ticket %1\$s"), ($context["merged_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 108
            echo "
            ";
            // line 109
            if ((($__internal_compile_18 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["sourceof_items_id"] ?? null) : null)) {
                // line 110
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 112
                ob_start(function () { return ''; });
                // line 113
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 114
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_19 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["sourceof_items_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["promoted_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 117
                echo "                  ";
                echo twig_sprintf(__("Promoted to Ticket %1\$s"), ($context["promoted_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 120
            echo "
            ";
            // line 121
            echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig");
            echo "
         </div>
      </div>

      <script type=\"text/javascript\">
         function change_task_state(tasks_id, target) {
            \$.post('";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/timeline.php"), "html", null, true);
            echo "',
               {'action':     'change_task_state',
                  'tasks_id':   tasks_id,
                  'parenttype': '";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 130), "html", null, true);
            echo "',
                  '";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 131), "html", null, true);
            echo "': ";
            echo twig_escape_filter($this->env, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 131)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["id"] ?? null) : null), "html", null, true);
            echo "
               })
               .done(function(response) {
                  \$(target).closest('.timeline-item').find('.state')
                     .removeClass('state_1 state_2')
                     .addClass('state_'+response.state)
                     .attr('title', response.label);

                  \$(target).closest('.timeline-item').find('.read-only-content')
                     .toggleClass('done');

                  var todo_tasks   = \$('.todo-list-state .state.state_1').length;
                  var done_tasks   = \$('.todo-list-state .state.state_2').length;
                  var total_tasks  = todo_tasks + done_tasks;
                  var percent_done = Math.floor(100 * done_tasks / total_tasks);

                  \$('.timeline-progress')
                     .css('width', percent_done + '%')
                     .attr('aria-valuenow', percent_done);
                  \$('.task-progress-label').html(percent_done + '%');
               });
         }
      </script>
   ";
        } else {
            // line 155
            echo "      <div class=\"itiltask\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 157), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 158), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 159), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 159)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["id"] ?? null) : null), "html", null, true);
            echo "\" />
            ";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

            <div class=\"row mx-n3 mx-xxl-auto\">
               <div class=\"col-12 col-xl-7 col-xxl-8\">
                  ";
            // line 164
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_22 = twig_get_attribute($this->env, $this->source,             // line 166
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 166)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["content"] ?? null) : null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "rand" =>             // line 174
($context["rand"] ?? null)]], 164, $context, $this->getSourceContext());
            // line 176
            echo "
               </div>
               <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-o pe-xxl-auto\">
                  <div class=\"row\">

                     ";
            // line 181
            ob_start(function () { return ''; });
            // line 182
            echo "                        <i class=\"fas fa-reply fa-fw me-1\"
                           title=\"";
            // line 183
            echo twig_escape_filter($this->env, _n("Task template", "Task templates", Session::getPluralNumber()), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_template_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 185
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["TaskTemplate", "tasktemplates_id", (($__internal_compile_23 = twig_get_attribute($this->env, $this->source,             // line 188
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 188)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["tasktemplates_id"] ?? null) : null),             // line 189
($context["task_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("itiltasktemplate_update" .             // line 193
($context["rand"] ?? null)) . "(this.value)"), "entity" => (($__internal_compile_24 = twig_get_attribute($this->env, $this->source,             // line 194
($context["item"] ?? null), "fields", [], "any", false, false, false, 194)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["entities_id"] ?? null) : null), "rand" =>             // line 195
($context["rand"] ?? null)]], 185, $context, $this->getSourceContext());
            // line 197
            echo "

                     ";
            // line 200
            echo "                     ";
            ob_start(function () { return ''; });
            // line 201
            echo "                        <i class=\"fas fa-tag fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, _n("Category", "Categories", 1), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_category_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 203
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["TaskCategory", "taskcategories_id", (($__internal_compile_25 = twig_get_attribute($this->env, $this->source,             // line 206
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 206)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["taskcategories_id"] ?? null) : null),             // line 207
($context["task_category_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_26 = twig_get_attribute($this->env, $this->source,             // line 211
($context["item"] ?? null), "fields", [], "any", false, false, false, 211)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["entities_id"] ?? null) : null), "condition" => ["is_active" => 1], "rand" =>             // line 215
($context["rand"] ?? null)]], 203, $context, $this->getSourceContext());
            // line 217
            echo "

                     ";
            // line 220
            echo "                     ";
            ob_start(function () { return ''; });
            // line 221
            echo "                        <i class=\"fas fa-tasks fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, __("Status"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_state_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 223
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["state", (($__internal_compile_27 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 223)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["state"] ?? null) : null), [0 => _n("Information", "Information", 1), 1 => __("To do"), 2 => __("Done")],             // line 227
($context["task_state_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 230
($context["rand"] ?? null)]], 223, $context, $this->getSourceContext());
            // line 231
            echo "


                     ";
            // line 234
            ob_start(function () { return ''; });
            // line 235
            echo "                        <i class=\"ti ti-lock fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, __("Private"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_private_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 237
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_sliderField", ["is_private", (($__internal_compile_28 = twig_get_attribute($this->env, $this->source,             // line 239
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 239)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["is_private"] ?? null) : null),             // line 240
($context["task_private_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 244
($context["rand"] ?? null)]], 237, $context, $this->getSourceContext());
            // line 246
            echo "

                     ";
            // line 248
            if ((($context["can_read_kb"] ?? null) && (($context["kb_id_toload"] ?? null) > 0))) {
                // line 249
                echo "                        ";
                ob_start(function () { return ''; });
                // line 250
                echo "                           <i class=\"fas fa-link fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                // line 251
                echo twig_escape_filter($this->env, twig_replace_filter(__("Link to knowledge base entry #%id"), ["%id" => ($context["kb_id_toload"] ?? null)]), "html", null, true);
                echo "\"></i>
                        ";
                $context["link_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 253
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["kb_linked_id",                 // line 255
($context["kb_id_toload"] ?? null),                 // line 256
($context["link_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 260
($context["rand"] ?? null)]], 253, $context, $this->getSourceContext());
                // line 262
                echo "
                     ";
            }
            // line 264
            echo "
                     ";
            // line 265
            if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                // line 266
                echo "                        ";
                ob_start(function () { return ''; });
                // line 267
                echo "                           <i class=\"far fa-save fa-fw me-1\" title=\"";
                echo twig_escape_filter($this->env, __("Save and add to the knowledge base"), "html", null, true);
                echo "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                        ";
                $context["task_to_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 270
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["_task_to_kb", 0,                 // line 273
($context["task_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 277
($context["rand"] ?? null)]], 270, $context, $this->getSourceContext());
                // line 279
                echo "
                     ";
            }
            // line 281
            echo "
                     ";
            // line 283
            echo "                     ";
            ob_start(function () { return ''; });
            // line 284
            echo "                        <i class=\"fas fa-stopwatch fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, __("Duration"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_actiontime_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 286
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", ["actiontime", (($__internal_compile_29 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 286)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["actiontime"] ?? null) : null), ($context["task_actiontime_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 289
($context["rand"] ?? null), "min" => 0, "max" => (8 * twig_constant("HOUR_TIMESTAMP")), "addfirstminutes" => true, "inhours" => true, "toadd" => twig_array_map($this->env, range(9, 100),             // line 294
function ($__i__) use ($context, $macros) { $context["i"] = $__i__; return (($context["i"] ?? null) * twig_constant("HOUR_TIMESTAMP")); })]], 286, $context, $this->getSourceContext());
            // line 295
            echo "

                     ";
            // line 298
            echo "                     ";
            ob_start(function () { return ''; });
            // line 299
            echo "                        <i class=\"fas fa-user fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_user_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 301
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id_tech", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 304
($context["subitem"] ?? null), "fields", [], "any", false, true, false, 304), "users_id_tech", [], "array", true, true, false, 304)) ? (_twig_default_filter((($__internal_compile_30 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 304)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["users_id_tech"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"))) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"))),             // line 305
($context["task_user_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_31 = twig_get_attribute($this->env, $this->source,             // line 309
($context["item"] ?? null), "fields", [], "any", false, false, false, 309)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["entities_id"] ?? null) : null), "right" => "own_ticket", "rand" =>             // line 311
($context["rand"] ?? null)]], 301, $context, $this->getSourceContext());
            // line 313
            echo "

                     ";
            // line 316
            echo "                     ";
            ob_start(function () { return ''; });
            // line 317
            echo "                        <i class=\"fas fa-users fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_group_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 319
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Group", "groups_id_tech", (($__internal_compile_32 = twig_get_attribute($this->env, $this->source,             // line 322
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 322)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["groups_id_tech"] ?? null) : null),             // line 323
($context["task_group_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_33 = twig_get_attribute($this->env, $this->source,             // line 327
($context["item"] ?? null), "fields", [], "any", false, false, false, 327)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["entities_id"] ?? null) : null), "condition" => ["is_task" => 1], "rand" =>             // line 329
($context["rand"] ?? null)]], 319, $context, $this->getSourceContext());
            // line 331
            echo "

                     <script type=\"text/javascript\">
                        function showPlanUpdate";
            // line 334
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(e) {
                           \$('#plan";
            // line 335
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').hide();
                           \$('#viewplan";
            // line 336
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').load('";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/planning.php"), "html", null, true);
            echo "', {
                              action: \"add_event_classic_form\",
                              form: \"followups\", // Was followups for tasks before. Can't find where this is used.
                              entity: ";
            // line 339
            echo twig_escape_filter($this->env, (($__internal_compile_34 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 339)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["entities_id"] ?? null) : null), "html", null, true);
            echo ",
                              rand_user: ";
            // line 340
            echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
            echo ",
                              rand_group: ";
            // line 341
            echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
            echo ",
                              itemtype: \"";
            // line 342
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "type", [], "any", false, false, false, 342), "html", null, true);
            echo "\",
                              items_id: ";
            // line 343
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 343), "id", [], "array", true, true, false, 343)) ? (_twig_default_filter((($__internal_compile_35 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 343)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["id"] ?? null) : null),  -1)) : ( -1)), "html", null, true);
            echo ",
                              parent_itemtype: \"";
            // line 344
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 344), "html", null, true);
            echo "\",
                              parent_items_id: ";
            // line 345
            echo twig_escape_filter($this->env, (($__internal_compile_36 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 345)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["id"] ?? null) : null), "html", null, true);
            echo ",
                              parent_fk_field: \"";
            // line 346
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 346), "html", null, true);
            echo "\",
                           });
                        }
                     </script>
                     <div class=\"col-12\">
                        <button id=\"plan";
            // line 351
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary d-block mb-2 text-truncate\" onclick=\"showPlanUpdate";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "()\" type=\"button\">
                           <i class=\"fas fa-calendar\"></i>
                           <span>";
            // line 353
            echo twig_escape_filter($this->env, __("Plan this task"), "html", null, true);
            echo "</span>
                        </button>
                        <div id=\"viewplan";
            // line 355
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"></div>
                     </div>
                  </div>
               </div>
            </div>

            ";
            // line 361
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "
            <div class=\"d-flex card-footer mx-n3 mb-n3\">
               ";
            // line 363
            if (((($__internal_compile_37 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 363)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["id"] ?? null) : null) <= 0)) {
                // line 364
                echo "                  <div class=\"input-group\">
                     <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
                // line 367
                echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
                echo "</span>
                     </button>
                     <span class=\"input-group-text bg-yellow-lt py-0 pe-0\" id=\"pending-reasons-control-";
                // line 369
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\">
                        <span class=\"d-inline-flex align-items-center\" title=\"";
                // line 370
                echo twig_escape_filter($this->env, __("Set the status to pending"), "html", null, true);
                echo "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" role=\"button\">
                           <i class=\"fas fa-pause me-2\"></i>
                           <label class=\"form-check form-switch pt-2\">
                              <input type=\"hidden\"   name=\"pending\" value=\"0\" />
                              <input type=\"checkbox\" name=\"pending\" value=\"1\" class=\"form-check-input\"
                                    id=\"enable-pending-reasons-";
                // line 376
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\"
                                    role=\"button\"
                                    data-bs-toggle=\"collapse\" data-bs-target=\"#pending-reasons-setup-";
                // line 378
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\" />
                           </label>
                        </span>

                        <div class=\"collapse ps-2 py-1 flex-fill\" id=\"pending-reasons-setup-";
                // line 382
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\">
                           ";
                // line 383
                echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons.html.twig");
                echo "
                        </div>
                     </span>
                  </div>
               ";
            } else {
                // line 388
                echo "                  <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_38 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 388)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["id"] ?? null) : null), "html", null, true);
                echo "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 391
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                  </button>

                  ";
                // line 394
                if (twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("PURGE")], "method", false, false, false, 394)) {
                    // line 395
                    echo "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 396
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>";
                    // line 398
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                }
                // line 401
                echo "               ";
            }
            // line 402
            echo "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 404
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
         </form>
      </div>

      <script type=\"text/javascript\">
         function itiltasktemplate_update";
            // line 409
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(value) {
            \$.ajax({
               url: '";
            // line 411
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/task.php"), "html", null, true);
            echo "',
               type: 'POST',
               data: {
                  tasktemplates_id: value,
                  items_id: '";
            // line 415
            echo twig_escape_filter($this->env, (($__internal_compile_39 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 415)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["id"] ?? null) : null), "html", null, true);
            echo "',
                  itemtype: '";
            // line 416
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 416), "html", null, true);
            echo "'
               }
            }).done(function (data) {
                if (data.content !== undefined) {
                    // set textarea content
                    if (tasktinymce = tinymce.get(\"content_";
            // line 421
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")) {
                        tasktinymce.setContent(data.content);
                    }
                }

                if (data.taskcategories_id !== undefined) {
                    // set category
                    const taskcategories_id = isNaN(parseInt(data.taskcategories_id))
                        ? 0
                        : parseInt(data.taskcategories_id);
                    \$(\"#dropdown_taskcategories_id";
            // line 431
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger(\"setValue\", taskcategories_id);
                }

                if (data.is_private !== undefined) {
                    // set is_private
                    \$(\"#is_private_";
            // line 436
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")
                        .prop(\"checked\", data.is_private == \"0\"
                            ? false
                            : true);
                }

                if (data.state !== undefined) {
                    // Set state
                    \$(\"#dropdown_state";
            // line 444
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger('setValue', data.state);
                }

                if (data.actiontime !== undefined) {
                    // Set duration
                    \$(\"#dropdown_actiontime";
            // line 449
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger('setValue', data.actiontime);
                }

                if (data.users_id_tech !== undefined) {
                    // Set user
                    \$(\"#dropdown_users_id_tech";
            // line 454
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger('setValue', data.users_id_tech);
                }

               if (data.groups_id_tech !== undefined) {
                   // Set group
                   \$(\"#dropdown_groups_id_tech";
            // line 459
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger('setValue', data.groups_id_tech);
               }
            });
         }
      </script>
   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  750 => 459,  742 => 454,  734 => 449,  726 => 444,  715 => 436,  707 => 431,  694 => 421,  686 => 416,  682 => 415,  675 => 411,  670 => 409,  662 => 404,  658 => 402,  655 => 401,  649 => 398,  644 => 396,  641 => 395,  639 => 394,  633 => 391,  626 => 388,  618 => 383,  614 => 382,  607 => 378,  602 => 376,  593 => 370,  589 => 369,  584 => 367,  579 => 364,  577 => 363,  572 => 361,  563 => 355,  558 => 353,  551 => 351,  543 => 346,  539 => 345,  535 => 344,  531 => 343,  527 => 342,  523 => 341,  519 => 340,  515 => 339,  507 => 336,  503 => 335,  499 => 334,  494 => 331,  492 => 329,  491 => 327,  490 => 323,  489 => 322,  487 => 319,  481 => 317,  478 => 316,  474 => 313,  472 => 311,  471 => 309,  470 => 305,  469 => 304,  467 => 301,  461 => 299,  458 => 298,  454 => 295,  452 => 294,  451 => 289,  449 => 286,  443 => 284,  440 => 283,  437 => 281,  433 => 279,  431 => 277,  430 => 273,  428 => 270,  421 => 267,  418 => 266,  416 => 265,  413 => 264,  409 => 262,  407 => 260,  406 => 256,  405 => 255,  403 => 253,  398 => 251,  395 => 250,  392 => 249,  390 => 248,  386 => 246,  384 => 244,  383 => 240,  382 => 239,  380 => 237,  374 => 235,  372 => 234,  367 => 231,  365 => 230,  364 => 227,  362 => 223,  356 => 221,  353 => 220,  349 => 217,  347 => 215,  346 => 211,  345 => 207,  344 => 206,  342 => 203,  336 => 201,  333 => 200,  329 => 197,  327 => 195,  326 => 194,  325 => 193,  324 => 189,  323 => 188,  321 => 185,  316 => 183,  313 => 182,  311 => 181,  304 => 176,  302 => 174,  301 => 166,  300 => 164,  293 => 160,  287 => 159,  283 => 158,  279 => 157,  275 => 155,  246 => 131,  242 => 130,  236 => 127,  227 => 121,  224 => 120,  217 => 117,  211 => 114,  208 => 113,  206 => 112,  202 => 110,  200 => 109,  197 => 108,  190 => 105,  184 => 102,  181 => 101,  179 => 100,  175 => 98,  173 => 97,  170 => 96,  164 => 93,  159 => 91,  155 => 89,  153 => 88,  150 => 87,  144 => 84,  140 => 82,  138 => 81,  135 => 80,  129 => 77,  126 => 76,  124 => 75,  121 => 74,  115 => 71,  111 => 69,  109 => 68,  106 => 67,  101 => 64,  99 => 63,  98 => 62,  96 => 61,  93 => 60,  91 => 59,  88 => 58,  86 => 57,  80 => 53,  78 => 50,  74 => 49,  68 => 47,  65 => 46,  61 => 45,  56 => 34,  54 => 43,  52 => 42,  50 => 41,  48 => 40,  46 => 39,  44 => 37,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_task.html.twig", "C:\\wamp64\\www\\glpi\\templates\\components\\itilobject\\timeline\\form_task.html.twig");
    }
}
