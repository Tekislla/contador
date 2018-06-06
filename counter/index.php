<html lang="pt-br">
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script language="JavaScript" src="assets/js/shortcut.js"></script>


    <script>

    ////////////////////////////////////--FUNÇÕES SUBTRAIR--/////////////////////////////////////////

    shortcut.add("1",function()
    {
        document.getElementById("num1").innerHTML = document.getElementById("num1").value--;

    });

    shortcut.add("2",function()
    {
        document.getElementById("num2").innerHTML = document.getElementById("num2").value--;
    });

    shortcut.add("3",function()
    {
        document.getElementById("num3").innerHTML = document.getElementById("num3").value--;
    });

    shortcut.add("4",function()
    {
        document.getElementById("num4").innerHTML = document.getElementById("num4").value--;
    });

    shortcut.add("5",function()
    {
        document.getElementById("num5").innerHTML = document.getElementById("num5").value--;
    });

    shortcut.add("6",function()
    {
        document.getElementById("num6").innerHTML = document.getElementById("num6").value--;
    });

    shortcut.add("7",function()
    {
        document.getElementById("num7").innerHTML = document.getElementById("num7").value--;
    });

    shortcut.add("8",function()
    {
        document.getElementById("num8").innerHTML = document.getElementById("num8").value--;
    });

    shortcut.add("9",function()
    {
        document.getElementById("num9").innerHTML = document.getElementById("num9").value--;
    });

    shortcut.add("0",function()
    {
        document.getElementById("num10").innerHTML = document.getElementById("num10").value--;
    });

    ////////////////////////////////////--FUNÇÕES SOMA--/////////////////////////////////////////

    shortcut.add("q",function()
    {
        document.getElementById("num1").innerHTML = document.getElementById("num1").value++;

    });

    shortcut.add("w",function()
    {
        document.getElementById("num2").innerHTML = document.getElementById("num2").value++;
    });

    shortcut.add("e",function()
    {
        document.getElementById("num3").innerHTML = document.getElementById("num3").value++;
    });

    shortcut.add("r",function()
    {
        document.getElementById("num4").innerHTML = document.getElementById("num4").value++;
    });

    shortcut.add("t",function()
    {
        document.getElementById("num5").innerHTML = document.getElementById("num5").value++;
    });

    shortcut.add("y",function()
    {
        document.getElementById("num6").innerHTML = document.getElementById("num6").value++;
    });

    shortcut.add("u",function()
    {
        document.getElementById("num7").innerHTML = document.getElementById("num7").value++;
    });

    shortcut.add("i",function()
    {
        document.getElementById("num8").innerHTML = document.getElementById("num8").value++;
    });

    shortcut.add("o",function()
    {
        document.getElementById("num9").innerHTML = document.getElementById("num9").value++;
    });

    shortcut.add("p",function()
    {
        document.getElementById("num10").innerHTML = document.getElementById("num10").value++;
    });

    </script>

    <meta charset="UTF-8">
    <title>Contador</title>

</head>
<body style="background-color: #f2f2f2">
<br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center">Contador</h5>
                    <p class="card-text" style="text-align: justify">Contador desenvolvido em JavaScript. Para somar, pressione a tecla <b style="color: green">verde</b> do respectivo contador. Para diminuir, pressione a tecla <b style="color: red">vermelha</b> do respectivo contador.</p>
                    <p style="text-align: left">Desenvolvido por <a href="https://twitter.com/tekislla">João Pedro Lazarim</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">A</h5>
                    <input disabled id="num1" value=128 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">Q</button>
                    <button class="btn btn-outline-danger" style="width: 48%">1</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">2</h5>
                    <input disabled id="num2" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">W</button>
                    <button class="btn btn-outline-danger" style="width: 48%">2</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">3</h5>
                    <input disabled id="num3" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">E</button>
                    <button class="btn btn-outline-danger" style="width: 48%">3</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">4</h5>
                    <input disabled id="num4" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">R</button>
                    <button class="btn btn-outline-danger" style="width: 48%">4</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">5</h5>
                    <input disabled id="num5" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">T</button>
                    <button class="btn btn-outline-danger" style="width: 48%">5</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">6</h5>
                    <input disabled id="num6" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">Y</button>
                    <button class="btn btn-outline-danger" style="width: 48%">6</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">7</h5>
                    <input disabled id="num7" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">U</button>
                    <button class="btn btn-outline-danger" style="width: 48%">7</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">8</h5>
                    <input disabled id="num8" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">I</button>
                    <button class="btn btn-outline-danger" style="width: 48%">8</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">9</h5>
                    <input disabled id="num9" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">O</button>
                    <button class="btn btn-outline-danger" style="width: 48%">9</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">10</h5>
                    <input disabled id="num10" value=32 style="width: 100%; text-align: center">
                    <br><br>
                    <button class="btn btn-outline-success" style="width: 48%">P</button>
                    <button class="btn btn-outline-danger" style="width: 48%">0</button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>