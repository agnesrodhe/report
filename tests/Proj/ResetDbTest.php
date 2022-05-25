<?php

namespace App\Proj;

use PHPUnit\Framework\TestCase;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\DigitalKnowledge;
use App\Repository\DigitalKnowledgeRepository;
/**
 * Test cases for class ResetDb.
 */
class ResetDbTest extends TestCase
{
    /**
     * Create an object and check that the object is of the expected class.
     */
    public function testCreateResetDbObject()
    {
        $resetDb = new ResetDb();
        $this->assertInstanceOf("\App\Proj\ResetDb", $resetDb);
    }

    public function testIfDataIsSetToEntityMobbning1(){
        $filePath = 'var/mobbning1.csv';
        $resetDb = new ResetDb();
        $handle = fopen($filePath, "r");
        $row = 1;
        while (($data = fgetcsv($handle)) !== false) {
            if ($row == 1) {
                $row++;
                continue;
            };
            $row++;
            $entity = $resetDb->addData($filePath, $data);
        };
        fclose($handle);
        $this->assertInstanceOf("\App\Entity\Mobbning1", $entity);
        $this->assertEquals($entity->getFlickor(), "19,9");
    }

    public function testIfDataIsSetToEntityMobbning2(){
        $filePath = 'var/mobbning2.csv';
        $resetDb = new ResetDb();
        $handle = fopen($filePath, "r");
        $row = 1;
        while (($data = fgetcsv($handle)) !== false) {
            if ($row == 1) {
                $row++;
                continue;
            };
            $row++;
            $entity = $resetDb->addData($filePath, $data);
        };
        fclose($handle);
        $this->assertInstanceOf("\App\Entity\Mobbning2", $entity);
        $this->assertEquals($entity->getFlickor(), "7,9");
    }

    public function testIfDataIsSetToEntityDigitalKnowledge(){
        $filePath = 'var/digitalknowledge.csv';
        $resetDb = new ResetDb();
        $handle = fopen($filePath, "r");
        $row = 1;
        while (($data = fgetcsv($handle)) !== false) {
            if ($row == 1) {
                $row++;
                continue;
            };
            $row++;
            $entity = $resetDb->addData($filePath, $data);
        };
        fclose($handle);
        $this->assertInstanceOf("\App\Entity\DigitalKnowledge", $entity);
        $this->assertEquals($entity->getYear(), "2017");
    }
    
}