$(document).ready(function(){
    $("#modal-detail").on("show.bs.modal", function(event){
        var btn = event.relatedTarget;

        var id = $(btn).data("id");
        var modal = $(this);

        $.ajax({
            type:"POST",
            url:"detail",
            data:"id="+id,
            cache:false,
            success:function(msg){
                modal.find(".modal-body").html(msg);
            }
        })

        modal.find("a").attr("href", "cetak/"+id);

    })
})