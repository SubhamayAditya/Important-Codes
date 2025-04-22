  <?php $bannertext = get_field('text_banner');
                        echo wpautop($bannertext);
                        ?>



   /////-------------checking----//
   
   <?php $addPrtcontant = get_field('addPrtcontant');
                if (!empty($addPrtcontant))
                 {
                    echo wpautop($addPrtcontant);
                 } 
        ?>                     