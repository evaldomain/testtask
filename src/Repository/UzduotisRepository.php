<?php

namespace App\Repository;

use App\Entity\Uzduotis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Uzduotis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Uzduotis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Uzduotis[]    findAll()
 * @method Uzduotis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UzduotisRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Uzduotis::class);
    }

//    /**
//     * @return Uzduotis[] Returns an array of Uzduotis objects
//     */
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
    public function findOneBySomeField($value): ?Uzduotis
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
