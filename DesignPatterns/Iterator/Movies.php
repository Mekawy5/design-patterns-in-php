<?php

namespace Patterns\Iterator;


use Patterns\Iterator\Iterators\ReverseArrayIterator;

class Movies implements \IteratorAggregate
{
    /*
     * this class which creates $list of movies (collection of movies),
     *  as known in this pattern as IteratorAggregate.
     * then creates our iterators using this $list.
     */

    protected $list = [];

    public function add(Movie $movie){
        $this->list[] = $movie;
    }


    /**
     * creates \ArrayIterator using my $list.
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->list);
    }

    /*
     * creates an iterator using filter for ratings, by selecting only movies
     * with the passed rating then apply default array iterator on it.
     */
    public function rated($rating)
    {
        $filtered = array_filter($this->list, function ($item) use ($rating){
            return $item->getRating() === $rating;
        });
        return new \ArrayIterator($filtered);
    }

    /**
     * @return ReverseArrayIterator
     * taking the movies array $list and apply array_reverse() on it the pass it
     * to the default ArrayIterator so iterating it will be reversed.
     */
    public function reverse()
    {
        return new ReverseArrayIterator($this->list);
    }
}