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

    public function addData(
        string $filePath,
        $data
    )
    {
        if (str_contains($filePath, "mobbning1")) {
            $mo1 = new Mobbning1();
            $mo1->setYear($data[1]);
            $mo1->setFlickor($data[2]);
            $mo1->setPojkar($data[3]);
            $mo1->setTotalt($data[4]);
            return $mo1;
        } elseif (str_contains($filePath, "mobbning2")) {
            $mo2 = new Mobbning2();
            $mo2->setYear($data[1]);
            $mo2->setFlickor($data[2]);
            $mo2->setPojkar($data[3]);
            $mo2->setTotalt($data[4]);
            return $mo2;
        } elseif (str_contains($filePath, "digital")) {
            $digitalK = new DigitalKnowledge();
            $digitalK->setKnowledge($data[1]);
            $digitalK->setYear($data[2]);
            $digitalK->setSextontjugofyra($data[3]);
            $digitalK->setFjugofemtrettiofyra($data[4]);
            $digitalK->setTrettiofemfyrtiofyra($data[5]);
            $digitalK->setFyrtiofemfemtiofyra($data[6]);
            $digitalK->setFemtiofemsextiofyra($data[7]);
            $digitalK->setSextiofemsjutiofyra($data[8]);
            return $digitalK;
        }
    }

    public function addCsvFile(
        ManagerRegistry $doctrine,
        string $filePath
    ) {
        $entityManager = $doctrine->getManager();
        $path = $filePath;
        $handle = fopen($path, "r");
        $row = 1;
        while (($data = fgetcsv($handle)) !== false) {
            if ($row == 1) {
                $row++;
                continue;
            };
            $row++;
            $entity = $this->addData($filePath, $data);
            $entityManager->persist($entity);
        };
        fclose($handle);
    }

    // public function addCsvFileMobbning1(
    //     ManagerRegistry $doctrine,
    //     $entity
    // ) {
    //     $entityManager = $doctrine->getManager();
    //     $path = '../var/mobbning1.csv';
    //     $handle = fopen($path, "r");
    //     $row = 1;
    //     while (($data = fgetcsv($handle)) !== false) {
    //         if ($row == 1) {
    //             $row++;
    //             continue;
    //         };
    //         $row++;

    //         $entity->setYear($data[1]);
    //         $entity->setFlickor($data[2]);
    //         $entity->setPojkar($data[3]);
    //         $entity->setTotalt($data[4]);
    //         $entityManager->persist($entity);
    //     };
    //     fclose($handle);
    // }

    // public function addCsvFileMobbning2(
    //     ManagerRegistry $doctrine
    // ) {
    //     $entityManager = $doctrine->getManager();
    //     $path = '../var/mobbning2.csv';
    //     $handle = fopen($path, "r");
    //     $row = 1;
    //     while (($data = fgetcsv($handle)) !== false) {
    //         if ($row == 1) {
    //             $row++;
    //             continue;
    //         };
    //         $row++;
    //         $mo2 = new Mobbning2();
    //         $mo2->setYear($data[1]);
    //         $mo2->setFlickor($data[2]);
    //         $mo2->setPojkar($data[3]);
    //         $mo2->setTotalt($data[4]);
    //         $entityManager->persist($mo2);
    //     };
    //     fclose($handle);
    // }

    // public function addCsvFileDigitalKnowledge(
    //     ManagerRegistry $doctrine
    // ) {
    //     $entityManager = $doctrine->getManager();
    //     $path = '../var/digitalknowledge.csv';
    //     $handle = fopen($path, "r");
    //     $row = 1;
    //     while (($data = fgetcsv($handle)) !== false) {
    //         if ($row == 1) {
    //             $row++;
    //             continue;
    //         };
    //         $row++;
    //         $digitalK = new DigitalKnowledge();
    //         $digitalK->setKnowledge($data[1]);
    //         $digitalK->setYear($data[2]);
    //         $digitalK->setSextontjugofyra($data[3]);
    //         $digitalK->setFjugofemtrettiofyra($data[4]);
    //         $digitalK->setTrettiofemfyrtiofyra($data[5]);
    //         $digitalK->setFyrtiofemfemtiofyra($data[6]);
    //         $digitalK->setFemtiofemsextiofyra($data[7]);
    //         $digitalK->setSextiofemsjutiofyra($data[8]);
    //         $entityManager->persist($digitalK);
    //     };
    //     fclose($handle);
    // }
}
