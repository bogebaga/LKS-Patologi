<?php 
    if (isset($_GET['lks'])) 
    {
        extract($lkscrud->ekstrak_data_by_norekmed($_GET['lks']));
        extract($lkscrud->ekstrak_data_by_norekmed_tes_hasil($_GET['lks']));
        extract($lkscrud->ekstrak_data_by_norekmed_tes_hasil_hijau($_GET['lks']));
    }   
?>
<body>
    <section class="hbox stretch">
    <?php 
        require 'menu_view.php';
    ?>
        <section id="content">
            <section class="vbox">
                 <section class="bg-light lter">
                    <section class="hbox stretch">
                        <aside>
                            <section class="vbox">
                                <section class="scrollable">
                                    <div id="LKS-Merah" class="trans-panel scroll-a">
                                        <div class="latar-merah w-std">
                                            <a href="#LKS-Hijau">
                                                <span class="btn-lks btn-lks-hijau"><span class="icon-beaker" style="padding-right:10px;"></span>LKS - Lembar Hijau</span>
                                            </a>
                                            <div class="container">
                                                <h1 style="margin-top:80px;color:white;">VIEW LEMBAR KENDALI SAMPEL</h1>
                                            </div>
                                        </div>
                                        <div class="container w-std">
                                            <div class="lp lembar-full col-xs-12 col-md-9 col-lg-11 center">
                                                <div class="lembar-full-border">
                                                        <?php require 'view-data-lks-2/view_data_pasien.php'; ?>
                                                </div>
                                                <div class="lembar-full-border margin-d " style="padding:10px 10px 10px 10px;">
                                                        <?php require 'view-data-lks-2/view_data_sampel.php'; ?>
                                                </div>
                                                <div class="lembar-full-border margin-d">
                                                        <?php require 'view-data-lks-2/view_data_hasil.php'; ?>
                                                </div>
                                                <div class="lembar-full-border margin-d">
                                                        <?php require 'view-data-lks-2/view_data_verifikasi_validasi.php'; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="LKS-Hijau" class="trans-panel panel-top scroll-a">
                                        <div class="latar-hijau w-std">
                                            <a href="#LKS-Merah">
                                                <span class="btn-lks btn-lks-merah"><span class="icon-beaker" style="padding-right:10px;"></span>LKS - Lembar Merah</span>
                                            </a>
                                            <div class="container">
                                                <h1 style="margin-top:80px;color:white;">VIEW LEMBAR KENDALI SAMPEL</h1>
                                            </div>
                                        </div>
                                        <div class="container w-std">
                                            <div class="lp lembar-full col-xs-12 col-md-9 col-lg-11 center">
                                                <div class="lembar-full-border">
                                                        <?php require 'view-data-lks-2/view_data_pasien.php'; ?>
                                                </div>
                                                <div class="lembar-full-border margin-d" style="padding:10px 10px 10px 10px;">
                                                        <?php require 'view-data-lks-2/view_data_sampel_hijau.php'; ?>
                                                </div>
                                                <div class="lembar-full-border margin-d" >
                                                        <?php require 'view-data-lks-2/view_data_hasil_hijau.php'; ?>
                                                </div>
                                                <div class="lembar-full-border margin-d" >
                                                        <?php require 'view-data-lks-2/view_data_verifikasi_validasi.php'; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                        
                                </section>
                            </section>
                        </aside>
                    </section>
                </section>
            </section>
        </section>
    </section>
    
    <!-- TOMBOL AKSI -->
    <div class="aksi_tombol">
        <ul class="daftar_tombol">
            <li>
                <button type="button" class="lks_action_button icon-download-alt" onClick="location='LKS-page/?lks=<?php echo $_GET['lks']; ?>&download'" data-toggle="tooltip" data-placement="left" title="Download LKS"><span class="sr-only">Download_bang</span></button>
            </li>
            <li>
                <button type="button" class="lks_action_button icon-file-text-alt" onClick="location='LKS-page/?lks=<?php echo $_GET['lks'];?>'" data-toggle="tooltip" data-placement="left" title="View LKS"><span class="sr-only">HALAMAN PDF</span></button>
            </li>
            <li>
                <button type="button" class="lks_action_button icon-print" onClick="printpdf('LKS-page/?lks=<?php echo $_GET['lks'];?>')" data-toggle="tooltip" data-placement="left" title="Print LKS"><span class="sr-only">Untuk Kehalaman print</span></button>
            </li>
            <div class="batas-atas-bawah"></div>
            <li>
                <button type="button" class="lks_action_button icon-remove" onClick="location='delete/?lks=<?php echo $_GET['lks']; ?>'" data-toggle="tooltip" data-placement="left" title="Delete LKS"><span class="sr-only">Untuk Delete</span></button>
            </li>
            <li>
                <button type="button" class="lks_action_button icon-paste" onclick="location='../edit-data-lks/?lks=<?php echo $_GET['lks']; ?>'" data-toggle="tooltip" data-placement="left" title="Edit LKS"><span class="sr-only">Ke halaman Edit</span></button>
            </li>
            <li>
                <button type="button" class="lks_action_button icon-pencil" onClick="location='../input-data-lks/'" data-toggle="tooltip" data-placement="left" title="Input LKS"><span class="sr-only">Ke halaman input</span></button
            ></li>
        </ul>
    </div>