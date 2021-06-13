<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ url('css/signup.css') }}">
    <script src="{{ url('js/signup.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Open+Sans:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Fratelli Pistone</title>
</head>
<body>
    <nav>
        <div id="logo">
            <img src="image/logo.png">
        </div>
        <div id="links">
            <a href="{{ url('home') }}">Home</a>
            <a href="{{ url('login') }}">Accedi</a>
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
    </div>

    <header>
            <div id="overlay">
            <h1>Siciliani dalla nascita</h1>
            <p class="header">Tutte le nostre specialità da gustare e assaporare lentamente!</p>
            </div>
    </header>
    <section>
    
        <div id="contenitore">
        <h1>REGISTRAZIONE</h1>
        <div class="mexbox">
        @if(isset($old_email))
            <p>Questa e-mail è già stata utilizzata!</p>
        @endif
        </div>
        <div class= "box">

    <main>
    
        <form enctype="multipart/form-data"  name='sign' method='post'>
        <input type = "hidden" name = "_token" value = "{{csrf_token ()}}" >  
        <p>
                <label>Nome:  <input autocomplete="off" type='text' name='nome'></label>
            </p>
            <p>
                <label>Cognome: <input autocomplete="off" type='text' name='cognome'></label>
            </p>
            <p>
                <label>E-mail: <input autocomplete="off" type='text' name='email' placeholder="esempio@esempio.com"></label>
            </p>
            <p>
                <label>Username: <input autocomplete="off" type='text' name='username'></label>
            </p>
            <p>
                <label>Password: <input type='password' name='password'></label>
            </p>
            <p>
                <label>Conferma password: <input type='password' name='confirmpassword'></label>
            </p>
            <p>
                <label>&nbsp;<input type='submit' id="submit"></label>
            </p>
            <p>
                <label>Sei già registrato?<a class="acc" href="{{ url('login') }}">Accedi</a></label>
            </p>
        </form>
    </main>
    </div>
    </div>
    </section>
    <footer>
        <p>Contrada Montecenere snc - Belpasso(CT)</p>
        <p>Piero Galatà - O46001900</p>
    </footer>
</body>
</html>