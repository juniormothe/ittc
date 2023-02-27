<?php
function varDump($array)
{
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
}

function googleIcon(string $codePoint, string $size = 'sm', string $color = null)
{
    $sizeIcon = [
        's' => 'style="font-size:13px;"',
        'xs' => 'style="font-size:15px;"',
        'sm' => 'style="font-size:20px;"',
        'md' => 'style="font-size:25px;"',
        'lg' => 'style="font-size:30px;"',
        'xl' => 'style="font-size:35px;"'
    ];
    echo '<i class="material-icons text-' . $color . '" ' . $sizeIcon[$size] . '>&#x' . $codePoint . ';</i>';
}

function classGoogleIcon(string $codePoint, string $size = 'sm', string $color = null)
{
    $sizeIcon = [
        's' => 'style="font-size:13px;"',
        'xs' => 'style="font-size:15px;"',
        'sm' => 'style="font-size:20px;"',
        'md' => 'style="font-size:25px;"',
        'lg' => 'style="font-size:30px;"',
        'xl' => 'style="font-size:35px;"'
    ];
    return '<i class="material-icons text-' . $color . '" ' . $sizeIcon[$size] . '>&#x' . $codePoint . ';</i>';
}

function nameMonth($month, $type = null)
{
    $nameMonth = ['01' => 'janeiro', '02' => 'fevereiro', '03' => 'março', '04' => 'abril', '05' => 'maio', '06' => 'junho', '07' => 'julho', '08' => 'agosto', '09' => 'setembro', '10' => 'outubro', '11' => 'novembro', '12' => 'dezembro'];
    if (empty($type)) {
        return $nameMonth[$month];
    } else {
        return $nameMonth;
    }
}

function nameWeek($week)
{
    $nameWeek = ['0' => 'domingo', '1' => 'segunda', '2' => 'terça', '3' => 'quarta', '4' => 'quinta', '5' => 'sexta', '6' => 'sábado'];
    return $nameWeek[$week];
}

function dateStartMonth()
{
    return date('Y-m-01');
}

function dateEndtMonth()
{
    return date('Y-m-') . cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
}

function dateBrazilianPattern($date)
{
    return date('d/m/Y',  strtotime($date));
}

function dateTimeBrazilianPattern($dateTime)
{
    return date('d/m/Y H:i:s',  strtotime($dateTime));
}

function formatMoney($value)
{
    return number_format($value, 2, ',', '.');
}

function totalDays($dateStart, $dateEnd)
{
    $difference = strtotime($dateEnd) - strtotime($dateStart);
    return floor($difference / (60 * 60 * 24));
}

function calcutateAge($birthday)
{
    $birthdayObject = new DateTime(date("Y-m-d", strtotime($birthday)));
    $nowObject = new DateTime();
    $diff = $birthdayObject->diff($nowObject);
    return $diff->y;
}

function nameSex($sex)
{
    $nameSex = ['0' => '', '1' => 'masculino', '2' => 'feminino'];
    return $nameSex[$sex];
}

function listPad()
{
    $listPad = ['coren' => 'enfermagem', 'crf' => 'farmácia', 'crefito' => 'fisioterapia', 'crefono' => 'fonoaudiologia', 'crm' => 'medicina', 'crn' => 'nutrição', 'cro' => 'odontologia', 'crp' => 'psicologia', 'cress' => 'serviço social', '0' => 'outros'];
    return $listPad;
}

function listUnitCalculate()
{
    $listUnitCalculate = [0 => 'Única', 1 => '1 hora', 2 => '2 horas', 3 => '3 horas', 4 => '4 horas', 5 => '5 horas', 6 => '6 horas', 7 => '7 horas', 8 => '8 horas', 9 => '9 horas', 10 => '10 horas', 11 => '11 horas', 12 => '12 horas', 13 => '13 horas', 14 => '14 horas', 15 => '15 horas', 16 => '16 horas', 17 => '17 horas', 18 => '18 horas', 19 => '19 horas', 20 => '20 horas', 21 => '21 horas', 22 => '22 horas', 23 => '23 horas', 24 => '24 horas'];
    return $listUnitCalculate;
}

function viewValueEmpty($value)
{
    if (!empty($value)) {
        return $value;
    } else {
        return "---------------";
    }
}

function iconStatus($status = null)
{
    $iconStatusArray = ['0' => classGoogleIcon('e8ac', 'xs', 'danger'), '1' => classGoogleIcon('e061', 'xs', 'success'), '2' => classGoogleIcon('e14b', 's')];
    if (isset($iconStatusArray[$status])) {
        return $iconStatusArray[$status];
    } else {
        return classGoogleIcon('e061', 'xs', 'muted');
    }
}

function listFrequency()
{
    $listFrequency = [1 => 'diária', 2 => 'semanal', 3 => 'quinzenal', 4 => 'mensal', 5 => 'bimestral', 6 => 'trimestral', 7 => 'semestral', 8 => 'anual', 9 => 'única'];
    return $listFrequency;
}

function printName($name)
{
    $printName = '';
    $name = explode(' ', $name);
    if (!empty($name)) {
        $printName .= $name[0];
        if (isset($name[1])) {
            $printName .= " " . $name[1];
        }
        if (isset($name[2])) {
            $printName .= " " . $name[2];
        }
    }
    return $printName;
}
