<?php

/**
 * This file contains the class ResetDb and is written by me, Agnes Rodhe.
 */

namespace App\Proj;

use App\Repository\Mobbning1Repository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Mobbning1;
use App\Entity\Mobbning2;
use App\Entity\DigitalKnowledge;

/**
 * The class ResetDb contains functions to reset database
 */
class ResetDb
{
    public function removeEntity(
        ManagerRegistry $doctrine,
        array $repo
    ) {
        $entityManager = $doctrine->getManager();
        foreach ($repo as $r) {
            $entityManager->remove($r);
        };
    }

    public function addCsvFileMobbning1(
        ManagerRegistry $doctrine
    )
    {
        $entityManager = $doctrine->getManager();
        $path = '../var/mobbning1.csv';
        $handle = fopen($path, "r");
        $row = 1;
        while (($data = fgetcsv($handle)) !== false) {
            if($row == 1)
            { 
                $row++; 
                continue; 
            };
            $num = count($data);
            $row++;
            $mo1 = new Mobbning1();
            $mo1->setYear($data[1]);
            $mo1->setFlickor($data[2]);
            $mo1->setPojkar($data[3]);
            $mo1->setTotalt($data[4]);
            $entityManager->persist($mo1);
        };
        fclose($handle);
    }

    public function addCsvFileMobbning2(
        ManagerRegistry $doctrine
    )
    {
        $entityManager = $doctrine->getManager();
        $path = '../var/mobbning2.csv';
        $handle = fopen($path, "r");
        $row = 1;
        while (($data = fgetcsv($handle)) !== false) {
            if($row == 1)
            { 
                $row++; 
                continue; 
            };
            $num = count($data);
            $row++;
            $mo2 = new Mobbning2();
            $mo2->setYear($data[1]);
            $mo2->setFlickor($data[2]);
            $mo2->setPojkar($data[3]);
            $mo2->setTotalt($data[4]);
            $entityManager->persist($mo2);
        };
        fclose($handle);
    }

    public function addCsvFileDigitalKnowledge(
        ManagerRegistry $doctrine
    )
    {
        $entityManager = $doctrine->getManager();
        $path = '../var/digitalknowledge.csv';
        $handle = fopen($path, "r");
        $row = 1;
        while (($data = fgetcsv($handle)) !== false) {
            if($row == 1)
            { 
                $row++; 
                continue; 
            };
            $num = count($data);
            $row++;
            $dK = new DigitalKnowledge();
            $dK->setKnowledge($data[1]);
            $dK->setYear($data[2]);
            $dK->setSextontjugofyra($data[3]);
            $dK->setFjugofemtrettiofyra($data[4]);
            $dK->setTrettiofemfyrtiofyra($data[5]);
            $dK->setFyrtiofemfemtiofyra($data[6]);
            $dK->setFemtiofemsextiofyra($data[7]);
            $dK->setSextiofemsjutiofyra($data[8]);
            $entityManager->persist($dK);
        };
        fclose($handle);
    }
}