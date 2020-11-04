<?php

namespace App\Repository;

use App\Entity\FotoVal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FotoVal|null find($id, $lockMode = null, $lockVersion = null)
 * @method FotoVal|null findOneBy(array $criteria, array $orderBy = null)
 * @method FotoVal[]    findAll()
 * @method FotoVal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FotoValRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FotoVal::class);
    }

    // /**
    //  * @return FotoVal[] Returns an array of FotoVal objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FotoVal
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
