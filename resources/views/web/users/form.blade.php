<div class="card mb-3">
    <div class="card-header">
        <button class="btn btn-success" id="userFormCollapseBtn" type="button" data-toggle="collapse" data-target="#userForm"
            aria-expanded="false" aria-controls="userForm">
            Add New User
        </button>
        </p>
    </div>
    <div class="collapse" id="userForm">
        <div class="card card-body">
            {{ html()->form('POST',route('users.save'))->open() }}
            <div class="row mb-3">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="form-group">
            
                        {{ html()->input('file', 'image')->attributes(['id' => 'image', 'accept' => 'image/jpeg', 'image/jpg', 'image/png']) }}
                    </div>
                </div>
            </div>
            <div class="row mb-2 mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        {{ html()->label('Name')->for('name') }}<span class="text-danger">*</span>
                        {{ html()->input('text', 'name', null)->attributes(['class' => 'form-control', 'placeholder' => 'Name']) }}
                    </div>
            
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {{ html()->label('Email')->for('email') }}<span class="text-danger">*</span>
                        {{ html()->input('text', 'email', null)->attributes(['class' => 'form-control', 'placeholder' => 'example@mail.com']) }}
                    </div>
            
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="form-group">
                        {{ html()->label('Phone Number')->for('phone_number') }}<span class="text-danger">*</span>
                        {{ html()->input('text', 'phone_number', null)->attributes(['class' => 'form-control', 'placeholder' => '9800000000']) }}
                    </div>
            
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {{ html()->label('Role')->for('email') }}<span class="text-danger">*</span>
                        {{ html()->select('role', $roles)->attributes(['class' => 'form-control']) }}
                        {{-- {{ html()->input('text', 'email', null)->attributes(['class' => 'form-control','placeholder'=>'example@mail.com']) }} --}}
                    </div>
            
                </div>
            </div>
            
            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="form-group">
                        {{ html()->label('Description')->for('description') }}
                        {{ html()->textarea('description', null)->attributes(['class' => 'form-control', 'placeholder' => 'Description...', 'rows' => 4]) }}
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="form-group text-right">
                        {{ html()->submit('Save')->attributes(['class' => 'btn btn-success']) }}
                        {{ html()->reset('Reset')->attributes(['class' => 'btn btn-danger rstBtn']) }}
                    </div>
                </div>
            </div>
            </div>
            </div>
            
            {{ html()->form()->close() }}
            
        </div>
    </div>
</div>