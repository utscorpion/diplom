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
 * Class subcategories
 *
 * @property \App\Admin\Models\Subcategory $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class subcategories extends Section implements Initializable
{
    /**
     * @var \App\Admin\Models\Tag
     */
    protected $model = '\App\Admin\Models\Subcategory';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        // Добавление пункта меню и счетчика кол-ва записей в разделе
        $this->addToNavigation($priority = 500, function() {
            return \App\Admin\Models\Subcategory::count();
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
    protected $title = 'Название подкатегории';

    /**
     * @var string
     */
    protected $alias = 'subcategory';

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::table()
            ->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                AdminColumn::text('title', 'Название подкатегории')
            )->paginate(20);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('title', 'Название подкатегории')->required(),
            AdminFormElement::select('category_id')->setLabel('')
                ->setModelForOptions(\App\Admin\Models\Category::class)
                ->setHtmlAttribute('placeholder', 'Выберите категорию')
                ->setDisplay('title')
                ->required(),
        ]);
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('title', 'Название подкатегории')->required(),
            AdminFormElement::select('category_id')->setLabel('')
                ->setModelForOptions(\App\Admin\Models\Category::class)
                ->setHtmlAttribute('placeholder', 'Выберите категорию')
                ->setDisplay('title')
                ->required(),
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
