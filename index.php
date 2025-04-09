<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento ETech 2026</title>
    <style>
        body {
            font-family: 'Bierstadt';
            line-height: normal;
            margin: 0;
            padding: 0;
            background-color: #4f4f4f;
            color:#4f4f4f;
        }
        header {
            background: #f4f4f4;
            color: #4f4f4f;
            padding: 20px 0;
            text-align: center;
            border-bottom: 3px solid #00008b;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }  
        nav ul{
            list-style: none;
        }
        nav {
            background: #6959cd;;
            padding:10px;
        }
        nav li {
            margin-right: 20px;
        }
        nav ul li{
            display:inline-block;
        }
        nav ul li a{
            padding: 20px 150px;
            text-decoration: none;
            font-size: 16px;
            color: white;
            border-radius: 30px;
            transition: 0,6s;
        }
        nav a {
            color:#1c1c1c;
            text-decoration: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .showcase {
            min-height: 300px;
            background: url(https://static.vecteezy.com/ti/vetor-gratis/t1/8167404-fundo-de-tecnologia-de-gradacao-simples-vetor.jpg)
            no-repeat center center;
            background-size: cover;
            text-align: center;
            color: #f4f4f4;
            padding: 50px 0;
        }
        .showcase h1 {
            font-size: 42px;
            margin-bottom: 20px;
        }
        .showcase p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto;
        }
        .main-content {
            padding: 20px 0;
        }
        .card {
            background: #f4f4f4;
            margin: 20px 0;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        footer {
            background: #f4f4f4;
            color: #1c1c1c;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
            }
        }
        </style>
    </head>
<body>
   <header>
        <div class="container">
            <h1>ETech 2026</h1>
            <p>Venha Prestigiar o Maior Evento Tech da América Latina!!!</p>
        </div>
    </header>
    <nav>
        <div class="container">
            <ul>
                <li><a href="#inicio">Início</a></li>
                <li><a href="#palestrantes">Palestras</a></li>
                <li><a href="#local">Localização</a></li>
            </ul>
        </div>
    </nav>
    
    <section class="showcase">
        <div class="container">
            <h1 id=inicio>Seja Bem-vindo ao E-Tech 2026</h1>
            <h2>Sobre o Evento</h2>
            <p>Em 2026, São Gonçalo do Sapucaí será palco de um grande encontro voltado à inovação e ao desenvolvimento tecnológico. O evento reunirá desenvolvedores, startups, empresas e entusiastas da área para um dia de palestras, workshops, networking e troca de experiências sobre as principais tendências do setor.

                Com foco em programação, inteligência artificial, soluções digitais e empreendedorismo tecnológico, o encontro promete movimentar a cidade e impulsionar o ecossistema de inovação da região.
                
                Participe desse momento único! Venha se conectar com o futuro da tecnologia em São Gonçalo do Sapucaí.</p>
            <p>Inscreva-se Já Para Participar do Evento!<br><br><br></p>
        </div>
    </section> 
    <div class="container main-content">
        <div class="card">
            <h1 id="palestrantes">Palestrantes</h1>
            <p>
            <?php
                $array = [
                    ['nome' => 'Thiago', true],
                    ['nome' => 'Rafael', false], 
                    ['nome' =>'Gabriel', true],
                    ['nome' => 'Bill', false],
                ];

                foreach ($array as $palestrante) {
                    echo $palestrante['nome'];
                    if (!$palestrante[false]){
                        echo " - Em Breve!<br>";
                    }else{
                        echo "<br>";
                    }
                    echo "
                ";
                }
        ?>
            <br><br><br></p>
        </div>
        <div class="card">
        <h1 id="local">Localização</h1>
            <p>O Evento Vai Acontecer em São Gonçalo do Sapucai<br>27/05/2026<br>Rua São Jose<br>N° 300</p>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2026 Minha Página Web. Todos os direitos reservados.</p>
            <p>Contato eventoetech@gmail.com</p>
        </div>
    </footer>
</body>
</html>
