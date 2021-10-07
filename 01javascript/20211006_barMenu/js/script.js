function nowMenu(menu){ // menu = "main"  menu = 0
    if(menu == "main"){
        $(".bar").css("opacity",0);
        console.log("메인연결됨");
    }else{
        $(".menu li").eq(menu).addClass("active"); 
        // document.querySelectorAll(".menu li")[menu].classList.add("active")
        $(".bar").css("left",200*menu);
        console.log("서브페이지");
    }

    //$(".menu li").hover(function(){},function(){})

    $(".menu li").hover(function(){
        let menuLi = $(this).index();
        if(menu == "main"){$(".bar").css("opacity",1)}
        $(".bar").css("left",200*menuLi)
    },function(){
        if(menu == "main"){$(".bar").css("opacity",0)}
        $(".bar").css("left",200*menu)
    })

    


}


