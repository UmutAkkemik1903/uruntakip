<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <form   action="" method="GET">
                <div class="form-group">
                    <div class="col-md-6">
                        <label>Başlangıç Tarihi</label>
                        <input type="date" name="firstDate" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Bitiş Tarihi</label>
                        <input type="date" name="secondDate" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button class="btn-btn-info">Sorgula</button>
                    </div>
                </div>
            </form>
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Ürün Rapor Listesi</h3>
                        <a class="btn btn-warning" href="<?=SITE_URL;?>/urunler/index">Geri Dön</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover -align-left">
                            <tr>
                                <th>Mal No</th>
                                <th>SKT</th>

                                <th>Ürün Adı</th>



                            </tr>
                            <?php
                            if(count($params ['data'])!=0)
                            {
                                foreach($params ['data'] as $key => $value)
                                {
                                    $urunRow =$this->model('urunlerModel')->getData($value['id']);

                                    ?>

                                    <tr>

                                        <td><?=$urunRow['mal_no'];?></td>
                                        <td ><?=$urunRow['skt'];?></td>

                                        <td><?=$urunRow['urun_adi'];?></td>




                                    </tr>

                                    <?php
                                }
                            }
                            ?>
                        </table>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</div>
