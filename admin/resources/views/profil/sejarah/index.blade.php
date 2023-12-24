    @extends('layouts.master')
    
    @section('title','Sejarah')
    @section('content')
    
                <div class="page-title">
                    <h3>Sejarah</h3>
                </div>
                
                <section class="section">
                    
                   
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        @include('include.alert')
                                        {{-- <img src="{{ asset('storage/'.$sejarah[0]->image) }}" alt="" srcset=""> --}}
                                        <form action="{{ route('sejarah.update', ['sejarah' => $sejarah[0]->id]) }}" method="post" enctype="multipart/form-data">
                                             @csrf
                                             @method('PUT')
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="description" class="form-label">Sejarah</label>
                                                        <textarea class="form-control" name="description" id="description">{{ $sejarah[0]->description }}</textarea>
                                                    </div>
                                                    <div class="form-group row align-items-center">
                                                            <div class="col-lg-1 col-1">
                                                                <label class="col-form-label">Gambar</label>
                                                            </div>
                                                            <div class="col-lg-4 col-4">
                                                                <input type="file" id="image" class="form-control" name="image">
                                                                <input type="hidden" name="image_old" value="{{ $sejarah[0]->image }}">
                                                            </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                   
                </section>
               
    @endsection

@section('js')
    <script src="https://cdn.ckeditor.com/4.4.3/full/ckeditor.js"></script>
    <script>
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.

            CKEDITOR.replace('description');
            
           
        });
    </script>
@endsection