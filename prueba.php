<?PHP

    class Producto{
        private $cantidad;
        private $descripcion;
        private $valorUnit;
        private $subTotal;

        
    }

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

    }

    class person {
		var $name;
		function set_name($new_name) {
			$this->name = $new_name;
		}
		function get_name() {
			return $this->name;
		}
	}

    $factura = new Factura('Bidkar');
    echo $factura -> mostrarDatos();

    echo "Hola mundo!";

?>