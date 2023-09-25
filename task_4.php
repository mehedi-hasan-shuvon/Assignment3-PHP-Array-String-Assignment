<?php

	$studentGrades = [
			[
				'name'=>'student1',
				'math'=>85,
				'english'=>92,
				'science'=>78
			],
			[
				'name'=>'student2',
				'math'=>55,
				'english'=>66,
				'science'=>77
			],
			[
				'name'=>'student3',
				'math'=>100,
				'english'=>80,
				'science'=>95
			]
		];

	function averageGrades($studentGrades){

		foreach ($studentGrades as $student) {
			$name = $student['name'];
			$gradesArray = array_slice($student, 1);
			$average = array_sum($gradesArray) / count($gradesArray);
	
			echo "Student: $name\n";
			echo "Average Grade: ".number_format($average,2)."\n";
			echo "\n";
		}
	
	}

	averageGrades($studentGrades);



?>