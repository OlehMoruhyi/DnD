<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0, user-scalable=0, min-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>DnD</title>

    <link rel="stylesheet" href="{{ asset("/css/Styles.css") }}">

</head>



<!DOCTYPE html>
<html lang="en">
  <head>

      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>dnd</title>
      <link rel="icon" href={{ asset("/images/Globals/other/favicon.svg") }} />
      <link rel="stylesheet" href={{ asset("/css/Styles.css") }} />
      <script src="js/jquery-3.6.0.min.js"></script>
  </head>
  <body>

  <div class =wrapper>

    @include("partial.header")
    @yield("content")
  </div>
  <script src="{{ asset("/js/jquery-3.6.0.min.js") }}"></script>

    <script>
        $( ".header_burger" ).click(function () {
            $(".header_burger,.header_menu" ).toggleClass("active");
            $("body" ).toggleClass("lock");
        });


    </script>
  </body>
</html>
