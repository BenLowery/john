<?php 

/**
 * John - github repo dependency generator for normal people.
 *
 * @author     BenLowery <benloweryweb@gmail.com>
 * @copyright  2015 BenLowery
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 * @version    @0.9
*/

namespace app;

use app\Command\license;
use app\Command\gitignore;
use Symfony\Component\Console\Application; 
use app\SubClass\FileOperator;

/**
 *	John class. Generates a response to a command.
 * @since      Class available since Release 0.9
 */
 
 class John {
	
	// name of file operator class
	private $fo;
	
	public function __construct() {
	
		$this->fo = new FileOperator;	
	}
	
	/*
	*	Loads the console commands and tidies up the requirements for the application
	*
	*	@return void
	*/
	public function LoadCommands() {
		
			// Create a new instance for command inputs
			$app = new Application();
			$app->add(new license);
			$app->add(new gitignore);
			$app->run();
		
	}
	
	/*
	*	Gets the license from the - app\SubClass\FileOperator - class
	*
	*	@param string $type
	*
	*	@return void
	*/
	public function FetchLicense($type) {
		$this->fo->License($type);
	}
	
	/*
	*	Gets the .gitignore file from the - app\SubClass\FileOperator - class
	*
	*	@param string $language
	*
	*	@return void
	*/
	public function FetchGi($language) {
		$this->fo->GitIgnore($language);
	}
	

 }