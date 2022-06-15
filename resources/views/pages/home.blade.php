@extends("layout")

@section("content")
    <div class =content>
        <div class = container>
            <div class =content_text>
                <b1>
                    <h1>Підземелля та дракони</h1>
                    <img src="{{ asset("image/20200526-DnD%201.png")}}">
                </b1>
                <b1>
                    <h1>
                        Знайди всю потрібну інформацію в одному місці
                    </h1>
                    <p1>
                        Відома настільна гра з багатим лором
                    </p1>
                    <p1>
                        Безліч рас та класів
                    </p1>
                    <p1>
                        Неймовірна кількість спорядження
                    </p1>

                    <b2>
                        <a href={{ url("/lib/character/nation") }} class="block"><img src="{{ asset("image/svg/group-people-svgrepo-com.svg")}}">Народи</a>
                        <a href={{ url("/lib/inventory/magic") }} class="block"><img src="{{ asset("image/svg/weapon-fantasy-spell-book-magig-svgrepo-com.svg")}}">Магія</a>
                        <a href={{ url("/lib/inventory/weapon") }} class="block"><img src="{{ asset("image/svg/shield-svgrepo-com.svg")}}">Зброя</a>
                        <a href={{ url("/lib/inventory/armor") }} class="block"><img src="{{ asset("image/svg/ninja-armor-svgrepo-com.svg")}}">Броня</a>
                        <a href={{ url("/lib/inventory/equipment") }} class="block"><img src="{{ asset("image/svg/belt-armor-svgrepo-com.svg")}}">Спорядження</a>
                        <a href={{ url("/lib/character/race") }} class="block"><img src="{{ asset("image/svg/man-svgrepo-com.svg")}}">Раса</a>
                        <a href={{ url("/lib/character/class") }} class="block"><img src="{{ asset("image/svg/class-warrior-svgrepo-com.svg")}}">Клас</a>
                        <a href={{ url("/lib/character/traits") }} class="block"><img src="{{ asset("image/svg/class-titan-svgrepo-com.svg")}}">Риси</a>
                        <a href={{ url("/lib/character/class_feature") }} class="block"><img src="{{ asset("image/svg/class-svgrepo-com.svg")}}">Особливості класу</a>
                        <a href={{ url("/lib/character/history") }} class="block"><img src="{{ asset("image/svg/class-notes-svgrepo-com.svg")}}">Передісторія</a>
                    </b2>
                </b1>
                <b1>
                    <h1>
                        Грай зручно
                    </h1>

                    <p1>
                        Кинь кості, навіть ящо не маєш їх під рукою.
                    </p1>
                    <p1>
                        Знайди характеристики спорядження.
                    </p1>
                </b1>
                <b1>
                    <h1>
                        Чи є в нас Discord?
                    </h1>
                    <p1>
                        Приєднуйтесь до нашого <a href="https://discord.gg/k92baa3w" class="link">серверу</a>, беріть участь в обговоренні нових функцій на сайті та шукайте нових друзів.
                    </p1>

                </b1>
                <b1>
                    <h1>
                        Наш Telegram канал
                    </h1>
                    <p1>
                        Приєднуйтесь до нашого <a href="https://t.me/dnd_club_penguin" class="link">каналу</a>, щоб стежити за новинами та оновленнями сайту.
                    </p1>

                </b1>
                <b1>
                    <h1>
                        Відмова від відповідальності
                    </h1>
                    <p1>
                        Матеріали на даному сайті наведені виключно в довідкових та ознайомлювальних цілях та не замінюють необхідності купівлі офіційних матеріалів з гри.</p1>
                    <p1>
                        Весь графічний матеріал та система Dungeons&Dragons є власністю корпорації Wizards of the Coast.
                    </p1>

                    <b3>
                        <a href="./info"class="block2" ><img src="{{ asset("image/svg/information-svgrepo-com.svg")}}">Контакти</a>
                    </b3>



                </b1>




            </div>
        </div>
    </div>
@endsection

