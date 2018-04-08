<?php
/**
 * count of words in a string
 * @param $string
 * @return int
 */
function wordCount($string)
{
    try {
        $string = preg_replace('/\s+/', ' ', trim($string));
        $words = explode(" ", $string);
        $count = count($words);
    } catch (Exception $e) {
        $count = 0;
    }
    return (int)$count;
}