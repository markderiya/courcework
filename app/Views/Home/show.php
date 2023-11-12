<?= $this->extend("layout/default") ?>

<?= $this->section('content') ?>


    <div style="margin: 10px">
<h1>Користувач</h1>
<p>  <?= $home['id'] ?>| </p>
<p>  <?= $home['name'] ?>| </p>
<p>    <?= $home['surname'] ?>| </p>
<p>    <?= $home['email'] ?>| </p>
<p>    <?= $home['password'] ?>| </p>
</div>
<?= $this->endSection() ?>