<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\BulkDataExchange\Services;

class BulkDataExchangeService extends \Rankfoundry\eBaySDK\BulkDataExchange\Services\BulkDataExchangeBaseService
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
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\CreateUploadJobRequest $request
     * @return \Rankfoundry\eBaySDK\BulkDataExchange\Types\CreateUploadJobResponse
     */
    public function createUploadJob(\Rankfoundry\eBaySDK\BulkDataExchange\Types\CreateUploadJobRequest $request)
    {
        return $this->createUploadJobAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\CreateUploadJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createUploadJobAsync(\Rankfoundry\eBaySDK\BulkDataExchange\Types\CreateUploadJobRequest $request)
    {
        return $this->callOperationAsync(
            'createUploadJob',
            $request,
            '\Rankfoundry\eBaySDK\BulkDataExchange\Types\CreateUploadJobResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\StartUploadJobRequest $request
     * @return \Rankfoundry\eBaySDK\BulkDataExchange\Types\StartUploadJobResponse
     */
    public function startUploadJob(\Rankfoundry\eBaySDK\BulkDataExchange\Types\StartUploadJobRequest $request)
    {
        return $this->startUploadJobAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\StartUploadJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function startUploadJobAsync(\Rankfoundry\eBaySDK\BulkDataExchange\Types\StartUploadJobRequest $request)
    {
        return $this->callOperationAsync(
            'startUploadJob',
            $request,
            '\Rankfoundry\eBaySDK\BulkDataExchange\Types\StartUploadJobResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\AbortJobRequest $request
     * @return \Rankfoundry\eBaySDK\BulkDataExchange\Types\AbortJobResponse
     */
    public function abortJob(\Rankfoundry\eBaySDK\BulkDataExchange\Types\AbortJobRequest $request)
    {
        return $this->abortJobAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\AbortJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function abortJobAsync(\Rankfoundry\eBaySDK\BulkDataExchange\Types\AbortJobRequest $request)
    {
        return $this->callOperationAsync(
            'abortJob',
            $request,
            '\Rankfoundry\eBaySDK\BulkDataExchange\Types\AbortJobResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\GetJobsRequest $request
     * @return \Rankfoundry\eBaySDK\BulkDataExchange\Types\GetJobsResponse
     */
    public function getJobs(\Rankfoundry\eBaySDK\BulkDataExchange\Types\GetJobsRequest $request)
    {
        return $this->getJobsAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\GetJobsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getJobsAsync(\Rankfoundry\eBaySDK\BulkDataExchange\Types\GetJobsRequest $request)
    {
        return $this->callOperationAsync(
            'getJobs',
            $request,
            '\Rankfoundry\eBaySDK\BulkDataExchange\Types\GetJobsResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest $request
     * @return \Rankfoundry\eBaySDK\BulkDataExchange\Types\GetJobStatusResponse
     */
    public function getJobStatus(\Rankfoundry\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest $request)
    {
        return $this->getJobStatusAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getJobStatusAsync(\Rankfoundry\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest $request)
    {
        return $this->callOperationAsync(
            'getJobStatus',
            $request,
            '\Rankfoundry\eBaySDK\BulkDataExchange\Types\GetJobStatusResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest $request
     * @return \Rankfoundry\eBaySDK\BulkDataExchange\Types\StartDownloadJobResponse
     */
    public function startDownloadJob(\Rankfoundry\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest $request)
    {
        return $this->startDownloadJobAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function startDownloadJobAsync(\Rankfoundry\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest $request)
    {
        return $this->callOperationAsync(
            'startDownloadJob',
            $request,
            '\Rankfoundry\eBaySDK\BulkDataExchange\Types\StartDownloadJobResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\CreateRecurringJobRequest $request
     * @return \Rankfoundry\eBaySDK\BulkDataExchange\Types\CreateRecurringJobResponse
     */
    public function createRecurringJob(\Rankfoundry\eBaySDK\BulkDataExchange\Types\CreateRecurringJobRequest $request)
    {
        return $this->createRecurringJobAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\CreateRecurringJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRecurringJobAsync(\Rankfoundry\eBaySDK\BulkDataExchange\Types\CreateRecurringJobRequest $request)
    {
        return $this->callOperationAsync(
            'createRecurringJob',
            $request,
            '\Rankfoundry\eBaySDK\BulkDataExchange\Types\CreateRecurringJobResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobRequest $request
     * @return \Rankfoundry\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobResponse
     */
    public function deleteRecurringJob(\Rankfoundry\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobRequest $request)
    {
        return $this->deleteRecurringJobAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteRecurringJobAsync(\Rankfoundry\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobRequest $request)
    {
        return $this->callOperationAsync(
            'deleteRecurringJob',
            $request,
            '\Rankfoundry\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobsRequest $request
     * @return \Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobsResponse
     */
    public function getRecurringJobs(\Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobsRequest $request)
    {
        return $this->getRecurringJobsAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRecurringJobsAsync(\Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobsRequest $request)
    {
        return $this->callOperationAsync(
            'getRecurringJobs',
            $request,
            '\Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobsResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest $request
     * @return \Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusResponse
     */
    public function getRecurringJobExecutionStatus(\Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest $request)
    {
        return $this->getRecurringJobExecutionStatusAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRecurringJobExecutionStatusAsync(\Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest $request)
    {
        return $this->callOperationAsync(
            'getRecurringJobExecutionStatus',
            $request,
            '\Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest $request
     * @return \Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryResponse
     */
    public function getRecurringJobExecutionHistory(\Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest $request)
    {
        return $this->getRecurringJobExecutionHistoryAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRecurringJobExecutionHistoryAsync(\Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest $request)
    {
        return $this->callOperationAsync(
            'getRecurringJobExecutionHistory',
            $request,
            '\Rankfoundry\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest $request
     * @return \Rankfoundry\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobResponse
     */
    public function activateRecurringJob(\Rankfoundry\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest $request)
    {
        return $this->activateRecurringJobAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function activateRecurringJobAsync(\Rankfoundry\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest $request)
    {
        return $this->callOperationAsync(
            'activateRecurringJob',
            $request,
            '\Rankfoundry\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest $request
     * @return \Rankfoundry\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobResponse
     */
    public function suspendRecurringJob(\Rankfoundry\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest $request)
    {
        return $this->suspendRecurringJobAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function suspendRecurringJobAsync(\Rankfoundry\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest $request)
    {
        return $this->callOperationAsync(
            'suspendRecurringJob',
            $request,
            '\Rankfoundry\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobResponse'
        );
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest $request
     * @return \Rankfoundry\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionResponse
     */
    public function abortRecurringJobExecution(\Rankfoundry\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest $request)
    {
        return $this->abortRecurringJobExecutionAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function abortRecurringJobExecutionAsync(\Rankfoundry\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest $request)
    {
        return $this->callOperationAsync(
            'abortRecurringJobExecution',
            $request,
            '\Rankfoundry\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionResponse'
        );
    }
}
