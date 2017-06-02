<?php
namespace DTS\eBaySDK\Types\Test;

use DTS\eBaySDK as Sdk;
/**
 * These tests are to cover where we have corrected
 * the property names of various classes.
 * These names have been incorrectly named in the documentation.
 * The names used for the properties are now taken from the actual response from the API.
 */
class PropertyFixesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Incorrect documentation https://developer.ebay.com/Devzone/post-order/types/CancelSummary.html
     * Example of correct property names returned in the API https://developer.ebay.com/Devzone/post-order/post-order_v2_cancellation_search__get.html#Output
     */
    public function testCancelSummary()
    {
        $obj = new Sdk\PostOrder\Types\CancelSummary();

        $this->assertEquals(null, $obj->cancelState);
        $this->assertEquals(null, $obj->cancelStatus);
    }

    /**
     * Incorrect documentation https://developer.ebay.com/Devzone/post-order/types/ItemEligibilityResult.html
     * Example of correct property names returned in the API https://developer.ebay.com/Devzone/post-order/post-order_v2_cancellation__post.html#Samples
     */
    public function testItemEligibilityResult()
    {
        $obj = new Sdk\PostOrder\Types\ItemEligibilityResult();

        $obj->itemId = '123';
        $this->assertInternalType('string', $obj->itemId);

        $obj->transactionId = '123';
        $this->assertInternalType('string', $obj->transactionId);
    }

    /**
     * Incorrect documentation https://developer.ebay.com/Devzone/post-order/ErrorResponse.html#ErrorResponse
     * Example of correct property names returned in the API https://github.com/davidtsadler/ebay-sdk-php/issues/105
     */
    public function testError()
    {
        $obj = new Sdk\PostOrder\Types\Error();

        $obj->subdomain = '123';
        $this->assertInternalType('string', $obj->subdomain);

        $obj->errorName = '123';
        $this->assertInternalType('string', $obj->errorName);

        $obj->resolution = '123';
        $this->assertInternalType('string', $obj->resolution);

        $obj->organization = '123';
        $this->assertInternalType('string', $obj->organization);

        $obj->errorGroups = '123';
        $this->assertInternalType('string', $obj->errorGroups);
    }

    public function testDeliveryCost()
    {
        $obj = new Sdk\Fulfillment\Types\DeliveryCost();

        $obj->discountAmount = new Sdk\Fulfillment\Types\Amount();
        $this->assertInstanceOf('\DTS\eBaySDK\Fulfillment\Types\Amount', $obj->discountAmount);
    }

    /**
     * Incorrect documentation https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/ShippingFulfillment.html
     * Example of correct property names returned in the API https://developer.ebay.com/devzone/rest/api-ref/fulfillment/order-orderid_shipping_fulfillment__get.html#Samples
     */
    public function testShippingServiceCode()
    {
        $obj = new Sdk\Fulfillment\Types\ShippingFulfillment();

        $obj->shippingServiceCode = 'foo';
        $this->assertInternalType('string', $obj->shippingServiceCode);
    }

    /**
     * Incorrect documentation https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/PricingSummary.html
     * Issue discussed at https://groups.google.com/forum/?hl=en-GB#!topic/ebay-sdk-php/Pz1s0K5V9ZE
     * Replace priceDiscountSubtotal with priceDiscount.
     */
    public function testPriceDiscount()
    {
        $obj = new Sdk\Fulfillment\Types\PricingSummary();

        $obj->priceDiscount = new Sdk\Fulfillment\Types\Amount();
        $this->assertInstanceOf('\DTS\eBaySDK\Fulfillment\Types\Amount', $obj->priceDiscount);
    }

    public function testPriceDiscountSubtotalDoesNotExist()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\UnknownPropertyException', 'Unknown property');

        $obj = new Sdk\Fulfillment\Types\PricingSummary();

        $obj->priceDiscountSubtotal = new Sdk\Fulfillment\Types\Amount();
    }

    /**
     * Incorrect documentation https://developer.ebay.com/Devzone/post-order/types/CancelDetail.html
     * Example of correct property names returned in the API https://github.com/davidtsadler/ebay-sdk-php/issues/107
     */
    public function testCancelDetail()
    {
        $obj = new Sdk\PostOrder\Types\CancelDetail();

        $this->assertEquals(null, $obj->cancelState);
        $this->assertEquals(null, $obj->cancelStatus);
    }

    /**
     * Incorrect documentation https://developer.ebay.com/Devzone/post-order/types/CancelActivityHistory.html
     * Example of correct property names returned in the API https://github.com/davidtsadler/ebay-sdk-php/issues/107
     */
    public function testCancelActivityHistory()
    {
        $obj = new Sdk\PostOrder\Types\CancelActivityHistory();

        $this->assertEquals(null, $obj->cancelStateFrom);
        $this->assertEquals(null, $obj->cancelStateTo);
        /** Yes this is because there is a typo in the actual response from the API! */
        $this->assertEquals(null, $obj->cancelStatetateTo);
    }
}
