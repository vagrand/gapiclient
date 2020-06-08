# GenericApi\Client\MetricApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMetric**](MetricApi.md#getMetric) | **GET** /api/metric.json | Получение данных метрики
[**metricsHistory**](MetricApi.md#metricsHistory) | **GET** /api/metrics/history.json | Получение истории измерений метрик
[**metricsLastValues**](MetricApi.md#metricsLastValues) | **GET** /api/metrics/last_values.json | Получение последних измерений
[**searchMetrics**](MetricApi.md#searchMetrics) | **GET** /api/metrics.json | Поиск метрик объектов



## getMetric

> \GenericApi\Client\Model\InlineResponse2008 getMetric($body)

Получение данных метрики

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\MetricApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\InlineObject8(); // \GenericApi\Client\Model\InlineObject8 | 

try {
    $result = $apiInstance->getMetric($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricApi->getMetric: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\InlineObject8**](../Model/InlineObject8.md)|  |

### Return type

[**\GenericApi\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## metricsHistory

> \GenericApi\Client\Model\InlineResponse20011 metricsHistory($body)

Получение истории измерений метрик

Запрос позвояет получать историю измерений для списка метрик за нужный период

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\MetricApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\InlineObject11(); // \GenericApi\Client\Model\InlineObject11 | 

try {
    $result = $apiInstance->metricsHistory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricApi->metricsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\InlineObject11**](../Model/InlineObject11.md)|  |

### Return type

[**\GenericApi\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## metricsLastValues

> \GenericApi\Client\Model\InlineResponse20010 metricsLastValues($body)

Получение последних измерений

Запрос позвояет получать последние измерения для списка метрик

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\MetricApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\InlineObject10(); // \GenericApi\Client\Model\InlineObject10 | 

try {
    $result = $apiInstance->metricsLastValues($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricApi->metricsLastValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\InlineObject10**](../Model/InlineObject10.md)|  |

### Return type

[**\GenericApi\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchMetrics

> \GenericApi\Client\Model\InlineResponse2009 searchMetrics($body)

Поиск метрик объектов

Запрос позвояет осуществлять поиск метрик объектов

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\MetricApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\InlineObject9(); // \GenericApi\Client\Model\InlineObject9 | 

try {
    $result = $apiInstance->searchMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricApi->searchMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\InlineObject9**](../Model/InlineObject9.md)|  |

### Return type

[**\GenericApi\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

