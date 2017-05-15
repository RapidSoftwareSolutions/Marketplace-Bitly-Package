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
    'getBitlinkReferrersByDomain'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

