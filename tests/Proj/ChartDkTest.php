<?php

namespace App\Proj;

use PHPUnit\Framework\TestCase;
use App\Repository\DigitalKnowledgeRepository;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use App\Entity\DigitalKnowledge;

/**
 * Test cases for class ChartDk.
 */
class ChartDkTest extends TestCase
{
    /**
     * Create an object and check that the object is of the expected class.
     */
    public function testCreateChartDkObject()
    {
        $chart = new ChartDk();
        $this->assertInstanceOf("\App\Proj\ChartDk", $chart);
    }

    /**
     * Create an object and check that it returns labels as array
     */
    public function testIfObjectHasLabels()
    {
        $DkArray = [];
        $Dk = new DigitalKnowledge();
        $Dk->setKnowledge("Kan data");
        $Dk->setSextontjugofyra("20");
        $Dk->setFjugofemtrettiofyra("21");
        $Dk->setTrettiofemfyrtiofyra("22");
        $Dk->setFyrtiofemfemtiofyra("23");
        $Dk->setFemtiofemsextiofyra("24");
        $Dk->setSextiofemsjutiofyra("25");
        $DkArray[] = $Dk;

        $DkRepository = $this->createMock(DigitalKnowledgeRepository::class);
        $DkRepository->expects($this->any())
            ->method('findAll')
            ->willReturn($Dk);
        $chart3 = new ChartDk($DkArray);
        $this->assertIsArray($chart3->getLabels());
    }

    /**
     * Create an object and check that it returns datasets as array
     */
    public function testIfObjectHasDatasets()
    {
        $DkArray = [];
        $Dk = new DigitalKnowledge();
        $Dk->setKnowledge("Kan data");
        $Dk->setSextontjugofyra("20");
        $Dk->setFjugofemtrettiofyra("21");
        $Dk->setTrettiofemfyrtiofyra("22");
        $Dk->setFyrtiofemfemtiofyra("23");
        $Dk->setFemtiofemsextiofyra("24");
        $Dk->setSextiofemsjutiofyra("25");
        $DkArray[] = $Dk;

        $DkRepository = $this->createMock(DigitalKnowledgeRepository::class);
        $DkRepository->expects($this->any())
            ->method('findAll')
            ->willReturn($Dk);
        $chart3 = new ChartDk($DkArray);
        $this->assertIsArray($chart3->getDataset16());
        $this->assertIsArray($chart3->getDataset25());
        $this->assertIsArray($chart3->getDataset35());
        $this->assertIsArray($chart3->getDataset45());
        $this->assertIsArray($chart3->getDataset55());
        $this->assertIsArray($chart3->getDataset65());
    }
}
