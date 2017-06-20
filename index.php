 <?php

	function get_price($find)
	{
	
		$book_price=array("java"=>350,"cpp"=>400,"c"=>300,"php"=>500);
		
		foreach($book_price as $book=>$price)
		{
		
			if($find==$book)
			{	return $price;
				break;
			}
		}
	
	}
	
		function generate_response($status, $status_message, $data)
	{
		$normal=array("status"=>$status,"status message"=>$status_message,"data"=>$data);
		
		$json_response=json_encode($normal);
	
		echo $json_response;
	}
	
	if(isset($_GET['name'])) $test=$_GET['name'];
	
	$price=get_price($test);
	
	if(empty($price))
		generate_response(200,"DATA NOT FOUND",NULL);
	
	else
		generate_response(400,"DATA FOUND",$price);
	
?>