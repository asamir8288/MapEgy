<script type="text/javascript">
    $(document).ready(function() {
        $("#datepicker").datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>

<?php echo form_open_multipart($post_url); ?>
<ul id="form_list"> 
    <li>
        <label for="title"><?php echo lang('event_title'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['title'])) ? $data['title'] : ''; ?>" name="title" id="title" class="txtbox" >
        <?php echo (isset($errors['title'])) ? generate_error_message($errors['title']) : ''; ?>
    </li>
    <li>
        <label for="datepicker"><?php echo lang('event_date'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['date'])) ? $data['date'] : ''; ?>" name="date" id="datepicker" class="txtbox" >
        <?php echo (isset($errors['date'])) ? generate_error_message($errors['date']) : ''; ?>
    </li>
    <li>
        <label for="event_summary"><?php echo lang('event_summary'); ?>:</label>
        <?php
            $val = (isset($data['summary'])) ? $data['summary'] : '';
            
        ?> 
        <textarea class="txtarea" name="summary" style="width: 350px;height: 100px;"><?php echo $val;?></textarea>
    </li>
    <li>
        <label for="event_description"><?php echo lang('event_description'); ?>:</label>
        <?php
            $val = (isset($data['description'])) ? $data['description'] : '';
            load_editor('description', htmlspecialchars_decode($val));
        ?> 
        <?php echo (isset($errors['description'])) ? generate_error_message($errors['description']) : ''; ?>
    </li>
    <?php if (!isset($errors['image']) && isset($data)) { ?>
        <li style="margin-left: 154px;">
            <input type="hidden" name="image" value="<?php echo $data['image']; ?>" >
            <img style="width: 100px;" src="<?php echo static_url() . 'files/events/' . $data['image']; ?>" />
        </li>
    <?php } ?>
    <li>
        <label for="event_image"><?php echo lang('event_image'); ?>:</label>
        <input type="file" name="userfile" id="event_image" /> Dim.: 270px * 176px
        <?php echo (isset($errors['image'])) ? generate_error_message(strip_tags($errors['image'])) : ''; ?>
    </li>
    <li>
        <label for="set_in_homepage"><?php echo lang('event_set_in_homepage'); ?>:</label>
        <input type="checkbox" <?php echo (isset($data['set_in_homepage'])) ? 'checked="checked"' : ''; ?> name="set_in_homepage" id="set_in_homepage" class="chkbox" />
    </li>
    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn; ?>" class="form-submit-btn" />  
        <a href="<?php echo base_url(); ?>admin/event"><?php echo lang('event_cancel'); ?></a>
    </li>
</ul>
<?php echo form_close(); ?>
