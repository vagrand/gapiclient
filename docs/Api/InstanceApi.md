# GenericApi\Client\InstanceApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInstance**](InstanceApi.md#addInstance) | **POST** /api/instance.json | Регистрация нового инстанса
[**deleteInstance**](InstanceApi.md#deleteInstance) | **DELETE** /api/instance.json | Удаление инстанса
[**editInstance**](InstanceApi.md#editInstance) | **PUT** /api/instance.json | Редактирование инстанса
[**getInstance**](InstanceApi.md#getInstance) | **GET** /api/instance.json | Получение данных инстанса
[**searchInstances**](InstanceApi.md#searchInstances) | **GET** /api/instances.json | Поиск инстансов



## addInstance

> \GenericApi\Client\Model\InlineResponse2001 addInstance($body)

Регистрация нового инстанса

Данный запрос устанавливает связь с instance-ом и в случае успеха, создает запись о нем в локальном хранилище

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\Instance(); // \GenericApi\Client\Model\Instance | Объект с настройками нового инстанса

try {
    $result = $apiInstance->addInstance($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->addInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\Instance**](../Model/Instance.md)| Объект с настройками нового инстанса |

### Return type

[**\GenericApi\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteInstance

> \GenericApi\Client\Model\InlineResponse2002 deleteInstance($body)

Удаление инстанса

Удаление instance-а из локального хранилища коннектора приводит к удалению всех накопленных о нем данных из локального хранилища коннектора. Поскольку процесс удаления может занимать существенное время, то запрос на удаление только маркирует instance как удаленный, а само удаление происходит в фоновом режиме.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\InlineObject1(); // \GenericApi\Client\Model\InlineObject1 | 

try {
    $result = $apiInstance->deleteInstance($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->deleteInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\InlineObject1**](../Model/InlineObject1.md)|  |

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


## editInstance

> \GenericApi\Client\Model\InlineResponse2001 editInstance($body)

Редактирование инстанса

Данный запрос позволяет изменить параметры ранее созданного instance-а. Если в процессе редактирования будут изменены параметры подключения к instance-у, то производится повторная попытка подключения

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\Instance(); // \GenericApi\Client\Model\Instance | Объект с настройками редактируемого инстанса

try {
    $result = $apiInstance->editInstance($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->editInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\Instance**](../Model/Instance.md)| Объект с настройками редактируемого инстанса |

### Return type

[**\GenericApi\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getInstance

> \GenericApi\Client\Model\InlineResponse200 getInstance($body)

Получение данных инстанса

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\InlineObject(); // \GenericApi\Client\Model\InlineObject | 

try {
    $result = $apiInstance->getInstance($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->getInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\InlineObject**](../Model/InlineObject.md)|  |

### Return type

[**\GenericApi\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchInstances

> \GenericApi\Client\Model\InlineResponse2003 searchInstances($body)

Поиск инстансов

Запрос позвояет осуществлят поиск инстансов по списку их кодов и имени

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\InlineObject2(); // \GenericApi\Client\Model\InlineObject2 | 

try {
    $result = $apiInstance->searchInstances($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->searchInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\InlineObject2**](../Model/InlineObject2.md)|  |

### Return type

[**\GenericApi\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

