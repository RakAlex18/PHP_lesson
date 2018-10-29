<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Админпанель</title>
</head>
<body>

<div class=" registrUser">

    <form action="create_news.php" method="post" class="container form-horizontal" role="form">
        <div class="form-row">
            <div class="form-group col-md-6 mt-3 mb-3">
                <label for="title" class="col-sm-12 control-label sr-only">title</label>

                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            TITLE
                        </div>
                    </div>
                    <input type="text" name="title" id="title" placeholder="название новости" class="form-control" autofocus>
                </div>
            </div>
            <div class="form-group col-md-6 mt-3 mb-3">
                <label for="content" class="col-sm-12 control-label sr-only">content</label>

                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            CONTENT
                        </div>
                    </div>
                    <input type="text" name="content" id="title" placeholder="содержание новости" class="form-control" autofocus>
                </div>
            </div>

            </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="link_content" class="col-sm-5 control-label sr-only">Ссылка на источник</label>
                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            link_content
                        </div>
                    </div>
                    <input type="text" name="login" id="login" placeholder="Ссылка на источник" class="form-control" autofocus>
                </div>
            </div>



        </div>
        <div class = "row justify-content-center">
            <div class = "col-auto">
                <button type="submit" class="btn btn-primary btn-block">Создать новость</button>

            </div>
        </div>



    </form> <!-- /form -->

</div>
</body>
</html>
