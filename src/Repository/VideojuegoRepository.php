<?php

namespace App\Repository;

use App\Entity\Videojuego;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class VideojuegoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Videojuego::class);
    }

    public function findByFiltros($busqueda, $categoria)
    {
        $qb = $this->createQueryBuilder('v');

        if ($busqueda) {
            $qb->andWhere('v.titulo LIKE :busqueda')
               ->setParameter('busqueda', '%'.$busqueda.'%');
        }

        if ($categoria) {
            $qb->andWhere('v.categoria = :categoria')
               ->setParameter('categoria', $categoria);
        }

        return $qb->getQuery()->getResult();
    }

    public function findByTitleExample(string $value): array
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.titulo LIKE :val')
            ->setParameter('val', '%' . $value . '%')
            ->orderBy('v.titulo', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
