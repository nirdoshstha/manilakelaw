//1. SLUG CHANGE AS PER TYPE ON TITLE
<script>
    $("#title").keyup(function(){
        let title = $(this).val();
        let slug = title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        $("#slug").val(slug);
    });
</script>

//2. CK EDITOR FOR TEXTAREA
<script>
    CKEDITOR.replace( 'description' );
    //CKEDITOR.replace( 'seo_desc' );
</script>

<script>
    $('.delete-confirm').click(function(){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
               $(this).closest("form").submit();
            }
          })
    })

</script>
