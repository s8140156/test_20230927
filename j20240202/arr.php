<?php

$mobilearr=[
	['id'=>1,'name'=>'iphone10','price'=>10000,'stockLocation'=>['台北']],
	['id'=>2,'name'=>'iphone11','price'=>20000,'stockLocation'=>['台北','台中']],
	['id'=>3,'name'=>'iphone12','price'=>30000,'stockLocation'=>['高雄']],
	['id'=>4,'name'=>'iphone13','price'=>40000,'stockLocation'=>['台北','台中','高雄']]
];

function dd($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

// echo dd($mobilearr);

echo json_encode($mobilearr); //改成json格式 使用json_encode()

dd($mobilearr);





?>