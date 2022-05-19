<?php

/**
 * This file contains the class Game and is written by me, Agnes Rodhe.
 */

namespace App\Proj;

use App\Repository\Mobbning1Repository;

class ChartDk
{
    private $labels = [];

    private $dataset16 = [];
    private $dataset25 = [];
    private $dataset35 = [];
    private $dataset45 = [];
    private $dataset55 = [];
    private $dataset65 = [];

    public function __construct($repo)
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

    public function setChart($chart)
    {
        $chart->setData([
            'labels' => $this->labels,
            'datasets' => [
                [
                    'label' => '16-24 år',
                    'backgroundColor' => 'rgb(999, 99, 132)',
                    'borderColor' => 'rgb(5, 99, 132)',
                    'data' => $this->dataset16,
                ],
                [
                    'label' => '25-34 år',
                    'backgroundColor' => 'rgb(123, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => $this->dataset25,
                ],
                [
                    'label' => '35-44 år',
                    'backgroundColor' => 'rgb(123, 99, 9)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => $this->dataset35,
                ],
                [
                    'label' => '45-54 år',
                    'backgroundColor' => 'rgb(123, 253, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => $this->dataset45,
                ],
                [
                    'label' => '55-64 år',
                    'backgroundColor' => 'rgb(1, 200, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
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
}
