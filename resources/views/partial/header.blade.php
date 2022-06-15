<header class =header>
    <div class = container>
        <div class =header_body>
            <a href={{ url("/") }} class="header_logo">
                <img src="{{ asset("image/svg/dnd-svgrepo-com.svg") }}" alt="">
                <kk>
                    <h1>
                        DND
                    </h1>
                    <h2>
                        workshop
                    </h2>
                </kk>

            </a>
            <div class="header_burger">

            </div>
            <nav class="header_menu">
                <ul class="header_list">
                    <li>
                        <a href={{ url("/lib/inventory") }} class="header_link">
                            <img src="{{ asset("image/svg/chest-svgrepo-com.svg") }}" alt="" width="40px" >
                            <h>Інвентар</h>
                        </a>
                    </li>
                    <li>
                        <a href={{ url("/lib/character") }} class="header_link">
                            <img src="{{ asset("image/svg/person-svgrepo-com.svg") }}" alt="" width="40px" >
                            <h>Персонаж</h>
                        </a>
                    </li>
                    <li>
                        <a href={{ url("/lib/bestiary") }} class="header_link">
                            <img src="{{ asset("image/svg/lion-svgrepo-com.svg") }}" alt="" width="40px" >
                            <h>Бестіарій</h></a>
                    </li>
                    <li>

                        <a href={{ url("/lib/workshop") }} class="header_link">
                            <img src="{{ asset("image/svg/pen-tool-svgrepo-com.svg") }}" alt="" width="40px" >
                            <h>Майстерня</h></a>
                    </li>
                </ul>

            </nav>

        </div>
    </div>
</header>
