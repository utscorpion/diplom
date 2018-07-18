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
 * Class home
 *
 * @property \App\Admin\Models\Home $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class home extends Section implements Initializable
{
    /**
     * @var \App\Admin\Models\Tag
     */
    protected $model = '\App\Admin\Models\Home';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation($priority = 500, function() {
            return \App\Admin\Models\Home::count();
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
    protected $title = 'Home Page';

    /**
     * @var string
     */
    protected $alias = 'home';

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::table()->setColumns([
            AdminColumn::text('tagline', 'Title'),
            AdminColumn::text('product_1', 'Описание часть 1'),
            AdminColumn::text('product_2', 'Описание часть 2'),
            AdminColumn::text('product_3', 'Описание часть 3'),
            AdminColumn::text('product_4', 'Описание часть 4'),
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
            AdminFormElement::text('tagline', 'Title')->required(),
            AdminFormElement::text('product_1', 'Описание часть 1')->required(),
            AdminFormElement::text('product_2', 'Описание часть 2')->required(),
            AdminFormElement::text('product_3', 'Описание часть 3')->required(),
            AdminFormElement::text('product_4', 'Описание часть 4')->required(),
        ]);
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('tagline', 'Title')->required(),
            AdminFormElement::text('product_1', 'Описание часть 1')->required(),
            AdminFormElement::text('product_2', 'Описание часть 2')->required(),
            AdminFormElement::text('product_3', 'Описание часть 3')->required(),
            AdminFormElement::text('product_4', 'Описание часть 4')->required(),
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
