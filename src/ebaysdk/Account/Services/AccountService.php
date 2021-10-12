<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\Account\Services;

class AccountService extends \Rankfoundry\eBaySDK\Account\Services\AccountBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'CreateAFulfillmentPolicy' => [
            'method' => 'POST',
            'resource' => 'fulfillment_policy',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestResponse',
            'params' => [
            ]
        ],
        'DeleteAFulfillmentPolicy' => [
            'method' => 'DELETE',
            'resource' => 'fulfillment_policy/{fulfillmentPolicyId}',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestResponse',
            'params' => [
                'fulfillmentPolicyId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetFulfillmentPoliciesByMarketplace' => [
            'method' => 'GET',
            'resource' => 'fulfillment_policy',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestResponse',
            'params' => [
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAFulfillmentPolicyByID' => [
            'method' => 'GET',
            'resource' => 'fulfillment_policy/{fulfillmentPolicyId}',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestResponse',
            'params' => [
                'fulfillmentPolicyId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAFulfillmentPolicyByName' => [
            'method' => 'GET',
            'resource' => 'fulfillment_policy/get_by_policy_name',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestResponse',
            'params' => [
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'name' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateAFulfillmentPolicy' => [
            'method' => 'PUT',
            'resource' => 'fulfillment_policy/{fulfillmentPolicyId}',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestResponse',
            'params' => [
                'fulfillmentPolicyId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CreateAPaymentPolicy' => [
            'method' => 'POST',
            'resource' => 'payment_policy',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\CreateAPaymentPolicyRestResponse',
            'params' => [
            ]
        ],
        'DeleteAPaymentPolicy' => [
            'method' => 'DELETE',
            'resource' => 'payment_policy/{payment_policy_id}',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\DeleteAPaymentPolicyRestResponse',
            'params' => [
                'payment_policy_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetPaymentPoliciesByMarketplace' => [
            'method' => 'GET',
            'resource' => 'payment_policy',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestResponse',
            'params' => [
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAPaymentPolicyByID' => [
            'method' => 'GET',
            'resource' => 'payment_policy/{paymentPolicyId}',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestResponse',
            'params' => [
                'paymentPolicyId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAPaymentPolicyByName' => [
            'method' => 'GET',
            'resource' => 'payment_policy/get_by_policy_name',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestResponse',
            'params' => [
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'name' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateAPaymentPolicy' => [
            'method' => 'PUT',
            'resource' => 'payment_policy/{payment_policy_id}',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\UpdateAPaymentPolicyRestResponse',
            'params' => [
                'payment_policy_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAccountPrivileges' => [
            'method' => 'GET',
            'resource' => 'privilege',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\GetAccountPrivilegesRestResponse',
            'params' => [
            ]
        ],
        'GetOptedInPrograms' => [
            'method' => 'GET',
            'resource' => 'program/get_opted_in_programs',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\GetOptedInProgramsRestResponse',
            'params' => [
            ]
        ],
        'OptInToProgram' => [
            'method' => 'POST',
            'resource' => 'program/opt_in',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\OptInToProgramRestResponse',
            'params' => [
            ]
        ],
        'OptOutOfProgram' => [
            'method' => 'POST',
            'resource' => 'program/opt_out',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\OptOutOfProgramRestResponse',
            'params' => [
            ]
        ],
        'GetShippingRateTables' => [
            'method' => 'POST',
            'resource' => 'rate_table',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\GetShippingRateTablesRestResponse',
            'params' => [
                'country_code' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'CreateAReturnPolicy' => [
            'method' => 'POST',
            'resource' => 'return_policy',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\CreateAReturnPolicyRestResponse',
            'params' => [
            ]
        ],
        'DeleteAReturnPolicy' => [
            'method' => 'DELETE',
            'resource' => 'return_policy/{return_policy_id}',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\DeleteAReturnPolicyRestResponse',
            'params' => [
                'return_policy_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetReturnPoliciesByMarketplace' => [
            'method' => 'GET',
            'resource' => 'return_policy',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestResponse',
            'params' => [
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAReturnPolicyByID' => [
            'method' => 'GET',
            'resource' => 'return_policy/{returnPolicyId}',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\GetAReturnPolicyByIDRestResponse',
            'params' => [
                'returnPolicyId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAReturnPolicyByName' => [
            'method' => 'GET',
            'resource' => 'return_policy/get_by_policy_name',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\GetAReturnPolicyByNameRestResponse',
            'params' => [
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'name' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateAReturnPolicy' => [
            'method' => 'PUT',
            'resource' => 'return_policy/{return_policy_id}',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\UpdateAReturnPolicyRestResponse',
            'params' => [
                'return_policy_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CreateASalesTaxTable' => [
            'method' => 'PUT',
            'resource' => 'sales_tax/{countryCode}/{jurisdictionId}',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\CreateASalesTaxTableRestResponse',
            'params' => [
                'countryCode' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'jurisdictionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'DeleteASalesTaxTable' => [
            'method' => 'DELETE',
            'resource' => 'sales_tax/{countryCode}/{jurisdictionId}',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\DeleteASalesTaxTableRestResponse',
            'params' => [
                'countryCode' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'jurisdictionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetASalesTaxTable' => [
            'method' => 'GET',
            'resource' => 'sales_tax/{countryCode}/{jurisdictionId}',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\GetASalesTaxTableRestResponse',
            'params' => [
                'countryCode' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'jurisdictionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAllSalesTaxTables' => [
            'method' => 'GET',
            'resource' => 'sales_tax',
            'responseClass' => '\Rankfoundry\eBaySDK\Account\Types\GetAllSalesTaxTablesRestResponse',
            'params' => [
                'country_code' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestResponse
     */
    public function createAFulfillmentPolicy(\Rankfoundry\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestRequest $request)
    {
        return $this->createAFulfillmentPolicyAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAFulfillmentPolicyAsync(\Rankfoundry\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('CreateAFulfillmentPolicy', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestResponse
     */
    public function deleteAFulfillmentPolicy(\Rankfoundry\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestRequest $request)
    {
        return $this->deleteAFulfillmentPolicyAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAFulfillmentPolicyAsync(\Rankfoundry\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('DeleteAFulfillmentPolicy', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestResponse
     */
    public function getFulfillmentPoliciesByMarketplace(\Rankfoundry\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestRequest $request)
    {
        return $this->getFulfillmentPoliciesByMarketplaceAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFulfillmentPoliciesByMarketplaceAsync(\Rankfoundry\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestRequest $request)
    {
        return $this->callOperationAsync('GetFulfillmentPoliciesByMarketplace', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestResponse
     */
    public function getAFulfillmentPolicyByID(\Rankfoundry\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestRequest $request)
    {
        return $this->getAFulfillmentPolicyByIDAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAFulfillmentPolicyByIDAsync(\Rankfoundry\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestRequest $request)
    {
        return $this->callOperationAsync('GetAFulfillmentPolicyByID', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestResponse
     */
    public function getAFulfillmentPolicyByName(\Rankfoundry\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestRequest $request)
    {
        return $this->getAFulfillmentPolicyByNameAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAFulfillmentPolicyByNameAsync(\Rankfoundry\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestRequest $request)
    {
        return $this->callOperationAsync('GetAFulfillmentPolicyByName', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestResponse
     */
    public function updateAFulfillmentPolicy(\Rankfoundry\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestRequest $request)
    {
        return $this->updateAFulfillmentPolicyAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAFulfillmentPolicyAsync(\Rankfoundry\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('UpdateAFulfillmentPolicy', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\CreateAPaymentPolicyRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\CreateAPaymentPolicyRestResponse
     */
    public function createAPaymentPolicy(\Rankfoundry\eBaySDK\Account\Types\CreateAPaymentPolicyRestRequest $request)
    {
        return $this->createAPaymentPolicyAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\CreateAPaymentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAPaymentPolicyAsync(\Rankfoundry\eBaySDK\Account\Types\CreateAPaymentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('CreateAPaymentPolicy', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\DeleteAPaymentPolicyRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\DeleteAPaymentPolicyRestResponse
     */
    public function deleteAPaymentPolicy(\Rankfoundry\eBaySDK\Account\Types\DeleteAPaymentPolicyRestRequest $request)
    {
        return $this->deleteAPaymentPolicyAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\DeleteAPaymentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAPaymentPolicyAsync(\Rankfoundry\eBaySDK\Account\Types\DeleteAPaymentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('DeleteAPaymentPolicy', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestResponse
     */
    public function getPaymentPoliciesByMarketplace(\Rankfoundry\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestRequest $request)
    {
        return $this->getPaymentPoliciesByMarketplaceAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentPoliciesByMarketplaceAsync(\Rankfoundry\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestRequest $request)
    {
        return $this->callOperationAsync('GetPaymentPoliciesByMarketplace', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestResponse
     */
    public function getAPaymentPolicyByID(\Rankfoundry\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestRequest $request)
    {
        return $this->getAPaymentPolicyByIDAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAPaymentPolicyByIDAsync(\Rankfoundry\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestRequest $request)
    {
        return $this->callOperationAsync('GetAPaymentPolicyByID', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestResponse
     */
    public function getAPaymentPolicyByName(\Rankfoundry\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestRequest $request)
    {
        return $this->getAPaymentPolicyByNameAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAPaymentPolicyByNameAsync(\Rankfoundry\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestRequest $request)
    {
        return $this->callOperationAsync('GetAPaymentPolicyByName', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\UpdateAPaymentPolicyRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\UpdateAPaymentPolicyRestResponse
     */
    public function updateAPaymentPolicy(\Rankfoundry\eBaySDK\Account\Types\UpdateAPaymentPolicyRestRequest $request)
    {
        return $this->updateAPaymentPolicyAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\UpdateAPaymentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAPaymentPolicyAsync(\Rankfoundry\eBaySDK\Account\Types\UpdateAPaymentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('UpdateAPaymentPolicy', $request);
    }

    /**
     * @return \Rankfoundry\eBaySDK\Account\Types\GetAccountPrivilegesRestResponse
     */
    public function getAccountPrivileges()
    {
        return $this->getAccountPrivilegesAsync()->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccountPrivilegesAsync()
    {
        return $this->callOperationAsync('GetAccountPrivileges');
    }

    /**
     * @return \Rankfoundry\eBaySDK\Account\Types\GetOptedInProgramsRestResponse
     */
    public function getOptedInPrograms()
    {
        return $this->getOptedInProgramsAsync()->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOptedInProgramsAsync()
    {
        return $this->callOperationAsync('GetOptedInPrograms');
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\OptInToProgramRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\OptInToProgramRestResponse
     */
    public function optInToProgram(\Rankfoundry\eBaySDK\Account\Types\OptInToProgramRestRequest $request)
    {
        return $this->optInToProgramAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\OptInToProgramRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function optInToProgramAsync(\Rankfoundry\eBaySDK\Account\Types\OptInToProgramRestRequest $request)
    {
        return $this->callOperationAsync('OptInToProgram', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\OptOutOfProgramRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\OptOutOfProgramRestResponse
     */
    public function optOutOfProgram(\Rankfoundry\eBaySDK\Account\Types\OptOutOfProgramRestRequest $request)
    {
        return $this->optOutOfProgramAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\OptOutOfProgramRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function optOutOfProgramAsync(\Rankfoundry\eBaySDK\Account\Types\OptOutOfProgramRestRequest $request)
    {
        return $this->callOperationAsync('OptOutOfProgram', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetShippingRateTablesRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\GetShippingRateTablesRestResponse
     */
    public function getShippingRateTables(\Rankfoundry\eBaySDK\Account\Types\GetShippingRateTablesRestRequest $request)
    {
        return $this->getShippingRateTablesAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetShippingRateTablesRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShippingRateTablesAsync(\Rankfoundry\eBaySDK\Account\Types\GetShippingRateTablesRestRequest $request)
    {
        return $this->callOperationAsync('GetShippingRateTables', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\CreateAReturnPolicyRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\CreateAReturnPolicyRestResponse
     */
    public function createAReturnPolicy(\Rankfoundry\eBaySDK\Account\Types\CreateAReturnPolicyRestRequest $request)
    {
        return $this->createAReturnPolicyAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\CreateAReturnPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAReturnPolicyAsync(\Rankfoundry\eBaySDK\Account\Types\CreateAReturnPolicyRestRequest $request)
    {
        return $this->callOperationAsync('CreateAReturnPolicy', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\DeleteAReturnPolicyRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\DeleteAReturnPolicyRestResponse
     */
    public function deleteAReturnPolicy(\Rankfoundry\eBaySDK\Account\Types\DeleteAReturnPolicyRestRequest $request)
    {
        return $this->deleteAReturnPolicyAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\DeleteAReturnPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAReturnPolicyAsync(\Rankfoundry\eBaySDK\Account\Types\DeleteAReturnPolicyRestRequest $request)
    {
        return $this->callOperationAsync('DeleteAReturnPolicy', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestResponse
     */
    public function getReturnPoliciesByMarketplace(\Rankfoundry\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestRequest $request)
    {
        return $this->getReturnPoliciesByMarketplaceAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReturnPoliciesByMarketplaceAsync(\Rankfoundry\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestRequest $request)
    {
        return $this->callOperationAsync('GetReturnPoliciesByMarketplace', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetAReturnPolicyByIDRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\GetAReturnPolicyByIDRestResponse
     */
    public function getAReturnPolicyByID(\Rankfoundry\eBaySDK\Account\Types\GetAReturnPolicyByIDRestRequest $request)
    {
        return $this->getAReturnPolicyByIDAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetAReturnPolicyByIDRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAReturnPolicyByIDAsync(\Rankfoundry\eBaySDK\Account\Types\GetAReturnPolicyByIDRestRequest $request)
    {
        return $this->callOperationAsync('GetAReturnPolicyByID', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetAReturnPolicyByNameRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\GetAReturnPolicyByNameRestResponse
     */
    public function getAReturnPolicyByName(\Rankfoundry\eBaySDK\Account\Types\GetAReturnPolicyByNameRestRequest $request)
    {
        return $this->getAReturnPolicyByNameAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetAReturnPolicyByNameRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAReturnPolicyByNameAsync(\Rankfoundry\eBaySDK\Account\Types\GetAReturnPolicyByNameRestRequest $request)
    {
        return $this->callOperationAsync('GetAReturnPolicyByName', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\UpdateAReturnPolicyRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\UpdateAReturnPolicyRestResponse
     */
    public function updateAReturnPolicy(\Rankfoundry\eBaySDK\Account\Types\UpdateAReturnPolicyRestRequest $request)
    {
        return $this->updateAReturnPolicyAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\UpdateAReturnPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAReturnPolicyAsync(\Rankfoundry\eBaySDK\Account\Types\UpdateAReturnPolicyRestRequest $request)
    {
        return $this->callOperationAsync('UpdateAReturnPolicy', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\CreateASalesTaxTableRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\CreateASalesTaxTableRestResponse
     */
    public function createASalesTaxTable(\Rankfoundry\eBaySDK\Account\Types\CreateASalesTaxTableRestRequest $request)
    {
        return $this->createASalesTaxTableAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\CreateASalesTaxTableRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createASalesTaxTableAsync(\Rankfoundry\eBaySDK\Account\Types\CreateASalesTaxTableRestRequest $request)
    {
        return $this->callOperationAsync('CreateASalesTaxTable', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\DeleteASalesTaxTableRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\DeleteASalesTaxTableRestResponse
     */
    public function deleteASalesTaxTable(\Rankfoundry\eBaySDK\Account\Types\DeleteASalesTaxTableRestRequest $request)
    {
        return $this->deleteASalesTaxTableAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\DeleteASalesTaxTableRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteASalesTaxTableAsync(\Rankfoundry\eBaySDK\Account\Types\DeleteASalesTaxTableRestRequest $request)
    {
        return $this->callOperationAsync('DeleteASalesTaxTable', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetASalesTaxTableRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\GetASalesTaxTableRestResponse
     */
    public function getASalesTaxTable(\Rankfoundry\eBaySDK\Account\Types\GetASalesTaxTableRestRequest $request)
    {
        return $this->getASalesTaxTableAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetASalesTaxTableRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getASalesTaxTableAsync(\Rankfoundry\eBaySDK\Account\Types\GetASalesTaxTableRestRequest $request)
    {
        return $this->callOperationAsync('GetASalesTaxTable', $request);
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetAllSalesTaxTablesRestRequest $request
     * @return \Rankfoundry\eBaySDK\Account\Types\GetAllSalesTaxTablesRestResponse
     */
    public function getAllSalesTaxTables(\Rankfoundry\eBaySDK\Account\Types\GetAllSalesTaxTablesRestRequest $request)
    {
        return $this->getAllSalesTaxTablesAsync($request)->wait();
    }

    /**
     * @param \Rankfoundry\eBaySDK\Account\Types\GetAllSalesTaxTablesRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllSalesTaxTablesAsync(\Rankfoundry\eBaySDK\Account\Types\GetAllSalesTaxTablesRestRequest $request)
    {
        return $this->callOperationAsync('GetAllSalesTaxTables', $request);
    }
}