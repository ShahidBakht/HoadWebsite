
 <?php 
// PHP program to convert timestamp 
// to time ago 

function time_Ago($time, $curr_time) { 

	// Calculate difference between current 
	// time and given timestamp in seconds 
	$diff	 = time() - $time; 
	
	// Time difference in seconds 
	$sec	 = $diff; 
	
	// Convert time difference in minutes 
	$min	 = round($diff / 60 ); 
	
	// Convert time difference in hours 
	$hrs	 = round($diff / 3600); 
	
	// Check for seconds 
	if($sec <= 60) { 
		echo "$sec ثانیې وړاندې"; 
	} 
	
	// Check for minutes 
	else if($min <= 60) { 
		if($min==1) { 
			echo "یوه دقیقه وړاندې"; 
		} 
		else { 
			echo "$min دقیقې وړاندې"; 
		} 
	} 
	
	// Check for hours 
	else if($hrs <= 24) { 
		if($hrs == 1) { 
			echo "یو ساعت وړاندې"; 
		} 
		else { 
			echo "$hrs ساعتونه مخکې"; 
		} 
	}
	
	else if($hrs >24) {
		echo date("d-m-Y", strtotime($curr_time));  
	}
} 

class DB{
	public $con;  
    public $error; 
    public function __construct()  
    {  
        $this->con = mysqli_connect("localhost", "root", "", "u766424369_loyafghanistan");  
        if(!$this->con)  
        {  
            echo 'Database Connection Error ' . mysqli_connect_error($this->con);  
        }  
    }
	function fetchCategoryName($id){
		$categoryName=mysqli_query($this->con,"select CategoryName from tblcategory WHERE id='$id' LIMIT 1");
		$row=mysqli_fetch_array($categoryName);
		return $row['CategoryName'];
	}
}
?> 
