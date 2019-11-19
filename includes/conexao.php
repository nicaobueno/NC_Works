<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "tcc";

// $link = mysqli_init();
// if (!$link) {
//     die('mysqli_init failed');
// }

// if (!mysqli_options($link, MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
//     die('Setting MYSQLI_INIT_COMMAND failed');
// }

// if (!mysqli_options($link, MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
//     die('Setting MYSQLI_OPT_CONNECT_TIMEOUT failed');
// }

// if (!mysqli_real_connect($link, $host, $user, $pass, $dbname)) {
//     die('Connect Error (' . mysqli_connect_errno() . ') '
//             . mysqli_connect_error());
// }

$link = mysqli_connect($host, $user, $pass, $dbname) or die('Connect Error (' . mysqli_connect_errno() . ') '
. mysqli_connect_error());   

//echo 'Success... ' . mysqli_get_host_info($link) . "\n";

if (!mysqli_set_charset($link, "utf8")) {
    //printf("Error loading character set utf8: %s\n", mysqli_error($link));
    exit();
} else {
    //printf("Current character set: %s\n", mysqli_character_set_name($link));
}
mysqli_select_db($link, $dbname);
