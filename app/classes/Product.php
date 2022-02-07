<?php

namespace App\classes;


class Product
{
    protected $products =[];
    public function getAllProduct()
    {
        return[ // return korbe 1ta array
            0=>[
                'id'=>1,
                'name'=>'T-shirt',
                'catagory'=>'man fashion',
                'brand'=>'Apple',
                'price'=>'3500',
                'description'=>'',
                'image'=>'pro.jpg'
            ],
            1=>[
                'id'=>2,
                'name'=>'mobile',
                'catagory'=>'man fashion',
                'brand'=>'Yellow',
                'price'=>'3500',
                'description'=>'',
                'image'=>'pro2.jpg'
    ],
        2=>[
                'id'=>3,
                'name'=>'T-shirt',
                'catagory'=>'man fashion',
                'brand'=>'Samsung',
                'price'=>'3500',
                'description'=>'',
                'image'=>'pro3.jpg'
    ],

        ];
    }
    public function getProductById($id)

    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }
}