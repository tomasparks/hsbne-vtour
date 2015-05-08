<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require 'libs/Smarty.class.php';

$smarty = new Smarty;

//$smarty->force_compile = true;
//$smarty->debugging = true;
$smarty->caching = false;
$smarty->cache_lifetime = 1;

$url = explode("/", $_SERVER['REQUEST_URI']);

$string = file_get_contents("../".str_replace(".xml",".json",end($url)) );
$json_a = json_decode($string,true);
    switch (json_last_error()) {
        case JSON_ERROR_NONE:
            $smarty->assign("json_error","- No errors");
        break;
        case JSON_ERROR_DEPTH:
            $smarty->assign("json_error","Maximum stack depth exceeded");
        break;
        case JSON_ERROR_STATE_MISMATCH:
            $smarty->assign("json_error","Underflow or the modes mismatch");
        break;
        case JSON_ERROR_CTRL_CHAR:
            $smarty->assign("json_error","Unexpected control character found");
        break;
        case JSON_ERROR_SYNTAX:
            $smarty->assign("json_error","Syntax error, malformed JSON");
        break;
        case JSON_ERROR_UTF8:
            $smarty->assign("json_error","Malformed UTF-8 characters, possibly incorrectly encoded");
        break;
        default:
            $smarty->assign("json_error","Unknown error");
        break;
    }

$smarty->assign("dataurl", "..");
$smarty->assign("json_file","../".str_replace(".xml",".json",end($url)));

$smarty->assign("xml_title", $json_a["title"]);
$smarty->assign("nodelist",$json_a["nodes"]);



header('Content-Type: application/xml; charset=utf-8');
$smarty->display('index.tpl');
