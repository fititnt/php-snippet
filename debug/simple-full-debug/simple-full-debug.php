<?php

//Example class with debug method
class ExampleClass {
	
	private $privateVar;
	protected $protectedVar;
	public $publicVar;

	/**
	 * 
	 */
	public function __construct() {
		$this->privateVar = array(1=>'a', '2' => 'b');
		$this->protectedVar = array(1=>'a', '2' => 'b');
		$this->publicVar = array(1=>'a', '2' => 'b');
		//...
	}
	
	private function privateMethod(){
		return;
	}
	protected function protectedMethod(){
		return;
	}
	public function publicMethod(){
		return;
	}

	
	/**
	 * Method to debug one class from inside
	 * 
	 * @see github.com/fititnt/php-snippet/tree/master/dump
	 * 
	 * @param array $option Whoe function must work
	 *						$option['method'] = 'default':
	 *							Return simple print_r() inside <pre>
	 *						$option['method'] = 'console':
	 *							Return values on javascript console of browsers
	 *						$option['die'] = 1:
	 *							If excecution must stop after excecution
	 * 
	 * @return Object $this Suport for method chaining
	 */
	public function debug($option = array()) {
		if (!isset($option['method'])) {
			$option['method'] = 'default';
		}
		switch ($option['method']) {
			case 'console':
				$html = array();
				$date = date("Y-m-d h:i:s");
				$html[] = '<script>';
				$html[] = 'console.groupCollapsed("' . __CLASS__ . ':' . $date . '");';
				//@todo: add separed group (fititnt, 2012-02-15 02:03)
				$html[] = 'console.groupCollapsed("$this");';
				$html[] = 'console.dir(eval(' . json_encode($this) . '));';//evail is evil... And?
				$html[] = 'console.groupEnd()';
				$html[] = 'console.groupEnd()';
				$html[] = '</script>';
				echo implode(PHP_EOL, $html);
				break;
			case 'default':
			default:
				echo '<pre>';
				print_r($this);
				echo '</pre>';
				break;
		}
		if (isset($option['die'])) {
			die;
		}
		return $this;
	}

}

//Example of usage

$example = new ExampleClass;

//Console debug. F12 on Google Chome and Firefox with Firebug
$example->debug(array(
	'method' => 'console')
);
//Print normal contend with <pre>
$example->debug(array(
	'method' => 'default')
);
?>
