console.log('ajax');

document.getElementById('myForm').addEventListener('submit', (e) => {
    e.preventDefault();
})

$(document).ready(function () {
    $('#myForm').submit(function () {
        
        console.log('submit');
        $.ajax({
            type: 'POST',
            url: 'http://localhost/TimeTable/Backend/check.php',
            data: {
                Teacher: $('#Teacher').val(),
                Subject: $('#Subject').val(),
                Classes: $('#Classes').val(),
                Semester: $('#Semester').val(),
                Section: $('#Section').val()
            },
            success: function (data) {
                $('#output').html(data);
            }
        })
        // for now 
        $('#Teacher').val('');
        $('#Subject').val('');
        $('#Classes').val('');
        $('#Semester').val('');
        $('#Section').val('');
    })
})