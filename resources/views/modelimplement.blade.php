<html>
<body>
<?php


chdir('D:\Xampp\htdocs\Python');
//putenv('PYTHONPATH=C:/xampp/htdocs/Python/Lib/site-packages/');
$output = system("python D:/Xampp/htdocs/Python/model/lassoregressionu.py $location $area $unit $bedroom $bathroom $kitchen $Parking_spot $No_of_garden $quarter $swiming_pool $powder_room $home_power $gated_society $Security_society $Lane_society $year_of_construction $No_of_stories $furnished");



     $result=$output;

	



if($output!=Null)
{

?>
<div style="    background-color: black;
    width: 100%;
    height: 4%;
    margin-top: -19px;">
ja
</div>
<p style="margin-left:50%; font-size:20px; margin-left:35%; margin-top:20%; color:#2F4F4F;">
	<?php echo "Current Price of Your House is ", $output; ?></p>

<?php 

}
else
{

	?>

<p style="margin-left:50%; font-size:20px; margin-left:35%; margin-top:20%; color:#2F4F4F;">
<?php echo "No prediction is available for such data";?>
</p>
	
<?php	
}

#return Redirect::to('/modelv')->with('message', $output);
#use App\Http\Controllers\ModelImplementController;
#echo ModelImplementController::try(); 
#return back();
#header("modelv");
#return redirect()->route('/modelv')->with('message',$output);
#Redirect::route('myRoute')->with('message','TEST');

?>
</body>
</html>





