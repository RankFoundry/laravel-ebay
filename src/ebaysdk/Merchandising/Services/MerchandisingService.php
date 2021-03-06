<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\Merchandising\Services;

class MerchandisingService extends \Rankfoundry\eBaySDK\Merchandising\Services\MerchandisingBaseService
{
    const API_VERSION = '1.5.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Merchandising\Types\GetRelatedCategoryItemsRequest $request
     * @return \Rankfoundry\eBaySDK\Merchandising\Types\MerchandisingServiceItemResponse
     */
    public function getRelatedCategoryItems(\Rankfoundry\eBaySDK\Merchandising\Types\GetRelatedCategoryItemsRequest $request)
    {
        return $this->getRelatedCategoryItemsAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Merchandising\Types\GetRelatedCategoryItemsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRelatedCategoryItemsAsync(\Rankfoundry\eBaySDK\Merchandising\Types\GetRelatedCategoryItemsRequest $request)
    {
        return $this->callOperationAsync(
            'getRelatedCategoryItems',
            $request,
            '\Rankfoundry\eBaySDK\Merchandising\Types\MerchandisingServiceItemResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\Merchandising\Types\GetMostWatchedItemsRequest $request
     * @return \Rankfoundry\eBaySDK\Merchandising\Types\MerchandisingServiceItemResponse
     */
    public function getMostWatchedItems(\Rankfoundry\eBaySDK\Merchandising\Types\GetMostWatchedItemsRequest $request)
    {
        return $this->getMostWatchedItemsAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Merchandising\Types\GetMostWatchedItemsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMostWatchedItemsAsync(\Rankfoundry\eBaySDK\Merchandising\Types\GetMostWatchedItemsRequest $request)
    {
        return $this->callOperationAsync(
            'getMostWatchedItems',
            $request,
            '\Rankfoundry\eBaySDK\Merchandising\Types\MerchandisingServiceItemResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\Merchandising\Types\GetTopSellingProductsRequest $request
     * @return \Rankfoundry\eBaySDK\Merchandising\Types\MerchandisingServiceProductResponse
     */
    public function getTopSellingProducts(\Rankfoundry\eBaySDK\Merchandising\Types\GetTopSellingProductsRequest $request)
    {
        return $this->getTopSellingProductsAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Merchandising\Types\GetTopSellingProductsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTopSellingProductsAsync(\Rankfoundry\eBaySDK\Merchandising\Types\GetTopSellingProductsRequest $request)
    {
        return $this->callOperationAsync(
            'getTopSellingProducts',
            $request,
            '\Rankfoundry\eBaySDK\Merchandising\Types\MerchandisingServiceProductResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\Merchandising\Types\GetDealsRequest $request
     * @return \Rankfoundry\eBaySDK\Merchandising\Types\MerchandisingServiceItemResponse
     */
    public function getDeals(\Rankfoundry\eBaySDK\Merchandising\Types\GetDealsRequest $request)
    {
        return $this->getDealsAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Merchandising\Types\GetDealsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDealsAsync(\Rankfoundry\eBaySDK\Merchandising\Types\GetDealsRequest $request)
    {
        return $this->callOperationAsync(
            'getDeals',
            $request,
            '\Rankfoundry\eBaySDK\Merchandising\Types\MerchandisingServiceItemResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\Merchandising\Types\GetSimilarItemsRequest $request
     * @return \Rankfoundry\eBaySDK\Merchandising\Types\MerchandisingServiceItemResponse
     */
    public function getSimilarItems(\Rankfoundry\eBaySDK\Merchandising\Types\GetSimilarItemsRequest $request)
    {
        return $this->getSimilarItemsAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Merchandising\Types\GetSimilarItemsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSimilarItemsAsync(\Rankfoundry\eBaySDK\Merchandising\Types\GetSimilarItemsRequest $request)
    {
        return $this->callOperationAsync(
            'getSimilarItems',
            $request,
            '\Rankfoundry\eBaySDK\Merchandising\Types\MerchandisingServiceItemResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\Merchandising\Types\GetVersionRequest $request
     * @return \Rankfoundry\eBaySDK\Merchandising\Types\GetVersionResponse
     */
    public function getVersion(\Rankfoundry\eBaySDK\Merchandising\Types\GetVersionRequest $request)
    {
        return $this->getVersionAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Merchandising\Types\GetVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVersionAsync(\Rankfoundry\eBaySDK\Merchandising\Types\GetVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getVersion',
            $request,
            '\Rankfoundry\eBaySDK\Merchandising\Types\GetVersionResponse'
        );
    }
}
