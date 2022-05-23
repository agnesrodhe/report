<?php

namespace App\Proj;

use PHPUnit\Framework\TestCase;
use App\Repository\Mobbning2Repository;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use App\Entity\Mobbning2;

/**
 * Test cases for class ChartM2.
 */
class ChartM2Test extends TestCase
{
    /**
     * Create an object and check that the object is of the expected class.
     */
    public function testCreateChartM2Object()
    {
        $chart = new ChartM2();
        $this->assertInstanceOf("\App\Proj\ChartM2", $chart);
    }

    /**
     * Create an object and check that it returns labels as array
     */
    public function testIfObjectHasLabels()
    {
        $M2Array = [];
        $M2 = new Mobbning2();
        $M2->setYear("2022");
        $M2->setFlickor("20");
        $M2->setPojkar("21");
        $M2Array[] = $M2;

        $M2Repository = $this->createMock(Mobbning2Repository::class);
        $M2Repository->expects($this->any())
            ->method('findAll')
            ->willReturn($M2);
        $chart3 = new ChartM2($M2Array);
        $this->assertIsArray($chart3->getLabels());
    }

    /**
     * Create an object and check that it returns labels as array
     */
    public function testIfObjectHasDatasets()
    {
        $M2Array = [];
        $M2 = new Mobbning2();
        $M2->setYear("2022");
        $M2->setFlickor("20");
        $M2->setPojkar("21");
        $M2Array[] = $M2;

        $M2Repository = $this->createMock(Mobbning2Repository::class);
        $M2Repository->expects($this->any())
            ->method('findAll')
            ->willReturn($M2);
        $chart3 = new ChartM2($M2Array);
        $this->assertIsArray($chart3->getDatasetsF());
        $this->assertIsArray($chart3->getDatasetsP());
    }
}
