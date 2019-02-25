$("body").ready(function(){

    var dataTransaksi = {
        pembeli:"",
        detail:[]
    }

    var dataObat = {}

    var options = {
		url:function(phrase){
			return $.urlTransaksi("/api_obat?name="+phrase);
		},
		getValue:"nama_obat",
		template:{
			type:"description",
			fields:{
				description:"id_obat"
			}
		},
		list:{
			onClickEvent:function(){
				var value = $("#nama-obat").getSelectedItemData();
                $("#id-obat").val(value.id_obat);
                $("#qty").val(1);
                $("#harga").val(value.harga);
                $("#subtotal").val(value.harga);

                $("#qty").focus();
			},
			maxNumberOfElements:10,
			match:{
				enabled:true
			}
		},
		theme:"bootstrap"
	}

    $("#nama-obat").easyAutocomplete(options);

    $("#nama").keyup(function(){
        dataTransaksi.pembeli = $(this).val();
    })
    
    $("#qty").keyup(function(){
        var harga = $("#harga").val();
        var qty = $(this).val();

        $("#subtotal").val(harga*qty);
    })

    $("#detail-transaksi").submit(function(){
        if($.validasiDetailTransaksi()){
            dataObat.idObat = $("#id-obat").val();
            dataObat.namaObat = $("#nama-obat").val();
            dataObat.QTY = $("#qty").val();
            dataObat.harga = $("#harga").val();
    
            dataTransaksi.detail.push(dataObat);
            dataObat = {};
    
            $.updateDataObat();
            $.formDetailReset();
        }
        return false;
    })

    $.updateDataObat = function(){
        var total = 0;
        $("tbody").html("");
        $.each(dataTransaksi.detail, function(key, value){
            total += value.QTY*value.harga;
            $("tbody").append("<tr><td>"+value.idObat+"</td><td>"+value.namaObat+"</td><td>"+value.QTY+"</td><td>"+value.harga+"</td><td>"+value.QTY*value.harga+"</td><td><button type='button' class='btn btn-default btn-detail-delete' data-index='"+key+"'><i class='fa fa-times'></i></button></td></tr>");
        })
        $("tbody").append("<tr><td colspan='3'></td><th style='font-size:20px;padding-top:30px'>Total</th><th style='font-size:20px;padding-top:30px' colspan='2'>"+total+"</th></tr>");

        $(".btn-detail-delete").click(function(){
            var index = $(this).data("index");
            dataTransaksi.detail.splice(index, 1);

            $.updateDataObat();
        })
    }

    $("#btn-save").click(function(){

        $.ajax({
            type:'POST',
            url:$.urlTransaksi("input"),
            data:"data="+JSON.stringify(dataTransaksi),
            cache:false,
            success:function(id){
                window.open($.urlTransaksi("cetak/"+id));
                $(location).attr("href", $.urlTransaksi("tambah"));
            }
        })
    })

    $.urlTransaksi = function(optionalLink){
        var origin = $(location).attr("origin");
        var pathname = $(location).attr("pathname").split("/");

        $.each(pathname, function(key, value){
            if(value != "tambah" && value != ""){
                origin += "/";
                origin += value;
            }
        })

        return origin+"/"+optionalLink;
    }

    $.formDetailReset = function(){
        $("#id-obat").val("");
        $("#nama-obat").val("");
        $("#qty").val("");
        $("#harga").val("");
        $("#subtotal").val("");

        $("#nama-obat").focus();
    }

    $.validasiDetailTransaksi = function(){
        if($("#id-obat").val() != ""){
            return true;
        }
        else{
            alert("isikan data obat");
            return false;
        }
    }
})