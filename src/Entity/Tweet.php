<?php
namespace bz0\Twitter\Entity;

class Tweet
{
    /**
     * @var string
     */
    public $q;
    /**
     * @var string
     */
    public $geocode;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $locale;
    /**
     * @var string
     */
    public $result_type;
    /**
     * @var int
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