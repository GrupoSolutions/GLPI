<?php
/*
 -------------------------------------------------------------------------
 MyDashboard plugin for GLPI
 Copyright (C) 2015-2022 by the MyDashboard Development Team.
 -------------------------------------------------------------------------

 LICENSE

 This file is part of MyDashboard.

 MyDashboard is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 MyDashboard is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with MyDashboard. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */

include("../../../inc/includes.php");

Session::checkLoginUser();

global $CFG_GLPI;

define("PRIORITY", 3);
define("TYPE", 14);
define("ENTITIES_ID", 80);
define("STATUS", 12);
define("CATEGORY", 7);
define("OPEN_DATE", 15);
define("TECHNICIAN", 5);
define("REQUESTER_GROUP", 71);
define("TECHNICIAN_GROUP", 8);
define("LOCATIONS_ID", 83);
define("CLOSE_DATE", 16);
define("SOLVE_DATE", 17);
define("TASK_ACTIONTIME", 96);
define("VALIDATION_STATS", 55);
define("VALIDATION_REFUSED", 4);
define("NUMBER_OF_PROBLEMS", 200);

//Case PluginMydashboardReports_Table32 / PluginMydashboardReports_Table33
if (isset($_POST['widget'])) {
    foreach ($_POST as $k => $v) {
        $_POST['params'][$k] = $v;
    }
}
/**
 * @param $field
 * @param $searchType
 * @param $value
 * @param $link
 */
function addCriteria($field, $searchType, $value, $link)
{
    global $options;

    $options['criteria'][] = [
       'field'      => $field,
       'searchtype' => $searchType,
       'value'      => $value,
       'link'       => $link
    ];
}

/**
 * @param $field
 * @param $searchType
 * @param $value
 */
function groupCriteria($field, $searchType, $value)
{
    global $options;

    if (isset($value)
        && count($value) > 0) {
        $groups = $value;
        $nb     = 0;
        foreach ($groups as $group) {
            $criterias['criteria'][$nb] = [
               'field'      => $field,
               'searchtype' => $searchType,
               'value'      => $group,
               'link'       => (($nb == 0) ? 'AND' : 'OR'),
            ];
            $nb++;
        }
        $options['criteria'][] = $criterias;
    }
}

// Reset criterias
$options['reset'][] = 'reset';
//$options['as_map'][] = '0';

if (isset($_POST["params"]["technician_group"])) {
    $_POST["params"]["technician_group"] = is_array($_POST["params"]["technician_group"]) ? $_POST["params"]["technician_group"] : [$_POST["params"]["technician_group"]];
} else {
    $_POST["params"]["technician_group"] = [];
}

if (isset($_POST["params"]["requester_groups"])) {
    $_POST["params"]["requester_groups"] = is_array($_POST["params"]["requester_groups"]) ? $_POST["params"]["requester_groups"] : [$_POST["params"]["requester_groups"]];
} else {
    $_POST["params"]["requester_groups"] = [];
}

