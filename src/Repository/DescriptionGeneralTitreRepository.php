<?php

namespace App\Repository;

use App\Entity\DescriptionGeneralTitre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DescriptionGeneralTitre|null find($id, $lockMode = null, $lockVersion = null)
 * @method DescriptionGeneralTitre|null findOneBy(array $criteria, array $orderBy = null)
 * @method DescriptionGeneralTitre[]    findAll()
 * @method DescriptionGeneralTitre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DescriptionGeneralTitreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DescriptionGeneralTitre::class);
    }

    // /**
    //  * @return DescriptionGeneralTitre[] Returns an array of DescriptionGeneralTitre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DescriptionGeneralTitre
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
