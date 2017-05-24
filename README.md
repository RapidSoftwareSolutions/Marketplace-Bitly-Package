[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Bitly/functions?utm_source=RapidAPIGitHub_BitlyFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Bitly Package

* Domain: [bitly.com](https://bitly.com)
* Credentials: clientId, clientSecret, accessToken

## How to get credentials: 
1. Get authorization code for [this instruction](http://dev.bitly.com/authentication.html).
2. Make request to getAccessToken method.
 
## Bitly.getAccessToken
Returns access token.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| Your application's bitly client id.
| clientSecret| credentials| Your application's bitly client secret.
| code        | credentials| The OAuth verification code acquired via OAuth's web authentication protocol.
| redirectUri | String     | The page to which a user was redirected upon successfully authenticating.

## Bitly.getBitlinkMetadata
Returns metadata about a single Bitlink.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| link       | String     | Bitlink.

## Bitly.getLongURL
Given a bitly URL or hash (or multiple), returns the target (long) URL.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| shortUrl   | String     | shortUrl - refers to one or more Bitlinks. e.g.: ```http://bit.ly/1RmnUT``` or ```http://j.mp/1RmnUT```.

## Bitly.getBitlinkInfo
This is used to return the page title for a given Bitlink.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| shortUrl   | String     | shortUrl - refers to one or more Bitlinks. e.g.: ```http://bit.ly/1RmnUT``` or ```http://j.mp/1RmnUT```.

## Bitly.searchBitlinkByLongURL
This is used to query for a Bitlink based on a long URL.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| url        | String     | One or more long URLs to lookup.

## Bitly.createBitlink
Given a long URL, returns a Bitlink.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| longUrl    | String     | A long URL to be shortened (example: ```https://rapidapi.com/```).

## Bitly.updateBitlink
Changes link metadata in a user's history.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| link       | String     | The Bitlink to be edited.
| title      | String     | The title of this Bitlink.
| note       | String     | A description of, or note about, this Bitlink.
| private    | Boolean    | Indicating privacy setting (defaults to user-level setting).

## Bitly.searchUserLinks
This is used to query for a Bitlink shortened by the authenticated user based on a long URL or a Bitlink.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| link       | String     | One or more Bitlinks to lookup.
| url        | String     | One or more long URLs to lookup.

## Bitly.createUserBitlink
Saves a long URL as a Bitlink in a user's history, with optional pre-set metadata. (Also returns a short URL for that link.)

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| longUrl    | String     | The URL to be saved as a Bitlink.
| title      | String     | The title of this Bitlink.
| note       | String     | A description of, or note about, this Bitlink.
| private    | Boolean    | Indicating privacy setting (defaults to user-level setting).
| domain     | String     | The short domain to use; either ```bit.ly```, ```j.mp```, or ```bitly.com``` or a custom short domain. The default for this parameter is the short domain selected by each user in their bitly account settings. Passing a specific domain via this parameter will override the default settings.

## Bitly.getBitlinkClicksNumber
Returns the number of clicks on a single Bitlink.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| link       | String     | Bitlink.
| unit       | String     | ```hour```, ```day```, ```week``` or ```month```, default: ```day```.
| units      | String     | An integer representing the time units to query data for. Pass -1 to return all units of time.
| rollup     | Boolean    | Return data for multiple units rolled up to a single result instead of a separate value for each period of time.
| limit      | Number     | 1 to 1000 (default=100).

## Bitly.getBitlinkClicksByCountry
Returns metrics about the countries referring click traffic to a single Bitlink.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| link       | String     | Bitlink.
| unit       | String     | ```hour```, ```day```, ```week``` or ```month```, default: ```day```.
| units      | String     | An integer representing the time units to query data for. Pass -1 to return all units of time.
| rollup     | Boolean    | Return data for multiple units rolled up to a single result instead of a separate value for each period of time.
| limit      | Number     | 1 to 1000 (default=100).

## Bitly.getLinkEncoders
Returns users who have encoded this long URL (optionally only those in the requesting user's social graph).

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| link       | String     | Bitlink.
| subaccounts| Boolean    | Restrict to this enterprise account and its subaccounts
| limit      | Number     | 1 to 25 (default=10).
| expandUser | Boolean    | Include display names of encoders.

## Bitly.getLinkEncodersByCount
Returns users who have encoded this link (optionally only those in the requesting user's social graph), sorted by the number of clicks on each encoding user's link.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| link       | String     | Bitlink.
| subaccounts| Boolean    | Restrict to this enterprise account and its subaccounts
| limit      | Number     | 1 to 25 (default=10).
| expandUser | Boolean    | Include display names of encoders.

## Bitly.getEncodersNumber
Returns the number of users who have shortened (encoded) a single Bitlink.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| link       | String     | Bitlink.

## Bitly.getLinkKeywordClicksByDestination
Returns past destination urls for a keyword with the clicks per destination.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| link       | String     | Bitlink.
| unit       | String     | ```hour```, ```day```, ```week``` or ```month```, default: ```day```.
| units      | String     | An integer representing the time units to query data for. Pass -1 to return all units of time.
| limit      | Number     | 1 to 1000 (default=100).

## Bitly.getBitlinkReferrers
Returns metrics about the pages referring click traffic to a single Bitlink.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| link       | String     | Bitlink.
| unit       | String     | ```hour```, ```day```, ```week``` or ```month```, default: ```day```.
| units      | String     | An integer representing the time units to query data for. Pass -1 to return all units of time.
| limit      | Number     | 1 to 1000 (default=100).

## Bitly.getBitlinkReferrersByDomain
Returns metrics about the pages referring click traffic to a single Bitlink, grouped by referring domain.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| link       | String     | Bitlink.
| unit       | String     | ```hour```, ```day```, ```week``` or ```month```, default: ```day```.
| units      | String     | An integer representing the time units to query data for. Pass -1 to return all units of time.
| limit      | Number     | 1 to 1000 (default=100).

## Bitly.getBitlinkReferringDomains
Returns metrics about the domains referring click traffic to a single Bitlink.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| link       | String     | Bitlink.
| unit       | String     | ```hour```, ```day```, ```week``` or ```month```, default: ```day```.
| units      | String     | An integer representing the time units to query data for. Pass -1 to return all units of time.
| limit      | Number     | 1 to 1000 (default=100).

## Bitly.getAppInfo
Return information about an OAuth app.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| clientId   | String     | The client ID of the app.

## Bitly.getUser
Return information about a user.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.

## Bitly.updateUser
Update user information.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| login      | String     | The bitly login of the user whose info to look up. If not given, the authenticated user will be used.
| fullName   | String     | Set the users full name value. (only available for the authenticated user.)

## Bitly.getUserLinkHistory
Returns entries from a user's link history in reverse chronological order.

| Field         | Type       | Description
|---------------|------------|----------
| accessToken   | credentials| The OAuth access token for specified user.
| link          | String     | The Bitlink or Bitlinks to return metadata for (when specified, overrides all other options), can be provided multiple times.
| limit         | Number     | Integer in the range 1 to 100 default: 50, specifying the max number of results to return.
| offset        | Number     | Specifying the numbered result at which to start (for pagination).
| createdBefore | Number     | Timestamp as an integer unix epoch.
| createdAfter  | Number     | Timestamp as an integer unix epoch.
| modifiedAfter | Number     | Timestamp as an integer unix epoch.
| expandClientId| Boolean    | Whether to provide additional information about encoding application.
| archived      | String     | on, offor both whether to include or exclude archived history entries. (on = return only archived history entries) default: off.
| private       | String     | on, off and both whether to include or exclude private history entries. (on = return only private history entries) default: both.
| deeplinks     | String     | on, off or both whether to include or exclude deeplink entries. (on = return only active deeplink history entries) default: off.
| user          | String     | The user for whom to retrieve history entries (if different from authenticated user).
| exactDomain   | String     | An exact domain to filter on history entries.
| rootDomain    | String     | A root domain to filter on history entries.
| keyword       | String     | Custom keyword to filter on history entries.
| campaignId    | String     | Filter to return only links for the given campaign_id, can be provided multiple times.
| query         | String     | Ad hoc text search string.

## Bitly.getUserTrackingDomains
Returns a list of tracking domains a user has configured.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.

## Bitly.getUserBitlinksClicks
Returns the aggregate number of clicks on all of the authenticated user's Bitlinks.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| unit       | String     | ```hour```, ```day```, ```week``` or ```month```, default: ```day```.
| units      | String     | An integer representing the time units to query data for. Pass -1 to return all units of time.
| rollup     | Boolean    | Return data for multiple units rolled up to a single result instead of a separate value for each period of time.
| limit      | Number     | 1 to 1000 (default=100).

## Bitly.getUserBitlinksClicksByCountries
Returns aggregate metrics about the countries referring click traffic to all of the authenticated user's Bitlinks.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| unit       | String     | ```hour```, ```day```, ```week``` or ```month```, default: ```day```.
| units      | String     | An integer representing the time units to query data for. Pass -1 to return all units of time.
| limit      | Number     | 1 to 1000 (default=100).

## Bitly.getUserMostClickedBitlinks
Returns the authenticated user's most-clicked Bitlinks (ordered by number of clicks) in a given time period.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| unit       | String     | ```hour```, ```day```, ```week``` or ```month```, default: ```day```.
| units      | String     | An integer representing the time units to query data for. Pass -1 to return all units of time.
| limit      | Number     | 1 to 1000 (default=100).

## Bitly.getUserBitlinksReferrers
Returns aggregate metrics about the pages referring click traffic to all of the authenticated user's Bitlinks.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| unit       | String     | ```hour```, ```day```, ```week``` or ```month```, default: ```day```.
| units      | String     | An integer representing the time units to query data for. Pass -1 to return all units of time.
| rollup     | Boolean    | Return data for multiple units rolled up to a single result instead of a separate value for each period of time.
| limit      | Number     | 1 to 1000 (default=100).

## Bitly.getUserBitlinksReferringDomains
Returns aggregate metrics about the domains referring click traffic to all of the authenticated user's Bitlinks. If the user is a master account, or is a subaccount with full_reports permission, the user may choose to view the metrics of any account belonging to the master account.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| unit       | String     | ```hour```, ```day```, ```week``` or ```month```, default: ```day```.
| units      | String     | An integer representing the time units to query data for. Pass -1 to return all units of time.
| rollup     | Boolean    | Return data for multiple units rolled up to a single result instead of a separate value for each period of time.
| limit      | Number     | 1 to 1000 (default=100).

## Bitly.getUserBitlinksNumber
Returns the number of Bitlinks created in a given time period by the authenticated user.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| unit       | String     | ```hour```, ```day```, ```week``` or ```month```, default: ```day```.
| units      | String     | An integer representing the time units to query data for. Pass -1 to return all units of time.
| rollup     | Boolean    | Return data for multiple units rolled up to a single result instead of a separate value for each period of time.
| limit      | Number     | 1 to 1000 (default=100).

## Bitly.checkBitlyProDomain
Query whether a given domain is a valid bitly pro domain. Keep in mind that bitly custom short domains are restricted to less than 15 characters in length.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| domain     | String     | A short domain. ie: ```nyti.ms```.

## Bitly.getTrackingDomainClicks
Returns the number of clicks on Bitlinks pointing to the specified tracking domain that have occured in a given time period.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| domain     | String     | A tracking domain as returned from ```getUserTrackingDomains``` method.

## Bitly.getTrackingDomainShortenCounts
Returns the number of clicks on Bitlinks pointing to the specified tracking domain that have occured in a given time period.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The OAuth access token for specified user.
| domain     | String     | A tracking domain as returned from .
| unit       | String     | ```hour```, ```day```, ```week``` or ```month```, default: ```day```.
| units      | String     | An integer representing the time units to query data for. Pass -1 to return all units of time.
| rollup     | Boolean    | Return data for multiple units rolled up to a single result instead of a separate value for each period of time.
| limit      | Number     | 1 to 1000 (default=100).

