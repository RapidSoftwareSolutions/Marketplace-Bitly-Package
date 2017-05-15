<?php
$routes = [
    'getAccessToken',
    'getBitlinkMetadata',
    'getLongURL',
    'getBitlinkInfo',
    'searchBitlinkByLongURL',
    'createBitlink',
    'updateBitlink',
    'searchUserLinks',
    'createUserBitlink',
    'getBitlinkClicksNumber',
    'getBitlinkClicksByCountry',
    'getLinkEncoders',
    'getLinkEncodersByCount',
    'getEncodersNumber',
    'getLinkKeywordClicksByDestination',
    'getBitlinkReferrers',
    'getBitlinkReferrersByDomain',
    'getAppInfo',
    'getUser',
    'updateUser',
    'getUserLinkHistory',
    'getUserTrackingDomains',
    'getUserBitlinksClicks',
    'getUserBitlinksClicksByCountries',
    'getUserMostClickedBitlinks',
    'getUserBitlinksReferrers',
    'getUserBitlinksReferringDomains',
    'getUserBitlinksNumber',
    'checkBitlyProDomain',
    'getTrackingDomainClicks',
    'getTrackingDomainShortenCounts'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

