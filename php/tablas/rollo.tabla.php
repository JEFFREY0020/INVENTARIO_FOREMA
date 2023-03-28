
  <?php 
   include("../../cn/conexion.php");  

   ?>

   <table id="example" class="table table-bordered table-striped table-hover table-sm" style="width:100%;">
    <thead>
        <tr>
            <th hidden>ID</th>
            <th>Cantidad</th>
            <th>Diametro</th>
            <th>Largo</th>
            <th>Opciones</th>
        </tr>
    </thead> 
    <tbody>
     <?php
    $PIES3 = 0;
    $METROS3 = 0;
    // $total = 0;

     $sql=mysqli_query($db,"SELECT * FROM madera_rollo") or die(mysqli_error());
     while ($row=mysqli_fetch_array($sql)) {

        ?>
        <tr>
            <td hidden><?php echo $row['id'];?></td>
            <td><?php echo $row['cantidad'];?></td>
            <td><?php echo $row['diametro'];?></td>
            <td><?php echo $row['largo'];?></td>
            <td>
                <span id="actu" class="btn btn-warning" data-bs-toggle="modal" tooltip="tooltip" title="Editar registro" data-bs-target="#modalEditaMadera" onclick="traeDatosMadera(<?php echo $row['id']; ?>)">
                    <!-- <i class="bi bi-pencil"></i> -->
                    <i class="fa-solid fa-pencil"></i>
                </span>
                <span class="btn btn-danger" tooltip="tooltip" title="Eliminar registro" onclick="eliminaDatosMadera(<?php echo $row['id'];?>)">
                    <i class="fa-solid fa-trash-can"></i>
                </span>
            </td>
        </tr>
        <?php

//((pi(diametro al cuadrado + (diametro + 0.125 * largo) elevado a 2) X largo/1152)Xcantidad) "en la calculadora"
    // echo "<li>".round($contadorP3,1)."</li>";

$PIES3 += ((pi()*($row['diametro']**2+($row['diametro']+0.125*$row['largo'])**2)*$row['largo']/1152)*$row['cantidad']);

//((pi(diametro al cuadrado + (diametro + 0.125 * largo) elevado a 2) X largo/1152)Xcantidad)/35.31 "en la calculadora"
// $METROS3 += ((pi()*($row['diametro']**2+($row['diametro']+0.125*$row['largo'])**2)*$row['largo']/1152)*$row['cantidad'])/35.31;

    }
// echo "<li><b>".round($PIES3,1)."</b></li>";

     $METROS3 = $PIES3/35.31;

    ?>
</tbody>
</table>

<hr class="dropdown-divider"/>

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-6">
              TOTAL PIES CUBICOS <button class="btn btn-primary">
                  <b><?php echo round($PIES3,1)?> P<sup>3</sup></b>
              </button>
          </div>
          <div class="col-6 text-end">
              TOTAL METROS CUBICOS <button class="btn btn-primary">
                  <b><?php echo round($METROS3,1)?> M<sup>3</sup></b>
              </button>
          </div>
      </div>
  </div>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[tooltip="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>

<script src="../librerias/dataTables/tabla_ES.js"></script>
