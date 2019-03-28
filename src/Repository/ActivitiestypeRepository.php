<?php

namespace App\Repository;

use App\Entity\Activitiestype;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Activitiestype|null find($id, $lockMode = null, $lockVersion = null)
 * @method Activitiestype|null findOneBy(array $criteria, array $orderBy = null)
 * @method Activitiestype[]    findAll()
 * @method Activitiestype[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActivitiestypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Activitiestype::class);
    }

    // /**
    //  * @return Activitiestype[] Returns an array of Activitiestype objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Activitiestype
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
