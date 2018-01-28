@extends('layouts.cms.admin')



{{--<script src="{{ asset('cms/js/vue/vue.js') }}"></script>--}}


@section('content')


    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

        <div class="title m-b-md" id="app">
            <p>@{{ message }}</p>


        </div>








    <script>
        (function(){
            var app = new Vue({
                el: '#app',
                data: {
                    message: 'Вы загрузили эту страницу в: ' + new Date().toLocaleString(),

                },
            });        	})();




        var app4 = new Vue({
            el: '#app-4',
            data: {
                todos: [
                    { text: 'Посадить дерево' },
                    { text: 'Построить дом' },
                    { text: 'Вырастить сына' }
                ]
            }
        })
    </script>


@endsection