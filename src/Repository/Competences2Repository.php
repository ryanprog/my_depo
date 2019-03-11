<?php

namespace App\Repository;

use App\Entity\Competences2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Competences2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Competences2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Competences2[]    findAll()
 * @method Competences2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Competences2Repository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Competences2::class);
    }

    // /**
    //  * @return Competences2[] Returns an array of Competences2 objects
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
    public function findOneBySomeField($value): ?Competences2
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
