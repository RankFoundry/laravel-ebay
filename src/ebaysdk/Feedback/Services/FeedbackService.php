<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\Feedback\Services;

class FeedbackService extends \Rankfoundry\eBaySDK\Feedback\Services\FeedbackBaseService
{
    const API_VERSION = '1.2.2';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryByTransactionRequest $request
     * @return \Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryResponse
     */
    public function createDSRSummaryByTransaction(\Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryByTransactionRequest $request)
    {
        return $this->createDSRSummaryByTransactionAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryByTransactionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDSRSummaryByTransactionAsync(\Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryByTransactionRequest $request)
    {
        return $this->callOperationAsync(
            'createDSRSummaryByTransaction',
            $request,
            '\Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryByPeriodRequest $request
     * @return \Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryResponse
     */
    public function createDSRSummaryByPeriod(\Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryByPeriodRequest $request)
    {
        return $this->createDSRSummaryByPeriodAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryByPeriodRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDSRSummaryByPeriodAsync(\Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryByPeriodRequest $request)
    {
        return $this->callOperationAsync(
            'createDSRSummaryByPeriod',
            $request,
            '\Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryByCategoryRequest $request
     * @return \Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryResponse
     */
    public function createDSRSummaryByCategory(\Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryByCategoryRequest $request)
    {
        return $this->createDSRSummaryByCategoryAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryByCategoryRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDSRSummaryByCategoryAsync(\Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryByCategoryRequest $request)
    {
        return $this->callOperationAsync(
            'createDSRSummaryByCategory',
            $request,
            '\Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryByShippingDetailRequest $request
     * @return \Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryResponse
     */
    public function createDSRSummaryByShippingDetail(\Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryByShippingDetailRequest $request)
    {
        return $this->createDSRSummaryByShippingDetailAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryByShippingDetailRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDSRSummaryByShippingDetailAsync(\Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryByShippingDetailRequest $request)
    {
        return $this->callOperationAsync(
            'createDSRSummaryByShippingDetail',
            $request,
            '\Rankfoundry\eBaySDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\Feedback\Types\GetDSRSummaryRequest $request
     * @return \Rankfoundry\eBaySDK\Feedback\Types\GetDSRSummaryResponse
     */
    public function getDSRSummary(\Rankfoundry\eBaySDK\Feedback\Types\GetDSRSummaryRequest $request)
    {
        return $this->getDSRSummaryAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Feedback\Types\GetDSRSummaryRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDSRSummaryAsync(\Rankfoundry\eBaySDK\Feedback\Types\GetDSRSummaryRequest $request)
    {
        return $this->callOperationAsync(
            'getDSRSummary',
            $request,
            '\Rankfoundry\eBaySDK\Feedback\Types\GetDSRSummaryResponse'
        );
    }
}
