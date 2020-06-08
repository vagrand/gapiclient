# # Trigger

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | 
**objectId** | **int** |  | 
**metricId** | **int** |  | 
**description** | **string** | Человекопонятное описание триггера, например: “Критическая нагрузка на хосте {HOST.NAME}“, где {HOST.NAME}, при срабатывании, заменяется на имя объекта | 
**expression** | **string** | Выражение триггера, применяется для определения возникновения события | 
**recoveryExpression** | **string** | Выражения восстановления, применяется для определения прекращения события | [optional] 
**priority** | **int** | Важность триггера, чем больше значение, тем важнее | 
**status** | **int** | Статус триггера: 1 - активный, 0 - неактивный | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


