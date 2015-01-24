<?php 

/**
 * John - github repo dependency generator for normal people.
 *
 * @author     BenLowery <benloweryweb@gmail.com>
 * @copyright  2015 BenLowery
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 * @version    @0.9
*/

namespace app\SubClass;

use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
 

/**
 *	FileOperator class. Finds, Retrieves, creates and executes files.
 *
 * @since      Class available since Release 0.9
 */
 
 class FileOperator extends  \Symfony\Component\Filesystem\Filesystem {
	
	
	// The url will be pointed at the raw version of the file
	protected $url = "https://raw.githubusercontent.com/";
	
	/*
	*	Returns the license specified by the user
	*
	*	@param string $type
	*
	*	@return boolean
	*/
	public function License($type) {
		
		// Fetch license file from BenLowery/license repo
		$path = $this->url . "BenLowery/license/master/" . $type . ".txt";
		
		// Copy it to the home directory
		$this->TryCopy("LICENSE.txt", $path);
		
		echo "\n Change the placeholders to license it to yourself. \n";
		
	}
	
	/*
	*	Returns the .gitignore file specified by the user
	*
	*	@param string $type
	*
	*	@return boolean
	*/
	public function GitIgnore($type) {
	
		// Fetch gitignore file from github/gitgnore repo
		$path = $this->url . "github/gitignore/master/" . $type . ".gitignore";
		
		// Copy it to the home directory
		$this->TryCopy(".gitignore", $path);
	}
	
	/*
	*	Catches errors for copying files.
	*
	*	@param string $target
	*	@param string $filePath
	*
	*	@return void
	*/
	protected function TryCopy($target, $path) {
		try {
		
			$this->copy($path, $target);
			
		} catch(IOExceptionInterface $e) {
		
			echo " \n The ". $target ." file specified does not exist. \n";
			
			// Uncomment for further debugging
				# echo $e->getMessage();
			
			die;
		}
		echo "\n Created " . $target . " file in folder! \n";
		return true;
	}

 }