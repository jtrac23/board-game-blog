<?php
/*
*File: settings.php
*This file is the DB settings for the website's blog
*DB is currently attached to jtracyportfolio
*This is for the USER != ADMIN
*Updated 3/2/17
*/

//Connection Vars
$hostname_jtracypo_bgp = "localhost";
$database_jtracypo_bgp = "jtracypo_board_game_project";
$username_jtracypo_bgp = "jtracypo_user";
$password_jtracypo_bgp = "Us632676#";

//logs the user in as USER
$link = mysqli_connect($hostname_jtracypo_bgp, $username_jtracypo_bgp, $password_jtracypo_bgp, $database_jtracypo_bgp);

//IF $link returns false
if(!$link){
    die('Could not connect to the database: ' . mysqli_error($link));
}
//echo 'Connection OK -USER LOGGED IN- FOR DEBUGING';
date_default_timezone_set('America/Chicago');

?>