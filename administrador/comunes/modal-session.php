<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
    })
</script>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">TPS 35 APP</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h1>Quiere finalizar la sesi&oacuten?</h1>
            </div>
            <div class="modal-footer">
                <form method="post">
                <button  type="submit" class=" btn btn-danger" name="session_out"> Cerrar Sesion </a>
                </form>
                <?php
                    if(isset($_POST['session_out'])){
                        session_destroy();
                        header('location: ../../index.php');

                    }
                ?>
            </div>
        </div>
    </div>
</div>