<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <?php
                helper::flashDataView("statu");
                ?>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">"<?=$params['data']['urun_adi'];?>" Duzenle</h3>
                    </div>

                    <form role="form" action="<?=SITE_URL;?>/urunler/update/<?=$params['data']['id'];?>" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mal No:</label>
                                <input type="text" class="form-control" name="mal_no" value="<?=$params['data']['mal_no'];?>">
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Barkot:</label>
                                <input type="text" class="form-control" name="barkot" value="<?=$params['data']['barkot'];?>">
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Urun Adı:</label>
                                <input type="text" class="form-control" name="urun_adi" value="<?=$params['data']['urun_adi'];?>">
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Son Kullanma Tarihi:</label>
                                <input type="date" class="form-control" name="skt" value="<?=$params['data']['skt'];?>">
                            </div>



                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Düzenle</button>
                            <a class="btn btn-warning" href="<?=SITE_URL;?>/urunler/index">Geri Dön</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="http://localhost/deneme/public/bower_components/jquery/dist/jquery.min.js"></script>
<script>

</script>
