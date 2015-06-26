<?php
echo "6 hello ";
require_once 'WindowsAzure\WindowsAzure.php';

use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Blob\Models\CreateContainerOptions;
use WindowsAzure\Blob\Models\PublicAccessType;
use WindowsAzure\Common\ServiceException;

$storageConnString="DefaultEndpointsProtocol=http;AccountName=galleri;AccountKey=iMiW1aThQIgJvOEesVg/kxJYw2lit9LU56HKhvPNbzmI5mKv5SvKkI9QRtOVnPXLU3K4qYsMane8hyIoJ/qYvw==";

try 
{
    $connectionString = CloudConfigurationManager::getConnectionString($storageConnString);
    
} 
catch(ServiceException $serviceException)
{
    // Handle exception based on error codes and messages.
    // Error codes and messages are here: 
    // http://msdn.microsoft.com/en-us/library/windowsazure/dd179439.aspx
    echo "ServiceException encountered.\n";
    $code = $serviceException->getCode();
    $error_message = $serviceException->getMessage();
    echo "$code: $error_message";
}
catch (Exception $exception) 
{
    echo "Exception encountered.\n";
    $code = $exception->getCode();
    $error_message = $exception->getMessage();
    echo "$code: $error_message";
}

// Create blob REST proxy.
//$blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);

//// OPTIONAL: Set public access policy and metadata.
//// Create container options object.
//$createContainerOptions = new CreateContainerOptions(); 
//
//// Set public access policy. Possible values are 
//// PublicAccessType::CONTAINER_AND_BLOBS and PublicAccessType::BLOBS_ONLY.
//// CONTAINER_AND_BLOBS:     
//// Specifies full public read access for container and blob data.
//// proxys can enumerate blobs within the container via anonymous 
//// request, but cannot enumerate containers within the storage account.
////
//// BLOBS_ONLY:
//// Specifies public read access for blobs. Blob data within this 
//// container can be read via anonymous request, but container data is not 
//// available. proxys cannot enumerate blobs within the container via 
//// anonymous request.
//// If this value is not specified in the request, container data is 
//// private to the account owner.
//$createContainerOptions->setPublicAccess(PublicAccessType::CONTAINER_AND_BLOBS);
//
//// Set container metadata
////$createContainerOptions->addMetaData("key1", "value1");
////$createContainerOptions->addMetaData("key2", "value2");
//
//try {
//    // Create container.
//    $blobRestProxy->createContainer("mycontainer", $createContainerOptions);
//}
//catch(ServiceException $e){
//    // Handle exception based on error codes and messages.
//    // Error codes and messages are here: 
//    // http://msdn.microsoft.com/library/azure/dd179439.aspx
//    $code = $e->getCode();
//    $error_message = $e->getMessage();
//    echo $code.": ".$error_message."<br />";
//}

echo "done";

?>