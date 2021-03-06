<?php
namespace bz0\Twitter\Entity;

class Friend
{
    /**
     * @var int
     */
    public $user_id;
    /**
     * @var string
     */
    public $screen_name;
    /**
     * @var int
     */
    public $cursor;
    /**
     * @var boolean
     */
    public $include_user_entities;
    /**
     * @var string
     */
    public $count;
    /**
     * @var boolean
     */
    public $skip_status;
    
    /**
     * @return array
     */
    public function toArray()
    {
        $array = [];
        foreach (get_object_vars($this) as $key => $value) {
            $array[$key] = $value;
        }
        
        return $array;
    }
}