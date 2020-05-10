<?PHP
echo "あなたの伸長を入力してください: ";
$h=fgets(STDIN)*0.01;
echo "あなたの体重を入力してください: ";
$w=fgets(STDIN);
$bmi=$w/($h*$h);
if ( $bmi < 18.5 ){
    echo "あなたは、低体重です。\n";
}else if ( 18.5 <= $bmi && $bmi < 25){
    echo "あなたは、普通体重です。\n";
}else {
    echo "あなたは、肥満です。\n";
}
?>