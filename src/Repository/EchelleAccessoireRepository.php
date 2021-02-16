<?php

namespace App\Repository;

use App\Entity\EchelleAccessoire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EchelleAccessoire|null find($id, $lockMode = null, $lockVersion = null)
 * @method EchelleAccessoire|null findOneBy(array $criteria, array $orderBy = null)
 * @method EchelleAccessoire[]    findAll()
 * @method EchelleAccessoire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EchelleAccessoireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EchelleAccessoire::class);
    }

    // /**
    //  * @return EchelleAccessoire[] Returns an array of EchelleAccessoire objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EchelleAccessoire
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
