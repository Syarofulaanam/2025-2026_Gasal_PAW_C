<?php
require "validate.inc";

$errors = [];
$result = "";

if (isset($_POST['submit'])) {
    if (validateName($_POST, 'surname', $errors)) {
        $name = htmlspecialchars($_POST['surname']);
        $result = "'Form submitted successfully with no errors'";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
</head>
<body>

<?php
if (!empty($errors)) {
    foreach ($errors as $err) {
        echo "$err<br>";
    }
    echo "<br>";
}

if ($result == "") {
    include "form.inc";
} else {
    echo $result;
}
?>

</body>
</html>