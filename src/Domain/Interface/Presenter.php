<?php

namespace App\Domain\Interface;

interface Presenter
{
    function present(UseCaseResponse $data);
}