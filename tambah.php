<!DOCTYPE html>
<html>
<style>
input[type=text],input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Using CSS to style an HTML Form</h3>

<div>
  <form action="tambahaksi.php" method="post">

    <label for="fnik">nik</label>
    <input type="input" id="fnik" name="fnik" placeholder="Isikan nama barang..">

    <label for="fberat">berat</label>
    <input type="number" id="fberat" name="fberat" placeholder="isikan berat barang..">

     <label for="fharga">harga</label>
    <input type="number" id="fharga" name="fharga" placeholder="isikan harga barang..">

    
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>





    
  
    