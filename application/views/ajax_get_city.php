<select name="select" onChange="getcitydetails(this.value)">
<option value="" selected="selected" >Select City</option>

<?php foreach($city as $ct): ?>
<option value="<?php echo $ct->id; ?>"><?php echo $ct->name; ?></option>
<?php endforeach; ?> 
</select>