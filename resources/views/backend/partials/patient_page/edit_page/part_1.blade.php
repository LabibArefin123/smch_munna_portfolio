<div class="card">
    <div class="card-header bg-primary">
        <h5 class="mb-0">
            <i class="fas fa-user-injured"></i>
            Patient Information
        </h5>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Patient Name
                        <span class="text-danger">*</span>
                    </label>

                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name', $patient->name) }}" placeholder="Enter Patient Name">

                    @error('name')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Phone Number
                        <span class="text-danger">*</span>
                    </label>

                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                        value="{{ old('phone', $patient->phone) }}" placeholder="01XXXXXXXXX">

                    @error('phone')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Gender
                        <span class="text-danger">*</span>
                    </label>

                    <select name="sex" class="form-control @error('sex') is-invalid @enderror">
                        <option value="">Choose Gender</option>
                        <option value="Male" {{ old('sex', $patient->sex) == 'Male' ? 'selected' : '' }}>
                            Male
                        </option>
                        <option value="Female" {{ old('sex', $patient->sex) == 'Female' ? 'selected' : '' }}>
                            Female
                        </option>
                    </select>

                    @error('sex')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Age
                        <span class="text-danger">*</span>
                    </label>

                    <input type="number" name="age" class="form-control @error('age') is-invalid @enderror"
                        value="{{ old('age', $patient->age) }}" min="0" max="120" placeholder="Age">

                    @error('age')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
