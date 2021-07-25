# # NoticeJsonldCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | [**OneOfStringMap**](OneOfStringMap.md) |  | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**type** | **string** |  | [optional] [readonly]
**visibility** | **string** | The visibility of the Notice.  See &#x60;NoticeVisibility&#x60; for an enumeration of the allowed values:   - \&quot;public\&quot;: anyone may view this Notice   - \&quot;private\&quot;: Notice is only visible to Contributor   - \&quot;archived\&quot;: A deleted notice because it wasn&#39;t relevant anymore   - \&quot;draft\&quot;: Notice is only visible to Contributor, pending publication   - \&quot;question\&quot;: A question asked by a someone on a webpage.  A question is not publicly visible. | [optional] [default to 'private']
**matchingContexts** | [**\DisMoi\Client\Model\MatchingContextJsonldCreate[]**](MatchingContextJsonldCreate.md) |  | [optional]
**contributor** | **string** | The Contributor who submitted the Notice. | [optional]
**message** | **string** | The raw message attached to the Notice, as given by the Contributor.  It is unsafe to read from it, prefer reading from &#x60;strippedMessage&#x60;. | [optional]
**expires** | [**\DateTime**](\DateTime.md) | Expiration date of the notice, in the ISO8601 format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
