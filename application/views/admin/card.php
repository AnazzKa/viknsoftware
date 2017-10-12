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
                                                <option <?php if(isset($data)){ if($data[0]->card_type_id==$value->card_id){echo "selected";} } ?>
                                                    value="<?php echo $value->card_id ?>"><?php echo $value->cardtype ?></option>
                                            <?php } ?>
                                        </select>
                                        <input type="hidden" value="<?php if(isset($edit)){ echo $edit; } ?>" name="editid">
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Card
                                        Name<span style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <input type="text" class="form-control" value="<?php if(isset($data)){ echo $data[0]->card_name; } ?>" id="phtypeoto" name="card_name">
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Card Number<span
                                            style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <input type="text" class="form-control" id="phtypeoto" value="<?php if(isset($data)){ echo $data[0]->cartd_number; } ?>" name="card_number">
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Card
                                        Date<span style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <input type="date" class="form-control" id="phtypeoto" value="<?php if(isset($data)){ echo $data[0]->card_date; } ?>" name="card_date">
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Card
                                        Price<span style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <input type="text" class="form-control" value="<?php if(isset($data)){ echo $data[0]->card_price; } ?>" name="card_price">
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Serial
                                        Key<span style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <input type="text" class="form-control" value="<?php if(isset($data)){ echo $data[0]->card_serial_key; } ?>" name="card_key">
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Offer<span
                                            style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <input type="text" class="form-control" value="<?php if(isset($data)){ echo $data[0]->card_offer; } ?>" name="card_offer">
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">User
                                        Name<span style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <input type="text" class="form-control" value="<?php if(isset($data)){ echo $data[0]->card_username; } ?>" name="card_username">
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 16 0 30px 0">
                                    <label class="col-sm-2 col-sm-2 control-label"
                                           style="margin-top: 10px;">Password<span style="color: red">*</span></label>

                                    <div class="col-sm-10" style="margin-top: 10px;">
                                        <input type="text" class="form-control" required name="card_password">
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
