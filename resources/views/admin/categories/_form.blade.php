<div class="row justify-content-center">
    <div class="col-lg-9">
        <label class="labels mb-2 mt-3" >Category</label>
        <select name="parent_id" class="form-select">
            <option value="">Select Category</option>
            @foreach ($parentCategories as $parentCategory)
                <option
                    @isset($category)
                        {{$category->parent_id == $parentCategory->id ? "selected=true" : ""}}
                    @endisset
                    value="{{ $parentCategory->id }}"
                >
                    {{ $parentCategory->name }}
                </option>
            @endforeach
        </select>
        <p class="text-danger ml_25">{{$errors->first("parent_id")}}</p>
        <p class="text-danger ml_5">Select only when you want to create a subcategory.</p>
    </div>
    <div class="col-lg-9">
        <label class="labels mb-2 mt-3">Name</label>
        <input type="text" name="name"
            class="form-control" value="{{ old('name', isset($category) ? $category->name : '')}}"
            placeholder="enter cagegory or subcategory name"
        >
        <p class="text-danger ml_15">{{$errors->first("name")}}</p>
    </div>
    @isset($office)
        <div class="col-lg-9">
            <label class="labels mb-2 mt-3" >Status</label>
            <select name="status" class="form-select">
                <option disabled>Select Status</option>
                @foreach (get_all_type_status() as $status)
                    <option
                        @isset($office)
                            {{$office->status == $status['value'] ? "selected=true" : ""}}
                        @endisset
                        value="{{ $status['value'] }}"
                    >
                        {{ $status['type'] }}
                    </option>
                @endforeach
            </select>
            <p class="text-danger ml_25">{{$errors->first("status")}}</p>
        </div>
    @endisset
    <div class="col-9">
        <div class="d-grid gap-2 mt_30">
            <button type="submit" class="btn_1 radius_btn d-block text-center">{{ $pageText}}</button>
        </div>
    </div>
</div>
