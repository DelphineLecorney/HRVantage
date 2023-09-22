<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;



class EmployeeChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->labels(['January', 'February', 'March', 'April', 'May', 'June', 'July'])
            ->dataset('Employees', 'bar', [10, 25, 13, 45, 24, 31, 18])
            ->options([
                'responsive' => true,
                'maintainAspectRatio' => false,
            ]);
    }
}
