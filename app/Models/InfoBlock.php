<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class InfoBlock extends Block
{

    use HasFactory;

    private $info;

    public function __construct($id, $name, $image, $info){
        parent::__construct($id, $name, $image);
        $this->info = $info;
    }

    public function getInfo()
    {
        return $this->info;
    }

    public function __destruct()
    {
    }

}
