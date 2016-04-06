<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 07/03/16
 * Time: 19:10
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//define page name
$pageName = strtolower(
  isset($_GET['page-name'])
    ? $_GET['page-name']
    : "home"
);
//define page index (used in pagination)
$pageIndex = isset($_GET['page-index']) ? $_GET['page-index'] : 1;

var_dump($pageIndex, $pageName);

//define root dir
$root = dirname(__FILE__);
//define models dir
$modelDir = $root . "/model";
$modelPageDir = $root . "/model/page";
$modelSectionDir = $root . "/model/section";
//define controllers dir
$controllerDir = $root . "/controller";
$controllerPageDir = $root . "/controller/page";
$controllerSectionDir = $root . "/controller/section";
//define views dir
$viewDir = $root . "/view";
$viewPageDir = $root . "/view/page";
$viewSectionDir = $root . "/view/section";

//require configs
require $root . "/_conf.php";

//require dbal
require $root . "/vendor/autoload.php";

//require layout
require $root . "/layout.php";