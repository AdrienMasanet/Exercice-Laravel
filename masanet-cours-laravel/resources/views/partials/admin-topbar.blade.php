<body class="hero-anime">

    <div class="navigation-wrap start-header start-style">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md">

                        <a class="navbar-brand" href="{{ URL::route('admin.index') }}">Menu d'administration</a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="{{ URL::route('admin.index') }}">Tableau de bord</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="{{ URL::route('admin.list-article') }}">Liste des articles</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="{{ URL::route('admin.create-article') }}">Nouvel article</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="/">Retour au site</a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>
