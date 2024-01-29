<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>My PHP Practice</title>
</head>
<body>
    <div class="flex_container">
        <div class="header">
                <?php include 'logo.inc.php' ?>
                <?php include 'menu.inc.php' ?>
        </div>
        <div class="about_me">
            <h1 class="title"><?php echo $p ?></h1>

            <div class="data">
                <div class="image">
                    <?php echo '<img src="/img/whoiam.jpg">'; ?>
                </div>
                <div class="full_name">
                    <p>Меня зовут:
                    <?php echo $name, ' ', $surname . '<br>'; ?>
                    </p>
                    <p>Место изучения тайн и секретных техник информационной безопасности:
                     <?php echo $city; ?>
                    </p>
                    <p>
                        Возраст: 
                        <?php echo $age; ?> 
                    </p>
                    <p>Были изучены переменные</p>
                    <p>А так же простые операции с ними</p>
                </div>
            </div>

            <div class="knowledge">
                <?php include 'knowledge.inc.php'; ?>
                <?php
                echo $a, ' ', $b, ' ', $c;
                ?> <br>
                <?php
                    $a = 10;
                    $b = 20;
                    $c = $a + $b;
                    echo $c
                ?> <br>
                <?php
                    echo $d;
                ?>
            </div>
            <div class="summary">
                <p class="text">В данный момент изучается тема веб-разработки. Затрагиваются такие темы как HTML5, CSS3, JavaScript и PHP</p>
            </div>
        </div>
        <?php include 'footer.inc.php' ?>
    </div>
</body>
</html>
