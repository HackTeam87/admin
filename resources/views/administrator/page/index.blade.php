@extends('layouts.cms.admin')
@section('title' , 'Главная страница')

@section('content')


    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="links">
                <div class="table-responsive">
                    <table class="table article-title ">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Date</th>
                        </tr>
                        @foreach($categories as $category)

                           <tr>
                              <th>
                                  <a href="{{route('category',$category->slug)}}">
                                  {!! $category->id !!}
                                  </a>
                             </th>
                               <th>
                                   <a href="{{route('category',$category->slug)}}">
                                   {!! $category->title !!}
                                   </a>
                               </th>
                               <th>
                                   <a href="{{route('category',$category->slug)}}">
                                   {!! Carbon\Carbon::parse($category->created_at)->format('d/m/Y') !!}
                                   </a>
                               </th>
                           </tr>
                        @endforeach


                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection