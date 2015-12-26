<?php
namespace Drupal\my_hugs\GoGlobal {

  class NamespacedService {
    public function __construct( $createdBy='' ) {
      error_log( 'This NamespacedService object was created by ' . $createdBy . '.' );
    }

    public function logToday() {
      error_log( 'NamespacedService is logging today.' );
    }
  }
}

namespace {
  // require_once 'GlobalServiceDrupal.php';
  require_once 'GlobalService.php';

  $globalServiceObject = new GlobalService( 'non-namespaced area in NamespacedService.php' );
}
