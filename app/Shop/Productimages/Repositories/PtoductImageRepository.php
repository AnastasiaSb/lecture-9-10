<?php

namespace App\Shop\Productimages\Repositories;

use App\Shop\Productimages\Repositories\Interfaces\ProductImageRepositoryInterface;
use App\Shop\Productimages\ProductImage;
use App\Repositories\BaseRepository;

class ProductImageRepository extends BaseRepository implements ProductImageRepositoryInterface
{
    /**
     * BaseRepository constructor.
     * @param ProductImage  $model
     */
    public function __construct(ProductImage $model)
    {
         parent::__construct($model);
    }
    /**
     * @param string $id
     * @return mixed
     */
    public function findProductImageByProductId($id)
    {
        return $this->findBy('product_id', $id);
    }
}