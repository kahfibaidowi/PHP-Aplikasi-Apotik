$(document).ready(function(){
    $("#modal-delete").on('show.bs.modal', function(event){
        var btn = $(event.relatedTarget);

        var name = btn.data('name');
        var id   = btn.data('id');
        var modal = $(this);
        modal.find('.modal-body p').html("Apakah anda yakin ingin menghapus pegawai ini <strong>"+name+"</strong>.?");
        modal.find('a').attr('href', 'hapus/'+id);
    });
});