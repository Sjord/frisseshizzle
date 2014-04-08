<?php
include('header.php');
?>
<img src="Marvin-ice-cream.jpg">

<p>Type beker/hoorn: <input type="text" name="hoorn"></p>
<p>Smaak 1: <input type="text" name="smaak1"></p>
<p>Smaak 2: <input type="text" name="smaak2"></p>
<p>Toevoeging: <select name="toevoeging">
<option>discodip</option>
<option>nootjes</option>
</select>
<p>Slagroom: <select name="slagroom">
<option>wel</option>
<option>niet</option>
</select>


<h1>Recept</h1>
<ol class="recept">
<li>Pak een <span class="hoorn">&hellip;</span>. 
<li>Doe daar één schep <span class="smaak1">&hellip;</span> in.
<li>Doe er één schep <span class="smaak2">&hellip;</span> bij.
<li>Haal dit door de <span class="toevoeging">&hellip;</span> 
<li>en doe er <span class="slagroom">&hellip;</span> slagroom op.
</ol>

<input type="button" value="Maak ijs" id="maakijs">
<script>

function init() {
    $("#maakijs").click(function () {
        $('.recept span').each(function () {
            var name = $(this).attr('class');
            var input = $('[name='+name+']');
            var val = input.val();
            $(this).text(val);
        });
    });
}
window.addEventListener("load", init);

</script>

<?php
include('footer.php');
?>
