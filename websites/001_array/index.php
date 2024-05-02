<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Recoomendations</h1>

    <?php
        $books =
        [
            'name' => 'Project Hail Mary',
            'auther' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'The Martian',
            'auther' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' = 'http://example.com'
        ],
        
        $books = [
            "Do Androids Dream of Electric Sheep?",
            "The Langoliers",
            "Hail Mary"
        ];
    ?>

    <ul>
        <?php foreach ($books as $book) {
            echo "<li>" . $book . "</li>";
        }
        ?> 
    </ul>
    <!-- <ul>
        <li>Do Androids Dream of Electric Sheep?</li>
        <li>The Langoliers</li>
        <li>Hail Mary</li>
    </ul> -->
</body>
</html>