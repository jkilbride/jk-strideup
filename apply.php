<?php
    
    $dbini = parse_url(getenv("DATABASE_URL"));
    $dbini["path"] = ltrim($dbini["path"], "/");
    echo '<hr />';
    print_r($dbini);
    echo '<hr />';
    $db = new PDO($dbini);

    print_r($db);
    echo '<hr />';

    
    $result = $myPDO->query("SELECT lastname FROM Leads");
    print_r($result);

?>
<img src="images/apply_Full.png" width="100%"/>