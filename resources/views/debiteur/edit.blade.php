@extends('layout.base')

@section('title')
    <h1>Modification débiteur</h1>
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
    <section class="section">
        <div class="card">
            <div class="card-header">
                Liste de débiteurs
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>prenom</th>
                            <th>Contact</th>
                            <th>Adresse</th>
                            <th>Montant à recouvrer</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            @foreach ($debiteurs as $deb)
                        <tr>
                            <!-- Modal pour éditer -->
                            <div class="modal fade" id="edit-modal-{{ $deb->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="edit-modal-{{ $deb->id }}-label">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="edit-modal-{{ $deb->id }}-label">Modifier le
                                                debiteur
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('debs.update', $deb->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="form-group ">
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="nom_deb" value="{{ $deb->nom_deb }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Prenom</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="prenom_deb" value="{{ $deb->prenom_deb }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Type </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="type_deb" value="{{ $deb->type_deb }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Adresse</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="adresse_deb"
                                                            value="{{ $deb->adresse_deb }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Numero du deb</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="num_deb" value="{{ $deb->num_deb }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label">N° compteur</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="num_compteur"
                                                            value="{{ $deb->num_compteur }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label">N° de la Facture</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="num_facture"
                                                            value="{{ $deb->num_facture }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Date facture</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control" name="date_facture"
                                                            value="{{ $deb->date_facture }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Montant à recouvrer</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="montant_recouvrer"
                                                            value="{{ $deb->montant_recouvrer }}">
                                                        </div>
                                                    </div>
                    
                    
                                                </div>
                                               
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Annuler</button>
                                                <button type="submit" class="btn btn-primary">Modifier</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal pour supprimer -->
                            <div class="modal fade" id="deleteModal{{ $deb->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="deleteModal{{ $deb->id }}Label">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="{{ route('debs.destroy', $deb->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModal{{ $deb->id }}Label">Supprimer
                                                    deb</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Etes-vous sûr de vouloir supprimer ce candidat?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <td>{{ $deb->nom_deb }}</td>
                            <td>{{ $deb->prenom_deb }}</td>
                            <td>{{ $deb->num_deb }}</td>
                            <td>{{ $deb->adresse_deb }}</td>
                            <td>{{ $deb->montant_recouvrer }}</td>
                            <td>
                                <div class="d-flex">
                                    <button href="}" class="btn btn-info btn-xs align-middle mr-1">
                                        <i class="bi bi-eye-fill"></i>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs align-middle mr-1"
                                    data-toggle="modal" data-target="#edit-modal-{{ $deb->id }}"><i class="bi bi-pencil-square"></i>
                                    </button>
                                    
                                
                                        <form action="{{ route('debs.destroy', $deb->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-xs align-middle"
                                                data-toggle="modal" data-target="#deleteModal{{ $deb->id }}"><i
                                                    class="bi bi-trash-fill"></i></button>
                                        </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection
