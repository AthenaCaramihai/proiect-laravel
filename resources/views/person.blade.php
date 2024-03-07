<!DOCTYPE html>
<head></head>
<body>
    <form action="" id="personForm">
        @csrf
        <label for="uuid"></label>
        <label for="nume"></label>
        <label for="prenume"></label>
        <label for="update"></label>
    </form>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    let url = location.href
    const segments = new URL(url).pathname.split('/'); //elementele dupa /
    const id = segments.pop();

    $(document).ready(function(){
        $.ajax({
            type: "GET",
            url: "/api/person/" + id,
            success: function (data) {
                let div = document.getElementById('personForm');
                let html = '';
                html += '<h4>UUID</h4>';
                html += '<input type="text" name="uuid" id="uuid" value=" '+ data.uuid +'"></input></br>' ;
                html += '<h4>Nume</h4>';
                html += '<input type="text" name="nume" id="nume" value=" '+ data.nume +'"></input></br>' ;
                html += '<h4>Prenume</h4>';
                html += '<input type="text" name="prenume" id="prenume" value=" '+ data.prenume +'"></input></br>' ;
                html += '<h4>Varsta</h4>';
                html += '<input type="text" name="age" id="age" value=" '+ data.age +'"></input></br>' ;
                html += '<h4>Update</h4>';
                html += '<button type="submit" id="update" data-entity-id=" '+data.id+' ">Update</button>';
                div.innerHTML = html

            },
            error: function (error) {
                console.log('error',error)
            }
        });
    });

    $(document).ready(function () {

    $("#personForm").submit(function(e) {
        e.preventDefault();
        nume = $("#nume").val();
        prenume = $("#prenume").val();
        varsta = $("#age").val();

        let person = new Object();
        person.uuid = uuid;
        person.nume = nume;
        person.prenume = prenume;
        person.age = varsta;
        $.ajax({
            type: "PUT",
            method: "PUT",
            url: "http://127.0.0.1:8000/api/person/" + id,
            contentType: 'application/json',
            processData: false,
            data: JSON.stringify(person),
            success: function (success) {
                console.log('succes-put',success);
                setTimeout(() => {
                    window.location.href = 'http://127.0.0.1:8000/persons';
                  }, "1000");
            },
            error: function (error) {
                console.log('error-put',error);
            }
        });
    });
});

</script>
