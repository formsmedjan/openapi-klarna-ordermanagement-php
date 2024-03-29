# OpenAPIClient-php

API to handle order lifecycle


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/formsmedjan/openapi-klarna-ordermanagement-php.git"
    }
  ],
  "require": {
    "formsmedjan/openapi-klarna-ordermanagement-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new FormsmedjanKlarnaOrderManagement\Api\CapturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Order id
$capture_id = 'capture_id_example'; // string | Capture id
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts.
$body = new \FormsmedjanKlarnaOrderManagement\Model\UpdateShippingInfo(); // \FormsmedjanKlarnaOrderManagement\Model\UpdateShippingInfo

try {
    $apiInstance->appendShippingInfo($order_id, $capture_id, $klarna_idempotency_key, $body);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->appendShippingInfo: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.klarna.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CapturesApi* | [**appendShippingInfo**](docs/Api/CapturesApi.md#appendshippinginfo) | **POST** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/shipping-info | Add shipping info to a capture
*CapturesApi* | [**captureOrder**](docs/Api/CapturesApi.md#captureorder) | **POST** /ordermanagement/v1/orders/{order_id}/captures | Create capture
*CapturesApi* | [**extendDueDate**](docs/Api/CapturesApi.md#extendduedate) | **PATCH** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/extend-due-date | Extend the customer&#39;s payment due date
*CapturesApi* | [**getCapture**](docs/Api/CapturesApi.md#getcapture) | **GET** /ordermanagement/v1/orders/{order_id}/captures/{capture_id} | Get capture
*CapturesApi* | [**getCaptures**](docs/Api/CapturesApi.md#getcaptures) | **GET** /ordermanagement/v1/orders/{order_id}/captures | Get all captures for one order
*CapturesApi* | [**getOptionsForExtendDueDate**](docs/Api/CapturesApi.md#getoptionsforextendduedate) | **GET** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/extend-due-date-options | Get available options for extension of the customer&#39;s payment due date
*CapturesApi* | [**triggerSendOut**](docs/Api/CapturesApi.md#triggersendout) | **POST** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/trigger-send-out | Trigger resend of customer communication
*OrdersApi* | [**acknowledgeOrder**](docs/Api/OrdersApi.md#acknowledgeorder) | **POST** /ordermanagement/v1/orders/{order_id}/acknowledge | Acknowledge order
*OrdersApi* | [**cancelOrder**](docs/Api/OrdersApi.md#cancelorder) | **POST** /ordermanagement/v1/orders/{order_id}/cancel | Cancel order
*OrdersApi* | [**extendAuthorizationTime**](docs/Api/OrdersApi.md#extendauthorizationtime) | **POST** /ordermanagement/v1/orders/{order_id}/extend-authorization-time | Extend authorization time
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /ordermanagement/v1/orders/{order_id} | Get order
*OrdersApi* | [**releaseRemainingAuthorization**](docs/Api/OrdersApi.md#releaseremainingauthorization) | **POST** /ordermanagement/v1/orders/{order_id}/release-remaining-authorization | Release remaining authorization
*OrdersApi* | [**updateAuthorization**](docs/Api/OrdersApi.md#updateauthorization) | **PATCH** /ordermanagement/v1/orders/{order_id}/authorization | Set new order amount and order lines
*OrdersApi* | [**updateConsumerDetails**](docs/Api/OrdersApi.md#updateconsumerdetails) | **PATCH** /ordermanagement/v1/orders/{order_id}/customer-details | Update customer addresses
*OrdersApi* | [**updateMerchantReferences**](docs/Api/OrdersApi.md#updatemerchantreferences) | **PATCH** /ordermanagement/v1/orders/{order_id}/merchant-references | Update merchant references
*RefundsApi* | [**get**](docs/Api/RefundsApi.md#get) | **GET** /ordermanagement/v1/orders/{order_id}/refunds/{refund_id} | Get refund
*RefundsApi* | [**refundOrder**](docs/Api/RefundsApi.md#refundorder) | **POST** /ordermanagement/v1/orders/{order_id}/refunds | Create a refund

## Models

- [Addon](docs/Model/Addon.md)
- [Address](docs/Model/Address.md)
- [CancelNotAllowedErrorMessage](docs/Model/CancelNotAllowedErrorMessage.md)
- [Capture](docs/Model/Capture.md)
- [CaptureNotAllowedErrorMessage](docs/Model/CaptureNotAllowedErrorMessage.md)
- [CaptureObject](docs/Model/CaptureObject.md)
- [CarrierProduct](docs/Model/CarrierProduct.md)
- [Customer](docs/Model/Customer.md)
- [ErrorMessageDto](docs/Model/ErrorMessageDto.md)
- [ExtendDueDateOptions](docs/Model/ExtendDueDateOptions.md)
- [ExtendDueDateRequest](docs/Model/ExtendDueDateRequest.md)
- [InitialPaymentMethodDto](docs/Model/InitialPaymentMethodDto.md)
- [Location](docs/Model/Location.md)
- [NoSuchCaptureErrorMessage](docs/Model/NoSuchCaptureErrorMessage.md)
- [NoSuchOrderErrorMessage](docs/Model/NoSuchOrderErrorMessage.md)
- [NotAllowedErrorMessage](docs/Model/NotAllowedErrorMessage.md)
- [NotFoundErrorMessage](docs/Model/NotFoundErrorMessage.md)
- [OptionDto](docs/Model/OptionDto.md)
- [Order](docs/Model/Order.md)
- [OrderLine](docs/Model/OrderLine.md)
- [ProductIdentifiers](docs/Model/ProductIdentifiers.md)
- [Refund](docs/Model/Refund.md)
- [RefundNotAllowedErrorMessage](docs/Model/RefundNotAllowedErrorMessage.md)
- [RefundObject](docs/Model/RefundObject.md)
- [SelectedShippingOptionDto](docs/Model/SelectedShippingOptionDto.md)
- [ShippingInfo](docs/Model/ShippingInfo.md)
- [Timeslot](docs/Model/Timeslot.md)
- [UpdateAuthorization](docs/Model/UpdateAuthorization.md)
- [UpdateConsumer](docs/Model/UpdateConsumer.md)
- [UpdateMerchantReferences](docs/Model/UpdateMerchantReferences.md)
- [UpdateShippingInfo](docs/Model/UpdateShippingInfo.md)

## Authorization

### basicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
