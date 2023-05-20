<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


<body>
    <div class="container">
        <div class="board">
            <div class="riga">
                <div class="item">
                    <ul class="scroll">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                    </ul>
                </div>
                <div class='item'>B</div>
                <div class='item'>C</div>
                <div class='item'>D</div>
            </div>
            <div class="riga">
                <div class='item'>A</div>
                <div class='item'>B</div>
                <div class='item'>C</div>
                <div class='item'>D</div>
            </div>
            
        </div>
    </div>
    
</body>

<script>
    $(document).ready(function () {
        $(".item").click(function (e) { 
            e.preventDefault();
            $(".scroll").slideToggle();
        });
    });

</script>
</html>