<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script type="text/javascript" src="/js/script.js"></script>
    </head>
    <body>
        <h3>Persons</h3>
        <a href="#" id="add_new">Add New</a>
        @include('add-new-modal')
        @include('update-modal')
        <table class="table table-bordered">
            <tr class="row">
                @foreach($data as $key=>$person)
                @if($key>0)
                <td>{{$key}}->{{$person}}</td>
                <td><a href="/delete/{{$key}}">X</a></td>
                <td><a href="#" id="update_existing" item="{{$key}}" onClick="update({{$key}})">Update</a></td>
                @else
                <td colspan="2">{{$key}}->{{$person}}</td>
                @endif
                @if($key%2==0)
            </tr><tr>
                @endif
                @endforeach
            </tr>
        </table>
    </body>
</html>

