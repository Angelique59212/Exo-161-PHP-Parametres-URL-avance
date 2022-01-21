<?php

if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])) {
    echo strip_tags($_GET['dateDebut']). " " . strip_tags($_GET['dateFin']) . "<br>";
}