<?php

    $apostas = 0;
    $numeros = 0;

   function sorteia($numeromaxjogo, $min, $max)
   {
       global $numeros;
       global $apostas;

       echo "Quantos numeros você deseja?";
       $numeros = trim(fgets(STDIN));

       while ($numeros < $min || $numeros > $max) {
           echo "Inválido. Quantos numeros você deseja?";
           $numeros = fgets(STDIN);
       }

       echo "\n Quantas vezes você quer apostar?";
       $apostas = trim(fgets(STDIN));

       for ($i = 0; $i < $apostas; $i++) {

           do {

               $num_dezenas = range(1, $max);
               $sorteio = array_rand($num_dezenas, $numeros);

           } while ($sorteio < $numeromaxjogo);

           for ($j = 0; $j < count($sorteio); $j++) {

               echo $sorteio[$j] . " ";
           }

           echo "\n-----------------------\n";

       }
   }

     function megasena(){

      global $numeros;
      global $apostas;

      $valor = 0;

       if ($numeros == 6){

        $valor = 3.50 * $apostas;

       }elseif($numeros == 7){
          $valor = 24.50 * $apostas;

       }elseif($numeros == 8){
           $valor = 98.00 * $apostas;

       }elseif($numeros == 9){
           $valor = 294.00 * $apostas;

       }elseif($numeros == 10){
           $valor = 735.00 * $apostas;

       }elseif($numeros == 11){
           $valor = 1617.00 * $apostas;

       }elseif($numeros == 12){
            $valor = 3234.00 * $apostas;

       }elseif($numeros == 13){
             $valor = 6006.00 * $apostas;

       }elseif($numeros == 14) {
           $valor = 10510.50 * $apostas;

       }elseif($numeros == 15){
           $valor = 17517.50 * $apostas;

       } else{
           echo "Não é MegaSena";
       }

       echo "O valor da aposta foi R\$ ".number_format($valor,2, ",", ".");

     }

     function lotofacil(){

         global $numeros;
         global $apostas;

         $valor = 0;

    if ($numeros == 15){

        $valor = 2.00* $apostas;

    }elseif($numeros == 16){
        $valor = 32.00 * $apostas;

    }elseif($numeros == 17){
        $valor = 272.00 * $apostas;

    }elseif($numeros == 18){
        $valor = 1632.00 * $apostas;

    } else{
        echo "Não é LotoFacil";
    }
    echo "O valor da aposta foi R\$ ".number_format($valor,2, ",", ".");
}

     function lotomania(){

         global $numeros;
         global $apostas;

         $valor = 0;


    if ($numeros == 50){

        $valor = 1.50* $apostas;

    } else{
        echo "Não é LotoMania";
    }
        echo "O valor da aposta foi R\$ ".number_format($valor,2, ",", ".");
}

     function quina(){

         global $numeros;
         global $apostas;

         $valor = 0;

    if ($numeros == 5){

        $valor = 1.50* $apostas;

    }elseif($numeros == 6){
        $valor = 9.00 * $apostas;

    }elseif($numeros == 7){
        $valor = 31.50 * $apostas;

    }elseif($numeros == 8){
        $valor = 84.00 * $apostas;

    }elseif($numeros == 9){
        $valor = 189.00 * $apostas;

    }elseif($numeros == 10){
        $valor = 378.00 * $apostas;

    }elseif($numeros == 11){
        $valor = 693.00 * $apostas;

    }elseif($numeros == 12){
        $valor = 1188.00 * $apostas;

    }elseif($numeros == 13){
        $valor = 1930.50 * $apostas;

    }elseif($numeros == 14) {
        $valor = 3003.00 * $apostas;

    }elseif($numeros == 15){
        $valor = 4504.50 * $apostas;

    } else{
        echo "Não é MegaSena";
    }
         echo "O valor da aposta foi R\$ ".number_format($valor,2, ",", ".");
     }

