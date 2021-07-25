# # NoticeJsonldRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | [**OneOfStringMap**](OneOfStringMap.md) |  | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**type** | **string** |  | [optional] [readonly]
**id** | **int** | A unique, incremental, numerical identifier for the Notice. | [optional] [readonly]
**visibility** | **string** | The visibility of the Notice.  See &#x60;NoticeVisibility&#x60; for an enumeration of the allowed values:   - \&quot;public\&quot;: anyone may view this Notice   - \&quot;private\&quot;: Notice is only visible to Contributor   - \&quot;archived\&quot;: A deleted notice because it wasn&#39;t relevant anymore   - \&quot;draft\&quot;: Notice is only visible to Contributor, pending publication   - \&quot;question\&quot;: A question asked by a someone on a webpage.  A question is not publicly visible. | [optional] [default to 'private']
**matchingContexts** | [**\DisMoi\Client\Model\MatchingContextJsonldRead[]**](MatchingContextJsonldRead.md) |  | [optional]
**contributor** | **string** | The Contributor who submitted the Notice. | [optional]
**message** | **string** | The raw message attached to the Notice, as given by the Contributor.  It is unsafe to read from it, prefer reading from &#x60;strippedMessage&#x60;. | [optional]
**badgedCount** | **int** |  | [optional]
**displayedCount** | **int** | The number of time the notice has been displayed in a list. | [optional]
**unfoldedCount** | **int** | The number of time the notice has been displayed in full. | [optional]
**clickedCount** | **int** | The number of time the notice has been clicked. | [optional]
**likedCount** | **int** | The number of time the notice has been liked. | [optional]
**dislikedCount** | **int** | The number of time the notice has been disliked. | [optional]
**dismissedCount** | **int** | The number of time the notice has been dismissed. | [optional]
**created** | [**\DateTime**](\DateTime.md) | Creation date of the notice, serialized in the ISO8601 format. | [optional] [readonly]
**expires** | [**\DateTime**](\DateTime.md) | Expiration date of the notice, in the ISO8601 format. | [optional]
**modified** | [**\DateTime**](\DateTime.md) | Last modification date of the notice, serialized in the ISO8601 format. | [optional] [readonly]
**strippedMessage** | **string** | The message attached to the Notice, ie. what the user wants to read, the main content of DisMoi, the added value, etc.  It is HTML, and is \&quot;purified\&quot;, ie. is stripped of HTML tags not in ALLOWED_TAGS. | [optional] [readonly]
**likes** | **int** | Amount of likes the Notice has received. | [optional] [readonly]
**dislikes** | **int** | Amount of dislikes the Notice has received. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
