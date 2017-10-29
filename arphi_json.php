<?php 
	//Create by ARIF RAGIL PAMUNGKAS
    date_default_timezone_set('Asia/Jakarta');
	session_start();
	$target = 1;
    require_once("controllers/class.CtrlGlobal.php");
    $objCtrl = new CtrlGlobal();
    $id_user = 'USR00001';
    $type = $_POST['type'];
    // $type = $_GET['type'];
    $no_hp = $_POST['no_hp'];
    $message = $_POST['message'];
    $usr_api = $_POST['usr_api'];
    $pass_api = $_POST['pass_api'];
    if($type == 'contact'){
        $sql = "select * from contact limit 5";
        $row = $objCtrl->GetGlobalFilter($sql);
        foreach ($row as $item) {
            $arr_data = array(
                'contact_name' => $item['contact_name'],
                'contact_no' => $item['contact_number']
                );
            $data[] = $arr_data;
        }
    }elseif ($type == 'inbox') {
        $sql = "select i.*, c.contact_name from inbox i, contact c where c.contact_number = i.number and c.id_user = '".$id_user."'";
        $row = $objCtrl->GetGlobalFilter($sql);
        foreach ($row as $item) {
            $arr_data = array(
            'id_inbox' => $item['id_inbox'],
            'contact_name' => $item['contact_name'],
            'number' => $item['number'],
            'text_message' => $item['text_message'],
            'logtime' => $item['logtime']
            );
            $data[] = $arr_data;
        }
    }elseif ($type == 'outbox') {
        $sql = "select m.*, c.contact_name from message m, contact c where c.contact_number = m.no_hp and c.id_user = '".$id_user."' and status = '2'";
        $row = $objCtrl->GetGlobalFilter($sql);
        foreach ($row as $item) {
            if($item['type'] == 0) $typesms = 'Standart';
            elseif($item['type'] == 1) $typesms = 'Broadcast';
                else $typesms = 'Schedule';
            if($item['dari'] == 0) $dari = 'Web';
                elseif($item['dari'] == 1) $dari = 'API';
            $arr_data = array(
            'id_message' => $item['id_message'],
            'id_user' => $item['id_user'],
            'text_message' => $item['text_message'],
            'no_hp' => $item['no_hp'],
            'contact_name' => $item['contact_name'],
            'typesms' => $typesms,
            'dari' => $dari,
            'logtime' => $item['logtime']
            );
            $data[] = $arr_data;
        }
    }elseif ($type == 'credit') {
        $sql = "select * from credit where id_user = '".$id_user."'";
        $row = $objCtrl->GetGlobalFilter($sql);
        foreach ($row as $item) {
            if($item['status'] == '0'){
                $status = 'Belum Transfer'; 
                $icon = 'fa fa-hand-o-down';
            }elseif($item['status'] == '1'){
                $status = 'Sudah Transfer'; 
                $icon = 'fa fa-credit-card-alt';
            }elseif($item['status'] == '2'){
                $status = 'Verified';
                $icon = 'fa fa-check';
            }

            $arr_data = array(
                'id_credit' => $item['id_credit'],
                'type_credit' => $item['type_credit'],
                'credit' => $item['credit'],
                'price' => $item['price'],
                'price_transfer' => $item['price_transfer'],
                'status' => $status,
                'icon' => $icon,
                'logtime' => $item['logtime']

                );
            $data[] = $arr_data;
        }
    }

    if($data != ""){
        echo '{"Data" : '. json_encode($data).'}';
    }
    if($res != ""){
      echo $res;
    }
              
?>