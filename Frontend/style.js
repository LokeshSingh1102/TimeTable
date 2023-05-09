let flag = 1
function changemode(){
    console.log("check");
    const head  = document.getElementById("head")
    if(localStorage.getItem("mode") == "white"){
        document.body.style.background = "black"
        head.style.color = "white"
        localStorage.setItem("mode","black")

    }
    else{
        document.body.style.background = "white"
        head.style.color = "black"
        localStorage.setItem("mode","white")
    }
    
}
window.addEventListener("load",()=>{
    localStorage.setItem("mode","black")
})