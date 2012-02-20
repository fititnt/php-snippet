<?php

//
//@todo Not tested yet. Do it later (fititnt, 2012-02-15 02:34)
//@todo Implement more cases of use (fititnt, 2012-02-15 02:34)
//@todo Implement as one function or entire method in this repository or even
//      on github.com/fititnt/php-libraries (fititnt, 2012-02-15 02:36)


/**
 * This function implement the logit of how to use implode and a few ifs to
 * build queries more easy to undestand for complex cases.
 * 
 * ***Still not finished***, so just wait some more days. Ok, maybe not just few
 * days xD
 *
 * @return string 
 */
function buildMyQuerie() {
	$search = 'xpto';

	$whereAND = array();
	$whereOR = array();
	$querywhere = '';
	$where = array();
	$querywhere = '';


	//SELECT
	$querieselect = 'SELECT * ' . PHP_EOL;

	//FROM
	$queriesfrom = 'FROM table_name ' . PHP_EOL;

	//JOIN
	$queriejoin = '';

	//WHERE
	$whereAND[] = "published = 1"; //Default
	$whereAND[] = "id = 1"; //Default
	$whereOR[] = "name = " . $search;
	$whereOR[] = "username = " . $search;
	if (count($whereAND) > 0 || count($whereOR) > 0) {
		$querywhere = 'WHERE ';
		if (count($whereAND) > 0) {
			$querywhere .= '(' . implode(' AND ', $whereAND) . ') AND ';
		}
		if (count($whereOR) > 0) {
			$querywhere .= '(' . implode(' OR ', $whereOR) . ')';
		}
		$querywhere .= PHP_EOL;
	}

	$finalquerie = $querieselect . $queriesfrom . $queriejoin . $querywhere; //...

	return $finalquerie;
}

echo '<pre>';
echo buildMyQuerie();

//SELECT * 
//FROM table_name 
//WHERE (published = 1 AND id = 1) AND (name = xpto OR username = xpto)
?>
