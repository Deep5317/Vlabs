var canvas = document.getElementById('canvas');
var ctx    = canvas.getContext('2d');
let h=0,h1=0,x1=0,y1=0,x2=0,y2=0;
function def() {
    var canvas = document.getElementById('canvas');
    var ctx    = canvas.getContext('2d');
    var width  = canvas.width = 1100;
    var height = canvas.height  = 500;
    with(ctx){
        fillStyle   = 'rgb(240,240,240)';
        fillRect(0, 0, width, height);


        //base
        fillStyle   = 'rgb(204, 119, 34)';
        moveTo(50,400);
        lineTo(1050,400);
        lineTo(950,360);
        lineTo(150,360);
        fill();
        beginPath();
        moveTo(50,400);
        lineTo(50,420);
        lineTo(1050,420);
        lineTo(1050,400);
        fill();

        fillStyle   = 'black';
        beginPath();
        lineWidth=2;

        moveTo(50,400);
        lineTo(1050,400);
        lineTo(950,360);
        lineTo(150,360);
        lineTo(50,400);

        
        stroke();
        beginPath();
        moveTo(50,400);
        lineTo(50,420);
        lineTo(1050,420);
        lineTo(1050,400);
        stroke();
        //Left digital WM
        
        roundRect(160,310, 130, 70,8);
        fillStyle   = 'black';
        fill();
        roundRect(165,315, 120, 60,8);
        fillStyle='rgb(220,220,220)';
        fill();

        fillStyle='black'
        font="40px Arial";
        lineWidth=1
        fillText("0.000",170,360);
        font="800 13px Arial";
        fillText("kg",269,358);



        //Right digital WM
        
        roundRect(810,310, 130, 70,8);
        fillStyle   = 'black';
        fill();
        roundRect(815,315, 120, 60,8);
        fillStyle='rgb(220,220,220)';
        fill();
        fillStyle='black'
        font=" 40px Arial";
        fillText("0.000",820,360);
        font="800 13px Arial";
        fillText("kg",919,358);
        

        //left bar
        fillStyle   = 'brown';
        fillRect(208,170, 40, 140);
        lineWidth=2;

        strokeRect(208,170, 40, 140);
        //lsupport
        fillStyle   = '#654321';
        fillRect(223,155, 10, 15);
        strokeRect(223,155, 10, 15);

        fillStyle   = 'black';
        font=" 40px Arial";
        fillText("A",185,155);
        //right bar
        fillStyle   = 'brown';
        fillRect(855,170, 40, 140);
        strokeRect(855,170, 40, 140);
        //rsupport
        fillStyle   = '#654321';
        fillRect(870,155, 10, 15);
        strokeRect(870,155, 10, 15);
        fillStyle   = 'black';
        font=" 40px Arial";
        fillText("B",888,155);

        drawbeam(0);

        fillStyle   = 'black';
        font="bold 25px Arial";
        fillText("Simulation",470,30)
        
    
    }

};
function display(x,y){
    let l=0,r=0;
    let linc=x/5;
    let rinc=y/4;
    let a=setInterval(myfun,150);
    let b=setInterval(myfun1,150);
    function myfun1(){
        r+=rinc;
        if(r>y){
            clearInterval(b);
        }
        else{
            with(ctx){
                beginPath()
                clearRect(820,325, 100, 40);
                fillStyle   = 'rgb(220,220,220)';
                fillRect(820,325, 100, 40);
                fill();
                lineWidth=1
                fillStyle='black'
                font="40px Arial";
                fillText(parseFloat(r).toFixed(3),820,360);
                closePath();
            }

        }

    };

    function myfun(){
        l+=linc;
        if(l>x){
            clearInterval(a);
        }
        else{
            with(ctx){
                beginPath();
                clearRect(170,325, 100, 40);
                fillStyle   = 'rgb(220,220,220)';
                fillRect(170,325, 100, 40);
                fill();
                lineWidth=1
                fillStyle='black'
                font="40px Arial";
                fillText(parseFloat(l).toFixed(3),170,360);
                closePath();
            }

        }
        
        
    };
                
    
    
};

