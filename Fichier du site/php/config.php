<?php

$connection = new MongoDB\Driver\Manager("mongodb+srv://CruiseSIde:pUnUaDH6AXdsn0qK@cluster0-xuswj.mongodb.net/test?retryWrites=true");
$query = new MongoDB\Driver\Query([]);

try {

	$recup_config = $connection->executeQuery("StreetNews.Site", $query);
	$sliders = $connection->executeQuery("StreetNews.Sliders", $query);
	$team = $connection->executeQuery("StreetNews.Team", $query);
	$articles = $connection->executeQuery("StreetNews.Articles", $query);
	$infos = current($recup_config->toArray());

} catch (MongoDB\Driver\Exception\Exception $e) {

	$filename = basename(__FILE__);

	echo "The $filename script has experienced an error.\n";
	echo "It failed with the following exception:\n";

	echo "Exception:", $e->getMessage(), "\n";
	echo "In file:", $e->getFile(), "\n";
	echo "On line:", $e->getLine(), "\n";
}