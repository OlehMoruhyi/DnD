
@extends("layout")

@section("content")
    <div class =content>

        <div class = container>


            <div class =content_text>


                <b1>

                    <b5>

                        @foreach ($blocks as $block)
                            <a class="block4" href="{{$block->getLink()}}" id={{ "{$block->getId()}"}}>

                                <img src="{{ asset("/image/{$block->getImage()}") }}" alt="" />
                                {{"{$block->getName()}"}}
                            </a>
                        @endforeach

                    </b5>

                </b1>

            </div>
        </div>
    </div>
    </div>

@endsection
