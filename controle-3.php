<?php
echo "combien d'enfant avez-vous? ";
$number=fgets(STDIN);
$number=trim($number);
if ($number >= 1){
    echo "félicitation";
}
elseif ($number == 0){
    do{
        echo "tapez 1 célibataire 2 par choix ou 3 peut pas: ";
        $number2=fgets(STDIN);
        if ($number2 > 3 || $number2 < 1){
            echo "erreur de commande";
        }
    }
    while($number2 != 1);
        echo "ok";
}
elseif ($number2 != 2){
    echo "ok";
}
else {
    echo "ok";
}
?>