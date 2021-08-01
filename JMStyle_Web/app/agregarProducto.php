<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMStyle | Store Online</title>
    <link rel="shortcut icon" href="../src/img/logo JMStyleV.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/style/fontawesome-free-5.15.3-web/css_fa5/all.css">
    <link rel="stylesheet" href="../src/style/style.css">
    <script type="text/javascript" src="../js/funciones.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <style media="screen">
        #uploadForm,
        #imagePreview {
            width: 720px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    
    <form id="upoadform" action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="imagen" id="imagen" />
        <input type="submit" />
    </form>

    <div id="imagePreview">
        
    </div>

    <script type="text/javascript">
        (function () {
            function filePreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#imagePreview').html("<img src='" + e.target.result + "' />");
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $('#imagen').change(function () {
                filePreview(this);
            });
        })();
    </script>

</body>

</html>