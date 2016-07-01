<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 07/03/16
 * Time: 19:10
 */
header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//set page name
$pageName = strtolower(
  isset($_GET['page-name'])
    ? $_GET['page-name']
    : "home"
);
//set page index (used in pagination)
$pageIndex = isset($_GET['page-index']) ? $_GET['page-index'] : 1;

//set root dir
$root = dirname(__FILE__);

//set controllers dir
$controllerDir = $root . "/controller";
$controllerPageDir = $root . "/controller/page";
$controllerSectionDir = $root . "/controller/section";
//set views dir
$viewDir = $root . "/view";
$viewPageDir = $root . "/view/page";
$viewSectionDir = $root . "/view/section";

//require configs
require $root . "/_conf.php";

//require layout
require $root . "/layout.php";