<?php

namespace App\Repository;

use App\Entity\Pedido;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pedido>
 *
 * @method Pedido|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pedido|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pedido[]    findAll()
 * @method Pedido[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PedidoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pedido::class);
    }

    //Obtengo la suma de dinero que se ha generado con todos los pedidos
    public function obtenerIngresosTotales(): float
    {
        return $this->createQueryBuilder('p')
        ->select('SUM(p.coste_total) as ingresos')
        ->getQuery()
        ->getSingleScalarResult();
    }

    // Obtengo de la BBDD la cantidad de pedidos que se han realizado cada día del mes
    public function findPedidosDiariosMes(\DateTime $inicioMes, \DateTime $finMes): array
    {
        return $this->createQueryBuilder('p')
            ->select('p.fecha_pedido as fecha, COUNT(p.id) as cantidadPedidos')
            ->where('p.fecha_pedido BETWEEN :primerDiaDelMes AND :ultimoDiaDelMes')
            ->setParameter('primerDiaDelMes', $inicioMes)
            ->setParameter('ultimoDiaDelMes', $finMes)
            ->groupBy('fecha')
            ->orderBy('fecha', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
