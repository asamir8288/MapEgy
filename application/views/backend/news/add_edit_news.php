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
        <label for="news_title"><?php echo lang('news_title');?>:</label>
        <input type="text" value="<?php echo (isset($data['title'])) ? $data['title'] : ''; ?>" name="title" id="news_title" class="txtbox" >
        <?php echo (isset($errors['title'])) ? generate_error_message($errors['title']) : ''; ?>
    </li>
    <li>
        <label for="news_author"><?php echo lang('news_author');?>:</label>
        <input type="text" value="<?php echo (isset($data['author'])) ? $data['author'] : ''; ?>" name="author" id="news_author" class="txtbox" >
        <?php echo (isset($errors['author'])) ? generate_error_message($errors['author']) : ''; ?>
    </li>
    <li>
        <label for="news_description"><?php echo lang('news_description');?>:</label>
        <?php $val = (isset($data['description'])) ? $data['description'] : ''; ?>
        <?php load_editor('description', htmlspecialchars_decode($val)); ?> 
        
        <?php echo (isset($errors['description'])) ? generate_error_message($errors['description']) : ''; ?>
    </li>
    <li>
        <label for="news_teaser"><?php echo lang('news_teaser'); ?>:</label>
        <?php
            $val = (isset($data['teaser'])) ? $data['teaser'] : '';
            
        ?> 
        <textarea class="txtarea" name="teaser" style="width: 350px;height: 100px;"><?php echo $val;?></textarea>
        <?php echo (isset($errors['teaser'])) ? generate_error_message($errors['teaser']) : ''; ?>
    </li>
    <li>
        <label for="datepicker"><?php echo lang('news_date'); ?>:</label>
        <input type="text" value="<?php echo (isset($data['news_date'])) ? $data['news_date'] : ''; ?>" name="news_date" id="datepicker" class="txtbox" >
        <?php echo (isset($errors['news_date'])) ? generate_error_message($errors['news_date']) : ''; ?>
    </li>
    <?php if (!isset($errors['image']) && isset($data)) { ?>
        <li style="margin-left: 154px;">
            <input type="hidden" name="image" value="<?php echo $data['image']; ?>" >
            <img style="width: 100px;height: 65px" src="<?php echo static_url() . 'files/news/' . $data['image']; ?>" />
        </li>
    <?php } ?>
    <li>
        <label for="news_image"><?php echo lang('news_image');?>:</label>
        <input type="file" name="userfile" id="news_image" /> Dim.: 271px * 176px;
        <?php echo (isset($errors['image'])) ? generate_error_message(strip_tags($errors['image'])): ''; ?>
    </li>
    <li>
        <label for="set_in_homepage"><?php echo lang('news_set_in_homepage');?>:</label>
        <input type="checkbox" <?php echo (isset($data['set_in_homepage']) && $data['set_in_homepage']) ? 'checked="checked"' : ''; ?> name="set_in_homepage" id="set_in_homepage" class="chkbox" />
    </li>
    <li>
        <label for="news_url"><?php echo lang('news_url');?>:</label>
        <input type="text" value="<?php echo (isset($data['alias_url'])) ? $data['alias_url'] : ''; ?>" name="alias_url" id="news_url" class="txtbox" >
        <?php echo (isset($errors['alias_url'])) ? generate_error_message($errors['alias_url']) : ''; ?>
    </li>
    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn;?>" class="form-submit-btn" />  
        <a href="<?php echo base_url();?>admin/manage_news"><?php echo lang('news_cancel');?></a>
    </li>
</ul>
<?php echo form_close(); ?>
