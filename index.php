<?php
require('helpers.php');
require ('billsplitterlogic.php');
?>

<!doctype html>

<html lang='en'>

<head>
    <meta charset='utf-8'>

    <title>Bill Splitter</title>

    <link rel='stylesheet' href='css/styles.css'>
</head>


<body>

<img src='http://www.exceltactics.com/wp-content/uploads/2015/07/SettleBillSmall-300x236.png' width='150px'>
<h2> Bill Splitter </h2>
<div class='box1'>

    <form class='form' method='GET' action='index.php'>

        <div class='form-row'>
            <label name='tabtotal'> Enter Tab </label>
            <input type='text' name='tabtotal' placeholder='Enter the Tab Total'>
        </div>
        <br>
        <div class='form-row'>
            <label name='tabsplit'> Tab Sharing </label>
            <input type='text' name='tabsplit' placeholder='How many People?'>
        </div>

        <br>
        <div class='form-row'>
            <label name='tip'>Service Tip</label>

            <select name='tip'>
                <option value='0'>No Tips</option>
                <option value='.10' name='tip'>Poor Service 10%</option>
                <option value='.20' name='tip'>Good Service 20%</option>
                <option value='.30' name='tip'>Exceptional Service 30%</option>
            </select>
        </div>
        <br>

        <div class='radio-buttons'>
            <label>
                Round Up
                <input type='radio' name='checked'>

            </label>
        </div>

        <button type='submit' class='btn btn-primary btn-small'> Calculate</button>
         <br>
        <h3>
           Each Person Final Tab is  <?= sanitize( $result) ?>
        </h3>

    </form>

</div>

</body>

</html>

