<div class="sub-title"><?php echo $press['media_contact']['title']; ?></div>
<div style="text-align: justify;">
    <?php echo $press['media_contact']['description']; ?>
</div>

<div style="height: 20px;"></div>

<div class="sub-title"><?php echo $press['company_profile']['title']; ?></div>
<div style="text-align: justify;">
    <?php echo $press['company_profile']['description']; ?>
</div>

<div style="height: 20px;"></div>

<div class="sub-title"><?php echo $press['management_biographies']['title']; ?></div>
<div style="text-align: justify;">
    <?php echo $press['management_biographies']['description']; ?>
</div>

<div class="small-dashed-separator" style="margin-top: 40px;"></div>
<div class="section-title" style="width: 55%;">Press Clipping</div>

<?php
$i = 1;
foreach ($press_clippings as $clipping) {
    ?>
    <div class="press-clipping-box">
        <div class="clipping-date"><?php echo $clipping['date']; ?></div>
        <a href="<?php echo $clipping['link_url']; ?>" target="_blank" class="clipping-title"><?php echo (strlen($clipping['title']) > 90) ? substr($clipping['title'], 0, 60) . '...' : $clipping['title']; ?></a>
        <?php echo $clipping['description']; ?>
    </div>
    <?php $i++;
}
?>



<div style="clear: left;height: 1px;"></div>
