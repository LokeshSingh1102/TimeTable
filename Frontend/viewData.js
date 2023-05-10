const cell = Array.from(document.getElementsByClassName('Tdata'));
console.log(cell[2]);
const day = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday"];
let currRow = 0;
day.forEach(element => {
    let temp = currRow;
    $.ajax({
        type: 'POST',
        url: 'http://localhost/TimeTable/Backend/viewFetchData.php',
        data: {
            Dept: sessionStorage.getItem("Department"),
            Semester: sessionStorage.getItem("Semester"),
            Section: sessionStorage.getItem("Section"),
            Day: element
        },
        success: function (data) {
            let i = 0;
            while (i < data.length) {
                cell[temp + i].innerHTML = data[i].Subject;
                // console.log(cell[temp + i]);
                console.log(data[i].Subject);
                i = i + 1;
            }
        }
    })
    currRow += 4;
});