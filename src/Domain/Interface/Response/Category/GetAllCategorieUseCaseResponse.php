<?php

namespace App\Domain\Interface\Response\Category;

use App\Domain\Interface\UseCaseResponse;

class GetAllCategorieUseCaseResponse extends UseCaseResponse
{
    public function __construct(public array $categories)
    {
    }
}