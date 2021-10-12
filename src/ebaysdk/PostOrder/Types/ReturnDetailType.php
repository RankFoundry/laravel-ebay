<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\PostOrder\Types;

/**
 *
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\ReturnAddressType $buyerAddress
 * @property string $buyerLoginName
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\ReturnCloseInfoType $closeInfo
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\DispositionRuleDetailType[] $dispositionRuleDetail
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\ReturnFileType[] $files
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\ReturnHoldInfoType $holdInfo
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\ItemDetailType $itemDetail
 * @property \Rankfoundry\eBaySDK\PostOrder\Enums\MarketplaceIdEnum $marketplaceId
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\MoneyMovementDetailType[] $moneyMovementInfo
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\RefundInfoType $refundInfo
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\ShipmentType $replacementShipmentInfo
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\ReturnResponseHistoryType[] $responseHistory
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\ShipmentType $returnShipmentInfo
 * @property string $RMANumber
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\ReturnAddressType $sellerAddress
 * @property string $sellerLoginName
 */
class ReturnDetailType extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'buyerAddress' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\ReturnAddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerAddress'
        ],
        'buyerLoginName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerLoginName'
        ],
        'closeInfo' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\ReturnCloseInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'closeInfo'
        ],
        'dispositionRuleDetail' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\DispositionRuleDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'dispositionRuleDetail'
        ],
        'files' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\ReturnFileType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'files'
        ],
        'holdInfo' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\ReturnHoldInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'holdInfo'
        ],
        'itemDetail' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\ItemDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemDetail'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'moneyMovementInfo' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\MoneyMovementDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'moneyMovementInfo'
        ],
        'refundInfo' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\RefundInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundInfo'
        ],
        'replacementShipmentInfo' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\ShipmentType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'replacementShipmentInfo'
        ],
        'responseHistory' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\ReturnResponseHistoryType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'responseHistory'
        ],
        'returnShipmentInfo' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\ShipmentType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnShipmentInfo'
        ],
        'RMANumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RMANumber'
        ],
        'sellerAddress' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\ReturnAddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerAddress'
        ],
        'sellerLoginName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerLoginName'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
