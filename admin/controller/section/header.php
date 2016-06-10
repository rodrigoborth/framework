<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 31/03/16
 * Time: 19:31
 */
$queryBuilder = $conn->createQueryBuilder();

$queryBuilder
  ->select('id', 'name', 'link')
  ->from('page')
  ->where('active = :active')
  ->setParameter('active', 1)
;

$executeQuery = $queryBuilder->execute();
$pageArray = $executeQuery->fetchAll(PDO::FETCH_ASSOC);

foreach($pageArray as $index=>$pageItem) {
  if($pageItem['link']==$pageName)
    $pageArray[$index]['class']='active';
  else
    $pageArray[$index]['class']='';
}