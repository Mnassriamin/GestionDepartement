<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Matières et Épreuves</title>
    <style>
        .custom-table {
            width: 80%;
            margin: 20px auto;
            table-layout: fixed;
        }


        .custom-table th {
            background-color: #343a40;
            color: #fff;
            text-align: center;
        }

        .custom-table td {
            text-align: center;
            vertical-align: middle;
            word-wrap: break-word;
        }
        .panel{
    font-family: 'Raleway', sans-serif;
    padding: 0;
    border: none;
    box-shadow: 0 0 10px rgba(0,0,0,0.08);
}
.panel .panel-heading{
    background: #535353;
    padding: 15px;
    border-radius: 0;
}
.panel .panel-heading .btn{
    color: #fff;
    background-color: #000;
    font-size: 14px;
    font-weight: 600;
    padding: 7px 15px;
    border: none;
    border-radius: 0;
    transition: all 0.3s ease 0s;
}
.panel .panel-heading .btn:hover{ box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); }
.panel .panel-heading .form-horizontal .form-group{ margin: 0; }
.panel .panel-heading .form-horizontal label{
    color: #fff;
    margin-right: 10px;
}
.panel .panel-heading .form-horizontal .form-control{
    display: inline-block;
    width: 80px;
    border: none;
    border-radius: 0;
}
.panel .panel-heading .form-horizontal .form-control:focus{
    box-shadow: none;
    border: none;
}
.panel .panel-body{
    padding: 0;
    border-radius: 0;
}
.panel .panel-body .table thead tr th{
    color: #fff;
    background: #8D8D8D;
    font-size: 17px;
    font-weight: 700;
    padding: 12px;
    border-bottom: none;
}
.panel .panel-body .table thead tr th:nth-of-type(1){ width: 120px; }
.panel .panel-body .table thead tr th:nth-of-type(3){ width: 50%; }
.panel .panel-body .table tbody tr td{
    color: #555;
    background: #fff;
    font-size: 15px;
    font-weight: 500;
    padding: 13px;
    vertical-align: middle;
    border-color: #e7e7e7;
}
.panel .panel-body .table tbody tr:nth-child(odd) td{ background: #f5f5f5; }
.panel .panel-body .table tbody .action-list{
    padding: 0;
    margin: 0;
    list-style: none;
}
.panel .panel-body .table tbody .action-list li{ display: inline-block; }
.panel .panel-body .table tbody .action-list li a{
    color: #fff;
    font-size: 13px;
    line-height: 28px;
    height: 28px;
    width: 33px;
    padding: 0;
    border-radius: 0;
    transition: all 0.3s ease 0s;
}
.panel .panel-body .table tbody .action-list li a:hover{ box-shadow: 0 0 5px #ddd; }
.panel .panel-footer{
    color: #fff;
    background: #535353;
    font-size: 16px;
    line-height: 33px;
    padding: 25px 15px;
    border-radius: 0;
}
.pagination{ margin: 0; }
.pagination li a{
    color: #fff;
    background-color: rgba(0,0,0,0.3);
    font-size: 15px;
    font-weight: 700;
    margin: 0 2px;
    border: none;
    border-radius: 0;
    transition: all 0.3s ease 0s;
}
.pagination li a:hover,
.pagination li a:focus,
.pagination li.active a{
    color: #fff;
    background-color: #000;
    box-shadow: 0 0 5px rgba(0,0,0,0.4);
}
    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Matières et Épreuves</title>
    <style>
        .custom-table {
            width: 90%;
            margin: 20px auto;
            table-layout: fixed;
        }


        .custom-table th {
            background-color: #343a40;
            color: #fff;
            text-align: center;
        }

        .custom-table td {
            text-align: center;
            vertical-align: middle;
            word-wrap: break-word;
        }
        .panel{
    font-family: 'Raleway', sans-serif;
    padding: 0;
    border: none;
    box-shadow: 0 0 10px rgba(0,0,0,0.08);
}
.panel .panel-heading{
    background: #535353;
    padding: 15px;
    border-radius: 0;
}
.panel .panel-heading .btn{
    color: #fff;
    background-color: #000;
    font-size: 14px;
    font-weight: 600;
    padding: 7px 15px;
    border: none;
    border-radius: 0;
    transition: all 0.3s ease 0s;
}
.panel .panel-heading .btn:hover{ box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); }
.panel .panel-heading .form-horizontal .form-group{ margin: 0; }
.panel .panel-heading .form-horizontal label{
    color: #fff;
    margin-right: 10px;
}
.panel .panel-heading .form-horizontal .form-control{
    display: inline-block;
    width: 70%;
    border: none;
    border-radius: 0;
}
.panel .panel-heading .form-horizontal .form-control:focus{
    box-shadow: none;
    border: none;
}
.panel .panel-body{
    padding: 0;
    border-radius: 0;
}
.panel .panel-body .table thead tr th{
    color: #fff;
    background: #8D8D8D;
    font-size: 17px;
    font-weight: 700;
    padding: 12px;
    border-bottom: none;
}
.panel .panel-body .table thead tr th:nth-of-type(1){ width: 120px; }
.panel .panel-body .table thead tr th:nth-of-type(3){ width: 30%; }
.panel .panel-body .table tbody tr td{
    color: #555;
    background: #fff;
    font-size: 15px;
    font-weight: 500;
    padding: 13px;
    vertical-align: middle;
    border-color: #e7e7e7;
}
.panel .panel-body .table tbody tr:nth-child(odd) td{ background: #f5f5f5; }
.panel .panel-body .table tbody .action-list{
    padding: 0;
    margin: 0;
    list-style: none;
}
.panel .panel-body .table tbody .action-list li{ display: inline-block; }
.panel .panel-body .table tbody .action-list li a{
    color: #fff;
    font-size: 13px;
    line-height: 28px;
    height: 28px;
    width: 33px;
    padding: 0;
    border-radius: 0;
    transition: all 0.3s ease 0s;
}
.panel .panel-body .table tbody .action-list li a:hover{ box-shadow: 0 0 5px #ddd; }
.panel .panel-footer{
    color: #fff;
    background: #535353;
    font-size: 16px;
    line-height: 33px;
    padding: 25px 15px;
    border-radius: 0;
}
.pagination{ margin: 0; }
.pagination li a{
    color: #fff;
    background-color: rgba(0,0,0,0.3);
    font-size: 15px;
    font-weight: 700;
    margin: 0 2px;
    border: none;
    border-radius: 0;
    transition: all 0.3s ease 0s;
}
.pagination li a:hover,
.pagination li a:focus,
.pagination li.active a{
    color: #fff;
    background-color: #000;
    box-shadow: 0 0 5px rgba(0,0,0,0.4);
}
*{
   box-sizing: border-box;
   font-family: "Merriweather Sans", sans-serif;
}

body{
   background-color: #B0DBEE;

   #form{
      color: white;
      background-color: #009EDF;
      border-radius: 5px;

      width: 70%;
      padding: 40px;
      margin: 10px auto;

      -webkit-box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.75);
      -moz-box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.75);
      box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.75);

      p{
         font-size: 0.9em;
      }

      button{
         width: 100%;
         text-align: center;
         color: white;
         margin-top: 20px;
         border: 1px solid rgba(0,0,0,0.4);
      }

      .form-group{
         margin: 15px auto;

         label{
            font-weight: bold;
            font-size: 0.9em;
         }

         .input-group{
            border-radius: 5px;
            -webkit-box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.35);
            -moz-box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.35);
            box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.35);

            .input-group-addon{
               border: none;
               border-right: 1px solid rgba(0,0,0,0.2);
            }

            input{
               padding-left: 10px;
            }

            i{
               color: #009EDF;
            }
         }

         input{
            padding: 3px;
            width: 100%;
            border: none;
            border-radius: 0 5px 5px 0;
         }
      }
   }
}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #009EDF;">
  <div class="container-fluid">
    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="{{Route('epreuves.index')}}">Epreuves</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{Route('matieres.index')}}">Matieres</a>
        </li>
      </ul>
    </div>
  </div>
</nav>




    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
