@section('assets-top')
<link href="{{ asset('backend/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
<script src="{{ asset('backend/vendor/tinymce/tinymce.min.js') }}"></script>
<script>
    var editor_config = {
      path_absolute : "/",
      selector: '#textarea',
      height: 500,
      theme: 'modern',
      plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
      fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
      image_advtab: true,
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css'
      ],
      relative_urls: false,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
          if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }
      
          tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            name : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
          });
      }
    };
    tinymce.init(editor_config);
</script>
@endsection

<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header text-white bg-primary">
                Product Baru
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama Product</label>
                    {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required', 'autofocus']) !!}
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Deskripsi Barang</label>
                    {!! Form::textarea('description', null, ['id' => 'textarea', 'class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control']) !!}
                    @if ($errors->has('description'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <button class="btn btn-primary pull-right" type="submit">
                Jual
            </button>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-header text-white bg-primary">
                Category
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Category</label>
                    {!! Form::select('category_id', ['' => '-']+ App\Category::pluck('name', 'id')->all() , null, ['class' => $errors->has('category_id') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                    @if ($errors->has('category_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('category_id') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header text-white bg-primary">
                Gambar Produk
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="cover" data-preview="holder" class="btn btn-primary text-white">
                                <i class="fa fa-cloud-upload"></i> Upload
                            </a>
                        </span>
                        {!! Form::text('cover', null, ['id' => 'cover', 'class' => 'form-control', 'readonly']) !!}
                    </div>
                    <!-- if -->
                    <!-- <img src="#" id="holder" style="margin-top:15px;max-height:254px;max-width: 152px;"> -->
                    <!-- endif -->
                    <img id="holder" style="margin-top:15px;max-height:254px;max-width: 152px;">
                </div>
            </div>
        </div><br>
        <div class="card">
            <div class="card-header text-white bg-primary">
                Harga Produk
            </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Input Harga</label>
                        {!! Form::number('price', null, ['class' => $errors->has('price') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                        @if ($errors->has('price'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
        </div><br>
        <div class="card">
            <div class="card-header text-white bg-primary">
                Stok Produk
            </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Input Stok</label>
                        {!! Form::number('quantity', null, ['class' => $errors->has('quantity') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                        @if ($errors->has('quantity'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('quantity') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
        </div><br>
        <div class="card">
            <div class="card-header text-white bg-primary">
                Status Barang
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Status</label>
                    {!! Form::select('status', ['0' => 'Tidak Dijual', '1' => 'Dijual'], null, ['class' => $errors->has('status') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                    @if ($errors->has('status'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('status') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <br>
    </div>
</div>

@section('assets-bottom')
<script src="{{ asset('backend/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
<script>
    $(document).ready( function () {
        $("#datetime").datetimepicker({
            format: 'yyyy-mm-dd hh:ii:00',
            autoclose: true
        });
        $('#lfm').filemanager('image');
    });
</script>
@endsection
