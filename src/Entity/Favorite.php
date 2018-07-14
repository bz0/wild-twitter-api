<?php
namespace bz0\Twitter\Entity;

class Favorite
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
    public $since_id;
    /**
     * @var int
     */
    public $max_id;
    /**
     * @var string
     */
    public $include_entities;
    
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