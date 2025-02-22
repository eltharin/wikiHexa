<?php

namespace App\Infrastructure\Symfony\Presenter\Category;

use App\Domain\Interface\Presenter;
use App\Domain\Interface\UseCaseResponse;
use App\Domain\Response\Category\GetAllCategoriesResponse;
use Symfony\Component\HttpFoundation\Response;

class GetAllCategorieHtmlPresenter implements Presenter
{
    public $viewModel = [];

    function present(GetAllCategoriesResponse|UseCaseResponse $data)
    {
        $this->viewModel = ['categories' => $data->categories];
    }
}