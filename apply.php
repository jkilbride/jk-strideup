<?php
    echo 'Apply';
    $db = parse_url(getenv("DATABASE_URL"));
    $db["path"] = ltrim($db["path"], "/");
    print_r($db);

?>
<img src="images/apply_Full.png" width="100%"/>