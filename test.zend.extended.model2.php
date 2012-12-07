<?php

class Model2 extends Zend_Db_Table
{
    protected $_name = 'model2';

    public function getByPostId($id)
    {
        $id = intval($id);
		
        $row = $this->fetchAll('id = ' . $id);
        if (!$row) {
            throw new Exception('fail');
        }
        return $row->toArray();
    }
}