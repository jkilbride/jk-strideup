<?php
    
    $dbini = parse_url(getenv("DATABASE_URL"));
    $dbini["path"] = ltrim($dbini["path"], "/");
    echo '<hr />';
    print_r($dbini);
    echo '<hr />';
    //$db = new PDO($dbini);
    $db = new PDO('pgsql:host='+$dbini['host']+';dbname=' + $dbini['path'], $dbini['user'], $dbini['pass']);


    print_r($db);
    echo '<hr />';

    
    $result = $db->query("SELECT lastname FROM Leads");
    print_r($result);

?>
<img src="images/apply_Full.png" width="100%"/>