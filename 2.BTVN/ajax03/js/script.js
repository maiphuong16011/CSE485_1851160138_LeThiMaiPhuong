$(document).ready(function(){
   $("#department").change(function(){
    //    Lấy giá trị:
    var depart_id = $(this).val();
    // Xử lý truyền -- nhận bằng Ajax
    if(depart_id==0){
        alert('Bạn cần chọn 1 Phòng ban');
    }else{
        $.ajax({
            //Xu ly truyen
            url:'getUsers.php',
            type:'POST',
            data:{id:depart_id},
            dataType:'json',
            //Xy ly gia tri tra ve
            success:function(res){
                // var obj = $.parseJSON(res);
                $("#staff").empty();
                
                for(var i=0;i<res.length;i++){
                    var id = res[i]['id'];
                    var name = res[i]['name'];
                    $("#staff").append("<option value='"+id+"'>"+name+"</option>");
                }
            }
        })
    }
   })
})