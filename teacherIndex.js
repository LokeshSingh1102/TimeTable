console.log('ajax');

document.getElementById('myForm').addEventListener('submit', (e) => {
    e.preventDefault();
})
let i = 0;
// if(i!=0){
//     document.getElementById("createTT").href="../table.html";
// }
function fillData() {
    const teacher = document.getElementById("Teacher").value
    const subject = document.getElementById("Subject").value
    const classes = document.getElementById("Classes").value
    if (teacher != "" && subject != "" && classes != "") {
        document.getElementById("btn").disabled = false
        console.log("disabled");
    }
    else {
        document.getElementById("btn").disabled = true
    }
}
$(document).ready(function () {
    $.get("http://localhost/TimeTable/Backend/rmvFromTeacherTable.php", () => {
        console.log("fired");
    })

    $('#btn').click(function () {
        i++;
        if (i >= 0) {
            document.getElementById("createTT").href = "../table.html";
        }
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
        // $('#Semester').val('');
        // $('#Section').val('');
        fillData()
    })
})