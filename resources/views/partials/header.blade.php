<header>
    <nav
        class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <img src={{ Vite::asset("resources/img/dc-logo.png") }} alt="">
            <button
                class="navbar-toggler d-lg-none "
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center gap-2" id="collapsibleNavId">
                <div> <a class="nav-link" href={{ route("Home") }}>Home</a> </div>
                <div><a class="nav-link" href={{ route("About") }}>About</a> </div>


            </div>
        </div>
    </nav>


</header>