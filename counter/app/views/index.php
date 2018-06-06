<?php

require_once "../controller/controller.php";

?>

<html lang="pt-br">
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script language="JavaScript" src="../../assets/js/shortcut.js"></script>
    <script>

    shortcut.add("1",function()
    {
        var num = document.getElementById("num1").value;
        num.value = num--;
        alert(num);

    });

    shortcut.add("2",function subtrai2()
    {
        var num = document.getElementById("num2").value;
        num.value = num--;
        alert(num);
    });

    shortcut.add("3",function subtrai3()
    {
        var num = document.getElementById("num3").value;
        num.value = num--;
        alert(num);
    });

    shortcut.add("4",function subtrai4()
    {
        var num = document.getElementById("num4").value;
        num.value = num--;
        alert(num);
    });

    shortcut.add("5",function subtrai5()
    {
        var num = document.getElementById("num5").value;
        num.value = num--;
        alert(num);
    });

    shortcut.add("6",function subtrai6()
    {
        var num = document.getElementById("num6").value;
        num.value = num--;
        alert(num);
    });

    shortcut.add("7",function subtrai7()
    {
        var num = document.getElementById("num7").value;
        num.value = num--;
        alert(num);
    });

    shortcut.add("8",function subtrai8()
    {
        var num = document.getElementById("num8").value;
        num.value = num--;
        alert(num);
    });

    shortcut.add("9",function subtrai9()
    {
        var num = document.getElementById("num9").value;
        num.value = num--;
        alert(num);
    });

    shortcut.add("0",function subtrai10()
    {
        alert("Foi pressionado a tecla 0!");
    });

    </script>

    <link rel="stylesheet" href="../../assets/css/index.css">

    <meta charset="UTF-8">

    <title>Contador</title>
</head>
<body>
<br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">A</h5>
                    <input disabled id="num1" value=128 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">+</button>
                    <button class="btn btn-outline-danger" style="width: 48%">-</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">2</h5>
                    <input disabled id="num2" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">+</button>
                    <button class="btn btn-outline-danger" style="width: 48%">-</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">3</h5>
                    <input disabled id="num3" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">+</button>
                    <button class="btn btn-outline-danger" style="width: 48%">-</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">4</h5>
                    <input disabled id="num4" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">+</button>
                    <button class="btn btn-outline-danger" style="width: 48%">-</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">5</h5>
                    <input disabled id="num5" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">+</button>
                    <button class="btn btn-outline-danger" style="width: 48%">-</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">6</h5>
                    <input disabled id="num6" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">+</button>
                    <button class="btn btn-outline-danger" style="width: 48%">-</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">7</h5>
                    <input disabled id="num7" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">+</button>
                    <button class="btn btn-outline-danger" style="width: 48%">-</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">8</h5>
                    <input disabled id="num8" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">+</button>
                    <button class="btn btn-outline-danger" style="width: 48%">-</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">9</h5>
                    <input disabled id="num9" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">+</button>
                    <button class="btn btn-outline-danger" style="width: 48%">-</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">10</h5>
                    <input disabled id="num10" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">+</button>
                    <button class="btn btn-outline-danger" style="width: 48%">-</button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>