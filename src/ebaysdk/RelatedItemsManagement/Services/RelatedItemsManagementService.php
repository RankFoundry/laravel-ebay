<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\RelatedItemsManagement\Services;

class RelatedItemsManagementService extends \Rankfoundry\eBaySDK\RelatedItemsManagement\Services\RelatedItemsManagementBaseService
{
    const API_VERSION = '1.0.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\CreateBundlesRequest $request
     * @return \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\CreateBundlesResponse
     */
    public function createBundles(\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\CreateBundlesRequest $request)
    {
        return $this->createBundlesAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\CreateBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createBundlesAsync(\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\CreateBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'createBundles',
            $request,
            '\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\CreateBundlesResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\FindBundlesRequest $request
     * @return \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\FindBundlesResponse
     */
    public function findBundles(\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\FindBundlesRequest $request)
    {
        return $this->findBundlesAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\FindBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findBundlesAsync(\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\FindBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'findBundles',
            $request,
            '\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\FindBundlesResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\GetBundlesRequest $request
     * @return \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\GetBundlesResponse
     */
    public function getBundles(\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\GetBundlesRequest $request)
    {
        return $this->getBundlesAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\GetBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBundlesAsync(\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\GetBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'getBundles',
            $request,
            '\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\GetBundlesResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesRequest $request
     * @return \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesResponse
     */
    public function updateBundles(\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesRequest $request)
    {
        return $this->updateBundlesAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBundlesAsync(\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'updateBundles',
            $request,
            '\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusRequest $request
     * @return \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusResponse
     */
    public function updateBundleStatus(\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusRequest $request)
    {
        return $this->updateBundleStatusAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBundleStatusAsync(\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusRequest $request)
    {
        return $this->callOperationAsync(
            'updateBundleStatus',
            $request,
            '\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesRequest $request
     * @return \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesResponse
     */
    public function deleteBundles(\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesRequest $request)
    {
        return $this->deleteBundlesAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteBundlesAsync(\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'deleteBundles',
            $request,
            '\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\GetVersionRequest $request
     * @return \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\GetVersionResponse
     */
    public function getVersion(\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\GetVersionRequest $request)
    {
        return $this->getVersionAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\GetVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVersionAsync(\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\GetVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getVersion',
            $request,
            '\Rankfoundry\eBaySDK\RelatedItemsManagement\Types\GetVersionResponse'
        );
    }
}
