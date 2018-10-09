<?php

namespace App\Http\ViewComposers;

class CategoryComposer
{

    protected $category;

    public function __construct(CategoryRepositoryInterface $categories)
    {
        $this->categories = $categories;
    }

    public function compose(View $view)
    {
       $view->with('categories', $this->categories->all());
    }
}