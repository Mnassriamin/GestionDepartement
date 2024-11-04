@extends('template')

@section('content')
    <h2 class="text-center mt-4">Liste des Épreuves</h2>
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading bg-dark text-white p-3">
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-between align-items-center">
                            <a href="formEp" class="btn btn-sm btn-primary">
                                <i class="fa fa-plus-circle"></i> Ajouter
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped table-bordered text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Numéro</th>
                                <th>Date</th>
                                <th>Lieu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($epreuves as $epreuve)
                            <tr>
                                <td>{{ $epreuve->Numero }}</td>
                                <td>{{ $epreuve->Date }}</td>
                                <td>{{ $epreuve->Lieu }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
