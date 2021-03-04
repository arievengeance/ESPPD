<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

function pre($array)
{
    echo "<pre>";
    print_r($array);

    die();
}