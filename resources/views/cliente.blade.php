<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Area dos Adms</title>
    <link rel="stylesheet" href="{{url('css/style-Admin.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

</head>

<body>
    <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>M<span>odern</span></h3>
        </div>

        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url('css/style-Admin.css') "></div>
                <h4>Desenvolvedor</h4>
                <small>Full Stack</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                        <a href="/" class="active">
                            <span class="las la-home"></span>
                            <small>Home</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-user-alt"></span>
                            <small>Perfil</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-envelope"></span>
                            <small>Menssagem</small>
                        </a>
                    </li>
                    <li>
                        <a href="/admin">
                            <span class="las la-clipboard-list"></span>
                            <small>Consultas</small>
                        </a>
                    </li>
                    <li>
                        <a href="/addFilmesADM">
                            <span class="las la-clipboard-list"></span>
                            <small>Adicionar filme</small>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="main-content">

        <main>

            <div class="page-header">
                <h1>Consulta do Banco de Usuario</h1>
                <small>Banco / Usuario</small>
            </div>

            <div class="page-content">

                <div class="analytics">

                    <div class="card">
                        <div class="card-head">
                            <h2>107,200</h2>
                            <span class="las la-user-friends"></span>
                        </div>
                        <div class="card-progress">
                            <small>User activity this month</small>
                            <div class="card-indicator">
                                <div class="indicator one" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>340,230</h2>
                            <span class="las la-eye"></span>
                        </div>
                        <div class="card-progress">
                            <small>Page views</small>
                            <div class="card-indicator">
                                <div class="indicator two" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>$653,200</h2>
                            <span class="las la-shopping-cart"></span>
                        </div>
                        <div class="card-progress">
                            <small>Monthly revenue growth</small>
                            <div class="card-indicator">
                                <div class="indicator three" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>47,500</h2>
                            <span class="las la-envelope"></span>
                        </div>
                        <div class="card-progress">
                            <small>New E-mails received</small>
                            <div class="card-indicator">
                                <div class="indicator four" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="records table-responsive">

                    <div class="record-header">
                        <div class="add">
                            <span>Entries</span>
                            <select name="" id="">
                                <option value="">ID</option>
                            </select>
                            <button>Add record</button>
                        </div>

                        <div class="browse">
                            <input type="search" placeholder="Search" class="record-search">
                            <select name="" id="">
                                <option value="">Status</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <table width="100%">
       
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><span class="las la-sort"></span>Nome Cliente</th>
                                    <th><span class="las la-sort"></span>User Cliente</th>
                                    <th><span class="las la-sort"></span>E-mail Cliente</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cliente as $c)
                                <tr>
                                    <td>#</td>
                                    <td>{{$c->nomeCliente}}</td>
                                    <td>{{$c->UserCliente}}</td>
                                    <td>{{$c->emailCliente}}</td>
                                </tr>
                                @endforeach
                            </tbody>



                    </div>

                </div>

            </div>

        </main>

    </div>
</body>

</html>