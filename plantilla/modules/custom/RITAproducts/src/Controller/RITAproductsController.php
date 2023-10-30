<?php
namespace Drupal\RITAproducts\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RITAproductsController extends ControllerBase {

  public function ejecutarFunction() {
    // Verificar roles del usuario.
    $user = \Drupal::currentUser();
    if ($user->hasRole('content_editor') || $user->hasRole('administrator')) {

      $pythonScript = './modules/custom/RITAproducts/src/Controller/script.py';

      // Ejecuta el script Python utilizando exec().
      exec("python3 $pythonScript 2>&1", $output, $returnCode);

      // Verifica si la ejecución fue exitosa.
      if ($returnCode === 0) {
        // La ejecución fue exitosa.
        // Borrar todos los cachés.
        exec('drush cr');
        header('Location: ./SobreNosotros#productos');
        exit;
      } else {
        // Hubo un error en la ejecución.
        echo "Error al obtener la información:<br>";
        foreach ($output as $line) {
          echo $line . "<br>";
        }
      }
      return [];
    }
}
}
?>