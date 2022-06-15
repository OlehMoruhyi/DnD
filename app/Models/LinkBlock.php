<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class LinkBlock extends Block
{


    use HasFactory;

    private $link;

    public function __construct($id, $name, $image, $link){
        parent::__construct($id, $name, $image);
        $this->link = $link;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function __destruct()
    {

    }



}
