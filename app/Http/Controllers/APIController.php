<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\ActivityPhotos;
use App\Models\Career;
use App\Models\CareerStaff;
use App\Models\Staff;
use Response;
use Carbon\Carbon;

class APIController extends Controller {

	protected $career;
	protected $staff;
	protected $activity;
	protected $photo;
	protected $careerStaff;

	public function __construct(Career $career, Staff $staff, Activity $activity, ActivityPhotos $photo, CareerStaff $careerStaff)
	{
		$this->career      = $career;
		$this->staff       = $staff;
		$this->activity    = $activity;
		$this->photo       = $photo;
		$this->careerStaff = $careerStaff;
	}

	public function getStaff()
	{
		$staff = $this->staff->get();
		return Response::json($staff, 200);
	}

	// Update new API version
	// Career
	public function getAllCareer()
	{
		try {
			$statusCode = 200;
			$response   = [];
			$careers    = $this->career->latest()->published()->get();

			foreach ($careers as $career) {
				$thumbnail = asset( config('imagecache.route').'/'.'backend'.'/'.$career->banner );
				$response[] = [
				'id'     => $career->id,
				'title'  => $career->title,
				'banner' => $thumbnail,
				];
			}
		} 
		catch (Exception $e) 
		{
			// do stuff
		} 
		finally 
		{
			return Response::json($response, $statusCode);
		}
	}

	public function getSingleCareer($id)
	{
		try {
			$statusCode = 200;
			$response   = null;
			if (is_null($career = $this->career->where('id', $id)->first()))
			{
				return null;
			}

			$response = [
			'id'             => $career->id,
			'title'          => $career->title,
			'author'         => $career->author,
			'banner'         => asset( config('imagecache.route').'/'.'backend'.'/'.$career->banner ),
			'attribute'      => $career->attribute,
			'gender'         => $career->gender,
			'age'            => $career->age,
			'qualifications' => $career->qualifications,
			'published_date' => Carbon::createFromFormat('Y-m-d H:i:s', $career->published_date)->format('d M Y'),
			'created_at'     => Carbon::createFromFormat('Y-m-d H:i:s', $career->created_at)->format('d M Y'),
			'updated_at'     => Carbon::createFromFormat('Y-m-d H:i:s', $career->updated_at)->format('d M Y')
			];
		} 
		catch (Exception $e) 
		{
			// do stuff
		} 
		finally 
		{
			return Response::json($response, $statusCode);
		}
	}

	public function getSingleCareerStaff($id)
	{
		try {
			$statusCode  = 200;
			$response    = []; 
			$careerStaff = $this->careerStaff->where('career_id', $id)->get();

			foreach ($careerStaff as $key) {
				$response[] = [
				'id'          => $key->id,
				'name'        => $key->staff->name,
				'nickname'    => $key->staff->nickname,
				'position'    => $key->staff->position,
				'phone'       => $key->staff->phone,
				'photo'       => asset( config('imagecache.route').'/'.'backend'.'/'.$key->staff->image ),
				'created_at'  => Carbon::createFromFormat('Y-m-d H:i:s', $key->created_at)->format('d M Y'),
				'updated_at'  => Carbon::createFromFormat('Y-m-d H:i:s', $key->updated_at)->format('d M Y')
				];
			}
		} 
		catch (Exception $e) 
		{
			// do stuff
		} 
		finally 
		{
			return Response::json($response, $statusCode);
		}
	}

	// Activity
	public function getAllActivity()
	{
		try {
			$statusCode = 200;
			$response   = [];
			$activities = $this->activity->latest()->published()->get();

			foreach ($activities as $activity) {
				$thumbnail = asset( config('imagecache.route').'/'.'backend'.'/'.$activity->banner );
				$response[] = [
				'id'     => $activity->id,
				'title'  => $activity->title,
				'banner' => $thumbnail,
				];
			}
		} 
		catch (Exception $e) 
		{
			// do stuff
		} 
		finally 
		{
			return Response::json($response, $statusCode);
		}
	}

	public function getSingleActivity($id)
	{
		try {
			$statusCode = 200;
			$response   = null;
			$activity = $this->activity->where('id', $id)->first();

			$response = [
			'id'             => $activity->id,
			'title'          => $activity->title,
			'banner'         => asset( config('imagecache.route').'/'.'backend'.'/'.$activity->banner ),
			'body'           => $activity->body,
			'author'         => $activity->author,
			'published_date' => Carbon::createFromFormat('Y-m-d H:i:s', $activity->published_date)->format('d M Y'),
			'created_at'     => Carbon::createFromFormat('Y-m-d H:i:s', $activity->created_at)->format('d M Y'),
			'updated_at'     => Carbon::createFromFormat('Y-m-d H:i:s', $activity->updated_at)->format('d M Y')
			];
		} 
		catch (Exception $e) 
		{
			// do stuff
		} 
		finally 
		{
			return Response::json($response, $statusCode);
		}
	}

	public function getSingleActivityPhotos($id)
	{
		try {
			$statusCode = 200;
			$response   = []; 
			$photos     = $this->photo->where('activity_id', $id)->get();

			foreach ($photos as $key) {
				$response[] = [
				'id'          => $key->id,
				'description' => $key->description,
				'photo'       => asset( config('imagecache.route').'/'.'backend'.'/'.$key->photo ),
				'created_at'  => Carbon::createFromFormat('Y-m-d H:i:s', $key->created_at)->format('d M Y'),
				'updated_at'  => Carbon::createFromFormat('Y-m-d H:i:s', $key->updated_at)->format('d M Y')
				];
			}
		} 
		catch (Exception $e) 
		{
			// do stuff
		} 
		finally 
		{
			return Response::json($response, $statusCode);
		}
	}

}

