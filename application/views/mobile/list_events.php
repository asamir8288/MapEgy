<div class="news-meet-us">
    <?php
    $i = 1;
    foreach ($active_events as $event) {
        ?>
        <div class="event_box">
            <div class="event-date"><?php echo date('d M Y', strtotime($event['date'])); ?></div>
            <div class="img-box"><img src="<?php echo static_url() . 'files/events/' . $event['image']; ?>" style="width: 77px;height: 50px;" /></div>
            <div class="event-content">                
                <div class="event-date"><?php echo $event['title']; ?></div>
                <div class="event-desc"><?php echo (strlen($event['summary']) > 120) ? substr($event['summary'], 0, 120) : $event['summary']; ?></div>
            </div>

        </div>
        <?php
        $i++;
    }
    ?>
</div>