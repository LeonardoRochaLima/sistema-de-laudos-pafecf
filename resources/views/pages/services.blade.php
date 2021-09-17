@extends('layouts.app')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        section {
            padding-top: 100px;
        }

        .form-sectio {
            padding-left: 15px;
            display: none;
        }
        
        .form-section.current{
            display: inherit;
        }

        .btn-info, .btn-btn-success{
            margin-top: 10px;
        }

        .parseley-error-list{
            margin: 2px 0 2px;
            padding: 0;
            list-style-type: none;
            color: red;
        }
    </style>
    <h1>{{ $title }}</h1>
    @if (count($services) > 0)
        <ul class="list-group">
            @foreach ($services as $service)
                <li class="list-group-item">{{ $service }}</li>
            @endforeach
        </ul>
    @endif
    <div class="containe">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-hearder text-white bg-ingo">
                        <h5>Multi Step Form</h5>
                    </div>
                    <div class="card-body">
                        <form action="" class="contact-form">
                            @csrf
                            <div class="form-section">
                                <label for="first-name">First Name</label>
                                <input type="text" class="form-control" name="first-name" required>
                                <label for="last-name">Last Name</label>
                                <input type="text" class="form-control" name="last-name" required>
                            </div>
                            <div class="form-section">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" required>
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" required>
                            </div>

                            <div class="form-section">
                                <label for="msg">Message</label>
                                <textarea name="msg" class="form-control" required></textarea>
                            </div>
                            <div class="form-navigation">
                                <button type="button" class=" previous btn btn-info float-left">Voltar</button>
                                <button type="button" class="next btn btn-info float-right">Avançar</button>
                                <button type="submit" class="btn btn-success float-right">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function()){
            var $sections = $('.form-section');

            function navigateTo(index){
                $sections.removeClass('current').eq(index).addClass('current');
                $('.form-navigation .previous').toggle(index>0);
                var atTheEnd = index >= $sections.length -1;
                $('.form-navigation .next').toggle(!alTheEnd);
                $('.form-navigation [type=submit]').toggle(atTheEnd);
            }

            function curIndex(){
                return $sections.index($sections.filter('current'));
            }

            $('.form-navigaion .previos').click(function(){
                navigateTo(curIndex()-1);
            });

            $('.form-navigation .next').click(function(){
                $('.contact-form').parsley().whenValidate(){
                    group: 'block-' + curIndex()
                }).done(function(){
                    navigateTo(curIndex()+1);
                });
            });

            $sections.each(function(index, section){
                $(section).find(':input').attr('data-parsley-group', 'block'+index);
            });
            navigateTo(0);
        });
    </script>
@endsection
