$(".delete").on("click", function(){
    var _ID = $(this).attr('id');
    $(".confirm").attr('id', _ID);
    $(".confirm").on('click', function(){
        window.location.href = 'admin/delete/'+_ID;
    });
});