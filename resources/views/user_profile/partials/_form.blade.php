<div class="form-row">
    <div class="form-group col-md-6">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" name="first_name" id="first_name"
               placeholder="Enter First Name..."
               value="{{old('first_name')}}" required>
    </div>

    <div class="form-group col-md-6">
        <label for="last_name">Last Name</label>
        <input type="text" class="form-control" name="last_name" id="" placeholder="Enter Last Name..."
               value="{{old('last_name')}}" required>
    </div>
</div>

<div class="form-group">
    <label for="main_activity">Activity</label>
    <select class="form-control" multiple="multiple" name="main_activity[]" id="main_activity">
        <option value="1">Tennis</option>
        <option value="2">Paintball</option>
        <option value="3">Yoga</option>
    </select>
</div>

<div class="form-row">
    <label for="description">Description</label>
    <textarea class="form-control" rows="3" name="description" id="description"
              required>{{old('description')}}</textarea>
</div>

