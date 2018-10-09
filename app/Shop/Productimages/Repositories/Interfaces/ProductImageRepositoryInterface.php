<?php

namespace App\Shop\Productimages\Repositories\Interfaces;

use App\Interfaces\BaseRepositoryInterface;

interface ProductImageRepositoryInterface extends BaseRepositoryInterface
{
    public function findProductImageByProductId($id);
}