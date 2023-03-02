@extends('layout.base')

@section('title')
    <h1>Ajouter un débiteur</h1>
@endsection

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
    <div class="container-fluid">
        <form method="POST" action="/store_debiteur">
            @csrf

            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header bg-info">
                            <h3 class="card-title text-white">Informations du débiteur</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group ">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nom_deb" placeholder="nom">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Prenom</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="prenom_deb" placeholder="prenom">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Type </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="type_deb" placeholder="type">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Adresse</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="adresse_deb"
                                            placeholder="addresse">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Numero du deb</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="num_deb" placeholder="nom">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">N° compteur</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="num_compteur"
                                            placeholder="numero compteur">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">N° de la Facture</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="num_facture"
                                            placeholder="numero facture">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Date facture</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="date_facture"
                                            placeholder="date facture">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Montant à recouvrer</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="montant_recouvrer"
                                            placeholder="montant">
                                    </div>
                                </div>


                            </div>



                        </div>


                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->

            <!--/.col (right) -->
            <div class="text-center mt-4 ">
                <button class="btn btn-success" type="submit">Ajouter</button>
            </div>

    </div>
    <!-- /.row -->
    </form>
    <br>



    </div><!-- /.container-fluid -->
@endsection
