<html>
    <head></head>
    <body>
        <form action="" id="form" method="post">
            @csrf
            <label for="nume">Nume</label>
            <input type="text" name="nume" id="nume">

            <label for="prenume">Prenume</label>
            <input type="text" name="prenume" id="prenume">

            <label for="prenume">Varsta</label>
            <input type="number" name="age" id="age">

            <label for="filme">Filme</label>
            <select name="filme" id="filme">
            </select>

            <input type="submit" value="Adauga" id="adaugaPers">
        </form>
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="{{asset('js/functions.js')}}"></script>

<script>
        $(document).ready(function() {
        let select = $('#filme');
        $.ajax({
            url: 'api/index',
            method: 'GET',
            success : function (success) {
                console.log('success',success);
                var option = document.createElement("option");
                option.text = "Text";
                option.value = "myvalue";
                var select = document.getElementById("filme");
                select.appendChild(option);
            },
            error : function (error) {
                console.log('error',error);
            }
        })
    })
</script>
