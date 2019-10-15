<?php
$a = 4;
$b= 6;
$obdelnikobsah = $a*$b;
echo "Obsah obdelníku o stranách $a a $b je $obdelnikobsah.";
?>

<p>
<?php
$strana = 6;
$uhel = 60;
$vyska = $strana*sin(deg2rad ($uhel));
$trojuhelnikobsah = round($strana*$vyska/2);
echo "Obsah rovnostranného trojúhelníku o straně délky $strana cm a úhlu $uhel stupňů je $trojuhelnikobsah cm².";
?>
</p>