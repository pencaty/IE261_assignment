<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .back{
            background-color:black;
            color: white;
            font-size: 20px;
            margin-top: 30px;
        }
        .but{
            alignment: center;
        }
        .text_style{
            letter-spacing: 1px;
            word-spacing: 2px;
            text-align: center;
        }
        .but_style{
            letter-spacing: 1px;
            word-spacing: 2px;
            text-align: center;
            font-size: 20px;
        }
        .but_align{
            text-align: center;
        }
    </style>
</head>
<body class="back">
<form method = "get" action="homework3_1.php">
    <table border = '1' cellpadding="10" cellspacing="1" align="center">
        <tr>
            <td rowspan='4'><img src="tarot.png" width="150" height="150"></td>
            <td class="text_style">Enter your name : <input type='text' name='name' size="10" maxlength="15"></td>
        </tr>
        <tr>
            <td class="text_style">Choose your gender : <input type='radio' name='gender' value='Male'>Male <input type='radio' name='gender' value='Female'>Female</td>
        </tr>
        <tr>
            <td class="text_style">Enter your date of birth : Month <input type='text' name='month' size="1" maxlength="2"> Day <input type='text' name='day' size="1" maxlength="2"></td>
        </tr>
        <tr>
            <td><div class="but_align"><input type="submit" class="but but_style" value="Show my horoscope"></div></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
//$backcolor = "black";
//echo "<body bgcolor = '$backcolor'>";

?>