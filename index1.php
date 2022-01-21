<?php

if(isset($_GET['nom']) && isset($_GET['prenom'])) {
    echo strip_tags($_GET['nom']). " " . strip_tags($_GET['prenom']) . "<br>";
}