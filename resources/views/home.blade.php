<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ url('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Open+Sans:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ url('js/home.js') }}" defer></script>
    <script src="{{ url('js/contents.js') }}"></script>

    <title>Fratelli Pistone</title>
</head>
<body>
    <nav>
        <div id="logo">
            <img src="image/logo.png">
        </div>
        <div id="links">
            <a href="{{ url('home') }}">Home</a>
            <a href="#titolo">Prodotti</a>
            <a href="{{ url('login') }}">Accedi</a>
            <a href="{{ url('signup') }}">Registrati</a>
        </div>
        <div class="menu">
            <div></div>
            <div></div>
            <div></div>
        </div>

    </nav>

    <div class="nascondimenu">
        <a href="{{ url('home') }}">Home</a>
        <a href="{{ url('login') }}">Accedi</a>
        <a href="{{ url('signup') }}">Registrati</a>
    </div>

    <header>
            <div id="overlay">
            <h1>Siciliani dalla nascita</h1>
            <p class="header">Tutte le nostre specialità da gustare e assaporare lentamente!</p>
            </div>
    </header>
    <section>
        <div id="inizio">
            <h1>Una storia di spirito tutta siciliana</h1>
            <p>La nostra azienda nasce nel 1998 come un laboratorio artigianale per la produzione di liquori che utilizza come materia prima gli agrumeti della nostra Sicilia.
            L'azienda si fa subito apprezzare per la qualità e il gusto dei suoi infusi, capaci di omaggiare la tradizione in maniera sempre originale.
            La svolta più importante avviene nel 2017 quando attarverso nuove esperienze e sperimentazioni costanti si è riuscito ad immettere sul mercato nuove specialità,
            dando vita a prodotti innovativi e nel gusto e nello spirito. </p>
        </div>
        <div id="part">
            <div class="immagine">
                <img src="image/drink1.jpg">
            </div> 
            <div class="testo">
            <h1>Spiritosi per natura</h1>  
            <article>Questo è il motto che da una vita ci identifica e ci accompagna da una vita. Più che uno slogan è una vera e propria filosofia di vita. Un ironico invito a prendere
            le cose alla leggera e a godersi i grandi piaceri della vita. Lo spirito è anche quella passione che ci permette di affrontare gli impegni quotidiane
            e le sfide del mercato attarverso le giuste decisioni e strategie.</article>
            </div>
        </div>

        <div id="titolo">
            <h1>i nostri prodotti</h1>

            <div id="cerca">
                 <p>Ricerca:</p>
                <input type= "text" id="barraricerca">
            </div>

        </div>
        
            <p class="prodotti">Per  scoprire maggiore dettagli, acquistare i nostri prodotti o poterli aggiungere al carrello bisogna avere un account. Ricordati di registrarti o di accedere!</p>
            
            <div id="contenitore">           
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