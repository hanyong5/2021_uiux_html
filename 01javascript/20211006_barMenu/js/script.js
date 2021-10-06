function nowMenu(menu){ // menu = "main"
    if(menu == "main"){
        $(".bar").css("opacity",0)
        console.log("메인연결됨");
    }else{
        $(".bar").css("left",200*menu)
        console.log("서브페이지")
    }
}

