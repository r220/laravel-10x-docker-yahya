<?php

$conn = pg_connect("host=dpg-cr5c2fij1k6c7394csug-a.oregon-postgres.render.com port=5432 dbname=yahyadb_ta8l user=root password=tDzW5XB3ck97zpkDkFRlKmp8vEDCPX7A");
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}


// pg_fetch_all($result)[0]["asset"];
