<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>

      .contenedor{
        background-color: #F00;
        text-align: center;
      }

      .general{
        background-color: #00F;
        margin: 200px 0;
        color: #FFF;
      }

      .pie{
        background-color: #FF0;
      }

    </style>
  </head>
  <body>
      <div class="contenedor">
        @yield("cabecera")
      </div>
      <div class="general">
        @yield("centro")
      </div>
      <div class="pie">
        @yield("pie")
        <p>bli bli bli...</p>
      </div>


  </body>
</html>
