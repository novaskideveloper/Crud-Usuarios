<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user;

    /**
     * UserController constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = $this->user->paginate();

        return view('usuarios.index', compact('users'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('usuarios.create');
    }


    public function store(UserRequest $request)
    {
        /** @var  $user User */
        $user = $this->user->create($request->all());

        return redirect()->route('usuarios.index');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        /** @var  $user User */
        $user = $this->user->find($id);

        return view('usuarios.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $user = $this->user->find($id);

        return view('usuarios.edit', compact('user'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        /** @var  $user User */
        $user = $this->user->find($id);

        $user->save($request->all());

        return redirect()->route('usuarios.index');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = $this->user->find($id);
        $user->delete();

        return redirect()->route('usuarios.index');
    }

    public function remove($id)
    {
        $user = $this->user->find($id);

        return view('usuarios.remove', compact('user'));
    }
}
