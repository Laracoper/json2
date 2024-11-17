<?

require '../conn.php';

// $content = json_decode(file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=kazan&appid=61e8d62545fba79c747c73b5ea1339bb&lang=ru'), true);

// $content2 = json_decode(file_get_contents('https://api.openweathermap.org/data/2.5/forecast?q=kazan&appid=61e8d62545fba79c747c73b5ea1339bb&lang=ru'), true);

$content = json_decode(file_get_contents('../data/data.json'), true);

// $stmt = $pdo->prepare("select * from data");
// $stmt->execute();
// $content = $stmt->fetch(PDO::FETCH_ASSOC);


// if (!empty($content)) {
//     // echo '<pre>';
//     // print_r($content);
//     // echo '</pre>';
//     foreach ($content as $k => $v) {
//         if ($v) {
//             $v = json_decode($v, true);
//             echo '<pre>';
//             print_r($v);
//             echo '</pre>';
//         }
//     }
// }

// echo '<pre>';
// print_r($content2);
// echo '</pre>';


// foreach ($content2 as $k) {
//     echo '<pre>';
//     print_r($k);
//     echo '</pre>';
// }


foreach ($content as $el) {
    echo '<pre>';
    print_r($el);
    echo '</pre>';
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>погода</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <header></header>
    <main class="container">
        <h1 class="my-5 text-bg-primary">data</h1>
        <? if (!empty($content)) { ?>
            <div class="cards d-flex flex-wrap gap-2 justify-content-between">
                <? foreach ($content as $el) { ?>
                    <div class="card text-bg-secondary" style="width: 18rem;">
                      
                        <div class="card-body">
                            <h5 class="card-title"><span class="text-warning">уникальный номер:</span> <?=$el['id']?></h5>
                            <p class="card-text"><span class="text-warning">имя:</span> <?=$el['name']?></p>
                            <p class="card-text"><span class="text-warning">город:</span> <?=$el['address']['city']?></p>
                            <p class="card-text"><span class="text-warning">улица:</span> <?=$el['address']['street']?></p>
                        </div>
                    </div>
                <? } ?>
            </div>
        <? } ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>