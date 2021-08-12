<?php
namespace App\classes;

use PDO;

class form extends database{
    const URLROOT="http://localhost/blog/views";
    public function setForm(){
         $nom = $_POST["nom"];$prenom = $_POST["prenom"];$email = $_POST["email"];$q0 = $_POST["package"];
         $q1 = $_POST["package-q1"];$q1bis = $_POST["package-bis"];$q1ter = $_POST["package-ter"];$q2 = $_POST["package-q2"];
         $q3 = $_POST["package-q3"];$q4 = $_POST["package-q4"];$q5 = $_POST["package-q5"];$q6 = $_POST["package-q6"];$q7 = $_POST["package-q7"];
          $q8 = $_POST["package-q8"];
          $q9 = $_POST["package-q9"];
          $q10 = $_POST["package-q10"];
         $q11 = $_POST["package-q11"];
         $q12 = $_POST["package-q12"];
         $q13 = $_POST["package-q13"];
         $q14 = $_POST["package-q14"];
         $q15 = $_POST["package-q15"];
         $q16 = $_POST["package-q16"];
         $q17 = $_POST["package-q17"];
         $q18 = $_POST["package-q18"];
         $q19 = $_POST["package-q19"];
         $q20 = $_POST["package-q20"];
         $q21 = $_POST["package-q21"];
         $q22 = $_POST["package-q22"];
         $q23 = $_POST["package-q23"];
         $date = date("Y-m-d");


        $sql="INSERT INTO form (nom,prenom,email,q0,q1,q1bis,q1ter,q2,	q3,	q4,	q5,q6,q7,q8,q9,q10,q11,	q12,q13,q14,q15,q16,q17,q18,q19,q20,q21,q22,q23,date_add) VALUES
                      ('$nom','$prenom','$email','$q0','$q1','$q1bis','$q1ter','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$date')";
         $sth = $this->conn->prepare($sql);
         $sth->execute();
         $last_id = $this->conn->lastInsertId();
         $id =  base64_encode($last_id);
         $s= uniqid();
        header("location:".self::URLROOT."/reponse.php?id=$id&$s");
    }
    public function getResultById($id){
        $sql="SELECT * FROM form WHERE id=".$id;
        $sth = $this->conn->query($sql);
        $sth->setFetchMode(PDO::FETCH_OBJ);
        $resp = $sth->fetch();

        $ing_ia =0;$ing_ml =0;$ing_pl =0;$ing_cv =0;$lead_dev_ia =0;$cdp_ia_mkt =0;$cdp_ia_bq =0;
        $cdp_ia_sc =0;$data_sci =0;$cons_bigdata =0;$res_ethique_ia =0;$juriste_ia =0;$ds_int =0;
        $iot_designer =0;$chatbot_master =0;$dev_python =0;$dev_ia =0;$data_eng =0;$data_manager =0;
        $dev_ml =0;$data_analyst =0;$cdp_rd_ia =0;

        switch ($resp->q4) {
            case "a":
                $ing_ia = $ing_ia+2;
                $ing_ml = $ing_ml+2;
                $ing_pl = $ing_pl+2;
                $ing_cv = $ing_cv+2;
                $chatbot_master = $chatbot_master+2;
                $dev_python = $dev_python+2;
                $dev_ia = $dev_ia+2;
                $data_eng = $data_eng+2;
                $dev_ml = $dev_ml+2;
                break;
            case "b":
                $lead_dev_ia = $lead_dev_ia+2;
                $cons_bigdata = $cons_bigdata+2;
                $data_manager = $data_manager+2;
                $data_analyst = $data_analyst+2;
                break;
            case "c":
                $lead_dev_ia = $lead_dev_ia+2;
                $cons_bigdata = $cons_bigdata+2;
                $ds_int = $ds_int+2;
                $data_manager = $data_manager+2;
                break;
            case "d":
                $cons_bigdata = $cons_bigdata+2;
                $chatbot_master = $chatbot_master+2;
                $dev_python = $dev_python+2;
                $dev_ia = $dev_ia+2;
                $dev_ml = $dev_ml+2;
                $data_analyst = $data_analyst+2;
                $cdp_rd_ia = $cdp_rd_ia+2;
                $iot_designer = $iot_designer+2;
                break;
            case "e":
                $juriste_ia=$juriste_ia+2;
                break;
            case "f":
                $cdp_ia_mkt=$cdp_ia_mkt+2;
                break;
            case "g":
                $cdp_ia_bq=$cdp_ia_bq+2;
                break;
            case "h":
                $cdp_ia_sc=$cdp_ia_sc+2;
                break;
            case "i":
                $data_sci=$data_sci+2;
                $data_eng=$data_eng+2;
                break;
            case "j":
                $res_ethique_ia=$res_ethique_ia+2;
                break;
            case "k":
                $data_manager=$data_manager+2;
                break;
            case "l":
                $cdp_rd_ia=$cdp_rd_ia+2;
                break;

        }
        switch ($resp->q5) {
            case "a":
                $ing_ia = $ing_ia+1;
                $ing_ml = $ing_ml+1;
                $ing_pl = $ing_pl+1;
                $ing_cv = $ing_cv+1;
                $cdp_ia_bq = $cdp_ia_bq+1;
                $cdp_ia_sc = $cdp_ia_sc+1;
                $data_sci = $data_sci+1;
                $ds_int = $ds_int+1;
                $dev_python =$dev_python+1;
                $dev_ia =$dev_ia+1;
                $data_eng =$data_eng+1;
                $data_manager =$data_manager+1;
                $dev_ml =$dev_ml+1;
                $data_analyst =$data_analyst+1;
                $cdp_rd_ia =$cdp_rd_ia+1;
                break;
            case "b":
                $ing_ia = $ing_ia+1;
                $ing_ml = $ing_ml+1;
                $ing_pl = $ing_pl+1;
                $ing_cv = $ing_cv+1;
                $lead_dev_ia =$lead_dev_ia +1;
                $cdp_ia_bq =$cdp_ia_bq+1;
                $cdp_ia_sc =$cdp_ia_sc+1;
                $data_sci =$data_sci+1;
                $ds_int =$ds_int+1;
                $iot_designer =$iot_designer+1;
                $chatbot_master =$chatbot_master+1;
                $dev_python =$dev_python+1;
                $dev_ia =$dev_ia+1;
                $data_eng =$data_eng+1;
                $dev_ml =$dev_ml+1;
                $cdp_rd_ia =$cdp_rd_ia+1;
                break;
            case "c":
                $cdp_ia_mkt = $cdp_ia_mkt+1;
                break;
            case "d":
                $lead_dev_ia = $lead_dev_ia+1;
                $cdp_ia_sc = $cdp_ia_sc+1;
                $cons_bigdata = $cons_bigdata+1;
                $data_manager = $data_manager+1;
                $data_analyst = $data_analyst+1;
                break;
            case "e":
                $cons_bigdata=$cons_bigdata+1;
                $res_ethique_ia =$res_ethique_ia+1;
                $juriste_ia =$juriste_ia+1;
                break;
        }
        switch ($resp->q6) {
            case "a":
                $ing_ia = $ing_ia+2;
                $ing_ml = $ing_ml+2;
                $ing_pl = $ing_pl+2;
                $ing_cv = $ing_cv+2;
                $iot_designer =$iot_designer+2;
                $chatbot_master =$chatbot_master+2;
                $dev_python =$dev_python+2;
                $dev_ia =$dev_ia+2;
                $cdp_rd_ia =$cdp_rd_ia+2;
                break;
            case "b":
                $data_sci =$data_sci+2;
                $cons_bigdata =$cons_bigdata+2;
                $data_eng = $data_eng+2;
                $data_manager = $data_manager+2;
                break;
            case "c":
                $lead_dev_ia = $lead_dev_ia+2;
                $cdp_ia_mkt =$cdp_ia_mkt+2;
                $cdp_ia_bq =$cdp_ia_bq+2;
                $cdp_ia_sc =$cdp_ia_sc+2;
                $ds_int =$ds_int+2;
                $data_analyst =$data_analyst+2;
                break;
            case "d":
                $res_ethique_ia = $res_ethique_ia+2;
                $juriste_ia = $juriste_ia+2;
                break;
        }
        switch ($resp->q7) {
            case "a":
                $ing_ia = $ing_ia+1;
                $ing_ml = $ing_ml+1;
                $ing_pl = $ing_pl+1;
                $ing_cv = $ing_cv+1;
                $lead_dev_ia = $lead_dev_ia+1;
                $data_sci = $data_sci+1;
                $iot_designer =$iot_designer+1;
                $chatbot_master =$chatbot_master+1;
                $dev_python =$dev_python+1;
                $dev_ia =$dev_ia+1;
                $data_eng =$data_eng+1;
                $dev_ml =$dev_ml+1;
                $cdp_rd_ia =$cdp_rd_ia+1;
                break;
            case "b":
                $lead_dev_ia =$lead_dev_ia+1;
                $cdp_ia_mkt =$cdp_ia_mkt+1;
                $cdp_ia_bq =$cdp_ia_bq+1;
                $cdp_ia_sc =$cdp_ia_sc+1;
                $cons_bigdata =$cons_bigdata+1;
                $res_ethique_ia =$res_ethique_ia+1;
                $juriste_ia =$juriste_ia+1;
                $ds_int =$ds_int+1;
                $data_manager =$data_manager+1;
                $data_analyst =$data_analyst+1;
                $cdp_rd_ia =$cdp_rd_ia+1;
                break;
        }
        switch ($resp->q13) {
            case "a":
                $ing_pl = $ing_pl+1;
                $lead_dev_ia =$lead_dev_ia+1;
                $cdp_ia_mkt =$cdp_ia_mkt+1;
                $cdp_ia_bq =$cdp_ia_bq+1;
                $cdp_ia_sc =$cdp_ia_sc+1;
                $data_sci =$data_sci+1;
                $ds_int =$ds_int+1;
                break;
            case "b":
                $ing_pl = $ing_pl+1;
                $lead_dev_ia =$lead_dev_ia+1;
                $cdp_ia_mkt =$cdp_ia_mkt+1;
                $cdp_ia_bq =$cdp_ia_bq+1;
                $cdp_ia_sc =$cdp_ia_sc+1;
                $cons_bigdata =$cons_bigdata+1;
                $ds_int =$ds_int+1;
                $data_manager =$data_manager+1;
                $data_analyst =$data_analyst+1;

                break;
            case "c":
                $ing_ia =$ing_ia+1;
                $ing_ml =$ing_ml+1;
                $ing_pl =$ing_pl+1;
                $ing_cv =$ing_cv+1;
                $cdp_ia_mkt =$cdp_ia_mkt+1;
                $cdp_ia_bq =$cdp_ia_bq+1;
                $cdp_ia_sc =$cdp_ia_sc+1;
                $data_sci =$data_sci+1;
                $cons_bigdata =$cons_bigdata+1;
                $res_ethique_ia =$res_ethique_ia+1;
                $juriste_ia =$juriste_ia+1;
                $ds_int =$ds_int+1;
                $iot_designer =$iot_designer+1;
                $chatbot_master =$chatbot_master+1;
                $dev_python =$dev_python+1;
                $dev_ia =$dev_ia+1;
                $data_eng =$data_eng+1;
                $data_manager =$data_manager+1;
                $dev_ml =$dev_ml+1;
                $data_analyst =$data_analyst+1;

                break;
            case "d":
                $ing_ia =$ing_ia+1;
                $ing_ml =$ing_ml+1;
                $ing_cv =$ing_cv+1;
                $data_sci =$data_sci+1;
                $iot_designer =$iot_designer+1;
                $chatbot_master =$chatbot_master+1;
                $dev_python =$dev_python+1;
                $dev_ia =$dev_ia+1;
                $data_eng =$data_eng+1;
                $dev_ml =$dev_ml+1;
                $cdp_rd_ia =$cdp_rd_ia+1;
                break;
            case "e":
                $cons_bigdata=$cons_bigdata+1;
                break;
        }
        switch ($resp->q16) {
            case "a":
                $res_ethique_ia =$res_ethique_ia+1;
                $juriste_ia =$juriste_ia+1;
                $ds_int =$ds_int+1;
                $iot_designer =$iot_designer+1;
                $chatbot_master =$chatbot_master+1;
                $data_manager =$data_manager+1;
                $data_analyst =$data_analyst+1;
                $cdp_rd_ia =$cdp_rd_ia+1;
                break;
            case "b":
                $ing_ia =$ing_ia+1;
                $ing_ml =$ing_ml+1;
                $ing_pl =$ing_pl+1;
                $ing_cv =$ing_cv+1;
                $data_sci =$data_sci+1;
                $cons_bigdata =$cons_bigdata+1;
                $iot_designer =$iot_designer+1;
                $chatbot_master =$chatbot_master+1;
                $dev_python =$dev_python+1;
                $dev_ia =$dev_ia+1;
                $data_eng =$data_eng+1;
                $dev_ml =$dev_ml+1;
                break;
            case "c":
                $lead_dev_ia =$lead_dev_ia+1;
                $cdp_ia_mkt =$cdp_ia_mkt+1;
                $cdp_ia_bq =$cdp_ia_bq+1;
                $cdp_ia_sc =$cdp_ia_sc+1;
                $cons_bigdata =$cons_bigdata+1;
                $res_ethique_ia =$res_ethique_ia+1;
                $juriste_ia =$juriste_ia+1;
                $ds_int =$ds_int+1;
                $data_manager =$data_manager+1;
                $data_analyst =$data_analyst+1;
                break;
            case "d":
                $cdp_ia_mkt =$cdp_ia_mkt+1;
                $cdp_ia_bq =$cdp_ia_bq+1;
                $res_ethique_ia =$res_ethique_ia+1;
                $juriste_ia =$juriste_ia+1;
                break;
        }
        switch ($resp->q8) {
            case "a":
                $data_sci =$data_sci+2;
                $cons_bigdata =$cons_bigdata+2;
                $ds_int =$ds_int+2;
                $data_eng =$data_eng+2;
                break;
            case "b":
                $data_sci = $data_sci+2;
                $data_manager = $data_manager+2;
                break;
            case "c":
                $cdp_ia_mkt =$cdp_ia_mkt+2;
                $cdp_ia_bq =$cdp_ia_bq+2;
                $cdp_ia_sc =$cdp_ia_sc+2;
                $cons_bigdata =$cons_bigdata+2;
                $ds_int =$ds_int+2;
                $data_manager = $data_manager+2;
                $data_analyst= $data_analyst+2;
                break;
            case "d":
                $ing_ia =$ing_ia+2;
                $ing_ml =$ing_ml+2;
                $ing_pl =$ing_pl+2;
                $ing_cv =$ing_cv+2;
                $ds_int =$ds_int+2;
                $iot_designer =$iot_designer+2;
                $chatbot_master =$chatbot_master+2;
                $dev_python =$dev_python+2;
                $dev_ia =$dev_ia+2;
                $dev_ml =$dev_ml+2;
                $cdp_rd_ia =$cdp_rd_ia+2;
                break;
            case "e":
                $juriste_ia=$juriste_ia+2;
                $res_ethique_ia=$res_ethique_ia+2;
                break;

        }
        switch ($resp->q9) {
            case "a":
                $ing_ia = $ing_ia+1;
                $ing_ml = $ing_ml+1;
                $lead_dev_ia =$lead_dev_ia+1;
                $dev_ml =$dev_ml+1;
                $cdp_rd_ia =$cdp_rd_ia+1;
                $dev_ia =$dev_ia+1;
                break;
            case "b":
                $ing_pl = $ing_pl+1;
                $lead_dev_ia =$lead_dev_ia+1;
                $chatbot_master = $chatbot_master+1;
                break;
            case "c":
                $data_sci =$data_sci+1;
                $cons_bigdata =$cons_bigdata+1;
                $dev_python =$dev_python+1;
                $data_eng =$data_eng+1;
                $data_manager =$data_manager+1;
                break;
            case "d":
                $dev_ml =$dev_ml+1;
                $ing_ia =$ing_ia+1;
                $ing_ml =$ing_ml+1;
                $cdp_rd_ia =0;
                break;
            case "e":
                $dev_ml =$dev_ml+1;
                $ing_ia =$ing_ia+1;
                $ing_ml =$ing_ml+1;
                $lead_dev_ia =$lead_dev_ia+1;
                $dev_ia =$dev_ia+1;
                $cdp_rd_ia =$cdp_rd_ia+1;
                break;
            case "f":
                $iot_designer =$iot_designer+1;
                break;
            case "g":
                $ing_cv =$ing_cv+1;
                $cdp_rd_ia =$cdp_rd_ia+1;
                break;
            case "h":
                $res_ethique_ia =$res_ethique_ia+1;
                $juriste_ia =$juriste_ia+1;
                break;
            case "i":
                $cdp_ia_mkt =$cdp_ia_mkt+1;
                $cdp_ia_bq =$cdp_ia_bq+1;
                $cdp_ia_sc =$cdp_ia_sc+1;
                $data_analyst =$data_analyst+1;
                break;

        }
        switch ($resp->q14) {
            case "a":
                $ing_ia = $ing_ia+1;
                $ing_ml = $ing_ml+1;
                $ing_pl = $ing_pl+1;
                $ing_cv = $ing_cv+1;
                $iot_designer = $iot_designer+1;
                $chatbot_master = $chatbot_master+1;
                $dev_ml = $dev_ml+1;

                break;
            case "b":
                $ing_ia =$ing_ia+1;
                $ing_ml =$ing_ml+1;
                $ing_pl =$ing_pl+1;
                $ing_cv =$ing_cv+1;
                $lead_dev_ia =$lead_dev_ia+1;
                $iot_designer =$iot_designer+1;
                $chatbot_master =$chatbot_master+1;
                $dev_python =$dev_python+1;
                $dev_ia =$dev_ia+1;
                $data_eng =$data_eng+1;
                $dev_ml =$dev_ml+1;
                $data_analyst =$data_analyst+1;
                $cdp_rd_ia =$cdp_rd_ia+1;
                break;
            case "c":
                $lead_dev_ia =$lead_dev_ia+1;
                $data_sci =$data_sci+1;
                $dev_python =$dev_python+1;
                $dev_ia =$dev_ia+1;
                break;
            case "d":
                $cdp_ia_mkt =$cdp_ia_mkt+1;
                $cdp_ia_bq =$cdp_ia_bq+1;
                $cdp_ia_sc =$cdp_ia_sc+1;
                $data_sci =$data_sci+1;
                $cons_bigdata =$cons_bigdata+1;
                $ds_int =$ds_int+1;
                $data_manager =$data_manager+1;
                break;
            case "e":
                $cdp_ia_mkt =$cdp_ia_mkt+1;
                $cdp_ia_bq =$cdp_ia_bq+1;
                $cdp_ia_sc =$cdp_ia_sc+1;
                $cons_bigdata =$cons_bigdata+1;
                $res_ethique_ia =$res_ethique_ia+1;
                $juriste_ia =$juriste_ia+1;
                $ds_int =$ds_int+1;
                $data_manager =$data_manager+1;
                break;
        }
        switch ($resp->q15) {
            case "a":
                $ing_ia =$ing_ia+2;
                $ing_ml =$ing_ml+2;
                $ing_pl =$ing_pl+2;
                $ing_cv =$ing_cv+2;
                $lead_dev_ia =$lead_dev_ia+2;
                $data_sci =$data_sci+2;
                $iot_designer =$iot_designer+2;
                $chatbot_master =$chatbot_master+2;
                $dev_python =$dev_python+2;
                $dev_ia =$dev_ia+2;
                $data_eng =$data_eng+2;
                $dev_ml =$dev_ml+2;
                $cdp_rd_ia =$cdp_rd_ia+2;
                break;
            case "b":
                $cdp_ia_mkt =$cdp_ia_mkt+2;
                $cdp_ia_bq =$cdp_ia_bq+2;
                $cdp_ia_sc =$cdp_ia_sc+2;
                $cons_bigdata =$cons_bigdata+2;
                $ds_int =$ds_int+2;
                $data_manager =$data_manager+2;
                $data_analyst =$data_analyst+2;
                break;
            case "c":
                $res_ethique_ia =$res_ethique_ia+2;
                $juriste_ia =$juriste_ia+2;
                break;
        }
        switch ($resp->q17) {
            case "a":
                $res_ethique_ia =$res_ethique_ia+1;
                $juriste_ia =$juriste_ia+1;
                $cdp_ia_bq =$cdp_ia_bq+1;
                $iot_designer =$iot_designer+1;
                break;
            case "b":
                $cdp_ia_mkt =$cdp_ia_mkt+1;
                $cons_bigdata =$cons_bigdata+1;
                $dev_python =$dev_python+1;
                $data_analyst = $data_analyst+1;
                break;
            case "c":
                $cdp_ia_bq =$cdp_ia_bq+1;
                $cdp_ia_sc =$cdp_ia_sc+1;
                $res_ethique_ia =$res_ethique_ia+1;
                $juriste_ia =$juriste_ia+1;
                $data_manager =$data_manager+1;
                break;
            case "d":
                $ing_ia =$ing_ia+1;
                $ing_ml =$ing_ml+1;
                $ing_pl =$ing_pl+1;
                $ing_cv =$ing_cv+1;
                $lead_dev_ia =$lead_dev_ia+1;
                $data_sci =$data_sci+1;
                $ds_int =$ds_int+1;
                $chatbot_master =$chatbot_master+1;
                $dev_ia =$dev_ia+1;
                $data_eng =$data_eng+1;
                $dev_ml =$dev_ml+1;
                $cdp_rd_ia =$cdp_rd_ia+1;
                break;
            case "e":
                $ing_ia =$ing_ia+1;
                $ing_ml =$ing_ml+1;
                $ing_pl =$ing_pl+1;
                $ing_cv =$ing_cv+1;
                $lead_dev_ia =$lead_dev_ia+1;
                $cdp_ia_mkt =$cdp_ia_mkt+1;
                $data_sci =$data_sci+1;
                $cons_bigdata =$cons_bigdata+1;
                $ds_int =$ds_int+1;
                $iot_designer =$iot_designer+1;
                $chatbot_master =$chatbot_master+1;
                $dev_python =$dev_python+1;
                $data_eng =$data_eng+1;
                $data_manager =$data_manager+1;
                $dev_ml =$dev_ml+1;
                $data_analyst =$data_analyst+1;
                $cdp_rd_ia =$cdp_rd_ia+1;
                break;
            case "f":
                $ing_ia =$ing_ia+1;
                $ing_ml =$ing_ml+1;
                $lead_dev_ia =$lead_dev_ia+1;
                $cdp_ia_bq =$cdp_ia_bq+1;
                $cdp_ia_sc =$cdp_ia_sc+1;
                $data_sci =$data_sci+1;
                $chatbot_master =$chatbot_master+1;
                $dev_ia =$dev_ia+1;
                $data_eng =$data_eng+1;
                $dev_ml =$dev_ml+1;
                $cdp_rd_ia =$cdp_rd_ia+1;
                break;
            case "g":
                $ing_pl =$ing_pl+1;
                $ing_cv =$ing_cv+1;
                $cdp_ia_mkt =$cdp_ia_mkt+1;
                $iot_designer =$iot_designer+1;
                $chatbot_master =$chatbot_master+1;
                $data_manager =$data_manager+1;
                break;
        }
        switch ($resp->q18) {
            case "a":
                $res_ethique_ia =$res_ethique_ia+1;
                break;
            case "b":
                $ing_ml =$ing_ml+1;
                $ing_cv =$ing_cv+1;
                $iot_designer =$iot_designer+1;
                $dev_ml =$dev_ml+1;
                break;
            case "c":
                $ing_pl =$ing_pl+1;
                $juriste_ia =$juriste_ia+1;
                $chatbot_master =$chatbot_master+1;
                break;
            case "d":
                $lead_dev_ia =$lead_dev_ia+1;
                $ds_int =$ds_int+1;
                break;
            case "e":
                $dev_python =$dev_python+1;
                $data_eng =$data_eng+1;
                $data_manager =$data_manager+1;
                break;
            case "f":
                $cdp_ia_mkt =$cdp_ia_mkt+1;
                $cdp_ia_sc =$cdp_ia_sc+1;
                $data_sci =$data_sci+1;
                $cons_bigdata =$cons_bigdata+1;
                $data_analyst =$data_analyst+1;
                break;
            case "g":
                $cdp_ia_bq =$cdp_ia_bq+1;
                $dev_ia =$dev_ia+1;
                $cdp_rd_ia =$cdp_rd_ia+1;
                break;
        }
        switch ($resp->q1bis) {
            case "a":
                $cdp_ia_mkt =$cdp_ia_mkt+3;
                $cdp_ia_bq =$cdp_ia_bq+3;
                $cdp_ia_sc =$cdp_ia_sc+3;
                $cons_bigdata =$cons_bigdata+3;
                $data_manager =$data_manager+3;
                break;
            case "b":
                $ing_ia =$ing_ia+3;
                $ing_ml =$ing_ml+3;
                $ing_pl =$ing_pl+3;
                $ing_cv =$ing_cv+3;
                $lead_dev_ia =$lead_dev_ia+3;
                $data_sci =$data_sci+3;
                $ds_int =$ds_int+3;
                $iot_designer =$iot_designer+3;
                $chatbot_master =$chatbot_master+3;
                $dev_python =$dev_python+3;
                $data_eng =$data_eng+3;
                $dev_ml =$dev_ml+3;
                $cdp_rd_ia =$cdp_rd_ia+3;
                break;
            case "d":
                $iot_designer =$iot_designer+3;
                $chatbot_master =$chatbot_master+3;
                $dev_python =$dev_python+3;
                $dev_ia =$dev_ia+3;
                break;
            case "e":
                $dev_ia =$dev_ia+3;
                break;
            case "f":
                $lead_dev_ia =$lead_dev_ia+3;
                $data_sci =$data_sci+3;
                break;
            case "g":
                $ing_ia =$ing_ia+3;
                $ing_ml =$ing_ml+3;
                $ing_pl =$ing_pl+3;
                $ing_cv =$ing_cv+3;
                $data_sci =$data_sci+3;
                $data_eng =$data_eng+3;
                $dev_ml =$dev_ml+3;
                $cdp_rd_ia =$cdp_rd_ia+3;
                break;
        }
        switch ($resp->q1ter) {
            case "a":
                $ing_ia =$ing_ia+3;
                $ing_ml =$ing_ml+3;
                $ing_pl =$ing_pl+3;
                $ing_cv =$ing_cv+3;
                $lead_dev_ia =$lead_dev_ia+3;
                $ds_int =$ds_int+3;
                $dev_ml =$dev_ml+3;
                break;
            case "b":
                $cdp_ia_mkt =$cdp_ia_mkt+3;
                $cdp_ia_bq =$cdp_ia_bq+3;
                $cdp_ia_sc =$cdp_ia_sc+3;
                $cons_bigdata =$cons_bigdata+3;
                $data_manager =$data_manager+3;
                $data_analyst =$data_analyst+3;
                break;
            case "c":
                $ing_ia =$ing_ia+3;
                $ing_ml =$ing_ml+3;
                $ing_pl =$ing_pl+3;
                $ing_cv =$ing_cv+3;
                $lead_dev_ia =$lead_dev_ia+3;
                $data_sci =$data_sci+3;
                $cons_bigdata =$cons_bigdata+3;
                $ds_int =$ds_int+3;
                $iot_designer =$iot_designer+3;
                $chatbot_master =$chatbot_master+3;
                $dev_python =$dev_python+3;
                $dev_ia =$dev_ia+3;
                $data_eng =$data_eng+3;
                $dev_ml =$dev_ml+3;
                $cdp_rd_ia =$cdp_rd_ia+3;
                break;
            case "d":
                $ing_ia =$ing_ia+3;
                $ing_ml =$ing_ml+3;
                $ing_pl =$ing_pl+3;
                $ing_cv =$ing_cv+3;
                $lead_dev_ia =$lead_dev_ia+3;
                $data_sci =$data_sci+3;
                $ds_int =$ds_int+3;
                $data_eng =$data_eng+3;
                $dev_ml =$dev_ml+3;
                break;
            case "e":
                $res_ethique_ia =$res_ethique_ia+3;
                $data_analyst =$data_analyst+3;
                break;
            case "f":
                $juriste_ia =$juriste_ia+3;
                break;
            case "g":
                $iot_designer =$iot_designer+3;
                $chatbot_master =$chatbot_master+3;
                break;
            case "h":
                $ing_pl =$ing_pl+3;
                $ing_cv =$ing_cv+3;
                $cdp_rd_ia =$cdp_rd_ia+3;
                break;
        }
        return ['<a href="https://www.aivancity.ai/fr/fiche-metier-lingenieur-en-intelligence-artificielle-ou-aigineer" rel="noopener noreferrer" target="_blank">Ingénieur IA</a>'=>$ing_ia,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-ingenieur-machine-learning-ou-deep-learning" rel="noopener noreferrer" target="_blank">Ingénieur Machine Learning</a>'=>$ing_ml,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-ingenieur-en-programmation-linguistique-computational-linguist" rel="noopener noreferrer" target="_blank">Ingénieur en Programmation linguistique</a>'=>$ing_pl,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-lingenieur-computer-vision" rel="noopener noreferrer" target="_blank">Ingénieur computer vision</a>'=>$ing_cv,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-lead-developpeur-intelligence-artificielle" rel="noopener noreferrer" target="_blank">Lead developpeur IA</a>'=>$lead_dev_ia,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-chef-de-projet-ia-marketing" rel="noopener noreferrer" target="_blank">Chef de projet IA pour marketing</a>'=>$cdp_ia_mkt,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-chef-de-projet-ia-en-banque-et-finance" rel="noopener noreferrer" target="_blank">Chef de projet IA pour banque et finance</a>'=>$cdp_ia_bq,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-chef-de-projet-ia-supply-chain" rel="noopener noreferrer" target="_blank">Chef de projet IA pour supply chain</a>'=>$cdp_ia_sc,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-data-scientist" rel="noopener noreferrer" target="_blank">Data Scientist</a>'=>$data_sci,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-consultant-big-data" rel="noopener noreferrer" target="_blank">Consultant big data</a>'=>$cons_bigdata,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-responsable-de-lethique-en-intelligence-artificielle" rel="noopener noreferrer" target="_blank">Responsable éthique de l’IA</a>'=>$res_ethique_ia,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-juriste-en-data-et-en-intelligence-artificielle" rel="noopener noreferrer" target="_blank">Juriste Data et IA</a>'=>$juriste_ia,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-responsable-des-systemes-digitaux-intelligents" rel="noopener noreferrer" target="_blank">Directeur des systèmes intelligents</a>'=>$ds_int,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-iot-designer" rel="noopener noreferrer" target="_blank">IoT Designer</a>'=>$iot_designer,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-chatbot-master" rel="noopener noreferrer" target="_blank">Chatbot Master</a>'=>$chatbot_master,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-developpeur-phyton" rel="noopener noreferrer" target="_blank">Développeur Python</a>'=>$dev_python,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-developpeur-machine-learning" rel="noopener noreferrer" target="_blank">Développeur IA / ML</a>'=>$dev_ia,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-data-engineer" rel="noopener noreferrer" target="_blank">Data engineer</a>'=>$data_eng,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-data-manager-data-management-officer" rel="noopener noreferrer" target="_blank">Data manager</a>'=>$data_manager,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-developpeur-machine-learning" rel="noopener noreferrer" target="_blank">Développeur IA / ML</a>'=>$dev_ml,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-business-data-analyst" rel="noopener noreferrer" target="_blank">Business data analyst</a>'=>$data_analyst,
            '<a href="https://www.aivancity.ai/fr/fiche-metier-chef-de-projet-de-recherche-et-developpement-rd-en-intelligence-artificielle" rel="noopener noreferrer" target="_blank">Chef de projet R&amp;D IA</a>'=>$cdp_rd_ia];
    }
    public function getQuestionById($id)
    {
        $sql = "SELECT * FROM form WHERE id=" . $id;
        $sth = $this->conn->query($sql);
        $sth->setFetchMode(PDO::FETCH_OBJ);
        return $sth->fetch();
    }
}

?>