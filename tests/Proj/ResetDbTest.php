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

    /**
     * Test if data is set to Mobbning1
     */
    public function testIfDataIsSetToEntityMobbning1()
    {
        $filePath = 'data/mobbning1.csv';
        $resetDb = new ResetDb();
        $handle = fopen($filePath, "r");
        $row = 1;
        $entity;
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

    /**
     * Test if data is set to mobbning 2
     */
    public function testIfDataIsSetToEntityMobbning2()
    {
        $filePath = 'data/mobbning2.csv';
        $resetDb = new ResetDb();
        $handle = fopen($filePath, "r");
        $row = 1;
        $entity;
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

    /**
     * Test if data is set to digital knowledge
     */
    public function testIfDataIsSetToEntityDigitalKnowledge()
    {
        $filePath = 'data/digitalknowledge.csv';
        $resetDb = new ResetDb();
        $handle = fopen($filePath, "r");
        $row = 1;
        $entity;
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
