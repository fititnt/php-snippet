<?php

echo '<pre>';

$sxi = new SimpleXMLIterator(file_get_contents('../_data/manifest-content.xml'));


echo "\t\t\t1: SimpleXMLIterator / iterator_to_array, simple:\n\n";
$rii = new RecursiveIteratorIterator($sxi);
print_r(iterator_to_array($sxi));

//Array
//(
//    [name] => SimpleXMLIterator Object
//        (
//            [0] => com_content
//        )
//
//    [author] => SimpleXMLIterator Object
//        (
//            [0] => Joomla! Project
//        )
//
//    [creationDate] => SimpleXMLIterator Object
//        (
//            [0] => April 2006
//        )
//
//    [copyright] => SimpleXMLIterator Object
//        (
//            [0] => (C) 2005 - 2012 Open Source Matters. All rights reserved.	
//        )
//
//    [license] => SimpleXMLIterator Object
//        (
//            [0] => GNU General Public License version 2 or later; see	LICENSE.txt
//        )
//
//    [authorEmail] => SimpleXMLIterator Object
//        (
//            [0] => admin@joomla.org
//        )
//
//    [authorUrl] => SimpleXMLIterator Object
//        (
//            [0] => www.joomla.org
//        )
//
//    [version] => SimpleXMLIterator Object
//        (
//            [0] => 2.5.0
//        )
//
//    [description] => SimpleXMLIterator Object
//        (
//            [0] => COM_CONTENT_XML_DESCRIPTION
//        )
//
//    [files] => SimpleXMLIterator Object
//        (
//            [@attributes] => Array
//                (
//                    [folder] => site
//                )
//
//            [filename] => Array
//                (
//                    [0] => content.php
//                    [1] => controller.php
//                    [2] => index.html
//                    [3] => router.php
//                )
//
//            [folder] => Array
//                (
//                    [0] => helpers
//                    [1] => models
//                )
//
//        )
//
//    [languages] => SimpleXMLIterator Object
//        (
//            [@attributes] => Array
//                (
//                    [folder] => site
//                )
//
//            [language] => language/en-GB.com_content.ini
//		
//        )
//
//    [administration] => SimpleXMLIterator Object
//        (
//            [files] => SimpleXMLIterator Object
//                (
//                    [@attributes] => Array
//                        (
//                            [folder] => admin
//                        )
//
//                    [filename] => Array
//                        (
//                            [0] => access.xml
//                            [1] => config.xml
//                            [2] => content.php
//                            [3] => controller.php
//                            [4] => index.html
//                        )
//
//                    [folder] => Array
//                        (
//                            [0] => controllers
//                            [1] => elements
//                            [2] => helpers
//                            [3] => models
//                            [4] => tables
//                            [5] => views
//                        )
//
//                )
//
//            [languages] => SimpleXMLIterator Object
//                (
//                    [@attributes] => Array
//                        (
//                            [folder] => admin
//                        )
//
//                    [language] => language/en-GB.com_content.ini
//			
//                )
//
//        )
//
//)



echo "\n\n\n";
echo "\t\t\t2: SimpleXMLIterator / RecursiveIteratorIterator / iterator_to_array, simple:\n\n";
print_r(iterator_to_array($rii, false));

//Array
//(
//    [0] => SimpleXMLIterator Object
//        (
//            [0] => com_content
//        )
//
//    [1] => SimpleXMLIterator Object
//        (
//            [0] => Joomla! Project
//        )
//
//    [2] => SimpleXMLIterator Object
//        (
//            [0] => April 2006
//        )
//
//    [3] => SimpleXMLIterator Object
//        (
//            [0] => (C) 2005 - 2012 Open Source Matters. All rights reserved.	
//        )
//
//    [4] => SimpleXMLIterator Object
//        (
//            [0] => GNU General Public License version 2 or later; see	LICENSE.txt
//        )
//
//    [5] => SimpleXMLIterator Object
//        (
//            [0] => admin@joomla.org
//        )
//
//    [6] => SimpleXMLIterator Object
//        (
//            [0] => www.joomla.org
//        )
//
//    [7] => SimpleXMLIterator Object
//        (
//            [0] => 2.5.0
//        )
//
//    [8] => SimpleXMLIterator Object
//        (
//            [0] => COM_CONTENT_XML_DESCRIPTION
//        )
//
//    [9] => SimpleXMLIterator Object
//        (
//            [0] => content.php
//        )
//
//    [10] => SimpleXMLIterator Object
//        (
//            [0] => controller.php
//        )
//
//    [11] => SimpleXMLIterator Object
//        (
//            [0] => index.html
//        )
//
//    [12] => SimpleXMLIterator Object
//        (
//            [0] => router.php
//        )
//
//    [13] => SimpleXMLIterator Object
//        (
//            [0] => helpers
//        )
//
//    [14] => SimpleXMLIterator Object
//        (
//            [0] => models
//        )
//
//    [15] => SimpleXMLIterator Object
//        (
//            [@attributes] => Array
//                (
//                    [tag] => en-GB
//                )
//
//            [0] => language/en-GB.com_content.ini
//		
//        )
//
//    [16] => SimpleXMLIterator Object
//        (
//            [0] => access.xml
//        )
//
//    [17] => SimpleXMLIterator Object
//        (
//            [0] => config.xml
//        )
//
//    [18] => SimpleXMLIterator Object
//        (
//            [0] => content.php
//        )
//
//    [19] => SimpleXMLIterator Object
//        (
//            [0] => controller.php
//        )
//
//    [20] => SimpleXMLIterator Object
//        (
//            [0] => index.html
//        )
//
//    [21] => SimpleXMLIterator Object
//        (
//            [0] => controllers
//        )
//
//    [22] => SimpleXMLIterator Object
//        (
//            [0] => elements
//        )
//
//    [23] => SimpleXMLIterator Object
//        (
//            [0] => helpers
//        )
//
//    [24] => SimpleXMLIterator Object
//        (
//            [0] => models
//        )
//
//    [25] => SimpleXMLIterator Object
//        (
//            [0] => tables
//        )
//
//    [26] => SimpleXMLIterator Object
//        (
//            [0] => views
//        )
//
//    [27] => SimpleXMLIterator Object
//        (
//            [@attributes] => Array
//                (
//                    [tag] => en-GB
//                )
//
//            [0] => language/en-GB.com_content.ini
//			
//        )
//
//)



//foreach ($it as $key => $node) {
//	echo $key . "\n";
//	if ($it->hasChildren()) {
//		foreach ($it->getChildren() as $element => $value) {
//			echo "\t" . $element . ":" . $value . "\n";
//		}
//	}
//}
?>
