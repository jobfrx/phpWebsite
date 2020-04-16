<?php

define("private_path", dirname(__FILE__));
define("project_path", dirname(private_path));
define("public_path", project_path. "/public");
define("shared_path", private_path. "/shared");

$public_end = strpos($_SERVER["SCRIPT_NAME"], "/public") + 7;
$doc_root = substr($_SERVER["SCRIPT_NAME"], 0, $public_end);
define("WWW_ROOT", $doc_root);

require_once ("functions.php");
require_once ("database.php");

$db = connect();

$db = mysqli_connect(server, user, password, database);







