<?php

namespace App\Repository;

use App\Entity\Boey;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Boey>
 *
 * @method Boey|null find($id, $lockMode = null, $lockVersion = null)
 * @method Boey|null findOneBy(array $criteria, array $orderBy = null)
 * @method Boey[]    findAll()
 * @method Boey[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BoeyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Boey::class);
    }

    public function save(Boey $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Boey $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function add($id){
        $conn = $this->getEntityManager()->getConnection();
        $sql = "INSERT INTO boey(hold_sales_identifier_id) VALUES ('$id')";
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        $conn->close();
        return $resultSet;
    }

//    /**
//     * @return Boey[] Returns an array of Boey objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Boey
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
