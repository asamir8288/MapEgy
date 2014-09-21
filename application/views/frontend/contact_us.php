<!--<style>
    #map_canvas {
        width: 100%;
        height: 285px;
    }
</style>-->
<!--<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var mapCanvas = document.getElementById('map_canvas');
        var mapOptions = {
            center: new google.maps.LatLng(52.504118, 13.449374),
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>-->


<style type="text/css">
    #left-contact-us-link{
        display: none;
    }
</style>


<div class="contact-left">
    <?php echo form_open('contact/index'); ?>
    <ul id="contact-form">
        <li>
            <label for="iam">I'm <span class="star">*</span></label>
            <select name="iam" class="select">
                <option value="a Customer / interested in a Project / Product">a Customer / interested in a Project / Product</option>
            </select>
        </li>
        <li>
            <label for="title">Title <span class="star">*</span></label>
            <select name="title" class="select" style="width: 100px;">
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
            </select>
        </li>        
        <li>
            <label for="surname">Surname <span class="star">*</span></label>
            <input type="text" name="surname" id="surname" class="txt" >
        </li>
        <li>
            <label for="given_name">Given Name <span class="star">*</span></label>
            <input type="text" name="given_name" id="given_name" class="txt" >
        </li>
        <li>
            <label for="email">Email <span class="star">*</span></label>
            <input type="text" name="email" id="email" class="txt" >
        </li>
        <li>
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="txt">
        </li>
        <li>
            <label for="company">Company</label>
            <input type="text" name="company" id="company" class="txt">
        </li>
        <li>
            <label for="function">Function</label>
            <input type="text" name="function" id="function" class="txt" >
        </li>
        <li>
            <label for="message">Message <span class="star">*</span></label>
            <textarea name="message" id="message" cols="50" rows="6" class="textarea"></textarea>            
        </li>
        <li>
            <label for="newsletter" style="width: 400px;font-weight: normal;margin-left: 73px;">
                <input type="checkbox" id="newsletter" name="newsletter" />
                I want to sign up for mapegy's newsletter!
            </label>       
        </li>
        <li>
            <?php echo form_submit('submit', ' ', 'class="submit-btn"'); ?>   
        </li>
    </ul>
    <?php echo form_close(); ?>
</div>

<div class="contact-right">
    <div class="contact-right-title">mapegy GmbH</div>
    <div>
        <br />
        Rotherstr. 16 <br />
        10245 Berlin, Germany<br /><br />

        +49 (0)30 430 2212 0<br />
        office@mapegy.com<br />
        <a href="http://www.mapegy.com">http://www.mapegy.com</a><br /><br />

        HRB 140747, AG Berlin-Charlottenburg<br /><br />

        Geschäftsführung: <b>Dr.-Ing. Peter Walde</b><br />

    </div>
</div>



<div style="clear: left;height: 100px;"></div>