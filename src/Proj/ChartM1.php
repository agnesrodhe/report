<?php

/**
 * This file contains the class ChartM1 and is written by me, Agnes Rodhe.
 */

namespace App\Proj;

use App\Repository\Mobbning1Repository;

/**
 * The class ChartM1 represents a chart with data from the database-table mobbning1
 */
class ChartM1
{
    /**
     * @var array The labels of the chart
     */
    private $labels = [];

    /**
     * @var array The data for the girls
     */
    private $datasetsF = [];

    /**
     * @var array The data for the boys
     */
    private $datasetsP = [];

    /**
     * @param array $repo       The data as an array
     */
    public function __construct($repo = [])
    {
        foreach ($repo as $data) {
            $this->labels[] = $data->getYear();
            $this->datasetsF[] = (float) $data->getFlickor();
            $this->datasetsP[] = (float) $data->getPojkar();
        }
    }

    /**
     * @param object $chart        The chart that the data will be connected with
     *
     * This function set the data to the chart created in the controller
     */
    public function setChart($chart)
    {
        $chart->setData([
            'labels' => $this->labels,
            'datasets' => [
                [
                    'label' => 'Flickor',
                    'backgroundColor' => '#F4D45F',
                    'borderColor' => '#F4D45F',
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

    /**
     * This function returns the labels from the data
     */
    public function getLabels(): array
    {
        return $this->labels;
    }

    /**
     * This function returns the datasetFlickor from the data
     */
    public function getDatasetsF(): array
    {
        return $this->datasetsF;
    }

    /**
     * This function returns the dataset25 from the data
     */
    public function getDatasetsP(): array
    {
        return $this->datasetsP;
    }
}
