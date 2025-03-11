<div class="body">
    <div class="row">
        <div class="col-md-6">
            <h2 class="card-inside-title">Lokasi Awal</h2>
            <div class="form-group">
                <div class="form-line">
                    <input type="text" class="form-control" name="latitude_awal" value="<?php echo set_value('latitude'); ?>"
                        placeholder="latitude" />
                </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                    <input type="text" class="form-control" name="longitude_awal" value="<?php echo set_value('longitude'); ?>"
                        placeholder="longitude" />
                </div>
            </div>
<!--             <div class="form-group">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.9843399144765!2d98.6758949072379!3d3.591066090705371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10115019ed354153%3A0x9a2e901bf2c880a5!2sMerdeka%20Walk!5e0!3m2!1sen!2sid!4v1621420243881!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div> -->
        </div>
        <div class="col-md-6">
            <h2 class="card-inside-title">Lokasi Akhir</h2>
            <div class="form-group">
                <div class="form-line">
                    <input type="text" class="form-control" name="latitude_awal" value="<?php echo set_value('latitude'); ?>"
                        placeholder="latitude" />
                </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                    <input type="text" class="form-control" name="longitude_awal" value="<?php echo set_value('longitude'); ?>"
                        placeholder="longitude" />
                </div>
            </div>
            <!-- <div class="form-group">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2815.676919233109!2d98.64559874938435!3d3.5946990307755926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fff8ca1ee09%3A0xd9a93fa27d3edbbf!2sKopi%20Soe%20Kapten%20Muslim!5e0!3m2!1sen!2sid!4v1620828091769!5m2!1sen!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="card-inside-title">Rute Terbaik</h2>
            <div class="form-group">
                <?php echo $map['html']; ?>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-success btn-lg waves-effect right" type="button" id="btn-proses">proses</button>
    </div>
</div>