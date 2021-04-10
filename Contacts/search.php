<head>
<style>
h3,.description{
	background:#dce6f5;
	padding:1rem;
}
</style>
</head>
<?php
include("includes/header.php");

?>

<form id="myform" name="myform" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<div class="form-group" >
			<label for="searchItem">Search Tearm:</label>
			<input type="text" name="searchterm" class="form-control">
		</div>
		<div class="form-group">
			<label for="submit">&nbsp;</label>
			<input type="submit" name="submit" class="btn btn-info" value="Submit">
		</div>

</form>
<?php
if(isset($_POST['submit']))
{
	$searchterm = trim($_POST['searchterm']);
	if(($searchterm !=""))
	{
		//full text search
		if(strlen($searchterm) == 3)
		{
			$stopwords = array($stopwords = array("a", "about", "above", "above", "across", "after", "afterwards", "again", "against", "all", "almost", "alone", "along", "already", "also","although","always","am","among", "amongst", "amoungst", "amount",  "an", "and", "another", "any","anyhow","anyone","anything","anyway", "anywhere", "are", "around", "as",  "at", "back","be","became", "because","become","becomes", "becoming", "been", "before", "beforehand", "behind", "being", "below", "beside", "besides", "between", "beyond", "bill", "both", "bottom","but", "by", "call", "can", "cannot", "cant", "co", "con", "could", "couldnt", "cry", "de", "describe", "detail", "do", "done", "down", "due", "during", "each", "eg", "eight", "either", "eleven","else", "elsewhere", "empty", "enough", "etc", "even", "ever", "every", "everyone", "everything", "everywhere", "except", "few", "fifteen", "fify", "fill", "find", "fire", "first", "five", "for", "former", "formerly", "forty", "found", "four", "from", "front", "full", "further", "get", "give", "go", "had", "has", "hasnt", "have", "he", "hence", "her", "here", "hereafter", "hereby", "herein", "hereupon", "hers", "herself", "him", "himself", "his", "how", "however", "hundred", "ie", "if", "in", "inc", "indeed", "interest", "into", "is", "it", "its", "itself", "keep", "last", "latter", "latterly", "least", "less", "ltd", "made", "many", "may", "me", "meanwhile", "might", "mill", "mine", "more", "moreover", "most", "mostly", "move", "much", "must", "my", "myself", "name", "namely", "neither", "never", "nevertheless", "next", "nine", "no", "nobody", "none", "noone", "nor", "not", "nothing", "now", "nowhere", "of", "off", "often", "on", "once", "one", "only", "onto", "or", "other", "others", "otherwise", "our", "ours", "ourselves", "out", "over", "own","part", "per", "perhaps", "please", "put", "rather", "re", "same", "see", "seem", "seemed", "seeming", "seems", "serious", "several", "she", "should", "show", "side", "since", "sincere", "six", "sixty", "so", "some", "somehow", "someone", "something", "sometime", "sometimes", "somewhere", "still", "such", "system", "take", "ten", "than", "that", "the", "their", "them", "themselves", "then", "thence", "there", "thereafter", "thereby", "therefore", "therein", "thereupon", "these", "they", "thick", "thin", "third", "this", "those", "though", "three", "through", "throughout", "thru", "thus", "to", "together", "too", "top", "toward", "towards", "twelve", "twenty", "two", "un", "under", "until", "up", "upon", "us", "very", "via", "was", "we", "well", "were", "what", "whatever", "when", "whence", "whenever", "where", "whereafter", "whereas", "whereby", "wherein", "whereupon", "wherever", "whether", "which", "while", "whither", "who", "whoever", "whole", "whom", "whose", "why", "will", "with", "within", "without", "would", "yet", "you", "your", "yours", "yourself", "yourselves", "the"));
            $searchWords_arr = explode(" ",$searchterm);
			foreach($searchWords_arr as $value)
			{
			if(in_array($value,$stopwords))
			    {
				      $searchterm = str_replace($value, "" , $searchterm);
	            }
            }
				$sql = "SELECT * FROM ayu_contacts_prep WHERE ayu_description LIKE 
				'%$searchterm%'  OR ayu_CompanyName LIKE '%$searchterm%' 
				OR ayu_city LIKE '%$searchterm%' "; 
	}
	else
	{
		$sql = "SELECT * FROM ayu_contacts_prep WHERE ayu_description LIKE 
				'%$searchterm%'  OR ayu_CompanyName LIKE '%$searchterm%' 
				OR ayu_city LIKE '%$searchterm%' "; 
	}
	echo "search results for <b>$searchterm</b>";
	$result =mysqli_query($con,$sql) or die (mysqli_error($con));
	while($row = mysqli_fetch_array($result))
{
	$cid = $row['cid'];
	$company =$row['ayu_CompanyName'];
	
	$companyLink = "<a href=\"companyprofile.php?cid=$cid\">View Profile </a><br />";
	echo "\n <div class=\"listing\">".$company . " " .$companyLink ."</div>\n";
}
}	
}	
include("includes/footer.php");


?>