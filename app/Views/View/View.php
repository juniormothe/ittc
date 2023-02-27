<?php
if (!defined('URL')) {
    header("Location: ../../../Erro");
    exit();
}
?>
<div class="col-lg-12 mb-3">
    <div class="card card-small">
        <div class="card-body border-bottom">
            <div class="row">
                <div class="col-lg-9">
                    <h5 class="m-0 p-0 text-<?php echo BUSINESS['color_system']; ?>"><?php googleIcon('e88a'); ?> <b>Title</b></h5>
                </div>
                <div class="col-lg-3 text-right">
                    <a title="Editar" class="btn btn-outline-<?php echo BUSINESS['color_system']; ?> micro-button" href="" role="button">
                        <?php googleIcon('e836'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card card-small">
        <div class="card-body border-bottom pl-3 pr-3 pt-2 pb-2">
            <div class="row">
                <div class="col-lg-10">
                    <h5 class="m-0 p-0"><b>Exemple view</b></h5>
                </div>
                <div class="col-lg-2 text-right">
                    <a class="btn btn-outline-secondary micro-button" href="" role="button">
                        <?php googleIcon('e836', 'xs'); ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body pt-3 pb-3">
            <table class="table table-sm table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Primeiro</th>
                        <th scope="col">Último</th>
                        <th scope="col">Nickname</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>

                    <tr>
                        <td colspan="10" style="padding: 0px;"></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>