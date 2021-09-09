<?php
if(isset($_POST['baixar'])){ //Esse isset diz que apenas se o botão Baixar for clicado que as informações serão retornadas na tela.
$link_video = $_POST['link'];

//Esse explode faz o link separar o URL do youtube da ID do vídeo.
$saida = explode('=', $link_video);

$id_video = $saida[1];

$video_max = "https://img.youtube.com/vi/$id_video/maxresdefault.jpg";
$video_mid = "https://img.youtube.com/vi/$id_video/sddefault.jpg";
$video_min = "https://img.youtube.com/vi/$id_video/hqdefault.jpg";
$saida = simplexml_load_file("https://www.youtube.com/oembed?url=".$link_video."&format=xml");

copy($video_max, "maxsizedthumb.png");
copy($video_mid, "midsizedthumb.png");
copy($video_min, "minsizedthumb.png");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/styles.css" rel="stylesheet">
    <title>Thumbnail Download</title>
</head>
<body>

    <h1>Baixe aqui qualquer Thumbnail do Youtube:</h1>

    <form method="POST" action="">
        <input type="text" name="link" id="link" placeholder="Ex.: https://www.youtube.com/watch?v=YjMXvn-Ky6o" required>
        <input type="submit" name="baixar" id="baixar" value="Baixar">
    </form><br><br>

    <?php if(isset($_POST['baixar'])){ ?>
    <h2> Título: <?php echo "$saida->title"?></h2>

    <div class="container-thumbs">
        <?php echo "<p><img src='".$video_max."'></p>" ?>
            <a href="maxsizedthumb.png" download>Baixar</a>

        <?php echo "<p><img src='".$video_mid."'></p>" ?>
            <a href="midsizedthumb.png" download>Baixar</a>

        <?php echo "<p><img src='".$video_min."'></p>" ?>
            <a href="minsizedthumb.png" download>Baixar</a>
    </div>

    <?php } ?>
</body>
</html>