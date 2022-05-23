<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\Mobbning1Repository;
use App\Repository\Mobbning2Repository;
use App\Repository\DigitalKnowledgeRepository;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use App\Proj\ChartM1;
use App\Proj\ChartM2;
use App\Proj\ChartDk;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Console\Output\NullOutput;

class ProjectController extends AbstractController
{
    /**
     * @Route("/proj", name="proj")
     * methods={GET}
     */
    public function proj(
        Mobbning1Repository $m1Repository,
        Mobbning2Repository $m2Repository,
        DigitalKnowledgeRepository $dKRepository,
        ChartBuilderInterface $chartBuilder
    ): Response {
        /**
         * Chart for mobbning1
         */
        $repo = $m1Repository->findAll();
        $chartM1 = $chartBuilder->createChart(Chart::TYPE_LINE);
        $chart1 = new ChartM1($repo);
        $chart1->setChart($chartM1);

        /**
         * Chart for mobbning2
         */
        $repo = $m2Repository->findAll();
        $chartM2 = $chartBuilder->createChart(Chart::TYPE_LINE);
        $chart2 = new ChartM2($repo);
        $chart2->setChart($chartM2);

        // /**
        //  * Chart for digitalKnowledge
        //  */
        $repo = $dKRepository->findAll();
        $chartDk = $chartBuilder->createChart(Chart::TYPE_BAR);
        $chart3 = new ChartDk($repo);
        $chart3->setChart($chartDk);

        $data = [
            'chart1' => $chartM1,
            'chart2' => $chartM2,
            'chart3' => $chartDk,
            'labels3' => $chart3->getLabels()
        ];

        return $this->render('proj/proj.html.twig', $data);
    }

    /**
     * @Route("/proj/about", name="about-proj")
     */
    public function aboutProj(): Response
    {
        return $this->render('proj/aboutProj.html.twig');
    }

    /**
     * @Route("/proj/reset", name="reset-proj")
     */
    public function resetProj(): Response
    {
        // $application = new Application($kernel);
        // $application->setAutoExit(false);

        // $input = new ArrayInput([
        //     'command' => 'cp',
        //     // (optional) define the value of command arguments
        //     'nextArgument' => 'var/data.backup',
        //     // // (optional) pass options to the command
        //     '--bar' => 'var/data.db',
        // ]);

        // $output = new NullOutput();
        // $application->run($input, $output);
        // return new Response("");
        return $this->redirectToRoute('proj');
    }
}
