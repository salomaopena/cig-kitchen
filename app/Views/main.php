<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid mt-5">

    <div class="row">

        <?php if (count($orders) == 0): ?>
            <div class="col-12 text-center">
                <p class="display-4 opacity-25 my-5">
                    Não há pedidos pendentes.
                </p>
                <a href="<?= site_url('/') ?>" class="btn btn-outline-warning p-5 mx-5">
                    <h3><i class="fa-solid fa-sync-alt fa-2xl me-2"></i>
                        Ver pedidos
                    </h3>
                </a>
            </div>
        <?php else: ?>
            <div class="row">
                <?php foreach ($orders as $order): ?>
                    <?= view('order_card',['order'=>$order])?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</div>
<?= $this->endSection() ?>