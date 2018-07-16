<?php
    include('dbHelper.php');
    
    # Here we establish the connection. Yes, that's all.
    $pg_conn = pg_connect(pg_connection_string_from_database_url());
    # Now let's use the connection for something silly just to prove it works:
    $result = pg_query($pg_conn, "SELECT LastName FROM Leads WHERE schemaname='public'");


?>
<img src="images/apply_Full.png" width="100%"/>