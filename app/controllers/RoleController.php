<?php

class RoleController extends BaseController {

	protected $roles;

	public function __construct(Repository\RoleRepositoryInterface $roles) {
		$this->roles = $roles;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->jsonResult($this->roles->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return $this->jsonResult($this->roles->show($id));
	}

	/**
	 * Delete the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        return $this->jsonResult($this->roles->delete($id));
	}

	/**
	 * Update the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        return $this->jsonResult($this->roles->edit($id, Input::all()));
	}

	/**
	 * Store the specified resource.
	 *
	 * @return Response
	 */
	public function store()
	{
        return $this->jsonResult($this->roles->create(Input::all()));
	}

}