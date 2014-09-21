<?php
$i = 1;
foreach ($activeFeatures as $feature) {
    $style = '';
    if ($i % 3 == 0) {
        $style = 'style="padding-right: 0px;"';
    }
    ?>

    <div class="feature-box" <?php echo $style;?>>
        <img style="width: 278px;height: 181px;" src="<?php echo static_url() . 'files/products/' . $feature['image']; ?>" />
        <p>
            <?php echo $feature['description']; ?>
        </p>
    </div>
    <?php $i++;
}
?>