<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 31/03/16
 * Time: 19:10
 */
//Select animals
$queryBuilder = $conn->createQueryBuilder();
$queryBuilder
  ->select('id', 'name')
  ->from('animal')
  ->orderBy('name')
;
$executeQuery = $queryBuilder->execute();
$animalArray = $executeQuery->fetchAll(PDO::FETCH_ASSOC);

//Select brands
$queryBuilder
  ->resetQueryParts()
  ->select('id', 'name')
  ->from('brand')
  ->orderBy('name')
;
$executeQuery = $queryBuilder->execute();
$brandArray = $executeQuery->fetchAll(PDO::FETCH_ASSOC);

//Select categories
$queryBuilder
  ->resetQueryParts()
  ->select('id', 'name')
  ->from('category')
  ->orderBy('name')
;
$executeQuery = $queryBuilder->execute();
$categoryArray = $executeQuery->fetchAll(PDO::FETCH_ASSOC);

//Select providers
$queryBuilder
  ->resetQueryParts()
  ->select('id', 'name')
  ->from('provider')
  ->orderBy('name')
;
$executeQuery = $queryBuilder->execute();
$providerArray = $executeQuery->fetchAll(PDO::FETCH_ASSOC);