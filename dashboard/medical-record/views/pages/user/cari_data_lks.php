<?php 
    if(isset($_POST['cari_data_like']))
    {
        $cari_data=$_POST['input_cari'];

        if($cari_data == '')
        {
            header('Location: ../search/?lks');
        }
        else
        {
            header('Location: ../search/?lks='.$cari_data);
        }
    }
?>
<body>
    <section class="hbox stretch">
    <?php 
        require 'menu_search.php';
    ?>
        <!-- .vbox -->
        <section id="content">
            <section class="vbox">
                <section class="bg-light lter">
                    <section class="hbox stretch">
                        <!-- .aside -->
                        <aside>
                            <section class="vbox">
                                <section class="scrollable">
                                    <div class="panel-header">
                                        <div class="left-panel">
                                            <div class="group-search">
                                                <div class="box-search">
                                                    <form method="POST">
                                                        <input type="text" class="search-border-less" name="input_cari" 
                                                        <?php if(isset($_GET['lks']))
                                                        {
                                                            echo "value='".$_GET['lks']."'";
                                                        } 
                                                        ?>
                                                        >
                                                </div>
                                                    <button class="btn-cari" type="submit" name="cari_data_like"><span class="icon-search"></span><span class="sr-only">CARI</span></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container scroll-a">
                                    <?php
                                        if(isset($_GET['lks']))
                                        {
                                            $netbot = $_GET['lks'];
                                            $lkscrud->cari_data_disini($netbot);
                                        }
                                        else
                                        {
                                            ?>
                                            <div align="center" style="margin-top:100px;margin-bottom: 100px;">
                                                    <img id="logo-not" src="<?php echo $config['site']; ?>assets/css/Material/clipboard65.png" width="300px" height="300px" alt="not-found">
                                                    <span id="tdk-ditemukan" align="center">data tidak ditemukan</span>
                                            </div>
                                            <?php
                                        }
                                    ?>
                                    </div>
                                </section>
                            </section>
                        </aside>
                        <!-- /.aside -->
                    </section>
                </section>
            </section>
        </section>
        <!-- /.vbox -->
    </section>
    
    <?php
    if (isset($_GET['lks'])) 
    {
        $lkscrud->tampilkan_modal_delete_lks($_GET['lks']);
    }
    ?>
    <!-- Button Aksi Here -->
    <div class="aksi_tombol">
        <ul class="daftar_tombol">
            <li>
                <button class="user-btn icon-pencil" onClick="location='../input-data-lks/'" type="button" data-toggle="tooltip" data-placement="left" title="Input Data LKS">
                <span class="sr-only">Halaman Edit User</span>
                </button>
            </li>
        </ul>
    </div>