# Laravel Comics

Piccola applicazione esempio sviluppata con Laravel per mostrare una collezione di fumetti. L'app usa Blade per le view, componenti Blade per le card/jumbo/banner e un file di configurazione che contiene i dati dei fumetti.

## Funzionalità principali

-   Pagina principale con griglia di fumetti (lista e link alla scheda dettaglio).
-   Visualizzazione dettaglio singolo fumetto con titolo, descrizione, autori e prezzo.
-   Componenti Blade riutilizzabili: card, jumbo, banner.

## Tecnologie utilizzate

-   PHP 8.2 + Laravel 11
-   Blade (templating)
-   Vite (asset bundling)
-   Tailwind CSS + SCSS + Bootstrap
-   JavaScript (axios)
-   SQLite (configurazione di default) / database compatibili
-   PHPUnit per i test unitari/feature

## Struttura rilevante

-   Routing: [routes/web.php](routes/web.php)
-   View principali: [resources/views/Home.blade.php](resources/views/Home.blade.php), [resources/views/Comic.blade.php](resources/views/Comic.blade.php)
-   Componenti Blade: [`App\View\Components\card`](app/View/Components/card.php), [`App\View\Components\jumbo`](app/View/Components/jumbo.php), [`App\View\Components\banner`](app/View/Components/banner.php)
-   Template componente card: [resources/views/components/card.blade.php](resources/views/components/card.blade.php)
-   Dati dei fumetti: [config/comics.php](config/comics.php)
-   Stili e assets: [resources/sass/app.scss](resources/sass/app.scss), [resources/js/app.js](resources/js/app.js)
-   Gestione pacchetti: [composer.json](composer.json), [package.json](package.json)

## Avvio locale (rapido)

1. Installare dipendenze PHP:
    ```sh
    composer install
    ```
