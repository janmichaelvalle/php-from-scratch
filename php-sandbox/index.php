<?php

$fruits = [
    ['Apple', 'Red'],
    ['Orange', 'Orange'],
    ['Banana', 'Yellow']
];

$output = $fruits[0][0];

$users = [
    ['name' => 'John', 'email' => 'john@gmail.com', 'password' => '123456'],
    ['name' => 'Jane', 'email' => 'jane@gmail.com', 'password' => '123456'],
    ['name' => 'Jack', 'email' => 'jack@gmail.com', 'password' => '123456'],
];

$output = $users[1]['email'];


var_dump($output); 


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Hello</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= $fullName ?></h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <p>
                <pre>
                    <?php print_r($users)?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>