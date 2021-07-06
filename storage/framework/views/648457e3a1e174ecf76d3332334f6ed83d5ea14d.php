<!DOCTYPE html>
<html>
<head>
    <title>Search Usercontract</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="JsLocalSearch.js"></script>
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;

        }
    </style>
</head>
<body>
<br />
<div class="container box">
    <h3 align="center">Usercontact Search</h3><br />
    <form action="/fetch" method="post" autocomplete="off">
        <div class="form-group">
            <input type="text" name="search" id="search" class="form-control" placeholder="User Contract" />
            <div id="userContract">
            </div>
        </div>
        <?php echo e(csrf_field()); ?>

    </form>
</div>
</body>
</html>

<script>
    $(document).ready(function(){

        $('#search').keyup(function(){
            var query = $(this).val();
            if(query != '')
            {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"<?php echo e(route('search.fetch')); ?>",
                    method:"POST",
                    data:{query:query, _token:_token},
                    success:function(data){
                        $('#userContract').fadeIn();
                        $('#userContract').html(data);
                    }
                });
            }
        });

        $(document).on('click', 'li', function(){
            $('#search').val($(this).text());
            $('#userContract').fadeOut();
        });

    });


</script>
<?php /**PATH C:\xampp\htdocs\fengshui_webapp\resources\views/search.blade.php ENDPATH**/ ?>