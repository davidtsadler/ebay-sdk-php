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

namespace DTS\eBaySDK\Trading\Enums;

/**
 *
 */
class NotificationEventTypeCodeType
{
    const C_ACCOUNT_SUMMARY = 'AccountSummary';
    const C_ACCOUNT_SUSPENDED = 'AccountSuspended';
    const C_ADD_TO_BID_GROUP = 'AddToBidGroup';
    const C_ADD_TO_WATCH_LIST = 'AddToWatchList';
    const C_ASK_SELLER_QUESTION = 'AskSellerQuestion';
    const C_AUCTION_CHECKOUT_COMPLETE = 'AuctionCheckoutComplete';
    const C_BEST_OFFER = 'BestOffer';
    const C_BEST_OFFER_DECLINED = 'BestOfferDeclined';
    const C_BEST_OFFER_PLACED = 'BestOfferPlaced';
    const C_BID_ITEM_ENDING_SOON = 'BidItemEndingSoon';
    const C_BID_PLACED = 'BidPlaced';
    const C_BID_RECEIVED = 'BidReceived';
    const C_BULK_DATA_EXCHANGE_JOB_COMPLETED = 'BulkDataExchangeJobCompleted';
    const C_BUYER_RESPONSE_DISPUTE = 'BuyerResponseDispute';
    const C_CHECKOUT = 'Checkout';
    const C_CHECKOUT_BUYER_REQUESTS_TOTAL = 'CheckoutBuyerRequestsTotal';
    const C_COUNTER_OFFER_RECEIVED = 'CounterOfferReceived';
    const C_CUSTOM_CODE = 'CustomCode';
    const C_EBN_ORDER_CANCELED = 'EBNOrderCanceled';
    const C_EBN_ORDER_PICKED_UP = 'EBNOrderPickedUp';
    const C_EBP_APPEALED_CASE = 'EBPAppealedCase';
    const C_EBP_CLOSED_APPEAL = 'EBPClosedAppeal';
    const C_EBP_CLOSED_CASE = 'EBPClosedCase';
    const C_EBP_ESCALATED_CASE = 'EBPEscalatedCase';
    const C_EBP_MY_PAYMENT_DUE = 'EBPMyPaymentDue';
    const C_EBP_MY_RESPONSE_DUE = 'EBPMyResponseDue';
    const C_EBP_ON_HOLD_CASE = 'EBPOnHoldCase';
    const C_EBP_OTHER_PARTY_RESPONSE_DUE = 'EBPOtherPartyResponseDue';
    const C_EBP_PAYMENT_DONE = 'EBPPaymentDone';
    const C_EMAIL_ADDRESS_CHANGED = 'EmailAddressChanged';
    const C_END_OF_AUCTION = 'EndOfAuction';
    const C_FEEDBACK = 'Feedback';
    const C_FEEDBACK_LEFT = 'FeedbackLeft';
    const C_FEEDBACK_RECEIVED = 'FeedbackReceived';
    const C_FEEDBACK_STAR_CHANGED = 'FeedbackStarChanged';
    const C_FIXED_PRICE_TRANSACTION = 'FixedPriceTransaction';
    const C_INR_BUYER_CLOSED_DISPUTE = 'INRBuyerClosedDispute';
    const C_INR_BUYER_OPENED_DISPUTE = 'INRBuyerOpenedDispute';
    const C_INR_BUYER_RESPONDED_TO_DISPUTE = 'INRBuyerRespondedToDispute';
    const C_INR_SELLER_RESPONDED_TO_DISPUTE = 'INRSellerRespondedToDispute';
    const C_ITEMS_CANCELED = 'ItemsCanceled';
    const C_ITEM_ADDED_TO_BID_GROUP = 'ItemAddedToBidGroup';
    const C_ITEM_ADDED_TO_WATCH_LIST = 'ItemAddedToWatchList';
    const C_ITEM_CLOSED = 'ItemClosed';
    const C_ITEM_EXTENDED = 'ItemExtended';
    const C_ITEM_LISTED = 'ItemListed';
    const C_ITEM_LOST = 'ItemLost';
    const C_ITEM_MARKED_PAID = 'ItemMarkedPaid';
    const C_ITEM_MARKED_SHIPPED = 'ItemMarkedShipped';
    const C_ITEM_REMOVED_FROM_BID_GROUP = 'ItemRemovedFromBidGroup';
    const C_ITEM_REMOVED_FROM_WATCH_LIST = 'ItemRemovedFromWatchList';
    const C_ITEM_REVISED = 'ItemRevised';
    const C_ITEM_REVISED_ADD_CHARITY = 'ItemRevisedAddCharity';
    const C_ITEM_SOLD = 'ItemSold';
    const C_ITEM_SUSPENDED = 'ItemSuspended';
    const C_ITEM_UNSOLD = 'ItemUnsold';
    const C_ITEM_WON = 'ItemWon';
    const C_M2M_MESSAGE_STATUS_CHANGE = 'M2MMessageStatusChange';
    const C_MY_MESSAGESE_BAY_MESSAGE = 'MyMessageseBayMessage';
    const C_MY_MESSAGESE_BAY_MESSAGE_HEADER = 'MyMessageseBayMessageHeader';
    const C_MY_MESSAGESM2M_MESSAGE = 'MyMessagesM2MMessage';
    const C_MY_MESSAGESM2M_MESSAGE_HEADER = 'MyMessagesM2MMessageHeader';
    const C_MY_MESSAGES_ALERT = 'MyMessagesAlert';
    const C_MY_MESSAGES_ALERT_HEADER = 'MyMessagesAlertHeader';
    const C_MY_MESSAGES_HIGH_PRIORITY_MESSAGE = 'MyMessagesHighPriorityMessage';
    const C_MY_MESSAGES_HIGH_PRIORITY_MESSAGE_HEADER = 'MyMessagesHighPriorityMessageHeader';
    const C_NONE = 'None';
    const C_OUT_BID = 'OutBid';
    const C_PASSWORD_CHANGED = 'PasswordChanged';
    const C_PASSWORD_HINT_CHANGED = 'PasswordHintChanged';
    const C_PAYMENT_DETAIL_CHANGED = 'PaymentDetailChanged';
    const C_PAYMENT_REMINDER = 'PaymentReminder';
    const C_PLACE_OFFER = 'PlaceOffer';
    const C_READY_FOR_PAYOUT = 'ReadyForPayout';
    const C_READY_TO_SHIP = 'ReadyToShip';
    const C_REFUND_FAILURE = 'RefundFailure';
    const C_REFUND_SUCCESS = 'RefundSuccess';
    const C_REMOVE_FROM_BID_GROUP = 'RemoveFromBidGroup';
    const C_REMOVE_FROM_WATCH_LIST = 'RemoveFromWatchList';
    const C_RETURN_CLOSED = 'ReturnClosed';
    const C_RETURN_CREATED = 'ReturnCreated';
    const C_RETURN_DELIVERED = 'ReturnDelivered';
    const C_RETURN_ESCALATED = 'ReturnEscalated';
    const C_RETURN_REFUND_OVERDUE = 'ReturnRefundOverdue';
    const C_RETURN_SELLER_INFO_OVERDUE = 'ReturnSellerInfoOverdue';
    const C_RETURN_SHIPPED = 'ReturnShipped';
    const C_RETURN_WAITING_FOR_SELLER_INFO = 'ReturnWaitingForSellerInfo';
    const C_SECOND_CHANCE_OFFER = 'SecondChanceOffer';
    const C_SELLER_CLOSED_DISPUTE = 'SellerClosedDispute';
    const C_SELLER_OPENED_DISPUTE = 'SellerOpenedDispute';
    const C_SELLER_RESPONDED_TO_DISPUTE = 'SellerRespondedToDispute';
    const C_SHOPPING_CART_ITEM_ENDING_SOON = 'ShoppingCartItemEndingSoon';
    const C_TOKEN_REVOCATION = 'TokenRevocation';
    const C_UNMATCHED_PAYMENT_RECEIVED = 'UnmatchedPaymentReceived';
    const C_USERID_CHANGED = 'UserIDChanged';
    const C_WATCHED_ITEM_ENDING_SOON = 'WatchedItemEndingSoon';
}
