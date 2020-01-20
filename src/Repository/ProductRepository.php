<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    // /**
    //  * @return Product[] Returns an array of Product objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    // public function getLastInserted($entity, $amount)
    // {
    //     return $this->getEntityManager()
    //                 ->createQuery(
    //                     "SELECT e FROM $entity e ORDER BY e.id DESC"
    //                 )
    //                 ->setMaxResults($amount)
    //                 ->getResult();
    // }

    // public function getLastInsertedAjax($entity, $amount)
    // {
    //     return $this->getEntityManager()
    //                 ->createQuery(
    //                     "SELECT e.id, e.name, e.reference,e.price,e.materials, u.id, u.username FROM $entity e JOIN e.user u ORDER BY e.id DESC"

    //                 )
    //                 ->setMaxResults($amount)
    //                 ->getResult();;
    // }



    
}
