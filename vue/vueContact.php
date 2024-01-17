<?php
    include "./include/header.html";
?>
<div class="box">
    <div class="containerform">
    <h1>Me contacter</h1>
    <form class ="form" action="#">
        <label for="fname">Nom & prénom</label>
        <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">

        <label for="emailAddress">Email</label>
        <input id="emailAddress" type="email" name="email" placeholder="Votre email">

        <label for="subject">Message</label>
        <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>

        <input type="submit" value="Envoyer">
    </form>
    </div>
</div>

<?php
    include "./include/footer.html";
?>