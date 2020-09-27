<?php


$usuario = "root";
$contrasena = "root";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "turismoCUU";

$conexion = mysqli_connect( $servidor, $usuario,$contrasena);

$db = mysqli_select_db( $conexion, $basededatos) or die ( "Upps! algo va mal" );;

$consulta = "SELECT * FROM zonasArq";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");


$registros = array();
while ($fila = $resultado->fetch_assoc()) {
    $registros[] = array('entidad'=>$fila['entidad'],
    'Zona Arqueologica'=>$fila['zonaArqueologica'],
    'Responsable'=>$fila['responsable'],
    );
}

header('Content-type: application/json');
echo json_encode(array('registros'=>$registros));

/*
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Zona Arqueológica</th>";
echo "<th>Responsable</th>";
echo "</tr>";
while ($columna = mysqli_fetch_array( $resultado )){
	echo "<tr>";
	echo "<td>" . $columna['entidad'] . "</td><td>" . $columna['zonaArqueologica'] ."</td><td>" .
  $columna['responsable'] . "</td>";
	echo "</tr>";
}
echo "</table>";
*/


/*$posts = array();
if(mysql_num_rows($result)){
        while($post = mysql_fetch_assoc($result)) {
                $posts[] = array('post'=>$post);
        }
}*/

//header('Content-type: application/json');
//echo json_encode(array('posts'=>$posts));


/* comprobamos que el usuario nos viene como un parametro
//if(isset($_GET['user']) && intval($_GET['user'])) {

        $number_of_posts = isset($_GET['num']) ? intval($_GET['num']) : 10; //10 es por defecto
        $format = json; //strtolower($_GET['format']) == 'json' ? 'json' : 'xml'; //xml es por defecto
        $user_id = intval($_GET['user']);

        $link = mysql_connect('localhost','usuario','password') or die('No se puede conectar a la BD');
        mysql_select_db('turismoCUU',$link) or die('No se puede seleccionar la BD');

        //$query = "SELECT post_title, guid FROM wp_posts WHERE post_author = $user_id AND post_status = 'publish' ORDER BY ID DESC LIMIT $number_of_posts";
        //$result = mysql_query($query,$link) or die('Query no funcional:  '.$query);

        $query = "SELECT * FROM zonasArq WHERE entidad = Chihuahua ORDER BY DESC ";
        $result = mysql_query($query,$link) or die('Query no funcional:  '.$query);


        $posts = array();
        if(mysql_num_rows($result)){
                while($post = mysql_fetch_assoc($result)) {
                        $posts[] = array('post'=>$post);
                }
        }


        if($format == 'json'){
                header('Content-type: application/json');
                echo json_encode(array('posts'=>$posts));
        }
        else{
                header('Content-type: text/xml');
                echo '';
                foreach($posts as $index => $post){
                        if(is_array($post)) {
                                foreach($post as $key => $value){
                                        echo '<',$key,'>';
                                        if(is_array($value)){
                                                foreach($value as $tag => $val){
                                                        echo '<',$tag,'>',htmlentities($val),'';
                                                }
                                        }
                                        echo '';
                                }
                        }
                }
                echo '';
        }

        @mysql_close($link);
//}
*/

?>
