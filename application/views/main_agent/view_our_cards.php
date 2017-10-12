<section id="main-content">
    <section class="wrapper">
        <strong> <?php echo $this->session->userdata("msg") ?> </strong>
        <div class="row">
            <div  class="col-lg-12">
                    <select name="" class="form-control">
                        <option>All</option>
                        <option>Net Card</option>
                        <option>Reseller Card</option>
                        <option>Top Up</option>
                    </select>
            </div>


            <div style="padding-top: 10px" class="col-lg-12">
                <?php foreach ($allcards as $row) { ?>
                    <div class="col-lg-3">
                        <img onclick="purchase_cards('<?php echo $row->cards_id; ?>','<?php echo $row->cardtype; ?>','<?php echo $row->card_name; ?>','<?php echo $row->cartd_number; ?>','<?php echo $row->card_date; ?>','<?php echo $row->card_price; ?>');"
                             src="<?php echo base_url; ?>./assets/card/<?php echo $row->card_image; ?>" width="100%"
                             height="100%">
                    </div>
                <?php } ?>
            </div>
        </div>


        <!--      model  -->
        <div class="modal">
            <div class="modal-dialog">

                <!-- Modal content-->
                <form action="<?php echo base_url ?>purchase_card">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" onclick="purchase_card_close()">&times;</button>
                            <h4 class="modal-title">Purchase Cards</h4>
                        </div>
                        <div class="modal-body">
                            <p>Card Type :  <label id="card_type"></label>   </p>
                            <p>Name :  <label id="name"></label></p>
                            <p>Number : <label id="number"></label></p>
                            <p> Date : <label id="date"></label></p>
                            <p>Price : <label id="price"></label></p>
                            <input type="text" class="form-control" onkeyup="get_total(this.value);" id="quantity" name="quantity">

                            <input type="hidden" id="card_id" name="card_id">
                            <input type="hidden" id="hi_price" name="price">
                            <input type="hidden" id="hi_total" name="total">

                        </div>
                        <div class="modal-footer">
                            <label><b> Total :</b> <b id="total"></b></label>
                            <br>
                            <button type="submit" class="btn btn-info">Purchase</button>
                            <button type="button" class="btn btn-default" onclick="purchase_card_close()">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!--        model-->

    </section>
</section>


<script>
    function purchase_cards($id,$card_type,$name,$number,$date,$price)
    {
        $('.modal').show();
$('#card_type').text($card_type);
$('#name').text($name);
$('#number').text($number);
$('#date').text($date);
$('#price').text($price);
$('#hi_price').val($price);

        $('#total').text('');
        $('#hi_total').text('');
        $('#quantity').val('');
        $('#card_id').val($id);
//        $.ajax({
//            type: "POST",
//            url: "./ajax/add_cart.php",
//            async: false,
//            data: {},
//            success: function (response) {
////                alert(response);
//                $('#example').append(response);
//
//            }
//        });
    }

    function purchase_card_close()
    {
        $('.modal').hide();
    }
    function get_total($qty)
    {
        var price= $('#price').text();
        $('#total').text($qty*price)
        $('#hi_total').val($qty*price)

    }
</script>