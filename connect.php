<?php
define("username","test");
define("pass","");
define("host","localhost");
define("db","test");
$mysql = new mysqli (host,username,pass,db);

if ($mysql ->connect_errno){
    echo "Failed to connect to MySQL" . $mysql -> connect_errno;
    exit();
}
else{
    echo "DB connect";
}
?>