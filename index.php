<?php
require("main.php");
require("templates/template0.php");

// Change this based on what template you choose to use
$TEMPLATE = _get_template();
?>

<!DOCTYPE html><html><head><title>Template OC Gen</title><link href="style/stylesheet.css" type="text/css" rel="stylesheet"></head><body><div id="centered_shit"><h1>RP Template OC Generator</h1><h3>Options</h3><form method="post"><?php echo produce_html_table($TEMPLATE);?><input name="begin_parsing" type="hidden"><input value="Submit" type="submit"></form><h3>Output</h3><div id="code-wrapper"><code><?php echo gen_final_code($TEMPLATE);?></code></div></center></body></html>