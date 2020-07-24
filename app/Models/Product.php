<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use BinaryCats\Sku\HasSku;
use BinaryCats\Sku\Concerns\SkuOptions;

class Product extends Model
{
    use Sluggable, HasSku;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'sku',
        'image',
        'description',
        'body',
        'quantity',
        'price',
        'sale_price',
        'status',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * Get the options for generating the Sku.
     *
     * @return BinaryCats\Sku\Concerns\SkuOptions;
     */
    public function skuOptions(): SkuOptions
    {
        return SkuOptions::make()
            ->from(['slug']);
    }

    /**
     * Define relationship with the Category
     *
     * @return void
     */
    public function category()
    {
        return $this->hasOne(Category::class, 'category_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }
}
