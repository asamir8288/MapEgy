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
        <div class="logo-bg"><img src="<?php echo static_url() . 'files/press_clipping_logos/' . $clipping['logo'];?>" /></div>
        <div class="clipping-date"><?php echo date('Y M', strtotime($clipping['date']));?></div>
        <div class="clipping-title"><?php echo $clipping['title'];?></div>
        <div class="clipping-desc"><?php echo $clipping['description'];?></div>
    </div>
<?php $i++; } ?>



<div style="clear: left;height: 1px;"></div>

<!------ END Press Clipping --------------------------------->
