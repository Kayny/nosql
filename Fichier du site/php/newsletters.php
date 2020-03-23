<?php
try {

    if ( !empty( $_POST["email"] ) ) {

        $bulk = new MongoDB\Driver\BulkWrite;
        $newsletters = ['_id' => new MongoDB\BSON\ObjectID, 'email' => htmlspecialchars($_POST["email"])];
        $bulk->insert($newsletters);
        $connection->executeBulkWrite('StreetNews.Newsletters', $bulk);
        echo "<div class='remove' id='remove' style='width:100%;padding: 10px;background: #27ae60;border: 0px solid #e74c3c;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;'>
        <span style='color:#FFFFFF'><center>Vous vous êtes bien abonné à notre newsletters !</center></span>
        </div>";

    } else {
        echo "<div class='remove' id='remove' style='width:100%;padding: 10px;background: #c0392b;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;>
        <span style='color:#FFFFFF'><center>Merci de remplir le champs '<b>email</b>'</center></span>
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