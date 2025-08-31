<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-6 card border-warning bg-dark py-5">

            <div class="text-center">
                <i class="fa-solid fa-exclamation-triangle fa-5x text-warning"></i>
            </div>

            <h4 class="my-5 text-center">Deseja remover o pedido?</h4>


            <div class="d-flex justify-content-center text-white diplay-6 mb-5 p-3">

                <div class="bg-warning text-black text-center rounded-3 px-3 me-5">
                    <strong>Pedido #<?= lead_zeros($order['order_number'], 3) ?> </strong>
                </div>

                <div class="me-5"><?= format_currency($order['total_price']) ?></div>
                <div class="me-5"><small><?= $order['order_date'] ?></small></div>

            </div>


            <div class="d-flex justify-content-center gap-3 mb-5">
                <a href="<?=site_url('/')?>" class="btn btn-outline-danger px-5 mx-3"><i class="fa-solid fa-times me-3"></i><h3>Não</h3></a>
                <a href="<?= site_url('/delete_order_confirm/' . Encrypt($order['id'])) ?>" class="btn btn-outline-success px-5 mx-3"><i class="fa-solid fa-check me-3"></i><h3>Sim</h3></a>
            </div>

        </div>
    </div>
</div>

<?= $this->endsection() ?>