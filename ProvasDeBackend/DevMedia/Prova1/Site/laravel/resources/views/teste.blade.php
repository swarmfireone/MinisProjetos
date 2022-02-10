<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="p-1 m-3 w-25">
        <form method="post" enctype="multipart/form-data">
            @csrf
    
            <label for="imagemUpload" class="text-form">
                Selecione a capa da notícia :
            </label>
            <br>
            <input type="file" name="imagemNoticia" id="imagemUpload" class="text-upload-imagem">
            <button type="submit" class="btn btn-primary my-3 text-upload-imagem">Enviar Imagem</button>

        </form>
    
    </div>
    
</body>
</html>
