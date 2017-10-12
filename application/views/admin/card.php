<section id="main-content">
    <section class="wrapper">

        <div class="col-lg-12">

            <section class="panel">

                <section class="panel">

                    <div class="panel-body">
<form action="<?php echo base_url; ?>card_check" enctype="multipart/form-data" method="post">
                        <div class="tab-content">
                            <!--strt driver-->
                            <div id="home" class="tab-pane active">
                                <div class="form-group" style="padding: 0 0 30px 0;text-align: center;">
                                    <label class="col-sm-4 col-sm-4 control-label"></label>
                                    <label class="col-sm-4 col-sm-4 control-label"
                                           style="color: #0088CC; font-size: 25px;">Card Details</label>
                                    <label class="col-sm-4 col-sm-4 control-label"></label>
                                </div>

                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Card
                                        type<span style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <select type="text" class="form-control" name="card_type">
                                            <?php foreach ($card as $value) { ?>
                                                <option
                                                    value="<?php echo $value->card_id ?>"><?php echo $value->cardtype ?></option>
                                            <?php } ?>
                                        </select>
                                        <input type="hidden" value="" name="editid">
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Card
                                        Name<span style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <input type="text" class="form-control" id="phtypeoto" name="card_name">
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Card Number<span
                                            style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <input type="text" class="form-control" id="phtypeoto" name="card_number">
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Card
                                        Date<span style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <input type="date" class="form-control" id="phtypeoto" name="card_date">
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Card
                                        Price<span style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <input type="text" class="form-control" id="phtypeoto" name="card_price">
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Serial
                                        Key<span style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <input type="text" class="form-control" id="phtypeoto" name="card_key">
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Offer<span
                                            style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <input type="text" class="form-control" id="phtypeoto" name="card_offer">
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">User
                                        Name<span style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <input type="text" class="form-control" id="phtypeoto" name="card_username">
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label"
                                           style="margin-top: 10px;">Password<span style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <input type="text" class="form-control" id="phtypeoto" name="card_password">
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label"
                                           style="margin-top: 10px;">Select Image<span style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <input type="file" class="form-control"  name="photo">
                                    </div>
                                </div>

                            </div>

                            <!--end rto -->
                        </div>
                        <center>
                            <button type="submit" name="submit" class="btn btn-info" style="margin-top: 20px;">SAVE
                            </button>
                        </center>
</form>
                    </div>
                </section>

            </section>

        </div>


    </section>
</section>

</section>
</body>
</html>
