<header>
    <nav class="navbar navbar-expand navbar-dark bg-dark padding_mine mb-4">
        <div class="container">
            <a class="navbar-brand nav-link" href="{{ route('comic.index') }}">HOMEPAGE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02"
                aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify_mine" id="navbarsExample02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('create') }}">Crea un nuovo comic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url()->previous() }}">Back</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
