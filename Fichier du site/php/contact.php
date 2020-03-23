<?php
try {

    if ( !empty($_POST["nom"]) && !empty($_POST['email']) && !empty($_POST['message']) ) {

        $bulk = new MongoDB\Driver\BulkWrite;
        $contact = ['_id' => new MongoDB\BSON\ObjectID, 'nom' => htmlspecialchars($_POST["nom"]), 'ip' => htmlspecialchars($_POST["email"]), 'message' => htmlspecialchars($_POST["message"]) ];
        $bulk->insert($contact);
        $connection->executeBulkWrite('StreetNews.Contact', $bulk);
        echo "<div class='remove' id='remove' style='width:100%;padding: 10px;background: #27ae60;border: 0px solid #e74c3c;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;'>
        <span style='color:#FFFFFF'><center>Nous avons bien reçu votre message, nous y répondrons très bientôt !</center></span>
        </div>";

    } else {
        echo "<div class='remove' id='remove' style='width:100%;padding: 10px;background: #c0392b;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;>
        <span style='color:#FFFFFF'><center>Un des champs obligatoires esr vide</center></span>
        </div>";
    } 

} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";    
}