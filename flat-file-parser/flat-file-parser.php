<?php

require_once('../_3rd/php-source/ext/spl/examples/dbareader.inc');
$dba = new DbaReader('../_data/en-GB.com_search.ini', 'inifile');
print_r(iterator_to_array($dba,true));

//Fatal error: Call to undefined function dba_open() in (..)\dbareader.inc on line 31
//@todo solve it later (fititnt, 2012-02-13 02:27)