<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Career;
use App\Models\Staff;
use Response;

class APIController extends Controller {

	protected $career;
	protected $staff;
	protected $activity;

	public function __construct(Career $career, Staff $staff, Activity $activity)
	{
		$this->career = $career;
		$this->staff  = $staff;
		$this->activity = $activity;
	}

	public function getCareer()
	{
		try 
		{
			$statusCode = 200;
			$response = [];

			$careers = $this->career->latest()->published()->get();

			foreach ($careers as $career) {
				$person_one   = $this->staff->find($career->staff_1);
				$person_two   = $this->staff->find($career->staff_2);
				$person_three = $this->staff->find($career->staff_3);
				$person_four  = $this->staff->find($career->staff_4);

				$one = null;
				if (!is_null($person_one) || !empty($person_one)) {
					$one = [
					'id'       => $person_one->id,
					'nickname' => $person_one->nickname,
					'phone'    => $person_one->phone,
					];
				}
				$two = null;
				if (!is_null($person_two) || !empty($person_two)) {
					$two = [
					'id'       => $person_two->id,
					'nickname' => $person_two->nickname,
					'phone'    => $person_two->phone,
					];
				}
				$three = null;
				if (!is_null($person_three) || !empty($person_three)) {
					$three = [
					'id'       => $person_three->id,
					'nickname' => $person_three->nickname,
					'phone'    => $person_three->phone,
					];
				}
				$four = null;
				if (!is_null($person_four) || !empty($person_four)) {
					$four = [
					'id'       => $person_four->id,
					'nickname' => $person_four->nickname,
					'phone'    => $person_four->phone,
					];
				}
				// return staff
				$staff = [$one, $two, $three, $four];

				// Filter wage
				if (!is_null($career->wage_1) || !empty($career->wage_1) ? $w1 = $career->wage_1 : $w1 = null);
				if (!is_null($career->wage_2) || !empty($career->wage_2) ? $w2 = $career->wage_2 : $w2 = null);
				if (!is_null($career->wage_3) || !empty($career->wage_3) ? $w3 = $career->wage_3 : $w3 = null);
				if (!is_null($career->wage_4) || !empty($career->wage_4) ? $w4 = $career->wage_4 : $w4 = null);
				if (!is_null($career->wage_5) || !empty($career->wage_5) ? $w5 = $career->wage_5 : $w5 = null);
				if (!is_null($career->wage_6) || !empty($career->wage_6) ? $w6 = $career->wage_6 : $w6 = null);
				if (!is_null($career->wage_7) || !empty($career->wage_7) ? $w7 = $career->wage_7 : $w7 = null);
				if (!is_null($career->wage_8) || !empty($career->wage_8) ? $w8 = $career->wage_8 : $w8 = null);
				if (!is_null($career->wage_9) || !empty($career->wage_9) ? $w9 = $career->wage_9 : $w9 = null);
				if (!is_null($career->wage_10) || !empty($career->wage_10) ? $w10 = $career->wage_10 : $w10 = null);
				if (!is_null($career->wage_11) || !empty($career->wage_11) ? $w11 = $career->wage_11 : $w11 = null);
				if (!is_null($career->wage_12) || !empty($career->wage_12) ? $w12 = $career->wage_12 : $w12 = null);
				if (!is_null($career->wage_13) || !empty($career->wage_13) ? $w13 = $career->wage_13 : $w13 = null);
				if (!is_null($career->wage_14) || !empty($career->wage_14) ? $w14 = $career->wage_14 : $w14 = null);
				if (!is_null($career->wage_15) || !empty($career->wage_15) ? $w15 = $career->wage_15 : $w15 = null);
				if (!is_null($career->wage_16) || !empty($career->wage_16) ? $w16 = $career->wage_16 : $w16 = null);

				// return all wage
				$all_wage = [
				'w1'  => $w1,
				'w2'  => $w2,
				'w3'  => $w3,
				'w4'  => $w4,
				'w5'  => $w5,
				'w6'  => $w6,
				'w7'  => $w7,
				'w8'  => $w8,
				'w9'  => $w9,
				'w10' => $w10,
				'w11' => $w11,
				'w12' => $w12,
				'w13' => $w13,
				'w14' => $w14,
				'w15' => $w15,
				'w16' => $w16
				];

				$thumbnail = '';	
				if($career->banner == '')
				{
					$thumbnail = asset( config('imagecache.route').'/'.'backend'.'/'.'no-image.png' );
				}
				else
				{
					$thumbnail = asset( config('imagecache.route').'/'.'backend'.'/'.$career->banner );
				}

				$response[] = [
				'id'             => $career->id,
				'title'          => $career->title,
				'banner'         => $thumbnail,
				'author'         => $career->author,
				'attribute'      => $career->attribute,
				'gender'         => $career->gender,
				'age'            => $career->age,
				'qualifications' => $career->qualifications,
				'wage'           => $all_wage,
				'staff'   	 	 => $staff,
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
		try {

			$statusCode = 200;
			$response = [];

			$activities = $this->activity->latest()->published()->get();

			foreach ($activities as $key) {

				// Images
				if (!is_null($key->img_file_01) || !empty($key->img_file_01) ? $img_01 = $key->img_file_01 : $img_01 = null);
				if (!is_null($key->img_file_02) || !empty($key->img_file_02) ? $img_02 = $key->img_file_02 : $img_02 = null);
				if (!is_null($key->img_file_03) || !empty($key->img_file_03) ? $img_03 = $key->img_file_03 : $img_03 = null);
				if (!is_null($key->img_file_04) || !empty($key->img_file_04) ? $img_04 = $key->img_file_04 : $img_04 = null);
				if (!is_null($key->img_file_05) || !empty($key->img_file_05) ? $img_05 = $key->img_file_05 : $img_05 = null);
				if (!is_null($key->img_file_06) || !empty($key->img_file_06) ? $img_06 = $key->img_file_06 : $img_06 = null);
				if (!is_null($key->img_file_07) || !empty($key->img_file_07) ? $img_07 = $key->img_file_07 : $img_07 = null);
				if (!is_null($key->img_file_08) || !empty($key->img_file_08) ? $img_08 = $key->img_file_08 : $img_08 = null);

				$all_images = [
				'img_01' => $img_01,
				'img_02' => $img_02,
				'img_03' => $img_03,
				'img_04' => $img_04,
				'img_05' => $img_05,
				'img_06' => $img_06,
				'img_07' => $img_07,
				'img_08' => $img_08
				];

				$thumbnail = '';	
				if($key->banner == '')
				{
					$thumbnail = asset( config('imagecache.route').'/'.'large'.'/'.'no-image.png' );
				}
				else
				{
					$thumbnail = asset( config('imagecache.route').'/'.'large'.'/'.$key->banner );
				}

				$response[] = [
				'id'             => $key->id,
				'title'          => $key->title,
				'banner'         => $thumbnail,
				'body'           => $key->body,
				'author'         => $key->author,
				'photos'         => $all_images,
				'published_date' => $key->published_date,
				'created_at'     => $key->created_at,
				'updated_at'     => $key->updated_at
				];
			}
		} 
		catch (Exception $e) 
		{

		}
		finally
		{
			return Response::json($response, $statusCode);
		}
	}

	public function getStaff()
	{
		$staff = $this->staff->get();
		return Response::json($staff, 200);
	}

}