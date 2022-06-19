@extends('master')
@section('content')
<div class="cards">
    <div class="calculator-grid">
        <!-- <div class="output">
            <div class="previous-operand">enter value</div>
            <div class="current-operand">321</div>
        </div> -->
        <input type="number" name="res" id="res" style="font-size: 2rem;direction:ltr;text-align:right;unicode-bidi: bidi-override;" class="output current-operand">
        <button type="button" onclick="clr()">CE</button>
        <button type="button" value="del" class="btn">DEL</button>
        <button type="button" value="%" class="btn" onclick="inop(this.value)">MOD</button>        
        <button type="button" value="/" class="btn" onclick="inop(this.value)">/</button>
        <button type="button" value="1" class="btn" onclick="inval(this.value)">1</button>
        <button type="button" value="2" class="btn" onclick="inval(this.value)">2</button>
        <button type="button" value="3" class="btn" onclick="inval(this.value)">3</button>
        <button type="button" value="*" class="btn" onclick="inop(this.value)">*</button>
        <button type="button" value="4" class="btn" onclick="inval(this.value)">4</button>
        <button type="button" value="5" class="btn" onclick="inval(this.value)">5</button>
        <button type="button" value="6" class="btn" onclick="inval(this.value)">6</button>
        <button type="button" value="+" class="btn" onclick="inop(this.value)">+</button>
        <button type="button" value="7" class="btn" onclick="inval(this.value)">7</button>
        <button type="button" value="8" class="btn" onclick="inval(this.value)">8</button>
        <button type="button" value="9" class="btn" onclick="inval(this.value)">9</button>
        <button type="button" value="-" class="btn" onclick="inop(this.value)">-</button>
        <button type="button" value="^" class="btn" onclick="inop(this.value)">^</button>
        <button type="button" value="0" class="btn" onclick="inval(this.value)">0</button>
        <button  type="button" value="=" class="btn span-two" onclick="calculate()">=</button>
    </div>
</div>    
@endsection

