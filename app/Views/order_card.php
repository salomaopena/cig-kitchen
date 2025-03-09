<div class="col-6">
    <div class="order-wrapper">

        <div class="order-top-bar"></div>

        <div class="d-flex order-content">

            <!--order number-->

            <div class="order-content-item order-content-number text-center">
                <?= lead_zeros(define_order_number_from_id($order['id']), 3) ?>
            </div>

            <!--order total items-->

            <div class="ms-2 order-content-item order-content-total-items d-flex justify-content-center align-items-center p-2">
                <?= lead_zeros(define_order_number_from_id($order['total_items']), 3) ?> itens
            </div>

            <!--order date time-->

            <div class="ms-2 order-content-item  order-content-date-time  d-flex justify-content-center align-items-center p-2">
                <?= date('d/m/Y H:i', strtotime($order['order_date'])) ?>
            </div>

            <!--delete order-->
            <a href="<#>" class="ms-2 btn btn-danger p-3 px-4">
                <i class="fa-solid fa-trash-alt fa-2x"></i>
            </a>

            <!--handle the order-->
            <a href="<#>" class="ms-2 btn btn-success p-3 px-4">
                <i class="fa-regular fa-hand-point-right fa-2x"></i>
            </a>

        </div>
    </div>
</div>