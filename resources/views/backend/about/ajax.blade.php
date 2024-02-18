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
            let phone = $('#phnno').val();
            let address = $('#add').val();
            let email = $('#email').val();
            let img = $('#file').val();

            // console.log(title, date);

            // })
            $.ajax({

                url: "{{ route('add.about') }}",
                method: 'POST',
                data: {
                    title,
                    des,
                    name,
                    date,
                    deg,
                    phone,
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
                },
                error: function(err) {
                    if (err.status == 400) {


                        $('.errors').html('');
                        $('.errors').removeClass('d-done');
                        $('.titleError').text('res.errors.title');
                        $('.DesError').text('res.errors.des');
                        $('.nameError').text('res.errors.name');
                        $('.birthdateError').text('res.errors.date');
                        $('.degreeError').text('res.errors.degree');
                        $('.phnnoError').text('res.errors.phone');
                        $('.addressError').text('res.errors.address');
                        $('.emailError').text('res.errors.email');
                        $('.imageError').text('res.errors.image');


                    } else {
                        $('.errors').html('');
                        $('.errors').addClass('d-done');
                    }

                    // let error = err.responseJSON;
                    // $.each(error.errors, function(index, value) {
                    //     $('.errMsgContainer').append('<span class="text-danger">' +
                    //         value + '</span>');
                    // });
                }


            })
        })
    })
</script>
