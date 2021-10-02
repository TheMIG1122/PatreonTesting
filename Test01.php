<?php session_start();
 require_once __DIR__.'/vendor/autoload.php';

use Patreon\API;
use Patreon\OAuth;

// $_SESSION['access_token'] = '-gsyigazgrOkhTf3CnuHFr6D2ko4um4Z3Nhf8n-9xRs';
// $_SESSION['refresh_token'] = 'emrRlUzaiOk__e1jHJiJaQPmTu8maWC2WcYjOl9cEyI';

$access_token = $_SESSION['access_token']; // Your Creator Access Token
$refresh_token = $_SESSION['refresh_token'];
// $api_client = new Patreon\API($access_token);

// Get your campaign data
// $campaign_response = $api_client->fetch_campaign();
// $campaign_id = $campaign_response->get('data.0.id');

// if ($campaign_response['errors']) {
    // Make an OAuth client
    // Get your Client ID and Secret from https://www.patreon.com/platform/documentation/clients
    $client_id = 'z447stZ4nT99L2K1z9u3NXJhXOnU3aeFtvIzAI2_51MgEhq_vkw3t46OyeDiYn9R';
    $client_secret = 'wK7V11aYZwiDaqGSVz_KHFsEUuoxrGM8M8UO66FXIh8kxF7SCmxNRMc7BtE91g77';
    $oauth_client = new Patreon\OAuth($client_id, $client_secret);
    // Get a fresher access token
    $tokens = $oauth_client->refresh_token($refresh_token, null);
    print_r($tokens);
    $_SESSION['access_token'] = $tokens['access_token'];
    $_SESSION['refresh_token'] = $tokens['refresh_token'];
    $access_token = $_SESSION['access_token']; // Your Creator Access Token
    $refresh_token = $_SESSION['refresh_token'];
    $api_client = new Patreon\API($access_token);
    // $campaign_response = $api_client->fetch_user();
    $campaign_response = $api_client->fetch_campaign_details(7510630);
    print_r($campaign_response);
    // echo $campaign_response[included]->title;
    // if ($tokens['access_token']) {
    //     $access_token = $tokens['access_token'];
    //     echo "Got a new access_token! Please overwrite the old one in this script with: " . $access_token . " and try again.";
    // } else {
    //     echo "Can't recover from access failure\n";
    //     print_r($tokens);
    // }
    // return;
// }
