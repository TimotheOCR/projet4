<?php
session_start();

?>

<section id="reload">
<?php
if(isset($wrong) && $wrong == true): ?>
    <div class="reload">
        <p> Utilisateur inconnu</p>
    </div>
<?php else: ?>
    <div class="reload">
        <p> votre signalement a été pris en compte merci </p>
        <button onclick="history.back()">retour</button>
    </div>
<?php endif ?>
</section>
