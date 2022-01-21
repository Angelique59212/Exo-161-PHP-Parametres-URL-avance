<?php
if (isset($_GET['batiment']) && !empty('batiment') && isset($_GET['salle']) && !empty('salle')) {
    echo strip_tags($_GET['batiment']). " " . strip_tags($_GET['salle']) . "<br>";
}