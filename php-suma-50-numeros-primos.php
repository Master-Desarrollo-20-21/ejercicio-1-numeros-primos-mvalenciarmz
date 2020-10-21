<?php

    $maxPrimeNumbers = 50;
    $maxNumbers = 1000;
    $now = 1;
    $suma = 0;

    echo "Suma de los $maxPrimeNumbers primeros números primos" . chr(10);
    for ( $i=1; $i<=$maxNumbers; $i++ ) {
        if ( is_prime($i) ) {
            echo $now . ".- " . $i . chr(10);
            $suma += $i;
            $now++;
        }
        if ( $now > $maxPrimeNumbers ) break;
    }
    echo "-------------" . chr(10);
    echo "Suma = $suma";
     
    function is_prime( $num ) {
        if ( $num < 3 ) {
            return ( $num == 2 );
        }
        if ($num % 2 != 0) {
                // echo chr(10);
                // echo "Analizando el num => $num " . chr(10);
                // echo "- raiz quadrada => " . sqrt($num) . chr(10);
            for ($i = 3; $i <= sqrt($num); $i += 2) {
                // echo "- valor actual => $i " . chr(10);
                if ($num % $i == 0) {
                    // echo chr(10) . chr(10);
                    return false;
                }
            }
            // echo chr(10) . chr(10);
            return true;
        }
        return false;
    }
