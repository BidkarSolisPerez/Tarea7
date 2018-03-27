<?PHP

    class Producto{
        public $cantidad;
        public $descripcion;
        public $valorUnit;
        public $subTotal;

        public function __construct($cantidad, $descripcion, $valorUnit){
            echo "Ingreso al constructor.";
            $this->cantidad = $cantidad;
            $this->descripcion = $descripcion;
            $this->valorUnit = $valorUnit;
            $this->subTotal = $this->calcSub();
        }

        function setCantidad($new_cant){
            $this->cantidad = $new_cant;
        }

        function calcSub(){
            return $this->cantidad * $this->valorUnit;
        }

        function getInfo(){
            return "El producto es: ". $this->descripcion;
        }
    }

    /*
    class Factura{
        private static $numero;
        private $fecha;
        private $cliente;
        private const IMPUESTOS = 13;
        private $total;
        private $productos;

        function __constructor($nombreCliente){
            $numero = $numero + 1;
            $fecha = date('d/m/Y');
            $this-> $cliente = $nombreCliente;
            $total = calcularTotal();
            $productos = array();
        }

        function addProducto($producto){

        }

        function mostrarDatos(){
            return 'El nombre del cliente es: ' . $cliente;
        }

    }*/

    echo "<h1>Prueba de clases</h1>";
    $product = new Producto(2,'caja de leche', 1200);
    echo $product->getInfo();


?>