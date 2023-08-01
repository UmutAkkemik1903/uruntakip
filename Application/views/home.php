
<div class="content-wrapper">

    <section class="content">
        <div class="box box-info">
            <?php
            helper::flashDataView("statu");
            ?>
            <div class="box-header">
                <i class="fa fa-search"></i>

                <h3 class="box-title">Hızlı Ürün Ara</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">

                </div>
                <!-- /. tools -->
            </div>
            <div class="box-body" id="app">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="urun_adi" placeholder="Ürün Adı Giriniz">
                    </div>
                    <?php
                    if ($_POST)

                    {

                        $data = $this->model('urunlerModel')->ara($_POST['urun_adi']);
                        if (count($data)!=0)
                        { ?>
                            <table class="table table-hover" >
                                <tr>
                                    <th>Mal No</th>
                                    <th>Barkot</th>
                                    <th>Ürün Adı</th>
                                    <th>SKT</th>

                                </tr>
                                <?php
                                foreach ($data as $key => $value)
                                {

                                    ?>
                                    <tr>
                                        <td><?=$value['mal_no'];?></td>
                                        <td><?=$value['barkot'];?></td>
                                        <td><?=$value['urun_adi'];?></td>
                                        <td><?=$value['skt'];?></td>
                                        <td> <a href="javascript:"  @click="kullaniciDuzenle(home)" class="btn btn-sm btn-warning">
                                                <i class="fa fa-pencil"></i>
                                            </a></td>



                                    </tr>

                                    <?php
                                }
                                ?> </table>
                            <?php
                        }
                    }


                    ?>

            </div>
            <div class="box-footer clearfix">
                <button type="submit" class="pull-right btn btn-default" id="sendEmail">Ara
                    <i class="fa fa-arrow-circle-right"></i></button>
            </div>
            </div>
            </form>

        <div>



            <div class="modal fade" tabindex="-1" role="dialog" id="kullaniciModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="box box-primary">
                            <div class="box-header with-border">

                                <h3 class="box-title">Düzenle</h3>
                            </div>

                            <form role="form" @submit.prevent="true"  method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mal No:</label>
                                        <input type="text" class="form-control" id="mal" name="mal_no" >
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Barkot:</label>
                                        <input type="text" class="form-control" id="barkot" name="barkot">
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Urun Adı:</label>
                                        <input type="text" class="form-control" name="urun_adi">
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Son Kullanma Tarihi:</label>
                                        <input type="date" class="form-control" name="skt">
                                    </div>



                                </div>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" >Güncelle</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        <script src="<?=ASSESTS;?>/js/vue.js"></script>
        <script src="<?=ASSESTS;?>/js/jquery.min.js"></script>
        <script src="<?=ASSESTS;?>/js/bootstrap.min.js"></script>
        <script src="<?=ASSESTS;?>/uygulama.js"></script>

    </section>
<div class="container">
        <form action="" method="post">




                        <table class="table table-dark">
                            <tr>
                                <th >Mal No</th>
                                <th align="text-left">Barkot</th>
                                <th>Ürün Adı</th>
                                <th>SKT</th>
                                <th>

                                </th>

                            </tr>
                            <?php
                            date_default_timezone_set('Europe/Istanbul');
                            $zaman=date('yy-m-d',strtotime('-1 day'));

                          


                            $data = $this->model('urunlerModel')->listview();

                            foreach($data as $key => $value)
                            {
?>
                            <?php       if (($value['skt'])==$zaman)

                            {
                            ?>
                            <tbody>


                                <tr>

                                   <td><?=$value['mal_no'];?></td>

                                   <td><?=$value['barkot'];?></td>

                                    <td><?=$value['urun_adi'];?></td>

                                   <td><?=$value['skt'];?></td>


                                </tr>
                                <br>

                                <?php
                            }

                            ?>
                            </tbody>
                                <?php


                            }

                            ?>
                        </table>


    </div>

</form>
</div>






    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->

    <!-- /.box -->

    <!-- right col -->

<!-- /.row (main row) -->


