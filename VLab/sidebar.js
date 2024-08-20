// function resize(){
//     var adjustHeight = document.getElementsByClassName('circles')[0]
//     adjustHeight.style.height = document.getElementsByTagName('body')[0].clientHeight+'px'
// }

// window.onresize = function(){ location.reload(); }


var mini = true;
function toggleSidebar() {
    var sidebar = document.getElementById("sidebar")
    var menu = document.getElementsByClassName("menu")
    var iconText = document.getElementsByClassName("icon-text")
    var container = document.getElementsByClassName("container-grid")
    var banner = document.getElementsByClassName('banner')[0]

    if(document.getElementsByTagName('body')[0].clientWidth < 1000){
        if (mini) {
            console.log("opening sidebar");
            sidebar.style.width = "65%";
            container[0].style.opacity = "0.1"
            banner.style.opacity = "0.1"
        
            for(var i = 0;i<menu.length;i++){
                menu[i].style.margin = "5% 10% 0% 5%"
                iconText[i].style.marginLeft = "17%"
            }
            this.mini = false;
        } else {
            console.log("closing sidebar");
            sidebar.style.width = "20%";
            container[0].style.opacity = "1"
            banner.style.opacity = "1"
            for(var i = 0;i<menu.length;i++){
                menu[i].style.margin = "5% 10% 0% 10%"
                iconText[i].style.marginLeft = "75%"
            }
            this.mini = true;
        }
    }
    else{
    
        if (mini) {
            console.log("opening sidebar");
            sidebar.style.width = "30%";
            container[0].style.opacity = "0.1"
            banner.style.opacity = "0.1"
        // sidebar.style.backgroundColor = "rgba(255, 255, 255, 0.5)"
            for(var i = 0;i<menu.length;i++){
                menu[i].style.margin = "3% 4% 0% 4%"
                iconText[i].style.marginLeft = "10%"
            }

        // for(var i = 0;i<subMenu.length;i++)
        //     subMenu[i].style.marginLeft = "12.5%"
            
        // document.getElementById("main").style.marginLeft = "250px";
            this.mini = false;
        } else {
            console.log("closing sidebar");
            sidebar.style.width = "5%";
            container[0].style.opacity = "1"
            banner.style.opacity = "1"
        // sidebar.style.backgroundColor = ""
            for(var i = 0;i<menu.length;i++){
                menu[i].style.margin = "5% 4% 0% 20%"
                iconText[i].style.marginLeft = "50%"
            }
            this.mini = true;
        }
    }
}


function showBorder(id){
    document.getElementsByClassName("menu")[id-1].style.borderBottom = "2px solid #FFF"
}

function notShowBorder(id){
    document.getElementsByClassName("menu")[id-1].style.borderBottom = ""
}


// while(true){
// console.log(body.scrollTop)
// }

var elem = document.getElementById('footer')
var body = document.getElementsByTagName('body')[0]
var sidebar = document.getElementById('sidebar')
var header = document.getElementsByTagName('header')[0]

function onscroll(){
    if(window.scrollY >= (body.clientHeight - elem.clientHeight - window.innerHeight)){
        sidebar.style.display = "none"
    }
    else{
        if(header.style.display !== "none")
            sidebar.style.display = "block"
    }

}

