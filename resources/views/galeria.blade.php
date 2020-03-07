@extends("layouts.plantilla_1")

@section("cabecera")
<h1>GALERÍA</h1>
@endsection

@section("centro")
  <p>bla bla bla bla...</p>

@if(count ($alumnos))

    <table width="50%" border="2">
      @foreach($alumnos as $persona)
      <tr>
          <td>
            {{$persona}}
          </td>
      </tr>
      @endforeach
    </table>
      @else
          {{"sin alumnos"}}

@endif

@endsection

@section("pie")

@endsection
