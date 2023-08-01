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
                        <h3 class="box-title">"<?=$params['data']['name'];?>" Duzenle</h3>
                    </div>

                    <form role="form" action="<?=SITE_URL;?>/admin/guncelle/<?=$params['data']['id'];?>" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name:</label>
                                <input type="text" class="form-control" name="name" value="<?=$params['data']['name'];?>">
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email:</label>
                                <input type="text" class="form-control" name="email" value="<?=$params['data']['email'];?>">
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Şifre:</label>
                                <input type="text" class="form-control" name="password" value="<?=$params['data']['password'];?>">
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">yetki:</label>
                                <input type="text" class="form-control" name="yetki" value="<?=$params['data']['yetki'];?>">
                            </div>



                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Düzenle</button>
                            <a class="btn btn-warning" href="<?=SITE_URL;?>/admin">Geri Dön</a>
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

