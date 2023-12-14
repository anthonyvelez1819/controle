<?php
echo "quel mois somme-nous";
$month=fgets(STDIN);
switch ($month){
    case "janvier":
        echo "c'est le mois 1";
        break;
    case "février":
        echo "le mois 2";
        break;
    case "mars":
        echo "le mois 3";
        break;
    case "avril":
        echo "le mois 4";
        break;
    case "mai":
        echo "le mois 5";
        break;
    case "juin":
        echo "le mois 6";
        break;
    case "juillet":
        echo "le moi 7";
        break;
    case "aout":
        echo "le moi 8";
        break;
    case "septembre":
        echo "le moi 9 ";
        break;
    case "octobre":
        echo "moi 10";
        break;
    case "novembre":
        echo "le moi 11";
        break;
    case "décembre":
        echo "le moi 12";
        break;
    default:
        echo "erreur"
        ?>
}