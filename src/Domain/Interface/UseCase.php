<?php

namespace App\Domain\Interface;

interface UseCase
{
    public function execute(?UseCaseRequest $useCaseRequest = null, Presenter $presenter);
}