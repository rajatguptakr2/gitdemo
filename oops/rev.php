<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<?php

class TV
{

    public $count = '0';
    public $loading = '.';
    public $i;

    public function modelType()
    {
    }

    public function ModelYear()
    {
    }

    public function ModelName()
    {
    }

    public function ManufacArea($Name)
    {
        
        echo "Manufacturing Area Name is".' '.$Name;
    }

    public function __sleep()
    {
        return "Working...";
    }

    public function __construct()
    {
    }
}

$TV = new TV();



?>
<div id="work">Working</div>
<div id="load">Loading<span id="dots"></sapn></div>
<div id="done"><?php echo $TV->ManufacArea('New Delhi'); ?></div>
<script>
var i = 0;
        $('#load').hide();
        $('#done').hide();

        function makeid() {
  var text = "";
  var possible = "bcdef";

  for (var i = 0; i < 1; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}

$(function(){
    // $('#work').show();

    var i = 1;
    var j = setInterval(function(a){
var a = makeid(2);
    var b = 'https://pngimg.com/uploads/smiley/smiley_PNG36233.png';
    var c = 'https://cdn.shopify.com/s/files/1/0185/5092/products/persons-0019_large.png?v=1369544043';
    var d = 'https://cdn.shopify.com/s/files/1/0185/5092/products/persons-0019_large.png?v=1369544043';
    var e = 'https://cdn.shopify.com/s/files/1/0185/5092/products/persons-0030_medium.png?v=1369544073';
    var f = 'https://cdn.shopify.com/s/files/1/0185/5092/products/persons-0004_large.png?v=1369543931';
   

        $('#load').show(function(){
            $('#work').hide();
            $('#dots').append("<img src='"+a+"' width='7px'>");
        });
            ++i;
    if(i == '25'){
        clearInterval(j);
            $('#done').show();
            $('#dots').hide();
            $('#load').hide();
            console.log(i)
    }
    },300)

});
</script>
