<?php

require __DIR__."/config.php";

//if there is no query string, redirect
if (!array_key_exists("QUERY_STRING", $_SERVER)) {
	header("Location: ".$PIEZO_SITE.$PIEZO_ROOT."index.php?list");
	die();
}

echo var_dump($_SERVER);
echo var_dump($argv);
echo var_dump($_SERVER['argv']);
echo __DIR__;

?>