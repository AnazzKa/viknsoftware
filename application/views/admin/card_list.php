<section id="main-content">
    <section class="wrapper">



        <div class="col-lg-12">

            <section class="panel">

                <header class="panel-heading">

                    Cards List

                </header>


                <strong> <?php echo $this->session->userdata("msg") ?> </strong>


                <div class="panel-body">
                    <div class="adv-table">
                        <table class="display table table-bordered table-striped" id="example">
                            <thead>

                            <tr>
                                <th>SL ID</th>
                                <th>Card Type</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Date</th>
                                <th>Price</th>
                                <th>Key</th>
                                <th>Offer</th>
                                <th>Username</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            foreach ($cards as $value) {
                                ?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $value->cardtype; ?></td>
                                    <td><img src="./assets/card/<?php echo $value->card_image ?>" width="50" height="50"></td>
                                    <td><?php echo $value->card_name ?></td>
                                    <td><?php echo $value->cartd_number ?></td>
                                    <td><?php echo $value->card_date ?></td>
                                    <td><?php echo $value->card_price ?></td>
                                    <td><?php echo $value->card_serial_key ?></td>
                                    <td><?php echo $value->card_offer ?></td>
                                    <td><?php echo $value->card_username ?></td>

                                    <td>
                                        <a href="<?php echo base_url ?>cardsdelete?cardeleid=<?php echo $value->cards_id ?>"
                                           class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                        <a href="<?php echo base_url ?>cardsedit?cardid=<?php echo $value->cards_id ?>"
                                           class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>
                                </tr>
                            <?php } ?> </tbody>

                        </table>
                    </div>
                </div>
            </section>
        </div>


    </section>

</section>


<!-- </section> -->
</body>
</html>
