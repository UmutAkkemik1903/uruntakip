<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?=IMG_PATH;?>/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?=$this->myuserinfo['name'];?></p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Ürünler</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="<?=SITE_URL;?>/urunler/"><i class="fa fa-list"></i>Ürün Listesi</a></li>

                </ul>

            </li>

            </ul>

        <ul class="sidebar-menu" data-widget="tree">


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-keyboard-o"></i>
                    <span>Admin Panel</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="<?=SITE_URL;?>/admin/"><i class="fa fa-universal-access"></i>Üye Listesi</a></li>

                </ul>

            </li>

        </ul>



    </section>
    <!-- /.sidebar -->
</aside>
