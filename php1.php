<?php
//1
//function checkeven($number){
//    $check=false;
//    if($number%2==0){
//        $check=true;
//    }
//    return $check;
//}
//
//$check=checkeven(10);
//if($check==false){
//    echo 'khong phai so chan';
//}
//else{
//    echo 'la so chan';
//}
//2
//function sum($number){
//    $tong=0;
//    for($i=1;$i<=$number;$i++){
//        $tong+=$i;
//    }
//    return $tong;
//}
//$sum=sum(10);
//echo $sum;
//3
// function inbangcuuchuong($a,$b){
//     for($index1=1;$index1<=$a;$index1++){
//         for($index2=1;$index2<=$b;$index2++){
//             echo $index1.'x'.$index2.'='.$index1*$index2.'</br>';
//         }
//     }
// }
// inbangcuuchuong(10,10);
//4
//function check($string,$word){
//    $check=strpos($string,$word);
//    return $check;
//}
//$string='abcdefgh';
//$word='cdef';
//$check=check($string,$word);
//if($check==true){
//    echo $string.' co chua tu '.$word;
//}
//else{
//    echo $string.' chuoi khong chua tu '.$word;
//}
//5
//function timmin($arr){
//    $min=$arr[0];
//    for($i=0;$i<count($arr);$i++){
//        if($min<$arr[$i]){
//            $min=$arr[$i];
//        }
//    }
//    return $min;
//}
//function timmax($arr){
//    $max=$arr[0];
//    for($i=0;$i<count($arr);$i++){
//        if($max>$arr[$i]){
//            $max=$arr[$i];
//        }
//    }
//    return $max;
//}
//$arr=[1,5,6,2,7,3,4];
//$min=timmin($arr);
//$max=timmax($arr);
//echo 'min: '.$min.'<br>';
//echo 'max: '.$max;
//6
//function quickSort($arr){
//    $length=count($arr);
//    if($length<=1){
//        return $arr;
//    }
//    else{
//        $left=$right=array();
//        $pivot=$arr[0];
//        for($i=1;$i<$length;$i++){
//            if($arr[$i]<$pivot){
//                $left[]=$arr[$i];
//            }
//            else{
//                $right[]=$arr[$i];
//            }
//        }
//    }
//    return array_merge(quickSort($left),array($pivot),quickSort($right));
//}
//$arr=[5,2,7,1,8,9,4,6];
//$newarr=quickSort($arr);
//foreach($newarr as $value){
//    echo $value.'<br>';
//}
//7
// function factorial($number){
//     $giaithua=1;
//     for($index=1;$index<=$number;$index++){
//         $giaithua*=$index;
//     }
//     return $giaithua;
// }
//$factorial=5;
// $number=factorial($factorial);
// echo $number;
//8
//function timsonguyento($start,$end){
//    $arr=array();
//    for($i=$start;$i<$end;$i++){
//        $check=true;
//        for($i2=2;$i2<=sqrt($i);$i2++){
//            if($i%$i2==0){
//                $check=false;
//                break;
//            }
//        }
//        if($check){
//            $arr[]=$i;
//        }
//    }
//    return $arr;
//}
//$start=10;
//$end=100;
//$arr=timsonguyento($start,$end);
//foreach($arr as $value){
//    echo $value.'<br>';
//}
//9
//function sum($arr){
//    $tong=0;
//    for($i=0;$i<count($arr);$i++){
//        $tong+=$arr[$i];
//    }
//    return $tong;
//}
//$arr=[4,5,6,7,8];
//$tong=sum($arr);
//echo $tong;
//10
//function dayfibonacci($number){
//    $arr=array();
//    $fibo[0]=1;
//    $fibo[1]=1;
//    $i=2;
//    echo $fibo[0].'<br>'.$fibo[1].'<br>';
//    do{
//        $fibo[$i]=$fibo[$i-1]+$fibo[$i-2];
//        if($fibo[$i]>=$number){break;}
//        $arr[]=$fibo[$i];
//    }
//    while($fibo[$i]<$number && $i++);
//    return $arr;
//}
//$number=1000;
//$arr=dayfibonacci($number);
//foreach($arr as $value){
//    echo $value.'<br>';
//}
//11
//function checkamstrong($number){
//    $dodai=strlen($number);
//    $tong=0;
//    $check=true;
//    $temp=$number;
//    while($temp>0){
//        $chuso=$temp%10;
//        $tong=$tong+pow($chuso,$dodai);
//        $temp=$temp/10;
//    }
//    if($tong==$number){
//        $check=true;
//    }
//    else{
//        $check=false;
//    }
//    return $check;
//}
//$number=1634;
//$check=checkamstrong($number);
//if($check==true){
//    echo 'la so armstrong';
//}
//else{
//    echo 'khong phai so armstrong';
//}
//12
//function chen($arr,$position,$number){
//    $newarr=$arr;
//    $newarr[$position]=$number;
//    for($i=$position+1;$i<count($arr)+1;$i++){
//        $newarr[$i]=$arr[$i-1];
//    }
//    return $newarr;
//}
//$arr=[1,2,3,4];
//$newarr=chen($arr,1,10);
//foreach($newarr as $value){
//    echo $value.'<br>';
//}
//13
//function loaibophantutrunglap($arr){
//    $newarr=array();
//    $exist=array();
//    foreach($arr as $value) {
//        $element = $value;
//        if (!isset($exist[$element])) {
//            $exist[$element] = 1;
//            $newarr[] = $element;
//        }
//    }
//    return $newarr;
//}
//$arr=[1,1,1,2,2,3,4];
//$newarr=loaibophantutrunglap($arr);
//foreach($newarr as $value){
//    echo $value.'<br>';
//}
//14
//function tim($arr,$element){
//    $position=0;
//    foreach($arr as $key=>$value){
//        if($element==$value){
//            $position=$key;
//        }
//    }
//    return $position;
//}
//$arr=[1,2,3,4];
//$element=2;
//echo tim($arr,$element);
//15
//function dem($string){
//    $i=0;
//    while(@$string[$i]!=''){
//        $i++;
//    }
//    return $i;
//}
//function daonguoc($string){
//    $temp='';
//    $a=dem($string);
//    for($i=1;$i<=$a;$i++){
//        $temp[$i-1]=$string[$a-$i];
//    }
//    echo $temp;
//}
//daonguoc('abcd');
//16
//function dem($arr){
//    $count=0;
//    foreach($arr as $value){
//        $count++;
//    }
//    return $count;
//}
//$arr=[1,2,3,4];
//$count=dem($arr);
//echo $count;
//17
//function dem($arr){
//    $count=0;
//    while(@$arr[$count]!=''){
//        $count++;
//    }
//    return $count;
//}
//function daonguoc($string){
//    $temp='';
//    $a=dem($string);
//    for($i=1;$i<=$a;$i++){
//        $temp[$i-1]=$string[$a-$i];
//    }
//    return $temp;
//}
//
//function checkpalindrome($string){
//    $temp=daonguoc($string);
//    if($temp==$string){
//        return 'la chuoi palindrome';
//    }
//    else{
//        return 'khong phai chuoi palindrome';
//    }
//}
//$chuoi='abcba';
//echo $chuoi.checkpalindrome($chuoi);
//18
//function dem($arr,$element){
//    $count=0;
//    foreach($arr as $value){
//        if($value==$element){
//            $count++;
//        }
//    }
//    return $count;
//}
//$number=dem([1,1,2,3,4,4,5,1,2],4);
//echo $number;
//19
//function quickSortDesc($arr){
//    $length=count($arr);
//    if($length<=1){
//        return $arr;
//    }
//    else{
//        $left=$right=array();
//        $pivot=$arr[0];
//        for($i=1;$i<$length;$i++){
//            if($arr[$i]>$pivot){
//                $left[]=$arr[$i];
//            }
//            else{
//                $right[]=$arr[$i];
//            }
//        }
//    }
//    return array_merge(quickSortDesc($left),array($pivot),quickSortDesc($right));
//}
//$arr=[1,5,2,4,6,3,9,8,7];
//$newarr=quickSortDesc($arr);
//foreach ($newarr as $value){
//    echo $value.'<br>';
//}
//21
//function quickSortDesc($arr){
//    $length=count($arr);
//    if($length<=1){
//        return $arr;
//    }
//    else{
//        $left=$right=array();
//        $pivot=$arr[0];
//        for($i=1;$i<$length;$i++){
//            if($arr[$i]>$pivot){
//                $left[]=$arr[$i];
//            }
//            else{
//                $right[]=$arr[$i];
//            }
//        }
//    }
//    return array_merge(quickSortDesc($left),array($pivot),quickSortDesc($right));
//}
//function timSoLonThuHai($arr){
//    $arr=quickSortDesc($arr);
//    $secondMax=$arr[0];
//    foreach($arr as $key=>$value){
//        switch($key){
//            case 1;
//            $secondMax=$value;
//            break;
//        }
//    }
//    return $secondMax;
//}
//$arr=[-1,-2,1,5,10];
//echo timSoLonThuHai($arr);

