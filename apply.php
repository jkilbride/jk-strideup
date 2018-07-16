<?php
    echo 'Apply';
    $dbini = parse_url(getenv("DATABASE_URL"));
    $dbini["path"] = ltrim($dbini["path"], "/");
    print_r($dbini);

    $db = new PDO($dbini);

    print_r($db);


?>
<img src="images/apply_Full.png" width="100%"/>