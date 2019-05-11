
<script>
    $(document).ready(function(){
        @if(Session::has('success'))
            new Noty({
                text: "{{ Session::get('success') }}",
                type: 'success'
            }).show();
        @elseif(Session::has('error'))
            new Noty({
                text: "{{ Session::get('error') }}",
                type: 'error'
            }).show();
        @endif
    });
</script>
