<?php

if ( ! function_exists('insertRow')){
    function insertRow($table,$data){
        $CI =& get_instance();
        $CI->db->insert($table,$data);
        return $CI->db->insert_id();
    }
}

if ( ! function_exists('updateRow')){
    function updateRow($table,$data,$where){
        $CI =& get_instance();
        $CI->db->update($table,$data,$where);
    }
}

if ( ! function_exists('deleteRow')){
    function deleteRow($table,$where){
        $CI =& get_instance();
        $CI->db->delete($table,$where);
    }
}

if ( ! function_exists('selectRow')){
    function selectRow($table,$where){
        $CI =& get_instance();
        return $CI->db->get_where($table,$where);
    }
}
if ( ! function_exists('selectRowOrderBy')){
    function selectRowOrderBy($table,$where,$order){
        $CI =& get_instance();
        $CI->db->order_by($order["coloumn"],$order["direction"]);
        return $CI->db->get_where($table,$where);
    }
}
if ( ! function_exists('isExistsInTable')){
    function isExistsInTable($table,$where){
        $CI =& get_instance();
        $result = $CI->db->get_where($table,$where);
        if($result->num_rows() > 0){
            return 0; /*exists*/
        }
        else return 1; /*not exists*/
    }   
}
if ( ! function_exists('getMaxId')){
    function getMaxId($table,$coloumn,$where){
        $CI =& get_instance();
        $CI->db->select("max(".$coloumn.") as maxId");
        $result = $CI->db->get_where($table,$where);
        foreach($result->result() as $a){
            if($a->maxId != ""){
                return $a->maxId+1;
            }
            else return 1;
        }
    }   
}
if ( ! function_exists('get1Value')){
    function get1Value($table,$coloumn,$where){
        $CI =& get_instance();
        $CI->db->select($coloumn);
        $result = $CI->db->get_where($table,$where);
        foreach($result->result() as $a){
            return $a->$coloumn;
            break;
        }
    }
}
if ( ! function_exists('getAmount')){
    function getAmount($table,$coloumn,$where){
        $CI =& get_instance();
        $CI->db->select("count(".$coloumn.") as 'amount'");
        $CI->db->group_by($coloumn);
        $result = $CI->db->get_where($table,$where);
        return $result->num_rows(); /*karena yang penting bukan di count dari sqlnya melainkan jumlah row yang didapat dari query ini*/
    }
}
if ( ! function_exists('getTotal')){
    function getTotal($table,$coloumn,$where){
        $CI =& get_instance();
        $CI->db->select("sum(".$coloumn.") as 'total'");
        $result = $CI->db->get_where($table,$where);
        $adaTotal = 1;
        if($result->num_rows() == 0) return 0;
        foreach($result->result() as $a){
            $adaTotal = 0;
            return $a->total;
            break;
        }
        if($adaTotal == 1)
            return 0;
    }
}
if(! function_exists('selectRowBetweenDates')){
    function selectRowBetweenDates($table,$kolom_tgl,$constraint,$where){
        $CI =& get_instance();
        $CI->db->where("$kolom_tgl between '".$constraint["awal"]."' and '".$constraint["akhir"]."' ");
        return $CI->db->get_where($table,$where);
    }
}

?>