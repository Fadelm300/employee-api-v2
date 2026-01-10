<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Employee;

class EmployeeController extends ResourceController
{
    protected $modelName = Employee::class;
    protected $format    = 'json';

    /**
     * GET /api/employees
     */
    public function index()
    {
        $employees = $this->model->findAll();

        return $this->respond([
            'status' => 'success',
            'data'   => $employees
        ], 200);
    }

    /**
     * GET /api/employees/{id}
     */
    public function show($id = null)
    {
        $employee = $this->model->find($id);

        if (!$employee) {
            return $this->failNotFound('Employee not found');
        }

        return $this->respond([
            'status' => 'success',
            'data'   => $employee
        ], 200);
    }

    /**
     * POST /api/employees
     */
    public function create()
    {
        $data = $this->request->getJSON(true);

        if (!$data) {
            return $this->fail('Invalid input', 422);
        }

        $rules = [
            'name'     => 'required|max_length[100]',
            'email'    => 'required|valid_email|is_unique[employees.email]',
            'position' => 'required|max_length[100]',
            'salary'   => 'required|numeric',
            'status'   => 'required|in_list[active,inactive]',
        ];

        if (!$this->validate($rules)) {
            return $this->failValidationErrors(
                $this->validator->getErrors()
            );
        }

        $this->model->insert([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'position' => $data['position'],
            'salary'   => $data['salary'],
            'status'   => $data['status'],
        ]);

        return $this->respondCreated([
            'status'  => 'success',
            'message' => 'Employee created successfully'
        ]);
    }

    /**
     * PUT /api/employees/{id}
     */
    public function update($id = null)
    {
        $employee = $this->model->find($id);

        if (!$employee) {
            return $this->failNotFound('Employee not found');
        }

        $data = $this->request->getJSON(true);

        if (!$data) {
            return $this->fail('Invalid input', 422);
        }

        $rules = [
            'name'     => 'permit_empty|max_length[100]',
            'email'    => "permit_empty|valid_email|is_unique[employees.email,id,{$id}]",
            'position' => 'permit_empty|max_length[100]',
            'salary'   => 'permit_empty|numeric',
            'status'   => 'permit_empty|in_list[active,inactive]',
        ];

        if (!$this->validate($rules)) {
            return $this->failValidationErrors(
                $this->validator->getErrors()
            );
        }

        if (empty($data)) {
            return $this->fail('No data to update', 422);
        }

        $this->model->update($id, $data);

        return $this->respond([
            'status'  => 'success',
            'message' => 'Employee updated successfully'
        ], 200);
    }

    /**
     * DELETE /api/employees/{id}
     */
    public function delete($id = null)
    {
        $employee = $this->model->find($id);

        if (!$employee) {
            return $this->failNotFound('Employee not found');
        }

        $this->model->delete($id);

        return $this->respondDeleted([
            'status'  => 'success',
            'message' => 'Employee deleted successfully'
        ]);
    }
}
