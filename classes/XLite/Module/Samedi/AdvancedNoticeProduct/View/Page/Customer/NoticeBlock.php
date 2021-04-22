<?php

namespace XLite\Module\Samedi\AdvancedNoticeProduct\View\Page\Customer;

use XLite\Core\Database;
use XLite\Core\Request;
use XLite\View\AView;

/**
 * @ListChild (list="product.details.page.info", zone="customer", weight="20")
 */

class NoticeBlock extends AView
{
    protected function getDefaultTemplate(): string
    {
        return 'modules/Samedi/AdvancedNoticeProduct/notices_product.twig';
    }

    protected function getData(): array
    {
        return Database::getRepo('\XLite\Module\Samedi\AdvancedNoticeProduct\Model\Notice')
            ->findBy([
                'enabled' => true,
                'product_id' => Request::getInstance()->product_id
            ]
        );
    }
}