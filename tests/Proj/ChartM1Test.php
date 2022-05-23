<?php

namespace App\Proj;

use PHPUnit\Framework\TestCase;
use App\Repository\Mobbning1Repository;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use App\Entity\Mobbning1;

/**
 * Test cases for class ChartM1.
 */
class ChartM1Test extends TestCase
{
    /**
     * Create an object and check that the object is of the expected class.
     */
    public function testCreateChartM1Object()
    {
        $chart = new ChartM1();
        $this->assertInstanceOf("\App\Proj\ChartM1", $chart);
    }

    /**
     * Create an object and check that it returns labels as array
     */
    public function testIfObjectHasLabels()
    {
        $M1Array = [];
        $M1 = new Mobbning1();
        $M1->setYear("2022");
        $M1->setFlickor("20");
        $M1->setPojkar("21");
        $M1Array[] = $M1;

        $M1Repository = $this->createMock(Mobbning1Repository::class);
        $M1Repository->expects($this->any())
            ->method('findAll')
            ->willReturn($M1);
        $chart3 = new ChartM1($M1Array);
        $this->assertIsArray($chart3->getLabels());
    }

    /**
     * Create an object and check that it returns labels as array
     */
    public function testIfObjectHasDatasets()
    {
        $M1Array = [];
        $M1 = new Mobbning1();
        $M1->setYear("2022");
        $M1->setFlickor("20");
        $M1->setPojkar("21");
        $M1Array[] = $M1;

        $M1Repository = $this->createMock(Mobbning1Repository::class);
        $M1Repository->expects($this->any())
            ->method('findAll')
            ->willReturn($M1);
        $chart3 = new ChartM1($M1Array);
        $this->assertIsArray($chart3->getDatasetsF());
        $this->assertIsArray($chart3->getDatasetsP());
    }
}
