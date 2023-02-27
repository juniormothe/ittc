<?php
if (!defined('URL')) {
    header("Location: ../../../Erro");
    exit();
}
?>
<div class="col-lg-12">
    <div class="card card-small">
        <div class="card-body pt-3 pb-3">
            <div class="row">
                <div class="col-lg-7" style="padding-top: 10%; padding-bottom: 10%">
                    <img class="img-fluid" alt="ERRO 404" src="<?php echo IMG . "error/404.gif"; ?>">
                </div>
                <div class="col-lg-5" style="padding-bottom: 15%; padding-top: 15%">
                    <h1>
                        <div class="text-primary"></div>Ops!<br>
                        <small>Pagina não encontrada.</small>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>