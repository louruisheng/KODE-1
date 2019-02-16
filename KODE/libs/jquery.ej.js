;;(function(){

    jQuery.fn.ej = function(){
        this.children("li").on("mouseover",function(){
            //隐藏所有的二级菜单;
            $(this).siblings("li").children("ul").hide();
            $(this).children("ul").toggle();
        });   
    }

})();