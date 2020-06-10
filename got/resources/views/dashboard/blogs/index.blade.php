@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Titel</th>
                            <th>Intro</th>
						<th><a class="btn btn-primary" href="{{route('dashboard.blogs.create')}}"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>
                                {{$blog->title}}
                            </td>
                            <td>
                                {{ Str::limit($blog->intro, 50) }};
                            </td>
                            <td>
								<a href="{{ route('dashboard.blogs.edit', $blog->id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								<form action="{{ route('dashboard.blogs.delete', $blog->id )}}" method="get">
                                    @csrf
                                    <input type="hidden" name="blog" value="{{ $blog->id}}">
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
