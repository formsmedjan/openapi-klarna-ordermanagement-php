# # Refund

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**refund_id** | **string** | The refund id. Generated when the refund is created. | [optional]
**refunded_amount** | **int** | Refunded amount in minor units. | [optional]
**refunded_at** | [**\DateTime**](\DateTime.md) | The time of the refund. ISO 8601. | [optional]
**description** | **string** | Description of the refund shown to the customer. Max length is 255 characters. | [optional]
**order_lines** | [**\FormsmedjanKlarnaOrderManagement\Model\OrderLine[]**](OrderLine.md) | Order lines for the refund shown to the customer. Optional but increases the customer experience. Maximum 1000 order lines. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
