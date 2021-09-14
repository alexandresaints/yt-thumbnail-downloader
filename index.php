<<<<<<< HEAD
<?php
if(isset($_POST['baixar'])){ //Esse isset diz que apenas se o botão Baixar for clicado que as informações serão retornadas na tela.
$link_video = $_POST['link'];

//Esse explode faz o link separar o URL do youtube da ID do vídeo.
$saida = explode('=', $link_video);
$count = count($saida);

//Esse if diz o seguinte: Se o array tiver exatamente 2 de lenght, a saída do video irá mudar para a explode '='
if($count == 2){
$id_video = $saida[1];

//Se tiver o link .be, ira mudar para essa extensão!
} else{
    $saida = explode('.be/', $link_video);
    $id_video = $saida[1];
}

//Formatos de imagens com o id do vídeo colocado no input.
$video_max = "https://img.youtube.com/vi/$id_video/maxresdefault.jpg";
$video_mid = "https://img.youtube.com/vi/$id_video/sddefault.jpg";
$video_min = "https://img.youtube.com/vi/$id_video/hqdefault.jpg";
$saida = simplexml_load_file("https://www.youtube.com/oembed?url=".$link_video."&format=xml");

//Para baixar.
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
    <link href="./styles/media.css" rel="stylesheet">
    <link rel="shortcut icon" href="./images/favcon.png">
    <title>Baixe qualquer thumbnail do Youtube | Thumbnail Downloader</title>
</head>
<body>

    <h1>Baixe aqui qualquer <span>miniatura de vídeo</span> do Youtube.</h1>

    <form method="POST" action="">
        <input type="text" name="link" id="link" placeholder="Ex.: https://youtu.be/pYP7OGTdYY8" required>
        <input type="submit" name="baixar" id="baixar" value="Obter thumbnail">
    </form><br><br>

    <?php if(isset($_POST['baixar'])){ ?>
    <h2><span>TÍTULO DO VÍDEO:</span><br> <?php echo "$saida->title"?></h2>

    <div class="container-thumbs">
        <?php echo "<p><img src='".$video_max."'></p>" ?><br>
            <a class="btn" href="maxsizedthumb.png" download>Baixar (1280 x 720)</a><br><br>

        <?php echo "<p><img id='imgtwo' src='".$video_mid."'></p>" ?><br>
            <a class="btn" href="midsizedthumb.png" download>Baixar (640 x 420)</a><br><br>

        <?php echo "<p><img id='imgthree' src='".$video_min."'></p>" ?><br>
            <a class="btn" href="minsizedthumb.png" download>Baixar (480 x 360)</a><br><br><br>
    </div>
    <h4><span>AUTOR DO VÍDEO:</span><br> <?php echo "$saida->author_name"?></h4>
    <?php } ?><br>
    <hr>
<div id="content">
    <div class="c-info"><br>
        <h2 id="c-title">Recursos de download de miniaturas do YouTube:<h2>
        <p id="c-text">
            O download de miniaturas do YouTube é um bom parceiro dos criadores do YouTube. Possui principalmente os seguintes recursos:<br><br>
            <b>Extraia facilmente as miniaturas do YouTube on-line</b><br>
            O downloader de miniaturas do YouTube funciona como um extrator. Quando você coloca links de vídeo na caixa de pesquisa, ele extrai as imagens em miniatura on-line imediatamente, sem a necessidade de baixar o vídeo primeiro.<br><br>
            <b>Encontre e visualize miniaturas em HD rapidamente</b><br>
            Somente miniaturas pequenas e de baixa resolução são exibidas na página inicial do YouTube, na página do canal e na página de resultados de pesquisa. Se você quiser ver as miniaturas em HD, procure o código-fonte da página. Mas com o download de miniaturas do YouTube, você só precisa conhecer o link do vídeo para visualizar as miniaturas em HD rapidamente.<br><br>
            <b>Obter links de imagem em miniatura de vídeo do youtube</b><br>
            Depois de inserir o link do vídeo no downloader, você receberá imediatamente a miniatura do vídeo. Clique no link da imagem para ver o URL da miniatura na barra de endereços do navegador.<br><br>
            <b>Salvar miniaturas no seu dispositivo</b><br>
            Depois de pegar a miniatura com o link do vídeo, você pode clicar na imagem para fazer o download e salvar a miniatura.<br>
        </p>
    </div>
    <div class="c-info"><br>
        <h2 id="c-title">Como baixar suas thumbnails do Youtube?<h2>
        <p id="c-text">
            É fácil pegar a miniatura do YouTube usando nosso downloader de miniaturas.<br><br>

            1. Copie e cole o URL do vídeo na caixa de pesquisa acima.<br><br>

            2. O YT thumbnail Downloader pega automaticamente três tamanhos diferentes de miniaturas.<br><br>

            3. Selecione uma miniatura para fazer o download. Recomendamos o download de miniaturas em HD.<br>
        </p>
    </div>
    <div class="c-info"><br>
        <h2 id="c-title">O que é a miniatura do YouTube?<h2>
        <p id="c-text">A miniatura do YouTube é a imagem da capa do vídeo que fornece uma visualização do vídeo. Existem dois tipos de miniatura do YouTube: gerados automaticamente pelo YouTube e enviados pelo criador. As miniaturas enviadas pelos criadores também são chamadas de miniaturas personalizadas. Independentemente do tipo de miniatura, seu URL está oculto, você não encontra o link da miniatura no YouTube e não pode salvá-lo.</p>
    </div>
</div>
    

    <footer>
        <div id="f-ctn">
            <p>Alexandre Saints ©</p>
            <ul>
                <li><a href="https://github.com/alexandresaints" target="_blank"><img class="icons" src="./images/github-short.png"></a></li>
                <li><a href="https://www.linkedin.com/in/alexandresaints/" target="_blank"><img class="icons" src="./images/linkedin-short.png"></a></li>
            </ul>
        </div>
    </footer>
</body>
=======
<?php
if(isset($_POST['baixar'])){ //Esse isset diz que apenas se o botão Baixar for clicado que as informações serão retornadas na tela.
$link_video = $_POST['link'];

//Esse explode faz o link separar o URL do youtube da ID do vídeo.
$saida = explode('=', $link_video);
$count = count($saida);

//Esse if diz o seguinte: Se o array tiver exatamente 2 de lenght, a saída do video irá mudar para a explode '='
if($count == 2){
$id_video = $saida[1];

//Se tiver o link .be, ira mudar para essa extensão!
} else{
    $saida = explode('.be/', $link_video);
    $id_video = $saida[1];
}

//Formatos de imagens com o id do vídeo colocado no input.
$video_max = "https://img.youtube.com/vi/$id_video/maxresdefault.jpg";
$video_mid = "https://img.youtube.com/vi/$id_video/sddefault.jpg";
$video_min = "https://img.youtube.com/vi/$id_video/hqdefault.jpg";
$saida = simplexml_load_file("https://www.youtube.com/oembed?url=".$link_video."&format=xml");

//Para baixar.
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
    <link href="./styles/media.css" rel="stylesheet">
    <title>Thumbnail Download</title>
</head>
<body>

    <h1>Baixe aqui qualquer Thumbnail do Youtube:</h1>

    <form method="POST" action="">
        <input type="text" name="link" id="link" placeholder="Ex.: https://youtu.be/pYP7OGTdYY8" required>
        <input type="submit" name="baixar" id="baixar" value="Obter thumbnail">
    </form><br><br>

    <?php if(isset($_POST['baixar'])){ ?>
    <h2> <span>TÍTULO DO VÍDEO:</span><br> <?php echo "$saida->title"?></h2>

    <div class="container-thumbs">
        <?php echo "<p><img src='".$video_max."'></p>" ?><br>
            <a class="btn" href="maxsizedthumb.png" download>Baixar (1280 x 720)</a><br><br>

        <?php echo "<p><img id='imgtwo' src='".$video_mid."'></p>" ?><br>
            <a class="btn" href="midsizedthumb.png" download>Baixar (640 x 420)</a><br><br>

        <?php echo "<p><img id='imgthree' src='".$video_min."'></p>" ?><br>
            <a class="btn" href="minsizedthumb.png" download>Baixar (480 x 360)</a><br><br><br>
    </div>

    <?php } ?><br>

<div id="content">
    <div class="c-info"><br>
        <h2 id="c-title">Recursos de download de miniaturas do YouTube:<h2>
        <p id="c-text">
            O download de miniaturas do YouTube é um bom parceiro dos criadores do YouTube. Possui principalmente os seguintes recursos:<br><br>
            <b>Extraia facilmente as miniaturas do YouTube on-line</b><br>
            O downloader de miniaturas do YouTube funciona como um extrator. Quando você coloca links de vídeo na caixa de pesquisa, ele extrai as imagens em miniatura on-line imediatamente, sem a necessidade de baixar o vídeo primeiro.<br><br>
            <b>Encontre e visualize miniaturas em HD rapidamente</b><br>
            Somente miniaturas pequenas e de baixa resolução são exibidas na página inicial do YouTube, na página do canal e na página de resultados de pesquisa. Se você quiser ver as miniaturas em HD, procure o código-fonte da página. Mas com o download de miniaturas do YouTube, você só precisa conhecer o link do vídeo para visualizar as miniaturas em HD rapidamente.<br><br>
            <b>Obter links de imagem em miniatura de vídeo do youtube</b><br>
            Depois de inserir o link do vídeo no downloader, você receberá imediatamente a miniatura do vídeo. Clique no link da imagem para ver o URL da miniatura na barra de endereços do navegador.<br><br>
            <b>Salvar miniaturas no seu dispositivo</b><br>
            Depois de pegar a miniatura com o link do vídeo, você pode clicar na imagem para fazer o download e salvar a miniatura.<br>
        </p>
    </div>
    <div class="c-info"><br>
        <h2 id="c-title">Como baixar suas thumbnails do Youtube?<h2>
        <p id="c-text">
            É fácil pegar a miniatura do YouTube usando nosso downloader de miniaturas.<br><br>

            1. Copie e cole o URL do vídeo na caixa de pesquisa acima.<br><br>

            2. O YT thumbnail Downloader pega automaticamente três tamanhos diferentes de miniaturas.<br><br>

            3. Selecione uma miniatura para fazer o download. Recomendamos o download de miniaturas em HD.<br>
        </p>
    </div>
    <div class="c-info"><br>
        <h2 id="c-title">O que é a miniatura do YouTube?<h2>
        <p id="c-text">A miniatura do YouTube é a imagem da capa do vídeo que fornece uma visualização do vídeo. Existem dois tipos de miniatura do YouTube: gerados automaticamente pelo YouTube e enviados pelo criador. As miniaturas enviadas pelos criadores também são chamadas de miniaturas personalizadas. Independentemente do tipo de miniatura, seu URL está oculto, você não encontra o link da miniatura no YouTube e não pode salvá-lo.</p>
    </div>
</div>
    

    <footer>
        <div id="f-ctn">
            <p>Alexandre Saints ©</p>
            <ul>
                <li><a href="https://github.com/alexandresaints" target="_blank"><img class="icons" src="./images/github-short.png"></a></li>
                <li><a href="https://www.linkedin.com/in/alexandresaints/" target="_blank"><img class="icons" src="./images/linkedin-short.png"></a></li>
            </ul>
        </div>
    </footer>
</body>
>>>>>>> cd36ac2c7769a0cdb1dd35d6b3431f2a10469dd8
</html>