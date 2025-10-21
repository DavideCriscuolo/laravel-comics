<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(["resources/sass/app.scss","resources/js/app.js"])
    <title>Dc</title>

</head>

<body>
    <!-- Loader -->
    <div id="loader">
        <div class="spinner"></div>
    </div>
    @include("./../partials/header")

    @yield("MainHome")
    @yield("MainAbout")
    @yield("comic")
    @include("./../partials/footer")
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const loader = document.getElementById('loader');
            const content = document.getElementById('content');
            loader.style.display = 'none';
            content.style.display = 'block';
        });
    </script>
</body>

</html>