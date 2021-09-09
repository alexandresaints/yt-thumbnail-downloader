<?php

$link_video = $_POST['link'];

$saida = explode('=', $link_video);

$id_video = $saida[1];

$video = "https://img.youtube.com/vi/{$id_video}/maxresdefault.jpg";

echo "<p><img src='".$video."'></p>";


?>