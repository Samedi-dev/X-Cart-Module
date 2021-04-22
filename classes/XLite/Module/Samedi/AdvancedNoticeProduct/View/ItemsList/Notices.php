<?php

namespace XLite\Module\Samedi\AdvancedNoticeProduct\View\ItemsList;


class Notices extends \XLite\View\ItemsList\Model\Table
{
    protected function defineRepositoryName()
    {
        return '\XLite\Module\Samedi\AdvancedNoticeProduct\Model\Notice';
    }

    protected function defineColumns()
    {
        return array(
            'text' => array(
                static::COLUMN_NAME     => 'Text',
                static::COLUMN_ORDERBY  => 100,
                static::COLUMN_MAIN     => true,
            ),
            'link' => array(
                static::COLUMN_NAME     => 'Link',
                static::COLUMN_ORDERBY  => 200,
            ),
            'rating' => array(
                static::COLUMN_NAME     => 'Rating',
                static::COLUMN_ORDERBY  => 300,
            ),
            'author' => array(
                static::COLUMN_NAME     => 'Author',
                static::COLUMN_ORDERBY  => 400,
            ),
        );
    }

    protected function wrapWithFormByDefault()
    {
        return true;
    }

    protected function isCreation()
    {
        return static::CREATE_INLINE_TOP;
    }

    protected function getCreateButtonLabel()
    {
        return 'Create new notice';
    }

    protected function isRemoved()
    {
        return true;
    }

    protected function isSwitchable()
    {
        return true;
    }

    protected function getFormTarget()
    {
        return 'advanced_notice';
    }

    protected function getEditLink()
    {
        // TODO разобраться с формой
        return 'advanced_notice';
    }

    protected function getCreateURL()
    {
        // TODO разобраться с формой
        return \XLite\Core\Converter::buildUrl('advanced_notice');
    }
}