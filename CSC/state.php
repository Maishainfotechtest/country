<option>select state
<?php 
include 'conn.php';

$id = $_POST['cid'];

$state = "select * from states where country_id = $id";
$run = mysqli_query($conn, $state);

while ($sdata = mysqli_fetch_assoc($run)){
    ?>
    <option value="<?php echo $sdata['id']?>"><?php echo $sdata['name'] ?> </option>
    <?php
}
?>
</select>