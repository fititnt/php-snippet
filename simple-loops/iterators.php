<?php

echo '<pre>';
$data = array(1 => 'a', 2 => 'b', 3 => 'c', 4 => 'd', 5 => 'e', 6 => 'f');


echo "1: ArrayIterator foeach Loop, simple:\n";
$iterator = new ArrayIterator($data);
foreach ($iterator AS $value) {
	echo "\n\t" . $value;
}
echo "\n\n\n";
//	a
//	b
//	c
//	e
//	f
//	g


echo "2: ArrayIterator foeach Loop:\n";
$it = new ArrayIterator($data);

foreach ($it AS $key => $value) {
	echo "\n\t";
	echo '$it->key(): ' . $it->key();
	echo ', $it->current(): ' . $it->current();
	echo ', $it->valid(): ' . $it->valid();
	echo ', $key: ' . $key;
	echo ', $value: ' . $value;
}
echo "\n\n\n";
//	$it->key(): 1, $it->current(): a, $it->valid(): 1, $key: 1, $value: a
//	$it->key(): 2, $it->current(): b, $it->valid(): 1, $key: 2, $value: b
//	$it->key(): 3, $it->current(): c, $it->valid(): 1, $key: 3, $value: c
//	$it->key(): 4, $it->current(): d, $it->valid(): 1, $key: 4, $value: d
//	$it->key(): 5, $it->current(): e, $it->valid(): 1, $key: 5, $value: e
//	$it->key(): 6, $it->current(): f, $it->valid(): 1, $key: 6, $value: f


echo "3: ArrayIterator Loop, \$it->key():\n";
$it = new ArrayIterator($data);

foreach ($it AS $key => $value) {

	if ($it->key() === 2) { //2 =>'b'
		$it->next(); //3 =>'c'
	}

	echo "\n\t";
	echo '$it->key(): ' . $it->key();
	echo ', $it->current(): ' . $it->current();
	echo ', $it->valid(): ' . $it->valid();
	echo ', $key: ' . $key;
	echo ', $value: ' . $value;
}
echo "\n\n\n";
//	$it->key(): 1, $it->current(): a, $it->valid(): 1, $key: 1, $value: a
//	$it->key(): 3, $it->current(): c, $it->valid(): 1, $key: 2, $value: b
//	$it->key(): 4, $it->current(): d, $it->valid(): 1, $key: 4, $value: d
//	$it->key(): 5, $it->current(): e, $it->valid(): 1, $key: 5, $value: e
//	$it->key(): 6, $it->current(): f, $it->valid(): 1, $key: 6, $value: f



echo "4: ArrayIterator while Loop:\n";
$it = new ArrayIterator($data);
while ($it->valid()) {

	echo "\n\t";
	echo '$it->key(): ' . $it->key();
	echo ', $it->current(): ' . $it->current();
	echo ', $it->valid(): ' . $it->valid();

	$it->next();


	if ($it->key() === 6 && !isset($lastloop)) { //6 => 'f'
		//Restart loop
		$it->rewind(); //5 => 'e'
		$lastloop = true;
	}
}
//	$it->key(): 1, $it->current(): a, $it->valid(): 1
//	$it->key(): 2, $it->current(): b, $it->valid(): 1
//	$it->key(): 3, $it->current(): c, $it->valid(): 1
//	$it->key(): 4, $it->current(): d, $it->valid(): 1
//	$it->key(): 5, $it->current(): e, $it->valid(): 1
//	$it->key(): 1, $it->current(): a, $it->valid(): 1
//	$it->key(): 2, $it->current(): b, $it->valid(): 1
//	$it->key(): 3, $it->current(): c, $it->valid(): 1
//	$it->key(): 4, $it->current(): d, $it->valid(): 1
//	$it->key(): 5, $it->current(): e, $it->valid(): 1
//	$it->key(): 6, $it->current(): f, $it->valid(): 1
?>
