<?php

namespace App\Repository;

use App\Entity\Activity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Activity|null find($id, $lockMode = null, $lockVersion = null)
 * @method Activity|null findOneBy(array $criteria, array $orderBy = null)
 * @method Activity[]    findAll()
 * @method Activity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 * @method Activity[]    findAllByUserId($userId)
 * @method Activity[]    findByUserIdAndSportId($userId, $sportId)
 */
class ActivityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Activity::class);
    }

    // /**
    //  * @return Activity[] Returns an array of Activity objects
    //  */
    public function findAllByUserId($userId)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.user = :val')
            ->setParameter('val', $userId)
            ->orderBy('a.date', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }



    // /**
    //  * @return Activity[] Returns an array of Activity objects
    //  */
    public function findByUserIdAndSportId($userId, $sportId)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.user = :userId')
            ->andWhere('a.sport = :sportId')
            ->setParameter('userId', $userId)
            ->setParameter('sportId', $sportId)
            ->orderBy('a.date', 'ASC')
            ->getQuery()
            ->getResult()
        ;

        /*
        En utilisant cela, il n'y a pas le jointure avec autres tables
        Donc après on utilise activity.sport_id et non activity_sport
        $conn = $this->getEntityManager()->getConnection();
        $sql ="SELECT * FROM activity WHERE `user_id` = ' .$userId.'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
        */
    }



    // /**
    //  * @return Activity[] Returns an array of Activity objects
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
    public function findOneBySomeField($value): ?Activity
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
