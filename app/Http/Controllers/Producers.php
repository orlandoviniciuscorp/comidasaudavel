<?php
/**
 * Created by PhpStorm.
 * User: Orlando
 * Date: 16/08/2019
 * Time: 23:01
 */

namespace App\Http\Controllers;


use App\Data\Repositories\Producers as ProducersRepository;
use App\Http\Requests\Producer as ProducesRequest;
use Illuminate\Http\Request;

class Producers extends Controller
{

    private $repository;

    public function __construct(ProducersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        return view('producers.index')->with('producers',$this->repository->search($request));
    }

    public function create()
    {
        return view('producers.form',['producer'=>$this->repository->new()]);
    }

    /**
     * @param ProducersRequest $
     */
    public function store(ProducerRequest $producerRequest)
    {
        $this->repository->createFromRequest($producerRequest);

        return redirect()
            ->route('producers.index')
            ->with($this->getSuccessMessage());
    }

    public function show($producerId)
    {

         return view('producers.form')->with('producer',$this->repository->findById($producerId));
    }
}