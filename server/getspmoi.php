 <?php
    include "connect.php";
    $query = "SELECT * FROM `sanpham` ORDER BY id DESC";
    $data = mysqli_query($conn, $query);
    $result = array();
    while($row = mysqli_fetch_assoc($data)){
        $result[] = ($row);
        //code...
           
    }
    //print_r($result);
if(!empty($result)){
	$arr = [
		'success' => true,
		'message' => "thanh cong",
		'result' => $result
	];
}else{
		$arr = [
		'success' => false,
		'message' => "khong thanh cong",
		'result' => $result
	];
}

print_r(json_encode($arr));


?>


