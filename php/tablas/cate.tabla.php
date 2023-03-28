  <?php 
   include("../../cn/conexion.php");       
   ?>

   <table id="example" class="table table-bordered table-hover table-sm" style="width:100%">
    <thead>
        <tr>
            <th hidden>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Opciones</th>
        </tr>
    </thead> 
    <tbody>
     <?php 

     $sql=mysqli_query($db,"SELECT * FROM categorias ") or die(mysqli_error());
     while ($row=mysqli_fetch_array($sql)) {

        ?>
        <tr>
            <td hidden><?php echo $row['id'];?></td>
            <td><?php echo $row['nombre'];?></td>
            <td><?php echo $row['descripcion'];?></td>
            <td>
                <span id="actu" class="btn btn-warning" data-bs-toggle="modal" tooltip="tooltip" title="Editar registro" data-bs-target="#modalEditaCate" onclick="traeDatosCate(<?php echo $row['id']; ?>)">
                    <i class="fa-solid fa-pencil"></i>
                </span>
                <span class="btn btn-danger" tooltip="tooltip" title="Eliminar registro" onclick="eliminaDatosCate(<?php echo $row['id'];?>)">
                    <i class="fa-solid fa-trash-can"></i>
                </span>
            </td>
        </tr>
        <?php 
    }
    ?>
</tbody>
</table>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[tooltip="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>

<script src="../librerias/dataTables/tabla_ES.js"></script>
