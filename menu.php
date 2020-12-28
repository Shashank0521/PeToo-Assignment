<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span>Hello world</span>
    <?php

$url = 'https://jsonblob.com/api/jsonBlob/e4460d6a-3eb9-11eb-ac6b-f1a554aa69fc';
$collection_name = 'RapidAPI';
$request_url='https://jsonblob.com/api/jsonBlob/e4460d6a-3eb9-11eb-ac6b-f1a554aa69fc';

$curl = curl_init($request_url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'Accept: application/json',
  'Content-Type: application/json'
]);

$response = curl_exec($curl);
curl_close($curl);

echo $response . PHP_EOL;

//echo var_dump(json_decode($response, true));
$json = json_decode($response);
//echo json_decode($response);
foreach($json as $obj){
    echo $obj->var_dump(json_decode(Veg,true));
 
 }

?>
</body>
</html>