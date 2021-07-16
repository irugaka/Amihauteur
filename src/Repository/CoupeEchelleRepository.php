<?php

namespace App\Repository;

use App\Entity\CoupeEchelle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CoupeEchelle|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoupeEchelle|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoupeEchelle[]    findAll()
 * @method CoupeEchelle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoupeEchelleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CoupeEchelle::class);
    }

    // /**
    //  * @return CoupeEchelle[] Returns an array of CoupeEchelle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CoupeEchelle
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
