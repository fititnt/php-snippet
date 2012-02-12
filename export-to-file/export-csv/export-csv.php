<?php

/**
 * @todo This script was changed and still not tested. Later I will test and fix
 * it when have time to do it (fititnt, 2012-02-12 15:22)
 */

/******************************    Change me   ********************************/

//Database configuration
$host = 'localhost';
$db = 'db_name';//db_name
$user = 'root';//MySQL User
$password = '';//MySQL User password
$query = 'SELECT *  FROM table_name';//Query to take data

//Output CSV Options
$line_terminated = "\n";
$field_terminated = ",";
$enclosed = '"';
$escaped = '\\';
$export_schema = '';

/******************************    Change me   ********************************/

$myquery = mysql_query($query);
$fields_cnt = mysql_num_fields($myquery);
$time = date('m.d.y-H.i.s');
$filenameoutput = "{$table}_{$time}";

for ($i = 0; $i < $fields_cnt; $i++) {
	$l = $enclosed . str_replace($enclosed, $escaped . $enclosed, 
			stripslashes(mysql_field_name($myquery, $i))) . $enclosed;
	$export_schema .= $l;
	$export_schema .= $field_terminated;
}
$output = trim(substr($export_schema, 0, -1));
$output .= $line_terminated;
while ($row = mysql_fetch_array($myquery)) {
	$export_schema = '';
	for ($j = 0; $j < $fields_cnt; $j++) {
		if ($row[$j] == '0' || $row[$j] != '') {
			if ($enclosed == '') {
				$export_schema .= $row[$j];
			} else {
				$export_schema .= $enclosed .
						str_replace($enclosed, $escaped . $enclosed, $row[$j]) 
						. $enclosed;
			}
		} else {
			$export_schema .= '';
		}

		if ($j < $fields_cnt - 1) {
			$export_schema .= $field_terminated;
		}
	}
	$output .= $export_schema;
	$output .= $line_terminated;
}
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Length: " . strlen($output));
header("Content-type: application/csv");
header("Content-Disposition: attachment; filename={$filenameoutput}.csv");
echo $output;
exit;
?>
