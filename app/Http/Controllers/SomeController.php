<?php

namespace App\Http\Controllers;

use App\Models\InfoBlock;
use App\Models\LinkBlock;
use Illuminate\Http\Request;
use App\Models\dbcon;

class SomeController extends Controller
{
    public function home(){
        return view("pages/home");
    }

    public function info(){
        return view("pages/info");
    }

    public function lib1($chapter)
    {

        if (in_array($chapter, ['character', 'inventory'])) {

            $db = (dbcon::getInstance())->connect();



            $query = "SELECT * FROM `$chapter`";
            $result = mysqli_query($db, $query);
            $cards = [];

            //Створюємо масив що складається з асоціативних масивів
            while ($card = mysqli_fetch_assoc($result)) {
                $cards[] = $card;
            }


            $blocks = [];

            foreach ($cards as $block) {
                $obj = new LinkBlock($block["id"], $block["name"], $block["image"], $block["link"]);
                $blocks[] = $obj;
            }

            return view("pages/link_lib")->with("blocks", $blocks);

        }
        else{

            $this->lib2($chapter);

        }

    }

    public function lib2($table, Request $request)    {

        $db = (dbcon::getInstance())->connect();

        if ($request["find"]){
            $find = $request["find"];

            $query = "SELECT * FROM `$table` where `name` like '%$find%'";
        }
        else{
            $query = "SELECT * FROM `$table`";
        }


        $result = mysqli_query($db, $query);
        $cards = [];

        //Створюємо масив що складається з асоціативних масивів
        while ($card = mysqli_fetch_assoc($result)) {
            $cards[] = $card;
        }


        $blocks=[];




        foreach ($cards as $block) {
            $obj = new InfoBlock($block["id"], $block["name"], $block["image"], $block["info"]);
            $blocks[] = $obj;
        }

        return view("pages/lib")->with("blocks", $blocks);

    }



    public function lib3()
    {

        return view("pages/rand_lib");

    }





}

