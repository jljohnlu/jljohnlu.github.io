$(document).ready(function(){
    $(".logo").click(function(){
        $(this).hide();
    })
    
    $("#btn-top").click(function(){
        $(".btn").animate({
            height: '300px'
        });
        
    });
});