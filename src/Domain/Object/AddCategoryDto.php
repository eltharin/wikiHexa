<?php

namespace App\Domain\Object;

class AddCategoryDto
{

    public function __construct(
        public ?string $libelle = null,

    )
    {

    }
}