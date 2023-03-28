
<!-- Modal agregar-->
<div class="modal fade" id="modalAgregaMadera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar datos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form id="formAgregaMadera">
            <label> Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" onkeyup="saltar(event,'diametro')"
            onkeypress="return validar(event);" >

            <label> Diámetro</label>
            <input type="number" name="diametro" id="diametro" class="form-control" onkeyup="saltar(event,'largo')"
            onkeypress="return validar(event);">

            <label> Largo</label>
            <input type="number" name="largo" id="largo" class="form-control" onkeyup="saltar(event,'agregaMadera')"
            onkeypress="return validar(event);">

            <!-- <input type="date" hidden="" name="fecha" id="fecha"> -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="agregaMadera" >Agregar datos</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal editar-->
<div class="modal fade" id="modalEditaMadera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar datos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formEditaMadera">
          <input type="text" hidden="" name="idMadera" id="idMadera">

          <label> Cantidad</label>
          <input type="number" name="Ecantidad" id="Ecantidad" class="form-control" onkeyup="saltar(event,'Ediametro')"
            onkeypress="return validar(event);">

          <label> Diámetro</label>
          <input type="number" name="Ediametro" id="Ediametro" class="form-control" onkeyup="saltar(event,'Elargo')"
            onkeypress="return validar(event);" >

          <label> largo</label>
          <input type="number" name="Elargo" id="Elargo" class="form-control" onkeyup="saltar(event,'editaMadera')"
            onkeypress="return validar(event);" >

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="editaMadera">Actualizar</button>
      </div>
    </div>
  </div>
</div>

<div id="simadera" align="center"></div>

<script type="text/javascript">

  $(document).ready(function() {
          $('#agregaMadera').click(function() {
          agregaDatosMadera();
          // hola();
        });
  });


  $(document).ready(function() {
          $('#editaMadera').click(function() {
          editaDatosMadera();
        });
  });

  $(function() {
      $('#modalAgregaMadera').on('shown.bs.modal', function (e) {
        $('input[name=cantidad]').focus();
      })
  });

  $(function() {
      $('#modalEditaMadera').on('shown.bs.modal', function (e) {
        $('input[name=Ecantidad]').focus();
      })
  });

</script>
