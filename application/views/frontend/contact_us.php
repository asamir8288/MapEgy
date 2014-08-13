<div class="contact-left">
    <?php echo form_open();?>
    <ul id="contact-form">
        <li>
            <label for="iam">I'm</label>
            <select name="iam" class="txt">
                <option value="">a Customer / interested in a Project / Product</option>
            </select>
        </li>
        <li>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="txt" >
        </li>
        <li>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="txt" >
        </li>
        <li>
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="txt">
        </li>
        <li>
            <label for="company">I'm</label>
            <input type="text" name="company" id="company" class="txt">
        </li>
        <li>
            <label for="function">Function</label>
            <input type="text" name="function" id="function" class="txt" >
        </li>
    </ul>
    <?php echo form_close();?>
</div>


<div style="clear: left;height: 20px;"></div>