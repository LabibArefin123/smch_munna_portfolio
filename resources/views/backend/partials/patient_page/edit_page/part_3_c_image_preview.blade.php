<div class="col-md-12">
    <div id="descriptionPreview" class="d-flex flex-wrap">
        @if (!empty($patient->description_images))
            @php
                $descriptionImages = is_array($patient->description_images)
                    ? $patient->description_images
                    : json_decode($patient->description_images, true);
            @endphp

            @if (is_array($descriptionImages))
                @foreach ($descriptionImages as $image)
                    <div class="card mr-3 mb-3 shadow-sm" style="width:180px;">
                        <img src="{{ asset($image) }}" class="card-img-top" style="height:160px; object-fit:cover;">

                        <div class="card-body p-2 text-center">
                            <small class="text-truncate d-block">
                                Existing Image
                            </small>
                        </div>
                    </div>
                @endforeach
            @endif
        @endif
    </div>
</div>
