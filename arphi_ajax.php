<?php 
	//Create by ARIF RAGIL PAMUNGKAS
	session_start();
    // $id_user = $_SESSION['id_user']
    $id_user = 'USR00001';
	$target = 1;
    require_once("controllers/class.CtrlGlobal.php");
    $objCtrl = new CtrlGlobal();

    $type = $_POST['type'];
    $id = $_POST['id'];
    $contact_name = $_POST['contact_name'];
    $contact_num = $_POST['contact_num'];
    $broadcast_number = $_POST['broadcast_number'];
    $message = $_POST['message'];
    $des_num = $_POST['des_num'];
    // $type = $_GET['type'];

    if($type == 'cekNo'){
        $sql = "select contact_name as name from contact where contact_number = '".$id."'";
        $data = $objCtrl->getName($sql);

    // $data = 'ARIF RAGIL P';
    }elseif($type == 'cekContact'){
        $sql ="select id_contact as name from contact where contact_number = '".$contact_num."' or contact_name = '".$contact_name."'";
        $data = $objCtrl->getName($sql);
    }elseif($type == 'createContact'){
         $max_id = $objCtrl->getMasterID('CNT','contact','id_contact');
        $objCtrl->insert('contact', array(
            'id_contact' => $max_id,
            'id_user' => $id_user,
            'contact_name' => $contact_name,
            'contact_number' => $contact_num,
            'logtime' => gmdate("Y/m/d h:i:s")
        ));
        $data = 1;//Berhasil
    }elseif($type == 'broadcast'){
        $temp = explode('#', $broadcast_number);
        $length = sizeof($temp);
        for ($i=0; $i < $length; $i++) { 
        $max_id = $objCtrl->getTransactionID('MSG','message','id_message');
        $res = explode(':', $temp[$i]);
            if($res[1] != ''){
                $objCtrl->insert('message', array(
                    'id_message' => $max_id,
                    'id_user' => $id_user,
                    'no_hp' => $res[1],
                    'text_message' => $message,
                    'status' => 0,
                    'type' => 1,
                    'dari' => 0,
                    'logtime' => date("Y/m/d h:i:s")
                ));
            }
        }
        $data = 1;//Berhasil
    }elseif($type == 'sentMessage'){
        $max_id = $objCtrl->getTransactionID('MSG','message','id_message');
        $objCtrl->insert('message', array(
            'id_message' => $max_id,
            'id_user' => $id_user,
            'no_hp' => $des_num,
            'text_message' => $message,
            'status' => 0,
            'type' => 0,
            'dari' => 1,
            'logtime' => gmdate("Y/m/d h:i:s")
        ));
        $data = 1;//Berhasil
    }elseif ($type == 'scheduleMessage') {
        $data = 1;
    }elseif ($type == 'sentCredit') { 
        if($id == '8ds9'){
            $credit = '1400';
            $price = '100000';
        }elseif($id=='98ds'){
            $credit = '2900';
            $price = '200000';
        }elseif($id=='a86s'){
            $credit = '4200';
            $price = '300000';
        }elseif($id=='a97s'){
            $credit = '5700';
            $price = '400000';
        }elseif($id=='as4'){
            $credit = '10000';
            $price = '700000';
        }
        $price_transfer = $price + $objCtrl->generateNumber(4);
        $max_id = $objCtrl->getTransactionID('CRD','credit','id_credit');
        $objCtrl->insert('credit', array(
            'id_credit' => $max_id,
            'id_user' => $id_user,
            'type_credit' => $id,
            'credit' => $credit,
            'price' => $price,
            'price_transfer' => $price_transfer,
            'logtime' => gmdate("Y/m/d h:i:s")
        ));
        // $data = 1;//Berhasil
        $data = number_format($price_transfer,0,'.','.').'#'.$credit.'#Belum Transfer#'.gmdate("Y/m/d").'#fa fa-hand-o-down#'.$max_id.'#'.$objCtrl->generateNumber(4);
    }elseif($type == 'getConfirmed'){
        $objCtrl->update('credit',array(
            'status' => 1),array('id_credit' => $id));
    }
    echo $data;
    //Ajax Keren/Ntabs
?>