<?= $this->extend("layout/default") ?>

<?= $this->section('content') ?>



<!DOCTYPE html>
<html>
<head>
    <title>Pie Chart</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>


<div style="width: 650px; height: 650px; margin: 2rem">
    <h3>Витрати</h3>
    <canvas id="pieChart"></canvas>

    <?php
//     Предположим, что у вас есть $categories и $expenses
    $categories = ['Одяг', 'Подарунки', 'Аптека', 'Тварини', 'Подорожі', 'Їжа', 'Кафе', 'Гастроном'];
    $expenses = [2200, 1300, 180, 1400, 3500, 800, 1330, 6200];
    ?>

    <script>
        var categories = <?= json_encode($categories); ?>//;
        var expenses = <?= json_encode($expenses); ?>;

       var ctx = document.getElementById('pieChart').getContext('2d');
       var pieChart = new Chart(ctx, {
           type: 'doughnut', // Кольцевая диаграмма
           data: {
               labels: categories,
               datasets: [{
                   data: expenses,
                   backgroundColor: [
                       'red',
                       'blue',
                       'green',
                       'yellow',
                       'brown',
                       'orange',
                       'violet',
                       'gray',
                       // Добавьте цвета для каждой категории
                   ]
               }]
           }
       });
    </script>
</div>





</body>
</html>



<?= $this->endSection() ?>

