<?php

namespace App\Infrastructure\Symfony\Controller\API;

use App\Domain\Entity\Product;
use App\Domain\Gateway\CategoryGatewayInterface;
use App\Domain\Gateway\ProductGatewayInterface;
use App\Domain\Gateway\VATRateGatewayInterface;
use App\Domain\Request\Sale\AddProductToSellRequest;
use App\Domain\Tool\Validator;
use App\Domain\UseCase\Sale\AddProductToSellUseCase;
use App\Infrastructure\Symfony\Presenter\Sale\AddProductToSellPresenterToJson;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    #[Route('/API/product/add', name: 'API/product/add', methods: ['POST'])]
    public function addAction(
        Request $request,
        ProductGatewayInterface $productGateway,
        VATRateGatewayInterface $vatGateway,
        CategoryGatewayInterface $categoryGateway,
        AddProductToSellPresenterToJson $AddProductToSellPresenterToJson
    ): Response
    {
        $jsonRequest=json_decode($request->getContent());

        $useCaseRequest = new AddProductToSellRequest();
        $useCaseRequest->setProductToAdd(new Product((array)$jsonRequest->product));

        $useCase = new AddProductToSellUseCase($productGateway,$vatGateway,$categoryGateway,new Validator());
        $response=$useCase->execute($useCaseRequest);


        return $AddProductToSellPresenterToJson->present($response);
    }
}