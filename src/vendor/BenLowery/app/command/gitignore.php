<?php 

/**
 * John - github repo dependency generator for normal people.
 *
 * @author     BenLowery <benloweryweb@gmail.com>
 * @copyright  2015 BenLowery
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 * @version    @0.9
*/

 namespace app\command;
 
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use app\John;

/**
 * gitignore command. Generates a gitignore file
 *
 * @since      Class available since Release 0.9
 */
 
 class gitignore extends Command {
	
	protected function configure()
    {
        $this
            ->setName('gitignore')
            ->setDescription('Generate a .gitignore file for your new project')
				
			->addArgument(
                'type',
                InputArgument::REQUIRED,
                'The type of .gitignore file required'
            )
			
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
		
        $gi = $input->getArgument('type');
		$app = new John();
		echo $app->FetchGi($gi);
		
		
    }
	
 }