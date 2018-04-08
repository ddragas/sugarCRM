<?php

array_push($job_strings, 'custom_write_to_log');

function custom_write_to_log()
{

    require_once('include/SugarLogger/LoggerManager.php');
    $GLOBALS['log'] = LoggerManager::getLogger('sugarcrm');
    $GLOBALS['log']->info("I'm a ScheduledTask");

    return true;
}