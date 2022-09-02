<?php

function readAllProducts() {
  $fileName = '../main/products.csv';
  // Read all products line by lines
  $open = fopen($fileName, 'r');
  $first = fgetcsv($open);
  $products = [];
  while ($row = fgetcsv($open)) {
    $i = 0;
    $product = [];
    foreach ($first as $colName) {
      $product[$colName] =  $row[$i];
      $i++;
    }
    $products[] = $product;
  }
  return $products;
}

function readFeaturedProducts() {
  //This function read all the featured store lines by lines
  $fileName = '../main/products.csv';
  $open = fopen($fileName, 'r');
  $first = fgetcsv($open);
  $products = [];
  while ($row = fgetcsv($open)) {
    $i = 0;
    $product = [];
    foreach ($first as $colName) {
      $product[$colName] =  $row[$i];
      $i++;
    }
      $products[] = $product;
  }
  return $products;
}

