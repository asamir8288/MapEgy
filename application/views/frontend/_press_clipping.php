<!------ START Press Clipping --------------------------------->

<div class="small-dashed-separator"></div>
<div class="home-title small-width" style="width: 150px;">Press Clipping</div>

<?php 
$i =1;
foreach ($press_clippings as $clipping) {
    $style = '';
    if($i % 3 == 0){
        $style = 'style="margin-right: 0px;"';
    }
    ?>
    <div class="press-clipping-box" <?php echo $style;?>>
        <a href="<?php echo $clipping['link_url'];?>" target="_blank" class="logo-bg">
            <img style="width: 280px;height: 182px;" src="<?php echo static_url() . 'files/press_clipping_logos/' . $clipping['logo'];?>" />
        </a>
        <div class="clipping-date"><?php echo $clipping['date'];?></div>
        <a href="<?php echo $clipping['link_url'];?>" target="_blank" class="clipping-title"><?php echo (strlen($clipping['title']) > 90) ? substr($clipping['title'],0,60) . '...' : $clipping['title'];?></a>
        <div class="clipping-desc"><?php echo (strlen($clipping['description']) > 90) ? substr($clipping['description'], 0, 90) . '...' : $clipping['description'];?></div>
    </div>
<?php $i++; } ?>



<div style="clear: left;height: 1px;"></div>

<!------ END Press Clipping --------------------------------->
