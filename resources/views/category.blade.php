


<div class="body">


<select onchange=getval(this);  id="1"><option> Select Sub Category </option> </select>
<div id="childdiv">
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

    $.ajax({
        method: "GET",
        url: "{{url('category')}}",
        })
        .done(function( data ) {
            data.data.forEach(element => 
                $('#1').append(`<option   value="${element.id}"> ${element.name} </option>`));
    });
   
    function getval(sel)
    {
        let selectId = parseInt(sel.id)+1;
        let optionId = sel.value;
        
            $.ajax({
                    type:"GET",//or POST
                    url:'category/'+optionId,
                    success:function(responsedata){
                    }
                }).done(function(data) {   
                    const CheckIfIdExist = $("#"+selectId);
                    if(CheckIfIdExist) CheckIfIdExist.remove();
                    $("#childdiv").append(`<div><select onchange=getval(this); id=${selectId}> <option> Select Sub Category </option> </select></div>`);
                    data.data[0].children.forEach(element => 
                        $('#'+selectId).append(`<option value="${element.id}"> ${element.name} </option>`));
                }); 
    }

</script>
