<?php

class Users extends Zend_Db_Table
{
    protected $_name = 'users';

    public function getByPostId($postId)
    {
        $postId = intval($postId);
		
        $row = $this->fetchAll('post_id = ' . $postId);
        if (!$row) {
            throw new Exception('Fail');
        }
        return $row->toArray();
    }
}