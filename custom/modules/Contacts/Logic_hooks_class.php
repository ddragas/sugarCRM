<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class Logic_hooks_class
{
    protected $customString = '(this is appended)';

    function before_save_method($bean, $event, $arguments)
    {
        $bean->last_name = $this->check_for_string($bean->last_name);
        return $bean;
    }

    /**
     * checks for custom string and appends if missing
     * @param $name
     * @return string
     */
    private function check_for_string($name){

        if(strpos($name, $this->customString) === false){
            $name = $name . $this->customString;
        }
        return $name;

    }
}