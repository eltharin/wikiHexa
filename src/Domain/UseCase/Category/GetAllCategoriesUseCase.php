<?php

namespace App\Domain\UseCase\Category;

use App\Domain\Interface\Finder\CategoryFinderInterface;
use App\Domain\Interface\Presenter;
use App\Domain\Interface\Response\Category\GetAllCategorieUseCaseResponse;
use App\Domain\Interface\UseCase;
use App\Domain\Interface\UseCaseRequest;
use App\Domain\Interface\UseCaseResponse;

class GetAllCategoriesUseCase implements UseCase
{
    private CategoryFinderInterface $categoryFinder;

    public function __construct(
        CategoryFinderInterface $categoryFinder,
    )
    {
        $this->categoryFinder = $categoryFinder;
    }


    public function execute(?UseCaseRequest $useCaseRequest = null, Presenter $presenter): void
    {
        $presenter->present(new GetAllCategorieUseCaseResponse($this->categoryFinder->getAll()));
    }
}