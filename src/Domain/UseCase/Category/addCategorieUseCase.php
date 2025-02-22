<?php

namespace App\Domain\UseCase\Category;

use App\Domain\Interface\Presenter;
use App\Domain\Interface\UseCase;
use App\Domain\Interface\UseCaseRequest;
use App\Domain\Interface\UseCaseResponse;

class addCategorieUseCase implements UseCase
{

    public function execute(?UseCaseRequest $useCaseRequest = null, Presenter $presenter): UseCaseResponse
    {
        $presenter->present(new addCategorieUseCaseResponse($this->categoryFinder->getAll()));
    }
}