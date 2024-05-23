@if(session('success'))
    <div id="successAlert" class="alert alert-success">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function() {
            $('#successAlert').fadeOut('slow');
        }, 3000); // 3000 milliseconds = 3 seconds
    </script>
@endif