function check(){
    let w1=(document.getElementById('w1').value);
    let w2=(document.getElementById('w2').value);
    let a=(document.getElementById('a').value);
    let b=(document.getElementById('b').value);
    if(w1!='none' &w1!='' & w2!='' & w2!='none' & a!='' & b!=''
        & a%5==0 & b%5==0 & 5<=a<=95 & 5<=b<=95 & a!=b){
        document.getElementById('msg').innerHTML=""
        // let elmt=document.getElementById('canvas') ;
        // elmt.scrollIntoView();
        // setTimeout(result,800);
        //result();


    }
    else{
        document.getElementById('msg').innerHTML="Enter details of all the required fields."
    }


};
function result(){
    let w1=(document.getElementById('w1').value);
    let w2=(document.getElementById('w2').value);
    let a=(document.getElementById('a').value);
    let c=(document.getElementById('b').value);
    let b=100-a;
    let d=100-c;
    let Ra=(w1*b+w2*d)/100;
    let Rb=(w1*a+w2*c)/100;
    

    
    
    chook(x2,y2,2,1);
    chook(x1,y1,1,1);
    drawbeam(1);
    dhook(1,1);
    dhook(2,1);
    dw(1,1);
    dw(2,2);
    display(Ra,Rb);
    document.getElementById('w2').setAttribute("disabled","disabled");
    document.getElementById('w1').setAttribute("disabled","disabled");
    document.getElementById('a').setAttribute("disabled","disabled");
    document.getElementById('b').setAttribute("disabled","disabled");
    document.getElementById('submit').setAttribute("disabled","disabled");
    document.getElementById('reset').removeAttribute("disabled");
    setTimeout(() => {
        let x=(Rb.toFixed(3)*10*10)-(w2*c)-(w1*a)
        let y=(Ra.toFixed(3)*10*10)-(w2*d)-(w1*b)
        
        document.getElementById('ra').innerHTML=(Ra).toFixed(3)+" kg";
        document.getElementById('rb').innerHTML=(Rb).toFixed(3)+" kg";
        document.getElementById('sf').innerHTML=0;
        document.getElementById('ma').innerHTML="("+(Rb).toFixed(3)+"*"+100+")-("+
        w2+"*"+c+")-("+w1+"*"+a+") = "+x+" kg-cm";

        document.getElementById('mb').innerHTML="("+(Ra).toFixed(3)+"*"+100+")-("+
        w2+"*"+d+")-("+w1+"*"+b+") = "+y+" kg-cm";


    }, 800);
    

    
};
function myreset(){
    document.getElementById('a').removeAttribute("disabled");
    document.getElementById('b').removeAttribute("disabled");
    document.getElementById('w1').removeAttribute("disabled");
    document.getElementById('w2').removeAttribute("disabled");
    document.getElementById('submit').removeAttribute("disabled");
    document.getElementById('reset').setAttribute("disabled","disabled");
    document.getElementById('w1').value='none';
    document.getElementById('w2').value='none';
    document.getElementById('w1').setAttribute("disabled","disabled");
    document.getElementById('w2').setAttribute("disabled","disabled");


    document.getElementById('a').value='';
    document.getElementById('b').value='';
    
    document.getElementById('ra').innerHTML="";
    document.getElementById('rb').innerHTML="";
    document.getElementById('ma').innerHTML="";
    document.getElementById('mb').innerHTML="";
    document.getElementById('sf').innerHTML="";


    def();

};
function checka(){
    let temp=document.getElementById('a').value;
    let temp1=document.getElementById('b').value;
    
    if(temp>=5 & temp<=95 & temp!=temp1){
        document.getElementById('msga').innerHTML=""

        if(temp%5==0){
            document.getElementById('msga').innerHTML=""
            dhook(1,0);
            enablew1();
            disablew1();
            cw1();
            

        }
        
        else{
            document.getElementById('msga').innerHTML="Length a should be a multiple of 5."

            chook(x1,y1,1,0);
            disablew1();

        }
        


    }
    else if(temp==''){
        document.getElementById('msga').innerHTML="Please enter Length a."
        chook(x1,y1,1,0);
        disablew1();

    }
    else if(temp==temp1){
        document.getElementById('msga').innerHTML="Length a should not equal Length b"
        chook(x1,y1,1,0);
        disablew1();
    }
    else{
        document.getElementById('msga').innerHTML="Length a should be in range 5 to 95."
        
        chook(x1,y1,1,0);
        disablew1();

        

    }
}
function checkb(){
    let temp=document.getElementById('b').value;
    let temp1=document.getElementById('a').value;
    
    if(temp>=5 & temp<=95 & temp!=temp1 ){
        document.getElementById('msgb').innerHTML=""

        if(temp%5==0){
            document.getElementById('msgb').innerHTML=""
            dhook(2,0);
            enablew2();
            disablew2();
            cw2();


        }
        
        else{
            document.getElementById('msgb').innerHTML="Length b should be a multiple of 5."
            
            chook(x2,y2,2,0);
            disablew2();

        }
        


    }
    else if(temp==''){
        document.getElementById('msgb').innerHTML="Please enter Length b."
        chook(x2,y2,2,0);
        disablew2();

    }
    else if(temp==temp1){
        document.getElementById('msgb').innerHTML="Length b should not equal Length a."
        chook(x2,y2,2,0);
        disablew2();

    }
    else{
        document.getElementById('msgb').innerHTML="Length b should be in range 5 to 95"
        chook(x2,y2,2,0);
        disablew2();
        

    }
}
function enablew1(){

    if(document.getElementById('a').value!=''){

        document.getElementById('w1').removeAttribute("disabled");
    }

};
function enablew2(){

    if(document.getElementById('b').value!=''){

        document.getElementById('w2').removeAttribute("disabled");
    }

};
function disablew1(){
    let val=document.getElementById('a').value;
    if(val=='' | val<5 | val>95 ){

        document.getElementById('w1').setAttribute("disabled","disabled");
    }
};
function disablew2(){
    let val=document.getElementById('b').value;
    let val1=document.getElementById('a').value;
    if(val=='' | val<5 | val>95 | val==val1 ){

        document.getElementById('w2').setAttribute("disabled","disabled");
    }
};


