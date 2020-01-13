<div class="page-title-container">
            <div class="page-title">
                <div class="container">
                    <h1 class="entry-title">Shop Checkout</h1>
                </div>
            </div>
            <ul class="breadcrumbs">
                <li><a href="<?=base_url();?>">Home</a></li>
                <li class="active">Checkout</li>
            </ul>
        </div>

        <section id="content">
            <div class="container">
                <div class="woocommerce">
                        <div class="row">
                            <?php if($this->session->userdata('user_email') == null): ?>
                            <div class="col-sm-6">
                                <div class="woocommerce-billing-fields box">
                                    <h4>Billing Address</h4>
                                    <div class="form-group dropdown">
                                        <select class="selector full-width">
                                            <option value="">Select a Country</option>
                                            <option value="US">United States</option>
                                        </select>
                                    </div>
                                    <div class="form-group column-2 no-column-bottom-margin">
                                        <input class="input-text" placeholder="First name" type="text">
                                        <input class="input-text" placeholder="Last name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="input-text full-width" placeholder="Company name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="input-text full-width" placeholder="Address" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="input-text full-width" placeholder="Appartment, unit, etc. (optional)" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="input-text full-width" placeholder="Town / City" type="text">
                                    </div>
                                    <div class="form-group column-2 no-margin">
                                        <input class="input-text" placeholder="State / County" type="text">
                                        <input class="input-text" placeholder="Zip code" type="text">
                                    </div>
                                    <div class="form-group column-2 no-margin">
                                        <input class="input-text" placeholder="Email address" type="text">
                                        <input class="input-text" placeholder="Phone" type="text">
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <div class="col-sm-6">
                                <h4>Your order</h4>
                                <div id="order_review">
                                    <table class="shop_table box">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-name">Qty</th>
                                                <th class="product-name">Price</th>
                                                <th class="product-total">Subtotal</th>
                                                <th class="product-name">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <th>&nbsp;</th>
                                                <th>&nbsp;</th>
                                                <td><span class="amount" id="totalorder"></span></td>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <form action="<?=base_url('com/checkout/proses_checkout');?>" method="POST">
                                    <div id="payment">
                                        <h4>Payment Method</h4>
                                        <ul class="payment_methods methods box-sm">
                                            <li class="payment_method_bacs">
                                                <label class="radio">
                                                    <input id="payment_method_bacs" class="input-radio" name="payment_method" value="bank transfer" checked="checked" data-order_button_text="" type="radio">
                                                    Direct Bank Transfer
                                                </label>
                                                <div class="payment_box payment_method_bacs"><p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="form-row place-order">
                                            <button id="place_order" class="btn btn-medium style1 pull-right" type="submit">Place Your Order</button>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                </div>
            </div>
        </section>
<script>
$(document).ready(function () {
    get_data_cart();
});

function update_cart(a){
    var data = a.split('_');
    $.ajax({
        type: "post",
        url: "<?=base_url('com/checkout/update_cart');?>",
        data: {
            rowid: data[1],
            qty: data[0]
        },
        dataType: "JSON",
        success: function (response) {
            get_data_cart();
        }
    });
}

function confirmDelete(id){
    if (confirm('Apakah anda yakin?')) {
        var rowid = $('#dl'+id).attr('data-rowid');
        $.get("<?=base_url('com/checkout/hapus/');?>"+rowid, function (response) {
                location.reload();
            },
            "JSON"
        );
    }
}

function get_data_cart(){
    $.getJSON('<?=base_url('com/checkout/get-data-cart');?>', function (response) {
        var data = response.cart;
        $('#totalorder').html('Rp. '+response.total);

        var data_loop = '';
        $.each(data, function (i,v) { 
             data_loop += '<tr class="cart_item"><td class="product_name">'+v.name+'</td><td class="product-quantity"><select onChange="update_cart(this.value);"><option value="'+v.qty+'_'+v.rowid+'">'+v.qty+' Bulan</option><option value="1_'+v.rowid+'">1 Bulan</option><option value="6_'+v.rowid+'">6 Bulan</option><option value="12_'+v.rowid+' ">12 Bulan</option><option value="24_'+v.rowid+'">24 Bulan</option><option value="36_'+v.rowid+'">36 Bulan</option></select></td><td class="product-total"><span class="amount">Rp. '+v.price+'</span></td><td class="product-total"><span class="amount">Rp. '+v.subtotal+'</span></td><td class="product_name"><a href="#." id="dl'+v.id+'" data-rowid="'+v.rowid+'" onClick="confirmDelete('+v.id+');"><li class="fa fa-times"></li></a></td></tr>';
        });
        $('#order_review table tbody').html(data_loop);
    });
}
</script>