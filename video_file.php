<?php
            $file = get_field('video_link');
            if (!empty($file)) {
                $link = $file['url'];
            ?>
                <video autoplay muted loop id="myVideo">

                    <source src="<?php echo $link; ?>" type="video/mp4">

                </video>
            <?php
            }
            ?>