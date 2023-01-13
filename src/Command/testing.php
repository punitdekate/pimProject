<?php

namespace App\Command;

use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DataObject;

class testing extends AbstractCommand
{
    protected function configure()
    {
        $this
            ->setName('import:testing')
            ->setDescription('this command imports data');
        // ->addArgument("n", InputArgument::REQUIRED)
// ->addArgument("id", InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        $object = new DataObject\Testing();

        $object->setKey('test20');

        $object->setParentId(7);

        $object->setName("hello its set"); // setting input datatype

        $object->save();

        return 1;
    }
}