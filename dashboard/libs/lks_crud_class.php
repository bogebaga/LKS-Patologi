<?php 
class lks_crud
{
	// 
	private $db;

	// 
	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}
	
	public function buat_masukan_tulisan($no_rekmed, $no_lab, $ruangan, $nama_pasien, $lm_puasa, $dokter_krm, $diagnosis, $interpretasi)
	{
		$sql ="
				INSERT INTO tb_pasien(no_rekmed,no_lab,ruangan,nama_pasien,lm_puasa,dokter_krm,diagnosis) VALUES (:no_rekmed,:no_lab,:ruangan,:nama_pasien,:lm_puasa,:dokter_krm,:diagnosis);	

				INSERT INTO tb_analyzer(id_analy,no_rekmed) VALUES(last_insert_id(),:no_rekmed);
				INSERT INTO tb_asal_spesimen(id_asal_spesimen,no_rekmed) VALUES (last_insert_id(),:no_rekmed);
				INSERT INTO tb_kon_spesimen(id_k_spe,no_rekmed) VALUES (last_insert_id(),:no_rekmed);
				INSERT INTO tb_krm(id_krm,no_rekmed) VALUES (last_insert_id(),:no_rekmed);
				INSERT INTO tb_spesimen(id_spesimen,no_rekmed) VALUES (last_insert_id(),:no_rekmed);
				INSERT INTO tb_tabung(id_tabung,no_rekmed) VALUES (last_insert_id(),:no_rekmed);
				INSERT INTO tb_ver_and_val(id_verval,no_rekmed,interpretasi) VALUES (last_insert_id(),:no_rekmed,:interpretasi);
				INSERT INTO tb_vol_spesimen(id_v_spe,no_rekmed) VALUES (last_insert_id(),:no_rekmed);

				INSERT INTO tb_analyzer_hijau(id_analy_hijau,no_rekmed) VALUES(last_insert_id(),:no_rekmed);
				INSERT INTO tb_asal_spesimen_hijau(id_asal_spesimen_hijau, no_rekmed) VALUES(last_insert_id(), :no_rekmed);
				INSERT INTO tb_kon_spesimen_hijau(id_k_spe_hijau, no_rekmed) VALUES(last_insert_id(), :no_rekmed);
				INSERT INTO tb_krm_hijau(id_krm_hijau, no_rekmed) VALUES(last_insert_id(), :no_rekmed);
				INSERT INTO tb_spesimen_hijau(id_spesimen_hijau, no_rekmed) VALUES(last_insert_id(), :no_rekmed);
				INSERT INTO tb_tabung_hijau(id_tabung_hijau, no_rekmed) VALUES(last_insert_id(), :no_rekmed);
				INSERT INTO tb_vol_spesimen_hijau(id_v_spe_hijau, no_rekmed) VALUES(last_insert_id(), :no_rekmed);
			";
		try 
		{
			$stmt = $this->db->prepare($sql);
		
			$stmt->bindparam(":no_rekmed",$no_rekmed,PDO::PARAM_STR);
			$stmt->bindparam(":no_lab",$no_lab,PDO::PARAM_STR);
			$stmt->bindparam(":ruangan",$ruangan,PDO::PARAM_STR);
			$stmt->bindparam(":nama_pasien",$nama_pasien,PDO::PARAM_STR);
			$stmt->bindparam(":lm_puasa",$lm_puasa,PDO::PARAM_STR);
			$stmt->bindparam(":dokter_krm",$dokter_krm,PDO::PARAM_STR);
			$stmt->bindparam(":diagnosis",$diagnosis,PDO::PARAM_STR);
			$stmt->bindparam(":interpretasi",$interpretasi,PDO::PARAM_STR);
			
			$stmt->execute();
			return true;	
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;	
		}
	}

	public function edit_masukan_tulisan($no_rekmed, $no_lab, $ruangan, $nama_pasien, $lm_puasa, $dokter_krm, $diagnosis, $interpretasi)
	{
		$sql ="
				UPDATE tb_pasien SET no_lab=:no_lab, 
									ruangan=:ruangan, 
									nama_pasien=:nama_pasien,
									lm_puasa=:lm_puasa,
									dokter_krm=:dokter_krm,
									diagnosis=:diagnosis 
								WHERE 
									no_rekmed=:no_rekmed;

				UPDATE tb_ver_and_val SET interpretasi=:interpretasi WHERE no_rekmed=:no_rekmed;
				";
		try 
		{
			$stmt = $this->db->prepare($sql);
		
			$stmt->bindparam(":no_rekmed",$no_rekmed,PDO::PARAM_STR);
			$stmt->bindparam(":no_lab",$no_lab,PDO::PARAM_INT);
			$stmt->bindparam(":ruangan",$ruangan,PDO::PARAM_STR);
			$stmt->bindparam(":nama_pasien",$nama_pasien,PDO::PARAM_STR);
			$stmt->bindparam(":lm_puasa",$lm_puasa,PDO::PARAM_STR);
			$stmt->bindparam(":dokter_krm",$dokter_krm,PDO::PARAM_STR);
			$stmt->bindparam(":diagnosis",$diagnosis,PDO::PARAM_STR);
			$stmt->bindparam(":interpretasi",$interpretasi,PDO::PARAM_STR);
			
			$stmt->execute();
			return true;	
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;	
		}
	}

	//LKS-MERAH
	public function buat_masukan_cekbox_spesimen($no_rekmed, $inputvena, $inputarteri, $inputdarah, $inputurine, $inputfeses, $inputcairan)
	{

		$sql ="
				
				UPDATE tb_asal_spesimen SET col_vena=:col_vena, 
											col_arteri=:col_arteri 
										WHERE 
											no_rekmed=:no_rekmed;
											
				UPDATE tb_spesimen SET col_darah=:col_darah,
										col_urine=:col_urine,
										col_feses=:col_feses,
										col_cairan=:col_cairan
									WHERE
										no_rekmed=:no_rekmed;			
			";
		
		try 
		{
			$stmt = $this->db->prepare($sql);

			$stmt->bindparam(":no_rekmed",$no_rekmed,PDO::PARAM_STR);
			$stmt->bindparam(":col_darah",$inputdarah,PDO::PARAM_INT);
			$stmt->bindparam(":col_urine",$inputurine,PDO::PARAM_INT);
			$stmt->bindparam(":col_feses",$inputfeses,PDO::PARAM_INT);
			$stmt->bindparam(":col_vena",$inputvena,PDO::PARAM_INT);
			$stmt->bindparam(":col_cairan",$inputcairan,PDO::PARAM_STR);
			$stmt->bindparam(":col_arteri",$inputarteri,PDO::PARAM_STR);

			
			$stmt->execute();
			return true;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;	
		}
	}
	// END LKS MERAH

	//LKS HIJAU
	public function buat_masukan_cekbox_spesimen_hijau($no_rekmed, $inputvena_hijau, $inputarteri_hijau, $inputdarah_hijau, $inputurine_hijau, $inputfeses_hijau, $inputcairan_hijau)
	{

		$sql ="
				
				UPDATE tb_asal_spesimen_hijau SET col_vena_hijau=:col_vena_hijau, 
													col_arteri_hijau=:col_arteri_hijau 
												WHERE 
													no_rekmed=:no_rekmed;
											
				UPDATE tb_spesimen_hijau SET col_darah_hijau=:col_darah_hijau,
										col_urine_hijau=:col_urine_hijau,
										col_feses_hijau=:col_feses_hijau,
										col_cairan_hijau=:col_cairan_hijau
									WHERE
										no_rekmed=:no_rekmed;			
			";
		
		try 
		{
			$stmt = $this->db->prepare($sql);

			$stmt->bindparam(":no_rekmed",$no_rekmed,PDO::PARAM_STR);
			$stmt->bindparam(":col_darah_hijau",$inputdarah_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_urine_hijau",$inputurine_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_feses_hijau",$inputfeses_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_vena_hijau",$inputvena_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_cairan_hijau",$inputcairan_hijau,PDO::PARAM_STR);
			$stmt->bindparam(":col_arteri_hijau",$inputarteri_hijau,PDO::PARAM_STR);
			
			$stmt->execute();
			return true;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;	
		}
	}
	//END LKS HIJAU

	//LKS MERAH
	public function buat_masukan_cekbox_tabung($no_rekmed, $col_EDTA, $col_plain, $col_citrate, $col_heparin, $col_sst, $col_led, $col_tube_etc)
	{
		$sql = "
					UPDATE tb_tabung SET col_EDTA=:col_EDTA,
										col_plain=:col_plain,
										col_citrate=:col_citrate,
										col_heparin=:col_heparin,
										col_sst=:col_sst,
										col_led=:col_led,
										col_tube_etc=:col_tube_etc
									WHERE
										no_rekmed=:no_rekmed;
			";

		try 
		{
			$stmt = $this->db->prepare($sql);

			$stmt->bindparam(":no_rekmed",$no_rekmed,PDO::PARAM_STR);
			$stmt->bindparam(":col_EDTA",$col_EDTA,PDO::PARAM_INT);
			$stmt->bindparam(":col_plain",$col_plain,PDO::PARAM_INT);
			$stmt->bindparam(":col_citrate",$col_citrate,PDO::PARAM_INT);
			$stmt->bindparam(":col_heparin",$col_heparin,PDO::PARAM_INT);
			$stmt->bindparam(":col_sst",$col_sst,PDO::PARAM_INT);
			$stmt->bindparam(":col_led",$col_led,PDO::PARAM_INT);
			$stmt->bindparam(":col_tube_etc",$col_tube_etc,PDO::PARAM_STR);
			
			$stmt->execute();
			return true;
			
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();	
			return false;
		}
	}
	// END LKS MERAH

	//LKS HIJAU
	public function buat_masukan_cekbox_tabung_hijau($no_rekmed, $col_EDTA_hijau, $col_plain_hijau, $col_citrate_hijau, $col_heparin_hijau, $col_sst_hijau, $col_led_hijau, $col_tube_etc_hijau)
	{
		$sql = "
					UPDATE tb_tabung_hijau SET col_EDTA_hijau=:col_EDTA_hijau,
											col_plain_hijau=:col_plain_hijau,
											col_citrate_hijau=:col_citrate_hijau,
											col_heparin_hijau=:col_heparin_hijau,
											col_sst_hijau=:col_sst_hijau,
											col_led_hijau=:col_led_hijau,
											col_tube_etc_hijau=:col_tube_etc_hijau
										WHERE
											no_rekmed=:no_rekmed;
			";

		try 
		{
			$stmt = $this->db->prepare($sql);

			$stmt->bindparam(":no_rekmed",$no_rekmed,PDO::PARAM_STR);
			$stmt->bindparam(":col_EDTA_hijau",$col_EDTA_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_plain_hijau",$col_plain_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_citrate_hijau",$col_citrate_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_heparin_hijau",$col_heparin_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_sst_hijau",$col_sst_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_led_hijau",$col_led_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_tube_etc_hijau",$col_tube_etc_hijau,PDO::PARAM_STR);
			
			$stmt->execute();
			return true;
			
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();	
			return false;
		}
	}
	//END LKS HIJAU

	//LKS MERAH
	public function buat_masukan_cekbox_kon_vol($no_rekmed, $col_baik, $col_lisis, $col_lipemik, $col_ikterik, $col_cukup, $col_kurang, $col_sngtkrng)
	{
		$sql = "
				UPDATE tb_kon_spesimen SET col_baik=:col_baik,
											col_lisis=:col_lisis,
											col_lipemik=:col_lipemik,
											col_ikterik=:col_ikterik
										WHERE
											no_rekmed=:no_rekmed;
				
				UPDATE tb_vol_spesimen SET col_cukup=:col_cukup,
											col_kurang=:col_kurang,
											col_sngtkrng=:col_sngtkrng
										WHERE
											no_rekmed=:no_rekmed;
				";
		try 
		{
			$stmt = $this->db->prepare($sql);

			$stmt->bindparam(":no_rekmed",$no_rekmed,PDO::PARAM_STR);
			$stmt->bindparam(":col_baik",$col_baik,PDO::PARAM_INT);
			$stmt->bindparam(":col_lisis",$col_lisis,PDO::PARAM_INT);
			$stmt->bindparam(":col_lipemik",$col_lipemik,PDO::PARAM_INT);
			$stmt->bindparam(":col_ikterik",$col_ikterik,PDO::PARAM_INT);
			$stmt->bindparam(":col_cukup",$col_cukup,PDO::PARAM_INT);
			$stmt->bindparam(":col_kurang",$col_kurang,PDO::PARAM_INT);
			$stmt->bindparam(":col_sngtkrng",$col_sngtkrng,PDO::PARAM_INT);
						
			$stmt->execute();
			return true;

		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;
		}
	}
	// END LKS HIJAU

	//LKS HIJAU
	public function buat_masukan_cekbox_kon_vol_hijau($no_rekmed, $col_baik_hijau, $col_lisis_hijau, $col_lipemik_hijau, $col_ikterik_hijau, $col_cukup_hijau, $col_kurang_hijau, $col_sngtkrng_hijau)
	{
		$sql = "
				UPDATE tb_kon_spesimen_hijau SET col_baik_hijau=:col_baik_hijau,
												col_lisis_hijau=:col_lisis_hijau,
												col_lipemik_hijau=:col_lipemik_hijau,
												col_ikterik_hijau=:col_ikterik_hijau
											WHERE
												no_rekmed=:no_rekmed;
				
				UPDATE tb_vol_spesimen_hijau SET col_cukup_hijau=:col_cukup_hijau,
												col_kurang_hijau=:col_kurang_hijau,
												col_sngtkrng_hijau=:col_sngtkrng_hijau
											WHERE
												no_rekmed=:no_rekmed;
				";
		try 
		{
			$stmt = $this->db->prepare($sql);

			$stmt->bindparam(":no_rekmed",$no_rekmed,PDO::PARAM_STR);
			$stmt->bindparam(":col_baik_hijau",$col_baik_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_lisis_hijau",$col_lisis_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_lipemik_hijau",$col_lipemik_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_ikterik_hijau",$col_ikterik_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_cukup_hijau",$col_cukup_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_kurang_hijau",$col_kurang_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_sngtkrng_hijau",$col_sngtkrng_hijau,PDO::PARAM_INT);
						
			$stmt->execute();
			return true;

		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;
		}
	}
	//END LKS HIJAU

	// LKS-MERAH
	public function buat_masukkan_cekbox_kirim_analy($no_rekmed, $col_hematologi, $col_hemostatis, $col_analisis_cairan, $col_kimia_klinik, $col_imunoserologi, $analyzer)
	{
		$sql = "
				UPDATE tb_krm SET col_hematologi=:col_hematologi,
									 col_hemostatis=:col_hemostatis,
									 col_analisis_cairan =:col_analisis_cairan,
									 col_kimia_klinik =:col_kimia_klinik,
									 col_imunoserologi =:col_imunoserologi
								WHERE
									no_rekmed=:no_rekmed;
				UPDATE tb_analyzer SET analyzer =:analyzer
								WHERE 
									no_rekmed=:no_rekmed;
				";
		try 
		{
			$stmt = $this->db->prepare($sql);

			$stmt->bindparam(":no_rekmed",$no_rekmed,PDO::PARAM_STR);
			$stmt->bindparam(":col_hematologi",$col_hematologi,PDO::PARAM_INT);
			$stmt->bindparam(":col_hemostatis",$col_hemostatis,PDO::PARAM_INT);
			$stmt->bindparam(":col_analisis_cairan",$col_analisis_cairan,PDO::PARAM_INT);
			$stmt->bindparam(":col_kimia_klinik",$col_kimia_klinik,PDO::PARAM_INT);
			$stmt->bindparam(":col_imunoserologi",$col_imunoserologi,PDO::PARAM_INT);
			$stmt->bindparam(":analyzer",$analyzer,PDO::PARAM_STR);
						
			$stmt->execute();
			return true;	
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;
		}
	}
	//END LKS MERAH

	//LKS HIJAU
	public function buat_masukkan_cekbox_kirim_analy_hijau($no_rekmed, $col_hematologi_hijau, $col_hemostatis_hijau, $col_analisis_cairan_hijau, $col_kimia_klinik_hijau, $col_imunoserologi_hijau, $analyzer_hijau)
	{
		$sql = "
				UPDATE tb_krm_hijau SET col_hematologi_hijau=:col_hematologi_hijau,
										col_hemostatis_hijau=:col_hemostatis_hijau,
										col_analisis_cairan_hijau=:col_analisis_cairan_hijau,
										col_kimia_klinik_hijau=:col_kimia_klinik_hijau,
										col_imunoserologi_hijau=:col_imunoserologi_hijau
									WHERE
										no_rekmed=:no_rekmed;

				UPDATE tb_analyzer_hijau SET analyzer_hijau=:analyzer_hijau
									WHERE 
										no_rekmed=:no_rekmed;
				";
		try 
		{
			$stmt = $this->db->prepare($sql);

			$stmt->bindparam(":no_rekmed",$no_rekmed,PDO::PARAM_STR);
			$stmt->bindparam(":col_hematologi_hijau",$col_hematologi_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_hemostatis_hijau",$col_hemostatis_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_analisis_cairan_hijau",$col_analisis_cairan_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_kimia_klinik_hijau",$col_kimia_klinik_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":col_imunoserologi_hijau",$col_imunoserologi_hijau,PDO::PARAM_INT);
			$stmt->bindparam(":analyzer_hijau",$analyzer_hijau,PDO::PARAM_STR);
						
			$stmt->execute();
			return true;	
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;
		}
	}
	//END LKS HIJAU
	public function buat_masukan_jam_tanggal($no_rekmed, $fle_jam, $tgl_tdy, $tgl_lhr, $analisis_mulai, $analisis_berakhir, $verifikator_i, $verifikator_ii, $validasi)
	{
		$sql = "
			UPDATE tb_pasien SET fle_jam=:fle_jam,
									tgl_tdy=:tgl_tdy,
									tgl_lhr=:tgl_lhr
								WHERE
								 no_rekmed=:no_rekmed; 
			
			UPDATE tb_tes SET analisis_mulai=:analisis_mulai,
								analisis_berakhir=:analisis_berakhir,
								tgl_tdy=:tgl_tdy
							WHERE 
						 		no_rekmed=:no_rekmed;

			UPDATE tb_tes_hijau SET analisis_mulai_hijau=:analisis_mulai,
								analisis_berakhir_hijau=:analisis_berakhir,
								tgl_tdy_hijau=:tgl_tdy
							WHERE 
						 		no_rekmed=:no_rekmed;

			UPDATE tb_ver_and_val SET verifikator_i =:verifikator_i,
										verifikator_ii =:verifikator_ii,
										validasi =:validasi 
									WHERE 
										no_rekmed=:no_rekmed; 
				";
		try 
		{

			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(":no_rekmed",$no_rekmed);
			$stmt->bindparam(":fle_jam",$fle_jam);
			$stmt->bindparam(":tgl_tdy",$tgl_tdy);
			$stmt->bindparam(":tgl_lhr",$tgl_lhr);
			$stmt->bindparam(":analisis_mulai",$analisis_mulai);
			$stmt->bindparam(":analisis_berakhir",$analisis_berakhir);
			$stmt->bindparam(":verifikator_i",$verifikator_i);
			$stmt->bindparam(":verifikator_ii",$verifikator_ii);
			$stmt->bindparam(":validasi",$validasi);

			$stmt->execute();
			return true;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;
		}
	}

	public function insert_tes($no_rekmed, $key, $data)
	{
		$sql="INSERT INTO tb_tes (no_rekmed, $key) VALUES ('$no_rekmed','$data')";

		try 
		{
			$stmt = $this->db->prepare($sql);
			$stmt->execute();

			return true;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;
		}
	}


	public function insert_hasil($no_rekmed, $key, $data)
	{
		$sql="INSERT INTO tb_hasil (no_rekmed, $key) VALUES ('$no_rekmed','$data')";

		try 
		{
			$stmt = $this->db->prepare($sql);

			$stmt->execute();
			return true;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;
		}
	}

	public function update_tes($no_rekmed, $key, $data)
	{
		$sql="UPDATE tb_tes SET $key='$data' WHERE no_rekmed=$no_rekmed";

		try 
		{
			$stmt = $this->db->prepare($sql);
			$stmt->execute();
			return true;

		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;
		}
	}


	public function update_hasil($no_rekmed, $key, $data)
	{
		$sql="UPDATE tb_hasil SET $key='$data' WHERE no_rekmed=$no_rekmed";

		try 
		{
			$stmt = $this->db->prepare($sql);

			$stmt->execute();
			return true;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;
		}
	}

	//LKS_HIJAU
	public function insert_tes_hijau($no_rekmed, $key, $data)
	{
		$sql="INSERT INTO tb_tes_hijau (no_rekmed, $key) VALUES ('$no_rekmed','$data')";

		try 
		{
			$stmt = $this->db->prepare($sql);
			$stmt->execute();

			return true;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;
		}
	}


	public function insert_hasil_hijau($no_rekmed, $key, $data)
	{
		$sql="INSERT INTO tb_hasil_hijau (no_rekmed, $key) VALUES ('$no_rekmed','$data')";

		try 
		{
			$stmt = $this->db->prepare($sql);

			$stmt->execute();
			return true;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;
		}
	}

	public function update_tes_hijau($no_rekmed, $key, $data)
	{
		$sql="UPDATE tb_tes_hijau SET $key='$data' WHERE no_rekmed=$no_rekmed";

		try 
		{
			$stmt = $this->db->prepare($sql);
			$stmt->execute();
			return true;

		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;
		}
	}


	public function update_hasil_hijau($no_rekmed, $key, $data)
	{
		$sql="UPDATE tb_hasil_hijau SET $key='$data' WHERE no_rekmed=$no_rekmed";

		try 
		{
			$stmt = $this->db->prepare($sql);

			$stmt->execute();
			return true;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;
		}
	}
	//END LKS HIJAU

	//LKS MERAH
	public function ekstrak_data_by_norekmed_tes_hasil($no_rekmed)
	{
		$sql = "SELECT * FROM tb_tes tt, tb_hasil th WHERE tt.no_rekmed=th.no_rekmed AND tt.no_rekmed=:no_rekmed";

		try 
		{
			$stmt=$this->db->prepare($sql);
			$stmt->execute(array(":no_rekmed"=>$no_rekmed));
			$editRow = $stmt->fetch(PDO::FETCH_ASSOC);

			return $editRow;	
		} 
		catch (PDOException $e) {
			echo $e->getMessage();

			return false;
		}
	}
	//END LKS MERAH

	//LKS HIJAU
	public function ekstrak_data_by_norekmed_tes_hasil_hijau($no_rekmed)
	{
		$sql = "SELECT * FROM tb_tes_hijau tth, tb_hasil_hijau thh WHERE tth.no_rekmed=thh.no_rekmed AND tth.no_rekmed=:no_rekmed";

		try 
		{
			$stmt=$this->db->prepare($sql);
			$stmt->execute(array(":no_rekmed" => $no_rekmed));
			$editRow = $stmt->fetch(PDO::FETCH_ASSOC);

			return $editRow;	
		} 
		catch (PDOException $e) {
			echo $e->getMessage();

			return false;
		}
	}
	//END LKS HIJAU

	public function ekstrak_data_by_norekmed($no_rekmed)
	{
	
		$sql="SELECT * FROM tb_pasien JOIN (tb_analyzer JOIN (tb_asal_spesimen JOIN (tb_kon_spesimen JOIN (tb_krm JOIN (tb_spesimen JOIN (tb_tabung JOIN (tb_ver_and_val JOIN (tb_vol_spesimen JOIN (tb_analyzer_hijau JOIN (tb_asal_spesimen_hijau JOIN (tb_kon_spesimen_hijau JOIN (tb_krm_hijau JOIN (tb_spesimen_hijau JOIN (tb_tabung_hijau JOIN tb_vol_spesimen_hijau ON tb_tabung_hijau.no_rekmed=tb_vol_spesimen_hijau.no_rekmed) ON tb_spesimen_hijau.no_rekmed=tb_tabung_hijau.no_rekmed) ON tb_krm_hijau.no_rekmed=tb_spesimen_hijau.no_rekmed) ON tb_kon_spesimen_hijau.no_rekmed=tb_krm_hijau.no_rekmed) ON tb_asal_spesimen_hijau.no_rekmed=tb_kon_spesimen_hijau.no_rekmed) ON tb_analyzer_hijau.no_rekmed=tb_asal_spesimen_hijau.no_rekmed) ON tb_vol_spesimen.no_rekmed=tb_analyzer_hijau.no_rekmed) ON tb_ver_and_val.no_rekmed=tb_vol_spesimen.no_rekmed) ON tb_tabung.no_rekmed=tb_ver_and_val.no_rekmed) ON tb_spesimen.no_rekmed=tb_tabung.no_rekmed) ON tb_krm.no_rekmed=tb_spesimen.no_rekmed) ON tb_kon_spesimen.no_rekmed=tb_krm.no_rekmed) ON tb_asal_spesimen.no_rekmed=tb_kon_spesimen.no_rekmed) ON tb_analyzer.no_rekmed=tb_asal_spesimen.no_rekmed) ON tb_pasien.no_rekmed = tb_analyzer.no_rekmed WHERE tb_pasien.no_rekmed=:no_rekmed";

		try 
		{
			$stmt = $this->db->prepare($sql);
			$stmt->execute(array(":no_rekmed"=>$no_rekmed));
			$editRow = $stmt->fetch(PDO::FETCH_ASSOC);

			//mengembalikan nilai
			return $editRow;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;
		}	
	}

	function config()
	{
		if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
				$uri = 'https://';
			} else {
				$uri = 'http://';
			}
				$uri .= $_SERVER['HTTP_HOST'];
				
		$config = array("site" => "$uri/LKS-Patologi/dashboard/" );	
	}

	public function delete_data_lks ($no_rekmed)
	{
		$sql = "
				DELETE FROM tb_pasien WHERE no_rekmed=:no_rekmed;
				DELETE FROM tb_tes WHERE no_rekmed=:no_rekmed;
				DELETE FROM tb_hasil WHERE no_rekmed=:no_rekmed;
				DELETE FROM tb_tes_hijau WHERE no_rekmed=:no_rekmed;
				DELETE FROM tb_hasil_hijau WHERE no_rekmed=:no_rekmed;
		";

		$stmt = $this->db->prepare($sql);
		$stmt->bindparam(":no_rekmed", $no_rekmed, PDO::PARAM_INT);
		$stmt->execute();

		return true;
	}

	public function cek_list($boge)
	{
		if($boge==0)
			{
				echo "";
			}
		else
			{
				echo "checked";
			}

		return $boge;
	}

	public function cek_list_text($boge)
	{
		if($boge=='')	
			{	
				echo "";
			}
		else
			{
				echo "checked";
			}

		return $boge;
	}

	public function cek_list_text_enable($boge)
	{
		if($boge=='')	
			{	
				echo "disabled";
			}
		else
			{
				echo "";
			}

		return $boge;
	}

	public function tampilkan_modal_delete_lks($baga)
	{
		$variable_delete = "%".$baga."%";
		$sql = "SELECT * FROM tb_pasien WHERE no_rekmed LIKE :delete_lks";

		try 
		{
			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(":delete_lks", $variable_delete);
			$stmt->execute();

			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{?>
					<div class="modal fade" id="delete-lks-<?php echo $row['no_rekmed'];?>">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title"><span class="icon-minus-sign" style="color:#da251d;"></span>&nbsp;&nbsp;Lembar Kendali Sampel</h4>
								</div>
								<div class="modal-body" style="padding-right:20px;padding-left:20px;">
									<span style="font-size: 20px;">Apakah anda yakin akan menghapus data dengan</span><br>
									<span style="color:red;font-size:16px;">No. Rekam Medis : <?php echo $row['no_rekmed']; ?></span>
								</div>
								<div class="modal-footer">
									<button class="btn btn-default" type="button" data-dismiss="modal">Batal</button>
									<button class="btn btn-danger" type="button" onClick="location='delete/?lks=<?php echo $row['no_rekmed']; ?>'">&nbsp;Hapus Data LKS</button>
								</div>
							</div>
						</div>
					</div>
			<?php }
			}
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
		}
	}

	public function cari_data_disini($baga)
	{
		$variable_cari = "%".$baga."%";
		$sql = "SELECT * FROM tb_pasien WHERE no_rekmed LIKE :cari_data OR nama_pasien LIKE :cari_data OR no_lab LIKE :cari_data OR ruangan LIKE :cari_data OR lm_puasa LIKE :cari_data OR dokter_krm LIKE :cari_data OR diagnosis LIKE :cari_data OR fle_jam LIKE :cari_data OR tgl_tdy LIKE :cari_data OR tgl_lhr LIKE :cari_data";

		try 
		{
			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(":cari_data",$variable_cari);
			$stmt->execute();

			if ($stmt->rowCount()>0) 
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
				?>
				<div class="col-xs-12 col-md-10 col-lg-6">
					<div class="search">
						<div class="content-search">
							<div class="content-mini-row">
								<img src="<?php global $config; echo $config["site"]?>assets/css/Material/logo-unhas.png" height="70px" width="70px" alt="Logo UNHAS">
								<div class="clearfix">
									<span class="kop-lks">LEMBAR KENDALI SAMPEL<br></span>
								</div>

								<div class="blur-abs">
									<button type="button" data-target="#delete-lks-<?php echo $row['no_rekmed'];?>" data-toggle="modal" class="tbl-lks"><span class="icon-remove-circle"></span>&nbsp;HAPUS DATA INI</button>
								</div>
							</div>
							<div class="content-mini-row2">
								<div class="bisa" medik="<?php echo $row['no_rekmed']; ?>">
										<label class="col-xs-6">No. Lab&nbsp;:
											<input type="text" class="form-control-view margin-bottom blur" disabled value="<?php echo $row['no_lab']; ?>">	
										</label>

										<label class="col-xs-6">Tanggal&nbsp;:
											<input type="text" class="form-control-view margin-bottom blur" disabled value="<?php echo $row['tgl_tdy']; ?>"> 
										</label>
								</div>
										
									<label class="col-xs-9">No. Rekam Medik&nbsp;:
										<input type="text" class="form-control-view margin-bottom blur" disabled value="<?php echo $row['no_rekmed']; ?>">
									</label>

									<label class="col-xs-3">Lama Puasa&nbsp;:
										<input type="text" class="form-control-view margin-bottom blur" disabled value="<?php echo $row['lm_puasa']; ?>">	
									</label>

									<label class="col-xs-12">Nama Pasien&nbsp;:
										<input type="text" class="form-control-view margin-bottom blur" disabled value="<?php echo $row['nama_pasien']; ?>">
									</label>

								<div class="bisa" medik="<?php echo $row['no_rekmed']; ?>">
										<label class="col-xs-8">Dokter Pengirim&nbsp;:
											<input type="text" class="form-control-view margin-bottom blur" disabled value="<?php echo $row['dokter_krm']; ?>">
										</label>
										
										<label class="col-xs-4">Ruangan&nbsp;:
											<input type="text" class="form-control-view margin-bottom blur" disabled value="<?php echo $row['ruangan']; ?>">
										</label>

										<label class="col-xs-12">Tanggal Lahir&nbsp;:
											<input type="text" class="form-control-view margin-bottom blur" disabled value="<?php echo $row['tgl_lhr']; ?>">
										</label>
								</div>
									<!-- //Normalkan Kembali -->
									<div class="clearfix"></div>

									<div class="absolute"></div>
									<button type="button" onclick="location='../view-data-lks/?lks=<?php echo $row['no_rekmed'];?>#LKS-Merah'" class="details-btn"><span class="icon-eye-open"></span>&nbsp;&nbsp;Details</button>
							</div>
							<div class="content-mini-row3">
								<div class="btn-lingkaran" onclick="toggle_button(<?php echo "'".$row['no_rekmed']."','".$row['no_rekmed']."','".$row['no_rekmed']."'";?>);">
									<span toggle="<?php echo $row['no_rekmed']; ?>" class="icon-chevron-down warna"></span>
								</div>
								<span foo="<?php echo $row['no_rekmed']; ?>" class="footer-lks">TAMPILKAN LEBIH BANYAK</span>
							</div>
						</div>
					</div>
				</div>
			<?php
				}
			} 
			else 
			{
		?>
			<div align="center" style="margin-top:100px;">
				<img id="logo-not" src="<?php global $config; echo $config['site']?>assets/css/Material/clipboard65.png" width="300px" height="300px" alt="not-found">
				<span id="tdk-ditemukan" align="center">data tidak ditemukan</span>
			</div>	
		<?php	
			}
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();		
		}
	}


	public function ekstrak_tube_by_name($baga)
	{
		$sql = "SELECT * FROM tb_t_details WHERE t_name =:name_tabung";

		try 
		{
			$stmt=$this->db->prepare($sql);			
			$stmt->execute(array(":name_tabung" => $baga));

			$melihat_isi = $stmt->fetch(PDO::FETCH_ASSOC);

			return $melihat_isi;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();

			return false;
		}
	}
	public function hitung_jumlah_record_lks()
	{
		$sql = "SELECT count(*) as jumlah_lks FROM tb_pasien";

		try
		{
			$stmt = $this->db->prepare($sql);
			$stmt->execute();

			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			echo $row['jumlah_lks'];
			
			return true;
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}
	}

	public function tes_detil_analisis_merah_hijau($tanggal_hari_ini, $labaga, $kondisi)
	{
		if($kondisi == 'lks_merah')
		{
			$sql="SELECT COUNT(*) as total_tes FROM tb_tes WHERE (tgl_tdy = '$tanggal_hari_ini') AND (tes_1 LIKE '$labaga' OR tes_2 LIKE '$labaga' OR tes_3 LIKE '$labaga' OR tes_4 LIKE '$labaga' OR tes_5 LIKE '$labaga' OR tes_6 LIKE '$labaga' OR tes_7 LIKE '$labaga' OR tes_8 LIKE '$labaga' OR tes_9 LIKE '$labaga' OR tes_10 LIKE '$labaga' OR tes_11 LIKE '$labaga' OR tes_12 LIKE '$labaga' OR tes_13 LIKE '$labaga' OR tes_14 LIKE '$labaga' OR tes_15 LIKE '$labaga' OR tes_16 LIKE '$labaga' OR tes_17 LIKE '$labaga' OR tes_18 LIKE '$labaga')";
		}
		else
		{
			$sql="SELECT COUNT(*) as total_tes FROM tb_tes_hijau WHERE (tgl_tdy_hijau = '$tanggal_hari_ini') AND (tes_hijau_1 LIKE '$labaga' OR tes_hijau_2 LIKE '$labaga' OR tes_hijau_3 LIKE '$labaga' OR tes_hijau_4 LIKE '$labaga' OR tes_hijau_5 LIKE '$labaga' OR tes_hijau_6 LIKE '$labaga' OR tes_hijau_7 LIKE '$labaga' OR tes_hijau_8 LIKE '$labaga' OR tes_hijau_9 LIKE '$labaga' OR tes_hijau_10 LIKE '$labaga' OR tes_hijau_11 LIKE '$labaga' OR tes_hijau_12 LIKE '$labaga' OR tes_hijau_13 LIKE '$labaga' OR tes_hijau_14 LIKE '$labaga' OR tes_hijau_15 LIKE '$labaga' OR tes_hijau_16 LIKE '$labaga' OR tes_hijau_17 LIKE '$labaga' OR tes_hijau_18 LIKE '$labaga')";
		}

		try 
		{
			$stmt = $this->db->prepare($sql);
			$stmt->execute();

			$tb_tes_nm = $this->db->prepare("SELECT nama_tes FROM tb_nama_tes WHERE kd_notasi = '$labaga'");
			$tb_tes_nm->execute();


			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount()>0)
			{
				if ($row['total_tes']>0) 
				{
					while ($tb_nama_here = $tb_tes_nm->fetch(PDO::FETCH_ASSOC))
					{
				?>
					<div class="detil-content col-xs-3 col-centered">
						<span class="title-detil">tes</span>
						<span class="title-s-detil"><?php echo $row['total_tes']; ?></span>
						<span class="title-jenis" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo $tb_nama_here['nama_tes']; ?>"><?php echo $labaga; ?></span>
					</div>
	<?php 			}
				}
			}
			return true;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;
		}
	}

	public function cek_tes_and_tes_hijau_valid($baga_no_rekmed)
	{
		$sql="SELECT * FROM tb_tes WHERE no_rekmed=:no_rekmed";

		try 
		{
			$stmt=$this->db->prepare($sql);				
			$stmt->bindparam(":no_rekmed", $baga_no_rekmed);
			$stmt->execute();

			$row=$stmt->fetch(PDO::FETCH_ASSOC);

			if ($row['no_rekmed']!=$baga_no_rekmed) 
			{
				return true;
			} 
			else 
			{
				return false;
			}
			
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();

			return false;
		}
	}
	public function cek_tes_and_tes_hijau_valid1($baga_no_rekmed)
	{
		$sql="SELECT * FROM tb_tes_hijau WHERE no_rekmed=:no_rekmed";

		try 
		{
			$stmt=$this->db->prepare($sql);				
			$stmt->bindparam(":no_rekmed", $baga_no_rekmed);
			$stmt->execute();

			$row=$stmt->fetch(PDO::FETCH_ASSOC);

			if ($row['no_rekmed']!=$baga_no_rekmed) 
			{
				return true;
			} 
			else 
			{
				return false;
			}
			
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();

			return false;
		}
	}

	public function insert_tes_hasil_and_tes_hasil_hijau($baga)
	{
		$sql = "
				INSERT INTO tb_tes (no_rekmed) VALUES (:no_rekmed);
				INSERT INTO tb_hasil (no_rekmed) VALUES (:no_rekmed);
			";
		try 
		{
			$stmt=$this->db->prepare($sql);
			$stmt->bindparam(":no_rekmed", $baga);
			$stmt->execute();

			return true;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();	

			return false;
		}
	}
	public function insert_tes_hasil_and_tes_hasil_hijau1($baga)
	{
		$sql = "
				INSERT INTO tb_tes_hijau (no_rekmed) VALUES (:no_rekmed);
				INSERT INTO tb_hasil_hijau (no_rekmed) VALUES (:no_rekmed);
			";
		try 
		{
			$stmt=$this->db->prepare($sql);
			$stmt->bindparam(":no_rekmed", $baga);
			$stmt->execute();

			return true;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();	

			return false;
		}
	}
	public function input_jenis_tes($a, $b, $c)
	{
		$sql = "INSERT INTO tb_nama_tes(kd_notasi, nama_tes, jenis_tes) VALUES (:kode_notasi, :nama_tes, :jenis_tes)";
		try 
		{
			$stmt=$this->db->prepare($sql);
			$stmt->bindparam(":kode_notasi", $a, PDO::PARAM_STR);
			$stmt->bindparam(":nama_tes", $b, PDO::PARAM_STR);
			$stmt->bindparam(":jenis_tes", $c, PDO::PARAM_STR);
			$stmt->execute();

			return true;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();			
			return false;
		}
	}
}
?>