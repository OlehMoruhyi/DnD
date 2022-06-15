
@extends("layout")

@section("content")
    <div class ="overlay">
        <div class="container">
            <img src="{{ asset("/image/workshop/dice.svg") }}">
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






                    <b5>

                        <div class="block3" id='1'>


                            <txt>4</txt>

                            <img src="{{ asset("/image/workshop/dice.svg") }}" alt="" />
                            <p>D4<p/>
                        </div>

                        <div class="block3" id='2'>


                            <txt>6</txt>

                            <img src="{{ asset("/image/workshop/dice.svg") }}" alt="" />
                            <p>D6<p/>
                        </div>

                        <div class="block3" id='3'>


                            <txt>8</txt>

                            <img src="{{ asset("/image/workshop/dice.svg") }}" alt="" />
                            <p>D8<p/>
                        </div>

                        <div class="block3" id='4'>


                            <txt>10</txt>

                            <img src="{{ asset("/image/workshop/dice.svg") }}" alt="" />
                            <p>D10<p/>
                        </div>

                        <div class="block3" id='5'>


                            <txt>12</txt>

                            <img src="{{ asset("/image/workshop/dice.svg") }}" alt="" />
                            <p>D12<p/>
                        </div>

                        <div class="block3" id='6'>


                            <txt>20</txt>

                            <img src="{{ asset("/image/workshop/dice.svg") }}" alt="" />
                            <p>D20<p/>
                        </div>

                        <div class="block3" id='7'>


                            <txt>100</txt>

                            <img src="{{ asset("/image/workshop/dice.svg") }}" alt="" />
                            <p>D100<p/>
                        </div>

                    </b5>

                </b1>

            </div>
        </div>
    </div>
    </div>



    <script>
        $( ".block3" ).click(function () {

            $current = $(this).attr("id");
            $head = $("#" + $current + " txt").text();
            $name = $("#" + $current + " p").text();
            $max = Math.floor($head);



            $(".overlay" ).addClass("active");
            $("body" ).addClass("lock1");
            $(".overlay p" ).html("<br>"+Math.floor(Math.random() * ($max) + 1));
            $(".overlay h" ).html("<br>"+$name);
            $(".overlay img" ).attr("src", $img_path);


        });


        $( ".img_close" ).click(function () {
            $(".overlay" ).removeClass("active");
            $("body" ).removeClass("lock1");

            $(".overlay h" ).empty();
        });
    </script>

@endsection
