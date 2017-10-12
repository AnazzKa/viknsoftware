


<section id="main-content">
    <section class="wrapper">
        
        <div class="row">
            <div class="col-lg-12">
                <?php foreach ($allcards as $row) { ?>
                <div class="col-lg-3">
                    <img src="<?php echo base_url; ?>./assets/card/<?php echo $row->card_image; ?>" width="100%" height="100%">
                </div>
                <?php } ?>
            </div>
        </div>



    </section>
</section>


