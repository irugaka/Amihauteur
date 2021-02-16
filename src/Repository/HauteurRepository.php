<?php

namespace App\Repository;

use App\Entity\Hauteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Hauteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hauteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hauteur[]    findAll()
 * @method Hauteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HauteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hauteur::class);
    }

    // /**
    //  * @return Hauteur[] Returns an array of Hauteur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hauteur
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
