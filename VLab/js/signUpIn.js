//show on selecting Shah & Anchor
function showField(){
    var onSelect = document.getElementById("coll-name").value
    if(onSelect === 'sakec'){
        document.getElementsByClassName("on-select")[0].style.display = "block"
        return
    }
    document.getElementsByClassName("on-select")[0].style.display = "none"
    return
}