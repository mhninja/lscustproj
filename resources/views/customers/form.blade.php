<div class="form-group">
    <label for="name">First Name:</label>
    <input type="text" name="firstName" value="{{ old('firstName') ?? $customer->firstName }}" class="form-control">
    <div>{{ $errors->first('firstName') }}</div>
</div>

<div class="form-group">
    <label for="name">Last Name:</label>
    <input type="text" name="lastName" value="{{ old('lastName') ?? $customer->lastName }}" class="form-control">
    <div>{{ $errors->first('lastName') }}</div>
</div>

<div class="form-group">
    <label for="email">Email:</label>
    <input type="text" name="email" value="{{ old('email') ?? $customer->email }}" class="form-control">
    <div>{{ $errors->first('email') }}</div>
</div>

<div class="form-group">
    <label for="active">Select customer status</label>
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Select customer status</option>

        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{ $activeOptionKey }}" {{ $customer->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
        @endforeach
    </select>
</div>
@csrf