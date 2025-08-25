<div class="row mb15">
    <div class="col-lg-6">
        <div class="form-row">
            <label for="" class="control-label text-left">{{ __('messages.title') }}<span class="text-danger">(*)</span></label>
            <input 
                type="text"
                name="name"
                value="{{ old('name', ($model->name) ?? '' ) }}"
                class="form-control change-title"
                data-flag = "{{ (isset($model->name)) ? 1 : 0 }}"
                placeholder=""
                autocomplete="off"
                {{ (isset($disabled)) ? 'disabled' : '' }}
            >
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-row">
            <label for="" class="control-label text-left">Số lượng bài<span class="text-danger">(*)</span></label>
            <input 
                type="text"
                name="total_lesson"
                value="{{ old('total_lesson', ($model->total_lesson) ?? '' ) }}"
                class="form-control change-title int"
                placeholder=""
                autocomplete="off"
            >
        </div>
    </div>
</div>
<div class="row mb15">
    <div class="col-lg-6">
        <div class="form-row">
            <label for="" class="control-label text-left">Thời lượng<span class="text-danger">(*)</span></label>
            <input 
                type="text"
                name="duration"
                value="{{ old('duration', ($model->duration) ?? '' ) }}"
                class="form-control change-title"
                placeholder=""
                autocomplete="off"
            >
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-row">
            <label for="" class="control-label text-left">Giảng viên<span class="text-danger">(*)</span></label>
            <select name="lecturer_id" class="form-control setupSelect2">
                <option value="0">[Chọn Giảng Viên]</option>
                @foreach($lecturers as $key => $val)
                <option {{ 
                    $val->id == old('lecturer_id', (isset($model->lecturer_id)) ? $model->lecturer_id : '') ? 'selected' : '' 
                    }}  value="{{ $val->id }}">{{ $val->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="row mb30">
    <div class="col-lg-12">
        <div class="form-row">
            <label for="" class="control-label text-left">{{ __('messages.description') }} </label>
            <textarea 
                name="description" 
                class="ck-editor" 
                id="ckDescription"
                {{ (isset($disabled)) ? 'disabled' : '' }} 
                data-height="100">{{ old('description', ($model->description) ?? '') }}</textarea>
        </div>
    </div>
</div>
@if(!isset($offContent))
    <div class="row">
        <div class="col-lg-12">
            <div class="form-row">
                <div class="uk-flex uk-flex-middle uk-flex-space-between">
                    <label for="" class="control-label text-left">{{ __('messages.content') }} </label>
                    <a href="" class="multipleUploadImageCkeditor" data-target="ckContent">{{ __('messages.upload') }}</a>
                </div>
                <textarea
                    name="content"
                    class="form-control ck-editor"
                    placeholder=""
                    autocomplete="off"
                    id="ckContent"
                    data-height="500"
                    {{ (isset($disabled)) ? 'disabled' : '' }}
                >{{ old('content', ($model->content) ?? '' ) }}</textarea>
            </div>
        </div>
    </div>
@endif