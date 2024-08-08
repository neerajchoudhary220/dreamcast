@extends('web.layouts.master')

@section('contents')
    <div class="row">
        <div class="col-12">
             @include('web.users.form')
            @include('web.users.datatable')
            
        </div>
    </div>
@endsection

@push('additional-js')
<script>
    const user_dt_url = "{{ route('users.list') }}"
    const check_already_exists = "{{ route('users.check.already.exists') }}"
    window.user_dt_tbl ='';
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}",
            }

        })
    })
    </script>
<script src="{{ asset('assets/js/users/users-dt.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/other/custom-validator.js') }}"></script>
<script src="{{ asset('assets/js/users/user-form.js') }}"></script>
@endpush
