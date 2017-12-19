<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP : Calendrier</title>
        <link rel="stylesheet" href="styleTP.css"/>
    </head>
    <body>
        <?php
        $month = 12;
        $year = 2017;
        if (isset($_POST['menu1'])) {
            $month = $_POST['menu1'];
        }
        if (isset($_POST['menu2'])) {
            $year = $_POST['menu2'];
        }
        $daysNumber = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $firstDay = date('w', mktime(0, 0, 0, $month, 1, $year));
        ?>
        <form action="TP.php" method="post">
            <p>Mois : 
                <select name="menu1">
                    <?php
                    $array = array(1 => 'Janvier',
                        2 => 'Février', 
                        3 => 'Mars', 
                        4 => 'Avril', 
                        5 => 'Mai', 
                        6 => 'Juin', 
                        7 => 'Juillet', 
                        8 => 'Août', 
                        9 => 'Septembre', 
                        10 => 'Octobre', 
                        11 => 'Novembre', 
                        12 => 'Décembre');
                    foreach ($array as $monthInNumber => $monthInLetter) {
                        echo '<option value="' . $monthInNumber . '" ' . (($month == $monthInNumber) ? 'selected' : '') . '>' . $monthInLetter . '</option>';
                    }
                    ?>
                </select>  
            </p>

            <p>Année : 
                <select name="menu2">
                    <?php
                    for ($an = 1970; $an <= 2020; $an++) {
                        echo '<option value="' . $an . '" ' . (($year == $an) ? 'selected' : '') . ' >' . $an . '</option>';
                    }
                    ?>
                </select>
            </p>
            <input type="submit" name="name" value="Valider">
        </form>
        <table>
            <thead>
                <tr>
                    <th>Dimanche</th>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                    <th>Samedi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    for ($dayOfTheWeek = 0; $dayOfTheWeek <= 6; $dayOfTheWeek++) {
                        if ($firstDay == $dayOfTheWeek) {
                            echo '<td> 1 </td>';
                            for ($day = 2; $day <= $daysNumber; $day++) {
                                if ($dayOfTheWeek == 6) {
                                    echo '</tr><tr>';
                                    $dayOfTheWeek = -1;
                                }
                                echo '<td>' . $day . '</td>';
                                $dayOfTheWeek++;
                            }
                            $dayOfTheWeek = 6;
                        } else {
                            echo '<td></td>';
                        }
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </body>
</html>