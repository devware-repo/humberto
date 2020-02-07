<?php
  $route  = '/' . explode('/', $_SERVER['REDIRECT_QUERY_STRING'])[1];
  $routes = include('routes.php');

  if( !$routes[$route] ) {
    header('Location: not-found');
    exit;
  }

  $currentRoute = $routes[$route];
  $file = './pages/' . $currentRoute['file'];
  $css_file = 'assets/css/' . explode('.', $currentRoute['file'])[0] . '.css';
  $has_css = file_exists('./' . $css_file);

  if($currentRoute['template']) {

    require_once './template/header.php';
    require_once $file;
    
    if( array_key_exists('showMap', $currentRoute) ) {
      if( $currentRoute['showMap'] ) {

        require_once './template/map.php';

      }
    } else {

      require_once './template/map.php';

    }

    require_once './template/footer.php';

  } else {

    require_once $file;

  }

?>