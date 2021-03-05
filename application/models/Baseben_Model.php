<?php
class Baseben_Model extends CI_Model
{

    function get($data)
    {
        $db = $this->load->database('default', true);
        if (isset($data['db'])) {
            $db = $this->load->database($data['db'], true);
        }

        if (isset($data['key_name']) && isset($data['key'])) {
            $db->group_start();
            $db->where($data['key_name'], $data['key']);
            $db->group_end();
        }

        if (isset($data['select']) && is_array($data['select'])) {
            $db->select($data['select']);
        }

        if (isset($data['join']) && is_array($data['join'])) {

            foreach($data['join'] as $key => $value) {
                if(count($data['join'][$key]) > 2) {
                    $db->join($data['join'][$key][0], $data['join'][$key][1], $data['join'][$key][2]);
                } else {
                    $db->join($data['join'][$key][0], $data['join'][$key][1]);
                }
            }
        }

        if (isset($data['where']) && is_array($data['where'])) {
            $db->group_start();
            if (count($data['where']) > 0) {
                $db->where($data['where']);
            }
            $db->group_end();
        }

        if (isset($data['or_where']) && is_array($data['or_where'])) {
            $db->group_start();
            $db->or_where($data['or_where']);
            $db->group_end();
        }

        if (isset($data['like']) && is_array($data['like'])) {
            $db->group_start();

            foreach($data['like'] as $key => $value) {
                $db->like($data['like'][0]);

                if($key > 0) {
                    $db->or_like($data['like'][$key]);
                }
            }

            $db->group_end();
        }

        if (isset($data['where_in']) && is_array($data['where_in'])) {
            $db->group_start();
            
            foreach($data['where_in'] as $key => $array) {
                $db->where_in($data['where_in'][$key][0], $data['where_in'][$key][1]);
                
                if($key > 0) {
                    $db->or_where_in($data['where_in'][$key][0], $data['where_in'][$key][1]);
                }
            }
            

            $db->group_end();
        }

        if (isset($data['where_not_in']) && is_array($data['where_not_in'])) {
            $db->group_start();
            $db->where_not_in($data['where_not_in'][0], $data['where_not_in'][1]);
            $db->group_end();
        }

        if (isset($data['group_by']) && is_array($data['group_by'])) {
            $db->group_by($data['group_by']);
        }

        if (isset($data['order_by']) && is_array($data['order_by'])) {
            $db->order_by($data['order_by'][0], $data['order_by'][1]);
        }

        if (isset($data['limit'])) {
            $offset = 0;
            if (isset($data['offset'])) {
                $offset = $data['offset'];
            }
            $db->limit($data['limit'], $offset);
        }

        return $db->get($data['table_name'])->result_array();
    }

    function getNumRows($table_name)
    {
        $query = $this->db->get($table_name);
        return $query->num_rows();
    }

    function getField($data)
    {
        return $this->db->get($data['table_name'])->list_fields();
    }

    function insert($data)
    {
        $db = $this->load->database('default', true);
        if (isset($data['db'])) {
            $db = $this->load->database($data['db'], true);
            unset($data['db']);
        }
        $temp_data = $data;
        unset($data['table_name']);
        return $db->insert($temp_data['table_name'], $data);
    }
    function insert_id($data)
    {
        $db = $this->load->database('default', true);
        if (isset($data['db'])) {
            $db = $this->load->database($data['db'], true);
            unset($data['db']);
        }
        $temp_data = $data;
        unset($data['table_name']);
        $db->insert($temp_data['table_name'], $data);
        return $db->insert_id();
    }

    function update($data)
    {
        $db = $this->load->database('default', true);
        if (isset($data['db'])) {
            $db = $this->load->database($data['db'], true);
            unset($data['db']);
        }

        $temp_data = $data;

        if(isset($data['where']) && is_array($data['where'])) {
            $db->where($temp_data['where']);
        } 

        if(isset($data['key_name']) && isset($data['key'])) {
            if(!empty($data['key_name']) && !empty($data['key'])) {
                $db->where($temp_data['key_name'], $temp_data['key']);
            }
        }

        unset($data['table_name']);
        unset($data['key_name']);
        unset($data['key']);
        unset($data['where']);

        return $db->update($temp_data['table_name'], $data);
    }

    function delete($data)
    {
        $db = $this->load->database('default', true);
        if (isset($data['db'])) {
            $db = $this->load->database($data['db'], true);
            unset($data['db']);
        }
        return $db->where($data['key_name'], $data['key'])->delete($data['table_name']);
    }
}
