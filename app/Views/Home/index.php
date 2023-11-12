<?= $this->extend("layout/default") ?>

<?= $this->section('content') ?>
<h1>Главная страница </h1>

<ul>
    <?php foreach ($home as $home): ?>
        <li>
            <a href="<?= site_url("/user/" . $home['id'] )?>">
                <?= $home['id'] ?>| </a>
            <?= $home['name'] ?>|
            <?= $home['surname'] ?>|
            <?= $home['email'] ?>|
            <?= $home['password'] ?>|
        </li>
    <?php endforeach; ?>
</ul>


<?= $this->endSection() ?>





