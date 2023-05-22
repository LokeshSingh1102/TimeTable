const day = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday"];
day.forEach((element, index) => {
    $.ajax({
        type: 'POST',
        url: 'http://localhost/TimeTable/Backend/fetchTeacherData.php',
        data: {
            Teacher: sessionStorage.getItem("Teacher"),
            Day: element
        },
        success: function (data) {
            // console.log(data);
            let i = 0;
            const cell = Array.from(document.getElementsByClassName(`Tdata${index}`));
            while (i < data.length) {
                var period = data[i].Period;
                cell[period - 1].firstElementChild.innerHTML = data[i].Subject;
                cell[period - 1].lastElementChild.innerHTML = ` - ${data[i].Department} Sem ${data[i].Semester} ${data[i].Section}`;
                i = i + 1;
            }
        }
    })
});