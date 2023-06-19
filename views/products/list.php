<?php
use yii\helpers\Html;

?>

<div class="row" id="product-container">
    <?= $this->render('_list', ['dataProvider' => $dataProvider]); ?>
</div>

<?= Html::button('Load More', ['id' => 'load-more-button', 'class' => 'btn btn-primary btn-round w-25 mb-5', 'style' => 'margin-left: 35%;']) ?>

<script type="text/javascript">
    var offset = 10; // The initial offset for fetching products
    var limit = 9; // The number of products to fetch per request

    $('#load-more-button').on('click', function() {
        loadproducts();
    });

    function loadproducts() {
        $.ajax({
            url: '/products/list',
            type: 'GET',
            data: {
                offset: offset,
                limit: limit
            },
            success: function(response) {
                if ($.trim(response).length > 0) {
                    $('#product-container').append(response);
                    offset += limit; // Increment the offset for the next request
                } else {
                    $('#load-more-button').prop('disabled', true).text('No more products'); // Disable the button if no more products
                }
            }
        });
    }
</script>