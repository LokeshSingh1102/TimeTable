async function postData(url = '', data = {}) {
    // *starred options in comments are default values
    const response = await fetch(
        url,
        {
            method: "POST", // *GET, POST, PUT, DELETE, etc.
            mode: "same-origin", // no-cors, *cors, same-origin
            cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            credentials: "same-origin", // include, *same-origin, omit
            headers: {
                "Content-Type": "application/json",  // sent request
                // "Accept": "application/json"   // expected data sent back
            },
            redirect: 'follow', // manual, *follow, error
            referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
            body: JSON.stringify(data), // body data type must match "Content-Type" header
        },
    );

    return response.json(); // parses JSON response into native JavaScript objects
}

const data =
{
    'subjectName': "c",
    'teacherName': "skg",
    'totalClass': 4
}

// const data = {
//     'key1': 'value1',
//     'key2': 2
// };

postData('http://localhost/TimeTable/Backend/new.php', JSON.stringify(data))
    .then(response => {
        // Manipulate response here
        console.log("response: ", response); // JSON data parsed by `data.json()` call
        // In this case where I send entire $decoded from PHP you could arbitrarily use this
        console.log("response.data: ", JSON.parse(response.data));
        if(response.value==1){
            alert('success');
        }
    });

let rowNo = 0;
let colomnNo = 0;
let i = 0;
console.log("hello");
// const data = []
let storeData = () => {
    console.log("before");
    // e.preventDefault();
    const Tname = document.getElementById('Teacher').value;
    const Sname = document.getElementById('Subject').value;
    const classes = document.getElementById('Classes').value;
    const store = {
        "subjectName": Sname,
        "teacherName": Tname,
        "totalClass": classes
    }
    console.log("before");
    data.push(store);
    console.log("after");
    console.log(data);

    const data = JSON.stringify(data)

    fs.writeFileSync("./json.json", data, err => {
        if (err) {
            console.log("Error writing file", err)
        } else {
            console.log('JSON data is written to the file successfully')
        }
    })

    document.getElementById('Teacher').value = "";
    document.getElementById('Subject').value = "";
    document.getElementById('Classes').value = "";
    document.getElementById('Semester').value = "";
    document.getElementById('Section').value = "";
}
const matrix = [
    [-1, -1, -1, -1],
    [-1, -1, -1, -1],
    [-1, -1, -1, -1],
    [-1, -1, -1, -1],
    [-1, -1, -1, -1],
    [-1, -1, -1, -1]
]


const createTable = () => {
    // let rowCount = 0;
    let rowUpdate = (1 + rowNo + 2) % 6
    let colomnUpdate = (colomnNo) % 4

    let totalclass = 0;
    while (i < data.length) {
        // totalclass = data[i].totalClass;
        // let j = 0;
        for (totalclass = data[i].totalClass; totalclass > 0;) {
            if (1 in matrix[rowNo] && checkRow()) {
                rowNo = (rowNo + 1) % 6;
            }
            else {
                if (matrix[rowNo][colomnNo] == 1) {
                    for (let j = 0; j < matrix[rowNo].length; j++) {
                        if (matrix[rowNo][j] == 0) {
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
}

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

createTable()
// for (var i = 0; i < matrix.length; i++) {
//     for (var j = 0; j < matrix[i].length; j++) {
//         console.log(matrix[i][j] + " ");
//     }
//     console.log(`\n`);
// } 
// console.log("inside ");
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
        element.innerHTML = data[matrix[r][c]].subjectName;
        c = (c + 1) % 4;
        if (c == 0) {
            r = r + 1;
        }
    }
})
