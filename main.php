<?php

error_reporting(-1);

$html_json_rules = array(
	"\t" => "&nbsp;&nbsp;&nbsp;&nbsp;",
	"\n" => "<br>"
);

function JSON_To_HTML($string) {
	global $html_json_rules;

	$output = $string;

	foreach ($html_json_rules as $key => $value) {
		$output = str_replace($key, $value, $output);
	}

	return $output;
}

function produce_json_from_post($template_data, $data/*$_POST data*/) {
	$json_code = JSON_To_HTML("{\n\t\"character\": [\n");

	foreach ($template_data as $key => $value) {
		$json_code .= JSON_To_HTML("\t\t") . $key . ": \"" . $data[$key] . JSON_To_HTML("\",\n");
	}

	return $json_code . JSON_To_HTML("\n\t]\n}");
}

function oneline_html_input($key, $value) {
	return sprintf("<tr><td>%s</td><td><input type=\"text\" name=\"%s\"></td></tr>", $value, $key);
}

function multiline_html_input($key, $value) {
	return sprintf("<tr><td>%s</td><td><textarea type=\"text\" name=\"%s\"></textarea></td></tr>", $value[0], $key);
}

function produce_html_table($template_data) {
	$html_code = "<table>";

	foreach ($template_data as $key => $value) {
		if (is_array($value)) {
			/* Attributes amongst attributes. woah, that's like attributes squared! */

			if (sizeof($value) != 2) {
				throw new Exception("Attribute " . $key . " not correctly formatted! [requires 2 attributes]");
			}

			$name = $value[0];
			$multiline = $value[1];

			if ($multiline) {
				$html_code .= multiline_html_input($key, $value);
			} else {
				$html_code .= oneline_html_input($key, $value);
			}
		} else {
			$html_code .= oneline_html_input($key, $value);
		}
	}

	return $html_code . "</table>";
}



function gen_final_code($template_data) {
	if (isset($_POST["begin_parsing"])) {
		return produce_json_from_post($template_data, $_POST);
	} else {
		return 
		JSON_To_HTML(
"{
\t\"Character\": []
}"); // mega-scuffed.co.uk copyright 2020 
	}
}

?>