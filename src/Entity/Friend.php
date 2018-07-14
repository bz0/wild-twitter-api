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
     * @var int
     */
    public $stringify_ids;
    /**
     * @var string
     */
    public $count;
    
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