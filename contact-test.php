<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h2>POST received!</h2>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
} else {
    echo "<h2>Send a POST request to this file.</h2>";
}
?>
