console.log("login teacher");

// const loginCredentials = {
//     uid: 4545,
//     password: "12345",
//     stream: "BCA",
//     semester: 5
// }
let i = 0;
// let size = Object.keys(loginCredentials).length;
// console.log(size)
const uid = 4545;
const password = "12345";
const stream = "BCA";
const semester = 5;

const myFunction = (e) => {
    var o = document.getElementById("uid").value;
    var j = document.getElementById("password").value;
    var k = document.getElementById("stream").value;
    var l = document.getElementById("semester").value;
    if (uid === o) {
        i++;
    }
    else if (password === j) {
        i++;
    }
    else if (stream === k) {
        i++;
    }
    else if (semester === l) {
        i++;
    }
}
const validate = () => {
    myFunction();
    console.log(i);
    if(i === 4 ){
        alert("hello")
    }
    return i === size ? true : false
}
