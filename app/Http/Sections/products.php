<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;
use SleepingOwl\Admin\Contracts\Initializable;
use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;


/**
 * Class products
 *
 * @property \App\Admin\Models\Product $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class products extends Section implements Initializable
{
    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation($priority = 500, function() {
            return \App\Admin\Models\Product::count();
        });

        $this->creating(function($config, \Illuminate\Database\Eloquent\Model $model) {
            //...
        });
    }

    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Продукция';

    /**
     * @var string
     */
    protected $alias = 'products';

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::table()->setColumns([
            AdminColumn::text('title', 'Title'),
            AdminColumn::text('description', 'Описание'),
            AdminColumn::text('characteristic', 'Характеристика'),
            AdminColumn::text('category_id', 'Категория'),
        ])->paginate(5);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('title', 'Title')->required(),
            AdminFormElement::wysiwyg('description', 'Описание', 'simplemde')->required(),
            AdminFormElement::wysiwyg('characteristic', 'Характеристика', 'simplemde')->required(),
            AdminFormElement::select('category_id')->setLabel('Категория')
                ->setModelForOptions(\App\Admin\Models\Category::class)
                ->setHtmlAttribute('placeholder', 'Выберите категорию')
                ->setDisplay('title')
                ->required(),
            AdminFormElement::select('subcategory_id')->setLabel('Подкатегория')
                ->setModelForOptions(\App\Admin\Models\Subcategory::class)
                ->setHtmlAttribute('placeholder', 'Выберите подкатегория')
                ->setDisplay('title')
                ->required(),
            AdminFormElement::image('picture')->required()
        ]);
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('title', 'Title')->required(),
            AdminFormElement::wysiwyg('description', 'Описание', 'simplemde')->required(),
            AdminFormElement::wysiwyg('characteristic', 'Характеристика', 'simplemde')->required(),
            AdminFormElement::select('category_id')->setLabel('Категория')
                ->setModelForOptions(\App\Admin\Models\Category::class)
                ->setHtmlAttribute('placeholder', 'Выберите категорию')
                ->setDisplay('title')
                ->required(),
            AdminFormElement::select('subcategory_id')->setLabel('Подкатегория')
                ->setModelForOptions(\App\Admin\Models\Subcategory::class)
                ->setHtmlAttribute('placeholder', 'Выберите подкатегория')
                ->setDisplay('title')
                ->required(),
            AdminFormElement::image('picture')->required()
        ]);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return 'fa fa-gear';
    }
}
