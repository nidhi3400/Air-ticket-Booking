<!DOCTYPE html>
<html>
    <head>
        <title>
            Check flights here.
        </title>
        <style>
        .outer
        {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 20px;
        }
        .widget 
        {
            margin-bottom:20px;
        }
        .widget h2 
        {
            text-align: center;
        }
        .widget .inner
        {
            margin-top: 50px;
            font-size: 30px;
        }
        .widget #datapicker
        {
            text-align: center;
        }
        </style>
    </head>
    
<body>
<script type="text/javascript">
function display()
{
    document.getElementById("datepicker1").style.display='block';
    document.getElementById("label1").style.display='block';
}
function hide()
{
    document.getElementById("datepicker1").style.display='none';
    document.getElementById("label1").style.display='none';
}
</script>
<div class="widget">	
    <div class="outer"><h2><strong>Check your flights here !!</strong></h2></div>
    <div class="inner">
	<form method="post" action="searched.php">
            <input type="radio" value="1" name="radio" checked="checked" id="radio1" onclick="display()">
            <label for="radio1">round trip</label>
            <input type="radio" value="2" name="radio" id="radio2" onclick="hide()" >
            <label for="radio2">one way</label>
            <div>
            <select id="cmbMake" name="Make" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
		<option value="0" disabled="disabled" selected="selected" id="place">Leaving from...</option>
                <option value="1">Delhi</option>
		<option value="2">Bangalore</option>
                <option value="3">Kabul</option>
		<option value="4">Kathmandu</option>
		<option value="5">Agra</option>
		<option value="6">Mumbai</option>
		<option value="7">New York</option>
		<option value="8">Paris</option>
            </select>
            <select id="cmbMake" name="Make1" onchange="document.getElementById('selected_text1').value=this.options[this.selectedIndex].text">
		<option value="0" disabled="disabled" selected="selected" id="place">Going to...</option>
                <option value="1">Delhi</option>
		<option value="2">Bangalore</option>
		<option value="3">Kabul</option>
		<option value="4">Kathmandu</option>
		<option value="5">Agra</option>
		<option value="6">Mumbai</option>
		<option value="7">New York</option>
		<option value="8">Paris</option>
            </select>
            </div>
            <p>
                <label style="display:block" id="label0">Depart date:</label>
                <input type="date" name="depart_date"  id="datepicker" placeholder="Pick a date"/>
            </p>
            <p>
                <label style="display:block" id="label1">Return date:</label>
		<input type="date" name="return_date"  id="datepicker1" placeholder="Pick a date"/>
            </p>
            <input type="hidden" name="selected_text" id="selected_text" value="" />
            <input type="hidden" name="selected_text1" id="selected_text1" value="" />
            </br><input type="submit" name="search" value="Search Flights" formaction="searched.php"/>
	</form>
    </div>
</div>
</body>
</html>