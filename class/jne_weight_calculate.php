<?php

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

/* -----------------------------
 * Class untuk penanganan yang berhubungan dengan JNE
 * Version: 1.0
 * -----------------------------
 */


class jneWeightCalculate {

	public function weightCount($getWeight) {

		// Mengambil total berat belanja
		$totalWeight = round($getWeight, 1);

		// Ambil angka dibelakang koma dari total berat belanja
		$limitWeight = explode('.', $totalWeight);

		// Default batas berat 1 Kg JNE, untuk mendapatkan berat 1 Kg apabila total belanja dibawah 1 Kg
		$firstLimit = 1.3;


		// Default batas berat toleransi dibelakang koma dari JNE
		// Jika ada perubahan dari JNE, tinggal disesuaikan
		$limitTolerance = 3;

		// Cek apabila total berat belanja dibawah 1 Kg
		if ( $totalWeight < $firstLimit ) {

			// Berat masih masuk 1 Kg
			$weight = 1;

		} else {

			// Proses pembulatan
			// Apabila angka di belakang koma dibawah 3, bulatkan kebawah. Apabila diatas 2 bulatkan angka keatas dan simpan ke variabel $weight
			$weight = ($limitWeight[1] <= $limitTolerance) ? floor($totalWeight) : ceil($totalWeight); 

		}

		return $weight;

	}

}

$jneWeight = new jneWeightCalculate;