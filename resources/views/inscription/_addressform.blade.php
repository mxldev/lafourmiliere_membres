<div class="row">

<!-- Phonenumber Form Input -->
  <div class="form-group{{ $errors->has('phonenumber') ? ' has-error' : '' }}">
      <label for="phonenumber" class="col-md-4 control-label">Téléphone</label>

      <div class="col-md-6">
          <input id="phonenumber" type="text" class="form-control" name="phonenumber" value="{{ old('phonenumber') }}">

          @if ($errors->has('phonenumber'))
              <span class="help-block">
                  <strong>{{ $errors->first('phonenumber') }}</strong>
              </span>
          @endif
      </div>
  </div>
</div>

<div class="row">
<!-- Address Form Input -->
  <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
      <label for="address" class="col-md-4 control-label">Adresse</label>

      <div class="col-md-6">
          <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}">

          @if ($errors->has('address'))
              <span class="help-block">
                  <strong>{{ $errors->first('address') }}</strong>
              </span>
          @endif
      </div>
  </div>

<!-- Addresscomp Form Input -->
  <div class="form-group{{ $errors->has('addresscomp') ? ' has-error' : '' }}">
      <label for="addresscomp" class="col-md-4 control-label">étage, ...</label>

      <div class="col-md-6">
          <input id="addresscomp" type="text" class="form-control" name="addresscomp" value="{{ old('addresscomp') }}">

          @if ($errors->has('addresscomp'))
              <span class="help-block">
                  <strong>{{ $errors->first('addresscomp') }}</strong>
              </span>
          @endif
      </div>
  </div>
</div>

<div class="row">
<!-- Postcode Form Input -->
  <div class="form-group{{ $errors->has('postcode') ? ' has-error' : '' }}">
      <label for="postcode" class="col-md-4 control-label">Code postal</label>

      <div class="col-md-6">
          <input id="postcode" type="text" class="form-control" name="postcode" value="{{ old('postcode') }}">

          @if ($errors->has('postcode'))
              <span class="help-block">
                  <strong>{{ $errors->first('postcode') }}</strong>
              </span>
          @endif
      </div>
  </div>

<!-- City Form Input -->
  <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
      <label for="city" class="col-md-4 control-label">Ville</label>

      <div class="col-md-6">
          <input id="city" type="text" class="form-control" name="city" value="{{ old('postcode') }}">

          @if ($errors->has('city'))
              <span class="help-block">
                  <strong>{{ $errors->first('city') }}</strong>
              </span>
          @endif
      </div>
  </div>
</div>