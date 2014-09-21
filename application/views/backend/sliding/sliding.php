<?php echo form_open_multipart($post_url); ?>
<ul id="form_list">
    <li>
        <label for="client_logo"><?php echo lang('client_logo'); ?></label>
        <input type="file" name="userfile" id="client_logo" /> Width: 173px;
    </li>
    <li>
        <label for="logo_is_active"><?php echo lang('logo_is_active'); ?>:</label>
        <input type="checkbox" <?php echo (isset($data['active_flag']) && $data['active_flag']) ? 'checked="checked"' : ''; ?> name="is_active" id="logo_is_active" class="chkbox" />
    </li>

    <li>
        <input type="submit" name="submit" value="<?php echo lang('client_add'); ?>" class="form-submit-btn" />  
        <a href="<?php echo base_url(); ?>admin/job"><?php echo lang('job_cancel'); ?></a>
    </li>
</ul>
<?php echo form_close(); ?>

<script type="text/javascript">
    $(document).ready(function () {
        var group = $("ol.limited_drop_targets").sortable({
            group: 'limited_drop_targets',
            isValidTarget: function (item, container) {
                if (item.is(".highlight"))
                    return true
                else {
                    return item.parent("ol")[0] == container.el[0]
                }
            },
            onDrop: function (item, container, _super) {
                $('#serialize_output').text(group.sortable("serialize").get().join("\n"))
                _super(item, container)
            },
            serialize: function (parent, children, isContainer) {
                return isContainer ? children.join() : parent.text()
            },
            tolerance: 6,
            distance: 10
        })
    });
</script>

<style type="text/css">
    #clients{
        margin-top: 60px;
    }
    .limited_drop_targets{
        cursor: move;
    }
</style>
<div id="clients">
    <?php echo form_open($submit_url); ?>
    <ol class="limited_drop_targets vertical">
        <?php
        $i = 0;
        foreach ($clients as $client) {
            $style = '';
            if ($i != 0 && $i % 2 == 0) {
                $style = ' highlight';
            }
            ?>
            <li class="logos-box<?php echo $style; ?>">
                <input type="hidden" name="order_flag[]" value="<?php echo $client['id']; ?>" />
                <?php if ($client['is_active']) { ?>
                <a class="active-inactive-link" href="<?php echo base_url() . 'admin/home/change_status/' . $client['id'] . '/' . $banner_page; ?>"><img title="Active Job" src="<?php echo static_url(); ?>layout/images/active.png" /></a>
                <?php } else { ?>
                    <a class="active-inactive-link" href="<?php echo base_url() . 'admin/home/change_status/' . $client['id'] . '/' . $banner_page; ?>"><img title="Inactive Job" src="<?php echo static_url(); ?>layout/images/inactive.png" /></a>
                <?php } ?>
                <a href="<?php echo base_url(); ?>admin/home/delete_logo/<?php echo $client['id']; ?>" class="delete_logo">Delete</a>
                <img src="<?php echo base_url(); ?>files/banners/<?php echo $client['file_name']; ?>" style="max-width: 210px;" />
            </li>
            <?php
            $i++;
        }
        ?>
    </ol>
    <input type="submit" name="submit" value="<?php echo lang('items_order'); ?>" class="items-order-btn" />
<?php echo form_close(); ?>
</div>