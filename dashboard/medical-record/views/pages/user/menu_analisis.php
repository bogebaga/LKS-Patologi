<!--.aside -->
<aside class="bg-danger dk aside nav-vertical no-borders" id="nav">
    <section class="vbox">
        <header class="nav-bar">
            <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="body"> <i class="icon-reorder"></i> </a> <a href="#" class="nav-brand" data-toggle="fullscreen"><img class="ukuran-gambar" src="<?php echo $config['site']; ?>assets/css/Material/banner-lks-white.png" alt="logo lks white"></a>
            <a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-user"> <i class="icon-user"></i> </a>
        </header>
        <footer class="footer bg-gradient hidden-xs">
            <a href="<?php echo $config['site']; ?>logout/" class="btn btn-sm btn-link m-r-n-xs pull-right"> <i class="icon-off"></i> </a>
            <a href="#nav" data-toggle="class:nav-vertical" class="btn btn-sm btn-link m-l-n-sm"> <i class="icon-reorder"></i> </a>
        </footer>
        <section>
            <div class="nav-user hidden-xs pos-rlt">
                <div class="nav-avatar pos-rlt">
                    <a href="#" class="thumb-sm avatar animated rollIn center" data-toggle="dropdown"> 
                    <?php 
                      $username = $_SESSION['username'];
                      $path = $_SERVER['DOCUMENT_ROOT']."/LKS-Patologi/dashboard/UPLOAD_FILES/Images/Users_img/";
                      $path .= md5($username."1");

                      $name_other = md5($username."1");

                      $jenis_kelamin = $_SESSION['jenis_kel'];

                      if(file_exists($path))
                      {
                      ?>
                        <img src="<?php echo $config['site']; ?>UPLOAD_FILES/Images/Users_img/<?php echo $name_other; ?>" alt="" class="">
                      <?php
                      }
                      else
                      {
                        if($jenis_kelamin == 'Laki-laki')
                        {
                      ?>
                           <img src="<?php echo $config['site']; ?>assets/css/Material/user_acc_2.png">
                      <?php     
                        } 
                        else
                        {
                      ?>
                           <img src="<?php echo $config['site']; ?>assets/css/Material/user_acc_1.png">
                      <?php
                        }  
                      }
                      ?>

                    <span class="caret caret-white"></span> </a>
                    <ul class="dropdown-menu m-t-sm animated fadeInLeft"> <span class="arrow top"></span>
                        <li class="dropdown-header">Info</li>
                        <li><a href="#"><?php echo $_SESSION['nama']; ?></a></li>
                    </ul>
                    <div class="visible-xs m-t m-b"> <a href="#" class="h3"><?php echo $_SESSION['nama']; ?></a>
                        <p><i class="icon-medkit"></i>RSP. Universitas Hasanuddin</p>
                    </div>
                </div>
            </div>
            <nav class="nav-primary hidden-xs">
                <ul class="nav">
                    <li>
                        <a href="../"> 
                            <i class="icon-dashboard"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <?php 
                    if(isset($_SESSION['admin']))
                    {
                        if($_SESSION['admin']=='admin')
                        {
                        echo "<li>
                                <a href='../view-data-admin/'>
                                    <i class='icon-user-md'></i><span>User</span>
                                </a>
                            </li>

                            <li class='nav-divider'></li>";
                        }    
                    }
                    ?>
                    <li>
                        <a href="../search/"> 
                            <i class="icon-search"></i><span>Search</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            <i class="icon-bar-chart"></i><span>Detil</span><span>&nbsp;LKS</span>
                        </a>
                    </li>
                    <li>
                        <a href="../input-data-lks/">
                            <i class="icon-pencil"></i><span>Input</span><span>&nbsp;LKS</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    </section>
</aside>
<!-- /.aside -->