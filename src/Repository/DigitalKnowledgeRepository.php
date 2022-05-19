<?php

namespace App\Repository;

use App\Entity\DigitalKnowledge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DigitalKnowledge>
 *
 * @method DigitalKnowledge|null find($id, $lockMode = null, $lockVersion = null)
 * @method DigitalKnowledge|null findOneBy(array $criteria, array $orderBy = null)
 * @method DigitalKnowledge[]    findAll()
 * @method DigitalKnowledge[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DigitalKnowledgeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DigitalKnowledge::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(DigitalKnowledge $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(DigitalKnowledge $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return DigitalKnowledge[] Returns an array of DigitalKnowledge objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DigitalKnowledge
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
