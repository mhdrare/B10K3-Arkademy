<?php 
error_reporting(E_ERROR | E_PARSE);

Class School {

	function setHighschool($highSchool)
	{
		$this->highSchool = $highSchool;
	}

	function setUniversity($university)
	{
		$this->university = $university;
	}
}

Class Skills {
	function skill($name, $score)
	{
		$this->skill = ['name'=>$name, 'score'=>$score];
	}
}

function biodata()
{
	$school = new School;
	$school->setHighschool("SMKN 1 Katapang");
	$school->setUniversity(null);

	$skills = new Skills();
	$skills->skill("Laravel", "40");

	$data->name = 'Muhamad Faisal Akbar';
	$data->address = 'Banjaran';
	$data->hobbies = ['Membaca', 'Futsal'];
	$data->is_married = false;
	$data->school = $school;
	$data->skills = $skills;

	return $data;
}

echo json_encode(biodata());

 ?>