<?php 
// hàm count
// array thường
$a1 = array(4, 5, 7, 9, 12);
$size = count($a1);
echo "kích thước array thường " .$size;
echo "<br>";
// array 2 chiều
$a2 = array(
"nga" => array("toan" => 7, "ly" => 4, "hoa" => 8.5),
"nam" => array("toan" => 4, "ly" => 2, "hoa" => 3.5),
"nu" => array("toan" => 7, "ly" => 5, "hoa" => 9.5),);

$size = count($a2);
echo "kích thước array hai chiều "  .$size;
echo "<br>";

// thêm 1 phần tử vào cuối array
// cách 1
$a3 = array(4, 5, 7, 9, 12);
array_push($a3, 11);
var_dump($a3);

// cách 2
$a4 = array(4, 5, 7, 9, 12);
$a4[] = 11;
var_dump($a4); 



// lấy phần tử cuối ra khỏi array
$a5 = array(4, 5, 7, 9, 12);
$e = array_pop($a5); // 12
echo "phần tử cuối array " .$e;
var_dump($a5);

// thêm 1 phần tử vào đầu array
$a6 = array(4, 5, 7, 9, 12);
array_unshift($a6, 3);
echo "phần tử số 3 được thêm vào đầu a6";
var_dump($a6);

// lấy 1 phần tử đầu ra khỏi array
$a7 = array(4, 5, 7, 9, 12);
$e = array_shift($a7);
echo "phần tử đầu array " .$e;
echo "<br>";
echo "giá trị của a7 sau khi lấy phần tử đầu tiên 4 ra khỏi array";
var_dump($a7);

// chèn, xóa, thay thế bất kỳ vị trí nào trong array
// $remove_array = array_splice($a8, $start, $length, $added_array);
// trong đó start là vị trí bắt đầu lấy phần tử ra, $length số lượng phần tử lấy ra, $added_array là thêm phần tử vào array
// $remove_array = array_splice($a8, 2, 2, array(9, 12 , 15));

echo "a8";
$a8 = array(7, 4, 6, 2, 5);
$x = array_splice($a8, 2, 2, ["a", "b", "c"]); // 2 là vị trí bắt đầu, 2 số lượng phần tử lấy ra
// $x = array_splice($a8, 2, 0, ["a", "b", "c"]); // 7 4 a b c 6 2 5
var_dump($a8); // 7 4 a b c 5 
var_dump($x); // 6, 2
echo "<br>";

$a8 = array(7, 4, 6, 2, 5); 
$remove_array = array_splice($a8, 2, 2, array(9, 12 , 15));
var_dump($a8);
var_dump($remove_array);
echo "<br>";


// hàm in_array : kiểm tra phần tử có trong array hay không
$a12 = array("a", "b", "c", "d", "e");
$e = "b";
if(in_array($e, $a12)) {
	echo "chữ $e có nằm trong array a12";
}
else {
	echo "chữ $e không nằm trong array a12 ";

}

echo "<br>";

// hàm array_key_exists kiểm tra key 
$a13 = array("toan" => 3, "ly" => 2, "hoa" => 7);
$e = "toan";
if(array_key_exists($e, $a13)){
		echo "key $e có nằm trong array a13";
}
else {
	echo "key $e không nằm trong array a13 ";

}

// hàm array_count_values đếm xem giá trị xuất hiện mấy lần
$a14 = array("a", "b", "c", "c", "e"); 
$duplicated_array = array_count_values($a14);
var_dump($duplicated_array);

// hàm array_sum & array_product()
$a15 = array(7, 4, 6, 2, 5);
echo "tổng " .array_sum($a15);
echo "<br>";
echo "tích " .array_product($a15);

// hàm array_merge() gôm array lại
$a16 = array(7, 4, 6);
$a17 = array(5, 9);
$a18 = array_merge($a16, $a17);
var_dump($a18);

// hàm is_array  kiểm tra biến đó có phải kiểu dữ liệu là array k?
// is_null(var), ....vvv
$a19 = array(2); 
if(is_array($a19)) {
	echo "nó là array";
}
else {
	echo "nó  không là array";
}

// array_unique xóa phần tử trùng
$a20 = array("a", "b", "c", "c", "e"); 
$a21 = array_unique($a20);
var_dump($a21);

// hàm array_values; là quan tâm giá trị k quan tâm chỉ số
$a22 = array("toan" => 3, "ly" => 2, "hoa" => 7);
$a23 = array_values($a22);
var_dump($a23);

// hàm array_reverse($a24); đảo lại
$a24 = array("a", "b", "c", "d", "e"); 
$a25 = array_reverse($a24);
var_dump($a25);

// hàm list(varname) gán giá trị phần tử vào
list($x, $y, $z) = [100, 200, 300];
echo $x;
echo "<br>";

// hàm array_search(needle, haystack); tìm kiếm key dựa vào giá trị
$a26 = array("toan" => 3, "ly" => 2, "hoa" => 3);
$key = array_search(2, $a26);
echo "key tìm thấy là " .$key;

// hàm sort(array) sắp xếp theo thứ tự tăng dần
$a29 = array(10, 5, 7, 9, 11);
sort($a29);
var_dump($a29);

// arsort(array) đảo ngược lại giảm dần
$a30 = array(10, 5, 7, 9, 11);
arsort($a30);
var_dump($a30);

// asort(array) associative arrray mãng kết hợp sắp xếp theo thứ tự tăng dần
$a31 = array("toan" => 3, "ly" => 2, "hoa" => 7);
asort($a31);
var_dump($a31);

// ksort(array) sắp xếp theo key tăng dần
$a32 = array("tx" => 3, "ly" => 2, "hoa" => 7, "toan1" => 3, "toan2" =>3);
ksort($a32);
var_dump($a32);

// hàm arsort(array)
$a33 = array("toan" => 3, "ly" => 2, "hoa" => 7);
arsort($a33 );
var_dump($a33);

// hàm ksort(array)
$a34 = array("toan" => 3, "ly" => 2, "hoa" => 7);
ksort($a34);
var_dump($a34);

// toán tử 3 ngôi 
$a = 5;
if($a > 4) {
	$b = 1;
}
else {
	$b = 2;
}
echo $b;
echo "<br>";
$a = 1;
$b = $a > 4 ? 1: 2;
echo $b;
// hàm usort(array, cmp_function) sắp xếp theo thứ tự tăng dần
$a36 = [5, 4, 9];
usort($a36, function($a, $b){
	if ($a == $b) {
		return 0;
	}

	return $a < $b ? -1 : 1;
});

var_dump($a36);


// bài tập sắp xếp mãng theo thứ tự chẳn tăng dần, 
$a37 = [1, 9, 3, 2, 4, 0, 5];
$even = [];
$odd  = [];
foreach ($a37 as $val) {
	# code...
	if($val % 2 == 0) {
		$even[] = $val;
	}
	else {
		$odd[] = $val;
	}
}
sort($even);
$result = array_merge($even, $odd );
var_dump($result);

// bài tập sắp xếp array theo tiêu chí lương tăng dần
$a38 = [
	["name" => "nguyen van tham", "salary" => 4000000],
	["name" => "nguyen thi boi", "salary" => 7000000],
	["name" => "pham hung", "salary" => 3000000],
	
];

// Mục tiêu: sắp xếp các phần tử theo lương tăng dần
usort($a38, function($a, $b){
	if ($a["salary"] == $b["salary"]) {
		return 0;
	}

	return $a["salary"] < $b["salary"] ? -1 : 1;
});

var_dump($a38);

 ?>

