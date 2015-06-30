<?php
require_once 'WindowsAzure\WindowsAzure.php';

use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Blob\Models\CreateContainerOptions;
use WindowsAzure\Blob\Models\PublicAccessType;
use WindowsAzure\Common\ServiceException;

$connectionString = 'DefaultEndpointsProtocol=http;AccountName=galleri;AccountKey=iMiW1aThQIgJvOEesVg/kxJYw2lit9LU56HKhvPNbzmI5mKv5SvKkI9QRtOVnPXLU3K4qYsMane8hyIoJ/qYvw==';
echo "connecting... ";
$blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);
echo "done";
?>