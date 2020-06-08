# # MetricValue

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metricId** | **int** |  | [optional] 
**valueString** | **string** | Значение метрики такое, каким оно было получено из источника | [optional] 
**valueNumber** | **float** | Значение, полученное из источника и приведенное к типу float. Будет равен value_avg, если в запросе указан параметр group_div | [optional] 
**valueMin** | **float** | Будет равен value_number, если в запросе не указан параметр group_div | [optional] 
**valueMax** | **float** | Будет равен value_number, если в запросе не указан параметр group_div | [optional] 
**valueAvg** | **float** | Будет равен value_number, если в запросе не указан параметр group_div | [optional] 
**valueSum** | **float** | Будет равен value_number, если в запросе не указан параметр group_div | [optional] 
**createdTs** | **int** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