//22
//function timuclnbcnn($number1,$number2){
//    $ucln=1;
//    $bcnn=0;
//    $tim=array();
//    $behon=($number1<$number2)?$number1:$number2;
//    $lonhon=($number1>$number2)?$number1:$number2;
//    for($i=2;$i<=$behon;$i++){
//        if($behon%$i==0){
//            if($lonhon%$i==0){
//                $ucln=$i;
//                break;
//            }
//        }
//    }
//    $bcnn=$number1*$number2/$ucln;
//    $tim[0]='uoc chung lon nhat la '.$ucln;
//    $tim[1]='boi chung lon nhat la '.$bcnn;
//    return $tim;
//}
//$number1=10;
//$number2=15;
//$arr=timuclnbcnn($number1,$number2);
//foreach($arr as $value){
//    echo $value.'<br>';
//}
//23
//function checkperfectnumber($number){
//    $check=true;
//    $tong=0;
//    for($i=1;$i<=$number/2;$i++){
//        if($number%$i==0){
//            $tong+=$i;
//        }
//    }
//    if($tong==$number){
//        $check=true;
//    }
//    else{$check=false;}
//    return $check;
//}
//$number=496;
//if(checkperfectnumber($number)){
//    echo $number.' la so hoan hao';
//}
//else{
//    echo $number.' khong phai so hoan hao';
//}
//24
//function timmaxle($arr){
//    $max=$arr[0];
//    for($i=1;$i<count($arr);$i++){
//        if($arr[$i]>$arr[$i-1]){
//            if($arr[$i]%2==1){
//                $min=$arr[$i];
//            }
//        }
//    }
//    return $min;
//}
//echo timmaxle([1,5,2,6,1,7,8]);
//25
//function checkprime($number){
//    $check=true;
//    for($i=2;$i<=sqrt($number);$i++){
//        if($number%$i==0){
//            $check=false;
//            break;
//        }
//    }
//    if($check==true){
//        $in=' la so nguyen to';
//    }
//    else{
//        $in=' khong phai so nguyen to';
//    }
//    return $in;
//}
//$number=5;
//echo $number.checkprime($number);
//26
//function timsoduonglonnhat($arr){
//    $max=$arr[0];
//    for($i=1;$i<count($arr);$i++){
//        if($arr[$i]>$arr[$i-1]){
//            $max=$arr[$i];
//        }
//    }
//    return $max;
//}
//echo timsoduonglonnhat([1,2,-5,-1,4])
//27
//function timsoamlonnhat($arr){
//    $min=$arr[0];
//    for($i=1;$i<count($arr);$i++){
//        if($arr[$i]>$arr[$i-1]){
//            if($arr[$i]<0){
//                $min=$arr[$i];
//            }
//        }
//    }
//    return $min;
//}
//echo timsoamlonnhat([-1,-2,-5,2,4]);
//28
//function tongtu1denn($number){
//    $tong=0;
//    for($i=1;$i<=$number;$i=$i+2){
//        $tong+=$i;
//    }
//    return $tong;
//}
//echo tongtu1denn(10);
//29
//function kiemtrasochinhphuong($start, $end){
//    $arr=array();
//    for($a=$start;$a<=$end;$a++){
//        if(sqrt($a)==(int)sqrt($a)){
//            $arr[]=$a;
//        }
//    }
//    return $arr;
//}
//$arr=kiemtrasochinhphuong(2,100);
//foreach($arr as $value){
//    echo $value.'<br>';
//}
//30
//function check($string,$word){
//    $check=strpos($string,$word);
//    return $check;
//}
//$string='hom nay chu nhat';
//$word='nay';
//$check=check($string,$word);
//if($check){
//    echo 'co chua';
//}
//else{
//    echo 'khong chua';
//}
?>