<?php

/**
 * This file contains the class Game and is written by me, Agnes Rodhe.
 */

namespace App\Proj;

use App\Repository\Mobbning1Repository;

class ChartM2
{
    private $labels = [];

    private $datasetsFlickor = [];

    private $datasetsPojkar = [];

    public function __construct($repo)
    {
        foreach ($repo as $data) {
            $this->labels[] = $data->getYear();
            $this->datasetsFlickor[] = (float) $data->getFlickor();
            $this->datasetsPojkar[] = (float) $data->getPojkar();
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
                    'data' => $this->datasetsFlickor,
                ],
                [
                    'label' => 'Pojkar',
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => $this->datasetsPojkar,
                ]
            ],
        ]);

        $chart->setOptions([
            'scales' => [
                'y' => [
                    'suggestedMin' => 0,
                    'suggestedMax' => 8,
                ],
            ],
        ]);
    }
}
