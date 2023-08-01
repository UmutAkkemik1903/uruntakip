<link rel="stylesheet" href="<?=BOWER_PATH;?>/icon/font/css/open-iconic.css" >
<link rel="stylesheet" href="<?=BOWER_PATH;?>/icon/font/css/open-iconic-bootstrap.css" >
<span class="oi" data-glyph="icon-name" title="icon name" aria-hidden="true"></span>
<span class="oi oi-icon-name" title="icon name" aria-hidden="true"></span>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <!-- left column -->

            <div class="col-md-12">

                <a href="<?=SITE_URL;?>/excel/export" class="btn btn-info">Excel Olarak İndir</a>
                <a href="<?=SITE_URL;?>/excel/importForm" class="btn btn-info">Excel Olarak Aktar</a>
                <a href="<?=SITE_URL;?>/urunler/create" class="btn btn-success">Yeni Kayıt</a>
                <a href="<?=SITE_URL;?>/urunler/tarih" class="btn btn-warning">Tarih Bazlı Listeleme</a>

                <div class="box">


                    <div class="box-header">
                        <h3 class="box-title">Ürün Listesi</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="table-responsive">
                        <table  class="table">
                            <thead class="table table-striped jambo_table bulk_action">

                            <tr class="headings">

                                <th class="column-title text-center">Mal No</th>
                                <th class="column-title text-center">Barkot</th>
                                <th class="column-title text-center">Ürün Adı

                                    <a  href="<?=SITE_URL;?>/urunler/listeleA"><span class="oi oi-arrow-thick-bottom"></a>
                                    <a  href="<?=SITE_URL;?>/urunler/listeleZ"><span class="oi oi-arrow-thick-top"></a></th>
                                <th class="column-title text-left">SKT<a  href="<?=SITE_URL;?>/urunler/tarihA"><span class="oi oi-arrow-thick-bottom"></a>
                                    <a  href="<?=SITE_URL;?>/urunler/tarihZ"><span class="oi oi-arrow-thick-top"></a></th>

                                <th class="column-title text-center"></th>
                                <th class="column-title text-center"></th>

                            </tr>

                            <tbody>

                            <?php

                            if(count($params['data'])!=0)
                            {
                                foreach($params['data'] as $key => $value)
                                {


                                    ?>
                                    <tr>



                                        <td class="column-title text-center"><?=$value['mal_no'];?></td>
                                        <td class="column-title text-center"><?=$value['barkot'];?></td>
                                        <td class="column-title text-center"><?=$value['urun_adi'];?>  </td>
                                        <td class="column-title text-left"><?=$value['skt'];?></td>
                                        <td class="column-title text-center"><a class="btn btn-primary" href="<?=SITE_URL;?>/urunler/edit/<?=$value['id'];?>">Düzenle</a></td>
                                        <td class="column-title text-center"><a onclick="return ShowConfirm();" class="btn btn-danger" href="<?=SITE_URL;?>/urunler/delete/<?=$value['id']; ?>">Sil</a></td>

                                    </tr>
                                    <?php

                            }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</div>






