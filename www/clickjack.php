<?php
include('header.php');
?>
<h1>Scroll naar beneden</h1>
<img src="http://www.dumpaday.com/wp-content/uploads/2013/06/funny-cat-in-a-bag-dumpaday1.jpg" style="position: absolute">
<div style="width: 800px; height: 2600px; position: relative;">
    <div style="position: absolute;
    top: 1387px;
    left: 350px;">
    <h1>
    Meer plaatjes? <u>Klik hier</u>
    </h1>
    </div>

    <iframe src="https://office.byte.nl/klant/index.cgi?klant_id=31993" style="width: 800px; height: 2600px; opacity: 0.0; position: absolute; left: 0; top: 0"></iframe>

</div>
<div style="position: fixed; right: 0; top: 0; background: gold" id="opacity">
Pas opacity aan
</div>
<script>

function init() {
    var opacity = 0;
    $('#opacity').click(function () {
        opacity = (opacity + 0.4) % 1.2;
        console.log('banana', opacity);
        $('iframe').css('opacity', opacity);
    });
}

window.addEventListener("load", init);
</script>
<?php
include('footer.php');
?>
