<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\HalfFinding\Services;

class HalfFindingService extends \Rankfoundry\eBaySDK\HalfFinding\Services\HalfFindingBaseService
{
    const API_VERSION = '1.2.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \Rankfoundry\eBaySDK\HalfFinding\Types\GetVersionRequest $request
     * @return \Rankfoundry\eBaySDK\HalfFinding\Types\GetVersionResponse
     */
    public function getVersion(\Rankfoundry\eBaySDK\HalfFinding\Types\GetVersionRequest $request)
    {
        return $this->getVersionAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\HalfFinding\Types\GetVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVersionAsync(\Rankfoundry\eBaySDK\HalfFinding\Types\GetVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getVersion',
            $request,
            '\Rankfoundry\eBaySDK\HalfFinding\Types\GetVersionResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\HalfFinding\Types\FindItemsRequest $request
     * @return \Rankfoundry\eBaySDK\HalfFinding\Types\FindItemsResponse
     */
    public function findHalfItems(\Rankfoundry\eBaySDK\HalfFinding\Types\FindItemsRequest $request)
    {
        return $this->findHalfItemsAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\HalfFinding\Types\FindItemsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findHalfItemsAsync(\Rankfoundry\eBaySDK\HalfFinding\Types\FindItemsRequest $request)
    {
        return $this->callOperationAsync(
            'findHalfItems',
            $request,
            '\Rankfoundry\eBaySDK\HalfFinding\Types\FindItemsResponse'
        );
    }
}