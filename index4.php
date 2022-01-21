<?php
if (isset($_GET['langage']) && isset($_GET['serveur'])) {
    echo strip_tags($_GET['langage']). " " . strip_tags($_GET['serveur']) . "<br>";
}