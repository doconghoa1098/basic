<?php header('Content-type: text/plain');
//bai 2:
echo "Bài 3: \n";
$n = 10;
for ( $i = 0; $i < $n; $i++ ) { 
    for ( $j = $i; $j < $n ; $j++ ) { 
        echo " ";
    }
    for ( $j = 0; $j <= $i*2  ; $j++ ) { 
        echo "*";
    }
    echo "\n";
}

// Bai 3
echo "\n\n\n Bài 4: \n";
$n = 8;
for($i=1; $i<$n; $i++) {
    for($j=$i; $j<$n; $j++) {
        echo " ";
    }
    for($j=1; $j<=$i; $j++){
        printf("%u",$j);
    }
    for($j=$i-1; $j>=1; $j--){
        printf("%u",$j);
    }
    echo "\n";
}


//Bai 5
echo "\n\n\n Bài 5 : \n";
function isPalindrome($str){
    $leng = strlen($str);
    for ($i=0; $i < floor($leng/2); $i++) { 
        if ($str[$i] != $str[$leng-$i-1] ) {
            return false;
        }
    }
    return true;
}

$str = "aabb";
echo isPalindrome($str)?"$str là số đối xứng" : " $str không phải số đối xứng";



//bai 6:
echo "\n\n\n Bài 6: \n";
function PrimeNumber($n){
    if ($n<2) {
        return false;
    }
    for ( $i = 2; $i <= sqrt($n); $i++ ) { 
        if ($n % $i ==0) {
            return false;
        }
    }
    return true; 
}
$a = [[1, 1], [2, 2], 2];
$count  = 0 ;
foreach($a as $key){
    if(is_int($key) && PrimeNumber($key)) {
        $count += $key;
    }
    if(is_array($key)){
        foreach($key as $value){
            if(PrimeNumber($value)) {
                $count += $value;
            }
        }
    }
}
echo "Tổng các số nguyên tố có trong mảng: $count";

// Bài 7 : Tìm giai thừa
echo "\n\n\n Bài 7 : Tìm giai thừa: \n";

function giaithua($n) {
    return $n > 0 ? $n * giaithua($n - 1) : 1;
}
$a = 5;
echo "$a! = ". giaithua($a);

// Bài 8: Sort
echo "\n\n\n Bài 8 : Thuật toán của sort: \n";

$arr = [1, 8, 5, 10,'a','b','A','B'];
$c = count($arr);
for ($i = 0; $i < ($c - 1); $i++)
{
    for ($j = $i + 1; $j < $c; $j++)
    {
        if ($arr[$i] > $arr[$j])
        {
            $tmp = $arr[$j];
            $arr[$j] = $arr[$i];
            $arr[$i] = $tmp;
        }
    }
}
foreach($arr as $value){
    echo $value;
}


echo "\n\n\n Bài 9 : Search fibonacci: \n";








echo "\n\n\n Bài 10 : Regular: email, số điện thoại của Nhật, postcode nhật: \n";
    $email = "doconghoa@japan.com";
    $regex_email = "/^\S+@\S+\.\S+$/";

    $phone = "8112345678";
    $regex_phone = "/^81\d{8,9}$/";  
    
    $postcode = "123-456";
    $regex_postcode = "/^\d{3}[-]\d{2}$|^\d{3}[-]\d{4}$|^\d{3}$|^\d{5}$|^\d{7}$/";

    echo preg_match($regex_email, $email) ? "Mail OK" : "Mail không hợp lệ";
    echo "\n\n";

    echo preg_match($regex_phone, $phone) ? "Phone OK" : "Phone không hợp lệ";
    echo "\n\n";

    echo preg_match($regex_postcode, $postcode) ? "Postcode OK" : "Postcode không hợp lệ";
    echo "\n\n";




?>

