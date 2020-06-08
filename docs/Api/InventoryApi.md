# GenericApi\Client\InventoryApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInventory**](InventoryApi.md#getInventory) | **GET** /api/inventory.json | Получение данных свойства
[**searchInventories**](InventoryApi.md#searchInventories) | **GET** /api/inventories.json | Поиск свойств объекта



## getInventory

> \GenericApi\Client\Model\InlineResponse2006 getInventory($body)

Получение данных свойства

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\InlineObject6(); // \GenericApi\Client\Model\InlineObject6 | 

try {
    $result = $apiInstance->getInventory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\InlineObject6**](../Model/InlineObject6.md)|  |

### Return type

[**\GenericApi\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchInventories

> \GenericApi\Client\Model\InlineResponse2007 searchInventories($body)

Поиск свойств объекта

Запрос позвояет осуществлять поиск свойств объекта

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\InlineObject7(); // \GenericApi\Client\Model\InlineObject7 | 

try {
    $result = $apiInstance->searchInventories($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->searchInventories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\InlineObject7**](../Model/InlineObject7.md)|  |

### Return type

[**\GenericApi\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

