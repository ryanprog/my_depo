<?php

namespace App\Repository;

use App\Entity\Quisuisje;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Quisuisje|null find($id, $lockMode = null, $lockVersion = null)
 * @method Quisuisje|null findOneBy(array $criteria, array $orderBy = null)
 * @method Quisuisje[]    findAll()
 * @method Quisuisje[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuisuisjeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Quisuisje::class);
    }

    // /**
    //  * @return Quisuisje[] Returns an array of Quisuisje objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Quisuisje
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
