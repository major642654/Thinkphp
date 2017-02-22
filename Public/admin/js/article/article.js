/**
 * Created by yuzhiqiang on 2015/12/8.
 */
document.body.onload = function() {
    $('#parent_sort').change(function(){
        $.ajax({
            type: 'POST',
            url: $(this).attr('_href') ,
            data: {'parent_id':$(this).val()},
            dataType: 'json',
            success: function(data)
            {
                var html;
                $('#child_sort').empty();
                for(var i=0;i<data.length;i++)
                {
                    html += "<option value="+data[i]['sortid']+">"+data[i]['sortname']+"</option>";
                }
                $('#child_sort').append(html);
            },
            error: function()
            {
                alert("获取数据失败");
            }
        });
    });
}
