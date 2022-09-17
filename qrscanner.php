<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan QR Code</title>
    <?php include "header_include.php"; ?>
</head>

<body>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-5 col-12">
                <h2 class="text-center"> QR Code Generator</h2>
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label for="data" class="form-label">Data</label>
                        <input class="form-control" type="text" id="data" name="data" placeholder="Ex: Hello World"
                            required>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="width" class="form-label">Width</label>
                            <input class="form-control" type="number" id="width" name="width" placeholder="Ex: 250px">
                        </div>

                        <div class="col-6">
                            <label for="height" class="form-label">Width</label>
                            <input class="form-control" type="number" id="height" name="height" placeholder="Ex: 250px">
                        </div>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit" name="generate">Generate</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <?php include "footer_include.php"; ?>
</body>

</html>