<button class="btn btn-danger remove-all-files" data-field-name="{{ $row->field }}" type="button">Удалить все</button>
<br>
<div class="multiple-images-sortable" data-field-name="{{ $row->field }}" data-id="{{ $dataTypeContent->id }}">
    @if(isset($dataTypeContent->{$row->field}))
        <?php $images = json_decode($dataTypeContent->{$row->field}); ?>
        @if($images != null)
            @foreach($images as $image)
                <div class="img_settings_container" data-field-name="{{ $row->field }}" style="float:left;padding-right:15px;">
                    <a href="#" class="voyager-x remove-multi-image" style="position: absolute;"></a>
                    <img src="{{ !filter_var($image, FILTER_VALIDATE_URL) ? Voyager::image( $image ) : $image }}" data-file-name="{{ $image }}" data-id="{{ $dataTypeContent->getKey() }}" style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:5px;">
                </div>
            @endforeach
        @endif
    @endif
</div>
<div class="clearfix"></div>
<input @if($row->required == 1 && !isset($dataTypeContent->{$row->field})) required @endif type="file" name="{{ $row->field }}[]" multiple="multiple" accept="image/*">
