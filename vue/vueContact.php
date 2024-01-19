<?php
    include "./include/header.html";
?>
<div class="box">
    <div class="containerform">
    <h1>Me contacter</h1>
    <form method="POST" class ="form">
        <label for="fname">Nom & prénom</label>
        <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom" required>

        <label for="emailAddress">Email</label>
        <input id="emailAddress" type="email" name="email" placeholder="Votre email" required>

        <label for="subject">Message</label>
        <textarea id="message" name="message" placeholder="Votre message" style="height:200px" required></textarea>

        <input type="submit" value="Envoyer">
    </form>
    </div>
</div>
<?php
    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: webmaster@truonganluc.com' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('truongan.luc@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    include "./include/footer.html";
?>