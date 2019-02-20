<?php


namespace W2\SearchSort\Plugin\Magento\CatalogSearch\Block;

class Result
{

    public function afterSetListOrders(
        \Magento\CatalogSearch\Block\Result $subject,
        $result
    ) {

        $result->getListBlock()->setDefaultDirection(
            'desc'
        )->setDefaultSortBy(
            'price'
        );

        return $result;

    }
}
