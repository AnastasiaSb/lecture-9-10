<?php

namespace App\Shop\Categories\Repositories;

use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Shop\Categories\Category;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    /**
     * BaseRepository constructor.
     * @param Category $model
     */
    public function __construct(Category $model)
    {
         parent::__construct($model);
    }
    /**
     * @param string $id
     * @return mixed
     */
    public function findCategoryById($id)
    {
        return $this->find($id);
    }
}