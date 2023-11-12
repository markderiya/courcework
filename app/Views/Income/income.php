<?= $this->extend("layout/default") ?>

<?= $this->section('content') ?>



<div class="container mt-5">


    <table class="table">
        <thead>
        <tr>
            <th>№</th>
            <th>Доход</th>
            <th>Сумма</th>
            <th>Ввод</th>
            <th>Удалити категорію</th>
        </tr>
        </thead>
        <tbody>


        <?= form_open('/expense') ?>

        <?php
        // Подключение к базе данных
        $mysqli = new mysqli("localhost", "root", "root", "financedb");
        // Проверка соединения
        if ($mysqli->connect_error) {
            die("Ошибка подключения: " . $mysqli->connect_error);
        }
        // Выполнение запроса к базе данных
        $result = $mysqli->query("SELECT * FROM category");

        // Вывод данных в таблицу
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name_cat']}</td>";
            echo "<td><input type='number' name='quantity' class='money-input' placeholder='Введите сумму'></td>";
            echo "<td><input type='date' id='start' name='trip-start' value='date('Y-m-d');' min='2018-01-01' max='2050-12-31' /></td>";
            echo "<td><button class='btn btn-secondary' name='add' onclick='addCategory()'>Додати</button></td>";
//            echo "<td><button class='btn btn-secondary' onclick='addCategory()'>Видалити</button></td>";
            echo "</tr>";

        }
        // Закрытие соединения с базой данных
        $mysqli->close();
        ?>
        <?= form_close() ?>


        <?= form_open('/category') ?>
        <tr>
            <td></td>
            <td><input name='name_cat' type="text" id="newCategoryName" placeholder="Введите наименование"></td>
            <td><button class="btn btn-secondary"  onclick="addCategory()">Додати</button></td>
            <td></td>
        </tr>
        <?= form_close() ?>

        </tbody>
    </table>
</div>



<!--<script>-->
<!--    function addCategory() {-->
<!--        // Получение данных из формы-->
<!--        var categoryName = $("#newCategoryName").val();-->
<!--        var moneySpent = $("#newMoneySpent").val();-->
<!---->
<!--        // AJAX запрос для добавления новой категории в базу данных-->
<!--        $.post("add_category.php", { name: categoryName, money_spent: moneySpent }, function(data) {-->
<!--            // Обновление таблицы после успешного добавления-->
<!--            location.reload();-->
<!--        });-->
<!--    }-->
<!--</script>-->



<div class="container mt-5">


    <table class="table">
        <thead>
        <tr>
            <th>№</th>
            <th>Доход</th>
            <th>Сумма</th>
            <th>Ввод</th>
            <th>Удалити категорію</th>
        </tr>
        </thead>
        <tbody>


        <?= form_open('/expense') ?>

        <?php
        // Подключение к базе данных
        $mysqli = new mysqli("localhost", "root", "root", "financedb");
        // Проверка соединения
        if ($mysqli->connect_error) {
            die("Ошибка подключения: " . $mysqli->connect_error);
        }
        // Выполнение запроса к базе данных
        $result = $mysqli->query("SELECT * FROM category");

        // Вывод данных в таблицу
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name_cat']}</td>";
            echo "<td><input type='number' name='quantity' class='money-input' placeholder='Введите сумму'></td>";
            echo "<td><input type='date' id='start' name='trip-start' value='date('Y-m-d');' min='2018-01-01' max='2050-12-31' /></td>";
            echo "<td><button class='btn btn-secondary' name='add' onclick='addCategory()'>Додати</button></td>";
//            echo "<td><button class='btn btn-secondary' onclick='addCategory()'>Видалити</button></td>";
            echo "</tr>";

        }
        // Закрытие соединения с базой данных
        $mysqli->close();
        ?>
        <?= form_close() ?>


        <?= form_open('/category') ?>
        <tr>
            <td></td>
            <td><input name='name_cat' type="text" id="newCategoryName" placeholder="Введите наименование"></td>
            <td><button class="btn btn-secondary"  onclick="addCategory()">Додати</button></td>
            <td></td>
        </tr>
        <?= form_close() ?>

        </tbody>
    </table>
</div>



<!--<script>-->
<!--    function addCategory() {-->
<!--        // Получение данных из формы-->
<!--        var categoryName = $("#newCategoryName").val();-->
<!--        var moneySpent = $("#newMoneySpent").val();-->
<!---->
<!--        // AJAX запрос для добавления новой категории в базу данных-->
<!--        $.post("add_category.php", { name: categoryName, money_spent: moneySpent }, function(data) {-->
<!--            // Обновление таблицы после успешного добавления-->
<!--            location.reload();-->
<!--        });-->
<!--    }-->
<!--</script>-->




<?= $this->endSection() ?>
