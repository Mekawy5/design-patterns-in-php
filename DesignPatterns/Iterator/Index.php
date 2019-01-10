<?php

namespace Patterns\Iterator;


use Patterns\AbstractIndex;

class Index extends AbstractIndex
{

    /*
     * in this example we are using the built-in ArrayIterator in PHP and iterating an array
     * using some options (reverse - filtered), you can create your own iterator using
     * interface Iterator for another data structures or aggregates and implement it the
     * way your project needs.
     */

    function index()
    {
        // create movies list  "aggregate/collection"
        $movies = new Movies();
        // fill the aggregate with Movie objects
        $movies->add(new Movie('Ponyo', 'G'));
        $movies->add(new Movie('Kill Bill', 'R'));
        $movies->add(new Movie('The Santa Clause', 'PG'));
        $movies->add(new Movie('Guardians of the Galaxy', 'PG-13'));
        $movies->add(new Movie('Reservoir dogs', 'R'));
        $movies->add(new Movie('Sharknado', 'PG-13'));
        $movies->add(new Movie('Back to the Future', 'PG'));

        /*
         * iterate the aggregate (Movies), we didn't use getIterator to define using
         * default ArrayIterator because Movies extends from IteratorAggregate so
         * it is also extending Traversable. That is how PHP knows to magically
         * use the getIterator method in the below code without you explicitly calling it.
         */
//        foreach ($movies as $movie) {
//            echo ' - ' . $movie->getTitle();
//        }

        // iterate using rate filter
//        foreach ($movies->rated('PG') as $movie) {
//            echo ' - ' . $movie->getTitle();
//        }

        // using reverse iterator
        foreach ($movies->reverse() as $movie) {
            echo ' - ' . $movie->getTitle();
        }
    }
}