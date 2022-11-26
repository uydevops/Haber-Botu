<?php
/*

Uğurcan Yaş  

Back-end Developer 



*/

?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

    <?php



    $site = "http://www.cnnturk.com/feed/rss/news";

    $icer = file_get_contents($site);

    $icer = str_replace("media:", "media", $icer);

    $icer = str_replace("dc:", "dc", $icer);

    $icer = str_replace("content:", "content", $icer);

    $icer = str_replace("atom:", "atom", $icer);

    $icer = str_replace("slash:", "slash", $icer);

    $icer = str_replace("wfw:", "wfw", $icer);

    $icer = str_replace("xmlns:", "xmlns", $icer);

    $icer = str_replace("xmlns:", "xmlns", $icer);

    $icer = str_replace("xmlns:", "xmlns", $icer);

    $icer = str_replace("xmlns:", "xmlns", $icer);



    $xml = simplexml_load_string($icer);

    $items = $xml->channel->item;

    foreach ($items as $item) {
    ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Başlık</th>
                    <th scope="col">Açıklama</th>
                    <th scope="col">Resim</th>
                    <th scope="col">Link</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="<?php echo $item->image ?>" width="100" alt=""></td>
                    <td><?php echo $item->title; ?></td>
                    <td><?php echo $item->description; ?></td>
                    <td><a href="<?php echo $item->link; ?>">Link</a></td>
                </tr>
            </tbody>


        <?php } ?>