<?php

namespace App\Repository;

use App\Entity\HomeEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method HomeEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method HomeEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method HomeEntity[]    findAll()
 * @method HomeEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HomeEntityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, HomeEntity::class);
    }

    // /**
    //  * @return HomeEntity[] Returns an array of HomeEntity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HomeEntity
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
