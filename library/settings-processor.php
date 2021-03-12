<?php
//sets new settings to json files
include_once($_SERVER['DOCUMENT_ROOT'] . '/library/functions.php');
$fileName = $_POST['fileName'];
$oldSettings = (array)json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/settings/data/' . $fileName));
$newSettings = json_decode($_POST['settings']);
$oldSettings['settings'] = $newSettings;

file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/settings/data/' . $fileName,json_encode($oldSettings));

?>