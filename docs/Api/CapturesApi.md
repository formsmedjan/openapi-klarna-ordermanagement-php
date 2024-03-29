# FormsmedjanKlarnaOrderManagement\CapturesApi

All URIs are relative to https://api.klarna.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**appendShippingInfo()**](CapturesApi.md#appendShippingInfo) | **POST** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/shipping-info | Add shipping info to a capture
[**captureOrder()**](CapturesApi.md#captureOrder) | **POST** /ordermanagement/v1/orders/{order_id}/captures | Create capture
[**extendDueDate()**](CapturesApi.md#extendDueDate) | **PATCH** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/extend-due-date | Extend the customer&#39;s payment due date
[**getCapture()**](CapturesApi.md#getCapture) | **GET** /ordermanagement/v1/orders/{order_id}/captures/{capture_id} | Get capture
[**getCaptures()**](CapturesApi.md#getCaptures) | **GET** /ordermanagement/v1/orders/{order_id}/captures | Get all captures for one order
[**getOptionsForExtendDueDate()**](CapturesApi.md#getOptionsForExtendDueDate) | **GET** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/extend-due-date-options | Get available options for extension of the customer&#39;s payment due date
[**triggerSendOut()**](CapturesApi.md#triggerSendOut) | **POST** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/trigger-send-out | Trigger resend of customer communication


## `appendShippingInfo()`

```php
appendShippingInfo($order_id, $capture_id, $klarna_idempotency_key, $body)
```

Add shipping info to a capture

Add shipping info to a capture

### Example

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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **capture_id** | **string**| Capture id |
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]
 **body** | [**\FormsmedjanKlarnaOrderManagement\Model\UpdateShippingInfo**](../Model/UpdateShippingInfo.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `captureOrder()`

```php
captureOrder($order_id, $body, $klarna_idempotency_key)
```

Create capture

Create capture

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FormsmedjanKlarnaOrderManagement\Api\CapturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Order id
$body = new \FormsmedjanKlarnaOrderManagement\Model\CaptureObject(); // \FormsmedjanKlarnaOrderManagement\Model\CaptureObject | Capture request data
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts.

try {
    $apiInstance->captureOrder($order_id, $body, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->captureOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **body** | [**\FormsmedjanKlarnaOrderManagement\Model\CaptureObject**](../Model/CaptureObject.md)| Capture request data |
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extendDueDate()`

```php
extendDueDate($order_id, $capture_id, $klarna_idempotency_key, $body)
```

Extend the customer's payment due date

Extend the customer's payment due date

### Example

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
$body = new \FormsmedjanKlarnaOrderManagement\Model\ExtendDueDateRequest(); // \FormsmedjanKlarnaOrderManagement\Model\ExtendDueDateRequest

try {
    $apiInstance->extendDueDate($order_id, $capture_id, $klarna_idempotency_key, $body);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->extendDueDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **capture_id** | **string**| Capture id |
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]
 **body** | [**\FormsmedjanKlarnaOrderManagement\Model\ExtendDueDateRequest**](../Model/ExtendDueDateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCapture()`

```php
getCapture($order_id, $capture_id): \FormsmedjanKlarnaOrderManagement\Model\Capture
```

Get capture

Get capture

### Example

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

try {
    $result = $apiInstance->getCapture($order_id, $capture_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->getCapture: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **capture_id** | **string**| Capture id |

### Return type

[**\FormsmedjanKlarnaOrderManagement\Model\Capture**](../Model/Capture.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCaptures()`

```php
getCaptures($order_id): \FormsmedjanKlarnaOrderManagement\Model\Capture[]
```

Get all captures for one order

Get all captures for one order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FormsmedjanKlarnaOrderManagement\Api\CapturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Order id

try {
    $result = $apiInstance->getCaptures($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->getCaptures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |

### Return type

[**\FormsmedjanKlarnaOrderManagement\Model\Capture[]**](../Model/Capture.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOptionsForExtendDueDate()`

```php
getOptionsForExtendDueDate($order_id, $capture_id): \FormsmedjanKlarnaOrderManagement\Model\ExtendDueDateOptions
```

Get available options for extension of the customer's payment due date

Get merchant fees for extension of due date due date

### Example

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

try {
    $result = $apiInstance->getOptionsForExtendDueDate($order_id, $capture_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->getOptionsForExtendDueDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **capture_id** | **string**| Capture id |

### Return type

[**\FormsmedjanKlarnaOrderManagement\Model\ExtendDueDateOptions**](../Model/ExtendDueDateOptions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `triggerSendOut()`

```php
triggerSendOut($order_id, $capture_id, $klarna_idempotency_key)
```

Trigger resend of customer communication

Trigger resend of customer communication

### Example

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

try {
    $apiInstance->triggerSendOut($order_id, $capture_id, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->triggerSendOut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **capture_id** | **string**| Capture id |
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
