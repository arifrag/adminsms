<?php
/*
class to handle control of hotel
@autor ochyid
*/

if($target=="1")
	require_once('dbs/class.Database.php');
else 
	require_once('../dbs/class.Database.php');
	
class CtrlGlobal extends Database {	
   	//call insert methods to save data  in database
	function insert($table,$arFieldValues) {
		try {
			$objDB = new Database();
			$sql=$objDB->insert2($table, $arFieldValues);
	   } catch (Exception $e) {
		  echo "Query failure" . NL;
		  echo $e->getMessage();
	    }
   }
   
	//call update methods to save data  in database
	function update($table, $arFieldValues, $arConditions) {
		try {
				$objDB = new Database();
				$sql=$objDB->update2($table, $arFieldValues, $arConditions);
		} catch (Exception $e) {
			  echo "Query failure" . NL;
			  echo $e->getMessage();
		}
	}
	 //call delete methods to delete data in database
	function delete($table,$arFieldValues) {
		try {
			$objDB = new Database();
			$sql=$objDB->delete($table, $arFieldValues);
	   } catch (Exception $e) {
		  echo "Query failure" . NL;
		  echo $e->getMessage();
	    }
   }
	
	function GetGlobalFilter($sql){
		try {
		 $objDB = new Database();
		} catch (Exception $e) {
		 echo $e->getMessage();
		 exit(1);
		}
		try {
			$data=$objDB->select($sql);
		} catch (Exception $e) {
		 echo $e->getMessage();
		}
		return $data;
	}
	
   	function getName($sql){
		try {
		 $objDB = new Database();
		} catch (Exception $e) {
		 echo $e->getMessage();
		 exit(1);
		}
		$name="";
		try {
			$data=$objDB->select($sql);
		} catch (Exception $e) {
		 echo $e->getMessage();
		}
		foreach($data as $item):
			$name=$item['name'];
		endforeach;
		return $name;
	}

