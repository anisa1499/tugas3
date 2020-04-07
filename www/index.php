<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/ionic.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#insert").click(function() {
            var nama = $("#nama").val();
            var progdi = $("#progdi").val();
            var judul = $("#judul").val();
            var dataString = "nama=" + nama + "&progdi=" + progdi + "&judul=" + judul + "&insert=";
            if ($.trim(nama).length > 0 & $.trim(progdi).length > 0 & $.trim(judul).length > 0) {
                $.ajax({
                    type: "POST",
                    url: "https://ansadewiprtiwi999.000webhostapp.com/insert.php",
                    data: dataString,
                    crossDomain: true,
                    cache: false,
                    beforeSend: function() {
                        $("#insert").val('Connecting...');
                    },
                    success: function(data) {
                        if (data == "success") {
                            alert("inserted");
                            $("#insert").val('submit');
                        } else if (data == "error") {
                            alert("error");
                        }
                    }
                });
            }
            return false;
        });
    });
    </script>
</head>

<body>
    <div class="bar bar-header bar-positive" style="margin-bottom:80px;">
        <h1 class="title">Insert Database</h1>
        <a class="button button-clear" href="readjson.html">Read JSON</a>
    </div>
    <br/>
    <br/>
    <div class="list">
        <input type="hidden" id="nim" value="" />
        <div class="item">
            <label>Nama</label>
            <input type="text" id="nama" value="" />
        </div>
        <div class="item">
            <label>Progdi</label>
            <input type="text" id="progdi" value="" />
        </div>
        <div class="item">
            <label>Judul</label>
            <input type="text" id="judul" value="" />
        </div>
        <div class="item">
            <input type="button" id="insert" class="button button-block" value="Insert" />
        </div>
    </div>
</body>

</html>