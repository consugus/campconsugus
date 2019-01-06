  <?php
    include_once "includes/templates/header.php";
    use PayPal\Rest\ApiContext;
    use PayPal\Api\PaymentExecution;
    use PayPal\Api\Payment;
    require "includes/paypalConfig.php";
  ?>

    <section class="seccion contenedor">
          <h2>Resumen Registro</h2>
          <?php
              $paymentId = $_GET['paymentId'];
              $id_Pago = (int)$_GET['id_pago'];

              // Petición a Rest API
              $pago = Payment::get($paymentId, $apiContext); // En Pago le decimos con $paymentID cuál queremos revisar, iniciando sesión con nuestras credenciales de $ApiContext
              $execution = new PaymentExecution(); // ejecutamos
              $execution->setPayerId($_GET['PayerID']); //Indicamos qué pago queremos verificar si fué correcto

              $resultado = $pago->execute($execution, $apiContext); // contiene la información de la transacción

              $respuesta = $resultado->transactions[0]->related_resources[0]->sale->state;

              // echo "<pre>";
              //   var_dump($respuesta);
              // echo "</pre>";

              if($respuesta == 'completed') {
                echo "<div class='resultado correcto'>";
                echo    "El pago se realizo correctamente! </br> ";
                echo    "El id es {$paymentId} ";
                echo "</div>";
                require_once('includes/funciones/dbconnection.php');
                $stmt=$conn->prepare("UPDATE registrados SET pagado = ? WHERE id_registrado = ?");
                $pagado = 1;
                $stmt->bind_param('ii', $pagado, $id_Pago);
                $stmt->execute();
                $stmt->close();
                $conn->close();

              } else {
                echo "<div class='resultado error'>";
                echo "El pago no se realizó";
                echo "</div>";



              }
            ?>
      </div>


  <?php include_once "includes/templates/footer.php" ?>

</section>