	function UserAll($sql){
		try {
		 $objDB = new Database();
		} catch (Exception $e) {
		 echo $e->getMessage();
		 exit(1);
		}
		try {
			$data=$objDB->insertAll($sql);
		} catch (Exception $e) {
		 echo $e->getMessage();
		}
		return $data;
	}
	//OTHER FUNCTION
	function findFirstAndLastDay($anyDate)
	{
		//$anyDate            =    '2009-08-25';    // date format should be yyyy-mm-dd
		list($yr,$mn,$dt)    =    explode('-',$anyDate);    // separate year, month and date
		$timeStamp            =    mktime(0,0,0,$mn,1,$yr);    //Create time stamp of the first day from the give date.
		$firstDay            =     date('d/m/Y',$timeStamp);    //get first day of the given month
		list($y,$m,$t)        =     explode('-',date('Y-m-t',$timeStamp)); //Find the last date of the month and separating it
		$lastDayTimeStamp    =    mktime(0,0,0,$m,$t,$y);//create time stamp of the last date of the give month
		$lastDay            =    date('d/m/Y',$lastDayTimeStamp);// Find last day of the month
		$arrDay                =    array("$firstDay","$lastDay"); // return the result in an array format.
	   
		return $arrDay;
	} 
	function generateNumber($length = 10) {
	    $characters = '0123456789';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
	function nicetime($date) {
	    if(empty($date)) {
	        return "No date provided";
	    }
	    
	    $periods         = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
	    $lengths         = array("60","60","24","7","4.35","12","10");
	    
	    $now             = time();
	    $unix_date         = strtotime($date);
	    
	       // check validity of date
	    if(empty($unix_date)) {    
	        return "Bad date";
	    }

	    // is it future date or past date
	    if($now > $unix_date) {    
	        $difference     = $now - $unix_date;
	        $tense         = "ago";
	        
	    } else {
	        $difference     = $unix_date - $now;
	        $tense         = "from now";
	    }
	    
	    for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
	        $difference /= $lengths[$j];
	    }
	    
	    $difference = round($difference);
	    
	    if($difference != 1) {
	        $periods[$j].= "s";
	    }
	    
	    return "$difference $periods[$j] {$tense}";
	}
	function generateRandomString($length = 10) {
	    $characters = '0123456789ARIFRAGILPAMUNGKAS';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
	function sentMailer($email, $name, $message) {
		// Menambahkan atau menginclude auto load PHPMailer
		require 'phpmailer/PHPMailerAutoload.php';
		// Membuat instance PHPMailer
		$mail = new PHPMailer;
		// Checking penggunaan SMTP
		$mail->isSMTP();
		// Mengaktifkan mode debugging PHPMailer
		// 0 = untuk Production
		// 1 = Pesan yang ditampilkan untuk sistem client
		// 2 = Pesan yang ditampilkan mencakup sistem php dan juga kesalahan konfigurasi
		// $mail->SMTPDebug = 2;
		// HTML debugging (Hapus jika berada di Production server)
		// $mail->Debugoutput = 'html';
		// Setting hostname, bisa juga menggunakan Ip Address Shared Hosting Pembaca
		$mail->Host = "mail.dewigandhalia.co.id";
		// Port yang dipakai, Umumnya 25
		$mail->Port = 25;
		// Autentifikasi SMTP
		$mail->SMTPAuth = true;
		// Username akun email yang berada di host
		$mail->Username = "info@dewigandhalia.co.id";
		// Password akun email yang berada host
		$mail->Password = "bismillah";
		// Set konfigurasi email berasal. (Akan ditampilkan di email masuk pengguna)
		$mail->setFrom('info@dewigandhalia.co.id', 'Dewi Ghandalia');
		// Set alternatif untuk reply-to (Ditampilkan di email masuk pengguna)
		// $mail->addReplyTo('info@fintag.id', 'Fintag Maritim');
		// Set alamat email yang akan dikirim (Diambil secara dinamis melalui PHP. Sesuaikan !)
		$mail->addAddress($email, $name);
		// Subject
		$mail->Subject = 'Dewi Ghandalia';
		// Template body email yang akan dikirim
		$mail->msgHTML($message);

		// Siap kirim !
		if (!$mail->send()) {
			echo "Gagal !". $mail->ErrorInfo;
		} else {
		//	echo "Email Terkirim";
		}
	}
	//END OTHER FUNCTION 
	
	//MAKING ID
	function getTransactionID($kode_id,$tabel,$primary_field) {
		$month=date("m");
		$year= date("Y");
		global $cfg;
		$objDB = new Database();
		try {
			$query="SELECT max(substr($primary_field,-5,5)) as $primary_field FROM $tabel where substr($primary_field,5,7) = '".$month."/".$year."'";
			//call select methods to retreive max id Order 00001	 
			$data=$objDB->select($query);
			foreach($data as $item):
				$xid=$item[$primary_field];
				if(!isset($xid)) {
					$maxid="$kode_id/".$month."/".$year."/00001";
			    	} else {
					$maxid="$kode_id/".$month."/".$year."/".str_pad($xid+1, 5, "0", STR_PAD_LEFT);	

				}
			endforeach;
		} catch (Exception $e) {
			echo "Query failure" . NL;
			echo $e->getMessage();
		}
		 return $maxid;
		//return $query;
	}
	function getMasterID($kode_id,$tabel,$primary_field){
		global $cfg;
		$objDB = new Database();
		try {
			$query="SELECT max(substr($primary_field,-5,5)) as $primary_field FROM $tabel ";
			$data=$objDB->select($query);
			foreach($data as $item):
				$xid=$item[$primary_field];
				if(!isset($item['id_user'])) {
					$maxid="$kode_id/00001";
			    	} else {
					$maxid="$kode_id/".str_pad($item['id_user']+1, 5, "0", STR_PAD_LEFT);	
				}
			endforeach;
		} catch (Exception $e) {
			echo "Query failure" . NL;
			echo $e->getMessage();
		}
		return $maxid;
	}
	//END MAKING ID
	//Select Option
	function selGlobal($idx,$fldname) {
			$objDB = new Database();

			try {
				print "<select name=\"$fldname\" id=\"$fldname\" $xsubmit class=\"form-control\" onChange=\"getBank();\" required>\n";
				print ("<option value=''>--Pilih Bank--</option>\n");
				$data=$objDB->select("select * from bank");
				foreach($data as $item):
				$selc = "";
					if ($idx==$item['id_bank']) $selc = " selected";
					print "<option value=\"".$item['id_bank'].'#'.$item['no_rekening'].'#'.$item['atas_nama']."\" $selc>".stripslashes($item['nama_bank'])."</option>\n";
				endforeach;
				print "</select>\n";
			} catch (Exception $e) {
					echo $e->getMessage();
			}
	}
	//End Select

}	
 ?>
