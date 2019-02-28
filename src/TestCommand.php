<?php
namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    public function __construct($name = null)
    {
        parent::__construct($name);
    }
    
    protected static $defaultName = 'app:test';

    protected function configure()
    {
        // ...
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $zk = new \Zookeeper('127.0.0.1:2181');

        unset($zk);
        $a = [1,2];
        $a[3];
    }
}