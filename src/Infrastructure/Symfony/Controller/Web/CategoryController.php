<?php

namespace App\Infrastructure\Symfony\Controller\Web;

use App\Domain\Object\AddCategoryDto;
use App\Domain\Request\Category\AddCategorieRequest;
use App\Domain\Request\Category\GetAllCategorieRequest;
use App\Domain\UseCase\Category\addCategorieUseCase;
use App\Domain\UseCase\Category\GetAllCategoriesUseCase;
use App\Infrastructure\Symfony\Form\CategoryType;
use App\Infrastructure\Symfony\Presenter\Category\addCategorieHTMLPresenter;
use App\Infrastructure\Symfony\Presenter\Category\GetAllCategorieHtmlPresenter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/category', name: 'app_category_')]
class CategoryController extends AbstractController
{
    #[Route('', name: 'index', methods: ['GET'])]
    public function index(
        GetAllCategoriesUseCase $useCase,
        GetAllCategorieHtmlPresenter $presenter,
    )
    {
        $useCase->execute(new GetAllCategorieRequest, $presenter);
        return $this->render('category/index.html.twig', $presenter->viewModel);
    }

    #[Route('/add', name: 'add', methods: ['GET', 'POST'])]
    public function add(
        addCategorieUseCase $useCase,
        addCategorieHTMLPresenter $presenter,
        Request $request
    )
    {
        $category = new AddCategoryDto();

        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $useCase->execute($category, $presenter);
            return $this->redirectToRoute('app_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('category/add.html.twig', [
            'form' => $form,
        ]);
    }
}