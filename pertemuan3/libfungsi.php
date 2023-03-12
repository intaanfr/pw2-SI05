<?php

$nilai_rata = ($_POST['nilai_uas'] + $_POST['nilai_tugas'] + $_POST['nilai_uts'])/3;
$lulus = kelulusan($nilai_rata);
$grade = grade($nilai_rata);
$predikat = predikat($grade);


	function kelulusan($nilai_rata){
		if ($nilai_rata >= 55) {
			return "Lulus";
		} else {
			return "Tidak Lulus";
		}       
	};
	
	function grade($nilai_rata) {
		if($nilai_rata <= 100 && $nilai_rata >=84){
			return "A";
		} elseif($nilai_rata <= 84 && $nilai_rata >=69){
			return "B";
		} elseif($nilai_rata <= 69 && $nilai_rata >=55){
			return "C";
		} elseif ($nilai_rata <= 55 && $nilai_rata >=35){
			return "D";
		} elseif ($nilai_rata <= 35){
			return "E";
		} else {
			return "I";
		}
	};
	
	function predikat($grade){
		switch ($grade){
			case "A":
				return 'Sangat Memuaskan';
			case "B":
				return 'Memuaskan';
			case "C":
				return 'Cukup';
			case "D":
				return 'Kurang';
			case "E":
				return 'Sangat Kurang';
			default:
				return 'Tidak ada';

		}

	}
?>