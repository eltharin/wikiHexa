<?php

namespace App\Domain\Request\Category;

use App\Domain\Interface\UseCaseRequest;

class AddCategorieRequest extends UseCaseRequest
{

    public function __construct(public ?string $libelle = null)
    {
    }
}