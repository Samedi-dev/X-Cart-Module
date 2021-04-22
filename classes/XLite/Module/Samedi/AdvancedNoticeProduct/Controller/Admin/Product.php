<?php

namespace XLite\Module\Samedi\AdvancedNoticeProduct\Controller\Admin;


abstract class Product extends \XLite\Controller\Admin\Product implements \XLite\Base\IDecorator
{
    public function getPages()
    {
        $list = parent::getPages();

        $list['advanced_notice'] = 'Advanced Notice';

        return $list;
    }

    protected function getPageTemplates()
    {
        $list = parent::getPageTemplates();

        $list['advanced_notice'] = 'modules/Samedi/AdvancedNoticeProduct/tab/notice_block.twig';

        return $list;
    }

//    TODO разобраться с doAction методами
}