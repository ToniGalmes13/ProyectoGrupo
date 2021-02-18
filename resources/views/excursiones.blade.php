@extends('layout.inicio')

@section('container')

    <div id="section1" class="container-fluid">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="fondo1.jpg" class="img-fluid">
                    <div class="carousel-caption" style="color: black;">
                        <h1>Excursiones</h1>
                        <h3>a pie</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="fondo2.jpg" class="img-fluid">
                    <div class="carousel-caption">
                        <h1>Excursiones</h1>
                        <h3>en bici</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="fondo3.jpg" class="img-fluid">
                    <div class="carousel-caption">
                        <h1>Excursiones</h1>
                        <h3>extremas</h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <div style="width: 100%; height: 100px;" w></div>
        <div id="section2" class="my-5 container">
            <div class="row">
                <div class="col text-center my-5">
                    <h1>Galeria</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <a type="button" data-toggle="modal" data-target="#myModal3"><img src="img1.jpg" class="img-fluid"></a>
                    <div class="modal fade" id="myModal3">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Modal Heading</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <img src="img1.jpg" class="img-fluid">
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a type="button" data-toggle="modal" data-target="#myModal1"><img src="img2.jpg" class="img-fluid"></a>
                    <div class="modal fade" id="myModal1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Modal Heading</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <img src="img2.jpg" class="img-fluid">
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a type="button" data-toggle="modal" data-target="#myModal2"><img src="img3.jpg" class="img-fluid"></a>
                    <div class="modal fade" id="myModal2">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Modal Heading</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <img src="img3.jpg" class="img-fluid">
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-12 col-md-4">
                    <a type="button" data-toggle="modal" data-target="#myModal4"><img src="img4.jpg" class="img-fluid"></a>
                    <div class="modal fade" id="myModal4">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Modal Heading</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <img src="img4.jpg" class="img-fluid">
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a type="button" data-toggle="modal" data-target="#myModal5"><img src="img5.jpg" class="img-fluid"></a>
                    <div class="modal fade" id="myModal5">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Modal Heading</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <img src="img5.jpg" class="img-fluid">
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a type="button" data-toggle="modal" data-target="#myModal6"><img src="img6.jpg" class="img-fluid"></a>
                    <div class="modal fade" id="myModal6">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Modal Heading</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <img src="img6.jpg" class="img-fluid">
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="section3" style="width: 100%;height: 100px;"></div>
        <div class="container w-100">
            <div class="embed-responsive embed-responsive-21by9 ">
                <iframe class="embed-responsive-item" width="560" height="315"
                    src="https://www.youtube.com/embed/QqVAAidi2ZA" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div style="width: 100%;height: 100px;"></div>
        <div id="section4" class="container-fluid p-5 mt-5">
            <div class="row mb-5">
                <div class="col text-center">
                    <h1>RUTAS</h1>
                </div>
            </div>
            <div class="row ">
                <div class="col-sm-12 col-md-6">
                    <img class="rounded img-fluid" src="ruta.jpg">
                </div>

                <div class="col-sm-12 col-md-6 accordion" id="accordionExample">
                    <div class="card">
                        <ul class="list-group">
                            <li class="list-group-item" title="Senderismo" data-toggle="popover"><a type="button">Tipo
                                    de excursion</a></li>
                            <li class="list-group-item" title="Media" data-toggle="popover"><a type="button">Grado de
                                    dificultad</a></li>
                            <li class="list-group-item" title="380m" data-toggle="popover"><a type="button">Altitud
                                    maxima</a></li>
                        </ul>

                    </div>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-sm-12 col-md-6 accordion" id="accordionExample">
                    <div class="card">
                        <ul class="list-group">
                            <li class="list-group-item" title="Senderismo" data-toggle="popover"><a type="button">Tipo
                                    de excursion</a></li>
                            <li class="list-group-item" title="Alta" data-toggle="popover"><a type="button">Grado de
                                    dificultad</a></li>
                            <li class="list-group-item" title="340m" data-toggle="popover"><a type="button">Altitud
                                    maxima</a></li>
                        </ul>
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne">
                                    RUTA: Cami de cas Ratat
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne1" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Desde el aparcamiento del Coll de Sa Gramola tomamos la pista de la derecha, ignorando
                                todas las bifurcaciones, hasta la casita de Ses Basses (45 min). Pocos metros antes,
                                optamos por el sendero de la derecha y, poco después, por la senda de la izquierda, con
                                unas vistas maravillosas sobre la costa norte. A los 10 min giramos a la derecha y, 20
                                min más tarde, vemos un hito de gran tamaño. Merece la pena desviarse por la senda de la
                                derecha hasta uno de los miradores más impresionantes de Mallorca (2 min): el del cabo
                                suroeste (Punta Fabioler – 450 m) sobre los acantilados y la isla de Sa Dragonera.
                                Regresamos al gran hito y giramos a la derecha. Al cabo de pocos minutos, empieza el
                                descenso por un sendero pedregoso hasta llegar a la pista (30 min) que tomamos a mano
                                derecha hacia La Trapa, donde seguimos el itinerario anterior (punto E).
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
