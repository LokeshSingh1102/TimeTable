console.log("first");

console.log("hello");

const matrix = [
    [-1, -1, -1, -1],
    [-1, -1, -1, -1],
    [-1, -1, -1, -1],
    [-1, -1, -1, -1],
    [-1, -1, -1, -1],
    [-1, -1, -1, -1]
]
const checkPeriod = []
fetch('http://localhost/TimeTable/Backend/checkPeriod.php').then((response) =>
    response.json()).then((result) => {
        console.log("checkPeriod");
        for (let i = 0; i < result.length; i++) {
            checkPeriod.push(result[i])
        }
        console.log(checkPeriod);
    })

fetch('http://localhost/TimeTable/Backend/fetchData.php').then((response) =>
    response.json()).then((result) => {
        // for (let g = 0; g < result.length; g++) {
        //     data.push(result[g]);
        // }
        console.log(result)

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
        let rowNo = 0;
        let colomnNo = 0;
        let i = 0;

        console.log('createTable');
        // let rowCount = 0;
        let rowUpdate = (1 + rowNo + 2) % 6
        let colomnUpdate = (colomnNo) % 4

        let totalclass = 0;
        while (i < result.length) {

            for (totalclass = result[i].Classes; totalclass > 0;) {

                if (1 in matrix[rowNo] && checkRow()) {
                    rowNo = (rowNo + 1) % 6;
                }
                else {

                    let pe = []
                    let j = 0
                    let per = checkPeriod.filter((p) => {
                        if (p.teacherName == result[i].Teacher) {
                            console.log("inside");
                            pe[j] = Number(p.period)
                            j++
                            return p
                        }
                    })
                    // console.log("koko0", pe);

                    if (matrix[rowNo][colomnNo] >= 0) {
                        // console.log("huhu",period);
                        // if()
                        for (let j = 0; j < matrix[rowNo].length; j++) {
                            if (matrix[rowNo][j] == -1 && pe.length == 0) {
                                matrix[rowNo][j] = i;
                                totalclass--
                                break;
                            }
                            else if (!(j in pe && rowNo == 0) && matrix[rowNo][j] == -1) {
                                matrix[rowNo][j] = i;
                                totalclass--
                                break;
                            }
                        }
                        rowNo = (rowNo + 1) % 6;
                    }
                    else {
                        matrix[rowNo][colomnNo] = i;
                        rowNo = (1 + rowNo) % 6
                        colomnNo = (colomnNo + 1) % 4
                        totalclass--
                    }
                }
            }
            i++;
        }

        let c = 0, r = 0;
        Array.from(document.getElementsByClassName('Tdata')).forEach((element) => {
            // console.log(i);
            if (matrix[r][c] == -1) {
                // console.log("hekllo");
                element.innerHTML = "";
                c = (c + 1) % 4;
                if (c == 0) {
                    r = r + 1;
                }
            }
            else {
                // console.log(matrix[r][c]);
                element.innerHTML = result[matrix[r][c]].Subject;
                c = (c + 1) % 4;
                if (c == 0) {
                    r = r + 1;
                }
            }
        })
        // createTable();
    });

