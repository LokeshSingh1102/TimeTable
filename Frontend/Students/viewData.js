// console.log(cell[4+1-1]);
let h1 = document.querySelector('h1');
h1.innerHTML = `Routine ${sessionStorage.getItem("studentDepartment")} ${sessionStorage.getItem("studentSemester")} ${sessionStorage.getItem("studentSection")}`;

const day = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday"];
day.forEach((element, index) => {
    $.ajax({
        type: 'POST',
        url: 'http://localhost/TimeTable/Backend/viewFetchData.php',
        data: {
            Dept: sessionStorage.getItem("studentDepartment"),
            Semester: sessionStorage.getItem("studentSemester"),
            Section: sessionStorage.getItem("studentSection"),
            Day: element
        },
        success: function (data) {
            console.log(data);
            let i = 0;
            const cell = Array.from(document.getElementsByClassName(`Tdata${index}`));
            while (i < data.length) {
                var period = data[i].Period;
                cell[period - 1].innerHTML = data[i].Subject + " ( "+data[i].Teacher+" )";
                i = i + 1;
            }
        }
    })
});