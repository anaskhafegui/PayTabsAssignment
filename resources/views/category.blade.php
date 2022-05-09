
<label for="categories">Choose a category:</label>

<select id="select1">

</select>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

 

$.ajax({
  method: "GET",
  url: "{{url('category')}}",
  //data: { name: "John", location: "Boston" }
  })
  .done(function( data ) {
    data.data.forEach(element => 
        $('#select1').append(`<option value="${element.value}"> ${element.name} </option>`));

  });



</script>
