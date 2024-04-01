<?php

namespace App\Repository;

use App\Entity\Conversacion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Conversacion>
 *
 * @method Conversacion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Conversacion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Conversacion[]    findAll()
 * @method Conversacion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConversacionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Conversacion::class);
    }

    public function findConversacionByParticipantes(int $otroUserId, $userActualId)
    {
        return $this->createQueryBuilder('c')
        ->select('count(p.conversacion) as users_participantes')
        ->join('c.participantes', 'p')
        ->where('p.usuario = :otroUserId')
        ->andWhere('p.usuario = :userActualId')
        ->groupBy('p.conversacion')
        ->having('users_participantes = 2')
        ->setParameter('otroUserId', $otroUserId)
        ->setParameter('userActualId', $userActualId)
        ->getQuery()
        ->getResult();
    }

//    /**
//     * @return Conversacion[] Returns an array of Conversacion objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Conversacion
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
