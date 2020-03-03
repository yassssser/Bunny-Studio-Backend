<?php

namespace App\Repository;

use App\Entity\UserTasks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserTasks|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserTasks|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserTasks[]    findAll()
 * @method UserTasks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserTasksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserTasks::class);
    }

    // /**
    //  * @return UserTasks[] Returns an array of UserTasks objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserTasks
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
