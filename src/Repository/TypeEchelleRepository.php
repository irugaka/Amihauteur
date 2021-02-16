<?php

namespace App\Repository;

use App\Entity\TypeEchelle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeEchelle|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeEchelle|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeEchelle[]    findAll()
 * @method TypeEchelle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeEchelleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeEchelle::class);
    }

    // /**
    //  * @return TypeEchelle[] Returns an array of TypeEchelle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeEchelle
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
