<?php

namespace App\Repository;

use App\Entity\CoupeEchelleEchelle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CoupeEchelleEchelle|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoupeEchelleEchelle|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoupeEchelleEchelle[]    findAll()
 * @method CoupeEchelleEchelle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoupeEchelleEchelleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CoupeEchelleEchelle::class);
    }

    // /**
    //  * @return CoupeEchelleEchelle[] Returns an array of CoupeEchelleEchelle objects
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
    public function findOneBySomeField($value): ?CoupeEchelleEchelle
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
