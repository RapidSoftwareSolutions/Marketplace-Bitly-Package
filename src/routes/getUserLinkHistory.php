<?php

$app->post('/api/Bitly/getUserLinkHistory', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $data['access_token'] = $post_data['args']['accessToken'];

    if(!empty($post_data['args']['link'])){
        $data['link'] = $post_data['args']['link'];
    }
    if(!empty($post_data['args']['limit'])){
        $data['limit'] = $post_data['args']['limit'];
    }
    if(!empty($post_data['args']['offset'])){
        $data['offset'] = $post_data['args']['offset'];
    }
    if(!empty($post_data['args']['createdBefore'])){
        $data['created_before'] = $post_data['args']['createdBefore'];
    }
    if(!empty($post_data['args']['createdAfter'])){
        $data['created_after'] = $post_data['args']['createdAfter'];
    }
    if(!empty($post_data['args']['modifiedAfter'])){
        $data['modified_after'] = $post_data['args']['modifiedAfter'];
    }
    if(!empty($post_data['args']['archived'])){
        $data['archived'] = $post_data['args']['archived'];
    }
    if(!empty($post_data['args']['private'])){
        $data['private'] = $post_data['args']['private'];
    }
    if(!empty($post_data['args']['deeplinks'])){
        $data['deeplinks'] = $post_data['args']['deeplinks'];
    }
    if(!empty($post_data['args']['user'])){
        $data['user'] = $post_data['args']['user'];
    }
    if(!empty($post_data['args']['exactDomain'])){
        $data['exact_domain'] = $post_data['args']['exactDomain'];
    }
    if(!empty($post_data['args']['rootDomain'])){
        $data['root_domain'] = $post_data['args']['rootDomain'];
    }
    if(!empty($post_data['args']['keyword'])){
        $data['keyword'] = $post_data['args']['keyword'];
    }
    if(!empty($post_data['args']['campaignId'])){
        $data['campaign_id'] = $post_data['args']['campaignId'];
    }
    if(!empty($post_data['args']['query'])){
        $data['query'] = $post_data['args']['query'];
    }
    if(isset($post_data['args']['expandClientId'])){
        $data['expand_client_id'] = $post_data['args']['expandClientId'];
    }

    $query_str = $settings['api_url'] . "user/link_history";
    $client = $this->httpClient;

    try {
        $resp = $client->get($query_str, [
            'query' => $data
        ]);
        $responseBody = $resp->getBody()->getContents();

        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = json_decode($responseBody);
            if(empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to'] = $responseBody;
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});
