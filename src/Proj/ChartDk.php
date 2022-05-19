<?php

/**
 * This file contains the class ChartDk and is written by me, Agnes Rodhe.
 */

namespace App\Proj;

use App\Repository\Mobbning1Repository;

/**
 * The class ChartDk represents a chart with data from the database-table digital_knowledge
 */
class ChartDk
{
    /**
     * @var array The labels of the chart
     */
    private $labels = [];

    /**
     * @var array The data from age 16-24
     */
    private $dataset16 = [];

    /**
     * @var array The data from age 25-34
     */
    private $dataset25 = [];

    /**
     * @var array The data from age 35-44
     */
    private $dataset35 = [];

    /**
     * @var array The data from age 45-54
     */
    private $dataset45 = [];
    
    /**
     * @var array The data from age 55-64
     */
    private $dataset55 = [];
    
    /**
     * @var array The data from age 65-74
     */
    private $dataset65 = [];

    /**
     * @param array $repo       The data as an array
     */
    public function __construct(array $repo)
    {
        foreach ($repo as $data) {
            $this->labels[] = $data->getKnowledge();
            $this->dataset16[] = (float) $data->getSextontjugofyra();
            $this->dataset25[] = (float) $data->getFjugofemtrettiofyra();
            $this->dataset35[] = (float) $data->getTrettiofemfyrtiofyra();
            $this->dataset45[] = (float) $data->getFyrtiofemfemtiofyra();
            $this->dataset55[] = (float) $data->getFemtiofemsextiofyra();
            $this->dataset65[] = (float) $data->getSextiofemsjutiofyra();
        }
    }

    /**
     * @param $chart        The chart that the data will be connected with 
     * 
     * This function set the data to the chart created in the controller
     */
    public function setChart($chart)
    {
        $chart->setData([
            'labels' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
            'datasets' => [
                [
                    'label' => '16-24 år',
                    'backgroundColor' => '#FA8355',
                    'borderColor' => '#FA8355',
                    'data' => $this->dataset16,
                ],
                [
                    'label' => '25-34 år',
                    'backgroundColor' => '#9AFA61',
                    'borderColor' => '#9AFA61',
                    'data' => $this->dataset25,
                ],
                [
                    'label' => '35-44 år',
                    'backgroundColor' => '#FB4A4F',
                    'borderColor' => '#FB4A4F',
                    'data' => $this->dataset35,
                ],
                [
                    'label' => '45-54 år',
                    'backgroundColor' => '#2FFAD8',
                    'borderColor' => '#2FFAD8',
                    'data' => $this->dataset45,
                ],
                [
                    'label' => '55-64 år',
                    'backgroundColor' => '#F63CFA',
                    'borderColor' => '#F63CFA',
                    'data' => $this->dataset55,
                ],
                [
                    'label' => '65-74 år',
                    'backgroundColor' => 'rgb(123, 99, 200)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => $this->dataset65,
                ]
            ],
        ]);

        $chart->setOptions([
            'scales' => [
                'y' => [
                    'suggestedMin' => 0,
                    'suggestedMax' => 100,
                ],
            ],
        ]);
    }

    /**
     * This function returns the labels from the data
     */
    public function getLabels(): array {
        return $this->labels;
    }
}
