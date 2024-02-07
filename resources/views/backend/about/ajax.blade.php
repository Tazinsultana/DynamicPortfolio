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
    $(document).ready(function() {
        // alert('ok');

        // For Creating.....
        $(document).on('click', '.add_details', function(e) {
            e.preventDefault();
            let title = $('#title').val();
            let des = $('#des').val();
            let name = $('#name').val();
            let date = $('#date').val();
            let deg = $('#deg').val();
            let phn = $('#phn_no').val();
            let address = $('#add').val();
            let email = $('#email').val();
            let img = $('#file').val();

            console.log(title, des);

        })
        $.ajax({

            url: "{{ route('add.about') }}",
            method: 'POST',
            data: {
                title,
                des,
                name,
                date,
                deg,
                phn,
                address,
                email,
                img
            },

            success: function(res) {
                if (res.status == 'success') {
                    $('#addModal').modal('hide');
                    $('#add')[0].reset();
                    $('.table').load(location.href + ' .table');

                }
            }


        })
    })
</script>
