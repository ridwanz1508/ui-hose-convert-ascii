 <div class="dot-matrix-atas">

    <div class="row with-border-atas">
      
      <div class="dot" style="background-color: lime;" id="D1"></div>
      <div class="dot" style="background-color: lime;" id="D"></div>
      <div class="dot" style="background-color: lime;" id="B"></div>
      <div class="dot" style="background-color: lime;" id="C"></div>
      <div class="dot" style="background-color: lime;" id="A"></div>
    </div>
  
  </div>
<hr>
  <div class="dot-matrix">
    
    <div class="row with-border">
      <div class="dot" style="background-color: yellow;" id="C1"></div>
      <div class="dot" style="background-color: yellow;" id="E1"></div>
      <div class="dot" style="background-color: yellow;" id="B1"></div>
      <div class="dot" style="background-color: yellow;" id="E"></div>
      <div class="dot" style="background-color: yellow;" id="A1"></div>
    </div>
  
  </div>


<script>
  setInterval(function () {
      var dataSearch = 'parameter=tes';
      $.ajax({
          type: "POST",
          url: "<?= base_url('main/get_data') ?>",
          data: dataSearch,
          cache: false,
          success: function (html) {
              var myStr = html;
              var strArray = myStr.split(";");

              document.getElementById("A").innerHTML= strArray[1];
              document.getElementById("B").innerHTML= strArray[2];
              document.getElementById("C").innerHTML= strArray[3];
              document.getElementById("D").innerHTML= strArray[4];
              document.getElementById("E").innerHTML= strArray[5];

              document.getElementById("A1").innerHTML= strArray[6];
              document.getElementById("B1").innerHTML= strArray[7];
              document.getElementById("C1").innerHTML= strArray[8];
              document.getElementById("D1").innerHTML= strArray[9];
              document.getElementById("E1").innerHTML= strArray[10];
                    
      return false;
      }
  });
}, 1000);
</script>