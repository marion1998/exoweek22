<?php
    /*
    * Plugin Name: Loyalty_card_Marion 
    * Author: Marion
    * Description: Plugin d'affichage "Hey"                   
    */

    function renvoie(){
        echo '<i>' . 'Hey !' . '</i>';
    }

    add_shortcode('plug', 'renvoie');

    do_action( 'woocommerce_after_calculate_totals', 10, 15 ); 

    function discount($toto){
        print_r($toto);
    }

?>
