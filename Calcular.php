<?php 

if (isset($_POST["btncalcular"])){

    

    require_once 'Logica/Nota1.php';
    require_once 'Logica/Nota2.php';
    require_once 'Logica/Nota3.php';
    require_once 'Logica/Nota4.php';
    require_once 'Logica/Nota5.php';
    require_once 'Logica/Total.php';


    $nota1 = $_POST['txttaller1'];
    $nota2 = $_POST['txttaller2'];
    $nota3 = $_POST['txtcuestionario1'];
    $nota4 = $_POST['txtcuestionario2'];
    $nota5 = $_POST['txtproyectofinal'];

    $objNota1 = new Nota1( $nota1, $nota2,$nota3,$nota4,$nota5);
    $objNota2 = new Nota2( $nota1, $nota2,$nota3,$nota4,$nota5);
    $objNota3 = new Nota3( $nota1, $nota2,$nota3,$nota4,$nota5);
    $objNota4 = new Nota4( $nota1, $nota2,$nota3,$nota4,$nota5);
    $objNota5 = new Nota5( $nota1, $nota2,$nota3,$nota4,$nota5);
    $objTotal= new Total  ( $nota1, $nota2,$nota3,$nota4,$nota5);
    


   

    //$this->calcularNota1()+calcularNota2()+calcularNota3()+calcularNota4()+calcularNota5())/5;
    echo "<b>La nota definitiva es :<br>" .$objTotal->calcularTotal() . "<br>";

    if ($objTotal->calcularTotal()<1){
 
        echo "<b> la nota es Super deficiente, Materia perdida y debe pagarla nuevamente = 500.000. :<br>";

       
    }else if ($objTotal->calcularTotal()<2){
       
        echo "<b>La nota es Deficiente, Materia perdida pero solo debe pagar el 50%. :<br>"."<br>";
        $precio=500000;
        $total=$precio*0.5;
        echo "<b>La valor a pagar :<br>".$total."<br>";

    }else if ($objTotal->calcularTotal()<3){
   
        echo "<b>La nota es Insuficiente, Materia perdida pero paga el 10%.<br>"."<br>";
        $precio=500000;
        $total=$precio*0.10;
        echo "<b>La valor a pagar :<br>".$total."<br>";
     

    }else if ($objTotal->calcularTotal()<4){
       
        echo "<b>La nota es Aceptable, Materia aprobada.<br>"."<br>";
    }else if ($objTotal->calcularTotal()<5){
        echo "<b>La nota es sobresaliente.<br>"."<br>";

    }else if ($objTotal->calcularTotal()==5){
        echo "<b>La nota es Excelente y gana beca educativa.<br>"."<br>";

}else{
    echo "Estas hackiando";
}



$time = time();

echo date("d-m-Y (H:i:s)", $time);
}

?>