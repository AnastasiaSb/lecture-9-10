<?php

namespace App\Shop\Categories\Repositories\Interfaces;

use App\Interfaces\BaseRepositoryInterface;

interface CategoryRepositoryInterface extends BaseRepositoryInterface
{
    public function findCategoryById($id);
}