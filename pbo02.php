<?php
/*
Nama Class : Form
Deskripsi : Class untuk membuat form inputan text sederhana
*/
class Form
{
	var $fields = array();
	var $action;
	var $submit = "Submit Form";
	var $jumfield = 0;
	function __construct($action, $submit)
	{
$this->action = $action;
$this->submit = $submit;
	}
function displayForm()
{
echo "<form action='".$this->action."' method='POST'>";
echo "<table width='100%'>";
for ($j=0; $j<count($this->fields); $j++) {
echo "<tr><td align='right'>".$this->
fields[$j]['label']."</td>";
}
echo "<tr><td colspan='2'>";
echo "</table>";
}
$this->fields [$this->jumField]['name'] = $name;
$this->fields [$this->jumField]['label'] = $label;
$this->jumField ++;
}
}
?>
	
	

