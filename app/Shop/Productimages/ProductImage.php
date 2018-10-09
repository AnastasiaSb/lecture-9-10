<?php

namespace App\Shop\Productimages;

use App\Models\Model;

class ProductImage extends Model
{
    protected $table = 'product_images';
    /**
     * Product constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->getAttribute('id');
    }
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->setAttribute('id', $id);;
    }
    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->getAttribute('product_id');
    }
    /**
     * @param mixed $productId
     */
    public function setProductId($productId)
    {
        $this->setAttribute('product_id', $productId);
    }
    /**
     * @return mixed
     */
    public function getSrc()
    {
        return $this->getAttribute('src');
    }
    /**
     * @param mixed $src
     */
    public function setSrc($src)
    {
        $this->setAttribute('src', $src);
    }
}