<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;
use App\Models\ContatoAluno;
class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = Aluno::all();
        $aluno_data_nascimento_1005 = Aluno::where('data_nascimento', '=', '2005-05-10')->get();
        $aluno_data_nascimento_0101 = Aluno::where('data_nascimento', '<', '2006-01-01')->get();
        $alunos_datas_between = Aluno::wherebetween('data_nascimento', ['2004-01-01', '2006-12-31'])->get();
        $alunos_nome_silva = Aluno::where('nome', 'like', '%Silva%')->get();
        $alunos_data_nascimento_email = Aluno::where('data_nascimento', '>' , '2005-01-01')->where('email', 'like', '%gmail%')->get();
        return view('aluno.index', compact('alunos', 'aluno_data_nascimento_1005', 'aluno_data_nascimento_0101', 'alunos_datas_between', 'alunos_nome_silva', 'alunos_data_nascimento_email'));

    }

    public function contato()
        {
            return view('aluno.contato');
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $turmas = Turma::all();
        return view('aluno.create', compact('turmas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $foto = null;
        if($request->hasFile('foto')){
        $nome_arquivo = pathinfo($request->foto->getClientOriginalName(), PATHINFO_FILENAME);
        $extensao_arquivo = $request->foto->getClientOriginalExtension();
        $foto = $nome_arquivo.'-'.time() . '.' . $extensao_arquivo;

        $request->foto->move(public_path('imagens'), $foto);
        }

        $aluno = Aluno::create([
            'matricula' => $request->matricula,
            'nome' => $request->nome,
            'email' => $request->email,
            'data_nascimento' => $request->data_nascimento,
            'foto' => 'imagens/' . $foto
        ]);
        
        $aluno->turmas()->attach($request->turma_id);

        $aluno->contatoAluno()->create([
            'telefone' => $request->telefone
        ]);

        return redirect()->route('aluno.index');
    }

    
    public function show(string $id)
    {
        
        $aluno = Aluno::find($id);
        return view('aluno.show', compact('aluno'));
        $aluno = Aluno::where('data_nascimento', '!=', 'Fusca')->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aluno = Aluno::find($id);
        $turmas = Turma::all();
        return view('aluno.edit', compact('aluno', 'turmas'));
    }

    /**
     * Update the specified resource in storage. */ 
     public function update(Request $request, string $id)
    {   
        $foto = null;
        if($request->hasFile('foto')){
            $nome_arquivo = pathinfo($request->foto->getClientOriginalName(), PATHINFO_FILENAME);
            $extensao_arquivo = $request->foto->getClientOriginalExtension();
            $foto = $nome_arquivo.'-'.time() . '-' . time() . '-' . $extensao_arquivo;

            $request->foto->move(public_path('imagens'), $foto);
        }

        $aluno = Aluno::find($id);
        $aluno->update([
            'matricula' => $request->matricula,
            'nome' => $request->nome,
            'email' => $request->email,
            'data_nascimento' => $request->data_nascimento,
            'foto' => 'imagens/' . $foto
        ]); 

        
            $aluno->turmas()->syncWithoutDetaching($request->turma_id);

            $aluno->contatoAluno()->update([
                'telefone' => $request->telefone
            ]);
            
            return redirect()->route(route: 'aluno.index');
    }

     /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $aluno = Aluno::find($id);
       $aluno ->delete();
       return redirect()->route(route:'aluno.index');
    }
}
