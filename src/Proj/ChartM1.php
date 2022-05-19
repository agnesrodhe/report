<?php

/**
 * This file contains the class Game and is written by me, Agnes Rodhe.
 */

namespace App\Proj;

use App\Repository\Mobbning1Repository;

class ChartM1
{
    private $labels = [];

    private $datasetsF = [];

    private $datasetsP = [];

    public function __construct($repo)
    {
        foreach ($repo as $data) {
            $this->labels[] = $data->getYear();
            $this->datasetsF[] = (float) $data->getFlickor();
            $this->datasetsP[] = (float) $data->getPojkar();
        }
    }

    public function setChart($chart)
    {
        $chart->setData([
            'labels' => $this->labels,
            'datasets' => [
                [
                    'label' => 'Flickor',
                    'backgroundColor' => 'rgb(5, 99, 132)',
                    'borderColor' => 'rgb(5, 99, 132)',
                    'data' => $this->datasetsF,
                ],
                [
                    'label' => 'Pojkar',
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => $this->datasetsP,
                ]
            ],
        ]);

        $chart->setOptions([
            'scales' => [
                'y' => [
                    'suggestedMin' => 6,
                    'suggestedMax' => 20,
                ],
            ],
        ]);
    }
}
