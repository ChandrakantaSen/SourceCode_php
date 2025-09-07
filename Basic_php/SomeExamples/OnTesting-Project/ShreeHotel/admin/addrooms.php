


<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>

<form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
 RoomType<br />
  <input name="type" type="text" class="ed" required /><br />
 Rate<br />
    <input name="rate" type="text" id="rate" class="ed" onkeypress="return isNumberKey(event)" required /><br />
 Room Number<br />
    <input name="rnum" type="text" id="qty" class="ed" onkeypress="return isNumberKey(event)" required /><br />
 
 Description<br />
    <input name="desc" type="text" class="ed" /><br />
    
<!-- Room Image: <br /><input type="file" name="image" class="ed"><br />-->
 
    <input type="submit" name="Submit" value="save" id="button1" />
 
</form>