if (isset($_POST["params"]["widget"])
    && $_POST["params"]["widget"] == "PluginOcsinventoryngDashboard1") {
    if (isset($_POST["params"]["dateinv"])) {
        addCriteria(10002, 'contains', $_POST["params"]["dateinv"], 'AND');

        $link = $CFG_GLPI["root_doc"] . '/front/computer.php?' .
                Toolbox::append_params($options, "&");
        echo $link;
    }
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Bar1") {
    //$criterias = ['entities_id', 'is_recursive', 'technicians_groups_id', 'type'];
    if (isset($_POST["selected_id"])) {
        addCriteria(STATUS, 'equals', 'notold', 'AND');
        // open date
        addCriteria(OPEN_DATE, 'contains', $_POST["selected_id"], 'AND');

        groupCriteria(REQUESTER_GROUP, 'equals', $_POST["params"]["requester_groups"]);

        groupCriteria(TECHNICIAN_GROUP, ((isset($_POST["params"]["group_is_recursive"]) && !empty($_POST["params"]["group_is_recursive"])) ? 'under' : 'equals'), $_POST["params"]["technician_group"]);

        if ($_POST["params"]["type"] > 0) {
            addCriteria(TYPE, 'equals', $_POST["params"]["type"], 'AND');
        }

        addCriteria(ENTITIES_ID, (isset($_POST["params"]["sons"]) && $_POST["params"]["sons"] > 0) ? 'under' : 'equals', $_POST["params"]["entities_id"], 'AND');

        $link = $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
                Toolbox::append_params($options, "&");
        echo $link;
    }
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Bar35") {
    //$criterias = ['entities_id', 'is_recursive', 'technicians_groups_id', 'type'];
    if (isset($_POST["selected_id"])) {
        addCriteria(STATUS, 'equals', 'notold', 'AND');
        // open date
        if (isset($_POST['selected_id']) && strpos($_POST['selected_id'], '_') !== false) {
            $eventParts  = explode('_', $_POST['selected_id']);
            $begin        = $eventParts[0];
            $end        = $eventParts[1];
            if ($begin == $end) {
                $today = strtotime(date("Y-m-d H:i:s"));
                $datecheck = date('Y-m-d H:i:s', strtotime('-1 month', $today));
                if (strtotime($begin) < strtotime($datecheck)) {
                    addCriteria(OPEN_DATE, 'lessthan', $begin, 'AND');
                } else {
                    addCriteria(OPEN_DATE, 'morethan', $begin, 'AND');
                }

            } else {
                addCriteria(OPEN_DATE, 'lessthan', $begin, 'AND');
                addCriteria(OPEN_DATE, 'morethan', $end, 'AND');
            }
        }

//        groupCriteria(REQUESTER_GROUP, 'equals', $_POST["params"]["requester_groups"]);

        groupCriteria(TECHNICIAN_GROUP, ((isset($_POST["params"]["group_is_recursive"]) && !empty($_POST["params"]["group_is_recursive"])) ? 'under' : 'equals'), $_POST["params"]["technician_group"]);

        if ($_POST["params"]["type"] > 0) {
            addCriteria(TYPE, 'equals', $_POST["params"]["type"], 'AND');
        }

        addCriteria(ENTITIES_ID, (isset($_POST["params"]["sons"]) && $_POST["params"]["sons"] > 0) ? 'under' : 'equals', $_POST["params"]["entities_id"], 'AND');

        $link = $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
                Toolbox::append_params($options, "&");
        echo $link;
    }
} elseif (isset($_POST["params"]["widget"])
           && ($_POST["params"]["widget"] == "PluginMydashboardReports_Pie2"
               || $_POST["params"]["widget"] == "PluginMydashboardReports_Bar36")) {
    if (isset($_POST["selected_id"])) {
        addCriteria(STATUS, 'equals', 'notold', 'AND');

        addCriteria(PRIORITY, 'equals', $_POST["selected_id"], 'AND');

        if ($_POST["params"]["type"] > 0) {
            addCriteria(TYPE, 'equals', $_POST["params"]["type"], 'AND');
        }

        addCriteria(ENTITIES_ID, (isset($_POST["params"]["sons"]) && $_POST["params"]["sons"] > 0) ? 'under' : 'equals', $_POST["params"]["entities_id"], 'AND');

        groupCriteria(TECHNICIAN_GROUP, ((isset($_POST["params"]["group_is_recursive"]) && !empty($_POST["params"]["group_is_recursive"])) ? 'under' : 'equals'), $_POST["params"]["technician_group"]);

        $link = $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
                Toolbox::append_params($options, "&");
        echo $link;
    }
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Pie25") {
   //    $criterias = ['type'];
    //requester groups;
    if (isset($_POST["selected_id"])) {
        addCriteria(STATUS, 'equals', 'notold', 'AND');
        // requester_group
        addCriteria(71, ((empty($_POST["selected_id"])) ? 'contains' : 'equals'), ((empty($_POST["selected_id"])) ? '^$' : $_POST["selected_id"]), 'AND');

        if ($_POST["params"]["type"] > 0) {
            addCriteria(TYPE, 'equals', $_POST["params"]["type"], 'AND');
        }
        $link = $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
                Toolbox::append_params($options, "&");
        echo $link;
    }
} elseif (isset($_POST["params"]["widget"])
           && ($_POST["params"]["widget"] == "PluginMydashboardReports_Pie16"
               || $_POST["params"]["widget"] == "PluginMydashboardReports_Pie17")) {
    //$criterias = ['entities_id', 'is_recursive', 'technicians_groups_id'];
    if (isset($_POST["selected_id"])) {
        addCriteria(STATUS, 'equals', 'notold', 'AND');

        addCriteria(TYPE, 'equals', (($_POST["params"]["widget"] == "PluginMydashboardReports_Pie16") ? Ticket::INCIDENT_TYPE : Ticket::DEMAND_TYPE), 'AND');

        addCriteria(CATEGORY, ((empty($_POST["selected_id"])) ? 'contains' : 'equals'), ((empty($_POST["selected_id"])) ? '^$' : $_POST["selected_id"]), 'AND');

        groupCriteria(REQUESTER_GROUP, 'equals', $_POST["params"]["requester_groups"]);

        groupCriteria(TECHNICIAN_GROUP, ((isset($_POST["params"]["group_is_recursive"]) && !empty($_POST["params"]["group_is_recursive"])) ? 'under' : 'equals'), $_POST["params"]["technician_group"]);

        addCriteria(ENTITIES_ID, (isset($_POST["params"]["sons"]) && $_POST["params"]["sons"] > 0) ? 'under' : 'equals', $_POST["params"]["entities_id"], 'AND');

        $link = $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
                Toolbox::append_params($options, "&");
        echo $link;
    }
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Bar24") {
    //$criterias = ['entities_id', 'is_recursive', 'year', 'type'];
    if (isset($_POST["selected_id"])) {
        addCriteria(TECHNICIAN, (($_POST["selected_id"] == -1) ? 'contains' : 'equals'), (($_POST["selected_id"] == -1) ? '^$' : $_POST["selected_id"]), 'AND');

        if ($_POST["params"]["type"] > 0) {
            addCriteria(TYPE, 'equals', $_POST["params"]["type"], 'AND');
        }

        addCriteria(ENTITIES_ID, (isset($_POST["params"]["sons"]) && $_POST["params"]["sons"] > 0) ? 'under' : 'equals', $_POST["params"]["entities_id"], 'AND');

        addCriteria(OPEN_DATE, 'morethan', $_POST["params"]["begin"], 'AND');

        addCriteria(OPEN_DATE, 'lessthan', $_POST["params"]["end"], 'AND');

        $link = $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
                Toolbox::append_params($options, "&");
        echo $link;
    }
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Pie27") {
    //   $criterias = ['entities_id', 'is_recursive','type'];
    if (isset($_POST["selected_id"])) {
        addCriteria(STATUS, 'equals', 'notold', 'AND');

        addCriteria(LOCATIONS_ID, ((empty($_POST["selected_id"])) ? 'contains' : 'equals'), ((empty($_POST["selected_id"])) ? '^$' : $_POST["selected_id"]), 'AND');

        if ($_POST["params"]["type"] > 0) {
            addCriteria(TYPE, 'equals', $_POST["params"]["type"], 'AND');
        }

        addCriteria(ENTITIES_ID, (isset($_POST["params"]["sons"]) && $_POST["params"]["sons"] > 0) ? 'under' : 'equals', $_POST["params"]["entities_id"], 'AND');

        groupCriteria(TECHNICIAN_GROUP, ((isset($_POST["params"]["group_is_recursive"]) && !empty($_POST["params"]["group_is_recursive"])) ? 'under' : 'equals'), $_POST["params"]["technician_group"]);


        $link = $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
                Toolbox::append_params($options, "&");
        echo $link;
    }
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Table32") {
    // ENTITY | SONS
    addCriteria(ENTITIES_ID, (isset($_POST["params"]["sons"]) && $_POST["params"]["sons"] > 0) ? 'under' : 'equals', $_POST["params"]["entities_id"], 'AND');

    // USER
    if (isset($_POST["params"]["technician"])) {
        addCriteria(TECHNICIAN, 'equals', $_POST["params"]["technician"], 'AND');
    }

    // STATUS
    if ($_POST["params"]['moreticket'] == 1) {
        addCriteria(3452, 'equals', $_POST["params"]["status"], 'AND');
    } else {
        addCriteria(STATUS, 'equals', $_POST["params"]["status"], 'AND');
    }

    echo $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
         Toolbox::append_params($options, "&");
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Table33") {
    // ENTITY | SONS
    addCriteria(ENTITIES_ID, (isset($_POST["params"]["sons"]) && $_POST["params"]["sons"] > 0) ? 'under' : 'equals', $_POST["params"]["entities_id"], 'AND');

    // STATUS
    if ($_POST["params"]['moreticket'] == 1) {
        addCriteria(3452, 'equals', $_POST["params"]["status"], 'AND');
    } else {
        addCriteria(STATUS, 'equals', $_POST["params"]["status"], 'AND');
    }

    // Group
    groupCriteria(TECHNICIAN_GROUP, ((isset($_POST["params"]["group_is_recursive"]) && !empty($_POST["params"]["group_is_recursive"])) ? 'under' : 'equals'), $_POST["params"]["technician_group"]);


    echo $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
         Toolbox::append_params($options, "&");
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Bar37") {
    // ENTITY | SONS
    addCriteria(ENTITIES_ID, (isset($_POST["params"]["sons"]) && $_POST["params"]["sons"] > 0) ? 'under' : 'equals', $_POST["params"]["entities_id"], 'AND');

    if ($_POST["params"]["type"] > 0) {
        addCriteria(TYPE, 'equals', $_POST["params"]["type"], 'AND');
    }

    // STATUS
    if (strpos($_POST["selected_id"], 'moreticket_') !== false) {
        $status = explode("_", $_POST["selected_id"]);

        addCriteria(STATUS, 'equals', Ticket::WAITING, 'AND');

        addCriteria(3452, 'equals', $status[1], 'AND');
    } else {
        addCriteria(STATUS, 'equals', $_POST["selected_id"], 'AND');
    }

    // Group
    groupCriteria(TECHNICIAN_GROUP, ((isset($_POST["params"]["group_is_recursive"]) && !empty($_POST["params"]["group_is_recursive"])) ? 'under' : 'equals'), $_POST["params"]["technician_group"]);


    echo $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
         Toolbox::append_params($options, "&");
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Bar15") {
    //$criterias = ['entities_id', 'is_recursive', 'technicians_groups_id', 'type'];
    if (isset($_POST["selected_id"])) {
        if ($_POST["selected_id"] == "") {
            $_POST["selected_id"] = 0;
        }
      //      addCriteria(STATUS, 'equals', 'notold', 'AND');
        // open date
        addCriteria(OPEN_DATE, 'contains', $_POST["params"]["year"], 'AND');

        groupCriteria(REQUESTER_GROUP, 'equals', $_POST["params"]["requester_groups"]);
        groupCriteria(TECHNICIAN_GROUP, 'equals', $_POST["params"]["technician_group"]);


        if ($_POST["params"]["type"] > 0) {
            addCriteria(TYPE, 'equals', $_POST["params"]["type"], 'AND');
        }
        addCriteria(CATEGORY, 'equals', $_POST["selected_id"], 'AND');
        addCriteria(ENTITIES_ID, (isset($_POST["params"]["sons"]) && $_POST["params"]["sons"] > 0) ? 'under' : 'equals', $_POST["params"]["entities_id"], 'AND');

        $link = $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
                Toolbox::append_params($options, "&");
        echo $link;
    }
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Line22") {
    //$criterias = ['entities_id',
   //                             'technicians_groups_id',
   //                             'group_is_recursive',
   //                             TODO'requesters_groups_id',
   //                             'is_recursive',
   //                             'display_data',
   //                             'technicians_id',
   //                             'type',
   //                             'locations_id'];

    if (isset($_POST["selected_id"])) {
        if ($_POST["selected_id"] == "") {
            $_POST["selected_id"] = 0;
        }

        if (isset($_POST['selected_id']) && strpos($_POST['selected_id'], '_') !== false) {
            $eventParts  = explode('_', $_POST['selected_id']);
            $date        = $eventParts[0];
            $ticket_state        = $eventParts[1];
            if (isset($date) && strpos($date, '-') !== false) {
                $dateParts = explode('-', $date);
                $year        = $dateParts[0];
                $month        = $dateParts[1];
            }

            $_POST['id'] = $eventParts[1];
        }
        if (isset($year) && isset($month) && isset($ticket_state)) {
            if ($ticket_state == "opened") {
                $crit = OPEN_DATE;
            } elseif ($ticket_state == "closed") {
                $crit = CLOSE_DATE;
            } elseif ($ticket_state == "progress") {
                $crit = OPEN_DATE;
            }
            if ($ticket_state == "progress") {
                $nbdays      = date("t", mktime(0, 0, 0, $month, 1, $year));
                $date = "$year-$month-$nbdays 23:59";
                addCriteria($crit, 'lessthan', $date, 'AND');
                addCriteria(STATUS, 'equals', 'notold', 'AND');
            } else {
                $date = "$year-$month-01 00:00";
                $nbdays      = date("t", mktime(0, 0, 0, $month, 1, $year));
                addCriteria($crit, 'morethan', $date, 'AND');
                $date = "$year-$month-$nbdays 23:59";
                addCriteria($crit, 'lessthan', $date, 'AND');
            }
        }

        if ($_POST["params"]["locations_id"] > 0) {
            addCriteria(LOCATIONS_ID, 'equals', $_POST["params"]["locations_id"], 'AND');
        }
        if ($_POST["params"]["technician_id"] > 0) {
            addCriteria(TECHNICIAN, 'equals', $_POST["params"]["technician_id"], 'AND');
        }
        if ($_POST["params"]["type"] > 0) {
            addCriteria(TYPE, 'equals', $_POST["params"]["type"], 'AND');
        }

        addCriteria(ENTITIES_ID, (isset($_POST["params"]["sons"]) && $_POST["params"]["sons"] > 0) ? 'under' : 'equals', $_POST["params"]["entities_id"], 'AND');

        groupCriteria(REQUESTER_GROUP, 'equals', $_POST["params"]["requester_groups"]);

        groupCriteria(TECHNICIAN_GROUP, ((isset($_POST["params"]["group_is_recursive"]) && !empty($_POST["params"]["group_is_recursive"])) ? 'under' : 'equals'), $_POST["params"]["technician_group"]);

        $link = $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
                Toolbox::append_params($options, "&");
        echo $link;
    }
//   echo __('No informations sended', 'mydashboard');
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Line34") {
    //$criterias = ['entities_id',
   //                             'technicians_groups_id',
   //                             'group_is_recursive',
   //                             TODO'requesters_groups_id',
   //                             'is_recursive',
   //                             'display_data',
   //                             'technicians_id',
   //                             'type',
   //                             'locations_id'];

    if (isset($_POST["selected_id"])) {
        if ($_POST["selected_id"] == "") {
            $_POST["selected_id"] = 0;
        }

        if (isset($_POST['selected_id']) && strpos($_POST['selected_id'], '_') !== false) {
            $eventParts  = explode('_', $_POST['selected_id']);
            $date        = $eventParts[0];
            $ticket_state        = $eventParts[1];
            if (isset($date) && strpos($date, '-') !== false) {
                $dateParts = explode('-', $date);
                $year        = $dateParts[0];
                $month        = $dateParts[1];
            }

            $_POST['id'] = $eventParts[1];
        }
        if (isset($year) && isset($month) && isset($ticket_state)) {
            if ($ticket_state == "opened") {
                $crit = OPEN_DATE;
            } elseif ($ticket_state == "resolved") {
                $crit = SOLVE_DATE;
            } elseif ($ticket_state == "progress") {
                $crit = OPEN_DATE;
            }
            if ($ticket_state == "progress") {
                $nbdays      = date("t", mktime(0, 0, 0, $month, 1, $year));
                $date = "$year-$month-$nbdays 23:59";
                addCriteria($crit, 'lessthan', $date, 'AND');
                addCriteria(STATUS, 'equals', 'notold', 'AND');
            } else {
                $date = "$year-$month-01 00:00";
                $nbdays      = date("t", mktime(0, 0, 0, $month, 1, $year));
                addCriteria($crit, 'morethan', $date, 'AND');
                $date = "$year-$month-$nbdays 23:59";
                addCriteria($crit, 'lessthan', $date, 'AND');
            }
        }

        if ($_POST["params"]["locations_id"] > 0) {
            addCriteria(LOCATIONS_ID, 'equals', $_POST["params"]["locations_id"], 'AND');
        }
        if ($_POST["params"]["technician_id"] > 0) {
            addCriteria(TECHNICIAN, 'equals', $_POST["params"]["technician_id"], 'AND');
        }
        if ($_POST["params"]["type"] > 0) {
            addCriteria(TYPE, 'equals', $_POST["params"]["type"], 'AND');
        }

        addCriteria(ENTITIES_ID, (isset($_POST["params"]["sons"]) && $_POST["params"]["sons"] > 0) ? 'under' : 'equals', $_POST["params"]["entities_id"], 'AND');

        groupCriteria(REQUESTER_GROUP, 'equals', $_POST["params"]["requester_groups"]);

        groupCriteria(TECHNICIAN_GROUP, ((isset($_POST["params"]["group_is_recursive"]) && !empty($_POST["params"]["group_is_recursive"])) ? 'under' : 'equals'), $_POST["params"]["technician_group"]);

        $link = $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
                Toolbox::append_params($options, "&");
        echo $link;
    }
//   echo __('No informations sended', 'mydashboard');
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Line35") {
    //$criterias = ['entities_id',
   //                             'technicians_groups_id',
   //                             'group_is_recursive',
   //                             TODO'requesters_groups_id',
   //                             'is_recursive',
   //                             'display_data',
   //                             'technicians_id',
   //                             'type',
   //                             'locations_id'];

    if (isset($_POST["selected_id"])) {
        if ($_POST["selected_id"] == "") {
            $_POST["selected_id"] = 0;
        }

        if (isset($_POST['selected_id']) && strpos($_POST['selected_id'], '_') !== false) {
            $eventParts  = explode('_', $_POST['selected_id']);
            $date        = $eventParts[0];
            $ticket_state        = $eventParts[1];
            if (isset($date) && strpos($date, '-') !== false) {
                $dateParts = explode('-', $date);
                $year        = $dateParts[0];
                $month        = $dateParts[1];
            }

            $_POST['id'] = $eventParts[1];
        }
        $add_actiontime_crit = 0;
        if (isset($year) && isset($month) && isset($ticket_state)) {
            if ($ticket_state == "opened") {
                $crit = OPEN_DATE;
            } elseif ($ticket_state == "closed") {
                $crit = CLOSE_DATE;
            } elseif ($ticket_state == "progress") {
                $crit = OPEN_DATE;
            } elseif ($ticket_state == "unplanned") {
                $crit = CLOSE_DATE;
                $add_actiontime_crit = 1;
            }
            if ($ticket_state == "progress") {
                $nbdays      = date("t", mktime(0, 0, 0, $month, 1, $year));
                $date = "$year-$month-$nbdays 23:59";
                addCriteria($crit, 'lessthan', $date, 'AND');
                addCriteria(STATUS, 'equals', 'notold', 'AND');
            } else {
                $date = "$year-$month-01 00:00";
                $nbdays      = date("t", mktime(0, 0, 0, $month, 1, $year));
                addCriteria($crit, 'morethan', $date, 'AND');
                $date = "$year-$month-$nbdays 23:59";
                addCriteria($crit, 'lessthan', $date, 'AND');
            }
        }

        if ($_POST["params"]["locations_id"] > 0) {
            addCriteria(LOCATIONS_ID, 'equals', $_POST["params"]["locations_id"], 'AND');
        }
        if ($_POST["params"]["technician_id"] > 0) {
            addCriteria(TECHNICIAN, 'equals', $_POST["params"]["technician_id"], 'AND');
        }
        if ($_POST["params"]["type"] > 0) {
            addCriteria(TYPE, 'equals', $_POST["params"]["type"], 'AND');
        }

        addCriteria(ENTITIES_ID, (isset($_POST["params"]["sons"]) && $_POST["params"]["sons"] > 0) ? 'under' : 'equals', $_POST["params"]["entities_id"], 'AND');

        groupCriteria(REQUESTER_GROUP, 'equals', $_POST["params"]["requester_groups"]);

        groupCriteria(TECHNICIAN_GROUP, ((isset($_POST["params"]["group_is_recursive"]) && !empty($_POST["params"]["group_is_recursive"])) ? 'under' : 'equals'), $_POST["params"]["technician_group"]);

        if ($add_actiontime_crit == 1) {
            addCriteria(TASK_ACTIONTIME, 'contains', 'NULL', 'AND');
        }

        $link = $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
                Toolbox::append_params($options, "&");
        echo $link;
    }
//   echo __('No informations sended', 'mydashboard');
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Line35") {
    //$criterias = ['entities_id',
    //                             'technicians_groups_id',
    //                             'group_is_recursive',
    //                             TODO'requesters_groups_id',
    //                             'is_recursive',
    //                             'display_data',
    //                             'technicians_id',
    //                             'type',
    //                             'locations_id'];

    if (isset($_POST["selected_id"])) {
        if ($_POST["selected_id"] == "") {
            $_POST["selected_id"] = 0;
        }

        if (isset($_POST['selected_id']) && strpos($_POST['selected_id'], '_') !== false) {
            $eventParts  = explode('_', $_POST['selected_id']);
            $date        = $eventParts[0];
            $ticket_state        = $eventParts[1];
            if (isset($date) && strpos($date, '-') !== false) {
                $dateParts = explode('-', $date);
                $year        = $dateParts[0];
                $month        = $dateParts[1];
            }

            $_POST['id'] = $eventParts[1];
        }
        $add_actiontime_crit = 0;
        if (isset($year) && isset($month) && isset($ticket_state)) {
            if ($ticket_state == "opened") {
                $crit = OPEN_DATE;
            } elseif ($ticket_state == "closed") {
                $crit = CLOSE_DATE;
            } elseif ($ticket_state == "progress") {
                $crit = OPEN_DATE;
            } elseif ($ticket_state == "unplanned") {
                $crit = CLOSE_DATE;
                $add_actiontime_crit = 1;
            }
            if ($ticket_state == "progress") {
                $nbdays      = date("t", mktime(0, 0, 0, $month, 1, $year));
                $date = "$year-$month-$nbdays 23:59";
                addCriteria($crit, 'lessthan', $date, 'AND');
                addCriteria(STATUS, 'equals', 'notold', 'AND');
            } else {
                $date = "$year-$month-01 00:00";
                $nbdays      = date("t", mktime(0, 0, 0, $month, 1, $year));
                addCriteria($crit, 'morethan', $date, 'AND');
                $date = "$year-$month-$nbdays 23:59";
                addCriteria($crit, 'lessthan', $date, 'AND');
            }
        }

        if ($_POST["params"]["locations_id"] > 0) {
            addCriteria(LOCATIONS_ID, 'equals', $_POST["params"]["locations_id"], 'AND');
        }
        if ($_POST["params"]["technician_id"] > 0) {
            addCriteria(TECHNICIAN, 'equals', $_POST["params"]["technician_id"], 'AND');
        }
        if ($_POST["params"]["type"] > 0) {
            addCriteria(TYPE, 'equals', $_POST["params"]["type"], 'AND');
        }

        addCriteria(ENTITIES_ID, (isset($_POST["params"]["sons"]) && $_POST["params"]["sons"] > 0) ? 'under' : 'equals', $_POST["params"]["entities_id"], 'AND');

        groupCriteria(REQUESTER_GROUP, 'equals', $_POST["params"]["requester_groups"]);

        groupCriteria(TECHNICIAN_GROUP, ((isset($_POST["params"]["group_is_recursive"]) && !empty($_POST["params"]["group_is_recursive"])) ? 'under' : 'equals'), $_POST["params"]["technician_group"]);

        if ($add_actiontime_crit == 1) {
            addCriteria(TASK_ACTIONTIME, 'contains', 'NULL', 'AND');
        }

        $link = $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
                Toolbox::append_params($options, "&");
        echo $link;
    }
//   echo __('No informations sended', 'mydashboard');
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Line43") {
    if ($_POST["selected_id"] == "") {
        $_POST["selected_id"] = 0;
    }
    if (isset($_POST['selected_id']) && strpos($_POST['selected_id'], '-') !== false) {
        $dateParts   = explode('-', $_POST['selected_id']);
        $year      = $dateParts[0];
        $month     = $dateParts[1];
    }
    if (isset($month)) {
        $date = "$year-$month-01 00:00";
        $nbdays      = date("t", mktime(0, 0, 0, $month, 1, $year));
        addCriteria(OPEN_DATE, 'morethan', $date, 'AND');
        $date = "$year-$month-$nbdays 23:59";
        addCriteria(OPEN_DATE, 'lessthan', $date, 'AND');
    }
    if ($_POST["params"]["type"] > 0) {
        addCriteria(TYPE, 'equals', $_POST["params"]["type"], 'AND');
    }

    $link = $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
            Toolbox::append_params($options, "&");
    echo $link;
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Line44") {
    if (isset($_POST["selected_id"])) {
        if ($_POST["selected_id"] == "") {
            $_POST["selected_id"] = 0;
        }
        if (isset($_POST['selected_id']) && strpos($_POST['selected_id'], '_') !== false) {
            $eventParts   = explode('_', $_POST['selected_id']);
            $date         = $eventParts[0];
            $ticket_state = $eventParts[1];
            if (isset($date) && strpos($date, '-') !== false) {
                $dateParts = explode('-', $date);
                $year      = $dateParts[0];
                $month     = $dateParts[1];
            }

            $_POST['id'] = $eventParts[1];
        }
        $week_number = $_POST["selected_id"];

        $firstMonday = date("d", strtotime("first monday of january $year"));
        $start       = date("Y-m-d 00:00:00", strtotime("$firstMonday Jan " . $year . " 00:00:00 GMT + " . $week_number . " weeks"));
        $end         = date("Y-m-d 23:59:59", strtotime($start . " + 1 week"));
        $end         = date("Y-m-d 23:59:59", strtotime($end . " - 1 day"));

        addCriteria(OPEN_DATE, 'morethan', $start, 'AND');
        addCriteria(OPEN_DATE, 'lessthan', $end, 'AND');

        if ($_POST["params"]["type"] > 0) {
            addCriteria(TYPE, 'equals', $_POST["params"]["type"], 'AND');
        }

        $link = $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
                Toolbox::append_params($options, "&");
        echo $link;
    }
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Line45") {
    if (isset($_POST["selected_id"])) {
        if ($_POST["selected_id"] == "") {
            $_POST["selected_id"] = 0;
        }
        if (isset($_POST['selected_id']) && strpos($_POST['selected_id'], '-') !== false) {
            $dateParts   = explode('-', $_POST['selected_id']);
            $year      = $dateParts[0];
            $month     = $dateParts[1];
        }
        if (isset($month)) {
            $date = "$year-$month-01 00:00";
            $nbdays      = date("t", mktime(0, 0, 0, $month, 1, $year));
            addCriteria(OPEN_DATE, 'morethan', $date, 'AND');
            $date = "$year-$month-$nbdays 23:59";
            addCriteria(OPEN_DATE, 'lessthan', $date, 'AND');
        }
        addCriteria(VALIDATION_STATS, 'equals', VALIDATION_REFUSED, 'AND');

        if ($_POST["params"]["type"] > 0) {
            addCriteria(TYPE, 'equals', $_POST["params"]["type"], 'AND');
        }

        $link = $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
                Toolbox::append_params($options, "&");
        echo $link;
    }
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Line46") {
    if (isset($_POST["selected_id"])) {
        if ($_POST["selected_id"] == "") {
            $_POST["selected_id"] = 0;
        }
        if (isset($_POST['selected_id']) && strpos($_POST['selected_id'], '-') !== false) {
            $dateParts   = explode('-', $_POST['selected_id']);
            $year      = $dateParts[0];
            $month     = $dateParts[1];
        }
        if (isset($month)) {
            $date = "$year-$month-01 00:00";
            $nbdays      = date("t", mktime(0, 0, 0, $month, 1, $year));
            addCriteria(OPEN_DATE, 'morethan', $date, 'AND');
            $date = "$year-$month-$nbdays 23:59";
            addCriteria(OPEN_DATE, 'lessthan', $date, 'AND');
        }
        addCriteria(NUMBER_OF_PROBLEMS, 'equals', '>0', 'AND');

        if ($_POST["params"]["type"] > 0) {
            addCriteria(TYPE, 'equals', $_POST["params"]["type"], 'AND');
        }

        $link = $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
                Toolbox::append_params($options, "&");
        echo $link;
    }
} elseif (isset($_POST["params"]["widget"])
           && $_POST["params"]["widget"] == "PluginMydashboardReports_Line48") {
    if (isset($_POST["selected_id"])) {
        if ($_POST["selected_id"] == "") {
            $_POST["selected_id"] = 0;
        }
        if (isset($_POST['selected_id']) && strpos($_POST['selected_id'], '-') !== false) {
            $dateParts   = explode('-', $_POST['selected_id']);
            $year      = $dateParts[0];
            $month     = $dateParts[1];
        }
        if (isset($month)) {
            $date = "$year-$month-01 00:00";
            $nbdays      = date("t", mktime(0, 0, 0, $month, 1, $year));
            addCriteria(OPEN_DATE, 'morethan', $date, 'AND');
            $date = "$year-$month-$nbdays 23:59";
            addCriteria(OPEN_DATE, 'lessthan', $date, 'AND');
        }
        addCriteria(STATUS, 'equals', 'notold', 'AND');

        groupCriteria(REQUESTER_GROUP, 'equals', $_POST["params"]["requester_groups"]);

        groupCriteria(TECHNICIAN_GROUP, ((isset($_POST["params"]["group_is_recursive"]) && !empty($_POST["params"]["group_is_recursive"])) ? 'under' : 'equals'), $_POST["params"]["technician_group"]);

        if ($_POST["params"]["type"] > 0) {
            addCriteria(TYPE, 'equals', $_POST["params"]["type"], 'AND');
        }

        $link = $CFG_GLPI["root_doc"] . '/front/ticket.php?is_deleted=0&' .
                Toolbox::append_params($options, "&");
        echo $link;
    }
}
