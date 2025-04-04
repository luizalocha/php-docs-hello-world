<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Frank</title>
    <style>
        body {
            background-color: blue;
            color: white;
            font-size: 44px; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
            flex-direction: column;
        }

        h2 {
            font-size: 22px;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image {
            margin-left: 20px;
        }

        img {
            width: 100px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Olá, Frank!</h1>
        <h2>Essa é minha aplicação em PHP, instalada nos servidores da Azure na Índia!</h2>
        <div class="container">
            <!-- Imagem da bandeira da Índia -->
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Flag_of_India.svg" alt="Bandeira da Índia">
            <!-- GIF do elefante indiano -->
            <div class="image">
                <img src="https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExaTc5dXIxaHkzb2hyNGZsMTIyZWdhaDN4OXR6b2x2d3JvZGlkdDNsciZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/TKUmFOx26jkbrPD7me/giphy.gif" alt="Elefante Indiano">
            </div>
        </div>
    </div>
</body>
</html>
