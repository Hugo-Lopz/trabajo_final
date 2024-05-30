<?php

namespace App\Repository;

use App\Entity\LineaPedido;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LineaPedido>
 *
 * @method LineaPedido|null find($id, $lockMode = null, $lockVersion = null)
 * @method LineaPedido|null findOneBy(array $criteria, array $orderBy = null)
 * @method LineaPedido[]    findAll()
 * @method LineaPedido[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LineaPedidoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LineaPedido::class);
    }

    // Sumo la cantidad de cada una de las lineas de pedido para saber cuantos productos se han vendido desde que se creo la tienda
    public function obtenerTotalProductosVendidos(): int  
    {
        return $this->createQueryBuilder('lp')
            ->select('SUM(lp.cantidad) AS ventas')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function obtenerTop3ProductosMasVendidos()
    {
        return $this->createQueryBuilder('lp')
        ->select('img.url_imagen, pr.nombre_producto, pr.precio, pr.id, SUM(lp.cantidad) as total_vendido')
        ->join('lp.producto', 'pr')
        ->join('pr.escala', 'e')
        ->join('lp.pedido', 'p')
        ->join('pr.imagenes', 'img')
        ->groupBy('lp.nombre_producto')
        ->orderBy('total_vendido', 'DESC')
        ->setMaxResults(10)
        ->setMaxResults(3)
        ->getQuery()
        ->getResult();
    }

    // Obtengo de la BBDD el producto con su escala y la cantidad total que ha vendido ese producto en todo el mes
    public function findProductosMasVendidos(\DateTime $inicioMes, \DateTime $finMes): array
    {
        return $this->createQueryBuilder('lp')
            ->select('CONCAT(pr.nombre_producto, \' \', e.nombre_escala) AS nombre_producto, SUM(lp.cantidad) as total_vendido')
            ->join('lp.producto', 'pr')
            ->join('pr.escala', 'e')
            ->join('lp.pedido', 'p')
            ->where('p.fecha_pedido BETWEEN :inicioMes AND :finMes')
            ->groupBy('lp.nombre_producto')
            ->orderBy('total_vendido', 'DESC')
            ->setMaxResults(10)
            ->setParameter('inicioMes', $inicioMes)
            ->setParameter('finMes', $finMes)
            ->getQuery()
            ->getResult();
    }

    // Obtengo de la BBDD el cada fabricante y la cantidad de ventas que ha realizado en este mes
    public function findFabricantesVentas(\DateTime $inicioMes, \DateTime $finMes): array {
        return $this->createQueryBuilder('lp')
            ->select('f.nombre AS fabricante, SUM(lp.cantidad) as total_vendido')
            ->join('lp.producto', 'prod')
            ->join('prod.fabricante', 'f')
            ->join('lp.pedido', 'ped')
            ->where('ped.fecha_pedido BETWEEN :inicioMes AND :finMes')
            ->groupBy('fabricante')
            ->orderBy('total_vendido', 'DESC')
            ->setParameter('inicioMes', $inicioMes)
            ->setParameter('finMes', $finMes)
            ->getQuery()
            ->getResult();
    }

    // Le pasaré el id de un usuario y un id de producto para comprobar si en la BBDD existe alguna entrada en la que un determinado usuario haya comprado un determinado prodcuto
    public function findProductoComprasUsuario (int $idUsuario, int $idProducto): bool {
        return (bool) $this->createQueryBuilder('lp')
            ->select('prod.id AS producto')
            ->join('lp.producto', 'prod')
            ->join('lp.pedido', 'ped')
            ->join('ped.usuario', 'u')
            ->where('prod.id = :idProducto')
            ->andWhere('u.id = :idUsuario')
            ->groupBy('producto')
            ->setParameter('idUsuario', $idUsuario)
            ->setParameter('idProducto', $idProducto)
            ->getQuery()
            ->getResult();
    }
}
