<?php
require 'validate.inc';
$errors= [ ];
if (validateName($_POST, 'surname', $errors))
echo 'Data OK!';
else
var_dump($errors);
?>