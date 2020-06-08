# GenericApi\Client\ObjectApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addObject**](ObjectApi.md#addObject) | **POST** /api/object.json | Добавление нового объекта
[**deleteObject**](ObjectApi.md#deleteObject) | **DELETE** /api/object.json | Удаление объекта
[**editObject**](ObjectApi.md#editObject) | **PUT** /api/object.json | Редактирование объекта
[**getObject**](ObjectApi.md#getObject) | **GET** /api/object.json | Получение данных объекта
[**searchObjects**](ObjectApi.md#searchObjects) | **GET** /api/objects.json | Поиск объектов



## addObject

> \GenericApi\Client\Model\ApiSucessResponseWithId addObject($body)

Добавление нового объекта

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\ObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\Object(); // \GenericApi\Client\Model\Object | Параметры нового объекта

try {
    $result = $apiInstance->addObject($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApi->addObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\Object**](../Model/Object.md)| Параметры нового объекта |

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


## deleteObject

> \GenericApi\Client\Model\InlineResponse2002 deleteObject($body)

Удаление объекта

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\ObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\InlineObject4(); // \GenericApi\Client\Model\InlineObject4 | 

try {
    $result = $apiInstance->deleteObject($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApi->deleteObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\InlineObject4**](../Model/InlineObject4.md)|  |

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


## editObject

> \GenericApi\Client\Model\ApiSucessResponseWithId editObject($body)

Редактирование объекта

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\ObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\Object(); // \GenericApi\Client\Model\Object | Настройки редактируемого объекта

try {
    $result = $apiInstance->editObject($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApi->editObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\Object**](../Model/Object.md)| Настройки редактируемого объекта |

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


## getObject

> \GenericApi\Client\Model\InlineResponse2004 getObject($body)

Получение данных объекта

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\ObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\InlineObject3(); // \GenericApi\Client\Model\InlineObject3 | 

try {
    $result = $apiInstance->getObject($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApi->getObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\InlineObject3**](../Model/InlineObject3.md)|  |

### Return type

[**\GenericApi\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchObjects

> \GenericApi\Client\Model\InlineResponse2005 searchObjects($body)

Поиск объектов

Запрос позвояет осуществлять поиск объектов

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\ObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\InlineObject5(); // \GenericApi\Client\Model\InlineObject5 | 

try {
    $result = $apiInstance->searchObjects($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApi->searchObjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\InlineObject5**](../Model/InlineObject5.md)|  |

### Return type

[**\GenericApi\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

