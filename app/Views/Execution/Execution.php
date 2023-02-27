<?php
if (!defined('URL')) {
    header("Location: ../../../Erro");
    exit();
}
?>

<div class="col-lg-12 pt-2 mb-5">
    <div class="row">
        <div class="col-lg-12 mb-2">
            <table width="100%">
                <tr>
                    <td align="left" width="33%">
                        <img src="<?php echo IMG . "logo/logo.png"; ?>" height="35px">
                    </td>
                    <td align="center" width="34%" class="display_stage" style="color: white;"></td>
                    <td align="right" width="33%">
                        <button style="color: white;" type="button" class="btn btn-outline-dark" onclick="toggleFullScreen()">
                            <?php googleIcon('e5d0') ?>
                        </button>
                        <a style="color: white;" class="btn btn-outline-dark" role="button" href="<?php echo URL; ?>">
                            <?php googleIcon('e5cd') ?>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-lg-12" style="border-bottom:solid 1px; border-color: white"></div>
    </div>
</div>
<div class="col-lg-12 text-center display_image" style="padding-top: 5%;">
</div>