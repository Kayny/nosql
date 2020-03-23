<?php
try {
    
    $filternew = [ 'id' => $article_id ]; 
    $querynew = new MongoDB\Driver\Query($filternew);     
    
    $resnew = $connection->executeQuery("StreetNews.Articles", $querynew);
    
    $new = current($resnew->toArray());
    
    
} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";    
}