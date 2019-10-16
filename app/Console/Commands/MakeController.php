<?php

namespace App\Console\Commands;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MakeController extends Base
{
    public function __construct($msg)
    {
        $this->msg = $msg;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('make:controller');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
//        $class = ucfirst(str_ireplace('controller', '', '$class')).'Controller';
//        $this->make('Http/Controllers', $this->msg);
        $output->writeln('<comment>'.'开发中……'.'</comment>');
    }
}
