<?php

namespace App\Repository;

use App\Entity\EchelleFixation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EchelleFixation|null find($id, $lockMode = null, $lockVersion = null)
 * @method EchelleFixation|null findOneBy(array $criteria, array $orderBy = null)
 * @method EchelleFixation[]    findAll()
 * @method EchelleFixation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EchelleFixationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EchelleFixation::class);
    }

    // /**
    //  * @return EchelleFixation[] Returns an array of EchelleFixation objects
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
    public function findOneBySomeField($value): ?EchelleFixation
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
