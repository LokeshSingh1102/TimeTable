console.log("first");

window.addEventListener("load",()=>{
    const loader = document.querySelector(".loader")
    loader.classList.add("loader-hidden")

    loader.addEventListener("transitionend",()=>{
        document.body.removeChild("loader")
    })
})

console.log("hello");

let matrix = [
    [-1, -1, -1, -1],
    [-1, -1, -1, -1],
    [-1, -1, -1, -1],
    [-1, -1, -1, -1],
    [-1, -1, -1, -1],
    [-1, -1, -1, -1]
]
let checkPeriod;

const saveTeacher = [];
const day = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday"];

async function periodCheck(d, teacherName, period) {
    // console.log("d", d);
    // console.log("teacherName", teacherName);
    // console.log("period", period);

    checkPeriod = await $.post("http://localhost/TimeTable/Backend/checkPeriod.php",
        {
            Teacher: teacherName,
            Day: day[d],
            Period: period,
        },
    );
    return checkPeriod
}

function main() {
    fetch('http://localhost/TimeTable/Backend/fetchData.php').then((response) =>
        response.json()).then(async (result) => {

            // console.log(result)

            const checkRow = () => {
                for (let i = 0; i < matrix.length;) {
                    if (1 in matrix[i]) {
                        i = i + 1;
                    }
                    else {
                        return true;
                    }
                }
                return false;
            }

            let i = 0;

            let totalclass = 0;
            let totalTeacher = result.length<=4?result.length:4;

            while (i < result.length) {
                let rowNo = 0;
                let colomnNo = 0;
                for (totalclass = result[i].Classes; totalclass > 0;) {

                    if (1 in matrix[rowNo] && checkRow()) {
                        rowNo = (rowNo + 1) % 6;
                    }
                    else {

                        if (matrix[rowNo][colomnNo] >= 0) {

                            for (let j = 0; j < matrix[rowNo].length; j++) {
                                let resu = await periodCheck(rowNo, result[i].Teacher, j+1)
                                // console.log("first", resu);
                                if (matrix[rowNo][j] == -1 && resu === "false") {
                                    matrix[rowNo][j] = i;
                                    colomnNo = j;
                                    totalclass--
                                    break;
                                }
                            }
                            rowNo = (rowNo + 1) % 6;
                            colomnNo = (colomnNo + 1) % totalTeacher
                        }
                        else {
                            if (await periodCheck(rowNo, result[i].Teacher, colomnNo+1) === "false") {
                                // console.log("second",colomnNo+1);
                                matrix[rowNo][colomnNo] = i;
                                // colomnNo = j;
                                // colomnNo = (colomnNo + 1) % totalTeacher
                                totalclass--
                            }
                            else {
                                for (let j = colomnNo+1; j < matrix[rowNo].length; j++) {
                                    let resu = await periodCheck(rowNo, result[i].Teacher, j+1)
                                    // console.log("third", resu);
                                    if (matrix[rowNo][j] == -1 && resu === "false") {
                                        // console.log("checkingggg",i,j);
                                        matrix[rowNo][j] = i;
                                        colomnNo = j;
                                        totalclass--
                                        break;
                                    }
                                }
                            }
                            rowNo = (rowNo + 1) % 6;
                            colomnNo = (colomnNo + 1) % totalTeacher
                        }
                    }
                }
                i++;
            }

            let c = 0, r = 0;
            Array.from(document.getElementsByClassName('Tdata')).forEach((element) => {
                if (matrix[r][c] == -1) {
                    element.innerHTML = "";
                    c = (c + 1) % 4;
                    if (c == 0) {
                        r = r + 1;
                    }
                }
                else {
                    element.innerHTML = result[matrix[r][c]].Subject;
                    saveTeacher.push({ "teacher": result[matrix[r][c]].Teacher, "subject": result[matrix[r][c]].Subject, "period": c + 1,"d":r, "semester": 6, "section": "B","dept":"BCA" })
                    c = (c + 1) % 4;
                    if (c == 0) {
                        r = r + 1;
                    }
                }
            })
        });
}
main()
$(".save").click(function () {
    for (let i = 0; i < saveTeacher.length; i++) {
        $.ajax({
            type: 'POST',
            url: 'http://localhost/TimeTable/Backend/saveData.php',
            data: {
                Teacher: saveTeacher[i].teacher,
                Subject: saveTeacher[i].subject,
                Period: saveTeacher[i].period,
                Semester: saveTeacher[i].semester,
                Section: saveTeacher[i].section,
                Dept: saveTeacher[i].dept,
                Day: day[saveTeacher[i].d]
            },
            // success: function (data) {
            //     $('#output').html(data);
            // }
        })
    }
})

// console.log(saveTeacher)