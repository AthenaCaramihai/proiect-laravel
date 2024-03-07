<html>
    <head></head>
    <body>
        <table id="table">
            <thead>
                <tr>
                    <th>Uuid</th>
                    <th>Nume</th>
                    <th>Prenume</th>
                    <th>Varsta</th>
                    <th>Show</th>
                </tr>
            </thead>
            <tbody id="tbody">
            </tbody>
        </table>
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

        $.ajax({
        type: "GET",
        url: "/api/index",
        processData:false,
        contentType:false,
        success: function (data) {
            tbody = document.getElementById('tbody');
            let html = '';
            for(let i=0; i<data.length; i++) {
                html += '<tr>';
                html +='<td>' + data[i].uuid + '</td>';
                html +='<td>' + data[i].nume + '</td>';
                html +='<td>' + data[i].prenume + '</td>';
                html +='<td>' + data[i].age + '</td>';
                html += '<td><button class="show" data-entry-id="' + data[i].id + '">Show</button></td>';
                html += '<td><button class="delete" data-entry-id="' + data[i].id + '">Delete</button></td>';
                html += '</tr>';
            }
            tbody.innerHTML = html;
        },
        error: function (error) {
            console.error('error',error);
        }
    });

    $(document).on('click', '.show', function (e) {
        e.preventDefault();
        let button = $(this).data("entry-id");
        window.location.href = 'http://127.0.0.1:8000/person/' + button;
        });

    $(document).on('click','.delete', function(e) {
        e.preventDefault();
        let button = $(this).data("entry-id");
        $.ajax({
            type: "delete",
            url: "api/person/" + button,
            success: function (success) {
                console.log('succes',success);
                setTimeout(() => { location.reload(); }, "1000");
            },
            error: function (error) {
                console.log('error',error);
            }
        });
    });
</script>
