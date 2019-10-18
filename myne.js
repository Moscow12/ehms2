

    count_row= 0;
    function addcheckup(){
        count_row++;
        var table = $('#btn').append("<tr id='"+count_row+"'><td><input type='Date' class='form-control' name='date'></td><td><input type='text' class='form-control' name='fundoscopy'></td><td><button title='Remove input field' class='btn btn-danger' onclick='removerow("+count_row+")'>X</button></td></tr>");
    }

    function removerow(row_id){
            $('#'+row_id).remove();
        }
