
@extends("layout")

@section("content")

    <div class ="overlay">
        <div class="container">
            <img>
            <div class="img_close">
            </div>
            <h>
            </h>
            <p></p>

        </div>

    </div>


    <div class =content>



        <div class = container>


            <script src="{{ asset("/js/jquery-3.6.0.min.js") }}"></script>
            <div class =content_text>



                <b1>





                    <form action="{{url()->current()}}" method="get">

                        <b4>
                            <div class="block_find">
                                <input type="text" name="find" placeholder="Пошук" autocomplete="off">
                                <button type="submit"></button>
                            </div>
                        </b4></form>



                    <b5>

                        <div class = nonvisible>
                            <div class="block3" >
                                <img src="{{ asset("/image/none.svg") }}" alt="" />
                            </div>
                        </div>


                        @foreach ($blocks as $block)
                            <div class="block3" id={{ "{$block->getId()}"}}>

                                <img_path>{{ asset("/image/{$block->getImage()}") }}</img_path>
                                <txt>{{str_replace("\n","<br>",$block->getInfo())}}</txt>

                                <img src="{{ asset("/image/{$block->getImage()}") }}" alt="" />
                                <p>{{"{$block->getName()}"}}<p/>
                            </div>
                        @endforeach

                        <div class = nonvisible>
                            <div class="block3" >
                                <img src="{{ asset("/image/none.svg") }}" alt="" />
                            </div>
                        </div>
                        <div class = nonvisible>
                            <div class="block3" >
                                <img src="{{ asset("/image/none.svg") }}" alt="" />
                            </div>
                        </div>


                    </b5>

                </b1>

            </div>
        </div>
    </div>
    </div>



    <script>
        $( ".block3" ).click(function () {

            $(".nonvisible" ).addClass("visible");
            $(".visible" ).removeClass("nonvisible");

            $current = $(this).attr("id");
            $head = $("#" + $current + " txt").text();
            $name = $("#" + $current + " p").text();
            $img_path = $("#" + $current + " img_path").text();


            $(".overlay" ).addClass("active");
            $("body" ).addClass("lock1");
            $(".overlay p" ).html("<br>"+$head);
            $(".overlay h" ).html("<br>"+$name);
            $(".overlay img" ).attr("src", $img_path);


        });


        $( ".img_close" ).click(function () {
            $(".visible" ).addClass("nonvisible");
            $(".nonvisible" ).removeClass("visible");

            $(".block5" ).removeClass("active");
            $(".block5" ).addClass("nonactive");
            $(".overlay" ).removeClass("active");
            $("body" ).removeClass("lock1");

            $(".overlay h" ).empty();
        });
    </script>

@endsection
