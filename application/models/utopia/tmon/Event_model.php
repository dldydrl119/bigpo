<?php


class Event_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        //        $this->load->library('session');
        $this->load->database();
        $this->reserve_max_num = 9;
    }

    public function eventListData($page = 1)
    {
        $limit = $this->per_page;
        $offset = $limit * ($page - 1);

        $sql = "SELECT @rownum:=@rownum+1 num, idx, name,memo, reg_date from utopia_tmon_event, (SELECT @rownum:= {$offset}) TMP ORDER BY idxs
              limit {$limit} offset {$offset}";
        return $this->db->query($sql)->result();
    }

    public function eventTotalNum()
    {

        $sql = "select count(*) count From utopia_tmon_event ";
        $count = $this->db->query($sql)->row();

        return $count->count;
    }

    public function eventAddData($insert_data)
    {


        //        $sql="SELECT idxs FROM history_menu order by idxs DESC LIMIT 1";
        //        $idxs = $this->db->query($sql)->row()->idxs + 1;

        $sql = "SELECT idxs FROM utopia_tmon_event order by idxs DESC LIMIT 1";
        $obj_idxs = $this->db->query($sql)->row();
        if (!$obj_idxs) {
            $idxs = 1;
        } else {
            $idxs = $obj_idxs->idxs + 1;
        }

        $insert_data['idxs'] = $idxs;
        $result = $this->db->insert('utopia_tmon_event', $insert_data);
        if ($result) {
            return array('return' => true);
        } else {
            return array('return' => false);
        }
    }

    public function eventData($idx)
    {
        $array = array($idx);
        $sql = "SELECT *
            FROM utopia_tmon_event WHERE idx = ?";
        return $this->db->query($sql, $array)->row();
    }

    public function eventEditData($update, $idx)
    {

        $this->db->where('idx', $idx);
        $result = $this->db->update('utopia_tmon_event', $update);

        if ($result) {
            return array('return' => true);
        } else {
            return array('return' => false);
        }
    }

    public function eventdel($idx)
    {
        $array = array($idx);
        $sql = "DELETE FROM utopia_tmon_event WHERE idx = ?";
        $result = $this->db->query($sql, $array);
        return array('return' => $result);
    }

    public function eventCount()
    {
        $sql = "SELECT COUNT(*) count  FROM utopia_tmon_event";
        return $this->db->query($sql)->row()->count;
    }

    public function eventOrder($idxs, $idx)
    {
        for ($i = 0; $i < count($idxs); $i++) {
            $sql = "UPDATE utopia_tmon_event SET idxs = ? WHERE idx = ?";
            $array = array($idxs[$i], $idx[$i]);
            $result = $this->db->query($sql, $array);
        }
        return array('return' => $result);
    }
}
