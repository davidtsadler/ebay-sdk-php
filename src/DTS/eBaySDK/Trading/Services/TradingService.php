<?php
/**
 * THE CODE IN THIS FILE WAS GENERATED FROM THE EBAY WSDL USING THE PROJECT:
 *
 * https://github.com/davidtsadler/ebay-api-sdk-php
 *
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Trading\Services;

class TradingService extends \DTS\eBaySDK\Trading\Services\TradingBaseService
{
    /**
     * @param array $config Optional configuration option values.
     * @param \DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient The object that will handle sending requests to the API.
     */
    public function __construct($config = array(), \DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient = null)
    {
        parent::__construct($config, $httpClient);
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\AddDisputeRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\AddDisputeResponseType
     */
    public function addDispute(\DTS\eBaySDK\Trading\Types\AddDisputeRequestType $request)
    {
        return $this->callOperation(
            'AddDispute',
            $request,
            '\DTS\eBaySDK\Trading\Types\AddDisputeResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\AddDisputeResponseRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\AddDisputeResponseResponseType
     */
    public function addDisputeResponse(\DTS\eBaySDK\Trading\Types\AddDisputeResponseRequestType $request)
    {
        return $this->callOperation(
            'AddDisputeResponse',
            $request,
            '\DTS\eBaySDK\Trading\Types\AddDisputeResponseResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\AddFixedPriceItemRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\AddFixedPriceItemResponseType
     */
    public function addFixedPriceItem(\DTS\eBaySDK\Trading\Types\AddFixedPriceItemRequestType $request)
    {
        return $this->callOperation(
            'AddFixedPriceItem',
            $request,
            '\DTS\eBaySDK\Trading\Types\AddFixedPriceItemResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\AddItemRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\AddItemResponseType
     */
    public function addItem(\DTS\eBaySDK\Trading\Types\AddItemRequestType $request)
    {
        return $this->callOperation(
            'AddItem',
            $request,
            '\DTS\eBaySDK\Trading\Types\AddItemResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\AddItemFromSellingManagerTemplateRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\AddItemFromSellingManagerTemplateResponseType
     */
    public function addItemFromSellingManagerTemplate(\DTS\eBaySDK\Trading\Types\AddItemFromSellingManagerTemplateRequestType $request)
    {
        return $this->callOperation(
            'AddItemFromSellingManagerTemplate',
            $request,
            '\DTS\eBaySDK\Trading\Types\AddItemFromSellingManagerTemplateResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\AddItemsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\AddItemsResponseType
     */
    public function addItems(\DTS\eBaySDK\Trading\Types\AddItemsRequestType $request)
    {
        return $this->callOperation(
            'AddItems',
            $request,
            '\DTS\eBaySDK\Trading\Types\AddItemsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\AddMemberMessageAAQToPartnerRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\AddMemberMessageAAQToPartnerResponseType
     */
    public function addMemberMessageAAQToPartner(\DTS\eBaySDK\Trading\Types\AddMemberMessageAAQToPartnerRequestType $request)
    {
        return $this->callOperation(
            'AddMemberMessageAAQToPartner',
            $request,
            '\DTS\eBaySDK\Trading\Types\AddMemberMessageAAQToPartnerResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\AddMemberMessageRTQRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\AddMemberMessageRTQResponseType
     */
    public function addMemberMessageRTQ(\DTS\eBaySDK\Trading\Types\AddMemberMessageRTQRequestType $request)
    {
        return $this->callOperation(
            'AddMemberMessageRTQ',
            $request,
            '\DTS\eBaySDK\Trading\Types\AddMemberMessageRTQResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\AddMemberMessagesAAQToBidderRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\AddMemberMessagesAAQToBidderResponseType
     */
    public function addMemberMessagesAAQToBidder(\DTS\eBaySDK\Trading\Types\AddMemberMessagesAAQToBidderRequestType $request)
    {
        return $this->callOperation(
            'AddMemberMessagesAAQToBidder',
            $request,
            '\DTS\eBaySDK\Trading\Types\AddMemberMessagesAAQToBidderResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\AddOrderRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\AddOrderResponseType
     */
    public function addOrder(\DTS\eBaySDK\Trading\Types\AddOrderRequestType $request)
    {
        return $this->callOperation(
            'AddOrder',
            $request,
            '\DTS\eBaySDK\Trading\Types\AddOrderResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\AddSecondChanceItemRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\AddSecondChanceItemResponseType
     */
    public function addSecondChanceItem(\DTS\eBaySDK\Trading\Types\AddSecondChanceItemRequestType $request)
    {
        return $this->callOperation(
            'AddSecondChanceItem',
            $request,
            '\DTS\eBaySDK\Trading\Types\AddSecondChanceItemResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\AddSellingManagerInventoryFolderRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\AddSellingManagerInventoryFolderResponseType
     */
    public function addSellingManagerInventoryFolder(\DTS\eBaySDK\Trading\Types\AddSellingManagerInventoryFolderRequestType $request)
    {
        return $this->callOperation(
            'AddSellingManagerInventoryFolder',
            $request,
            '\DTS\eBaySDK\Trading\Types\AddSellingManagerInventoryFolderResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\AddSellingManagerProductRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\AddSellingManagerProductResponseType
     */
    public function addSellingManagerProduct(\DTS\eBaySDK\Trading\Types\AddSellingManagerProductRequestType $request)
    {
        return $this->callOperation(
            'AddSellingManagerProduct',
            $request,
            '\DTS\eBaySDK\Trading\Types\AddSellingManagerProductResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\AddSellingManagerTemplateRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\AddSellingManagerTemplateResponseType
     */
    public function addSellingManagerTemplate(\DTS\eBaySDK\Trading\Types\AddSellingManagerTemplateRequestType $request)
    {
        return $this->callOperation(
            'AddSellingManagerTemplate',
            $request,
            '\DTS\eBaySDK\Trading\Types\AddSellingManagerTemplateResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\AddToItemDescriptionRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\AddToItemDescriptionResponseType
     */
    public function addToItemDescription(\DTS\eBaySDK\Trading\Types\AddToItemDescriptionRequestType $request)
    {
        return $this->callOperation(
            'AddToItemDescription',
            $request,
            '\DTS\eBaySDK\Trading\Types\AddToItemDescriptionResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\AddToWatchListRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\AddToWatchListResponseType
     */
    public function addToWatchList(\DTS\eBaySDK\Trading\Types\AddToWatchListRequestType $request)
    {
        return $this->callOperation(
            'AddToWatchList',
            $request,
            '\DTS\eBaySDK\Trading\Types\AddToWatchListResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\AddTransactionConfirmationItemRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\AddTransactionConfirmationItemResponseType
     */
    public function addTransactionConfirmationItem(\DTS\eBaySDK\Trading\Types\AddTransactionConfirmationItemRequestType $request)
    {
        return $this->callOperation(
            'AddTransactionConfirmationItem',
            $request,
            '\DTS\eBaySDK\Trading\Types\AddTransactionConfirmationItemResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\CompleteSaleRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\CompleteSaleResponseType
     */
    public function completeSale(\DTS\eBaySDK\Trading\Types\CompleteSaleRequestType $request)
    {
        return $this->callOperation(
            'CompleteSale',
            $request,
            '\DTS\eBaySDK\Trading\Types\CompleteSaleResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\ConfirmIdentityRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\ConfirmIdentityResponseType
     */
    public function confirmIdentity(\DTS\eBaySDK\Trading\Types\ConfirmIdentityRequestType $request)
    {
        return $this->callOperation(
            'ConfirmIdentity',
            $request,
            '\DTS\eBaySDK\Trading\Types\ConfirmIdentityResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\DeleteMyMessagesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\DeleteMyMessagesResponseType
     */
    public function deleteMyMessages(\DTS\eBaySDK\Trading\Types\DeleteMyMessagesRequestType $request)
    {
        return $this->callOperation(
            'DeleteMyMessages',
            $request,
            '\DTS\eBaySDK\Trading\Types\DeleteMyMessagesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\DeleteSellingManagerInventoryFolderRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\DeleteSellingManagerInventoryFolderResponseType
     */
    public function deleteSellingManagerInventoryFolder(\DTS\eBaySDK\Trading\Types\DeleteSellingManagerInventoryFolderRequestType $request)
    {
        return $this->callOperation(
            'DeleteSellingManagerInventoryFolder',
            $request,
            '\DTS\eBaySDK\Trading\Types\DeleteSellingManagerInventoryFolderResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\DeleteSellingManagerItemAutomationRuleRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\DeleteSellingManagerItemAutomationRuleResponseType
     */
    public function deleteSellingManagerItemAutomationRule(\DTS\eBaySDK\Trading\Types\DeleteSellingManagerItemAutomationRuleRequestType $request)
    {
        return $this->callOperation(
            'DeleteSellingManagerItemAutomationRule',
            $request,
            '\DTS\eBaySDK\Trading\Types\DeleteSellingManagerItemAutomationRuleResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\DeleteSellingManagerProductRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\DeleteSellingManagerProductResponseType
     */
    public function deleteSellingManagerProduct(\DTS\eBaySDK\Trading\Types\DeleteSellingManagerProductRequestType $request)
    {
        return $this->callOperation(
            'DeleteSellingManagerProduct',
            $request,
            '\DTS\eBaySDK\Trading\Types\DeleteSellingManagerProductResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\DeleteSellingManagerTemplateRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\DeleteSellingManagerTemplateResponseType
     */
    public function deleteSellingManagerTemplate(\DTS\eBaySDK\Trading\Types\DeleteSellingManagerTemplateRequestType $request)
    {
        return $this->callOperation(
            'DeleteSellingManagerTemplate',
            $request,
            '\DTS\eBaySDK\Trading\Types\DeleteSellingManagerTemplateResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\DeleteSellingManagerTemplateAutomationRuleRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\DeleteSellingManagerTemplateAutomationRuleResponseType
     */
    public function deleteSellingManagerTemplateAutomationRule(\DTS\eBaySDK\Trading\Types\DeleteSellingManagerTemplateAutomationRuleRequestType $request)
    {
        return $this->callOperation(
            'DeleteSellingManagerTemplateAutomationRule',
            $request,
            '\DTS\eBaySDK\Trading\Types\DeleteSellingManagerTemplateAutomationRuleResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\DisableUnpaidItemAssistanceRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\DisableUnpaidItemAssistanceResponseType
     */
    public function disableUnpaidItemAssistance(\DTS\eBaySDK\Trading\Types\DisableUnpaidItemAssistanceRequestType $request)
    {
        return $this->callOperation(
            'DisableUnpaidItemAssistance',
            $request,
            '\DTS\eBaySDK\Trading\Types\DisableUnpaidItemAssistanceResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\EndFixedPriceItemRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\EndFixedPriceItemResponseType
     */
    public function endFixedPriceItem(\DTS\eBaySDK\Trading\Types\EndFixedPriceItemRequestType $request)
    {
        return $this->callOperation(
            'EndFixedPriceItem',
            $request,
            '\DTS\eBaySDK\Trading\Types\EndFixedPriceItemResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\EndItemRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\EndItemResponseType
     */
    public function endItem(\DTS\eBaySDK\Trading\Types\EndItemRequestType $request)
    {
        return $this->callOperation(
            'EndItem',
            $request,
            '\DTS\eBaySDK\Trading\Types\EndItemResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\EndItemsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\EndItemsResponseType
     */
    public function endItems(\DTS\eBaySDK\Trading\Types\EndItemsRequestType $request)
    {
        return $this->callOperation(
            'EndItems',
            $request,
            '\DTS\eBaySDK\Trading\Types\EndItemsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\ExtendSiteHostedPicturesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\ExtendSiteHostedPicturesResponseType
     */
    public function extendSiteHostedPictures(\DTS\eBaySDK\Trading\Types\ExtendSiteHostedPicturesRequestType $request)
    {
        return $this->callOperation(
            'ExtendSiteHostedPictures',
            $request,
            '\DTS\eBaySDK\Trading\Types\ExtendSiteHostedPicturesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\FetchTokenRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\FetchTokenResponseType
     */
    public function fetchToken(\DTS\eBaySDK\Trading\Types\FetchTokenRequestType $request)
    {
        return $this->callOperation(
            'FetchToken',
            $request,
            '\DTS\eBaySDK\Trading\Types\FetchTokenResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetAccountRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetAccountResponseType
     */
    public function getAccount(\DTS\eBaySDK\Trading\Types\GetAccountRequestType $request)
    {
        return $this->callOperation(
            'GetAccount',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetAccountResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetAdFormatLeadsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetAdFormatLeadsResponseType
     */
    public function getAdFormatLeads(\DTS\eBaySDK\Trading\Types\GetAdFormatLeadsRequestType $request)
    {
        return $this->callOperation(
            'GetAdFormatLeads',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetAdFormatLeadsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetAllBiddersRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetAllBiddersResponseType
     */
    public function getAllBidders(\DTS\eBaySDK\Trading\Types\GetAllBiddersRequestType $request)
    {
        return $this->callOperation(
            'GetAllBidders',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetAllBiddersResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetApiAccessRulesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetApiAccessRulesResponseType
     */
    public function getApiAccessRules(\DTS\eBaySDK\Trading\Types\GetApiAccessRulesRequestType $request)
    {
        return $this->callOperation(
            'GetApiAccessRules',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetApiAccessRulesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetAttributesCSRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetAttributesCSResponseType
     */
    public function getAttributesCS(\DTS\eBaySDK\Trading\Types\GetAttributesCSRequestType $request)
    {
        return $this->callOperation(
            'GetAttributesCS',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetAttributesCSResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetAttributesXSLRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetAttributesXSLResponseType
     */
    public function getAttributesXSL(\DTS\eBaySDK\Trading\Types\GetAttributesXSLRequestType $request)
    {
        return $this->callOperation(
            'GetAttributesXSL',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetAttributesXSLResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetBestOffersRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetBestOffersResponseType
     */
    public function getBestOffers(\DTS\eBaySDK\Trading\Types\GetBestOffersRequestType $request)
    {
        return $this->callOperation(
            'GetBestOffers',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetBestOffersResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetBidderListRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetBidderListResponseType
     */
    public function getBidderList(\DTS\eBaySDK\Trading\Types\GetBidderListRequestType $request)
    {
        return $this->callOperation(
            'GetBidderList',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetBidderListResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetCategoriesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetCategoriesResponseType
     */
    public function getCategories(\DTS\eBaySDK\Trading\Types\GetCategoriesRequestType $request)
    {
        return $this->callOperation(
            'GetCategories',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetCategoriesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetCategory2CSRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetCategory2CSResponseType
     */
    public function getCategory2CS(\DTS\eBaySDK\Trading\Types\GetCategory2CSRequestType $request)
    {
        return $this->callOperation(
            'GetCategory2CS',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetCategory2CSResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetCategoryFeaturesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetCategoryFeaturesResponseType
     */
    public function getCategoryFeatures(\DTS\eBaySDK\Trading\Types\GetCategoryFeaturesRequestType $request)
    {
        return $this->callOperation(
            'GetCategoryFeatures',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetCategoryFeaturesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetCategoryMappingsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetCategoryMappingsResponseType
     */
    public function getCategoryMappings(\DTS\eBaySDK\Trading\Types\GetCategoryMappingsRequestType $request)
    {
        return $this->callOperation(
            'GetCategoryMappings',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetCategoryMappingsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetCategorySpecificsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetCategorySpecificsResponseType
     */
    public function getCategorySpecifics(\DTS\eBaySDK\Trading\Types\GetCategorySpecificsRequestType $request)
    {
        return $this->callOperation(
            'GetCategorySpecifics',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetCategorySpecificsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetChallengeTokenRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetChallengeTokenResponseType
     */
    public function getChallengeToken(\DTS\eBaySDK\Trading\Types\GetChallengeTokenRequestType $request)
    {
        return $this->callOperation(
            'GetChallengeToken',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetChallengeTokenResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetCharitiesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetCharitiesResponseType
     */
    public function getCharities(\DTS\eBaySDK\Trading\Types\GetCharitiesRequestType $request)
    {
        return $this->callOperation(
            'GetCharities',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetCharitiesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetClientAlertsAuthTokenRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetClientAlertsAuthTokenResponseType
     */
    public function getClientAlertsAuthToken(\DTS\eBaySDK\Trading\Types\GetClientAlertsAuthTokenRequestType $request)
    {
        return $this->callOperation(
            'GetClientAlertsAuthToken',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetClientAlertsAuthTokenResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetContextualKeywordsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetContextualKeywordsResponseType
     */
    public function getContextualKeywords(\DTS\eBaySDK\Trading\Types\GetContextualKeywordsRequestType $request)
    {
        return $this->callOperation(
            'GetContextualKeywords',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetContextualKeywordsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetCrossPromotionsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetCrossPromotionsResponseType
     */
    public function getCrossPromotions(\DTS\eBaySDK\Trading\Types\GetCrossPromotionsRequestType $request)
    {
        return $this->callOperation(
            'GetCrossPromotions',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetCrossPromotionsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetDescriptionTemplatesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetDescriptionTemplatesResponseType
     */
    public function getDescriptionTemplates(\DTS\eBaySDK\Trading\Types\GetDescriptionTemplatesRequestType $request)
    {
        return $this->callOperation(
            'GetDescriptionTemplates',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetDescriptionTemplatesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetDisputeRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetDisputeResponseType
     */
    public function getDispute(\DTS\eBaySDK\Trading\Types\GetDisputeRequestType $request)
    {
        return $this->callOperation(
            'GetDispute',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetDisputeResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetFeedbackRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetFeedbackResponseType
     */
    public function getFeedback(\DTS\eBaySDK\Trading\Types\GetFeedbackRequestType $request)
    {
        return $this->callOperation(
            'GetFeedback',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetFeedbackResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetHighBiddersRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetHighBiddersResponseType
     */
    public function getHighBidders(\DTS\eBaySDK\Trading\Types\GetHighBiddersRequestType $request)
    {
        return $this->callOperation(
            'GetHighBidders',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetHighBiddersResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetItemRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetItemResponseType
     */
    public function getItem(\DTS\eBaySDK\Trading\Types\GetItemRequestType $request)
    {
        return $this->callOperation(
            'GetItem',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetItemResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetItemRecommendationsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetItemRecommendationsResponseType
     */
    public function getItemRecommendations(\DTS\eBaySDK\Trading\Types\GetItemRecommendationsRequestType $request)
    {
        return $this->callOperation(
            'GetItemRecommendations',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetItemRecommendationsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetItemShippingRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetItemShippingResponseType
     */
    public function getItemShipping(\DTS\eBaySDK\Trading\Types\GetItemShippingRequestType $request)
    {
        return $this->callOperation(
            'GetItemShipping',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetItemShippingResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetItemTransactionsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetItemTransactionsResponseType
     */
    public function getItemTransactions(\DTS\eBaySDK\Trading\Types\GetItemTransactionsRequestType $request)
    {
        return $this->callOperation(
            'GetItemTransactions',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetItemTransactionsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetItemsAwaitingFeedbackRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetItemsAwaitingFeedbackResponseType
     */
    public function getItemsAwaitingFeedback(\DTS\eBaySDK\Trading\Types\GetItemsAwaitingFeedbackRequestType $request)
    {
        return $this->callOperation(
            'GetItemsAwaitingFeedback',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetItemsAwaitingFeedbackResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetMemberMessagesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetMemberMessagesResponseType
     */
    public function getMemberMessages(\DTS\eBaySDK\Trading\Types\GetMemberMessagesRequestType $request)
    {
        return $this->callOperation(
            'GetMemberMessages',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetMemberMessagesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetMessagePreferencesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetMessagePreferencesResponseType
     */
    public function getMessagePreferences(\DTS\eBaySDK\Trading\Types\GetMessagePreferencesRequestType $request)
    {
        return $this->callOperation(
            'GetMessagePreferences',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetMessagePreferencesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetMyMessagesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetMyMessagesResponseType
     */
    public function getMyMessages(\DTS\eBaySDK\Trading\Types\GetMyMessagesRequestType $request)
    {
        return $this->callOperation(
            'GetMyMessages',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetMyMessagesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetMyeBayBuyingRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetMyeBayBuyingResponseType
     */
    public function getMyeBayBuying(\DTS\eBaySDK\Trading\Types\GetMyeBayBuyingRequestType $request)
    {
        return $this->callOperation(
            'GetMyeBayBuying',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetMyeBayBuyingResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetMyeBayRemindersRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetMyeBayRemindersResponseType
     */
    public function getMyeBayReminders(\DTS\eBaySDK\Trading\Types\GetMyeBayRemindersRequestType $request)
    {
        return $this->callOperation(
            'GetMyeBayReminders',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetMyeBayRemindersResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetMyeBaySellingRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetMyeBaySellingResponseType
     */
    public function getMyeBaySelling(\DTS\eBaySDK\Trading\Types\GetMyeBaySellingRequestType $request)
    {
        return $this->callOperation(
            'GetMyeBaySelling',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetMyeBaySellingResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetNotificationPreferencesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetNotificationPreferencesResponseType
     */
    public function getNotificationPreferences(\DTS\eBaySDK\Trading\Types\GetNotificationPreferencesRequestType $request)
    {
        return $this->callOperation(
            'GetNotificationPreferences',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetNotificationPreferencesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetNotificationsUsageRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetNotificationsUsageResponseType
     */
    public function getNotificationsUsage(\DTS\eBaySDK\Trading\Types\GetNotificationsUsageRequestType $request)
    {
        return $this->callOperation(
            'GetNotificationsUsage',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetNotificationsUsageResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetOrderTransactionsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetOrderTransactionsResponseType
     */
    public function getOrderTransactions(\DTS\eBaySDK\Trading\Types\GetOrderTransactionsRequestType $request)
    {
        return $this->callOperation(
            'GetOrderTransactions',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetOrderTransactionsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetOrdersRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetOrdersResponseType
     */
    public function getOrders(\DTS\eBaySDK\Trading\Types\GetOrdersRequestType $request)
    {
        return $this->callOperation(
            'GetOrders',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetOrdersResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetPictureManagerDetailsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetPictureManagerDetailsResponseType
     */
    public function getPictureManagerDetails(\DTS\eBaySDK\Trading\Types\GetPictureManagerDetailsRequestType $request)
    {
        return $this->callOperation(
            'GetPictureManagerDetails',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetPictureManagerDetailsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetPictureManagerOptionsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetPictureManagerOptionsResponseType
     */
    public function getPictureManagerOptions(\DTS\eBaySDK\Trading\Types\GetPictureManagerOptionsRequestType $request)
    {
        return $this->callOperation(
            'GetPictureManagerOptions',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetPictureManagerOptionsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetProductFamilyMembersRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetProductFamilyMembersResponseType
     */
    public function getProductFamilyMembers(\DTS\eBaySDK\Trading\Types\GetProductFamilyMembersRequestType $request)
    {
        return $this->callOperation(
            'GetProductFamilyMembers',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetProductFamilyMembersResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetProductFinderRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetProductFinderResponseType
     */
    public function getProductFinder(\DTS\eBaySDK\Trading\Types\GetProductFinderRequestType $request)
    {
        return $this->callOperation(
            'GetProductFinder',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetProductFinderResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetProductFinderXSLRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetProductFinderXSLResponseType
     */
    public function getProductFinderXSL(\DTS\eBaySDK\Trading\Types\GetProductFinderXSLRequestType $request)
    {
        return $this->callOperation(
            'GetProductFinderXSL',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetProductFinderXSLResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetProductSearchPageRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetProductSearchPageResponseType
     */
    public function getProductSearchPage(\DTS\eBaySDK\Trading\Types\GetProductSearchPageRequestType $request)
    {
        return $this->callOperation(
            'GetProductSearchPage',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetProductSearchPageResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetProductSearchResultsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetProductSearchResultsResponseType
     */
    public function getProductSearchResults(\DTS\eBaySDK\Trading\Types\GetProductSearchResultsRequestType $request)
    {
        return $this->callOperation(
            'GetProductSearchResults',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetProductSearchResultsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetProductSellingPagesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetProductSellingPagesResponseType
     */
    public function getProductSellingPages(\DTS\eBaySDK\Trading\Types\GetProductSellingPagesRequestType $request)
    {
        return $this->callOperation(
            'GetProductSellingPages',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetProductSellingPagesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetPromotionRulesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetPromotionRulesResponseType
     */
    public function getPromotionRules(\DTS\eBaySDK\Trading\Types\GetPromotionRulesRequestType $request)
    {
        return $this->callOperation(
            'GetPromotionRules',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetPromotionRulesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetPromotionalSaleDetailsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetPromotionalSaleDetailsResponseType
     */
    public function getPromotionalSaleDetails(\DTS\eBaySDK\Trading\Types\GetPromotionalSaleDetailsRequestType $request)
    {
        return $this->callOperation(
            'GetPromotionalSaleDetails',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetPromotionalSaleDetailsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetSellerDashboardRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetSellerDashboardResponseType
     */
    public function getSellerDashboard(\DTS\eBaySDK\Trading\Types\GetSellerDashboardRequestType $request)
    {
        return $this->callOperation(
            'GetSellerDashboard',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetSellerDashboardResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetSellerEventsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetSellerEventsResponseType
     */
    public function getSellerEvents(\DTS\eBaySDK\Trading\Types\GetSellerEventsRequestType $request)
    {
        return $this->callOperation(
            'GetSellerEvents',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetSellerEventsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetSellerListRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetSellerListResponseType
     */
    public function getSellerList(\DTS\eBaySDK\Trading\Types\GetSellerListRequestType $request)
    {
        return $this->callOperation(
            'GetSellerList',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetSellerListResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetSellerPaymentsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetSellerPaymentsResponseType
     */
    public function getSellerPayments(\DTS\eBaySDK\Trading\Types\GetSellerPaymentsRequestType $request)
    {
        return $this->callOperation(
            'GetSellerPayments',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetSellerPaymentsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetSellerTransactionsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetSellerTransactionsResponseType
     */
    public function getSellerTransactions(\DTS\eBaySDK\Trading\Types\GetSellerTransactionsRequestType $request)
    {
        return $this->callOperation(
            'GetSellerTransactions',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetSellerTransactionsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetSellingManagerAlertsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetSellingManagerAlertsResponseType
     */
    public function getSellingManagerAlerts(\DTS\eBaySDK\Trading\Types\GetSellingManagerAlertsRequestType $request)
    {
        return $this->callOperation(
            'GetSellingManagerAlerts',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetSellingManagerAlertsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetSellingManagerEmailLogRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetSellingManagerEmailLogResponseType
     */
    public function getSellingManagerEmailLog(\DTS\eBaySDK\Trading\Types\GetSellingManagerEmailLogRequestType $request)
    {
        return $this->callOperation(
            'GetSellingManagerEmailLog',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetSellingManagerEmailLogResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetSellingManagerInventoryRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetSellingManagerInventoryResponseType
     */
    public function getSellingManagerInventory(\DTS\eBaySDK\Trading\Types\GetSellingManagerInventoryRequestType $request)
    {
        return $this->callOperation(
            'GetSellingManagerInventory',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetSellingManagerInventoryResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetSellingManagerInventoryFolderRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetSellingManagerInventoryFolderResponseType
     */
    public function getSellingManagerInventoryFolder(\DTS\eBaySDK\Trading\Types\GetSellingManagerInventoryFolderRequestType $request)
    {
        return $this->callOperation(
            'GetSellingManagerInventoryFolder',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetSellingManagerInventoryFolderResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetSellingManagerItemAutomationRuleRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetSellingManagerItemAutomationRuleResponseType
     */
    public function getSellingManagerItemAutomationRule(\DTS\eBaySDK\Trading\Types\GetSellingManagerItemAutomationRuleRequestType $request)
    {
        return $this->callOperation(
            'GetSellingManagerItemAutomationRule',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetSellingManagerItemAutomationRuleResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetSellingManagerSaleRecordRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetSellingManagerSaleRecordResponseType
     */
    public function getSellingManagerSaleRecord(\DTS\eBaySDK\Trading\Types\GetSellingManagerSaleRecordRequestType $request)
    {
        return $this->callOperation(
            'GetSellingManagerSaleRecord',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetSellingManagerSaleRecordResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetSellingManagerSoldListingsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetSellingManagerSoldListingsResponseType
     */
    public function getSellingManagerSoldListings(\DTS\eBaySDK\Trading\Types\GetSellingManagerSoldListingsRequestType $request)
    {
        return $this->callOperation(
            'GetSellingManagerSoldListings',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetSellingManagerSoldListingsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetSellingManagerTemplateAutomationRuleRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetSellingManagerTemplateAutomationRuleResponseType
     */
    public function getSellingManagerTemplateAutomationRule(\DTS\eBaySDK\Trading\Types\GetSellingManagerTemplateAutomationRuleRequestType $request)
    {
        return $this->callOperation(
            'GetSellingManagerTemplateAutomationRule',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetSellingManagerTemplateAutomationRuleResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetSellingManagerTemplatesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetSellingManagerTemplatesResponseType
     */
    public function getSellingManagerTemplates(\DTS\eBaySDK\Trading\Types\GetSellingManagerTemplatesRequestType $request)
    {
        return $this->callOperation(
            'GetSellingManagerTemplates',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetSellingManagerTemplatesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetSessionIDRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetSessionIDResponseType
     */
    public function getSessionID(\DTS\eBaySDK\Trading\Types\GetSessionIDRequestType $request)
    {
        return $this->callOperation(
            'GetSessionID',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetSessionIDResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetShippingDiscountProfilesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetShippingDiscountProfilesResponseType
     */
    public function getShippingDiscountProfiles(\DTS\eBaySDK\Trading\Types\GetShippingDiscountProfilesRequestType $request)
    {
        return $this->callOperation(
            'GetShippingDiscountProfiles',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetShippingDiscountProfilesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetStoreRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetStoreResponseType
     */
    public function getStore(\DTS\eBaySDK\Trading\Types\GetStoreRequestType $request)
    {
        return $this->callOperation(
            'GetStore',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetStoreResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetStoreCategoryUpdateStatusRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetStoreCategoryUpdateStatusResponseType
     */
    public function getStoreCategoryUpdateStatus(\DTS\eBaySDK\Trading\Types\GetStoreCategoryUpdateStatusRequestType $request)
    {
        return $this->callOperation(
            'GetStoreCategoryUpdateStatus',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetStoreCategoryUpdateStatusResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetStoreCustomPageRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetStoreCustomPageResponseType
     */
    public function getStoreCustomPage(\DTS\eBaySDK\Trading\Types\GetStoreCustomPageRequestType $request)
    {
        return $this->callOperation(
            'GetStoreCustomPage',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetStoreCustomPageResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetStoreOptionsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetStoreOptionsResponseType
     */
    public function getStoreOptions(\DTS\eBaySDK\Trading\Types\GetStoreOptionsRequestType $request)
    {
        return $this->callOperation(
            'GetStoreOptions',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetStoreOptionsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetStorePreferencesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetStorePreferencesResponseType
     */
    public function getStorePreferences(\DTS\eBaySDK\Trading\Types\GetStorePreferencesRequestType $request)
    {
        return $this->callOperation(
            'GetStorePreferences',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetStorePreferencesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetSuggestedCategoriesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetSuggestedCategoriesResponseType
     */
    public function getSuggestedCategories(\DTS\eBaySDK\Trading\Types\GetSuggestedCategoriesRequestType $request)
    {
        return $this->callOperation(
            'GetSuggestedCategories',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetSuggestedCategoriesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetTaxTableRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetTaxTableResponseType
     */
    public function getTaxTable(\DTS\eBaySDK\Trading\Types\GetTaxTableRequestType $request)
    {
        return $this->callOperation(
            'GetTaxTable',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetTaxTableResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetTokenStatusRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetTokenStatusResponseType
     */
    public function getTokenStatus(\DTS\eBaySDK\Trading\Types\GetTokenStatusRequestType $request)
    {
        return $this->callOperation(
            'GetTokenStatus',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetTokenStatusResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetUserRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetUserResponseType
     */
    public function getUser(\DTS\eBaySDK\Trading\Types\GetUserRequestType $request)
    {
        return $this->callOperation(
            'GetUser',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetUserResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetUserContactDetailsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetUserContactDetailsResponseType
     */
    public function getUserContactDetails(\DTS\eBaySDK\Trading\Types\GetUserContactDetailsRequestType $request)
    {
        return $this->callOperation(
            'GetUserContactDetails',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetUserContactDetailsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetUserDisputesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetUserDisputesResponseType
     */
    public function getUserDisputes(\DTS\eBaySDK\Trading\Types\GetUserDisputesRequestType $request)
    {
        return $this->callOperation(
            'GetUserDisputes',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetUserDisputesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetUserPreferencesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetUserPreferencesResponseType
     */
    public function getUserPreferences(\DTS\eBaySDK\Trading\Types\GetUserPreferencesRequestType $request)
    {
        return $this->callOperation(
            'GetUserPreferences',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetUserPreferencesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetVeROReasonCodeDetailsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetVeROReasonCodeDetailsResponseType
     */
    public function getVeROReasonCodeDetails(\DTS\eBaySDK\Trading\Types\GetVeROReasonCodeDetailsRequestType $request)
    {
        return $this->callOperation(
            'GetVeROReasonCodeDetails',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetVeROReasonCodeDetailsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetVeROReportStatusRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetVeROReportStatusResponseType
     */
    public function getVeROReportStatus(\DTS\eBaySDK\Trading\Types\GetVeROReportStatusRequestType $request)
    {
        return $this->callOperation(
            'GetVeROReportStatus',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetVeROReportStatusResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetWantItNowPostRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetWantItNowPostResponseType
     */
    public function getWantItNowPost(\DTS\eBaySDK\Trading\Types\GetWantItNowPostRequestType $request)
    {
        return $this->callOperation(
            'GetWantItNowPost',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetWantItNowPostResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GetWantItNowSearchResultsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GetWantItNowSearchResultsResponseType
     */
    public function getWantItNowSearchResults(\DTS\eBaySDK\Trading\Types\GetWantItNowSearchResultsRequestType $request)
    {
        return $this->callOperation(
            'GetWantItNowSearchResults',
            $request,
            '\DTS\eBaySDK\Trading\Types\GetWantItNowSearchResultsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GeteBayDetailsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GeteBayDetailsResponseType
     */
    public function geteBayDetails(\DTS\eBaySDK\Trading\Types\GeteBayDetailsRequestType $request)
    {
        return $this->callOperation(
            'GeteBayDetails',
            $request,
            '\DTS\eBaySDK\Trading\Types\GeteBayDetailsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\GeteBayOfficialTimeRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\GeteBayOfficialTimeResponseType
     */
    public function geteBayOfficialTime(\DTS\eBaySDK\Trading\Types\GeteBayOfficialTimeRequestType $request)
    {
        return $this->callOperation(
            'GeteBayOfficialTime',
            $request,
            '\DTS\eBaySDK\Trading\Types\GeteBayOfficialTimeResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\IssueRefundRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\IssueRefundResponseType
     */
    public function issueRefund(\DTS\eBaySDK\Trading\Types\IssueRefundRequestType $request)
    {
        return $this->callOperation(
            'IssueRefund',
            $request,
            '\DTS\eBaySDK\Trading\Types\IssueRefundResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\LeaveFeedbackRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\LeaveFeedbackResponseType
     */
    public function leaveFeedback(\DTS\eBaySDK\Trading\Types\LeaveFeedbackRequestType $request)
    {
        return $this->callOperation(
            'LeaveFeedback',
            $request,
            '\DTS\eBaySDK\Trading\Types\LeaveFeedbackResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\MoveSellingManagerInventoryFolderRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\MoveSellingManagerInventoryFolderResponseType
     */
    public function moveSellingManagerInventoryFolder(\DTS\eBaySDK\Trading\Types\MoveSellingManagerInventoryFolderRequestType $request)
    {
        return $this->callOperation(
            'MoveSellingManagerInventoryFolder',
            $request,
            '\DTS\eBaySDK\Trading\Types\MoveSellingManagerInventoryFolderResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\PlaceOfferRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\PlaceOfferResponseType
     */
    public function placeOffer(\DTS\eBaySDK\Trading\Types\PlaceOfferRequestType $request)
    {
        return $this->callOperation(
            'PlaceOffer',
            $request,
            '\DTS\eBaySDK\Trading\Types\PlaceOfferResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\RelistFixedPriceItemRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\RelistFixedPriceItemResponseType
     */
    public function relistFixedPriceItem(\DTS\eBaySDK\Trading\Types\RelistFixedPriceItemRequestType $request)
    {
        return $this->callOperation(
            'RelistFixedPriceItem',
            $request,
            '\DTS\eBaySDK\Trading\Types\RelistFixedPriceItemResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\RelistItemRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\RelistItemResponseType
     */
    public function relistItem(\DTS\eBaySDK\Trading\Types\RelistItemRequestType $request)
    {
        return $this->callOperation(
            'RelistItem',
            $request,
            '\DTS\eBaySDK\Trading\Types\RelistItemResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\RemoveFromWatchListRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\RemoveFromWatchListResponseType
     */
    public function removeFromWatchList(\DTS\eBaySDK\Trading\Types\RemoveFromWatchListRequestType $request)
    {
        return $this->callOperation(
            'RemoveFromWatchList',
            $request,
            '\DTS\eBaySDK\Trading\Types\RemoveFromWatchListResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\RespondToBestOfferRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\RespondToBestOfferResponseType
     */
    public function respondToBestOffer(\DTS\eBaySDK\Trading\Types\RespondToBestOfferRequestType $request)
    {
        return $this->callOperation(
            'RespondToBestOffer',
            $request,
            '\DTS\eBaySDK\Trading\Types\RespondToBestOfferResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\RespondToFeedbackRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\RespondToFeedbackResponseType
     */
    public function respondToFeedback(\DTS\eBaySDK\Trading\Types\RespondToFeedbackRequestType $request)
    {
        return $this->callOperation(
            'RespondToFeedback',
            $request,
            '\DTS\eBaySDK\Trading\Types\RespondToFeedbackResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\RespondToWantItNowPostRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\RespondToWantItNowPostResponseType
     */
    public function respondToWantItNowPost(\DTS\eBaySDK\Trading\Types\RespondToWantItNowPostRequestType $request)
    {
        return $this->callOperation(
            'RespondToWantItNowPost',
            $request,
            '\DTS\eBaySDK\Trading\Types\RespondToWantItNowPostResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\ReviseCheckoutStatusRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\ReviseCheckoutStatusResponseType
     */
    public function reviseCheckoutStatus(\DTS\eBaySDK\Trading\Types\ReviseCheckoutStatusRequestType $request)
    {
        return $this->callOperation(
            'ReviseCheckoutStatus',
            $request,
            '\DTS\eBaySDK\Trading\Types\ReviseCheckoutStatusResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\ReviseFixedPriceItemRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\ReviseFixedPriceItemResponseType
     */
    public function reviseFixedPriceItem(\DTS\eBaySDK\Trading\Types\ReviseFixedPriceItemRequestType $request)
    {
        return $this->callOperation(
            'ReviseFixedPriceItem',
            $request,
            '\DTS\eBaySDK\Trading\Types\ReviseFixedPriceItemResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\ReviseInventoryStatusRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\ReviseInventoryStatusResponseType
     */
    public function reviseInventoryStatus(\DTS\eBaySDK\Trading\Types\ReviseInventoryStatusRequestType $request)
    {
        return $this->callOperation(
            'ReviseInventoryStatus',
            $request,
            '\DTS\eBaySDK\Trading\Types\ReviseInventoryStatusResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\ReviseItemRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\ReviseItemResponseType
     */
    public function reviseItem(\DTS\eBaySDK\Trading\Types\ReviseItemRequestType $request)
    {
        return $this->callOperation(
            'ReviseItem',
            $request,
            '\DTS\eBaySDK\Trading\Types\ReviseItemResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\ReviseMyMessagesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\ReviseMyMessagesResponseType
     */
    public function reviseMyMessages(\DTS\eBaySDK\Trading\Types\ReviseMyMessagesRequestType $request)
    {
        return $this->callOperation(
            'ReviseMyMessages',
            $request,
            '\DTS\eBaySDK\Trading\Types\ReviseMyMessagesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\ReviseMyMessagesFoldersRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\ReviseMyMessagesFoldersResponseType
     */
    public function reviseMyMessagesFolders(\DTS\eBaySDK\Trading\Types\ReviseMyMessagesFoldersRequestType $request)
    {
        return $this->callOperation(
            'ReviseMyMessagesFolders',
            $request,
            '\DTS\eBaySDK\Trading\Types\ReviseMyMessagesFoldersResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\ReviseSellingManagerInventoryFolderRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\ReviseSellingManagerInventoryFolderResponseType
     */
    public function reviseSellingManagerInventoryFolder(\DTS\eBaySDK\Trading\Types\ReviseSellingManagerInventoryFolderRequestType $request)
    {
        return $this->callOperation(
            'ReviseSellingManagerInventoryFolder',
            $request,
            '\DTS\eBaySDK\Trading\Types\ReviseSellingManagerInventoryFolderResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\ReviseSellingManagerProductRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\ReviseSellingManagerProductResponseType
     */
    public function reviseSellingManagerProduct(\DTS\eBaySDK\Trading\Types\ReviseSellingManagerProductRequestType $request)
    {
        return $this->callOperation(
            'ReviseSellingManagerProduct',
            $request,
            '\DTS\eBaySDK\Trading\Types\ReviseSellingManagerProductResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\ReviseSellingManagerSaleRecordRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\ReviseSellingManagerSaleRecordResponseType
     */
    public function reviseSellingManagerSaleRecord(\DTS\eBaySDK\Trading\Types\ReviseSellingManagerSaleRecordRequestType $request)
    {
        return $this->callOperation(
            'ReviseSellingManagerSaleRecord',
            $request,
            '\DTS\eBaySDK\Trading\Types\ReviseSellingManagerSaleRecordResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\ReviseSellingManagerTemplateRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\ReviseSellingManagerTemplateResponseType
     */
    public function reviseSellingManagerTemplate(\DTS\eBaySDK\Trading\Types\ReviseSellingManagerTemplateRequestType $request)
    {
        return $this->callOperation(
            'ReviseSellingManagerTemplate',
            $request,
            '\DTS\eBaySDK\Trading\Types\ReviseSellingManagerTemplateResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\RevokeTokenRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\RevokeTokenResponseType
     */
    public function revokeToken(\DTS\eBaySDK\Trading\Types\RevokeTokenRequestType $request)
    {
        return $this->callOperation(
            'RevokeToken',
            $request,
            '\DTS\eBaySDK\Trading\Types\RevokeTokenResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SaveItemToSellingManagerTemplateRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SaveItemToSellingManagerTemplateResponseType
     */
    public function saveItemToSellingManagerTemplate(\DTS\eBaySDK\Trading\Types\SaveItemToSellingManagerTemplateRequestType $request)
    {
        return $this->callOperation(
            'SaveItemToSellingManagerTemplate',
            $request,
            '\DTS\eBaySDK\Trading\Types\SaveItemToSellingManagerTemplateResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SellerReverseDisputeRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SellerReverseDisputeResponseType
     */
    public function sellerReverseDispute(\DTS\eBaySDK\Trading\Types\SellerReverseDisputeRequestType $request)
    {
        return $this->callOperation(
            'SellerReverseDispute',
            $request,
            '\DTS\eBaySDK\Trading\Types\SellerReverseDisputeResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SendInvoiceRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SendInvoiceResponseType
     */
    public function sendInvoice(\DTS\eBaySDK\Trading\Types\SendInvoiceRequestType $request)
    {
        return $this->callOperation(
            'SendInvoice',
            $request,
            '\DTS\eBaySDK\Trading\Types\SendInvoiceResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SetMessagePreferencesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SetMessagePreferencesResponseType
     */
    public function setMessagePreferences(\DTS\eBaySDK\Trading\Types\SetMessagePreferencesRequestType $request)
    {
        return $this->callOperation(
            'SetMessagePreferences',
            $request,
            '\DTS\eBaySDK\Trading\Types\SetMessagePreferencesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SetNotificationPreferencesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SetNotificationPreferencesResponseType
     */
    public function setNotificationPreferences(\DTS\eBaySDK\Trading\Types\SetNotificationPreferencesRequestType $request)
    {
        return $this->callOperation(
            'SetNotificationPreferences',
            $request,
            '\DTS\eBaySDK\Trading\Types\SetNotificationPreferencesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SetPictureManagerDetailsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SetPictureManagerDetailsResponseType
     */
    public function setPictureManagerDetails(\DTS\eBaySDK\Trading\Types\SetPictureManagerDetailsRequestType $request)
    {
        return $this->callOperation(
            'SetPictureManagerDetails',
            $request,
            '\DTS\eBaySDK\Trading\Types\SetPictureManagerDetailsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SetPromotionalSaleRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SetPromotionalSaleResponseType
     */
    public function setPromotionalSale(\DTS\eBaySDK\Trading\Types\SetPromotionalSaleRequestType $request)
    {
        return $this->callOperation(
            'SetPromotionalSale',
            $request,
            '\DTS\eBaySDK\Trading\Types\SetPromotionalSaleResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SetPromotionalSaleListingsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SetPromotionalSaleListingsResponseType
     */
    public function setPromotionalSaleListings(\DTS\eBaySDK\Trading\Types\SetPromotionalSaleListingsRequestType $request)
    {
        return $this->callOperation(
            'SetPromotionalSaleListings',
            $request,
            '\DTS\eBaySDK\Trading\Types\SetPromotionalSaleListingsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SetSellingManagerFeedbackOptionsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SetSellingManagerFeedbackOptionsResponseType
     */
    public function setSellingManagerFeedbackOptions(\DTS\eBaySDK\Trading\Types\SetSellingManagerFeedbackOptionsRequestType $request)
    {
        return $this->callOperation(
            'SetSellingManagerFeedbackOptions',
            $request,
            '\DTS\eBaySDK\Trading\Types\SetSellingManagerFeedbackOptionsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SetSellingManagerItemAutomationRuleRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SetSellingManagerItemAutomationRuleResponseType
     */
    public function setSellingManagerItemAutomationRule(\DTS\eBaySDK\Trading\Types\SetSellingManagerItemAutomationRuleRequestType $request)
    {
        return $this->callOperation(
            'SetSellingManagerItemAutomationRule',
            $request,
            '\DTS\eBaySDK\Trading\Types\SetSellingManagerItemAutomationRuleResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SetSellingManagerTemplateAutomationRuleRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SetSellingManagerTemplateAutomationRuleResponseType
     */
    public function setSellingManagerTemplateAutomationRule(\DTS\eBaySDK\Trading\Types\SetSellingManagerTemplateAutomationRuleRequestType $request)
    {
        return $this->callOperation(
            'SetSellingManagerTemplateAutomationRule',
            $request,
            '\DTS\eBaySDK\Trading\Types\SetSellingManagerTemplateAutomationRuleResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SetShippingDiscountProfilesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SetShippingDiscountProfilesResponseType
     */
    public function setShippingDiscountProfiles(\DTS\eBaySDK\Trading\Types\SetShippingDiscountProfilesRequestType $request)
    {
        return $this->callOperation(
            'SetShippingDiscountProfiles',
            $request,
            '\DTS\eBaySDK\Trading\Types\SetShippingDiscountProfilesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SetStoreRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SetStoreResponseType
     */
    public function setStore(\DTS\eBaySDK\Trading\Types\SetStoreRequestType $request)
    {
        return $this->callOperation(
            'SetStore',
            $request,
            '\DTS\eBaySDK\Trading\Types\SetStoreResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SetStoreCategoriesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SetStoreCategoriesResponseType
     */
    public function setStoreCategories(\DTS\eBaySDK\Trading\Types\SetStoreCategoriesRequestType $request)
    {
        return $this->callOperation(
            'SetStoreCategories',
            $request,
            '\DTS\eBaySDK\Trading\Types\SetStoreCategoriesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SetStoreCustomPageRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SetStoreCustomPageResponseType
     */
    public function setStoreCustomPage(\DTS\eBaySDK\Trading\Types\SetStoreCustomPageRequestType $request)
    {
        return $this->callOperation(
            'SetStoreCustomPage',
            $request,
            '\DTS\eBaySDK\Trading\Types\SetStoreCustomPageResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SetStorePreferencesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SetStorePreferencesResponseType
     */
    public function setStorePreferences(\DTS\eBaySDK\Trading\Types\SetStorePreferencesRequestType $request)
    {
        return $this->callOperation(
            'SetStorePreferences',
            $request,
            '\DTS\eBaySDK\Trading\Types\SetStorePreferencesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SetTaxTableRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SetTaxTableResponseType
     */
    public function setTaxTable(\DTS\eBaySDK\Trading\Types\SetTaxTableRequestType $request)
    {
        return $this->callOperation(
            'SetTaxTable',
            $request,
            '\DTS\eBaySDK\Trading\Types\SetTaxTableResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SetUserNotesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SetUserNotesResponseType
     */
    public function setUserNotes(\DTS\eBaySDK\Trading\Types\SetUserNotesRequestType $request)
    {
        return $this->callOperation(
            'SetUserNotes',
            $request,
            '\DTS\eBaySDK\Trading\Types\SetUserNotesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\SetUserPreferencesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\SetUserPreferencesResponseType
     */
    public function setUserPreferences(\DTS\eBaySDK\Trading\Types\SetUserPreferencesRequestType $request)
    {
        return $this->callOperation(
            'SetUserPreferences',
            $request,
            '\DTS\eBaySDK\Trading\Types\SetUserPreferencesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\UploadSiteHostedPicturesRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\UploadSiteHostedPicturesResponseType
     */
    public function uploadSiteHostedPictures(\DTS\eBaySDK\Trading\Types\UploadSiteHostedPicturesRequestType $request)
    {
        return $this->callOperation(
            'UploadSiteHostedPictures',
            $request,
            '\DTS\eBaySDK\Trading\Types\UploadSiteHostedPicturesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\ValidateChallengeInputRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\ValidateChallengeInputResponseType
     */
    public function validateChallengeInput(\DTS\eBaySDK\Trading\Types\ValidateChallengeInputRequestType $request)
    {
        return $this->callOperation(
            'ValidateChallengeInput',
            $request,
            '\DTS\eBaySDK\Trading\Types\ValidateChallengeInputResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\ValidateTestUserRegistrationRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\ValidateTestUserRegistrationResponseType
     */
    public function validateTestUserRegistration(\DTS\eBaySDK\Trading\Types\ValidateTestUserRegistrationRequestType $request)
    {
        return $this->callOperation(
            'ValidateTestUserRegistration',
            $request,
            '\DTS\eBaySDK\Trading\Types\ValidateTestUserRegistrationResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\VeROReportItemsRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\VeROReportItemsResponseType
     */
    public function veROReportItems(\DTS\eBaySDK\Trading\Types\VeROReportItemsRequestType $request)
    {
        return $this->callOperation(
            'VeROReportItems',
            $request,
            '\DTS\eBaySDK\Trading\Types\VeROReportItemsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\VerifyAddFixedPriceItemRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\VerifyAddFixedPriceItemResponseType
     */
    public function verifyAddFixedPriceItem(\DTS\eBaySDK\Trading\Types\VerifyAddFixedPriceItemRequestType $request)
    {
        return $this->callOperation(
            'VerifyAddFixedPriceItem',
            $request,
            '\DTS\eBaySDK\Trading\Types\VerifyAddFixedPriceItemResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\VerifyAddItemRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\VerifyAddItemResponseType
     */
    public function verifyAddItem(\DTS\eBaySDK\Trading\Types\VerifyAddItemRequestType $request)
    {
        return $this->callOperation(
            'VerifyAddItem',
            $request,
            '\DTS\eBaySDK\Trading\Types\VerifyAddItemResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\VerifyAddSecondChanceItemRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\VerifyAddSecondChanceItemResponseType
     */
    public function verifyAddSecondChanceItem(\DTS\eBaySDK\Trading\Types\VerifyAddSecondChanceItemRequestType $request)
    {
        return $this->callOperation(
            'VerifyAddSecondChanceItem',
            $request,
            '\DTS\eBaySDK\Trading\Types\VerifyAddSecondChanceItemResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Trading\Types\VerifyRelistItemRequestType $request
     * @return \DTS\eBaySDK\Trading\Types\VerifyRelistItemResponseType
     */
    public function verifyRelistItem(\DTS\eBaySDK\Trading\Types\VerifyRelistItemRequestType $request)
    {
        return $this->callOperation(
            'VerifyRelistItem',
            $request,
            '\DTS\eBaySDK\Trading\Types\VerifyRelistItemResponseType'
        );
    }
}
