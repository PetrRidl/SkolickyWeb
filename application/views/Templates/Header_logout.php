<html>
    <head>
        <title>Peťův web</title>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <style>
        .hlavniNadpis{
            margin-left: 2%;

        }
        .prihlaseni{
            margin-left: 400%;
        }
    </style>    
        <script>
    $(document).ready( function () {
    $('#uprava').DataTable();
} );
</script>  
    <body>
        <nav class="navbar navbar-expand-sm navbar-light bg-primary">
            <a class="navbar-brand hlavniNadpis" href="<?php base_url()?>basic">Peťův web :)))</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php base_url()?>vypisSkol">Výpis škol/žáků či co vlastně tam má být</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php base_url()?>vypisMapa">Ukázka na mapě</a>
                    </li>
                    <li class="nav-item active">
                         <a class="nav-link prihlaseni" href="<?php base_url()?>prihlaseni">Přihlášení</a>
                    </li> 
 



                </ul>

            </div>
        </nav>
        <div class="container">

