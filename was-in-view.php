if(mysqli_num_rows($result) > 0) {
            while($images = mysqli_fetch_assoc($result)) { ?>
                <div class="alb">
                    <img src="uploaded-images/<?= $images['image_url'] ?>">
                </div>
            <?php }
        } 