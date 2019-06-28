<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = ['title','author','heading','publisher','Book number','keyword','Bib ID','ISBN number','ISSN number'];
}
