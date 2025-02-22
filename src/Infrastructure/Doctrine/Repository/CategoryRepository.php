<?php

namespace App\Infrastructure\Doctrine\Repository;

use App\Domain\Interface\Finder\CategoryFinderInterface;
use App\Infrastructure\Doctrine\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Category>
 */
class CategoryRepository extends ServiceEntityRepository implements CategoryFinderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Category::class);
    }

    public function getAll()
    {
        return $this->findAll();
    }
}
