  <div class="card mt-4">
      <div class="card-header bg-info">
          <h5 class="mb-0">
              <i class="fas fa-file-medical"></i>
              Patient Description
          </h5>
      </div>

      <div class="card-body">
          <div class="form-group">
              <label>
                  Description
              </label>

              <textarea name="description" rows="6" class="form-control @error('description') is-invalid @enderror"
                  placeholder="Write patient details, diagnosis, symptoms, history, etc...">{{ old('description') }}</textarea>
              @error('description')
                  <span class="invalid-feedback">
                      {{ $message }}
                  </span>
              @enderror
          </div>
      </div>
  </div>
