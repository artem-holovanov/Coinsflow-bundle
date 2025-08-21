<?php

namespace CommonBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @template T of object
 * @extends ServiceEntityRepository<T>
 */
abstract class AbstractProductRepository extends ServiceEntityRepository
{
    /**
     * @param ManagerRegistry $registry
     * @param class-string<T> $entityClass
     */
    public function __construct(ManagerRegistry $registry, string $entityClass)
    {
        parent::__construct($registry, $entityClass);
    }
}