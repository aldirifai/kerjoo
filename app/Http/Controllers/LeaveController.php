<?php

namespace App\Http\Controllers;

use App\Leave;
use Illuminate\Http\Request;
use App\Http\Requests\LeaveRequest;
use App\Http\Resources\LeaveResource;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leave = Leave::all();

        return LeaveResource::collection($leave)->additional([
            'code' => 200,
            'status' => 'OK',
            'message' => 'Successfully retrieved all leaves',
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LeaveRequest $request)
    {
        $leave = Leave::create($request->all());

        return response()->json([
            'code' => 201,
            'status' => 'Created',
            'message' => 'Successfully created a new leave',
            'data' => new LeaveResource($leave),
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $leave = Leave::find($id);

        if (!$leave) {
            return response()->json([
                'code' => 404,
                'status' => 'Not Found',
                'message' => 'Leave not found',
            ], 404);
        }

        return response()->json([
            'code' => 200,
            'status' => 'OK',
            'message' => 'Successfully retrieved a leave',
            'data' => new LeaveResource($leave),
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LeaveRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
