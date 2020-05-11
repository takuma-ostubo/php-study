<?PHP
$rand[0] = mt_rand(0,9);
$rand[1] = mt_rand(0,9);
$rand[2] = mt_rand(0,9);
$rand[0] = 0;
echo $rand[0].$rand[1].$rand[2]."\n";
if ($rand[0] === $rand[1] && $rand[1] === $rand[2] && $rand[2] === $rand[0] && $rand[0] === "0" ) {
    $rand[0] = mt_rand(0,9);
    $rand[1] = mt_rand(0,9);
    $rand[2] = mt_rand(0,9);
    echo $rand."\n";
}
echo "抜けたよ\n";
?>
