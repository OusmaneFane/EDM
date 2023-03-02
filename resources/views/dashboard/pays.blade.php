@extends("layout.base")


@section('title')
<h1>Ajouter un pays</h1>
@endsection

@section('content')
<div class="results">
    @if(Session::get('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif

    @if(Session::get('fail'))
    <div class="alert alert-danger">
        {{ Session::get('fail') }}
    </div>
    @endif
</div>
<div class="container-fluid">
    <form method="POST" action="/store_pays" >
        @csrf

      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header bg-info">
              <h3 class="card-title text-white">Informations Pays</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group ">
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder="nom">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Capital</label>
                    <div class="col-sm-10">
                  <input type="text" class="form-control" name="capital" placeholder="capital">
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
