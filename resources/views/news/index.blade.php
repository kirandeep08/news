<!-- resources/views/news/index.blade.php -->

@extends('layouts.app')

@section('title', 'News')

@section('content')
    <h1>News Feed</h1>
    <table id="news-table" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Link</th>
                <th>Description</th>
                <th>Publication Date</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($data['channel']['item']))
                @foreach($data['channel']['item'] as $item)
                    <tr>
                        <td>{{ $item['title'] }}</td>
                        <td><a href="{{ $item['link'] }}" target="_blank">Read more</a></td>
                        <td>{{ $item['description'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($item['pubDate'])->toDayDateTimeString() }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">No news items found.</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection

@push('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#news-table').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true
            });
        });
    </script>
@endpush
