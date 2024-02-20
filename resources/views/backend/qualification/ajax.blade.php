<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>
    $(document).on('click', '.add_edu', function(e) {
        e.preventDefault();
        let deg_name = $('#deg_name').val();
        let inst_name = $('#inst_name').val();
        let start = $('#start').val();
        let end = $('#end').val();
        let des = $('#des').val();
        // console.log(deg_name,inst_name,start,end,des);

        $.ajax({
            url: "{{ route('education.add') }}",
            method: "POST",
            data: {
                deg_name,
                inst_name,
                start,
                end,
                des

            },
            success: function(res) {
                if (res.status == 'success') {
                    $('#addModal').modal('hide');
                    $('#add')[0].reset();
                    $('.table').load(location.href + ' .table');

                }
            },




        });









    });
</script>
