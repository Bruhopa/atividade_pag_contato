<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página para Contato</title>
    <style>
    :root {
        --primary-color: #48c6b7;
        --primary-color-dark: #3ca99c;
        --text-dark:#1f2937;
        --text-light:#e5e7eb;
        --extra-light:#f4f6f6;
        --white:#ffffff;
    }
    h1 {
        font-size: 1.5rem;
        font-weight: 500;
        color:var(--text-dark);
        text-align: middle;
        font-family: Arial (sans-serif)

    }
    h2 {
        font-size: 1.5rem;
        font-weight: 500;
        color:var(--text-dark);
        text-align: center;
        
        font-family: Arial (sans-serif)

    }
    a {
        font-size: 1.2rem;
        font-weight: 500;
        color:var(--text-dark);
        text-align: middle;
    }
    iframe {
        width: 45%;
        height: 450px;
        position: absolute;
        bottom: 0;
        left: 0;
        margin: 20px 25px 25px 40px
    }
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body   {
        font-family: "Roboto", sans-serif;
    }


    .container {
        display:grid;
        grid-template-columns: repeat(2, 1fr);
        min-height: 100vh;
    }

    .container_left{
        background:url("assets/R.jfif");
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .container_right{
        padding: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--extra-light);
    }

    .heading {
        font-size: 2rem;
        font-weight: 500;
        color:var(--text-dark);
        margin-bottom: 3rem;
        text-align: center;
        color: var(--text-dark)
    }

    .header_content {
        display:flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
        flex-wrap: wrap;
        margin-bottom: 2rem;
    }

    .header_content p {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--text-dark);
    }

    .header_content p a {
        text-decoration: none;
        color: var(--primary-color);
    }

    .header_content p a:hover {
    background-color: var(--primary-color-dark);
    color: var(--text-light);
    border-radius: 10px;
    }

    form {
    display: grid;
    gap: 1.5;
    }

    form input {
        padding: 1rem;
        font-size: 1rem;
        color: var(--text-dark);
        background-color: var(--white);
        outline: none;
        border: 2px solid var(--text-light)
    }

    form button {
    padding: 1rem;
    font-size: 1rem;
    font-weight: 500;
    color: var(--white);
    background-color: var(--primary-color);
    outline: none;
    border: none;
    cursor: pointer;
    transition: 0.3s;
    }

    form button:hover {
    background-color: var(--primary-color-dark);

    }
    </style>
</head>
<body>
    <div class="container">
      <div class="container_left">
        <h2>Contato</h2>
        <br>
        <a>Telefone para contato:+55 (47) 9****-****</a>
        <br>
        <a>Email para contato: bruno.rosatti@unidavi.edu.br</a>
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3548.272911944009!2d-49.64412632438901!3d-27.21058013580652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dfb9ae021204f5%3A0xada6f95bdcb46273!2sUnidavi!5e0!3m2!1spt-PT!2sbr!4v1693850394664!5m2!1spt-PT!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="container_right">
        <div class="content">
            <div class="header_content"> 
            <h1>Registre-se</h1>
            </div>
            <form method="POST" action="testemailgun.php">
                <h1>NOME</h1>
                <input type="text" placeholder="Seu nome">
                <br>
                <h1>FONE</h1>
                <input type="number" placeholder="Seu telefone">
                <h1>EMAIL</h1>
                <br>
                <input type="text" placeholder="Seu email">
                <h1>ASSUNTO</h1>
                <br>
                <input type="text" placeholder="Assunto da mensagem">
                <h1>MENSAGEM</h1>
                <br>
                <textarea id="review" name="review" rows="4" cols="50"></textarea>
                <p class="logged_in">
                    <input type="checkbox">
                    <span>Manter conectado</span>
                </p>
                 <button class="submit_btn">Entrar</button>        
            </form>
        </div>
      </div>
    </div>
</body>
</html>