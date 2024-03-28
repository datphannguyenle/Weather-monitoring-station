<?php
	require('connectdb.php');
	
	$DataNum = $_GET["DataNum"];
	if($DataNum != 0){
		$sql = "SELECT * FROM `DataIoTProject` ORDER BY STT DESC LIMIT " . $DataNum . ",1";
		if ($result = $conn->query($sql)) {
			while ($row = $result->fetch_assoc()) {
				
				$ThietBi = $row["ThietBi"];
				$NhietDo = $row["NhietDo"];
				$DoAm = $row["DoAm"];
				$AnhSang = $row["AnhSang"];
				$ThoiGian = $row["ThoiGian"];
				

				// $nhietdo = $row["nhietdo"];
				// $doamkk = $row["doamkk"];
				// $doamdat1 = $row["doamdat1"];
				// $doamdat2 = $row["doamdat2"];
				// $k1 = $row["k1"];
				// $k2 = $row["k2"];
				// $phunsuong = $row["phunsuong"];
				// echo '[{"ThietBi":"' . $ThietBi . '","NhietDo":' . $NhietDo . ',"DoAm":' . $DoAm . ',"AnhSang":' . $AnhSang . ',"CO2":' . $CO2 . ',"Mua":' . $Mua . ', "ThoiTiet":' . $ThoiTiet . '}]';	

				// echo '[{"ThietBi":"' . $ThietBi . '","NhietDo":' . $NhietDo . ',"DoAm":' . $DoAm . ',"AnhSang":' . $AnhSang . ',"CO2":' . $CO2 . ',"Mua":' . $Mua . ', "ThoiTiet":' . $ThoiTiet . ',"ThoiGian":"' . $ThoiGian . '"}]';	
				echo '[{"ThietBi":"' . $ThietBi . '","NhietDo":' . $NhietDo . ',"DoAm":' . $DoAm . ',"AnhSang":' . $AnhSang . ',"ThoiGian":"' . $ThoiGian . '"}]';	

				//[{"IMEI":"E8DB84C53FFB","DongDien":0.05,"SoLanQuaTai":0,"K1":0,"K2":0,"TrangThai":-1,"MucNuoc":1,"NhietDo":27.39,"DoAm":100.0,"ThoiGian":"17:44:24 14/11/2021","ThoiDiemLuuDuLieu":"17:41:30 14/11/2021"}]

			}
			$result->free();		
		}
	}
	else{
		$sql = "SELECT * FROM `DataIoTProject` ORDER BY STT DESC LIMIT 1";

		if ($result = $conn->query($sql)) {
			while ($row = $result->fetch_assoc()) {
				
				$ThietBi = $row["ThietBi"];
				$NhietDo = $row["NhietDo"];
				$DoAm = $row["DoAm"];
				$AnhSang = $row["AnhSang"];
				// $CO2 = $row["CO2"];
				// $Mua = $row["Mua"];
				// $ThoiTiet = $row["ThoiTiet"];
				$ThoiGian = $row["ThoiGian"];
				

				// $nhietdo = $row["nhietdo"];
				// $doamkk = $row["doamkk"];
				// $doamdat1 = $row["doamdat1"];
				// $doamdat2 = $row["doamdat2"];
				// $k1 = $row["k1"];
				// $k2 = $row["k2"];
				// $phunsuong = $row["phunsuong"];
				// echo '[{"ThietBi":"' . $ThietBi . '","NhietDo":' . $NhietDo . ',"DoAm":' . $DoAm . ',"AnhSang":' . $AnhSang . ',"CO2":' . $CO2 . ',"Mua":' . $Mua . ', "ThoiTiet":' . $ThoiTiet . '}]';	

				// echo '[{"ThietBi":"' . $ThietBi . '","NhietDo":' . $NhietDo . ',"DoAm":' . $DoAm . ',"AnhSang":' . $AnhSang . ',"CO2":' . $CO2 . ',"Mua":' . $Mua . ', "ThoiTiet":' . $ThoiTiet . ',"ThoiGian":"' . $ThoiGian . '"}]';	
				echo '[{"ThietBi":"' . $ThietBi . '","NhietDo":' . $NhietDo . ',"DoAm":' . $DoAm . ',"AnhSang":' . $AnhSang . ',"ThoiGian":"' . $ThoiGian . '"}]';	

				//[{"IMEI":"E8DB84C53FFB","DongDien":0.05,"SoLanQuaTai":0,"K1":0,"K2":0,"TrangThai":-1,"MucNuoc":1,"NhietDo":27.39,"DoAm":100.0,"ThoiGian":"17:44:24 14/11/2021","ThoiDiemLuuDuLieu":"17:41:30 14/11/2021"}]

			}
			$result->free();		
		}
	}

	$conn->close();	
?>	
	
	
