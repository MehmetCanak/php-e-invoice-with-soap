<!DOCTYPE html>
<html>
<body>
<h1>E Fatura Query Test Ekranı  </h1>

<?php
require 'wsdl/QueryDocumentWS/GetPKList.php';
require 'wsdl/QueryDocumentWS/QueryOutboxDocument.php';
require 'wsdl/QueryDocumentWS/QueryDocumentWS.php';



$paramType = "Document_UUID";
$parameter = "5B8E1575-450B-474E-883F-912FDA6B82D5";
$withXML= "PDF";
$document = new QueryOutboxDocument($paramType, $parameter, $withXML);

$response= new QueryDocumentWS();
$queryResponse= $response->QueryOutboxDocument($document);

var_dump($queryResponse);
echo "test";



?>

</body>
</html>

