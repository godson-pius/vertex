<?php
session_start();

// define("HOST", "localhost");
// define("USER", "root");
// define("PASSWORD", "");
// define("DBNAME", "vertex");

define("HOST", "localhost");
define("USER", "anamcrke_vertex");
define("PASSWORD", "vertexpassword");
define("DBNAME", "anamcrke_vertex");

$link = mysqli_connect(HOST, USER, PASSWORD, DBNAME);

require_once "db.php";
require_once "helpers.php";
require_once "actions.php";
require_once "user_func.php";

// define("HOST", "localhost");
// define("USER", "root");
// define("PASSWORD", "");
// define("DBNAME", "chasee");

// $link = mysqli_connect(HOST, USER, PASSWORD, DBNAME);

// require_once "db.php";
// require_once "helpers.php";
// require_once "actions.php";
// require_once "user_func.php";
