<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
    })
</script>
<!-- Modal -->
<?php
include('./administrador/back/datosRegistro.php');
?>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">TPS 35 APP</h1>
            </div>
            <div class="modal-body">
                <?php
                if(){
                    echo" <h3> Se han registrado los datos con exito </h3>";
                } else{
                    echo" <h3> Error al registrar los datos</h3>";
                }
                ?>
            </div>
            <div class="modal-footer bg-light justify-content-center">
                <?php
                if () {
                    echo "<a href='login.php'><button type='button' class='btn btn-success' data-bs-dismiss='modal' aria-label='Close'>Finalizar Registro</button></a>";
                } else {
                    echo "<a href='register.php'><button type='button' class='btn btn-success' data-bs-dismiss='modal' aria-label='Close'>Finalizar Registro</button></a>";
                }
                ?>
            </div>
        </div>
    </div>
</div>