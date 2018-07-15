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
 * Class news
 *
 * @property \App\Admin\Models\News $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class news extends Section implements Initializable
{
    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-globe');
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
    protected $title = 'Новости';

    /**
     * @var string
     */
    protected $alias = 'news';

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::table()->setColumns([
            AdminColumn::text('title', 'Title'),
            AdminColumn::text('description', 'Описание'),
            AdminColumn::text('body', 'Тело новости')
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
            AdminFormElement::text('description', 'Описание')->required(),
            AdminFormElement::wysiwyg('body', 'Тело', 'simplemde')->required(),
            AdminFormElement::select('tag_id')->setLabel('Тег')
                ->setModelForOptions(\App\Admin\Models\Tag::class)
                ->setHtmlAttribute('placeholder', 'Выберите тег')
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
            AdminFormElement::text('description', 'Описание')->required(),
            AdminFormElement::wysiwyg('body', 'Тело', 'simplemde')->required(),
            AdminFormElement::select('tag_id')->setLabel('Тег')
                ->setModelForOptions(\App\Admin\Models\Tag::class)
                ->setHtmlAttribute('placeholder', 'Выберите тег')
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
}
