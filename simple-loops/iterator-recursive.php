<?php
echo '<pre>';

$data = array('entity' => array(
		'person' => array(
			'table' => 'xpto_person',
			'fields' => array(
				'id',
				'name',
				'age',
				'citi_id'
			),
			'relation' => array(
				'citi_id' => array(
					'city' => 'id',
				)
			)
		),
		'city' => array(
			'table' => 'xpto_city',
			'fields' => array(
				'id',
				'name',
				'state',
			),
			'relation' => null
		)
	)
);

echo "\t1: RecursiveArrayIterator / iterator_to_array, simple:\n";
$rai = new RecursiveArrayIterator($data);
print_r(iterator_to_array($rai));
//Array
//(
//    [entity] => Array
//        (
//            [person] => Array
//                (
//                    [table] => xpto_person
//                    [fields] => Array
//                        (
//                            [0] => id
//                            [1] => name
//                            [2] => age
//                            [3] => citi_id
//                        )
//
//                    [relation] => Array
//                        (
//                            [citi_id] => Array
//                                (
//                                    [city] => id
//                                )
//
//                        )
//
//                )
//
//            [city] => Array
//                (
//                    [table] => xpto_city
//                    [fields] => Array
//                        (
//                            [0] => id
//                            [1] => name
//                            [2] => state
//                        )
//
//                    [relation] => 
//                )
//
//        )
//
//)



echo "\n\n\n";
echo "\t2: RecursiveArrayIterator / RecursiveIteratorIterator / iterator_to_array, simple:\n";
$rai = new RecursiveArrayIterator($data);
$rii = new RecursiveIteratorIterator($rai);
print_r(iterator_to_array($rii, false));
//Array
//(
//    [0] => xpto_person
//    [1] => id
//    [2] => name
//    [3] => age
//    [4] => citi_id
//    [5] => id
//    [6] => xpto_city
//    [7] => id
//    [8] => name
//    [9] => state
//    [10] => 
//)

echo "\n\n\n";
echo "\t3: RecursiveArrayIterator / RecursiveTreeIterator / iterator_to_array, simple:\n";

//For PHP 5.3.8, recursivetreeiterator is already implemented, so next line
//is not need for use RecursiveTreeIterator command
//require_once('../_3rd/php-source/ext/spl/examples/recursivetreeiterator.inc');


$rai = new RecursiveArrayIterator($data);

$rti = new RecursiveTreeIterator($rai);

print_r(iterator_to_array($rti, false));

//Array
//(
//    [0] => \-Array
//    [1] =>   |-Array
//    [2] =>   | |-xpto_person
//    [3] =>   | |-Array
//    [4] =>   | | |-id
//    [5] =>   | | |-name
//    [6] =>   | | |-age
//    [7] =>   | | \-citi_id
//    [8] =>   | \-Array
//    [9] =>   |   \-Array
//    [10] =>   |     \-id
//    [11] =>   \-Array
//    [12] =>     |-xpto_city
//    [13] =>     |-Array
//    [14] =>     | |-id
//    [15] =>     | |-name
//    [16] =>     | \-state
//    [17] =>     \-
//)

?>
