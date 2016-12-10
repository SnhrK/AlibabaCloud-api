<?php

/* Note: need to add "ap-northeast-1" to sdk config: sdk/aliyun-php-sdk-core/Regions/EndpointConfig.php */

include_once 'sdk/aliyun-php-sdk-core/Config.php';
use Ecs\Request\V20140526 as Ecs;

$iClientProfile = DefaultProfile::getProfile("ap-northeast-1", "LTAI3DcYkMic2Smg", "6tS7EVcFgbRSeX3sj7Aci8JFbvKNVO");
$client = new DefaultAcsClient($iClientProfile);

//describe regions
// $request = new Ecs\DescribeRegionsRequest();
// $request->setMethod("GET");
//
// $response = $client->getAcsResponse($request);

//describe images
// $request = new Ecs\DescribeImagesRequest();
// $request->setMethod("GET");
//
// $response = $client->getAcsResponse($request); //ImageId: ubuntu1404_64_40G_cloudinit_20160727.raw <- Ubuntu x86_64 14.04 64位


//create a security group
// $request = new Ecs\CreateSecurityGroupRequest();
// $request->setMethod("POST");
//
// $response = $client->getAcsResponse($request);


//List security groups
// $request = new Ecs\DescribeSecurityGroupsRequest();
// $request->setMethod("GET");


// $response = $client->getAcsResponse($request);


//create instance
// $request = new Ecs\CreateInstanceRequest();
// $request->setMethod("POST");
// $request->setImageId("ubuntu1404_64_40G_cloudinit_20160727.raw");
// $request->setInstanceType("ecs.t1.small");
// $request->setInstanceName("suna-test-01");
//
//
// $response = $client->getAcsResponse($request);

//Describe Instances
// $request = new Ecs\DescribeInstancesRequest();
// $request->setMethod("GET");
//
//
// $respose = $client->getAcsResponse($request);


// Requesting EIPs
// $request = new Ecs\DescribeEipAddressesRequest();
// $request->setMethod("GET");
//
// $respose = $client->getAcsResponse($request);


print_r($response);
