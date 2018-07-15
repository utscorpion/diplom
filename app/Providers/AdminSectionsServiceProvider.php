<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        //\App\User::class => 'App\Http\Sections\Users',
        \App\Admin\Models\Tag::class => 'App\Http\Sections\tags',
        \App\Admin\Models\News::class => 'App\Http\Sections\news',
        \App\Admin\Models\Category::class => 'App\Http\Sections\categories',
        \App\Admin\Models\Subcategory::class => 'App\Http\Sections\subcategories',
        \App\Admin\Models\Product::class => 'App\Http\Sections\products',
    ];

    /**
     * Register sections.
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
