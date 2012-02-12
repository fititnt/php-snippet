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

?>
