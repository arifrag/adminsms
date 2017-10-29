<?php 
	//Create by ARIF RAGIL PAMUNGKAS
	session_start();
	$target = 1;
    require_once("controllers/class.CtrlGlobal.php");
    $objCtrl = new CtrlGlobal();

    $type = $_POST['type'];
    // $type = $_GET['type'];
    $no_hp = $_POST['no_hp'];
    $message = $_POST['message'];
    $usr_api = $_POST['usr_api'];
    $pass_api = $_POST['pass_api'];
    $schedule = $_POST['schedule'];
    if($type != ''){
    $sql = "select id_user as name from user_login where pass_api = '".$pass_api."' and usr_api = '".$usr_api."'";
    $getApi = $objCtrl->getName($sql);
        if($getApi != ""){
            if($type == 'orgnl9283'){
            	$id_user = $getApi;
                $max_id = $objCtrl->getTransactionID('MSG','message','id_message');
            	$objCtrl->insert('message', array(
                    'id_message' => $max_id,
                    'id_user' => $id_user,
                    'no_hp' => $no_hp,
                    'text_message' => $message,
                    'status' => 0,
                    'type' => 0,
                    'dari' => 1,
                    'date_time' => gmdate("Y/m/d h:i:s")
                ));
                $res = 1;//Berhasil
            }elseif($type == 'brdcst8329'){//broadcast
                $id_user = $getApi;
                $temp = explode('#', $no_hp);
                $length = sizeof($temp);
                for ($i=0; $i < $length; $i++) { 
                $max_id = $objCtrl->getTransactionID('MSG','message','id_message');
                    $objCtrl->insert('message', array(
                        'id_message' => $max_id,
                        'id_user' => $id_user,
                        'no_hp' => $temp[$i],
                        'text_message' => $message,
                        'status' => 0,
                        'type' => 1,
                        'dari' => 1,
                        'date_time' => gmdate("Y/m/d h:i:s")
                    ));
                }
                $res = 1;//Berhasil
            }elseif($type == 'schdle4565'){
            	$id_user = $getApi;
                $max_id = $objCtrl->getTransactionID('MSG','message','id_message');
            	$objCtrl->insert('message', array(
                    'id_message' => $max_id,
                    'id_user' => $id_user,
                    'no_hp' => $no_hp,
                    'text_message' => $message,
                    'status' => 0,
                    'type' => 2,
                    'schedule' => $schedule,
                    'dari' => 1,
                    'date_time' => gmdate("Y/m/d h:i:s")
                ));
                $res = 1;//Berhasil
            }
        }else{
            $res = 2; //APi salah
        }
    }else{
        $res = 3; //Type belum dikirim
    }
    echo $type."sdf";
    if($res != ""){
      echo $res;
    }
              
?>