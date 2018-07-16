<?php
namespace bz0\Twitter\Entity;

class Friendship
{
    /**
     * @var string
     */
    public $user_id;
    /**
     * @var string
     */
    public $screen_name;
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