<?php include 'inc/variables.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Головна</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png"  href="img/favicon.png">
    <link rel="stylesheet" href="css/style.css"/>
    <script src="js/script.js"></script>
</head>
<body>
<?php include 'inc/header.php'; ?>
<main class="page-main info">
    <p class="title">План студента на семестр</p>
    <table class="page-table">
        <thead>
            <tr>
                <th>Назва дисципліни</th>
                <th>Загальна кількість годин</th>
                <th>Кількість лекційних годин</th>
                <th>Кількість годин практичних занять</th>
                <th>Кількість годин лабораторних занять</th>
                <th>Кількість кредитів ECTS</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>Числові методи і моделювання на ЕОМ</td>
            <td>120</td>
            <td>16</td>
            <td>0</td>
            <td>24</td>
            <td>4</td>
        </tr>
        <tr>
            <td>Електроніка та мікропроцесорна техніка</td>
            <td>150</td>
            <td>12</td>
            <td>0</td>
            <td>38</td>
            <td>5</td>
        </tr>
        <tr>
            <td>Основи Web програмування</td>
            <td>150</td>
            <td>8</td>
            <td>0</td>
            <td>42</td>
            <td>5</td>
        </tr>
        <tr>
            <td>Теорія автоматичного керування</td>
            <td>150</td>
            <td>14</td>
            <td>0</td>
            <td>36</td>
            <td>5</td>
        </tr>
        <tr>
            <td>Автоматизація технологічних процесів</td>
            <td>90</td>
            <td>8</td>
            <td>0</td>
            <td>22</td>
            <td>3</td>
        </tr>
        <tr>
            <td>Системи проектування, ідентифікаці та моделювання</td>
            <td>120</td>
            <td>16</td>
            <td>0</td>
            <td>24</td>
            <td>4</td>
        </tr>
        <tr>
            <td>Правознавство</td>
            <td>90</td>
            <td>18</td>
            <td>18</td>
            <td>0</td>
            <td>3</td>
        </tr>
        </tbody>
    </table>
</main>
<?php include 'inc/footer.php'; ?>
</body>
</html>