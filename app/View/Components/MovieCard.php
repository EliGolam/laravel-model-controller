<?php

namespace App\View\Components;

use DateTime;
use Illuminate\View\Component;

class MovieCard extends Component
{
    public $movie;
    public $id;
    public $title;
    public $original_title;
    public $nationality;
    public $year;
    public $vote;

    public function __construct($movie)
    {
        $this->movie = $movie;

        $this->id = $movie['id'];
        $this->title = $movie['title'];
        $this->original_title = $movie['original_title'];
        $this->nationality = $movie['nationality'];
        $this->vote = $movie['vote'];

        $date = DateTime::createFromFormat("Y-m-d", $movie['date']);
        $this->year = $date->format('Y');

    }


    public function render()
    {
        return view('components.movie-card');
    }
}
