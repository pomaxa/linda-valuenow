<?php

namespace App\Repository;

use App\Entity\FreeQuoteRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FreeQuoteRequest>
 *
 * @method FreeQuoteRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method FreeQuoteRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method FreeQuoteRequest[]    findAll()
 * @method FreeQuoteRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FreeQuoteRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FreeQuoteRequest::class);
    }

    public function add(FreeQuoteRequest $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(FreeQuoteRequest $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return FreeQuoteRequest[] Returns an array of FreeQuoteRequest objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FreeQuoteRequest
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
