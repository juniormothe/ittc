<?php
if (!defined('URL')) {
    header("Location: ../../../Erro");
    exit();
}
?>


<div class="col-lg-3"></div>
<div class="col-lg-6 text-center mb-5" style="padding-top: 10%;">
    <img src="<?php echo IMG . "logo/logo.png"; ?>" style="max-width: 100%;">
</div>
<div class="col-lg-3"></div>

<div class="col-lg-12 text-center">
    <form method="POST" action="<?php echo URL . "execution"; ?>">
        <input type="hidden" name="stage" value="1">
        <input type="hidden" name="start" value="1">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-2 mb-2">
                <select class="form-control" id="second" name="second" style="color: black">
                    <option value="5">Select time</option>
                    <option value="5">05 seconds</option>
                    <option value="6">06 seconds</option>
                    <option value="7">07 seconds</option>
                    <option value="8">08 seconds</option>
                    <option value="9">09 seconds</option>
                    <option value="10">10 seconds</option>
                    <option value="11">11 seconds</option>
                    <option value="12">12 seconds</option>
                    <option value="13">13 seconds</option>
                    <option value="14">14 seconds</option>
                    <option value="15">15 seconds</option>
                </select>
            </div>
            <div class="col-lg-2 mb-2">
                <select class="form-control" id="type" name="type" style="color: black">
                    <option value="1">Select type</option>
                    <option value="1">Left / Right</option>
                    <option value="2">Left / Right / Neutral</option>
                </select>
            </div>
            <div class="col-lg-2 mb-2">
                <button style="background-color: white; color: black" class="btn btn-outline-dark btn-block" type="submit">START</button>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </form>
</div>