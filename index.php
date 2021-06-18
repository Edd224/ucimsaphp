<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP_studium</title>
</head>
<body>
   

    <?php   

    $job = "hacker"; // string
    $mzda = 10000; // number
    $vyska = 185.2; // float
    $dospelost = true; // boolean - true, false

    
    echo " <h1>EID</h1>";


















    // PODMIENKY //

    // Ak je to if ,je to kladna odpoved, ak else nepravdiva

    if(5 <= 0) // podmieka
        echo "Ano, je to pravda"; // true pravda


    else 
        echo "Nie, nieje to pravda"; // false loz

    echo "<br>";

























    //  ** PRIKLAD PODMIENOK ** //


    $heslo = "123a"; // zadal uzivatel


    if($heslo == "123a")
        echo "Vitajte na nasej stranke";


    else
        echo " Zadali ste nespravne heslo";

        echo "<br>";
        echo "<br>";









    // Tri polozky na vyber //
    // PRIKLAD //



    // programator. disigner, hacker //

    $pozicia = "programator";

    if($pozicia == "programator")
        echo " Ake poznas programovacie jazyky";

    
    elseif($pozicia == "disigner")
        echo "Ake poznas nastroje na upravu dizajnu";


    elseif($pozicia == "hacker")
        echo " Ake poznas typy utokov";

    else
        echo " Chyba , tuto poziciu nepoznam";



    echo " <br>";
    echo " <br>";
    echo " <br>";





















// **  OPERATORY  ** //

    // rovna sa ==   rovna sa bez rozdielu datoveho typu
    // identicka zhoda ===   tu sa rovna iba ak sedi aj datovy typ ( Castejsie pouzivane POUZIVAT PROSTE===)

    // porovnanie < , > , <= , => , <>
    // nerovna sa !=
    // nie su identicke !== 


    if( 5 === '5')
        echo " Je to pravda";
    else 
        echo " Nieje to pravda";

























    
//  ** LOGICKE OPERATORY ** //


// And (&&)

// Volam sa Ed a zaroven byvam TN

// true = Volam sa Ed  a som z Tn
// false = Volam sa Ed a som z Prahy
// false = Volam sa Peter a som z TN
// false = Volam sa Peter a som z Prahy
// ZAPIS JE &&


//  Mam viac ako 18 a zaroven menej ako 30

// if (ageEd > 18 && ageEd < 30){
//     // ked obe su pravdive TEXT....Vstup mas viac ako 18 a menej ako 30
// }

// else{ // Ked jedna z nich je nepravdiva,
//     // obe su nepravdive TEXT... nemas 18 a ani menej ako 30 a aj keby, NIE nemozes
// }


// Or (||)

// Volam sa Ed alebo byvam v Tn
// true = volam sa Ed a som z TN
// true = volam sa Ed a som z Prahy
// true = volam sa Peter a som z Tn
// false = volam sa Peter a som z Prahy
// ZAPIS JE ||

// if (nameEd == "Ed" || ageEd > 18){
//     //ked su obe pravda
//     //ked je aspon jedna z toho pravda
// }
// else {
//     // ked su obe nepravdive
// }





echo "<br>";
echo "<br>";
echo "<br>";





















// NIECO AKO funkcia if 

// Switch

$job = "Kadernicka";

switch($job){
    case "Pilot":
        echo "Ake pozname typy utokov?";
        break;
        
    case "Ucitel":
        echo "Pracujete cez vikend?";
        break;

        
    case "Kadernicka":
        echo "<h1>Mate volny termin?</>";
        break;

    default:
    echo "Pre tuto poziciu nemam ziadnu otazku";
    // Ak nieje ziana zhoda vypise toto tzv.default..TEXT echo : Pre tuto poziciu nemam ziadnu otazku

    // Switch je lepsi nez if a else //

}























    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";












    //*********/ CYKLUS /*******//



    // ** Cyklus WHILE (Rob cykli DOKEDY-WHILE) ** //

    // echo 0;
    // echo 1;
    // echo 2;
    // echo 3;
    // echo 4;
    // echo 5;


    $pocitadlo = 0;


    while( $pocitadlo < 10 )
    {
        echo "Ahoj";
        echo "<br>";
        $pocitadlo = $pocitadlo + 2;
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


















    for($i = 0; $i <= 10; $i++)
        {
            echo $i;
            echo "<br>";
        }
        

        // $i = $i + 1;
        // $i++; -------TOTO je taky isty zapis ako to nad tym
        // $i++ ---- Tzv. Inkrementacia zvysovanie o 1
        // $i---- Znizovanie o 1



        echo "<br>";
        echo "<br>";
        echo "<br>";


        for ($K = 10; $K >= 0; $K--)
        {
            echo $K;
            echo "<br>";
        }


        echo "<br>";
        echo "<br>";
        echo "<br>";

















        //  ** Cyklus foreach ** //

        $mena = ["David", "Jane", "Markus", "Anna" ];


        foreach($mena as $ludia)
        {
            echo $ludia;
            echo "<br>";
        }




        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";





















        // ** Funkcie ** //


        function pozdrav()
        {
            echo " Ahoj hraci ";
            echo "<br>";

        };

        function skore()
        {
            echo "Tvoje skore je: ".(10 + 30);

        }


        function init()
        {
            pozdrav();
            skore();
        }

        init();

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";












// ** FUNKCIA S PARAMETROM **//



        function ahoj($priezvisko)
        {
            echo "Nazdar<br>".$priezvisko;
            echo "<br><br>";
        }

        ahoj("Motl");
        ahoj("Herak");
        ahoj("Vrba");
        ahoj("Gabris");
        ahoj("Mackova");














        // ** Kalkuator ** //

        function calculator($n1, $n2)
        {
            $suma = $n1 + $n2;
            echo $suma;
            echo "<br>";
        }
        calculator(10,30);
        calculator(50,30);
        calculator(10,40);


        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";



























// ** Funkcie a Return ** //


        function vek($rokNarodenia)
        {
            return 2021 - $rokNarodenia;
        }

        $vysledok = vek(1983);
         if($vysledok >= 18)
         {
             echo " Je dospely/a";
         }
         else
         {
             echo "Nieje dospely/a";
         }



         echo"<br>";
         echo"<br>";
         echo"<br>";
         echo"<br>";
         echo"<br>";



























// ** Konštanty ** //

         $vek = 38;
         define("rokNarodenia", 1983); //zapis konstanty ktory pouzivat 
         echo rokNarodenia;

         echo "<br>";


         const mojeKonstanta = "Ei";// tiez zapis konstanty ale ma viac vyznamov
         echo "mojeKonstanta";

         echo "<br>";
         echo "<br>";
         echo "<br>";
         echo "<br>";
         echo "<br>";
         echo "<br>";

     

         
// ** Uloha ** //

         function rozdiel()
         {
             return 100 - 20;

         }

         $vysledok1 = rozdiel();
         echo $vysledok;
         echo "<br>";

         $vysledok2 = rozdiel();
         echo $vysledok2;
         echo "<br>";

         $vysledok3 = rozdiel();
         echo $vysledok3;
         echo "<br>";

         function sucet($X1, $X2)
         {
             echo $X1 + $X2;
         };

         sucet(10,25.578);
         

        



    








    
    
    
    
    
    
    ?>



    
</body>
</html>