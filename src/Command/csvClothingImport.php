<?php
 
namespace App\Command;
use Pimcore\Console\AbstractCommand;
use Pimcore\Model\DataObject\Clothing;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
 
class csvClothingImport extends AbstractCommand
{
protected function configure()
 {
$this
 ->setName('import:clothsInsertViaCSV')
 ->setDescription('this command imports data');
 }
 
protected function execute(InputInterface $input, OutputInterface $output): int
{
    $path = 'public/CSV/electronic.csv';
    $file = file($path);
        $x = 1;
        foreach ($file as $k) {
            $csv[] = explode(',', $k);
        }
        for($i=0 ; $i<2 ; $i++)
        {
            $object = new Clothing();
            $object->setKey('cloth2'.$i);
            $object->setParentId(13);

            $ProductId=$csv[$x][0];
            $ProductName=$csv[$x][1];
            $Description=$csv[$x][2];
            $Price=$csv[$x][3];
            $Gender=$csv[$x][4];
            // $ProductColor=$csv[$x][5];
            $ManufaturingCompany=$csv[$x][6];
            // $ManufaturingDate=$csv[$x][7];
            // $ExpiryDate=$csv[$x][8];

            $object->setProductId($ProductId);
            $object->setProductName($ProductName);
            $object->setDescription($Description);
            $object->setPrice($Price);
            $object->setGender($Gender);
            // $object->setProductColor($ProductColor);
            $object->setManufacturingCompany($ManufaturingCompany);
            // $object->setManufacturingDate($ManufaturingDate);
            $object->save();
            $x = $x + 1;
        }  
    return 1;
 }
}