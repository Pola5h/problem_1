@extends('front.front_master')
@section('front')






<form method="post" action="{{route('user.update',$editData->id)}}"">



    @csrf

    <ul class="form-style-1">
        <li>
            <label>User Name <span class="required">*</span></label>
            <input type="text" value="{{$editData->name}}" name="name" class="field-long" />
        </li>
        <li>
            <label>Email <span class="required">*</span></label>
            <input type="email" value="{{$editData->email}}" name="email" class="field-long" />
        </li>
        <li>
            <label>Date of Birth <span class="required">*</span></label>
            <input type="date" value="{{$editData->dob}}" name="dob" class="field-long" />
        </li>


        <li>
            <label>City <span class="required">*</span></label>
            <input type="text" value="{{$editData->city}}" name="city" class="field-long" />
        </li>
        <li>
            <label>Country <span class="required">*</span></label>
            <input type="text" value="{{$editData->country}}" name="country" class="field-long" />
        </li>



        <li>
            <label>Activity <span class="required">*</span></label>
            <select name="activity" class="field-select">
                <option value="" selected="" disabled="">Select Availability</option>
                <option value="Active" {{($editData->activity== "Active" ?"selected":"")}} >Active</option>
            <option value="Inactive" {{($editData->activity== "Inactive" ?"selected":"")}}>Inactive</option>
            </select>
        </li>
     
        <li>
            <input type="submit" value="Update"  />
        </li>
    </ul>
    </form>























@endsection