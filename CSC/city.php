<option>select city
<?php 
include 'conn.php';

$sid = $_POST['sid'];

$state = "select * from cities where state_id = $sid";
$run = mysqli_query($conn, $state);

while ($sdata = mysqli_fetch_assoc($run)){
    ?>
    <option value="<?php echo $sdata['id']?>"><?php echo $sdata['name'] ?> </option>
    <?php
}
?>
</select>