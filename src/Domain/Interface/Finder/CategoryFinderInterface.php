<?php

namespace App\Domain\Interface\Finder;

interface CategoryFinderInterface
{
    public function getAll();
    public function find(int $id);
}