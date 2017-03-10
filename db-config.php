<?php
$host = 'localhost';
$username = 'gn_equip_events';
$password = 'zpmu6ptNYZ2D3pCF';
$database = 'gabe_equip_events';
//connect to database
$db = new mysqli( $host, $username, $password, $database );
//if there was a problem connecting, kill the page
if ( $db->connect_errno > 0 ) {
  die( 'Cannot connect to the Database.' . $db->connect_error );
}
//hide notices
error_reporting( E_ALL & ~ E_NOTICE );
/***CONFIDENTIAL global salt for making our passwords stronger.CONFIDENTIAL***/
define('SALT', 'ohsdoh!&*fodhfodjqwpjkojlpo1-o-ok1o-k-lkaplp;;ajlnlqiio');
/***ROOT URL Constant***/
define('ROOT_URL', 'http://localhost/neri_gabe_equip_events');
/***ROOT PATH Constant***/
define('ROOT_PATH', 'C:\xampp\htdocs\neri_gabe_equip_events');
//open session on each page and maintain it
session_start();
