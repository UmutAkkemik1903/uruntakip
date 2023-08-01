<link rel="stylesheet" href="<?=BOWER_PATH;?>/icon/font/css/open-iconic.css" >
<link rel="stylesheet" href="<?=BOWER_PATH;?>/icon/font/css/open-iconic-bootstrap.css" >
<span class="oi" data-glyph="icon-name" title="icon name" aria-hidden="true"></span>
<span class="oi oi-icon-name" title="icon name" aria-hidden="true"></span>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <!-- left column -->

            <div class="col-md-12">

                <div class="box">


                    <div class="box-header">
                        <h3 class="box-title">Üye Listesi</h3>
                        <div class="text-right">
                            <a class=" btn btn-success" href="<?=SITE_URL;?>/admin/kullaniciEkle">Yeni Ekle</a>
                        </div>

                    </div>
                    <!-- /.box-header -->
                    <div class="table-responsive">
                        <table  class="table">
                            <thead class="table table-striped jambo_table bulk_action">

                            <tr class="headings">

                                <th class="column-title text-center">Üye Adı</th>
                                <th class="column-title text-center">Email</th>
                                <th class="column-title text-center">Şifre</th>
                                <th class="column-title text-center">Yetki</th>
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



                                        <td class="column-title text-center"><?=$value['name'];?></td>
                                        <td class="column-title text-center"><?=$value['email'];?></td>
                                        <td class="column-title text-center"><?=$value['password'];?>  </td>
                                        <td class="column-title text-center"><?=$value['yetki'];?></td>
                                        <?php

                                            ?>
                                            <td class="column-title text-center"><a class="btn btn-primary" href="<?=SITE_URL;?>/admin/duzenle/<?=$value['id'];?>">Düzenle</a></td>
                                            <td class="column-title text-center"><a onclick="return ShowConfirm();" class="btn btn-danger" href="<?=SITE_URL;?>/admin/sil/<?=$value['id']; ?>">Sil</a></td>

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







