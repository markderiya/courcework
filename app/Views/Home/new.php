<?= $this->extend("layout/default") ?>

<?= $this->section('content') ?>


<?= form_open('/') ?>

<div style="margin: 2rem">
    <div style="margin-bottom: 3rem">
        <h3>Додати користувача</h3>
    </div>
    <form>
        <div class="form-group row mb-3">
            <label for="Firstname" class="col-sm-2 col-form-label">Ім'я</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="Firstname" placeholder="Введіть ім'я" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="Surname" class="col-sm-2 col-form-label">Прізвище</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="surname" id="Surname" placeholder="Введіть прізвище" required>
            </div>
        </div>


        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Введіть Email" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Пароль</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Введіть пароль" required>
            </div>
        </div>


        <div class="form-group row">
            <div class="col-sm-10">
                <button class="btn btn-outline-secondary" type="submit">Додати</button>
            </div>
        </div>
    </form>
</div>



<?= form_close() ?>

<?= $this->endSection() ?>
