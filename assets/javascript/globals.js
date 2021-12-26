function menu(){
    //let d = new Date();
    //document.body.innerHTML = "<h1>Today's date is " + d + "</h1>"
    console.log(document.getElementsByTagName('header'))
    if(document.getElementsByTagName('header')[0].classList.contains('header-close')==true){
        document.getElementsByTagName('header')[0].classList.remove('header-close')
    }else{
        document.getElementsByTagName('header')[0].classList.add('header-close')
    }
}
//let d = new Date();
//document.body.innerHTML = "<h1>Today's date is " + d + "</h1>"