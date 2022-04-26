<!DOCTYPE html>
<html>
<body>
<h1>E fatura query test ekranı  </h1>

<?php
echo "Hello World!";
?> 

<?php
require 'wsdl/QueryDocumentWS/GetPKList.php';

$document[] = new GetPKList("123456789");
var_dump($document);
echo "test";



?>

</body>
</html>

