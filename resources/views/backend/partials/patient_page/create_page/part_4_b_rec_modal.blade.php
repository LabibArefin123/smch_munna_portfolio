<div class="row recommendation-fields">
    <div class="col-md-12">
        <div class="form-group">
            <label>Recommendation Information</label>

            <textarea name="recommendation_information" rows="5"
                class="form-control @error('recommendation_information') is-invalid @enderror"
                placeholder="Write recommendation details...">{{ old('recommendation_information') }}</textarea>

            @error('recommendation_information')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>
