<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">


        <a class="navbar-brand "> <img alt="Brand" class="img-fluid img-thumbnail" style="width: 3rem; height: auto;" src="./Pictures/financ.jpg"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=" <?=site_url('/') ?>" >  Вхід</a>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link active" aria-current="page" href=" --><?php //=site_url('/new') ?><!--"> Користувач</a>-->
<!--                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href=" <?=site_url('/wallet') ?>">Гаманець</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href=" <?=site_url('/category') ?>">Кошти</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=" <?=site_url('/chart') ?>">Графік</a>
                </li>

<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                        Валюта-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a class="dropdown-item" href="#">UAH</a></li>-->
<!--                        <li><hr class="dropdown-divider"></li>-->
<!--                        <li><a class="dropdown-item" href="#">USD</a></li>-->
<!--                        <li><a class="dropdown-item" href="#">EUR</a></li>-->
<!--                    </ul>-->
<!--                </li>-->

<!--                <li class="nav-item">-->
<!--                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>-->
<!--                </li>-->
            </ul>

            <button class="btn btn-outline-secondary m-1" href="#" type="submit">UAH</button>
            <button class="btn btn-outline-secondary m-1" href="#" type="submit">USD</button>
            <button class="btn btn-outline-secondary m-1" href="#" type="submit">EUR</button>


        </div>
    </div>
</nav>
