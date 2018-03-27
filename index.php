<!DOCTYPE html>
<?PHP
    $path = "data.json";

    if (!file_exists($path))
        exit("File not found");
    $data = file_get_contents($path);
    $json = json_decode($data, true);

    $file = fopen($path, "w");

    


?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador de facturas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

    <style>

        body{
            display: flex;
        }

        #panel-izq{
            background-color: blue;
            width: 40%;
            display: inline-blok;
        }

        #panel-der{
            background-color: green;
            width: 60%;
        }

    </style>

</head>
<body>

    <div id="panel-izq">
        <center>
            <h1>All Receipts</h1>
            <table>


            </table>
        </center>
    </div>

    <div id="panel-der">
        <center>
            <h1>Billing detail</h1>


        </center>
    </div>

</body>
</html>