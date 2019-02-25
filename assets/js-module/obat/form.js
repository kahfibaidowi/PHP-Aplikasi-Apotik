$(document).ready(function(){
    $("#btn-plusmin").click(function(){
        var data = $(this);
        
        if(data.html() == "+"){
            data.html("-");
            $("#input-plusmin").attr("value", "-");
        }
        else{
            data.html("+");
            $("#input-plusmin").attr("value", "+");
        }
    })
})