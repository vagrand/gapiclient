# GenericApi\Client\EventApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventsQueueSettings**](EventApi.md#eventsQueueSettings) | **PUT** /api/events/queue/settings.json | Настройка доступа к RabbitMQ



## eventsQueueSettings

> \GenericApi\Client\Model\InlineResponse2002 eventsQueueSettings($body)

Настройка доступа к RabbitMQ

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GenericApi\Client\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GenericApi\Client\Model\QueueSettings(); // \GenericApi\Client\Model\QueueSettings | Настройки доступа к RabbitMQ

try {
    $result = $apiInstance->eventsQueueSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->eventsQueueSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GenericApi\Client\Model\QueueSettings**](../Model/QueueSettings.md)| Настройки доступа к RabbitMQ |

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

