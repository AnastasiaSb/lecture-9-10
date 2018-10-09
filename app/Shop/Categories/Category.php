<?php

namespace App\Shop\Categories;

use App\Models\Model;

class Category extends Model
{
    /**
     * @var string
     */
    protected $table = 'categories';
    /**
     * Category constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
    /**
     * @return int
     */
    public function getId()
    {
        return $this->getAttribute('id');
    }
    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->setAttribute('id', $id);
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->getAttribute('name');
    }
    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->setAttribute('name', $name);
    }
    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->getAttribute('slug');
    }
    /**
     * @param string $slug
     */
    public function setSlug(string $slug)
    {
        $this->setAttribute('slug', $slug);
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getAttribute('description');
    }
    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->setAttribute('description', $description);
    }
}