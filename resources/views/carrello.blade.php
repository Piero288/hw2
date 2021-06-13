<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{url('css/carrello.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Open+Sans:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{url('js/carrello.js')}}" defer></script>
    <script src="{{url('js/contents.js')}}"></script>

    <title>Carrello - Fratelli Pistone</title>
</head>
<body>
    <nav>
        <div id="logo">
            <img src="image/logo.png">
        </div>
        <div id="links">
            <a href="{{url('homelog')}}">Home</a>
            <a href="{{url('carrello')}}">Carrello</a>
            <a href="{{url('acquisti')}}">Acquisti</a>
            <a href="{{url('logout')}}">Esci</a>
        </div>
        <div class="menu">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </nav>

    <div class="nascondimenu">
        <a href="{{url('homelog')}}">Home</a>
        <a href="{{url('carrello')}}">Carrello</a>
        <a href="{{url('acquisti')}}">Acquisti</a>
        <a href="{{url('logout')}}">Esci</a>
    </div>

    <header>
            <div id="overlay">
            <h1>Siciliani dalla nascita</h1>
            <p class="header">Tutte le nostre specialità da gustare e assaporare lentamente!</p>
            </div>
    </header>
    <section>
    <div class="carrello">
        
            <h1>Il tuo carrello:</h1>
            <div id="acquista"></div>
            <div id="prodotti"></div> 
            <div id="conferma"></div> 
            <div id="mexbox"></div>

            <main>
                <form name='confermare' method='post' class="hidden">
                    <p>
                        <label>Città: <input autocomplete="off" type='text' name='citta' id="citta"></label>
                    </p>
                    <p>
                        <label>Indirizzo di spedizione: <input autocomplete="off" type='text' name='indirizzo' id="indirizzo"></label>
                    </p>
                    <p>
                        <label>Cellulare: <input autocomplete="off" type='tel' pattern="[0-9]{10}" name='cellulare' id="cellulare"></label>
                    </p>
                    <p>
                        <label>&nbsp;<input type='submit' id="submit"></label>
                    </p>                    
                </form>
            </main>
    </div>
    </section>

    <footer>
        <p>Contrada Montecenere snc - Belpasso(CT)</p>
        <p>E-mail: team@fratellipistone.com</p>
        <p>Tel. +39 095 7131604</p>
        <p>Piero Galatà - O46001900</p>
    </footer>
</body>
</html>