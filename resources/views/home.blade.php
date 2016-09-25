@extends('layouts.app')
@section('css')
<style>
 body{
    font-size: 100px;
}


</style>
@endsection



@section('content')

<script type="text/javascript">
// function displayImage(elem) {
//     var image = document.getElementById("img");
//     image.src = elem.value;
    
// }
function myfunction() {
    var image = document.getElementById("img"),
    select = document.getElementsByTagName('select')[0];
    image.src = select.value+'.png';
    console.log('set src to' + select.value);
}
</script>


<div class="container">
    <form action="{{ URL::action('SeatController@store') }}" method="post">
    {{csrf_field()}}
        <div class="content">
            <div class="form-group">    
            <label>選擇樓層</label>
                <div>
                    <select id="floor" name="floor" onchange="myfunction()">
                        <option value="9F" >地下一樓</option>
                        <option value="1F" >一樓</option>
                        <option value="2F" >二樓</option>
                        <option value="3F" >三樓</option>
                        <option value="4F" >四樓</option>
                        <option value="5F" >五樓</option>   
                        <option value="6F" >六樓</option>   
                        <option value="7F" >七樓</option>
                        <option value="8F" >八樓</option>    
                    </select>
                </div>                
        </div>

   <img src="9F.png" style="width:750px;" id="img" />

        <div class="content">
            <div class="form-group">    
            <label>選擇座位編號</label>
                <div>
                    <select id="seat" data-live-search="true" name="seat" >
                        <option value="A1" >A1</option>
                        <option value="A2" >A2</option>
                        <option value="A3" >A3</option>
                        <option value="A4" >A4</option>
                        <option value="A5" >A5</option>
                        <option value="A6" >A6</option>   
                        <option value="A7" >A7</option>   
                        <option value="A8" >A8</option>
                        <option value="A9" >A9</option>
                        <option value="A10" >A10</option>
                        <option value="B1" >B1</option>
                        <option value="B2" >B2</option>
                        <option value="B3" >B3</option>
                        <option value="B4" >B4</option>
                        <option value="B5" >B5</option>
                        <option value="C1" >C1</option>
                        <option value="C2" >C2</option>
                        <option value="C3" >C3</option>
                        <option value="C4" >C4</option>
                        <option value="C5" >C5</option>
                        <option value="C6" >C6</option>  
                    </select>
                </div>                
        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    確定
                                </button>
                            </div>
                        </div>
</form>




@endsection