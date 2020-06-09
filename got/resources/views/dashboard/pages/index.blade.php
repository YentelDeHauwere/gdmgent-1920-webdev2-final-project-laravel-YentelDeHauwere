@extends('layout')

@section('content')
    <div class="container-fluid dashboard">
        <div class="row">
            <div class="col">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Titel</th>
                            <th>Intro</th>
						<th><a class="btn btn-primary" href="{{route('dashboard.pages.create')}}"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $page)
                        <tr>
                            <td>
                                {{$page->title}}
                            </td>
                            <td>
                                {{ Str::limit($page->intro, 50) }};
                            </td>
                            <td>
								<a href="{{ route('dashboard.pages.edit', $page->id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								<form action="{{ route('dashboard.pages.delete', $page->id )}}" method="get">
                                    @csrf
                                    <input type="hidden" name="page_id" value="{{ $page->id}}">
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
