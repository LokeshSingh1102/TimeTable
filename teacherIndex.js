console.log("js is here");

const checkrow = (arr, i)=> {
    for(let j = 0;j<checkarr[i].length;j++){
        if(checkarr[i][j].name==arr.name&& checkarr[i][j].subject==arr.subject){
            return false
        }
    }
    return true;
}

const inputarr = [
    { name: "lokesh", subject: "c", number: 2 }
    , { name: "huku", subject: "c", number: 2 }
    , { name: "titu", subject: "c", number: 2 }
    , { name: "ritu", subject: "c", number: 2 }
];

let totalTeacher = 4;
let checkarr = [
    [{ name: "", subject: "" }, { name: "", subject: "" }, { name: "", subject: "" }, { name: "", subject: "" }],
    [{ name: "", subject: "" }, { name: "", subject: "" }, { name: "", subject: "" }, { name: "", subject: "" }],
    [{ name: "", subject: "" }, { name: "", subject: "" }, { name: "", subject: "" }, { name: "", subject: "" }],
    [{ name: "", subject: "" }, { name: "", subject: "" }, { name: "", subject: "" }, { name: "", subject: "" }],
    [{ name: "", subject: "" }, { name: "", subject: "" }, { name: "", subject: "" }, { name: "", subject: "" }],
    [{ name: "", subject: "" }, { name: "", subject: "" }, { name: "", subject: "" }, { name: "", subject: "" }],
]

let n = 0;
for (let i = 0; i < 6; i++) {
    for (let j = 0; j < 4; j++) {
        
        if (checkrow(inputarr[n], i)){

        }
    }
}

// console.log(checkarr[0][1].name);

const box = document.getElementsByClassName("box");
Array.from(box).forEach((element) => {
    console.log(element.innerText);
    element.addEventListener('click', () => {
        let textEdit = document.querySelector('.text-edit');
        // console.log(textEdit);
        console.log(textEdit.innerText);
        // console.log(textEdit.target.innerText);
    })
})