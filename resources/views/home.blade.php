@extends('layouts.app')

@section('content')
<div class="container">

  <center><img src="{{asset('img/name4.png')}}" alt="" style="width: 50%;"></center>

  <div class="row">
  <div class="col-md-4" style="text-align: center;background-color: rgba(255, 255, 255, 0.3);">
            <br>
            <label for=""><h5><b>Trailers :</b></h5></label><br><br>
            <label for="" ><font color="black"><h5>Otro día para matar</h5></font></label>
            <br>
            <iframe class=" rounded" src="https://www.youtube.com/embed/BzLA7Ey2Af4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
            <label for="" ><font color="black"><h5>Pacto de sangre</h5></font></label>
            <br>
            <iframe class="rounded" src="https://www.youtube.com/embed/jbeRIvRRxdE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
            <label for="" ><font color="black"><h5>Parabellum </h5></font></label>
            <br>
            <iframe class="rounded" src="https://www.youtube.com/embed/30R7Io_DmyU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md-6" style="background-color: rgba(255, 255, 255, 0.5);">
            <p>
                <font color="black">
                    <br>
                    John Wick es una película de acción estadounidense de 2014, dirigida por David Leitch y Chad 
                    Stahelski, escrita por Derek Kolstad y protagonizada por Keanu Reeves. Fue estrenada el 24 de 
                    octubre de 2014. Y tiene una duración de 101 min.<br>
                    La historia se centra en John Wick (Reeves), buscando a los hombres que irrumpieron en su casa, 
                    robaron su auto antiguo(Ford Mustang de 1969) y mataron a su cachorro, que fue un último regalo 
                    para él de su esposa recientemente fallecida (Moynahan).​ <br><br>Stahelski y David Leitch dirigieron 
                    la película juntos, aunque solo se acreditó a Stahelski.<br>
                    Kolstad había completado el guion en 2012 y lo desar    rolló aún más para Thunder Road Pictures.
                    ​La película fue producida por Basil Iwanyk de Thunder Road Pictures, Leitch, Eva Longoria y 
                    Michael Witherill. Marca el debut como director de Stahelski y Leitch como equipo después de 
                    múltiples créditos separados como directores de segunda unidad y coordinadores de acrobacias. 
                    Anteriormente trabajaron con Reeves como dobles en la trilogía de The Matrix.
                    El enfoque de Stahelski y Leitch a las escenas de acción se basó en su admiración por el anime​ y 
                    las películas de artes marciales.8 La película usó coreógrafos de lucha9 y técnicas de Gun Fu del 
                    cine de acción de Hong Kong. La película también rinde homenaje a obras como "The Killer" de 
                    John Woo, Le Cercle Rouge y Le Samouraï de Jean-Pierre Melville, Point Blank de John Boorman y 
                    las películas de Spaghetti western.<br>
                    La película recibió críticas positivas, y los críticos la calificaron como una de las mejores 
                    actuaciones de Reeves y una de las mejores películas de acción de 2014. Recaudó $86 millones en 
                    todo el mundo contra un presupuesto de producción de $20 millones. Dos secuelas, John Wick: Chapter 2, 
                    y John Wick: Chapter 3 - Parabellum, se lanzaron en febrero de 2017 y mayo de 2019, respectivamente, 
                    con un éxito comercial y crítico comparable, con otra secuela, John Wick: Capítulo 4, 
                    programada para mayo Lanzamiento 2021. También es la única película de la serie que será distribuida 
                    por Summit Entertainment, ya que las otras películas son distribuidas por Lionsgate Films. 
                </font>
            </p>
          </div>
          <div class="col-md-2" style="text-align: center;background-color: rgba(255, 255, 255, 0.3);">
            <br>
            <br>
            <img src="{{asset('img/jw1.jpg')}}" alt="" class="rounded img-fluid">
            <br>
            <br>
            <img src="{{asset('img/jw2.jpg')}}" alt="" class="rounded img-fluid">
            <br>
            <br>
            <img src="{{asset('img/jw3.jpg')}}" alt="" class="rounded img-fluid">
            <br>
            <br>
            <br>
            <img src="{{asset('img/jw4.jpg')}}" alt="" class="rounded img-fluid">
            <br>
            <br>
            <br>
            <br>
            <img src="{{asset('img/banner3.jpg')}}" alt="" class="rounded img-fluid">
            <br>
            
          </div>
            
    <div class="clearfix"></div>
            
  </div>
  <br>
  <div style="background-color: rgba(255, 255, 255, 0.3);" class="container">
        <div class="row">
            <div class="col-md-12"><p><h3><b><center>Tramite de boletos</center></b></h3></p></div>
        
            <div class="clearfix"></div>

            <div class="col-md-6">
              <label for=""><h5><b>Nombre</b></h5></label>
              <input type="text" class="form-control" >
            </div>

            <div class="col-md-6">
              <label for=""><h5><b>Apellidos</b></h5></label>
              <input type="text" class="form-control" >
              <br>
            </div>
            <div class="clearfix"></div>
              <br>
            <div class="col-md-6">
              <label for=""><h5><b>Tarjeta :</b></h5></label>
              <input type="text" class="form-control" >
            </div>

            <div class="col-md-6">
              <label for=""><h5><b>Contraseña :</b></h5></label>
              <input type="password" class="form-control" >
            <br>
            </div>
            <div class="clearfix"></div>
            <br>
            <div class="col-md-6">
              <label for=""><h5><b>Cantidad :</b></h5></label>
              <input type="text" class="form-control" >
            </div>

            <div class="col-md-6">
              <label for=""><h5><b>Pelicula :</b></h5></label>
              <select class="form-control" id="grid-state">
                  <option>Otro día para matar</option>
                  <option>Pacto de sangre</option>
                  <option>Parabellum</option>
                </select>
                <br>
                <br>
            </div>
            <div class="col-md-12">
            <button class="btn btn-lg btn-primary">
                        Tramitar Compra
                      </button>
            </div>
        </div>
        <br>
        
        <br>
    </div>



  
</div>
@endsection
