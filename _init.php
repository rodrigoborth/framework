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

//Set environment
define('environment', 1); // 1=dev, 2=stage, 3=production
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

switch(environment){
  case 1:
    $htmlRoot = '/framework/';
  break;

  case 2:
    $htmlRoot = '/stage/';
  break;

  case 3:
    $htmlRoot = '/';
  break;

  default:
    $htmlRoot = '/';
  break;
}
//set models dir
$modelDir = $root . "/model";
$modelPageDir = $root . "/model/page";
$modelSectionDir = $root . "/model/section";
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

//require dbal
require $root . "/vendor/autoload.php";

//require layout
require $root . "/layout.php";