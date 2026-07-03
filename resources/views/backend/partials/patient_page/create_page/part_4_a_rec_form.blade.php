<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Recommend Another Doctor?</label>

            <select name="recommended" id="recommended" class="form-control">
                <option value="0" {{ old('recommended') == 0 ? 'selected' : '' }}>
                    No
                </option>

                <option value="1" {{ old('recommended') == 1 ? 'selected' : '' }}>
                    Yes
                </option>
            </select>
        </div>
    </div>

    <div class="col-md-6 recommendation-fields">
        <div class="form-group">
            <label>Doctor Name</label>

            <input type="text" name="recommended_doctor"
                class="form-control @error('recommended_doctor') is-invalid @enderror"
                value="{{ old('recommended_doctor') }}" placeholder="Enter Doctor Name">

            @error('recommended_doctor')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
