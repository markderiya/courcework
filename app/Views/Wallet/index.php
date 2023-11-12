<?= $this->extend("layout/default") ?>

<?= $this->section('content') ?>





<div style="margin: 2rem">

<h3>Гаманець</h3>

<!-- Отображение списка кошельков -->
<ul>
    <?php foreach ($wallet as $wall): ?>
        <li>
<!--            --><?php //echo $wall['wallet_name']; ?>
            <a href="<?= base_url('category/index' . $wall['id']); ?>">
                <?=$wall['wallet_name']?> </a>
        </li>
    <?php endforeach; ?>
</ul>

<!-- Форма для добавления нового кошелька -->
<h4>Додати гаманець</h4>
<?php echo form_open('/wallet'); ?>
<label for="wallet_name">Назва гаманця:</label>
<input type="text" name="wallet_name" required>

<button type="submit">Додати</button>
<?php echo form_close(); ?>




    <h4>Видалити гаманець</h4>


    <!-- Изменено адрес в форме на '/wallet/delete' для обработки удаления -->
    <label for="wallet_id">Виберіть гаманець для видалення:</label>
    <select name="wallet_id" required>
        <option value="">Виберіть гаманець</option> <!-- Пустой вариант для предотвращения отправки NULL -->
        <?php foreach ($wallet as $wall): ?>
            <option  href="<?= site_url("/wallet/delete/)".$wall['id']) ?>" >
                <?php echo $wall['wallet_name']; ?></option>
        <?php endforeach; ?>
    </select>
    <a href="<?= site_url("/wallet/delete/)".$wall['id']) ?> type="submit">Видалити</a>







    </div>
<?= $this->endSection() ?>

