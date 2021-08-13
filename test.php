<?php 

function getViewCount(string $jsonString) : int
{
    $str_jsn=json_decode($jsonString, TRUE);
    return $str_jsn['videos']['viewCount'];
}

$jsonString = '{
    "apiVersion":"2.1",
    "videos":[
        {
            "id":"253",
            "category":"Music",
            "title":"Jingle Bells",
            "duration":457,
            "viewCount":88270796
        }
    ]
}';

echo getViewCount($jsonString);


// $value = 10;
// $arr = array();
// $k = 1;
// while($k == 1){
//     for($i = 0; $i < $value; $i++){
//         array_push($arr ,$i);
//     }
//     for($j = 0; $i < count($arr); $j++){
        
//     }
//     if(($i % $value) == 0){
//         array_push($arr ,$i);
//     }
//     $k =0;
// }

// print_r($arr);


 ?>