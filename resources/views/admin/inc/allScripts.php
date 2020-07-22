<!-- Summer Note Integration-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
  <!--end of Summer note integration-->
<script>
	$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();
        var controlForm = $('#myRepeatingFields:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);
        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<i class="fa fa-minus"></i>');
    }).on('click', '.btn-remove', function(e)
    {
        e.preventDefault();
        $(this).parents('.entry:first').remove();
        return false;
    });
});
</script>
<script>
      $('#summernote').summernote({
        placeholder: 'Product Description...',
        tabsize: 2,
        height: 200
      });
      $('#summernote2').summernote({
        placeholder: 'Product Specification...',
        tabsize: 2,
        height: 200
      });
</script>
<!-- <script>
  function goToSub(value){

var parentsCategory = value;

$.ajax({
    headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

    url: "{{url('/admin/chaining_product')}}"+"/"+parentsCategory,

    type:'POST',

    success: function (response) {
        $("#subCategory").html(response[0]);

        $("#product_brand").html(response[1]);
    },
})
}

function goToBrands(value){
var Category = value;

$.ajax({

    headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

    url: "{{url('/admin/partials/brand/brand')}}"+"/"+Category,

    type:'POST',

    success: function (response) {

        $("#product_brand").html(response);

    },
})
}
</script> -->
