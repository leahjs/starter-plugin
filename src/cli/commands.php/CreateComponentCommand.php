<?php 
namespace ConstructiveCore;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Console\Output\Output;
use Symfony\Component\Console\Input\Input;

use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\File;

$finder = new Finder();

/**
 * Constructive Core commands for WP-CLI
 *
 * @package wp-cli
 * 
 * 
 */

class CreateComponentCommand extends WP_CLI_Command {

    public static function create_component() {
        // retrieve component name from cli
        // create an array of args with the component name transposed into other formats
        // call utils class functions(should this be a private function or called outside of this?)
    }

    // public function configure() 
    // {
    //     $this->setName('createComponent')
    //     ->setDescription('Create a component directory with acf and Service Provider file')
    //     ->addArgument('name', InputArgument::REQUIRED, 'Component Name');
    // }

    // public function getComponentName(InputInterface $input, ) 
    // {
    //     return $input->getArgument('name');
    // }

    // public function execute(InputInterface $input, OutputInterface $output) 
    // {
    //     $message = $input->getArgument('name') . " Component created.";
    //     $output->writeln("<info>{$message}</info>");
    // }


    private function writeToComponentFiles() 
    {
        $files = Finder::create()
        ->in(app_path())
        ->name('*.php')
        ->contains('{replacement-text}');

        foreach ($files as $file) {
            $contents = File::get($file->getRealPath());
            $appended = str_replace('{replacement-text}', ComponentCommand::getComponentName(), $contents);
            File::put($file->getRealPath(), $appended);
        }
    }
}
