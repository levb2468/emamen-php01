<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ejercicio</title>
  <link rel="stylesheet" href="">
</head>
<body>
  <?php 

          session_start();
                    /*
                    session_destroy();
                    die("jajajaj");
                    */

            $_id = $_GET['id'];

            if(isset($_EMAMEN['carrito']))
            {
                if(isset($_EMAMEN['carrito'][md5($_id)])){
                    
                    $_EMAMEN['carrito'][md5($_id)]['stock'] += 1;
                }else{
                   $_EMAMEN['carrito'][md5($_id)]= getProductos($_id); 
                }
                
               
            }else{
             $_EMAMEN['carrito'][md5($_id)]= getProductos($_id);   
            }

              echo "<pre>";

              print_r ($_EMAMEN);

            //  print_r(getProductos($_id));

              function getProductos($id)
              {
                  if($id == 1)
                  {
                      return[
                              'id'     => 1,
                              'nombre' => 'polo',
                              'foto'   => 'ropa_abercrombie_fitch.jpg',
                              'descripcion' => 'ropa',
                              'stock'  => 25,
                              'precio' => 80.00
                            ];
                  }
                  
                  if($id==2)
                  {
                      return[
                              'id'     => 2,
                              'nombre' => 'Iphone',
                              'foto' => 'GALAXY_SIII_mini_Product_Image4.jpg',
                              'descripcion'  => 'celulares',
                              'stock' => 50,
                              'precio' => 3000.00
                            ];
                  }
                  
                  if($id==3)
                  {
                      return[
                              'id'     => 3,
                              'nombre' => 'Casaca',
                              'foto' => 'televisores-4k-bajo-costo.jpg',
                              'descripcion' => 'electrodomesticos',
                              'stock'  => 10,
                              'precio' => 5000.00
                            ];
                  }    
                  return FALSE;
                  
                  
              }

 ?>

 <h1><a href="index.php">Regresar</a></h1> 
</body>
</html>
