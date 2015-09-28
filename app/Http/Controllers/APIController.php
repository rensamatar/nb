<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Career;
use App\Models\Staff;
use Response;

class APIController extends Controller {

	protected $career;
	protected $staff;

	public function __construct(Career $career, Staff $staff)
	{
		$this->career = $career;
		$this->staff  = $staff;
	}

	public function getCareer()
	{
		try 
		{
			$statusCode = 200;
			$response = [
			'data' => []
			];

			$careers = $this->career->latest()->published()->get();

			foreach ($careers as $career) {
				$person_one   = $this->staff->find($career->staff_1);
				$person_two   = $this->staff->find($career->staff_2);
				$person_three = $this->staff->find($career->staff_3);
				$person_four  = $this->staff->find($career->staff_4);

				//dd($person_one);

				$response['data'][] = [
				'id'             => $career->id,
				'title'          => $career->title,
				'banner'         => $career->banner,
				'author'         => $career->author,
				'attribute'      => $career->attribute,
				'gender'         => $career->gender,
				'age'            => $career->age,
				'qualifications' => $career->qualifications,
				'wage_1'         => $career->wage_1,
				'wage_2'         => $career->wage_2,
				'wage_3'         => $career->wage_3,
				'wage_4'         => $career->wage_4,
				'wage_5'         => $career->wage_5,
				'wage_6'         => $career->wage_6,
				'wage_7'         => $career->wage_7,
				'wage_8'         => $career->wage_8,
				'wage_9'         => $career->wage_9,
				'wage_10'        => $career->wage_10,
				'wage_11'        => $career->wage_11,
				'wage_12'        => $career->wage_12,
				'wage_13'        => $career->wage_13,
				'wage_14'        => $career->wage_14,
				'wage_15'        => $career->wage_15,
				'wage_16'        => $career->wage_16,
				'staff_1' 		 => $person_one,
				'staff_2' 		 => $person_two,
				'staff_3' 		 => $person_three,
				'staff_4' 		 => $person_four,
				'published_date' => $career->published_date,
				'created_at'     => $career->created_at,
				'updated_at'     => $career->updated_at
				];
			}
		} 
		catch(Exception $e) 
		{

		}
		finally
		{
			return Response::json($response, $statusCode);
		}
	}

	public function getActivity()
	{
		// Todo
	}

	public function getStaff()
	{
		// Todo
	}

}