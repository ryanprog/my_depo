<?php

namespace App\Repository;

use App\Entity\NomTitreCV;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method NomTitreCV|null find($id, $lockMode = null, $lockVersion = null)
 * @method NomTitreCV|null findOneBy(array $criteria, array $orderBy = null)
 * @method NomTitreCV[]    findAll()
 * @method NomTitreCV[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NomTitreCVRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, NomTitreCV::class);
    }

    // /**
    //  * @return NomTitreCV[] Returns an array of NomTitreCV objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NomTitreCV
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
