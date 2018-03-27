<!DOCTYPE html>
<?PHP

    date_default_timezone_set('UTC');

    $path = "data.json";

    if (!file_exists($path))
        exit("File not found");
    $data = file_get_contents($path);
    $json = json_decode($data, true);

    $file = fopen($path, "w");

    $factActual = "";

    $factura = array(
        'numero' => 10,
        'fecha' => date("m/d/Y"),
        'cliente' => 'Jose',
        'impuesto' => 0.13,
        'productos' => array(
            array('cantidad' => 2,
            'descripcion' => 'caja de leche',
            'valorUnitario' => 500,
            'subtotal'),
            array('cantidad' => 2,
            'descripcion' => 'cepillo diente',
            'valorUnitario' => 250,
            'subtotal' => 'cantidad' * 'valorUnitario')
        ),
        'montoTotal' => 'impuesto' * calcularMonto()
    );

    $facturas = array();

    function calcularMonto(){

    }

    


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

        <?PHP
            if(!$factActual){
                echo '<label>Numero Factura: <input type="text" name="numFactura" /></label>';
                echo '<label>Fecha: <input type="date" name="numFactura" /><label><br/>';
                echo '<label>Nombre Cliente: <input type="text" name="cliente" /><label><br/>';
            }else{


            }
        ?>

    </div>

</body>
</html>