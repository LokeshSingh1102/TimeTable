console.log('ajax');

document.getElementById('myForm').addEventListener('submit', (e) => {
    e.preventDefault();
})

$(document).ready(function () {
    console.log('ready');
    let arr = [];
    let storeArr = ["Teacher", "Subject", "Classes", "Semester", "Section"];
    $('.plusIcon').click(function () {
        let store = {
            "Teacher": "",
            "Subject": "",
            "Classes": 0,
            "Semester": 0,
            "Section": "",
        }
        console.log('plusIcon');
        let i = 0;
        $('.input').each(function () {
            store[storeArr[i++]] = $(`.inputVal${i}`).val();
            // console.log(arr[i-1]);
        })
        console.log(store);
        arr.push(store);
        console.log(arr);
        $('#Teacher').val('');
        $('#Subject').val('');
        $('#Classes').val('');
        $('#Semester').val('');
        $('#Section').val('');
        i = 0;
    })
    $('#myForm').submit(function () {
        console.log(arr);
        console.log();
        console.log('submit');
        $.ajax({
            type: 'POST',
            url: 'http://localhost/TimeTable/Backend/storeData.php',
            data: {
                Teacher: $('#Teacher').val(),
                Subject: $('#Subject').val(),
                Classes: $('#Classes').val(),
                Dept: sessionStorage.getItem("Department"),
                Semester: sessionStorage.getItem("Semester"),
                Section: sessionStorage.getItem("Section"),
            }
        })
        $('#Teacher').val('');
        $('#Subject').val('');
        $('#Classes').val('');
        $('#Semester').val('');
        $('#Section').val('');
    })
})