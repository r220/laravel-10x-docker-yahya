<?php

$conn = pg_connect("host=dpg-cqfs4j9u0jms7387eiu0-a.oregon-postgres.render.com port=5432 dbname=yahyadb user=root password=6RHocZ4oxHzeJBPLQoCd5u5G0IwZRjM2");
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}


// pg_fetch_all($result)[0]["asset"];
