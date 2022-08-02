    $(document).ready(function() {
        $('#search').keyup(function(){
            alert(' winner');
            var searchText = $(this).val();
            if(searchText != ' '){
                // make an ajax call
                $.ajax({
                    url:'acction.php',
                    method:'post',
                    data:{
                        qeury:searchText
                    },
                    success:function(response){
                        $('#show-list').html(response)
                    }
                })
            } else{
                $('#show-list').html('')
            }
        });
        // Set searched text in input field on click of search button
        $(document).on("click", "a", function () {
            $("#search").val($(this).text());
            $("#show-list").html("");
        });
    });