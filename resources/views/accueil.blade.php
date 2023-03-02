
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Campagne</title>

    <link rel="stylesheet" href="/design/default.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</head>

<body>

    <div class="results">
        @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if (Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif
    </div>

    <section class="wrapper">
        <div class="container-fostrap">
            <div>
                <img src="/images/mlc.jpg" class="fostrap-logo"/>
                <h1 class="heading">
                   Payement
                </h1>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="card">
                                <a class="img-card" href="#">
                                <img src="/images/orange.jpg" />
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="#">
                                            Payement Facture
                                      </a>
                                    </h4>
                                    <p class="">

                                    </p>
                                </div>
                                <div class="card-read-more">
                                    <a href="/pay" class="btn btn-link btn-block">
                                        Effectuez votre paiement
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="card">
                                <a class="img-card" href="#">
                                <img src="/images/isago.jpg" />
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="/isago">
                                              Credit ISAGO
                                      </a>
                                    </h4>
                                    <p class="">

                                    </p>
                                </div>
                                <div class="card-read-more">
                                    <a href="/isago" class="btn btn-link btn-block">
                                        Acheter
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" />
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">5  Button Hover Animation Effects
                                      </a>
                                    </h4>
                                    <p class="">
                                        tutorials button hover animation, although very much a hover button is very beauti...
                                    </p>
                                </div>
                                <div class="card-read-more">
                                    <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html" class="btn btn-link btn-block">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>



</html>
