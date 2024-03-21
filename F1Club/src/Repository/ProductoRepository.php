<?php

namespace App\Repository;

use App\Entity\ListaDeseos;
use App\Entity\Producto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Producto>
 *
 * @method Producto|null find($id, $lockMode = null, $lockVersion = null)
 * @method Producto|null findOneBy(array $criteria, array $orderBy = null)
 * @method Producto[]    findAll()
 * @method Producto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Producto::class);
    }

    public function findProductosByListaDeseos(ListaDeseos $listaDeseos): ?array
    {
        //Obtengo todos los productos de la lista de deseos de un usuario
        return $this->createQueryBuilder('p') //Creo la consulta usando el alias p para referirme a la entidad producto
            ->join('p.listaDeseos', 'ld')  //Uno la entidad listaDeseos ld con producto p a través de la propiedad listaDeseos de producto
            ->where(':listaDeseos MEMBER OF p.listaDeseos') //Verififco que $listaDeseos es miembro de la colección listaDeseos de producto gaarantizando que devuelvo solo los productos de esa lista de deseos
            ->setParameter('listaDeseos', $listaDeseos) //Vinculo :listaDeseos al paramtero $listaDeseos
            ->getQuery()
            ->getResult(); //Covierto la consulta en un objeto query y realizo la consulta
    }

    public function findProductosByBusqueda(string $query): array 
    {   
        //Obtengo todos los productos que en su nombre contengan lo que he escrito en la búsqueda
        return $this->createQueryBuilder('p')
            ->where('p.nombre_producto LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->getQuery()
            ->getResult(); //Covierto la consulta en un objeto query y realizo la consulta
    }

    //    /**
    //     * @return Producto[] Returns an array of Producto objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Producto
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
