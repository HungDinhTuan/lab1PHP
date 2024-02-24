@extends('admin.Layout')
@section('admin_content')
    <h3 style="text-align: center; height: 480px">
        <?php
        $name = Session::get('admin_name');
        if($name){
            echo 'Hi! <span style="text-transform:uppercase;">', $name, '</span>';
        }
        ?>
    </h3>
@endsection
