<?php 
if (isset($_POST['btn-update']))
{
    $no_rekmed = $_GET['lks'];
    $no_lab = $_POST['no_lab'];
    $ruangan = $_POST['ruangan'];
    $nama_pasien = $_POST['nama_pasien'];
    $lm_puasa = $_POST['lm_puasa'];
    $dokter_krm = $_POST['dokter_krm'];
    $diagnosis = $_POST['diagnosis'];
    $interpretasi = $_POST['interpretasi'];
    $fle_jam = $_POST['fle_jam'];
    $tgl_tdy = $_POST['tgl_tdy'];
    $tgl_lhr = $_POST['tgl_lhr'];
    $analisis_mulai = $_POST['analisis_mulai'];
    $analisis_berakhir = $_POST['analisis_berakhir'];
    $verifikator_i = $_POST['verifikator_i'];
    $verifikator_ii = $_POST['verifikator_ii'];
    $validasi = $_POST['validasi'];
    include '../../../include/masukkan_spesimen.php';
    include '../../../include/masukkan_tabung.php';
    include '../../../include/masukkan_kon_vol.php';
    include '../../../include/masukkan_kirim_analy.php';

    if ($lkscrud->edit_masukan_tulisan($no_rekmed, $no_lab, $ruangan, $nama_pasien, $lm_puasa, $dokter_krm, $diagnosis, $interpretasi))
    {
        $lkscrud->buat_masukan_cekbox_spesimen($no_rekmed, $inputvena, $inputarteri, $inputdarah, $inputurine, $inputfeses, $inputcairan);
        $lkscrud->buat_masukan_cekbox_spesimen_hijau($no_rekmed, $inputvena_hijau, $inputarteri_hijau, $inputdarah_hijau, $inputurine_hijau, $inputfeses_hijau, $inputcairan_hijau);
        $lkscrud->buat_masukan_cekbox_tabung($no_rekmed, $inputEDTA, $inputplain, $inputcitrate, $inputheparin, $inputsst, $inputled, $inputTube);
        $lkscrud->buat_masukan_cekbox_tabung_hijau($no_rekmed, $inputEDTA_hijau, $inputplain_hijau, $inputcitrate_hijau, $inputheparin_hijau, $inputsst_hijau, $inputled_hijau, $inputTube_hijau);
        $lkscrud->buat_masukan_cekbox_kon_vol($no_rekmed, $inputbaik, $inputlisis, $inputlipemik, $inputikterik, $inputcukup, $inputkurang, $inputskurang);
        $lkscrud->buat_masukan_cekbox_kon_vol_hijau($no_rekmed, $inputbaik_hijau, $inputlisis_hijau, $inputlipemik_hijau, $inputikterik_hijau, $inputcukup_hijau, $inputkurang_hijau, $inputskurang_hijau);
        $lkscrud->buat_masukkan_cekbox_kirim_analy($no_rekmed, $inputhematologi, $inputhemostatis, $inputanalisiscairan, $inputkimiaklinik, $inputimunoserologi, $inputAnalyzer);
        $lkscrud->buat_masukkan_cekbox_kirim_analy_hijau($no_rekmed, $inputhematologi_hijau, $inputhemostatis_hijau, $inputanalisiscairan_hijau, $inputkimiaklinik_hijau, $inputimunoserologi_hijau, $inputAnalyzer_hijau);
        $lkscrud->buat_masukan_jam_tanggal($no_rekmed, $fle_jam, $tgl_tdy, $tgl_lhr, $analisis_mulai, $analisis_berakhir, $verifikator_i, $verifikator_ii, $validasi);

        $block_msg ="<div class='alert alert-info alert-dismissible fade in' role='alert'>
            DATA LEMBAR KENDALI SAMPEL BERHASIL TERSIMPAN
        <button type='button' class='close' data-dismiss='alert'>
            <span aria-hidden='true'>&times;</span>
            <span class='sr-only'>Close</span>
        </button>
        </div>";
    }
    else
    {
        $block_msg = "<div class='alert alert-danger alert-dismissible fade in' role='alert'>
            DATA LEMBAR KENDALI SAMPEL TIDAK TERSIMPAN
        <button type='button' class='close' data-dismiss='alert'>
            <span aria-hidden='true'>&times;</span>
            <span class='sr-only'>Close</span>
        </button>
        </div>";
    }
}

if (isset($_GET['lks'])) 
{
    $no_rekmed = $_GET['lks'];

    extract($lkscrud->ekstrak_data_by_norekmed($no_rekmed));
    extract($lkscrud->ekstrak_data_by_norekmed_tes_hasil($no_rekmed));
    extract($lkscrud->ekstrak_data_by_norekmed_tes_hasil_hijau($no_rekmed));
}
?>
<body>
    <section class="hbox stretch">
    <?php 
        require 'menu_edit.php';
    ?>
        <!-- .vbox -->
        <section id="content">
            <section class="vbox">
                <section class="bg-light lter">
                    <section class="hbox stretch">
                        <!-- .aside -->
                        <aside>
                            <section class="vbox">
                                <section class="scrollable scroll-a">
                                    <div class="container w-std">
                                        <h1 class="clear-margin" style="color:black;">EDIT DATA - LEMBAR KENDALI SAMPEL</h1>
                                    </div>
                                    <div class="container w-std">
                                        <?php
                                        if(isset($block_msg))
                                        {
                                            echo $block_msg;
                                        }
                                        ?>
                                    </div>
                                    <form method='post'>
                                        <div class="container w-std">
                                                <!-- Info Pasien -->
                                                <?php include 'edit-data-lks/edit_data_pasien.php'; ?>  
                                        
                                                <!-- Info Sample Pasien -->
                                                <?php include 'edit-data-lks/edit_data_sample.php'; ?>  

                                                <!-- Info Tes dan Hasil -->
                                                <?php include 'edit-data-lks/edit_data_hasil.php'; ?>

                                                <!--   Info Verifikasi dan validasi Hasil -->
                                                <?php include 'edit-data-lks/edit_data_verifikasi_validasi.php'; ?>
                                                <div class="panel-footer" align="right">

                                                    <button type="reset" class="btn btn-lg btn-default" name="btn-reset">
                                                        <span class="icon-eraser"></span>&nbsp;Batal
                                                    </button>
                                                    <button type="submit" class="btn btn-lg btn-danger" name="btn-update">
                                                        <span class="icon-ok"></span>&nbsp;Simpan Perubahan
                                                    </button>
                                                </div>
                                        </div>  
                                    </form>
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