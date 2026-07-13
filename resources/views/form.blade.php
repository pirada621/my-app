@extends('layout')
@section('title', 'เขียนบทความ')
@section('content')
    <h2 class="text-center py-2">เขียนบทความใหม่</h2>
    <form method="POST">
        <div class="form-group">
            <label for="title">ชื่อบทความ</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="title">เนื้อหา</label>
            <textarea name="content" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <input type="submit" value="บันทึก" class="btn btn-primary mt-3">
        <a href="/blogs" class="btn btn-secondary mt-3">บทความทั้งหมด</a>
    </form>
@endsection
