<?php 
namespace ConstructiveCore;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Console\Output\Output;
use Symfony\Component\Console\Input\Input;

class ComponentCommand extends Command {
    public function configure() 
    {
        $this->setName('createComponent')
        ->setDescription('Create a component directory with acf and Service Provider file')
        ->addArgument('name', InputArgument::REQUIRED, 'Component Name');
    }

    public function getComponentName(InputInterface $input, ) 
    {
        return $input->getArgument('name');
    }

    public function execute(InputInterface $input, OutputInterface $output) 
    {
        $message = $input->getArgument('name') . " Component created.";
        $output->writeln("<info>{$message}</info>");
    }
}