function cw1(){
    document.getElementById('w1').value='';
}
function cw2(){
    document.getElementById('w2').value='';
}
function drawbeam(temp){
    //beam
    let a=220;
    let b=130;
    let flag=0;
    if (temp==1){
        ctx.clearRect(a-1,b-1, 665, 26);
        flag=1;
        b+=10;
        
        with(ctx){
        lineWidth=1;
        
        fillStyle   = 'rgb(204, 119, 34)';
        fillRect(a,b, 663, 25);
        lineWidth=2;
        fillStyle='black'
        strokeRect(a,b, 663, 25);
        }
        ctx.globalCompositeOperation = 'destination-over';
        ctx.fillStyle   = 'rgb(240,240,240)';
        ctx.fillRect(0, 0, 1500, 700);
        ctx.globalCompositeOperation = 'source-over';

        
    }
        
    else{
        with(ctx){
        
        fillStyle   = 'rgb(204, 119, 34)';
        fillRect(a,b, 663, 25);
        strokeRect(a,b, 663, 25);
        }
    }
    drawhinges(247,130,30,flag);
    

};

function drawhinges(x,y,inc,flag){
    let i=0,count=0;
    if(flag==1){
        y+=10;
        ctx.globalCompositeOperation = 'source-over';
        //ctx.clearRect(x,320,70,20);
        ctx.fillStyle   = 'rgb(240,240,240)';
        ctx.fillRect(x-20,100,650,20);

    }
    with(ctx){
        fillStyle='black'
        font="bold 19px Arial";
        fillText("0",x-20,y-10);
        fillText("100",x+595,y-10);
    }
    for(i=0;i<19;i++){
        x+=inc;
        count+=5;
        with(ctx){
            beginPath();
            moveTo(x,y);
            lineTo(x,y+10);
            lineWidth=3;
            stroke();
            fillStyle='black'
            font="bold 19px Arial";
            fillText(count,x-10,y-10);
            if(count==95 & flag==0){
                fillStyle='black'
                font="18px Arial";
                fillText("(cm)",x+60,120);
            }
        }
        
    }

};

