<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Matières et Épreuves</title>
    <style>
        .custom-table {
            width: 25%;
            margin: 20px auto;
            table-layout: fixed;
        }


        .custom-table th {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            width: 50%;
        }

        .custom-table td {
            text-align: center;
            vertical-align: middle;
            word-wrap: break-word;
            width: 50%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/matiere') }}">Matières <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/epreuve') }}">Épreuves</a>
                            </li>
                        </ul>

                    </div>
                </nav>
                <div class="content">
                    <h2 class="text-center mt-4">Creation d'un matiere</h2><br /><br />

                    <table class="table custom-table table-bordered">
                        <tr>
                            <td>



                                <form action="{{url("formMat")}}" method="post" style="width: 22rem;">
                                    @csrf

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="cdm">Codemat : </label>
                                        <input type="text" class="@error('cdm') is-invalid @enderror" name="cdm" class="form-control" />
                                        @error('cdm')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="lb">Libelle : </label>
                                        <input type="text" class="@error('lb') is-invalid @enderror" name="lb" class="form-control" />
                                        @error('lb')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="cf">Coefficient : </label>
                                        <input type="number" class="@error('cf') is-invalid @enderror" name="cf" class="form-control" />
                                        @error('cf')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                    </div>

                                    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Ajouter</button>

                                </form>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>