/**
 * Created by yuzhiqiang on 2015/8/16.
 */

$(function(){
    $('.delete').on('click',function(){
        if (!confirm("确认要删除该文章？")) {
            window.event.returnValue = false;
        }else{
            $.ajax({
                type:'GET',
                url: $(this).attr("_href"),
                dataType: 'text',
                success:function(data){
                    if(data == 0){
                        alert("删除失败");
                    }else{
                        alert("删除成功");
                        window.location.reload();
                    }
                },
                error:function(){
                    alert("删除失败");
                }
            });
        }
    });
})