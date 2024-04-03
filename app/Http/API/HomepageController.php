<?php

namespace App\Http\API;

use Exception;
use Illuminate\Http\Request;
use App\Http\View\Controller;
use App\Repository\PersonsRepository;
use App\Http\Requests\PersonsRequestForm;

class HomepageController extends Controller
{

    private PersonsRepository $personsRepository;

    public function __construct(PersonsRepository $personsRepository) {
        $this->personsRepository = $personsRepository;
    }

    public function index() {
        try {
            return $this->personsRepository->index();
        }catch(Exception $e) {
            throw new Exception('Nu e bn');
        }
    }

    public function store(PersonsRequestForm $formRequest) {
        try {
            $this->personsRepository->store($formRequest->validated());
        }
        catch (Exception $e) {
            throw $e->getMessage();
        }
    }

    public function show(int $id) {
        try {
            return $this->personsRepository->show($id);
        }catch(Exception $e) {
            throw $e->getMessage();
        }
    }

    public function update(PersonsRequestForm $formRequest) {
        try {
            return $this->personsRepository->update($formRequest->validated() ,$formRequest['id']);
        }catch(Exception $e) {
            throw $e->getMessage();
        }
    }

    public function destroy(int $id) {
        try {
            return $this->personsRepository->destroy($id);
        }catch(Exception $e) {
            throw $e->getMessage();
        }
    }
}
