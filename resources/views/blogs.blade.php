@extends('layout')
@section('title')
    บทความ
@endsection
@section('content')
    <h2 class="text-center py-2">บทความทั้งหมด</h2>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">title</th>
                <th scope="col">content</th>
                <th scope="col">status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
                <tr>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['content'] }}</td>
                    <td>
                        @if ($item['status'] == true)
                            <span class="btn btn-success">เผยแพร่</span>
                        @else
                            <span class="btn btn-danger">ไม่เผยแพร่</span>
                        @endif
                </tr>
                </td>
            @endforeach
        </tbody>
    </table>
@endsection