function dhook(chk,flag){
    let y=140;
    if(flag==1){
        y+=10;
        

    }
    if(chk==1){
        value=(document.getElementById('a').value);
        if(h==1 & flag!=1){
            chook(x1,y1,1,0);
            h=0;
        }

    }
    else if(chk==2){
        value=(document.getElementById('b').value);
        if(h1==1 & flag!=1){
            chook(x2,y2,2,0);
            h1=0;
        }
    }
            

    
    if(value!=0 & value!=""){
        value/=5;
        let pos=value*30;
        let x=pos+247;
        
        ctx.globalCompositeOperation = 'source-over';
        with(ctx){
            beginPath();
            moveTo(x,y);
            lineWidth=1;
            lineTo(x,y+40);
            stroke();
            beginPath();
            arc(x+5, y+40, 5, 0, 1 * Math.PI);
            stroke();

        }
        if(chk==1){
            x1=x;
            y1=y;
            h=1;
        }
        else{
            x2=x;
            y2=y;
            h1=1;
        }


        

    }

};
function chook(x,y,chk,flag){
    let temp=0;
    ctx.globalCompositeOperation = 'source-over';
    ctx.clearRect(x-1,y-1,3,41);
    ctx.clearRect(x-2, y+40,14,10);

    if(chk==1){
        if((document.getElementById('w1').value!='none' & document.getElementById('w1').value!='')){
            ctx.clearRect(x-25,y+35,61,60);

        }
    }
    else if(chk==2){
        if(document.getElementById('w2').value!='none' &  document.getElementById('w2').value!=''){
            ctx.clearRect(x-25,y+35,61,60);

        }
    }
    
    ctx.globalCompositeOperation = 'destination-over';
    
    with(ctx){
        
        fillStyle   = 'rgb(204, 119, 34)';
        fillRect(230,130, 643, 24);
        strokeRect(230,130, 643, 25);
                    
    }
    ctx.fillStyle   = 'rgb(240,240,240)';
    ctx.fillRect(0, 0, 1500, 700);
    

    ctx.globalCompositeOperation = 'source-over';
    
    let y1=140;
    if(document.getElementById('w1').value!='none' & document.getElementById('w2').value!='none' & flag==0
    & document.getElementById('w1').value!='' & document.getElementById('w2').value!=''){
        if(chk==1){
            let value=(document.getElementById('b').value);
            value/=5;
            let pos=value*30;
            let x=pos+247;
            
            ctx.globalCompositeOperation = 'source-over';
            with(ctx){
                beginPath();
                moveTo(x,y1);
                lineWidth=1;
                lineTo(x,y1+40);
                stroke();
                lineWidth=1;
                
                beginPath();
                arc(x+5, y1+40, 5, 0, 1 * Math.PI);
                stroke();

            }
            dw(2,0);
        }
        else{
            let value=(document.getElementById('a').value);
            value/=5;
            let pos=value*30;
            let x=pos+247;
            
            ctx.globalCompositeOperation = 'source-over';
            with(ctx){
                beginPath();
                moveTo(x,y1);
                lineWidth=1;
                lineTo(x,y1+40);
                stroke();
                lineWidth=1;
                
                beginPath();
                arc(x+5, y1+40, 5, 0, 1 * Math.PI);
                stroke();

            }
            dw(1,0);
        }
    }


    
};
function dw(chk,flag){
    if (flag==1){
        
        y1+=1
        ctx.lineWidth=1;
    }
    else if(flag==2){
        y2+=1;
        ctx.lineWidth=1;
    }
    let x=0,y=0,w=0;
    if (chk==1){
        x=x1+5;
        y=y1+45;
        w=document.getElementById('w1').value;
    }
    else{
        x=x2+5;
        y=y2+45;
        w=document.getElementById('w2').value;
    }
    if(w!='' & w!='none'){
        with(ctx){
            ctx.globalCompositeOperation = 'source-over';

            beginPath();
            moveTo(x,y-5);
            lineTo(x,y+5);
            stroke();
            y+=5
            beginPath();
            if(chk==1){
                fillStyle   = 'rgb(255,255,94)';
            }
            if(chk==2){
                fillStyle   = 'rgb(99,135,220)';
            }
            moveTo(x-10,y);
            lineTo(x+10,y);
            lineTo(x+30,y+30);
            lineTo(x-30,y+30);
            fill();
            fillStyle='black'
            moveTo(x-10,y);
            lineTo(x+10,y);
            lineTo(x+30,y+30);
            lineTo(x-30,y+30);
            lineTo(x-10,y)
            stroke();
            font="bold 16px Arial";
            fillText(w+" kg",x-19,y+25);

        }
    }
    
};
    
CanvasRenderingContext2D.prototype.roundRect = function (x, y, width, height, radius) {
    if (width < 2 * radius) radius = width / 2;
    if (height < 2 * radius) radius = height / 2;
    this.beginPath();
    this.moveTo(x + radius, y);
    this.arcTo(x + width, y, x + width, y + height, radius);
    this.arcTo(x + width, y + height, x, y + height, radius);
    this.arcTo(x, y + height, x, y, radius);
    this.arcTo(x, y, x + width, y, radius);
    this.closePath();
    return this;
}
    
