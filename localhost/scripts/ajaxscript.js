$(function(){
    $('.cheap_button').on('click', function(){
        $.ajax({
            type: "POST",
            url: "/scripts/scriptCheap.php",
            data: $(this).serialize(),
            success: function(result){
                $('#result').html(result);
            }
        });
    });
});
$(function(){
    $('.expansive_button').on('click', function(){
        $.ajax({
            type: "POST",
            url: "/scripts/scriptExpansive.php",
            data: $(this).serialize(),
            success: function(result){
                $('#result').html(result);
            }
        });
    });
});

$(function(){
    $('.search_button').on('click', function() {
        var input_content = $('input.search_input').val();
        $.ajax({
            type: "POST",
            url: "/scripts/searchAddress.php",
            data: {address: input_content},
            success: function(result){
                $('#result').html(result);
            }
        })
    })
})