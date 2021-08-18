<?php

namespace App\Repository;

use App\Entity\Grupos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Grupos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Grupos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Grupos[]    findAll()
 * @method Grupos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GruposRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Grupos::class);
    }

    // /**
    //  * @return Grupos[] Returns an array of Grupos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Grupos
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * @return Grupos[]
     */
    public function distintos() {
        return $this->createQueryBuilder('p')
            ->select('p.ciudad')
            ->distinct('p.ciudad')
            ->getQuery()
            ->getResult()
            ;

    }

    /**
     * @return Grupos[]
     */
    public function distintosMunicipios() {
        return $this->createQueryBuilder('p')
            ->select('p.sitios','p.ciudad')
            ->distinct('p.sitios')
            ->orderBy('p.sitios')
            ->getQuery()
            ->getResult()
            ;

    }

    /**
     * @return Grupos[]
     */
    public function ordenarGrupos() {
        return $this->createQueryBuilder('p')
            ->orderBy('p.zona','ASC')
            ->getQuery()
            ->getResult()
            ;

    }

}
