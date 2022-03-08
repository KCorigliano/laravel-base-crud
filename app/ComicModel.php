<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComicModel extends Model
{
    protected $title;
    protected $description;
    protected $thumb;
    protected $price;
    protected $series;
    protected $sale_date;
    protected $type;
}
