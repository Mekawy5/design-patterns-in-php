<?php

namespace Patterns\Iterator;


class Movie
{
    /*
     * this class for creating movie object
     */
    protected $title;
    protected $rating;

    /**
     * Movie constructor.
     * @param $title
     * @param $rating
     */
    public function __construct($title, $rating)
    {
        $this->title = $title;
        $this->rating = $rating;
    }

    /**
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return int $rating
     */
    public function getRating()
    {
        return $this->rating;
    }


}