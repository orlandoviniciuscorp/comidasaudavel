<?php
/**
 * Created by PhpStorm.
 * User: Orlando
 * Date: 16/08/2019
 * Time: 23:01
 */

namespace App\Http\Controllers;


use App\Data\Repositories\Baskets as BasketsRepository;
use App\Http\Requests\Basket as BasketRequest;
use Illuminate\Http\Request;

class Baskets extends Controller
{

    private $repository;

    public function __construct(BasketsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        return view('baskets.index')->with('baskets',$this->repository->search($request));
    }

    public function create()
    {
        return view('baskets.form',['basket'=>$this->repository->new()]);
    }

    /**
     * @param BasketsRequest $
     */
    public function store(BasketRequest $basketRequest)
    {
        $this->repository->createFromRequest($basketRequest);

        return redirect()
            ->route('baskets.index')
            ->with($this->getSuccessMessage());
    }

    public function show($basketId)
    {

         return view('baskets.form')->with('basket',$this->repository->findById($basketId));
    }
}