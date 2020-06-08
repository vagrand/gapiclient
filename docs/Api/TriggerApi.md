# GenericApi\Client\TriggerApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTrigger**](TriggerApi.md#addTrigger) | **POST** /api/trigger.json | Добавление нового триггера
[**deleteTrigger**](TriggerApi.md#deleteTrigger) | **DELETE** /api/trigger.json | Удаление триггера
[**editTrigger**](TriggerApi.md#editTrigger) | **PUT** /api/trigger.json | Редактирование триггера
[**getTrigger**](TriggerApi.md#getTrigger) | **GET** /api/trigger.json | Получение данных триггера
[**searchTriggers**](TriggerApi.md#searchTriggers) | **GET** /api/triggers.json | Поиск триггеров



## addTrigger

> \GenericApi\Client\Model\ApiSucessResponseWithId addTrigger($body)

Добавление нового триггера

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\TriggerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\Trigger(); // \GenericApi\Client\Model\Trigger | Объект с настройками нового триггера

try {
    $result = $apiInstance->addTrigger($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerApi->addTrigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\Trigger**](../Model/Trigger.md)| Объект с настройками нового триггера |

### Return type

[**\GenericApi\Client\Model\ApiSucessResponseWithId**](../Model/ApiSucessResponseWithId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteTrigger

> \GenericApi\Client\Model\InlineResponse2002 deleteTrigger($body)

Удаление триггера

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\TriggerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\InlineObject13(); // \GenericApi\Client\Model\InlineObject13 | 

try {
    $result = $apiInstance->deleteTrigger($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerApi->deleteTrigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\InlineObject13**](../Model/InlineObject13.md)|  |

### Return type

[**\GenericApi\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## editTrigger

> \GenericApi\Client\Model\ApiSucessResponseWithId editTrigger($body)

Редактирование триггера

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\TriggerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\Trigger(); // \GenericApi\Client\Model\Trigger | Объект с настройками редактируемого триггера

try {
    $result = $apiInstance->editTrigger($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerApi->editTrigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\Trigger**](../Model/Trigger.md)| Объект с настройками редактируемого триггера |

### Return type

[**\GenericApi\Client\Model\ApiSucessResponseWithId**](../Model/ApiSucessResponseWithId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrigger

> \GenericApi\Client\Model\InlineResponse20012 getTrigger($body)

Получение данных триггера

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\TriggerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\InlineObject12(); // \GenericApi\Client\Model\InlineObject12 | 

try {
    $result = $apiInstance->getTrigger($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerApi->getTrigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\InlineObject12**](../Model/InlineObject12.md)|  |

### Return type

[**\GenericApi\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchTriggers

> \GenericApi\Client\Model\InlineResponse20013 searchTriggers($body)

Поиск триггеров

Запрос позвояет осуществлять поиск триггеров

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\TriggerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\InlineObject14(); // \GenericApi\Client\Model\InlineObject14 | 

try {
    $result = $apiInstance->searchTriggers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerApi->searchTriggers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\InlineObject14**](../Model/InlineObject14.md)|  |

### Return type

[**\GenericApi\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

