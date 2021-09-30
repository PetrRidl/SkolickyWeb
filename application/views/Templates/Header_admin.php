<html>
    <head>
        <title>Peťův web</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-light bg-primary">
            <a class="navbar-brand" href="#">Peťův web :)))</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php base_url()?>upravaSkol">Úprava škol</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php base_url()?>upravaSouradnic">Úprava souřadnic</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php base_url()?>pridaniSkoly">Přidání školy</a>
                    </li>
                    <li class="nav-item active">
                         <a class="nav-link" href="<?php base_url()?>odhlaseni">Odhlášení</a>
                    </li> 



                </ul>
                

            </div>
        </nav>
